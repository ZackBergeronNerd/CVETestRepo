@extends('layouts.dashboard')

@section('title')
	Client's Clearview
@stop

@section('content')
<div ng-app="timeline" ng-controller="TimelineCtrl as timeline" ng-init="init(5, 0, {{ $client->id }})">
	<div class="row margin-bottom">
		<div class="col-lg-8 col-md-6 col-sm-6">
			<div class="row">
				<div class="col-md-6">
					<h3 class="no-margin-top">{{ $client->first_name }}'s Clearview</h3>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6" style="padding-right: 5px">
							<label for="packageSelect" class="header-label thin-font">Select Package: </label>
						</div>
						<div class="col-md-6" style="padding-left: 0px">
							<select class="form-control no-margin"
								ng-model="activityPackage"
								ng-change="activitySelected()"
								ng-options="package.id as package.name for package in timeline.packages">
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="row">
				<div class="col-md-6">
					<a href="/clients" class="btn btn-info btn-block"><i class="fa fa-users"></i> Client Manager</a>
				</div>
				<div class="col-md-6">
					<a href="/clients/{{ $client->id }}" class="btn btn-info btn-block"><i class="fa fa-user"></i> {{ $client->first_name }}'s Details</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<h4 class="no-margin-top">Package Overview</h3>
						</div>
					</div>
					<div class="row state-overview" >
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol terques">
									<i class="fa fa-folder-open"></i>
								</div>
								<div class="value">
									<h1 class="count"><% timeline.overview.total_opens %></h1>
									<p>Total Opens</p>
								</div>
							</section>
						</div>
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol red">
									<i class="fa fa-eye"></i>
								</div>
								<div class="value">
									<h1 class=" count2"><% timeline.overview.total_pageviews %></h1>
									<p>Total Pageviews</p>
								</div>
							</section>
						</div>
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol yellow">
									<i class="fa fa-share"></i>
								</div>
								<div class="value">
									<h1 class=" count2"><% timeline.overview.total_sends %></h1>
									<p>Total Sends</p>
								</div>
							</section>
						</div>
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol blue">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="value">
									<h1 class=" count3"><% timeline.overview.open_rate %>%</h1>
									<p>Open Rate</p>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	@if(count(Auth::user()->user_package()->get()))
	<div class="row">
		<div class="col-lg-5 col-md-5">
			<section class="panel" >
				<header class="panel-heading" style="font-size:24px;">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<h4 class="thin-font">Recent Activity</h4>
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
								</div>
							</div>
						</div>
					</div>
				</div>
				<div ng-show="busy"><h4 class="text-center no-margin-top padding-bottom">Loading More...</h4></div>
				<div ng-show="finished"><h4 class="text-center no-margin-top padding-bottom">All Activity has been loaded...</h4></div>
			</section>
		</div>
		<div class="col-lg-7 col-md-7">
			<section class="panel">
				<div class="panel-body progress-panel" style="padding:10px">
					<div class="row">
						<div class="col-md-12">
							<div class="task-progress">
								<h4 class="thin-font">Page Viewing Activity</h1>
							</div>
						</div>
					</div>
				</div>
				<?php
				$first = 1;
				foreach(Auth::user()->user_package()->get() as $user_package) {
					$package_pageviews = $client->pageview_activity($user_package->id);

					if($package_pageviews) {
						if($first) {
							echo '<table id="pageviews_'.$user_package->id.'" class="table table-hover personal-task">';
						} else {
							echo '<table id="pageviews_'.$user_package->id.'" class="table table-hover personal-task hide">';
						}
						
						echo '	<thead>
									<tr>
										<th>Title</th>
										<th>First Viewed</th>
										<th>Last Viewed</th>
										<th>Views</th>
									</tr>
								</thead>
								<tbody>';
						foreach($package_pageviews['package_opened_pages'] as $opened_page) {
							echo "<tr>";
							echo '<td>' . $opened_page['page_title'] . '</td>';
							echo '<td style="text-align:left">'.$opened_page['first_view'].'</td>';
							echo '<td style="text-align:left">'.$opened_page['last_view'].'</td>';
							echo '<td style="text-align:left"><span class="badge bg-primary">'.$opened_page['page_opens'].'</span></td>';
							echo "</tr>";
						}
						echo '	</tbody>
								</table>';
					} else {
						if($first) {
							echo '<h4 id="pageviews_'.$user_package->id.'" class="text-center personal-task">No pageviews for this package</h4>';
						} else {
							echo '<h4 id="pageviews_'.$user_package->id.'" class="text-center personal-task hide">No pageviews for this package</h4>';
						}
					}

					$first = 0;
				}
			?>
			</section>
		</div>
	</div>
	@else
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Oops! You don't have any packages yet. Let's get started building one for you!</h3>
			<p class="text-center"><a href="#" class="btn btn-lg btn-primary margin-top"><i class="fa fa-archive"></i> Click Here to get Started</a></p>
		</div>
	</div>
	@endif
</div>
@stop

@section('javascript')
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-sanitize.js"></script>
	<script type="text/javascript" src="/angular/ng-infinite-scroll.min.js"></script>
  	<script type="text/javascript" src="/angular/client_timeline.js"></script>
	<script>
		$(function(){

			$("#pageviewSelect").change(function() {
				$(".personal-task").addClass('hide');
				$("#pageviews_" + this.value).removeClass('hide');
			});
		});
	</script>
@stop