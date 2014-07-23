@extends('layouts.dashboard')

@section('title')
Manage Packages
@stop

@section('content')
<div class="row margin-bottom">
    <div class="col-md-10">
        <h3 class="no-margin-top">Manage Packages</h3>
    </div>
    <div class="col-md-2">
        <a href="/admin/setup_package" class="btn btn-block btn-primary"><i class="fa fa-archive"></i> Setup a Package</a>
    </div>
</div>
<div class="row">
    @if(count($user_websites))
    @foreach($user_websites as $user_website)
    <div class="col-md-4 col-sm-6" id="user_website-{{ $user_website->id }}">
        <section class="panel">
            <div class="twt-feed" style="background-color: #e56b60">
                <h1>{{ $user_website->website->name }}</h1>
                <p>{{ $user_website->website->domain }}</p>
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
                        <a href="http://{{ $user_website->website->domain }}" target="_blank" class="btn btn-space btn-info btn-block" ><i class="fa fa-desktop"></i> View</a>
                    </div>
                    <div class="col-md-6">
                        <a href="/admin/setup_package/{{ $user_website->website->id }}" class="btn btn-space btn-info btn-block" ><i class="fa fa-gear"></i> Edit</a>
                    </div>
                </div>
                <div class="row margin-top">
                    <div class="col-md-6">
                        <a class="btn btn-space btn-info btn-block" href="/admin/setup_package/{{ $user_website->website->id }}/add_user"><i class="fa fa-user"></i> Add Partner</a>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-danger btn-space btn-block delete-package" data-id="{{ $user_website->id }}"<i class="fa fa-ban-circle"></i> Delete</button>
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
@stop

@section('javascript')
    <script>
        $(document).ready(function() {
            $(".disable_notifications").click(function() {
                var user_website_id = $(this).data("id");
                var button = $(this);
                $.get('/admin/disable_notifications/' + user_website_id, function(data) {
                    button.addClass("hide");
                    $("#enable_notifications-" + user_website_id).removeClass("hide");
                }).fail(function() {
                    alert("Failed Disabling Notifications");
                });
            });

            $(".delete-package").click(function() {
                var user_website_id = $(this).data("id");
                var delete_confirm = confirm("You are about to permanently delete this package and all its activity and associated partner packages!\n\nClick 'OK' to continue or 'Cancel' to go back.");
                if(delete_confirm) {
                    $.ajax({
                        url: '/admin/setup_package/' + user_website_id,
                        type: 'DELETE',
                        success: function(result) {
                            $("#user_website-" + user_website_id).fadeTo("slow", 0, function() {
                                $(this).remove();
                            });
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