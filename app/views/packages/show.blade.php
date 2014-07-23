@extends('layouts.package')

<?php
/*
	if(is_null($package['requested_tab'])) {
		$tab = $package->tab()->where('home_bool', '=', 1)->first();
	} else {
		if(is_null($tab = $package->tab()->where('slug', '=', $package['requested_tab'])->first())) {
			$tab = $package->tab()->where('home_bool', '=', 1)->first();
		}
	}

  $sections = $tab->section()->where('header_bool', '=', 0)->orderBy('order', 'asc')->get()
  */

	list($logo_width, $logo_height) = getimagesize(url('uploads/logos/' .$package->logo));

  if($logo_height > 95) {
        $logo_height = 95;
  }


?>

@section('title')
	{{ $package->name }} - {{ $tab->title }}
@stop

@section('favicon')
  @if(!is_null($package->favicon))
  <link rel="icon" href="{{ $package->favicon }}" type="image/x-icon" />
  <link rel="shortcut icon" href="{{ $package->favicon }}" type="image/x-icon" />
  @endif
@stop

@section('css')
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700);
            @import url(http://fonts.googleapis.com/css?family=Cinzel);
            @import url(http://fonts.googleapis.com/css?family=Lato:400,700);

            /** Custom Package fonts **/

            @if($package->subdomain == 'vom-en' || $package->subdomain == 'vom-esp' || $package->subdomain == 'vom-pt')
            @font-face {
                  font-family: "Alright Sans Regular";
                  src: url('/css/fonts/alrightweb-regular.ttf');
            }

            @font-face {
                  font-family: "Alright Sans Light";
                  src: url('/css/fonts/alrightweb-light.ttf');
            }

            @font-face {
                  font-family: "Alright Sans Medium";
                  src: url('/css/fonts/alrightweb-medium.ttf');
            }
            @endif



		body {
		    background-color: {{ $package->background_color }};
        	   padding-top: {{ $logo_height + 40 }}px;
               margin-bottom: 20px;
               font-family: {{ $package->content_font_family }};
      	}

            strong {
                  @if(!is_null($package->bold_font))
                        font-weight:normal;
                        font-family: {{ $package->bold_font }};
                  @endif
            }

            h3 {
                  line-height: 28px;
            }

            h1, h2, h3, h4, h5, h6 {
                  font-weight: normal;
                  font-family: {{ $package->header_font_family }};
            }

            blockquote {
                  margin: 40px;
            }

            blockquote p {
                  font-size: 16px;
                  font-style: italic;
            }

            blockquote small {
                  font-size: 16px;
            }

            .italic {
                  font-style: italic;
            }

            .content {
                  font-size: 15px;
            }

            .content p {
                  text-align: justify;
            }

      	.pad-right {
      		padding-right: 35px;
      	}

            .pad-top {
                  padding-top: 20px;
            }

            .pad-left {
                  padding-left: 35px;
            }

            .pad-bottom {
                  padding-bottom: 20px;
            }

            .navbar .btn-navbar {
                  color: #333;
                  text-shadow: #FFF;
            }

            .navbar .btn-navbar:hover {
                  color: #666;
            }

            .navbar .brand {
                  border-right: 1px solid {{ $package->menu_font_color }};
            }

            .navbar {
                  box-shadow: 0px 5px 10px rgba(0,0,0,0.3);
            }

      	.navbar .nav {
      		height: {{ $logo_height + 20 }}px;
      	}

      	.navbar .nav>li>a  {
                  border-right: 1px solid {{ $package->menu_font_color }};
      		font-weight: normal;
      		font-size: {{ $package->menu_font_size }};
                  @if($package->font_variant == 'small-caps')
                        font-variant: small-caps;
                  @elseif($package->font_variant == 'lowercase')
                        text-transform: lowercase;
                  @else
                        font-variant: normal;
                        text-transform: none;
                  @endif
      		color: {{ $package->menu_font_color }};
      		text-shadow: none;
      		font-family: {{ $package->menu_font_family }};
      		padding: {{ $logo_height / 2 }}px 10px;
			@if(!is_null($package->menu_font_shadow))
			text-shadow: 1px 1px 0px {{ $package->menu_font_shadow }};
			@endif
      	}

      	.navbar .nav>.active>a, .navbar .nav>.active>a:hover, .navbar .nav>.active>a:focus {
      		color: #333;
      		background-color: rgba(255,255,255,0.4);
      	}

            .navbar-inner {
              min-height: 40px;
              padding-left: 20px;
              padding-right: 20px;
              background-color: {{ $package->menu_color }};
              background-image: -moz-linear-gradient(top, rgba(255,255,255,0.3),rgba(0,0,0,0.1));
              background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(255,255,255,0.3)),to(rgba(0,0,0,0.1)));
              background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.3),rgba(0,0,0,0.1));
              background-image: -o-linear-gradient(top, rgba(255,255,255,0.3),rgba(0,0,0,0.1));
              background-image: linear-gradient(to bottom, rgba(255,255,255,0.3),rgba(0,0,0,0.1));
              background-repeat: repeat-x;
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4dffffff', endColorstr='#19000000', GradientType=0);
              border: 1px solid #d4d4d4;
              -webkit-border-radius: 4px;
              -moz-border-radius: 4px;
              border-radius: 4px;
              -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
              -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
              box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
              *zoom: 1;
            }

      	.content {
      		background-color: {{ $package->content_background_color }};
      		color: {{ $package->content_font_color }};
      		box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
      		border-radius: 5px;
                  border: 1px solid #999;
      	}

            .section-hr {
                  width: 100%;
                  height: 40px;
                  background-image: linear-gradient(rgba(255,255,255,0.65),rgba(255,255,255,1));
                  background-image: -moz-linear-gradient(top, rgba(255,255,255,0.65),rgba(255,255,255,1));
                  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(255,255,255,0.65)),to(rgba(255,255,255,1)));
                  background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.65),rgba(255,255,255,1));
                  background-image: -o-linear-gradient(top, rgba(255,255,255,0.65),rgba(255,255,255,1));
                  background-image: linear-gradient(to bottom, rgba(255,255,255,0.65),rgba(255,255,255,1));
                  background-repeat: repeat-x;
                  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7fffffff', endColorstr='#19ffffff', GradientType=0);
                  border-top: 1px solid {{ $package->menu_color }};
                  background-color: {{ $package->menu_color }};
            }

            .video-container {
                position: relative;
                padding-bottom: 56.25%;
                height: 0;
                overflow: hidden;
                z-index: 1;
                margin-top: 20px;
            }

            @if(!is_null($package->header_section_color))
            .header-section {
                  border-radius: 5px 5px 0px 0px;
                  background-color: {{ $package->header_section_color }};
            }

            .header-section {
                  color: {{ $package->content_font_color }};
            }
            @endif

            .header-section h3 {
                  margin-top: 0px;
            }


            .header-nav {
                  color: {{ $package->sub_menu_font_color }};
                  border-bottom: 1px solid {{ $package->menu_color }};
            }

            .header-nav.inline > li {
                  padding-right: 8px;
                  border-right: 2px solid {{ $package->sub_menu_font_color }};
                  margin-bottom: 10px;
            }

            .header-nav a {
                  color: {{ $package->sub_menu_font_color }};
                  font-size: {{ $package->menu_font_size }};
                  font-family: {{ $package->menu_font_family }};
                  text-shadow: none;
                  @if($package->font_variant == 'small-caps')
                        font-variant: small-caps;
                  @elseif($package->font_variant == 'lowercase')
                        text-transform: lowercase;
                  @else
                        font-variant: normal;
                        text-transform: none;
                  @endif
                  font-weight: bold;
            }

            .header-nav a:hover {
                  text-decoration: none;
                  color: {{ $package->sub_menu_hover_color }};
            }

            .tab-section h1, .tab-section h2, .tab-section h3, .tab-section h4, .tab-section h5, .tab-section h6 {
                  color: {{ $package->header_font_color }};
                  font-family: {{ $package->header_font_family }};
            }

            .section-content h4 {
                  margin-top: 15px;
                  margin-bottom: 5px;
            }

            .back-to-top, .back-to-top a {
                  color: {{ $package->header_font_color }};
                  font-family: {{ $package->menu_font_family }};
                  font-size: {{ $package->menu_font_size }};
                 @if($package->font_variant == 'small-caps')
                        font-variant: small-caps;
                  @elseif($package->font_variant == 'lowercase')
                        text-transform: lowercase;
                  @else
                        font-variant: normal;
                        text-transform: none;
                  @endif
            }

            #contact_button_container {
                  position: fixed;
                  top: {{ $logo_height + 80 }}px;
                  right: -2px;
                  font-size: 18px;
                  text-align: center;
                  @if($package->font_variant == 'small-caps')
                        font-variant: small-caps;
                  @elseif($package->font_variant == 'lowercase')
                        text-transform: lowercase;
                  @else
                        font-variant: normal;
                        text-transform: none;
                  @endif
                  letter-spacing: 1px;
                  background-color: {{ $package->menu_color }};
                  box-shadow: 0px 0px 10px #222;
            }

            #contact_button_container a {
                  color: {{ $package->menu_font_color }};
                  padding: 7px;
                  border: 1px solid {{ $package->menu_font_color }};
                  cursor: pointer
            }

            #contact_button_container a:hover {
                  text-decoration: none;
            }

            #contact_header, #contact_content {
                  display: none;
            }

            .btn:hover,
            .btn:focus {
                  color: {{ $package->menu_font_color }};
                  text-decoration: none;
                  background-position: 0px;
                  -webkit-transition: none;
                  -moz-transition: none;
                  -o-transition: none;
                  transition: none;
                  background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(255,255,255,0.3));
              background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(0,0,0,0)), to(rgba(255,255,255,0.3)));
              background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(255,255,255,0.3));
              background-image: -o-linear-gradient(top, rgba(0,0,0,0), rgba(255,255,255,0.3));
              background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(255,255,255,0.3));
              background-repeat: repeat-x;
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#33ffffff', GradientType=0);


            }

            .btn-info {
              color: {{ $package->menu_font_color }};
              text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
              background-color: {{ $package->menu_color }};
              background-image: -moz-linear-gradient(top, rgba(255,255,255,0.3), rgba(0,0,0,0));
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(255,255,255,0.3)), to(rgba(0,0,0,0)));
            background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.3), rgba(0,0,0,0));
            background-image: -o-linear-gradient(top, rgba(255,255,255,0.3), rgba(0,0,0,0));
            background-image: linear-gradient(to bottom, rgba(255,255,255,0.3), rgba(0,0,0,0));
            background-repeat: repeat-x;
             filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33ffffff', endColorstr='#00000000', GradientType=0);
              border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
              *background-color: {{ $package->menu_color }};
              /* Darken IE7 buttons by default so they stand out more given they won't have borders */

              filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
            }
            .btn-info:hover,
            .btn-info:focus,
            .btn-info:active,
            .btn-info.active,
            .btn-info.disabled,
            .btn-info[disabled] {
              color: {{ $package->menu_font_color }};
              background-color: {{ $package->menu_color }};
              *background-color:{{ $package->menu_color }};
            }
            .btn-info:active,
            .btn-info.active {
              background-color: {{ $package->menu_color }} \9;
            }


            /** Package specific custom CSS **/
            @if(!is_null($package->custom_css))
                  {{ $package->custom_css }}
            @endif

            /* Portrait tablet to landscape and desktop */
            @media (min-width: 768px) and (max-width: 1199px) {
                  body {
                        padding-top: 0px;
                  }

                  .header-nav {
                        text-align: center;
                  }

                  .navbar .nav {
                        height: auto;
                  }

                  .navbar .nav>li>a  {
                        padding: 10px;
                  }

			.navbar .brand {
                        border-right: none;
                  }

                  .header-nav.inline > li {
                        display: block;
                        border-right: none;
                  }

                  .header-content .span7 {
                        width: 380px;
                  }

                  .header-content .span3 {
                        width: 380px;
                  }

                  #contact_button_container {
                        display: none;
                        visibility: hidden;
                  }
            }

            @media (max-width: 979px) and (min-width: 768px) {
                  .header-content .span7 {
                        width: 600px;
                  }

                  .header-content .span3 {
                        width: 600px;
                  }

                  .mbl-pad-right {
                        padding-right: 35px;
                  }

                  .mbl-pad-left {
                        padding-left: 35px;
                  }

                  #contact_button_container {
                        display: none;
                        visibility: hidden;
                  }

                  blockquote {
                        margin: 20px 5px;
                  }
            }

      	/* Landscape phone to portrait tablet */
            @media (max-width: 767px) {
                  body {
                        padding-top: 0px;
                  }

                  .mbl-pad-right {
                        padding-right: 35px;
                  }

                  .mbl-pad-left {
                        padding-left: 35px;
                  }

                  .header-nav {
                        text-align: center;
                  }

                  .header-nav.inline > li {
                        display: block;
                        border-right: none;
                  }

                  .navbar .nav {
                        height: auto;
                  }

                  .navbar .nav>li>a  {
                        padding: 10px;
                  }

                  .nav-full-btn {
                        display: none;
                  }

                  .navbar .brand {
                        border-right: none;
                  }

                  #contact_button_container {
                        display: none;
                        visibility: hidden;
                  }

                  blockquote {
                        margin: 20px 5px;
                  }
            }

            /* Landscape phones and down */
            @media (max-width: 480px) {
                  body {
                        padding-top: 0px;
                  }

                  .mbl-pad-right {
                        padding-right: 35px;
                  }

                  .mbl-pad-left {
                        padding-left: 35px;
                  }

                  .header-nav {
                        text-align: center;
                  }

                  .header-nav.inline > li {
                        display: block;
                        border-right: none;
                  }

                  .navbar .nav {
                        height: auto;
                  }

                  .navbar .nav>li>a  {
                        padding: 10px;
                  }

                  .nav-full-btn {
                        display: none;
                  }

                  .navbar .brand {
                        border-right: none;
                  }

                  #contact_button_container {
                        display: none;
                        visibility: hidden;
                  }

                  blockquote {
                        margin: 20px 5px;
                  }
            }

            .blah {

            }
	</style>

