@extends('layouts.dashboard')

@section('title')
Edit Your Profile
@stop

@section('content')
<div class="row">
    <aside class="profile-nav col-md-3 col-md-4 col-sm-5">
        <section class="panel">
            @if(!is_null(Auth::user()->details()->first()->photo))
            <div id="current_photo" class="user-heading round">
                <a href="#">
                    <img alt="" src="{{ Helpers::timthumb('uploads/users/' . Auth::user()->details()->first()->photo, 200, 200) }}">
                </a>
            @elseif(!is_null(Auth::user()->details()->first()->fb_photo))
            <div id="current_photo" class="user-heading round">
                <a href="#">
                    <img alt="" src="{{ Helpers::timthumb('uploads/users/' . Auth::user()->details()->first()->fb_photo, 200, 200) }}">
                </a>
            @elseif(!is_null(Auth::user()->details()->first()->tw_photo))
            <div id="current_photo" class="user-heading round">
                <a href="#">
                    <img alt="" src="{{ Helpers::timthumb('uploads/users/' . Auth::user()->details()->first()->tw_photo, 200, 200) }}">
                </a>
            @else
            <div id="current_photo" class="user-heading">
                <h1><i class="fa fa-user"></i></h1>
            @endif
            <h1>{{ Auth::user()->name }}</h1>
            <p>{{ Auth::user()->email }}</p>
            @if(!is_null(Auth::user()->details()->first()->logo))
                <img src="{{ Helpers::timthumb('uploads/logos/' . Auth::user()->details()->first()->logo, 200, null) }}">
            @endif
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/profile"> <i class="fa fa-user"></i> Edit Profile</a></li>
                <li><a href="/settings"> <i class="fa fa-cog"></i> Edit Settings</a></li>
            </ul>
        </section>
    </aside>
    <aside class="profile-info col-lg-9 col-md-8 col-sm-7">
        <section class="panel panel-primary">
            <div class="panel-heading">Profile Information</div>
            <div class="panel-body bio-graph-info">
                {{ Form::model(Auth::user(), array('method' => 'POST', 'url' => '/update_profile', 'class' => 'form-horizontal' )) }}
                    <div class="form-group">
                        {{ Form::label('name', 'Display Name:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::text('name', null, array('class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('first_name', 'First Name:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::text('first_name', null, array('class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('last_name', 'Last Name:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::text('last_name', null, array('class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_number', 'Office Number:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::text('office_number', Auth::user()->details->office_number, array('class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('cell_number', 'Cell Number:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::text('cell_number', Auth::user()->details->cell_number, array('class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('company', 'Company:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::text('company', Auth::user()->details->company, array('class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('title', 'Job Title:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::text('title', Helpers::br2nl(Auth::user()->details->title), array('rows' => 3, 'class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('other_info', 'Other Information:', array('class' => 'control-label col-md-2')) }}
                        <div class="col-md-6">
                            {{ Form::textarea('other_info', Helpers::br2nl(Auth::user()->details->other_info), array('rows' => 3, 'class' => 'form-control input-block-level')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button type="submit" class="btn btn-success">Save Profile</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </section>
        <section>
            <div class="panel panel-primary">
                <div class="panel-heading">Change Profile Picture & Logo</div>
                <div class="panel-body">
                    {{ Form::open(array('method' => 'POST', 'url' => '/update_images', 'files' => true, 'class' => 'form-horizontal' )) }}

                        <div class="form-group">
                            <div class="col-md-2">
                                {{ Form::label('profile_picture', 'Profile Picture:', array('class' => 'control-label')) }}
                            </div>
                            <div class="col-md-6">
                                {{ Form::file('profile_picture', array('class' => 'form-control')) }}
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-block btn-danger" id="remove_photo"><i class="fa fa-ban"></i> Remove Current Photo</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                {{ Form::label('logo', 'Logo:', array('class' => 'control-label')) }}
                            </div>
                            <div class="col-md-6">
                                {{ Form::file('logo', array('class' => 'form-control')) }}
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-block btn-danger" id="remove_logo"><i class="fa fa-ban"></i> Remove Current Logo</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-info">Change Images</button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </section>
        <section>
            <div class="panel panel-primary">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">
                    <form method="POST" action="/change_password" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label  class="col-md-2 control-label">Current Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="current_pass" placeholder="Enter your current password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-2 control-label">New Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="new_pass" placeholder="Enter your new password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-2 control-label">Re-type New Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type your new password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-info">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </aside>
</div>
@stop

@section('javascript')
<script>
    $(document).ready(function() {
        $("#remove_photo").click(function() {
            $.getJSON('/users/' + {{ Auth::user()->id }} + '/remove_photo', function() {
                location.reload();
            }).fail(function() {
                alert('There was an error removing your photo');
            });
        });

        $("#remove_logo").click(function() {
            $.getJSON('/users/' + {{ Auth::user()->id }} + '/remove_logo', function() {
                location.reload();
            }).fail(function() {
                alert('There was an error removing your photo');
            });
        })
    })
</script>
@stop