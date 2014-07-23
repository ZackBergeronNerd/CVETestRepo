@extends('layouts.dashboard')

@section('title')
	Add a new Client
@stop

@section('content')
		{{ Form::open(array('route' => 'clients.store')) }}
		<div class="row create-client">
			<div class="col-lg-8 col-lg-offset-2">
				<h3 class="no-margin-top">Add New Client</h3>
				<section class="panel">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								{{ Form::label('first_name', 'First name:', array('class' => 'control-label')) }}
								{{ Form::text('first_name', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('last_name', 'Last name:', array('class' => 'control-label')) }}
								{{ Form::text('last_name', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('email', 'Email:', array('class' => 'control-label')) }}
								{{ Form::text('email', null, array('class' => 'form-control input-block-level')) }}
								{{ Form::label('phone_number', 'Phone Number:', array('class' => 'control-label')) }}
								{{ Form::text('phone_number', null, array('data-mask' => '(999) 999-9999', 'class' => 'form-control input-block-level')) }}
							</div>
							<div class="col-lg-6">
								{{ Form::label('client_type_id', 'Type:', array('class' => 'control-label')) }}
								{{ Form::select('client_type_id', $client_types, null, array('class' => 'form-control')); }}
								{{ Form::label('client_status_id', 'Status:', array('class' => 'control-label')) }}
								{{ Form::select('client_status_id', $client_statuses, null, array('class' => 'form-control')); }}
								{{ Form::label('client_source_id', 'Source:', array('class' => 'control-label')) }}
								{{ Form::select('client_source_id', $client_sources, null, array('class' => 'form-control')); }}
								{{ Form::label('client_temperature_id', 'Temperature:', array('class' => 'control-label')) }}
								{{ Form::select('client_temperature_id', $client_temps, null, array('class' => 'form-control')); }}
							</div>
						</div>
						<div class="row" style="margin-top: 10px">
							<div class="col-lg-12">
								{{ Form::submit('Create Client', array('class' => 'btn btn-primary btn-large btn-block')) }}
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		{{ Form::close() }}
@stop

@section('javascript')
	<script type="text/javascript" src="/flatlab/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
@stop