@stop

@section('logo')
      @if($logo_height > 95)
      <img src="{{ Helpers::timthumb('/uploads/logos/' . $package->logo, null, 95) }}" alt="{{ $package->name }} Logo">
      @else
      <img src="{{ Helpers::timthumb('/uploads/logos/' . $package->logo, null, $logo_height) }}" alt="{{ $package->name }} Logo">
      @endif
@stop

@section('nav')
<!-- {{ $tab->id }} -->
<ul class="nav">
	@foreach($package->tab()->orderBy('order')->get() as $tabs)
		@if($tabs->title == $tab->title)
			<li class="active"><a href="/{{ $tabs->slug }}">{{ $tabs->title }}</a></li>
		@else
			<li><a href="/{{ $tabs->slug }}">{{ $tabs->title }}</a></li>
		@endif
	@endforeach
</ul>
@stop

@section('content')
      @if(!is_null($header_section = $tab->section()->where('header_bool', '=', 1)->first()))
            @if($tab->home_bool == 1)
            <div class="home-section">
                  <div id="top" class="row">
                        <div class="span10">
                              <div class="pad-left pad-top pad-right">
                                    <h3 class="text-center">{{ $header_section->title }}</h3>
                                    <h4 class="text-center">{{ $header_section->subtitle }}</h4>
                              </div>
                              @if(count($sections) > 1)
                              <div class="text-center">
                                    <ul class="inline header-nav">
                                          <?php
                                                $i = 0;
                                                $len = count($sections);
                                                foreach($sections as $section) {
                                                    if ($i == $len - 1) {
                                                      echo '<li style="border-right: none;"><a href="#'.Str::slug($section->title).'" class="scrollSection">'.$section->title.'</a></li>';
                                                    } else {
                                                      echo '<li><a href="#'.Str::slug($section->title).'" class="scrollSection">'.$section->title.'</a></li>';
                                                    }
                                                    $i++;
                                                }
                                          ?>
                                    </ul>
                              </div>
                              @endif
                        </div>
                  </div>
                  @if(count($package_contacts))
                        <div class="row">
                              <div class="span10">
                                    <div class="pad-top pad-left pad-right">
                        <?php
                              $contact_count = 0;
                              foreach($package_contacts as $contact) {
                                    if($contact_count == 0) {
                                          echo "<div class='row-fluid'>";
                                    }

                                    echo "      <div class='span5'>
                                                      <div class='row-fluid'>
                                                            <div class='span2'>
                                                                  <p class='text-center'><img src='".Helpers::timthumb('/uploads/logos/' . $contact->user()->first()->details()->first()->logo, null, 325)."'></p>
                                                            </div>
                                                            <div class='span3'>
                                                                  <p class='text-center'><img src='".Helpers::timthumb('/uploads/users/' . $contact->user()->first()->details()->first()->photo, null, 325)."'></p>
                                                            </div>
                                                            <div class='span5'>
                                                                  <p style='text-align:left;'><strong>{$contact->user()->first()->name}</strong><br>";
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
                                    echo "                  </p>
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
                                    echo "      <div class='span5'>
                                                      <div class='row-fluid'>
                                                            <div class='span2'>
                                                                  <p class='text-center'><img src='".Helpers::timthumb('/uploads/logos/' . $package->user_package()->first()->user()->first()->details()->first()->logo, null, 325)."'></p>
                                                            </div>
                                                            <div class='span3'>
                                                                  <p class='text-center'><img src='".Helpers::timthumb('/uploads/users/' . $package->user_package()->first()->user()->first()->details()->first()->photo, null, 325)."'></p>
                                                            </div>
                                                            <div class='span5'>
                                                                  <p style='text-align:left;'><strong>{$package->user_package()->first()->user()->first()->name}</strong><br>";
                                    if(!is_null($package->user_package()->first()->user()->first()->details()->first()->title)) {
                                          echo "{$package->user_package()->first()->user()->first()->details()->first()->title}<br>";
                                    }
                                    if(!is_null($package->user_package()->first()->user()->first()->details()->first()->office_number)) {
                                          echo "Office: {$package->user_package()->first()->user()->first()->details()->first()->office_number}<br>";
                                    }
                                    if(!is_null($package->user_package()->first()->user()->first()->details()->first()->cell_number)) {
                                          echo "Cell: {$package->user_package()->first()->user()->first()->details()->first()->cell_number}<br>";
                                    }
                                    if(!is_null($package->user_package()->first()->user()->first()->details()->first()->other_info)) {
                                          echo "{$package->user_package()->first()->user()->first()->details()->first()->other_info}<br>";
                                    }
                                    echo "                  </p>
                                                            </div>
                                                      </div>
                                                </div>";
                                    echo "</div>";
                              }
                        ?>
                                    </div>
                              </div>
                        </div>
                  @endif
                  <div class="row">
                        <div class="span10">
                              <div class="pad-left pad-bottom pad-right">
                                    @if(!is_null($header_section->image))
                                          <img src="{{ Helpers::timthumb('uploads/images/' . $header_section->image, 1130) }}">
                                    @elseif(!is_null($header_section->video))
                                          <div class="video-container">
                                                <p style="text-align:center">{{ $header_section->video }}</p>
                                          </div>
                                    @endif
                              </div>
                        </div>
                  </div>

                  <div class="row">
                        <div class="span10">
                              <div class="pad-left pad-right pad-bottom">
                                    {{ $header_section->content }}
                              </div>
                        </div>
                  </div>
            </div>
            @elseif($tab->contact_bool)
            <div class="header-section">
                  <div class="row header-content">
                        @if(!is_null($tab->form()->first()->content))
                        <div class="span7">
                              <div class="pad-top pad-left pad-bottom mbl-pad-right">
                                    <img src="{{ Helpers::timthumb('uploads/images/' . $tab->form()->first()->image, 670, 365) }}">
                              </div>
                        </div>
                        <div class="span3">
                              <div class="pad-top pad-right pad-bottom mbl-pad-left">
                                    <h3>{{ $tab->form()->first()->title }}</h3>
                                    {{ $tab->form()->first()->content }}
                              </div>
                        </div>
                        @else
                        <div class="span10">
                              <div class="pad-top pad-left pad-right pad-bottom mbl-pad-right">
                                    <img src="{{ Helpers::timthumb('uploads/images/' . $tab->form()->first()->image, 970) }}">
                              </div>
                        </div>
                        @endif
                  </div>
            </div>
            @else
            <div class="header-section">
                  <div id="top" class="row">
                        <div class="span10">

                              <div class="pad-left pad-top pad-right mbl-pad-right">
                                    @if(count($sections) > 1)
                                    <ul class="inline header-nav">
                                          <?php
                                                $i = 0;
                                                $len = count($sections);
                                                foreach($sections as $section) {
                                                    if ($i == $len - 1) {
                                                      echo '<li style="border-right: none;"><a href="#'.Str::slug($section->title).'" class="scrollSection">'.$section->title.'</a></li>';
                                                    } else {
                                                      echo '<li><a href="#'.Str::slug($section->title).'" class="scrollSection">'.$section->title.'</a></li>';
                                                    }
                                                    $i++;
                                                }
                                          ?>
                                    </ul>
                                    @endif
                              </div>

                        </div>
                  </div>
            	<div class="row header-content">
            		<div class="span7">
                              <div class="pad-left pad-bottom mbl-pad-right">
                                    @if(!is_null($header_section->image))
                                          <img src="{{ Helpers::timthumb('uploads/images/' . $header_section->image, 670, 365) }}">
                                    @elseif(!is_null($header_section->video))
                                          <div class="video-container">
                                                {{ $header_section->video }}
                                          </div>
                                    @endif
                              </div>
                        </div>
                        <div class="span3">
                              <div class="pad-right pad-bottom mbl-pad-left">
                                    <h3>{{ $header_section->title }}</h3>
                                    {{ $header_section->content }}
                              </div>
                        </div>
            	</div>
            </div>
            @endif
      @endif

      @if($tab->contact_bool)
      <div class="tab-section row">
            <div class="span10">
                  <div class="pad-left pad-right">
                        <h3>{{ $tab->form()->first()->title }} Form</h3>
                        <div class="section-content pad-top pad-bottom">
                              <form class="form-horizontal" id="contact_form" action="/contact" method="POST">
                              @foreach($tab->form()->first()->fields()->orderBy('order', 'asc')->get() as $field)
                                    @if($field->type == 'paragraph')
                                    <p>{{ $field->label }}</p>
                                    @elseif($field->type == 'text')
                                    <div class="control-group">
                                          <label class="control-label" for="{{ $field->name }}">{{ $field->label }}</label>
                                          <div class="controls">
                                              <input type="text" name="{{ $field->name }}" id="{{ $field->name }}">
                                          </div>
                                    </div>
                                    @elseif($field->type == 'textarea')
                                    <div class="control-group">
                                          <label class="control-label" for="{{ $field->name }}">{{ $field->label }}</label>
                                          <div class="controls">
                                              <textarea name="{{ $field->name }}" id="{{ $field->name }}" rows="7" class="span4"></textarea>
                                          </div>
                                    </div>
                                    @elseif($field->type == 'checkbox')
                                    <div class="control-group">
                                          <div class="controls">
                                                <label class="checkbox" for="{{ $field->name }}">
                                                      <input type="checkbox" name="{{ $field->name }}" id="{{ $field->name }}" value="checkbox was checked">&nbsp;{{ $field->label }}
                                                </label>
                                          </div>
                                    </div>
                                    @elseif($field->type = 'date')
                                    <div class="control-group">
                                          <label class="control-label" for="{{ $field->name }}">{{ $field->label }}</label>
                                          <div class="controls">
                                              <input type="text" class="hasDatepicker" name="{{ $field->name }}" id="{{ $field->name }}">
                                          </div>
                                    </div>
                                    @endif
                              @endforeach
                                    <div class="control-group">
                                          <div class="controls">
                                                <button type="submit" id="contact_submit" class="btn">
                                                @if($package->language == "esp")
                                                  Enviar
                                                @elseif($package->language == "pt")
                                                  Enviar
                                                @else
                                                  Submit
                                                @endif
                                                </button>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <div class="controls">
                                                <p id="contact_message"></p>
                                          </div>
                                    </div>
                                    <input type="hidden" name="form_id" id="form_id" value="{{ $tab->form()->first()->id }}">
                            </form>
                        </div>
                        <hr class="section-hr">
                  </div>
            </div>
      </div>
      @else
            @foreach($sections as $section)
            <div class="tab-section row">
                  <div class="span10">
                        <div class="pad-left pad-right">
                              <h2 id="{{ Str::slug($section->title) }}">{{ $section->title }}</h2>
                              @if(!is_null($section->image))
                              <img src="{{ Helpers::timthumb('uploads/images/' . $section->image, 1130, 375) }}">
                              @endif
                              @if(!is_null($section->subtitle) && strlen($section->subtitle))
                              <h3 class="pad-top">{{ $section->subtitle }}</h3>
                              @endif
                              <div class="section-content pad-top pad-bottom">
                                    {{ $section->content }}
                              </div>
                              <div class="back-to-top">
                                    @if($package->language == "esp")
                                    <p class="pull-right"><a href="#scrollTop" class="scrollTop">↑ Volver al Principio</a></p>
                                    @elseif($package->language == "pt")
                                    <p class="pull-right"><a href="#scrollTop" class="scrollTop">↑ Voltar ao Topo</a></p>
                                    @else
                                    <p class="pull-right"><a href="#scrollTop" class="scrollTop">↑ Back to Top</a></p>
                                    @endif
                              </div>
                              <hr class="section-hr">
                        </div>
                  </div>
            </div>
            @endforeach
      @endif

