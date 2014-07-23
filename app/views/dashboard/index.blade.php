@extends('layouts.dashboard')

@section('title')
	Dashboard
@stop

@section('content')
<div ng-app="cve">
	<!--
<div class="row">
	<div class="col-lg-12" ng-controller="DashboardCtrl as dashboard" ng-init="glance_init()">
		<section class="panel">
			<div class="panel-body">
				<div class="row margin-bottom">
					<div class="col-md-9">
						<h3 class="no-margin-top thin-font">Packages at a Glance</h3>
					</div>
					<div class="col-md-3">
						<span class="nullable">
                            <select class="form-control thin-font"
                                    ng-model="userWebsites"
                                    ng-change="websiteSelected()"
                                    ng-options="website.id as website.name for website in dashboard.websites">
                                <option value="">All Packages</option>
                            </select>
                        </span>
					</div>
				</div>
				<div class="row state-overview">
					<div class="col-lg-3 col-sm-6">
						<section class="panel">
							<div class="symbol terques">
								<i class="fa fa-folder-open"></i>
							</div>
							<div class="value">

								<h1 id="glance_opens" class="count"><% dashboard.overview.opens %></h1>
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
								<h1 id="glance_pageviews" class=" count2"><% dashboard.overview.pageviews %></h1>
								<p>Total Pageviews</p>
							</div>
						</section>
					</div>
					<div class="col-lg-3 col-sm-6">
						<section class="panel">
							<div class="symbol yellow">
								<i class="fa fa-bar-chart-o"></i>
							</div>
							<div class="value">
								<h1 id="glance_rate" class=" count3"><% dashboard.overview.open_rate %>%</h1>
								<p>Open Rate</p>
							</div>
						</section>
					</div>
					<div class="col-lg-3 col-sm-6">
						<section class="panel">
							<div class="symbol blue">
								<i class="fa fa-globe"></i>
							</div>
							<div class="value">
								<h1 id="glance_partner" class=" count4">TBD</h1>
								<p>Partner Packages Sent</p>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
