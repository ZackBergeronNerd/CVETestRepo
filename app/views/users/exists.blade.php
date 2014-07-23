@extends('layouts.default')

@section('title')
Add Facebook Account
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
  <form class="form-signin" method="POST" action="/login/fb/exists">
    <h2 class="form-signin-heading">You have an account</h2>
    <div class="login-wrap">
    	<img class="img-responsive login-logo" src="/img/cve_logo.png" >
    	@include('plugins.status')
      <p class="text-center">The email associated with that Facebook account already has an account.<br>Enter your Clearview Express password below to login and sync with Facebook.</p>
      <input type="password" name="password" class="form-control" placeholder="Password" autofocus>
      <input type="hidden" name="code" value="{{ $code }}">
      <button class="btn btn-lg btn-login btn-block" type="submit">Login</button>
    </div>
  </form>
</div>
@stop