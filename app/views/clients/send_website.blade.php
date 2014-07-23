@extends('layouts.dashboard')

@section('title')
  @if(!is_null($user_website))
  Package Email Options
  @else
  Select a package to send to {{ $client->first_name }}
  @endif
@stop

@section('content')
  {{-- Package Email Options --}}
  @if(!is_null($user_website))
    <h3 class="no-margin-top">Package Email Options</h3>
    <section class="panel">
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            {{ Form::open(array('role' => 'form', 'id' => 'send_package_form', 'action' => 'PackagesController@email_website')) }}
            <div class="row  no-margin-top">
              <div class="col-lg-12">
                <h4>Client:</h4>
              </div>
            </div>
            <div class="row margin-bottom">
              <div class="col-lg-8  col-sm-8">
                {{ Form::text('client_email', $client->first_name . ' ' . $client->last_name . ' - ' . $client->email, array('disabled' => 'disabled', 'class' => 'form-control input-block-level'))}}
              </div>
              <div class="col-lg-4  col-sm-4">
                <p class="no-margin"><i class="fa fa-info-circle"></i> Email will be sent to the following client</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h4>Add More Recipients by Email Address: <small>Separate Emails by a comma</small></h4>
              </div>
            </div>
            <div class="row margin-bottom">
              <div class="col-lg-8  col-sm-8">
                {{ Form::text('recipients', null, array('placeholder' => 'Enter recipients emails', 'class' => 'form-control input-block-level'))}}
              </div>
              <div class="col-lg-4  col-sm-4">
                <p class="no-margin"><i class="fa fa-info-circle"></i> Keep in mind, package activity for copied recipients will be reported on {{ $client->first_name }}'s package analytics.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h4>Email Subject:</h4>
              </div>
            </div>
            <div class="row margin-bottom">
              <div class="col-lg-8  col-sm-8">
                {{ Form::text('subject', 'Your ' . $user_website->website->name . ' Ownership Information has arrived.', array('placeholder' => 'Enter the subject of the email', 'class' => 'form-control input-block-level')) }}
              </div>
              <div class="col-lg-4  col-sm-4">
                <p class="no-margin"><i class="fa fa-info-circle"></i> We suggest your email subject should be no more than 50 characters</p>
              </div>
            </div>

            <div class="row hidden-xs">
              <div class="col-lg-12">
                <h4>Edit Email Content:</h4>
              </div>
            </div>
            <div class="row hidden-xs">
              <div class="col-lg-8">
                <div id="email_editor">
                  {{ $html_email }}
                </div>
                <input type="hidden" name="html_email" id="html_email" value="">
                <input type="hidden" name="send_copy" id="send_copy" value="0">
                <input type="hidden" name="client_id" value="{{ $client->id }}">
                <input type="hidden" name="user_website_id" value="{{ $user_website->id }}">
                <input type="hidden" name="email_key" value="{{ $email_key }}">
              </div>
              <div class="col-lg-4">
                <p class="no-margin"><i class="fa fa-info-circle"></i> Feel free to edit the email's main headline and body copy by simply clicking them. For logo, picture, or design changes <a href="mailto:designteam@clearviewexpress.com?Subject=Email%20Design%20Changes">email our design team.</a></p>
              </div>
            </div>
            {{ Form::close() }}
            <div class="row" style="margin-top:10px">
              <div class="col-lg-12">
                <h4>Add File Attachments:</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-sm-8">
                <form id="my-awesome-dropzone" action="/save_attachment/{{ $email_key }}" class="dropzone"></form>
              </div>
              <div class="col-lg-4 col-sm-4">
                <p class="no-margin"><i class="fa fa-info-circle"></i> Simply click or drag and drop files into the area on the left to upload your attachments.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-sm-8">
                <label class="checkbox pull-right">
                  <input type="checkbox" name="copy_self" id="copy_self"> Send a copy to my inbox
                </label>
                <button class="btn btn-block btn-primary" id="send_package_trigger"><i class="fa fa-archive"></i> Send Package to {{ $client->first_name }}</button>
              </div>
              <div class="col-lg-4 col-sm-4">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @else
    {{-- Select a Package Interface --}}
    <h3 class="no-margin-top">My Packages</h3>
    <div class="row">
      @if(count(Auth::user()->user_website()->get()))
        @foreach(Auth::user()->user_website()->get() as $user_website)
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
                          <h5>{{ Clearview::sends_by_website($user_website->id) }}</h5>
                          Opens
                      </li>
                      <li>
                          <h5>{{ Clearview::sends_by_website($user_website->id) }}</h5>
                          Pageviews
                      </li>
                  </ul>
              </div>
              <footer class="twt-footer">
                  <a href="/clients/{{$client->id}}/send_website/{{ $user_website->id }}" class="btn btn-space btn-primary btn-block" >
                      <i class="fa fa-archive"></i>
                      Select Package
                  </a>
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
  @endif
@stop

@section('javascript')
  <script src="/flatlab/assets/ckeditor/ckeditor.js"></script>
  <script src="/js/dropzone.min.js"></script>
  <script>
    Dropzone.options.myAwesomeDropzone = {
      addRemoveLinks: true
    };
  </script>
  <script>
    $(document).ready(function() {
      $("[contenteditable='true']").addClass('edit_border');

      $("#send_package_trigger").click(function() {
        $("#html_email").val($("#email_editor").html());

        if($("#copy_self").is(':checked')) {
          $("#send_copy").val(1);
        } else {
          $("#send_copy").val(0);
        }

        $("#send_package_form").submit();
      });
    });
  </script>
@stop
