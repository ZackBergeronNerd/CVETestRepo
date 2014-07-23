<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('css/datepicker.css') }}" rel="stylesheet" media="screen">
    <!-- Sidr -->
    <link href="{{ url('css/jquery.sidr.dark.css') }}" rel="stylesheet" media="screen">
    <!-- <link href="{{ url('css/packages/') }}@yield('css_file')" rel="stylesheet" media="screen"> -->

    <link rel="stylesheet" href="/flatlab/assets/font-awesome/css/font-awesome.css">
    <!--[if IE 7]><link rel="stylesheet" href="/flatlab/assets/font-awesome/css/font-awesome.css"><![endif]-->
    <link rel="stylesheet" href="/magnific-popup/magnific-popup.css"> 

    <style type="text/css">
      .gallery a {
        cursor: -webkit-zoom-in;
        cursor: -moz-zoom-in;
        cursor: zoom-in;
      }
    </style>

    
    @yield('favicon')
    @yield('css')
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner" id="main_nav">
        <div class="container">
          <button type="button" class="btn btn-navbar nav-mobile-btn contact-button">Contact</button>
          <button type="button" class="btn btn-navbar nav-mobile-btn" data-toggle="collapse" data-target=".nav-collapse">Menu</button>
          <a class="brand" href="/">@yield('logo')</a>
          <div class="nav-collapse collapse">
            @yield('nav')
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container content">
      @yield('content')
    </div>

    @if(!Session::has('editing'))
    <header id="contact_header">
      @if($package->language == 'esp')
      <h1>Información de Contacto <a>Cerrar</a></h1>
      @elseif($package->language == 'pt')
      <h1>Informações para contato <a>Fechar</a></h1>
      @else
      <h1>Contact Information <a>Close</a></h1>
      @endif
      
    </header>

    <div id="contact_content">
      @yield('contact')
    </div>

    
    <div id="contact_button_container">
      @if($package->language == 'esp')
      <a id="contact_button" class="contact-button pull-right" style="">contactar</a>
      @elseif($package->language == 'pt')
      <a id="contact_button" class="contact-button pull-right" style="">contato</a>
      @else
      <a id="contact_button" class="contact-button pull-right" style="">contact</a>
      @endif
    </div>
    @endif

    <div id="email_success_modal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Success!</h3>
      </div>
      <div class="modal-body">
        <h4 class="text-center">Thank you. We've received your submission and will be in touch soon.</h4>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('js/jquery.sidr.min.js') }}"></script>
    <script src="{{ url('js/jquery.scroll.js') }}"></script>
    <script src="{{ url('js/fluidvids.js') }}"></script>
    <script src="{{ url('magnific-popup/jquery.magnific-popup.js') }}"></script> 
    <script>
    $(document).ready(function() {
      $(".hasDatepicker").datepicker();

      $('.gallery').each(function() { // the containers for all your galleries
          $(this).magnificPopup({
              delegate: 'a', // the selector for gallery item
              type: 'image',
              gallery: {
                enabled:true
              }
          });
      });

      $('.contact-button').sidr({
        name: 'sidr-contact-menu',
        side: 'bottom',
        source: '#contact_header, #contact_content'
      });

      $('.sidr-inner h1 a').click(function() {
        $.sidr('close', 'sidr-contact-menu');
      });

      $("#contact_form").on("submit", function(e) {
        e.preventDefault();
        var form_values = $(this).serialize();
        $.post("/contact", form_values, function(data) {
          $("#email_success_modal").modal('show');
        }).fail(function(data) {
          $("#contact_message").html(data.responseText);
        });
      });

      $(".scrollSection").click(function() {
        $('body').scrollTo($(this).attr('href'), {offsetTop : '125'});
      });

      $(".accordion-body").bind('shown', function() {
              var active = $(this).attr('id');
              var stop = $('#'+active).offset().top - 150;
              $('body').animate({scrollTop: stop}, 400);
      });

      $(".scrollTop").click(function() {
        $('body').scrollTo(0);
      });
    });
    </script>
    @yield('javascript')
    @yield('tracking')
  </body>
</html>