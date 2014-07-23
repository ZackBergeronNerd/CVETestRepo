@extends('layouts.default')

@section('title')
Login
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

  <form class="form-signin" method="POST" action="/login">
    <h2 class="form-signin-heading">sign in now</h2>
    <div class="login-wrap">
    	<img class="img-responsive login-logo" src="/img/cve_logo.png" >
    	@include('plugins.status')
        @if(Session::has('invite_code'))
            <div class="text-center">
                <p>Sign in to accept your partner invitation</p>
            </div>
            <input type="text" name="email" class="form-control" placeholder="Email Address" value="{{ Session::get('partner_email') }}">
            <input type="password" name="password" class="form-control" placeholder="Password" autofocus>
        @else
            <input type="text" name="email" class="form-control" placeholder="Email Address" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
        @endif
        <label class="checkbox">
            <input type="checkbox" name="remember" value="1" checked> Remember me
            <span class="pull-right">
                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
            </span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        <p>or sign in or register via social network</p>
        <div class="login-social-link text-center">
          <a href="/login/fb" class="facebook"><i class="fa fa-facebook"></i> Facebook</a>
          <a href="/login/tw" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
        </div>
        <div class="registration text-center">
            <p>Don't have an account yet? <a href="/register">Create one!</a></p>
        </div>
    </div>

      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Forgot Password ?</h4>
                  </div>
                  <div class="modal-body">
                      <p>Enter your e-mail address below to reset your password.</p>
                      <input type="text" name="forgot_email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                  </div>
                  <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                      <button class="btn btn-success" type="button">Submit</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- modal -->
  </form>
</div>
@stop