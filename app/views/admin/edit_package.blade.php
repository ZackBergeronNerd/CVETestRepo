@extends('layouts.dashboard')

@section('title')
Edit {{ $user_website->website->name }}
@stop

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <section class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8">
                        <h4><i class="fa fa-archive"></i>&nbsp; Modify {{ $user_website->website->name }}</h4>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-danger btn-space btn-block delete-package" data-id="{{ $user_website->id }}"<i class="fa fa-ban"></i> Delete Package</button>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                {{ Form::open(array('method' => 'PUT', 'url' => '/admin/setup_package/' . $user_website->website->id, 'class' => 'form-horizontal' )) }}
                <div class="form-group">
                    {{ Form::label('user_id', 'Package Owner:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-6">
                        {{ Form::select('user_id', $user_list, $user_website->user_id, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Package Name:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-6">
                        {{ Form::text('name', $user_website->website->name, array('class' => 'form-control input-block-level', 'placeholder' => 'Enter name of your package')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('domain', 'Domain Name:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-4" style="padding-right: 0">
                        {{ Form::text('domain', str_replace(".cve.io", "", $user_website->website->domain), array('class' => 'form-control input-block-level', 'placeholder' => 'Enter your domain')) }}
                    </div>
                    <div class="col-md-4" style="padding-left: 4px;font-size:16px">
                        <p style="padding-top:12px;margin-bottom:0;"><strong>.cve.io</strong></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="control-label">Settings:</label>
                    </div>
                    <div class="col-md-3">
                        <label for="is_private" class="control-label">
                            @if($user_website->website->is_private)
                            <input name="is_private" id="is_private" type="checkbox" value="1" checked> Private Package
                            @else
                            <input name="is_private" id="is_private" type="checkbox" value="1"> Private Package
                            @endif
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="disable_contact" class="control-label">
                            @if($user_website->website->disable_contact)
                            <input name="disable_contact" id="disable_contact" type="checkbox" value="1" checked> Disable Contact Information
                            @else
                            <input name="disable_contact" id="disable_contact" type="checkbox" value="1"> Disable Contact Information
                            @endif
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-lg-6">
                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-archive"></i> Save Package</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <section class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8">
                        <h4 ><i class="fa fa-globe"></i>&nbsp; Partner Packages</h4>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-info btn-block" href="/admin/setup_package/{{ $user_website->website->id }}/add_user"><i class="fa fa-user"></i> Create Partner Package</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    @if(count($user_websites))
                    @foreach($user_websites as $user_website)
                    <div class="col-lg-6 col-sm-6" id="user_website-{{ $user_website->id }}">
                        <section class="panel" style="background-color: #f1f2f7">
                            <div class="twt-feed" style="background-color: #e56b60">
                                <h1>{{ $user_website->website->name }}</h1>
                                <p>{{ $user_website->subdomain}}.{{ $user_website->website->domain }}</p>
                                @if(!is_null($user_website->user()->first()->details()->first()->photo))
                                <p class="text-center">
                                    <img class="img-circle" src="{{ Helpers::timthumb('uploads/users/' . $user_website->user()->first()->details()->first()->photo, 100, 100) }}">
                                </p>
                                @else
                                <h1 style="font-size: 48px"><i class="fa fa-archive"></i></h1>
                                @endif
                            </div>
                            <div class="weather-category twt-category" style="margin-top: 15px">
                                <ul>
                                    <li class="active">
                                        <h5>{{ Clearview::sends_by_website($user_website->id) }}</h5>
                                        Sends
                                    </li>
                                    <li>
                                        <h5>{{ Clearview::opens_by_website($user_website->id) }}</h5>
                                        Opens
                                    </li>
                                    <li>
                                        <h5>{{ Clearview::page_opens_by_website($user_website->id) }}</h5>
                                        Pageviews
                                    </li>
                                </ul>
                            </div>
                            <footer class="twt-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if(is_null($user_website->notify_on_change))
                                            <a class="btn btn-space btn-info btn-block" href="/admin/enable_notifications/{{ $user_website->id }}">Enable Change Notifications</a>
                                        @else
                                            <button type="button" class="btn btn-space btn-info btn-block disable_notifications" data-id="{{ $user_website->id }}">Disable Change Notifications</button>
                                            <a id="enable_notifications-{{ $user_website->id }}" class="btn btn-space btn-info btn-block hide" href="/admin/enable_notifications/{{ $user_website->id }}">Enable Change Notifications</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="row margin-top">
                                    <div class="col-md-6">
                                        <a href="http://{{ $user_website->subdomain }}.{{ $user_website->website->domain }}" target="_blank" class="btn btn-space btn-info btn-block" ><i class="fa fa-desktop"></i> View</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-danger btn-space btn-block remove-partner" data-id="{{ $user_website->id }}"<i class="fa fa-ban"></i> Remove</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-12">
                        <h3>There don't seem to be any packages.</h3>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
@stop


@section('javascript')
<script>
    $(function() {
        $(".remove-partner").click(function() {
            var user_website_id = $(this).data("id");
            var delete_confirm = confirm("You are about to permanently delete this partner package and all its activity!\n\nClick 'OK' to continue or 'Cancel' to go back.");
            if(delete_confirm) {
                $.ajax({
                    url: '/user_websites/' + user_website_id,
                    type: 'DELETE',
                    success: function(result) {
                        $("#user_website-" + user_website_id).fadeTo("slow", 0, function() {
                            $(this).remove();
                        });
                    },
                    fail: function() {
                        alert("There was an error deleting that partner package!");
                    }
                });
            }
        });

        $(".delete-package").click(function() {
            var user_website_id = $(this).data("id");
            var delete_confirm = confirm("You are about to permanently delete this package and all its activity and associated partner packages!\n\nClick 'OK' to continue or 'Cancel' to go back.");
            if(delete_confirm) {
                $.ajax({
                    url: '/admin/setup_package/' + user_website_id,
                    type: 'DELETE',
                    success: function(result) {
                        document.location = "/admin/manage_packages";
                    },
                    fail: function() {
                        alert("There was an error deleting that package!");
                    }
                });
            }
        });
    });
</script>
@stop