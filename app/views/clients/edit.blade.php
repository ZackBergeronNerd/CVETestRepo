@extends('layouts.dashboard')

@section('title')
	Client Details
@stop

@section('content')
<div class="row margin-bottom">
	<div class="col-lg-12">
		<div class="pull-right">
			<a href="/clients" class="btn btn-info"><i class="fa fa-users"></i> My Clients</a>
		</div>
	</div>
</div>
<div class="row client-details">
	<div class="col-lg-8 col-lg-offset-2">
		<section class="panel">
			<header class="panel-heading">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<h3 class="no-margin margin-bottom">
                            Client Details
                        </h3>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
                        @if($user_client->is_owner)
						    <button class="btn btn-danger delete-client pull-right" data-id="{{ $client->id }}"><i class="fa fa-ban"></i> Delete</button>
                        @endif
						<a data-toggle="modal" href="#phoneModal" class="btn btn-primary pull-right visible-xs" style="margin-right:10px"><i class="fa fa-phone"></i> Call</a>
						<a href="mailto:{{ $client->email }}" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-envelope"></i> Email</a>
						<!--<a href="/clients/{{ $client->id }}/notes/" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-pencil"></i> Notes</a>
						<a href="/clients/{{ $client->id }}/clearview/" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-bar-chart-o"></i> Clearview</a>-->
						<a href="/clients/{{ $client->id }}/send_website/" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-archive"></i> Send Package</a>
					</div>
				</div>
			</header>
			<div class="panel-body">
				{{ Form::model($client, array('method' => 'PATCH', 'route' => array('clients.update', $client->id))) }}
				<div class="row edit-client">
					<div class="col-lg-12">
						<h3>Basic Information <small id="changes" style="color:#ff6c60"></small></h3>
						<div class="row">
							<div class="col-lg-6">
								{{ Form::label('first_name', 'First name:', array('class' => 'control-label')) }}
								{{ Form::text('first_name', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('last_name', 'Last name:', array('class' => 'control-label')) }}
								{{ Form::text('last_name', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('email', 'Email:', array('class' => 'control-label')) }}
								{{ Form::text('email', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('phone_number', 'Phone number:', array('class' => 'control-label')) }}
								{{ Form::text('phone_number', null, array('data-mask' => '(999) 999-9999', 'class' => 'form-control input-block-level')) }}
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-md-6">
										{{ Form::label('client_status_id', 'Status:', array('class' => 'control-label')) }}
										{{ Form::select('client_status_id', $client_statuses, null, array('class' => 'form-control  select-block')); }}
									</div>
									<div class="col-md-6">
										{{ Form::label('client_temperature_id', 'Temperature:', array('class' => 'control-label')) }}
										{{ Form::select('client_temperature_id', $client_temps, null, array('class' => 'form-control')); }}
									</div>
								</div>
								{{ Form::label('client_type_id', 'Type:', array('class' => 'control-label')) }}
								{{ Form::select('client_type_id', $client_types, null, array('class' => 'form-control select-block')); }}
								{{ Form::label('client_source_id', 'Source:', array('class' => 'control-label')) }}
								{{ Form::select('client_source_id', $client_sources, null, array('class' => 'form-control  select-block')); }}
								{{ Form::label('referred_by', 'Referred by:', array('class' => 'control-label')) }}
								{{ Form::text('referred_by', null, array('class' => 'form-control input-block-level')) }}
							</div>
						</div>
						<h3>Location Information</h3>
						<div class="row">
							<div class="col-lg-6">
								{{ Form::label('address_1', 'Address:', array('class' => 'control-label')) }}
								{{ Form::text('address_1', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('address_2', 'Address Line 2:', array('class' => 'control-label')) }}
								{{ Form::text('address_2', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('address_3', 'Address Line 3:', array('class' => 'control-label')) }}
								{{ Form::text('address_3', null, array('class' => 'form-control input-block-level')) }}
							</div>
							<div class="col-lg-6">
								{{ Form::label('city', 'City:', array('class' => 'control-label')) }}
								{{ Form::text('city', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('state', 'State / Province:', array('class' => 'control-label')) }}
								{{ Form::text('state', null, array('class' => 'form-control input-block-level')) }}
								<div class="row">
									<div class="col-lg-4">
										{{ Form::label('zip', 'Zip Code:', array('class' => 'control-label')) }}
										{{ Form::text('zip', null, array('class' => 'form-control input-block-level')) }}
									</div>
									<div class="col-lg-8">
										{{ Form::label('country', 'Country:', array('class' => 'control-label')) }}
										{{ Form::text('country', null, array('class' => 'form-control input-block-level')) }}
									</div>
								</div>
							</div>
						</div>
						<div class="row margin-top">
							<div class="col-lg-6 col-lg-offset-6">
                                @if($user_client->can_write || $user_client->is_owner)
								{{ Form::submit('Save', array('id' => 'save_details', 'class' => 'btn btn-primary btn-block')) }}
                                @endif
							</div>
						</div>
					</div>
					<div class="col-lg-2">

					</div>
				</div>
				{{ Form::close() }}
			</div>
		</section>
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
						{{ Form::submit('Create a New Note', array('id' => 'create_note', 'class' => 'btn btn-primary btn-block')) }}
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
<div ng-app="cve" ng-controller="ClientTimelineCtrl as timeline" ng-init="init(10, 0, {{ $client->id }})">
    <div class="row" ng-hide="timeline.packages.length">
        <div class="col-md-12">
            <h3 class="text-center">No Package Activity</h3>
        </div>
    </div>
    <div class="row" ng-show="timeline.packages.length">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="row margin-bottom">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="no-margin-top"><a name="clearview" id="clearview"></a>{{ $client->first_name }}'s Clearview</h3>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 5px">
                                    <label for="packageSelect" class="header-label thin-font">Select Package: </label>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px">
                                    <span class="nullable">
                                        <select class="form-control no-margin"
                                            ng-model="activityPackage"
                                            ng-change="activitySelected()"
                                            ng-options="package.id as package.name for package in timeline.packages">
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="no-margin-top">Package Overview</h4>
                                    </div>
                                </div>
                                <div class="row state-overview" >
                                    <div class="col-lg-6 col-sm-6">
                                        <section class="panel">
                                            <div class="symbol terques">
                                                <i class="fa fa-folder-open"></i>
                                            </div>
                                            <div class="value">
                                                <h1 class="count"><% timeline.overview.total_opens %></h1>
                                                <p>Total Opens</p>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <section class="panel">
                                            <div class="symbol red">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                            <div class="value">
                                                <h1 class=" count2"><% timeline.overview.total_pageviews %></h1>
                                                <p>Total Pageviews</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!--
                                    <div class="col-lg-6 col-sm-6">
                                        <section class="panel">
                                            <div class="symbol yellow">
                                                <i class="fa fa-share"></i>
                                            </div>
                                            <div class="value">
                                                <h1 class=" count2"><% timeline.overview.total_sends %></h1>
                                                <p>Total Sends</p>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <section class="panel">
                                            <div class="symbol blue">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                            <div class="value">
                                                <h1 class=" count3"><% timeline.overview.open_rate %>%</h1>
                                                <p>Open Rate</p>
                                            </div>
                                        </section>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @if(count(Auth::user()->user_website()->get()))
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <div class="panel-body progress-panel" style="padding:10px">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="task-progress">
                                            <h4 class="thin-font">Page Viewing Activity</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $first = 1;
                            foreach(Auth::user()->user_website()->get() as $user_website) {
                                $website_page_opens = $client->page_open_activity($user_website->id);
                                //dd($website_page_opens);
                                if($website_page_opens) {
                                    if($first) {
                                        echo '<table id="pageviews_'.$user_website->id.'" class="table table-hover personal-task">';
                                    } else {
                                        echo '<table id="pageviews_'.$user_website->id.'" class="table table-hover personal-task hide">';
                                    }

                                    echo '	<thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>First Viewed</th>
                                                    <th>Last Viewed</th>
                                                    <th>Views</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                    foreach($website_page_opens['website_opened_pages'] as $opened_page) {
                                        echo "<tr>";
                                        echo '<td>' . $opened_page['page_title'] . '</td>';
                                        echo '<td style="text-align:left">'.$opened_page['first_view'].'</td>';
                                        echo '<td style="text-align:left">'.$opened_page['last_view'].'</td>';
                                        echo '<td style="text-align:left"><span class="badge bg-primary">'.$opened_page['page_opens'].'</span></td>';
                                        echo "</tr>";
                                    }
                                    echo '	</tbody>
                                            </table>';
                                } else {
                                    if($first) {
                                        echo '<h4 id="pageviews_'.$user_website->id.'" class="text-center personal-task">No pageviews for this package</h4>';
                                    } else {
                                        echo '<h4 id="pageviews_'.$user_website->id.'" class="text-center personal-task hide">No pageviews for this package</h4>';
                                    }
                                }

                                $first = 0;
                            }
                        ?>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel" >
                            <header class="panel-heading" style="font-size:24px;">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <h4 class="thin-font">Recent Activity</h4>
                                    </div>
                                </div>
                            </header>
                            <div class="panel-body profile-activity"
                                infinite-scroll="loadMore()"
                                infinite-scroll-distance="0"
                                infinite-scroll-disabled="busy">
                                <div ng-repeat="entry in timeline.entries" class="activity <% entry.color %>">
                                    <span>
                                        <i class="fa <% entry.icon %>"></i>
                                    </span>
                                    <div class="activity-desk" >
                                        <div class="panel" style="background-color:transparent">
                                            <div class="panel-body" style="padding:5px">
                                                <h4 class="text-left" ng-bind-html="entry.message"></h4>
                                                <p style="color:#AAA"><% entry.date %> <i class="fa fa-clock-o"></i> <% entry.time %></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div ng-show="busy"><h4 class="text-center no-margin-top padding-bottom">Loading More...</h4></div>
                            <div ng-show="finished"><h4 class="text-center no-margin-top padding-bottom">All Activity has been loaded...</h4></div>
                        </section>
                    </div>
                </div>

                @else
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oops! You don't have any packages yet. Let's get started building one for you!</h3>
                        <p class="text-center"><a href="#" class="btn btn-lg btn-primary margin-top"><i class="fa fa-archive"></i> Click Here to get Started</a></p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Give {{ $client->first_name }} a call</h4>
			</div>
			<div class="modal-body text-center">
				@if(!is_null($client->phone_number))
				<h3>{{ $client->first_name }}'s Phone Number is:</h3>
				<h2>{{ $client->phone_number }}</h2>
				<h4 style="margin-top:25px">On a mobile phone?</h4>
				<a href="tel:{{ $client->clean_phone() }}" class="btn btn-lg btn-primary"><i class="fa fa-phone"></i> Call {{ $client->first_name }} Now</a>
				@else
				<h3>Whoops! {{ $client->first_name }} doesn't have a phone number in their record.</h3>
				@endif
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
@stop

@section("javascript")
	<script type="text/javascript" src="/flatlab/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-sanitize.js"></script>
	<script type="text/javascript" src="/angular/ng-infinite-scroll.min.js"></script>
  	<script type="text/javascript" src="/angular/cve.js"></script>
	<script>
		$(document).ready(function() {
            @if(!$user_client->is_owner && !$user_client->can_write)
                $(".edit-client .form-control").attr("disabled", "disabled");
            @endif

			$(".delete-client").click(function() {
				var confirm = window.confirm('You are about to permanently delete this client and all of their data; including notes and package activity.');

				if(confirm) {
					var client_id = $(this).attr('data-id');

					$.post('/clients/' + client_id, {'_method' : 'DELETE'}, function(data) {
						window.location.replace('/clients');
					}).fail(function(data) {
						console.log(data);
					});
				}
			});

			$(".client-details .form-control").change(function() {
				$("#create_note").val("Save Changes First").prop('disabled', true);
				$("#changes").html("Make sure to click the Save button to save your changes!");
				$("#save_details").val("Save Changes").fadeTo('fast', 0.2).fadeTo('fast', 1).fadeTo('fast', 0.2).fadeTo('fast', 1).fadeTo('fast', 0.2).fadeTo('fast', 1);
			});

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