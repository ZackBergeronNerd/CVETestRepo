@extends('layouts.dashboard')

@section('title')
	Package Manager
@stop

@section('content')
	{{-- Select a Package Interface --}}
    <h3 class="no-margin-top">Package Manager</h3>
    <div class="row">
      @foreach(Auth::user()->user_package()->get() as $user_package)
      <?php
        list($logo_width, $logo_height) = getimagesize(url('uploads/logos/' . $user_package->package()->first()->logo));

        if($logo_height > 95) {
          $logo_height = 95;
          $margin_fix = 0;
        } else {
          $margin_fix = 95 - $logo_height;
        }
      ?>
      <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="twt-feed" style="background: {{ $user_package->package()->first()->menu_color }};">
                <h1 style="color: {{ $user_package->package()->first()->menu_font_color }}">{{ $user_package->package()->first()->name }}</h1>
                @if($user_package->owner)
                <p style="color: {{ $user_package->package()->first()->menu_font_color }}">{{ $user_package->package()->first()->subdomain }}.cve.io</p>
                @elseif($user_package->agent && !is_null($user_package->slug))
                <p style="color: {{ $user_package->package()->first()->menu_font_color }}">{{ $user_package->slug }}.{{ $user_package->package()->first()->subdomain }}.cve.io</p>
                @endif
                <a href="#" style="border-color: {{ $user_package->package()->first()->menu_font_color }};margin-top:{{ $margin_fix }}px">
                      <img src="/libs/timthumb.php?src=../uploads/logos/{{ $user_package->package()->first()->logo }}&h={{ $logo_height }}" class="img-responsive" alt="" style="background: {{ $user_package->package()->first()->menu_color }};">
                </a>
            </div>
            <div class="weather-category twt-category">
                <ul>
                    <li class="active">
                        <h5>{{ $user_package->total_sends() }}</h5>
                        Sends
                    </li>
                    <li>
                        <h5>{{ $user_package->total_opens() }}</h5>
                        Opens
                    </li>
                    <li>
                        <h5>{{ $user_package->total_pageviews() }}</h5>
                        Pageviews
                    </li>
                </ul>
            </div>
            <footer class="twt-footer">
                <a href="/user_packages/{{ $user_package->id }}/select_client" class="btn btn-space btn-primary btn-block" ><i class="fa fa-archive"></i> Send to Client</a>
                <div class="row margin-top">
                	<div class="col-md-6">
                		<a href="http://{{ $user_package->package()->first()->subdomain }}.cve.io" target="_blank" class="btn btn-space btn-info btn-block" ><i class="fa fa-desktop"></i> View</a>
                	</div>
                	<div class="col-md-6">
						<button data-toggle="dropdown" class="btn btn-default btn-block dropdown-toggle" type="button"><i class="fa fa-wrench"></i> Manage <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" href="#builderModal"><i class="fa fa-globe"></i> Edit Package</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-magic"></i> Clone Package</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-bell"></i> Alert Settings</a></li>
							<li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-eye-slash"></i> Unpublish</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="text-danger"><i class="fa fa-ban"></i> Permanently Delete</span></a></li>
						</ul>
                	</div>
                </div>
            </footer>
        </section>
      </div>
      @endforeach

    </div>
@stop

@section('javascript')
	<script>
		$(document).ready(function() {
			$(".clone-package").click(function() {
				var package_id = $(this).attr('data-id');
				var package_subdomain = $(this).attr('data-slug');
				var package_name = $(this).attr('data-name');

				$("#clone_package_name").val(package_name);
				$("#clone_package_subdomain").val(package_subdomain);
				$("#clone_package_id").val(package_id);
				$("#subdomain_example").html(package_subdomain);
			});

			$("#clone_package_form").submit(function(e) {
				e.preventDefault();
				var package_id = $("#clone_package_id").val();
				var package_name = $("#clone_package_name").val();
				var package_subdomain = $("#clone_package_subdomain").val();

				$.post("/clone", {package_id:package_id, subdomain:package_subdomain, name:package_name}, function(data) {
					location.reload();
				}).fail(function(data) {
					alert(data.responseText);
				});
			});
		});
	</script>
@stop