-->
<div class="row">
	<div class="col-lg-5">
		<section class="panel" ng-controller="TimelineCtrl as timeline" ng-init="init(10,0)">
			<header class="panel-heading">
				<div class="row">
					<div class="col-md-8 col-sm-8 task-progress">
						<h1 class="thin-font" style="margin-top:7px;">Recent Clearview Activity</h1>
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
			<div class="panel-body profile-activity">
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
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="/timeline" class="btn btn-primary">View All Activity</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="col-lg-7">
		<section class="panel">
			<div class="panel-body progress-panel">
				<div class="task-progress">
					<h1>Most Active Clients</h1>
					<p>in the past 30 days</p>
				</div>
			</div>
			@if(!is_null($active_clients = Auth::user()->most_active_clients()))

				<table class="table table-hover personal-task">
					<thead>
						<tr>
							<th>Name</th>
							<th>Pageviews</th>
							<th>Opens</th>
						</tr>
					</thead>
					<tbody>
						@foreach($active_clients as $client_row)
						<tr>
							<td><a href="/clients/{{ $client_row['client_id'] }}/edit" target="_blank">{{ $client_row['client_name'] }}</a></td>
							<td><span class="badge bg-primary">{{ $client_row['pageviews'] }}</span></td>
							<td style="text-align:left;"><span class="badge bg-success">{{ $client_row['opens'] }}</span></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<h4 class="text-center personal-task">No Active Clients</h4>
			@endif
		</section>
		<section class="panel">
			<div class="panel-body progress-panel">
				<div class="task-progress">
					<h1>Most Active Packages</h1>
					<p>in the past 30 days</p>
				</div>
			</div>
			@if(!is_null($active_packages = Auth::user()->most_active_packages()))
			<table class="table table-hover personal-task">
				<thead>
					<tr>
						<th>Name</th>
						<th>Pageviews</th>
						<th>Opens</th>
					</tr>
				</thead>
				<tbody>
					@foreach($active_packages as $package_row)
						<tr>
							<td>{{ $package_row['package_name'] }}</td>
							<td><span class="badge bg-primary">{{ $package_row['pageviews'] }}</span></td>
							<td style="text-align:left;"><span class="badge bg-success">{{ $package_row['opens'] }}</span></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			@else
				<h4 class="text-center personal-task">No Active Packages</h4>
			@endif
		</section>
		<section class="panel">
          <header class="panel-heading chat-heading">Clearview Connect</header>
          <div class="panel-body">
              <div class="timeline-messages">
                  <!-- Comment -->
                  <div class="msg-time-chat">
                      <a href="#" class="message-img"><img class="avatar" src="/flatlab/img/chat-avatar.jpg" alt=""></a>
                      <div class="message-body msg-in">
                          <span class="arrow"></span>
                          <div class="text">
                              <p class="attribution"><a href="#">Burt Buyer</a> at 1:55pm, 13th April 2013</p>
                              <p>Hello, we like this property, can we come by for a showing next week?</p>
                          </div>
                      </div>
                  </div>
                  <!-- /comment -->

                  <!-- Comment -->
                  <div class="msg-time-chat">
                      <a href="#" class="message-img"><img class="avatar" src="/flatlab/img/chat-avatar2.jpg" alt=""></a>
                      <div class="message-body msg-out">
                          <span class="arrow"></span>
                          <div class="text">
                              <p class="attribution"><a href="#">Steve Seller</a> at 2:01pm, 13th April 2013</p>
                              <p>Great! That property is open next Thursday afternoon will that work?</p>
                          </div>
                      </div>
                  </div>
                  <!-- /comment -->

                  <!-- Comment -->
                  <div class="msg-time-chat">
                      <a href="#" class="message-img"><img class="avatar" src="/flatlab/img/chat-avatar.jpg" alt=""></a>
                      <div class="message-body msg-in">
                          <span class="arrow"></span>
                          <div class="text">
                              <p class="attribution"><a href="#">Burt Buyer</a> at 2:03pm, 13th April 2013</p>
                              <p>Sure, sounds good. How about 3:30?</p>
                          </div>
                      </div>
                  </div>
                  <!-- /comment -->

                  <!-- Comment -->
                  <div class="msg-time-chat">
                      <a href="#" class="message-img"><img class="avatar" src="/flatlab/img/chat-avatar2.jpg" alt=""></a>
                      <div class="message-body msg-out">
                          <span class="arrow"></span>
                          <div class="text">
                              <p class="attribution"><a href="#">Steve Seller</a> at 2:05pm, 13th April 2013</p>
                              <p>You’re in my calendar.  I’ll meet you in front of the villa.  My cell is 555-1212</p>
                          </div>
                      </div>
                  </div>
                  <!-- /comment -->
                  <!-- Comment -->
                  <div class="msg-time-chat">
                      <a href="#" class="message-img"><img class="avatar" src="/flatlab/img/chat-avatar.jpg" alt=""></a>
                      <div class="message-body msg-in">
                          <span class="arrow"></span>
                          <div class="text">
                              <p class="attribution"><a href="#">Burt Buyer</a> at 2:10pm, 13th April 2013</p>
                              <p>OK, mine is 444-1212 see you Thursday!</p>
                          </div>
                      </div>
                  </div>
                  <!-- /comment -->
              </div>
              <div class="chat-form">
					<div class="input-cont ">
						<div class="input-group input-group-lg thin-font">
							<input type="text" class="form-control" placeholder="Type a message here...">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button"><i class="fa fa-envelope"></i> Send</button>
							</span>
						</div>
					</div>
              </div>
          </div>
      </section>
	</div>
</div>
</div>
@stop

@section('javascript')
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-sanitize.js"></script>
	<script type="text/javascript" src="/angular/ng-infinite-scroll.min.js"></script>
    <script type="text/javascript" src="/angular/cve.js"></script>
@stop