@stop

@section('contact')
      @if($package->disable_contact && is_null($agent))
            <p>{{ $package->other_contact }}</p>
      @else
            @if(count($package_contacts))
                  <?php
                        foreach($package_contacts as $contact) {
                              $partner = User::find($contact->user_id);
                              ?>
                              @if(!is_null($partner->details()->first()->photo))
                              <p class="text-center"><img class="pull-left" src="{{ Helpers::timthumb('uploads/users/' . $partner->details()->first()->photo, 225) }}"></p>
                              @endif
                              <p>{{ $partner->name }}<br>
                                    @if(!is_null($partner->details()->first()->title) && strlen($partner->details()->first()->title))
                                    {{ nl2br($partner->details()->first()->title) }}<br>
                                    @endif
                                    @if(!is_null($partner->details()->first()->office_number) && strlen($partner->details()->first()->office_number))
                                    <strong>Office: </strong>{{ $partner->details()->first()->office_number }}<br>
                                    @endif
                                    @if(!is_null($partner->details()->first()->cell_number) && strlen($partner->details()->first()->cell_number))
                                    <strong>Cell: </strong>{{ $partner->details()->first()->cell_number }}<br>
                                    @endif
                                    @if(!is_null($partner->details()->first()->other_info) && strlen($partner->details()->first()->other_info))
                                    <strong>Other Info: </strong><br>{{ $partner->details()->first()->other_info }}<br>
                                    @endif
                                    <br><strong>Email me now: </strong><br><a href="mailto:{{ $partner->email }}">{{ $partner->email }}</a><br>
                              </p>
                              <p><hr></p>
                              <?php
                        }
                  ?>
            @endif

            @if(!is_null($agent))

                  @if(!is_null($agent->details()->first()->photo))
                  <p class="text-center"><img class="pull-left" src="{{ Helpers::timthumb('uploads/users/' . $agent->details()->first()->photo, 225) }}"></p>
                  @endif
                  <p>{{ $agent->name }}<br>
                        @if(!is_null($agent->details()->first()->title) && strlen($agent->details()->first()->title))
                        {{ nl2br($agent->details()->first()->title) }}<br>
                        @endif
                        @if(!is_null($agent->details()->first()->office_number) && strlen($agent->details()->first()->office_number))
                        <strong>Office: </strong>{{ $agent->details()->first()->office_number }}<br>
                        @endif
                        @if(!is_null($agent->details()->first()->cell_number) && strlen($agent->details()->first()->cell_number))
                        <strong>Cell: </strong>{{ $agent->details()->first()->cell_number }}<br>
                        @endif
                        @if(!is_null($agent->details()->first()->other_info) && strlen($agent->details()->first()->other_info))
                        <strong>Other Info: </strong><br>{{ $agent->details()->first()->other_info }}<br>
                        @endif
                        <br><strong>Email me now: </strong><br><a href="mailto:{{ $agent->email }}">{{ $agent->email }}</a><br>
                  </p>
            @else

                  @if(!is_null($package->user_package()->first()->user()->first()->details()->first()->photo))
                  <p class="text-center"><img class="pull-left" src="{{ Helpers::timthumb('uploads/users/' . $package->user_package()->first()->user()->first()->details()->first()->photo, 225) }}"></p>
                  @endif
                  <p>{{ $package->user_package()->first()->user()->first()->name }}<br>
                        @if(!is_null($package->user_package()->first()->user()->first()->details()->first()->title) &&
                              strlen($package->user_package()->first()->user()->first()->details()->first()->title))
                        {{ nl2br($package->user_package()->first()->user()->first()->details()->first()->title) }}<br>
                        @endif
                        @if(!is_null($package->user_package()->first()->user()->first()->details()->first()->office_number) &&
                              strlen($package->user_package()->first()->user()->first()->details()->first()->office_number))
                        <strong>Office: </strong>{{ $package->user_package()->first()->user()->first()->details()->first()->office_number }}<br>
                        @endif
                        @if(!is_null($package->user_package()->first()->user()->first()->details()->first()->cell_number) &&
                              strlen($package->user_package()->first()->user()->first()->details()->first()->cell_number))
                        <strong>Cell: </strong>{{ $package->user_package()->first()->user()->first()->details()->first()->cell_number }}<br>
                        @endif
                        @if(!is_null($package->user_package()->first()->user()->first()->details()->first()->other_info) &&
                              strlen($package->user_package()->first()->user()->first()->details()->first()->other_info))
                        <strong>Other Info: </strong><br>{{ $package->user_package()->first()->user()->first()->details()->first()->other_info }}
                        @endif
                        <br><strong>Email me now: </strong><br><a href="mailto:{{ $package->user_package()->first()->user()->first()->email }}">{{ $package->user_package()->first()->user()->first()->email }}</a><br>
                  </p>
            @endif
      @endif
@stop

@section('tracking')
      {{ $salesforce_tracking }}
@stop
