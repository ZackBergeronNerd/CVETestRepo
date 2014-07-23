@extends('layouts.dashboard')

@section('title')
  My Packages
@stop

@section('content')
  {{-- Select a Package Interface --}}
  <h3 class="no-margin-top">My Packages</h3>
  <div class="row">
    @if(count($user_websites))
      @foreach($user_websites as $user_website)
      <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="twt-feed" style="background-color: #e56b60">
                <h1>{{ $user_website->website->name }}</h1>
                @if(!is_null($user_website->subdomain))
                  <p>{{ $user_website->subdomain }}.{{ $user_website->website->domain }}</p>
                @else
                  <p>{{ $user_website->website->domain }}</p>
                @endif
                <h1 style="font-size: 48px"><i class="fa fa-archive"></i></h1>
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
                <a href="/user_websites/{{ $user_website->id }}/select_client" class="btn btn-space btn-primary btn-block" ><i class="fa fa-archive"></i> Send to Client</a>
            </footer>
        </section>
      </div>
      @endforeach
    @else
      <div class="col-md-12">
          <h3>You do not have any packages</h3>
      </div>
    @endif
  </div>
@stop

@section('javascript')
  <script>
    $(document).ready(function() {

    });
  </script>
@stop
