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
            </footer>
        </section>
      </div>
      @endforeach

    </div>
@stop

@section('javascript')
	<script>
		$(document).ready(function() {

		});
	</script>
@stop