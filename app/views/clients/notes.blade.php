@extends('layouts.dashboard')

@section('title')
	Client Notes
@stop

@section('content')
<div class="row margin-bottom">
	<div class="col-lg-12">
		<div class="pull-right">
			<a href="/clients" class="btn btn-info"><i class="fa fa-users"></i> Client Manager</a>
			<a href="/clients/{{ $client->id }}" class="btn btn-info"><i class="fa fa-user"></i> {{ $client->first_name }}'s Details</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<section class="panel">
			<header class="panel-heading">
				<h3 class="no-margin">Notes</h3>
			</header>
			<div class="panel-body">
				<p><strong>Add a new note:</strong></p>
				{{ Form::open(array('route' => 'client_notes.store')) }}
				<div class="row">
					<div class="col-lg-12">
						{{ Form::textarea('note', null, array('placeholder' => 'Type your note here', 'class' => 'form-control input-block-level', 'rows' => 4)) }}
						{{ Form::hidden('client_id', $client->id) }}
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-lg-4 col-lg-offset-8">
						{{ Form::submit('Create a New Note', array('class' => 'btn btn-primary btn-block')) }}
					</div>
				</div>
				{{ Form::close() }}
			</div>
		</section>
		@if(count($notes = $client->note()->orderBy('updated_at', 'DESC')->get()))
		<section class="panel">
			<header class="panel-heading">
				<h4 class="no-margin">Current Notes</h4>
			</header>
			<div class="panel-body">
				<?php $note_count = 0; ?>
				@foreach($notes as $note)
				<div id="note_{{ $note->id }}" class="padded-content light-border margin-bottom">
					<div class="row ">
						<div class="col-lg-3">
							<p class=""><strong>{{ date("m/d/y g:i a", strtotime($note->updated_at)) }}</strong></p>
						</div>
						<div class="col-lg-5">
							@if(strlen($note->note) > 30)
							<p class="" id="shortnote_{{ $note->id }}">{{ substr($note->note, 0, 30) }}...</p>
							@else
							<p class="" id="shortnote_{{ $note->id }}">{{ $note->note }}</p>
							@endif
						</div>
						<div class="col-lg-4">
							<div class="row ">
								<div class="col-lg-4">
									@if($note_count < 3)
									<button class="btn btn-block btn-xs btn-info show-note" data-id="{{ $note->id }}">Hide</button>
									@else
									<button class="btn btn-block btn-xs btn-info show-note" data-id="{{ $note->id }}">View</button>
									@endif
								</div>
								<div class="col-lg-4">
									<button class="btn btn-block btn-xs btn-info edit-note" data-id="{{ $note->id }}" id="editbutton_{{ $note->id }}">Edit</button>
								</div>
								<div class="col-lg-4">
									<button class="btn btn-block btn-xs btn-danger delete-note" data-id="{{ $note->id }}">Delete</button>
								</div>
							</div>
						</div>
					</div>
					@if($note_count < 3)
					<div class="row " id="fullnote_{{ $note->id }}">
					@else
					<div class="row hidden" id="fullnote_{{ $note->id }}">
					@endif
						<div class="col-lg-12 full-note">
							<p><strong>Full Note:</strong></p>
							<p id="viewnote_{{ $note->id }}">{{ nl2br($note->note) }}</p>
						</div>
					</div>
					<div class="hidden" id="editnote_{{ $note->id }}">
						{{ Form::model($note, array('method' => 'PATCH', 'route' => array('client_notes.update', $note->id), 'class' => 'update-note', 'data-id' => $note->id)) }}
						<div class="row margin-top">
							<div class="col-lg-12">
								{{ Form::textarea('note', null, array('placeholder' => 'Type your note here', 'class' => 'form-control input-block-level', 'rows' => 4)) }}
								{{ Form::hidden('client_id') }}
							</div>
						</div>
						<div class="row ">
							<div class="col-lg-3 col-lg-offset-9">
								{{ Form::submit('Save', array('class' => 'btn btn-block btn-primary margin-top margin-bottom')) }}
							</div>
						</div>
						{{ Form::close() }}
					</div>
				</div>
				<?php $note_count++; ?>
				@endforeach
			</div>
		</section>
		@endif
		</div>	
	</div>
</div>
@stop

@section("javascript")
	<script>
		$(document).ready(function() {

			$(".show-note").click(function() {
				var note_id = $(this).attr('data-id');
				var state = $(this).html();

				if(state == "View") {
					$("#fullnote_"+note_id).show("fast").removeClass('hidden');
					$(this).html("Hide");
				} else {
					$("#fullnote_"+note_id).hide("fast");
					$(this).html("View");
				}

			});

			$(".edit-note").click(function() {
				var note_id = $(this).attr('data-id');
				var state = $(this).html();

				if(state == "Edit") {
					$("#editnote_"+note_id).show("fast").removeClass('hidden');
					$(this).html("Hide");
				} else {
					$("#editnote_"+note_id).hide("fast");
					$(this).html("Edit");
				}

			});

			$(".update-note").submit(function(e) {
				e.preventDefault();

				var fields = $(this).serialize();
				var note_id = $(this).attr('data-id');

				$.post('/client_notes/' + note_id, fields, function(data) {
					$("#editnote_"+note_id).hide("fast");
					$("#editbutton_"+note_id).html("Edit");

					$("#viewnote_"+note_id).html(data.note);
					$("#shortnote_"+note_id).html(data.short_note);

				}).fail(function(data) {
					console.log(data);
				});
			});

			$(".delete-note").click(function() {
				var note_id = $(this).attr('data-id');

				$.post('/client_notes/' + note_id, {'_method' : 'DELETE'}, function(data) {
					$("#note_"+note_id).fadeOut("slow", function() { $(this).remove(); });
				}).fail(function(data) {
					console.log(data);
				});
			});
		});
	</script>
@stop