@extends('layouts.dashboard')

@section('title')
Add New {{ $user_website->website->name }} Partner Package
@stop

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <section class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h4><i class="fa fa-archive"></i>&nbsp; Add New {{ $user_website->website->name }} Partner Package</h4>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                {{ Form::open(array('method' => 'POST', 'url' => '/admin/setup_package/' . $user_website->website->id . '/add_user', 'class' => 'form-horizontal' )) }}
                <div class="form-group">
                    {{ Form::label('user_id', 'New Partner:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-6">
                        {{ Form::select('user_id', $user_list, null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('subdomain', 'Package Subdomain:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-4" style="padding-right: 0">
                        {{ Form::text('subdomain', null, array('class' => 'form-control input-block-level', 'placeholder' => 'Enter your subdomain')) }}
                    </div>
                    <div class="col-md-4" style="padding-left: 4px;font-size:16px">
                        <p style="padding-top:12px;margin-bottom:0;"><strong>.{{ $user_website->website->domain }}</strong></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-lg-6">
                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-users"></i> Create Partner Package</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
</div>
@stop