@extends('layouts.dashboard')

@section('title')
Enable Change Notifications
@stop

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <section class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h4><i class="fa fa-archive"></i>&nbsp; Confirm Pages for {{ $user_website->website->name }}</h4>
                    </div>
                </div>
            </div>
            <div class="panel-body">
            	{{ Form::open(array('method' => 'POST', 'url' => '/admin/enable_notifications/' . $user_website->id, 'class' => 'form-horizontal' )) }}
            	<p>We have attempted to automatically pull all the different pages from your package. Please confirm that the pages below are correct and add any additional pages we might have missed. Please supply the full URL, example: http://{{ $user_website->website->domain }}/page-goes-here.html, each page needs to be on its own line.</p>
                
                <div class="form-group">
                	<div class="col-md-12">
		                <label for="pages">{{ $user_website->website->name }} Pages:</label>
		                <textarea name="pages" id="pages" rows="10" class="form-control input-block-level">{{ $pages }}</textarea>
		            </div>
	            </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-lg-6">
                        <button type="submit" class="btn btn-success btn-block">Enable Change Notifications</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
</div>
@stop