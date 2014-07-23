@extends('layouts.dashboard')

@section('title')
Setup a new Package
@stop

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <section class="panel panel-primary">
            <div class="panel-heading"><i class="fa fa-archive"></i>&nbsp; Setup a New Package</div>
            <div class="panel-body">
                {{ Form::open(array('method' => 'POST', 'url' => '/admin/setup_package', 'class' => 'form-horizontal' )) }}
                <div class="form-group">
                    {{ Form::label('user_id', 'Package Owner:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-6">
                        {{ Form::select('user_id', $user_list, null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Package Name:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-6">
                        {{ Form::text('name', null, array('class' => 'form-control input-block-level', 'placeholder' => 'Enter name of your package')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('domain', 'Domain Name:', array('class' => 'control-label col-md-3')) }}
                    <div class="col-md-4" style="padding-right: 0">
                        {{ Form::text('domain', null, array('class' => 'form-control input-block-level', 'placeholder' => 'Enter your domain')) }}
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
                            <input name="is_private" id="is_private" type="checkbox" value="1" checked> Private Package
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="disable_contact" class="control-label">
                            <input name="disable_contact" id="disable_contact" type="checkbox" value="1"> Disable Contact Information
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
@stop