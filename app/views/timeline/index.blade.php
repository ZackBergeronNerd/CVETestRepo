@extends('layouts.dashboard')

@section('title')
	Clearview Timeline
@stop

@section('content')
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<h3 class="text-center no-margin-top">Clearview Timeline</h3>
		<section class="panel" ng-app="cve" ng-controller="TimelineCtrl as timeline" ng-init="init(10, 0)">
			<header class="panel-heading" style="font-size:24px;">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<h4 class="thin-font">Recent Clearview Activity</h4>
					</div>
					<div class="col-md-4 col-sm-4">
						<span class="tools">
							<select class="form-control no-margin"
								ng-model="activityPackage"
								ng-change="activitySelected()"
								ng-options="package.id as package.name for package in timeline.packages">
							</select>
						</span>
					</div>
				</div>
			</header>
			<div class="panel-body profile-activity"
				infinite-scroll="loadMore()"
				infinite-scroll-distance="0"
				infinite-scroll-disabled="busy">
				<div ng-repeat="entry in timeline.entries" class="activity <% entry.color %>">
					<span>
						<i class="fa <% entry.icon %>"></i>
					</span>
					<div class="activity-desk" >
						<div class="panel" style="background-color:transparent">
							<div class="panel-body" style="padding:5px">
								<h4 class="text-left" ng-bind-html="entry.message"></h4>
								<p style="color:#AAA"><% entry.date %> <i class="fa fa-clock-o"></i> <% entry.time %></p>
								<p style="color:#AAA">Total Opens: <% entry.total_opens %></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div ng-show="busy"><h4 class="text-center no-margin-top padding-bottom">Loading More...</h4></div>
			<div ng-show="finished"><h4 class="text-center no-margin-top padding-bottom">All Activity has been loaded...</h4></div>
		</section>
	</div>
</div>
@stop

@section('javascript')
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-sanitize.js"></script>
	<script type="text/javascript" src="/angular/ng-infinite-scroll.min.js"></script>
  	<script type="text/javascript" src="/angular/cve.js"></script>
@stop