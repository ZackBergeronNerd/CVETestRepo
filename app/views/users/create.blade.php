@extends('layouts.default')

@section('title')
Create an Account
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
  {{ Form::open(array('route' => 'users.store', 'class' => 'form-signin')) }}
    <h2 class="form-signin-heading">Create an Account</h2>
    <div class="login-wrap">
        <img class="img-responsive login-logo" src="/img/cve_logo.png" >
        @include('plugins.status')
        @if(Session::has('invite_code'))
        <p> Create a <em>FREE</em> account now to accept your partner invitation</p>
        @endif
        <p> Enter your details below:</p>
        @if(Session::has('invite_code'))
        {{ Form::text('name', Session::get('partner_first') . ' ' . Session::get('partner_last'), array('class' => 'form-control input-block-level', 'placeholder' => 'Full Name')) }}
        @else
        {{ Form::text('name', null, array('class' => 'form-control input-block-level', 'placeholder' => 'Full Name', 'autofocus' => 'true')) }}
        @endif
        {{ Form::text('email', Session::get('partner_email'), array('class' => 'form-control input-block-level', 'placeholder' => 'Email')) }}
        @if(Session::has('invite_code'))
        {{ Form::password('password', array('class' => 'form-control input-block-level', 'placeholder' => 'Password', 'autofocus' => 'true')) }}
        @else
        {{ Form::password('password', array('class' => 'form-control input-block-level', 'placeholder' => 'Password')) }}
        @endif

        <p> By creating an account you agree to our <a href="" target="_blank">Terms of Service</a> and <a href="" target="_blank">Privacy Policy</a></p>
        <button class="btn btn-lg btn-login btn-block" type="submit">Create Account</button>
        <div class="registration text-center">
            <p>Already Registered? <a class="" href="/login">Login</a></p>
        </div>
    </div>
  {{ Form::close() }}
</div>
@stop