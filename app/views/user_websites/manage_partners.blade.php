@extends('layouts.dashboard')

@section('title')
Setup a new Package
@stop

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <section class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h4><i class="fa fa-archive"></i>&nbsp; Add a new partner to your {{ $user_website->website->name }} package.</h4>
                        <p>To invite a partner to help you market this property, send them an invitation email for a free Clearview Elite partner account.</p>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                {{ Form::open(array('method' => 'POST', 'url' => '/user_websites/' . $user_website->id . '/manage_partners', 'class' => 'form-horizontal' )) }}
                <div class="form-group">
                    {{ Form::label('partner_first', 'Partner First Name:', array('class' => 'control-label col-md-3', 'placeholder' => 'Enter their first name')) }}
                    <div class="col-md-6">
                        {{ Form::text('partner_first', null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('partner_last', 'Partner Last Name:', array('class' => 'control-label col-md-3', 'placeholder' => 'Enter their last name')) }}
                    <div class="col-md-6">
                        {{ Form::text('partner_last', null, array('class' => 'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('partner_email', 'Partner Email:', array('class' => 'control-label col-md-3', 'placeholder' => 'Enter their email address')) }}
                    <div class="col-md-6">
                        {{ Form::text('partner_email', null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('subdomain', 'Package Subdomain:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-4" style="padding-right: 0">
                        {{ Form::text('subdomain', null, array('class' => 'form-control input-block-level', 'placeholder' => 'Enter their subdomain')) }}
                    </div>
                    <div class="col-md-4" style="padding-left: 4px;font-size:16px">
                        <p style="padding-top:12px;margin-bottom:0;"><strong>.{{ $user_website->website->domain }}</strong></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-lg-6">
                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-users"></i> Send Partner Invitation</button>
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
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    @if(count($user_websites))
                    @foreach($user_websites as $user_website)
                    <div class="col-lg-4 col-sm-6" id="user_website-{{ $user_website->id }}">
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
                                    <div class="col-md-6">
                                        <a href="http://{{ $user_website->subdomain }}.{{ $user_website->website->domain }}" target="_blank" class="btn btn-space btn-info btn-block" ><i class="fa fa-desktop"></i> View</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-danger btn-space btn-block remove-partner" data-id="{{ $user_website->id }}"><i class="fa fa-ban"></i> Remove</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-12">
                        <h3>There don't seem to be any partner packages.</h3>
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
    });
</script>
@stop