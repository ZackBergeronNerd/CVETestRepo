<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('css/datepicker.css') }}" rel="stylesheet" media="screen">

    <!-- <link href="{{ url('css/packages/') }}@yield('css_file')" rel="stylesheet" media="screen"> -->
    <style type="text/css">
      .landing-logo {
        margin: 10px 0px;
      }
    </style>
    @yield('css')
  </head>
  <body>
    
    <div class="container content">
      <div class="row-fluid landing-logo">
        <div class="span3">&nbsp;</div>
        <div class="span4 text-center">
          @yield('logo')
        </div>
        <div class="span3">&nbsp;</div>
      </div>
      @yield('content')
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('js/fluidvids.js') }}"></script>
    <script>
    $(document).ready(function() {
      $("input[type='submit']").addClass('btn btn-primary');
      $("input[type='text']").addClass('input-block-level');
      $('#modal_status').modal();
    });
    </script>
    @yield('javascript')
  </body>
</html>