@extends('layouts.default')

@section('title')
Add Email
@stop

@section('body_class')
login-body
@stop

@section('css')
<style type="text/css">
	.login-logo {
		padding-bottom: 20px;
	}
</style>
@stop

@section('content')
<div class="container">
	{{ Form::open(array('class' => 'form-signin', 'method' => 'PUT', 'action' => array('UsersController@update', Auth::user()->id))) }}
  <form class="form-signin" method="POST" action="/users/{{ Auth::user()->id }}/update">
    <h2 class="form-signin-heading">Add Your Email</h2>
    <div class="login-wrap">
    	<img class="img-responsive login-logo" src="/img/cve_logo.png" >
    	@include('plugins.status')
      <p class="text-center">An email address is required to use Clearview Express, enter it below:</p>
      <input type="text" name="email" class="form-control" placeholder="Email Address" autofocus>
      <button class="btn btn-lg btn-login btn-block" type="submit">Add Email</button>
    </div>
  {{ Form::close() }}
</div>
@stop
