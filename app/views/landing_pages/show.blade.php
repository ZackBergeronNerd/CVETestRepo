@extends('layouts.landing_page')

@section('title')
	{{ $landing_page->name }}
@stop

@section('css')
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700);
        @import url(http://fonts.googleapis.com/css?family=Cinzel);

        body {
        	background-color: {{ $landing_page->background_color }};
        }

        .content {
        	font-family: {{ $landing_page->content_font_family }};
        	font-size: 15px;
        }

        h1, h2, h3, h4, h5, h6 {
        	font-family: {{ $landing_page->header_font_family }};
        }

        h4 {
        	margin-bottom: 17px;
        }

        form {
        	padding: 10px;
			background-color: {{ $landing_page->form_background_color }};
			border-radius: 5px;
        }

        label {
        	font-size: 16px;
        }

        .landing-section-content {
        	margin-bottom: 10px;
        }
	</style>
@stop

@include('plugins.modal_status')

@section('logo')
	@if(!is_null($package))
		<img src="{{ Helpers::timthumb('/uploads/logos/' . $package->logo, null, 125) }}" alt="{{ $landing_page->name }} Logo">
	@else
		@if(!is_null($landing_page->logo))
			<img src="{{ Helpers::timthumb('/uploads/logos/' . $landing_page->logo, null, 125) }}" alt="{{ $landing_page->name }} Logo">
		@else
			<h2>$landing_page->name</h2>
		@endif
	@endif
@stop

@section('content')
	@foreach($landing_page->section()->get() as $section)
		<div class="row-fluid">
			<div class="span10">
				@if(!is_null($section->title))
					<h2>{{ $section->title }}</h2>
				@endif
				@if(!is_null($section->subtitle))
					<h4>{{ $section->subtitle }}</h4>
				@endif
				<div class="landing-section-content">
					{{ $section->content }}
				</div>
			</div>
		</div>
	@endforeach

	@if(count($contacts))
		<?php
			$contact_count = 0;
			foreach($contacts as $contact) {
				if($contact_count == 0) {
					echo "<div class='row-fluid'>";
				}

				echo "	<div class='span5'>
							<div class='row-fluid'>
								<div class='span2'>
									<p class='text-center'><img src='".Helpers::timthumb('/uploads/logos/' . $contact->user()->first()->details()->first()->logo, null, 300)."'></p>
								</div>
								<div class='span3'>
									<p class='text-center'><img src='".Helpers::timthumb('/uploads/users/' . $contact->user()->first()->details()->first()->photo, null, 300)."'></p>
								</div>
								<div class='span5'>
									<p><strong>{$contact->user()->first()->name}</strong><br>";
				if(!is_null($contact->user()->first()->details()->first()->title)) {
					echo "{$contact->user()->first()->details()->first()->title}<br>";
				}
				if(!is_null($contact->user()->first()->details()->first()->office_number)) {
					echo "Office: {$contact->user()->first()->details()->first()->office_number}<br>";
				}
				if(!is_null($contact->user()->first()->details()->first()->cell_number)) {
					echo "Cell: {$contact->user()->first()->details()->first()->cell_number}<br>";
				}
				if(!is_null($contact->user()->first()->details()->first()->other_info)) {
					echo "{$contact->user()->first()->details()->first()->other_info}<br>";
				}
				echo "			</p>
								</div>
							</div>
						</div>";
				$contact_count++;

				if($contact_count == 2) {
					echo "</div>";
					$countact_count = 0;
				}
			}

			if($contact_count < 2) {
				echo "	<div class='span5'>
							<div class='row-fluid'>
								<div class='span2'>
									<p class='text-center'><img src='".Helpers::timthumb('/uploads/logos/' . $user_package->user()->first()->details()->first()->logo, null, 300)."'></p>
								</div>
								<div class='span3'>
									<p class='text-center'><img src='".Helpers::timthumb('/uploads/users/' . $user_package->user()->first()->details()->first()->photo, null, 300)."'></p>
								</div>
								<div class='span5'>
									<p><strong>{$user_package->user()->first()->name}</strong><br>";
									if(!is_null($user_package->user()->first()->details()->first()->title)) {
										echo "{$user_package->user()->first()->details()->first()->title}<br>";
									}
				echo "			{$user_package->package()->first()->name}</p>
								</div>
							</div>
						</div>";
				echo "</div>";
			}
		?>
	@endif

	@if($package->subdomain == "grandisle" && Input::has('success'))
		<!-- Google Code for Web Contact Form Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 971264883;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "QLDoCI2X2wgQ86aRzwM";
		var google_conversion_value = 0;
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/971264883/?value=0&amp;label=QLDoCI2X2wgQ86aRzwM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
	@endif
@stop


