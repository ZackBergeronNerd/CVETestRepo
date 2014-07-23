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
      <div class="col-lg-4 col-sm-6" id="user_website-{{ $user_website->id }}">
        <section class="panel">
            <div class="twt-feed" style="background-color: #e56b60">

                @if(is_null($user_website->subdomain))
                <button type="button" class="btn btn-default remove_package pull-right" style="position:absolute;right:10px" data-id="{{ $user_website->id }}"><i class="fa fa-ban"></i> Delete</button>
                @endif
                <h1>{{ $user_website->website->name }}</h1>
                @if(!is_null($user_website->subdomain))
                  <p>{{ $user_website->subdomain }}.{{ $user_website->website->domain }}</p>
                  <h1 style="font-size: 48px"><i class="fa fa-user"></i></h1>
                @else
                  <p>{{ $user_website->website->domain }}</p>
                  <h1 style="font-size: 48px"><i class="fa fa-archive"></i></h1>
                @endif

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
            <footer class="twt-footer" style="min-height:142px">
                <a href="/user_websites/{{ $user_website->id }}/select_client" class="btn btn-space btn-primary btn-block" ><i class="fa fa-archive"></i> Send to Client</a>

                @if(is_null($user_website->subdomain))
                <div class="row margin-top">
                  <div class="col-md-6">
                    <a href="/user_websites/{{ $user_website->id }}/manage_partners" class="btn btn-space btn-info btn-block" ><i class="fa fa-user"></i> Partners</a>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-space btn-info btn-block generate_code" data-website="{{ $user_website->id }}"><i class="fa fa-globe"></i> Web-to-CVE</button>
                  </div>
                </div>
                @endif

                <div class="row margin-top">
                  @if(!is_null($user_website->subdomain))
                  <div class="col-md-6">
                    <a href="http://{{ $user_website->subdomain }}.{{ $user_website->website->domain }}/?b=1" target="_blank" class="btn btn-space btn-info btn-block" ><i class="fa fa-desktop"></i> View</a>
                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-space btn-info btn-block generate_code" data-website="{{ $user_website->id }}"><i class="fa fa-globe"></i> Web-to-CVE</button>
                  </div>
                  @else
                  <div class="col-md-6">
                    <a href="http://{{ $user_website->website->domain }}/#!" target="_blank" class="btn btn-space btn-info btn-block" ><i class="fa fa-desktop"></i> View</a>
                  </div>
                  <div class="col-md-6">
                    <a href="http://{{ $user_website->website->domain }}/login" target="_blank" class="btn btn-space btn-info btn-block" ><i class="fa fa-gear"></i> Edit</a>
                  </div>
                  @endif
                </div>
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

@include('plugins.modal_cvetoweb')
@stop



@section('javascript')
<script type="text/javascript">
  $(document).ready(function() {
    $(".generate_code").click(function() {
      var website_id = $(this).data('website');

      $.getJSON('/user_websites/web_to_cve/' + website_id, function(data) {
        $("#web_code").val(data['code']);
      });
      $('#codeModal').modal('toggle');

    });
     $(".remove_package").click(function() {
            var user_website_id = $(this).data("id");
            var delete_confirm = confirm("You are about to permanently delete this package, all its activity and any partner packages!\n\nClick 'OK' to continue or 'Cancel' to go back.");
            if(delete_confirm) {
                $.ajax({
                    url: '/user_websites/' + user_website_id,
                    type: 'DELETE',
                    success: function(result) {
                        $("#user_website-" + user_website_id).fadeTo("slow", 0, function() {
                            $(this).remove();
                        });
                    },
                    fail: function() {
                        alert("There was an error deleting that partner package!");
                    }
                });
            }
        });
  });
</script>
@stop
