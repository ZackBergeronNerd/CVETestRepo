@extends('layouts.dashboard')

@section('title')
Create User
@stop

@section('content')
{{ Form::open(array('method' => 'POST', 'url' => '/admin/users/')) }}
	<div class="row create-client">
		<div class="col-lg-6 col-lg-offset-3">
			<h3 class="no-margin-top">Create New User</h3>
			<section class="panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							{{ Form::label('name', 'Display name:', array('class' => 'control-label')) }}
							{{ Form::text('name', null, array('class' => 'form-control input-block-level')) }}
							{{ Form::label('first_name', 'First name:', array('class' => 'control-label')) }}
							{{ Form::text('first_name', null, array('class' => 'form-control input-block-level')) }}
							{{ Form::label('last_name', 'Last name:', array('class' => 'control-label')) }}
							{{ Form::text('last_name', null, array('class' => 'form-control input-block-level')) }}
							{{ Form::label('email', 'Email:', array('class' => 'control-label')) }}
							{{ Form::text('email', null, array('class' => 'form-control input-block-level')) }}
							{{ Form::label('password', 'Password:', array('class' => 'control-label')) }}
							{{ Form::password('password', array('class' => 'form-control input-block-level')) }}	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							{{ Form::submit('Create User', array('class' => 'btn btn-primary btn-large btn-block margin-top')) }}
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
{{ Form::close() }}
@stop