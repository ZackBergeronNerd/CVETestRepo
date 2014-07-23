@extends('layouts.package')

<?php
	if(is_null($package['requested_tab'])) {
		$tab = $package->tab()->where('home_bool', '=', 1)->first();
	} else {
		if(is_null($tab = $package->tab()->where('slug', '=', $package['requested_tab'])->first())) {
			$tab = $package->tab()->where('home_bool', '=', 1)->first();
		}
	}

	list($logo_width, $logo_height) = getimagesize(url('uploads/logos/' .$package->logo));

      if($logo_height > 95) {
            $logo_height = 95;
      }

      $sections = $tab->section()->where('header_bool', '=', 0)->orderBy('order', 'asc')->get()
?>

@section('title')
	Editing {{ $package->name }} - {{ $tab->title }}
@stop

@section('css')
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700);
            @import url(http://fonts.googleapis.com/css?family=Cinzel);

            @font-face {
                  font-family: "Alright Sans Regular";
                  src: url('/css/fonts/AlrightSans-Regular-v3.otf');
            }

            @font-face {
                  font-family: "Alright Sans Light";
                  src: url('/css/fonts/AlrightSans-Light-v3.otf');
            }

            @font-face {
                  font-family: "Alright Sans Medium";
                  src: url('/css/fonts/AlrightSans-Medium-v3.otf');
            }
		
		body {
		    background-color: {{ $package->background_color }};
        	   padding-top: {{ $logo_height + 40 }}px;
               margin-bottom: 20px;
               font-family: {{ $package->content_font_family }};
      	}

        h3 {
              line-height: 28px;
        }

        h1, h2, h3, h4, h5, h6 {
              font-weight: normal;
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
                  font-variant: small-caps;
      		color: {{ $package->menu_font_color }};
      		text-shadow: none;
      		font-family: {{ $package->menu_font_family }};
      		padding: {{ $logo_height / 2 }}px 10px;
			@if(!is_null($package->menu_font_shadow))
			text-shadow: 1px 1px 0px {{ $package->menu_font_shadow }};
			@endif
      	}

      	.navbar .nav>.active>a, .navbar .nav>.active>a:hover, .navbar .nav>.active>a:focus {
      		color: {{ $package->menu_color }};
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
                  font-variant: small-caps;
            }

            .header-nav a:hover {
                  text-decoration: none;
                  color: {{ $package->sub_menu_hover_color }};
            }

            .tab-section h1, .tab-section h2, .tab-section h3, .tab-section h4, .tab-section h5, .tab-section h6 {
                  color: {{ $package->header_font_color }};
                  font-family: {{ $package->header_font_family }};
            }

            .back-to-top, .back-to-top a {
                  color: {{ $package->header_font_color }};
                  font-family: {{ $package->menu_font_family }};
                  font-size: {{ $package->menu_font_size }};
                  font-variant: small-caps;
            }

            #contact_button_container {
                  position: fixed;
                  top: 150px;
                  right: 0px;
                  font-size: 24px;
                  text-align: center;
                  font-variant: small-caps;
                  background-color: {{ $package->menu_color }};
                  box-shadow: 0px 0px 10px #222;
            }

            #contact_button_container a {
                  color: {{ $package->menu_font_color }};
                  padding: 50px 5px;
                  border: 1px solid {{ $package->menu_font_color }};
                  border-right: none;
                  cursor: pointer
            }

            #contact_button_container a:hover {
                  text-decoration: none;
            }

            #contact_header, #contact_content {
                  display: none;
            }

            .section-title:hover {
            	border: 2px dashed {{ $package->content_font_color }};
            }

            .section-subtitle:hover {
              border: 2px dashed {{ $package->content_font_color }};
            }

            /* Portrait tablet to landscape and desktop */
            @media (min-width: 768px) and (max-width: 979px) {
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
            }
      	
      	/* Landscape phone to portrait tablet */
            @media (max-width: 767px) {
                  body {
                        padding-top: 0px;
                  }

                  .mbl-pad-right {
                        padding-right: 20px;
                  }

                  .mbl-pad-left {
                        padding-left: 20px;
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
			
                  .nav-full-btn {
                        display: none;
                  }

                  .navbar .brand {
                        border-right: none;
                  }
            }
             
            /* Landscape phones and down */
            @media (max-width: 480px) { 
                  body {
                        padding-top: 0px;
                  }

                  .mbl-pad-right {
                        padding-right: 20px;
                  }

                  .mbl-pad-left {
                        padding-left: 20px;
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

                  .nav-full-btn {
                        display: none;
                  }

                  .navbar .brand {
                        border-right: none;
                  }
            }

            .blah {

            }
	</style>

@stop

@section('javascript')
	<script>
		$(document).ready(function() {
      var package_id = {{ $package->id }};

			/** Section Title updating **/
			$(".section-title").click(function() {
				var section_id = $(this).attr('data-id');

				$("#section_title-"+section_id).addClass('hidden');
				$("#section_title_form-"+section_id).removeClass('hidden');
			});

			$(".save-section-title").click(function() {
				var section_id = $(this).attr('data-id');
				var new_title = $("#section_title_val-"+section_id).val();

        if(new_title.length > 0) {
  				$("#section_title-"+section_id+" span").html(new_title);

  				if($("#section_title_form-"+section_id).hasClass('in-menu')) {
  					$("#section_menu-"+section_id).html(new_title);
  				}

  				$.post( '/packages/' + package_id,
                  { '_method':'PUT',
                    'section_id':section_id,
                    'section_title':new_title},
                  function(data) {
                    console.log(data);
                    $("#section_title_form-"+section_id).addClass('hidden');
                    $("#section_title-"+section_id).removeClass('hidden');
                  }).fail(function(data) {
                    alert(data.responseText);
                  });
  				
        } else {
          alert('Section Title cannot be blank!');
        }
			});
			/** END of Section Title updating **/


			/** Section Sub-title updating **/
      $(".section-subtitle").click(function() {
        var section_id = $(this).attr('data-id');

        $("#section_subtitle-"+section_id).addClass('hidden');
        $("#section_subtitle_form-"+section_id).removeClass('hidden');
      });

      $(".add-subtitle").click(function() {
        var section_id = $(this).attr('data-id');

        $("#add_subtitle_button-"+section_id).addClass('hidden');
        $("#section_subtitle_form-"+section_id).removeClass('hidden');
      });

      $(".save-section-subtitle").click(function() {
        var section_id = $(this).attr('data-id');
        var new_subtitle = $("#section_subtitle_val-"+section_id).val();

        $("#section_subtitle-"+section_id+" span").html(new_subtitle);

        // Needs AJAX function to save the value in the database

        $.post( '/packages/' + package_id,
                  { '_method':'PUT',
                    'section_id':section_id,
                    'section_subtitle':new_subtitle},
                  function(data) {
                    console.log(data);
                    $("#section_subtitle_form-"+section_id).addClass('hidden');

                    if(new_subtitle.length == 0) {
                      $("#add_subtitle_button-"+section_id).removeClass('hidden');
                    } else {
                      $("#section_subtitle-"+section_id).removeClass('hidden');
                    }
                  }).fail(function(data) {
                    alert(data.responseText);
                  });

        
        
      });
			/** End of Section Sub-title updating **/
		});
	</script>
@stop

@section('logo')
      @if($logo_height > 95)
      <img src="{{ Helpers::timthumb('/uploads/logos/' . $package->logo, null, 95) }}" alt="{{ $package->name }} Logo">
      @else
      <img src="{{ Helpers::timthumb('/uploads/logos/' . $package->logo, null, $logo_height) }}" alt="{{ $package->name }} Logo">
      @endif
@stop

@section('nav')
<ul class="nav">
	@foreach($package->tab()->get() as $tabs)
		@if($tabs->title == $tab->title)
			<li class="active"><a href="/{{ $tabs->slug }}/edit">{{ $tabs->title }}</a></li>
		@else
			<li><a href="/{{ $tabs->slug }}/edit">{{ $tabs->title }}</a></li>
		@endif
	@endforeach
</ul>
@stop

@section('content')
		<div style="position:fixed;bottom:0px;right:0px;color:#F00"><p>Editing as: {{ Auth::user()->name }}</p></div>
      @if(!is_null($header_section = $tab->section()->where('header_bool', '=', 1)->first()))
            @if($tab->home_bool == 1)
            <div class="home-section">
                  <div id="top" class="row">
                        <div class="span10">
                              <div class="pad-left pad-top pad-right">
                                    <h3 class="text-center section-title" id="section_title-{{ $header_section->id }}" data-id="{{ $header_section->id }}"><span>{{ $header_section->title }}</span></h3>
                                    <div id="section_title_form-{{ $header_section->id }}" class="hidden">
                                    	<input class="input-block-level" type="text" id="section_title_val-{{ $header_section->id }}" value="{{ $header_section->title }}">
                                    	<button class="btn btn-small save-section-title" data-id="{{ $header_section->id }}"><i class="icon-save"></i> Save</button>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="span10">
                              <div class="pad-left pad-bottom pad-right">
                                    @if(!is_null($header_section->image))
                                          <img src="{{ Helpers::timthumb('uploads/images/' . $header_section->image, 650) }}">
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
                      @if(!is_null($header_section->subtitle) && strlen($header_section->subtitle))
                      <div class="pad-left pad-bottom pad-right">
                        <h3 class="section-subtitle" id="section_subtitle-{{ $header_section->id }}" data-id="{{ $header_section->id }}"><span>{{ $header_section->subtitle }}</span></h3>
                        <button class="btn btn-primary add-subtitle hidden" id="add_subtitle_button-{{$header_section->id}}" data-id="{{ $header_section->id }}">Add a Subtitle</button>
                        <div id="section_subtitle_form-{{ $header_section->id }}" class="hidden in-menu">
                          <input class="input-block-level" type="text" id="section_subtitle_val-{{ $header_section->id }}" value="{{ $header_section->subtitle }}">
                          <button class="btn btn-small save-section-subtitle" data-id="{{ $header_section->id }}"><i class="icon-save"></i> Save</button>
                        </div>
                      </div>
                      @else
                      <div class="pad-left pad-bottom pad-right">
                        <h3 class="section-subtitle" id="section_subtitle-{{ $header_section->id }}" data-id="{{ $header_section->id }}"><span>{{ $header_section->subtitle }}</span></h3>
                        <button class="btn btn-primary add-subtitle" id="add_subtitle_button-{{$header_section->id}}" data-id="{{ $header_section->id }}">Add a Subtitle</button>
                        <div id="section_subtitle_form-{{ $header_section->id }}" class="hidden in-menu">
                          <input class="input-block-level" type="text" id="section_subtitle_val-{{ $header_section->id }}" value="{{ $header_section->subtitle }}">
                          <button class="btn btn-small save-section-subtitle" data-id="{{ $header_section->id }}"><i class="icon-save"></i> Save</button>
                        </div>
                      </div>
                      @endif
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
                        <div class="span6">
                              <div class="pad-top pad-left pad-bottom mbl-pad-right">
                                    <img src="{{ Helpers::timthumb('uploads/images/' . $tab->form()->first()->image, 650) }}">
                              </div>
                        </div>
                        <div class="span4">
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
                                    <ul class="inline header-nav">
                                          @foreach($sections as $section)
                                                <li><a href="#{{ Str::slug($section->title) }}" id="section_menu-{{ $section->id }}" class="scrollSection">{{ $section->title }}</a></li>
                                          @endforeach
                                    </ul>
                              </div>
                        </div>
                  </div>
            	<div class="row header-content">
      		        <div class="span6">
                        <div class="pad-left pad-bottom mbl-pad-right">
                              @if(!is_null($header_section->image))
                                    <img src="{{ Helpers::timthumb('uploads/images/' . $header_section->image, 650) }}">
                              @elseif(!is_null($header_section->video))
                                    <div class="video-container">
                                          {{ $header_section->video }}
                                    </div>
                              @endif
                        </div>
                  </div>
                  <div class="span4">
                        <div class="pad-right pad-bottom mbl-pad-left">
                        		<h3 class="section-title" id="section_title-{{ $header_section->id }}" data-id="{{ $header_section->id }}"><span>{{ $header_section->title }}</span></h3>
                        		<div id="section_title_form-{{ $header_section->id }}" class="hidden">
                              	<input class="input-block-level" type="text" id="section_title_val-{{ $header_section->id }}" value="{{ $header_section->title }}">
                              	<button class="btn btn-small save-section-title" data-id="{{ $header_section->id }}"><i class="icon-save"></i> Save</button>
                              </div>
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
                                                <button type="submit" id="contact_submit" class="btn">Submit</button>
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
                        		<h3 class="section-title" id="section_title-{{ $section->id }}" data-id="{{ $section->id }}"><span>{{ $section->title }}</span></h3>
                      		    <div id="section_title_form-{{ $section->id }}" class="hidden in-menu">
                              	<input class="input-block-level" type="text" id="section_title_val-{{ $section->id }}" value="{{ $section->title }}">
                              	<button class="btn btn-small save-section-title" data-id="{{ $section->id }}"><i class="icon-save"></i> Save</button>
                              </div>
                              @if(!is_null($section->image))
                              <img src="{{ Helpers::timthumb('uploads/images/' . $section->image, 1130, 375) }}">
                              @endif
                              @if(!is_null($section->subtitle) && strlen($section->subtitle))
                              <div class="pad-top">
                                <h3 class="section-subtitle" id="section_subtitle-{{ $section->id }}" data-id="{{ $section->id }}"><span>{{ $section->subtitle }}</span></h3>
                                <button class="btn btn-primary add-subtitle hidden" id="add_subtitle_button-{{$section->id}}" data-id="{{ $section->id }}">Add a Subtitle</button>
                                <div id="section_subtitle_form-{{ $section->id }}" class="hidden in-menu">
                                  <input class="input-block-level" type="text" id="section_subtitle_val-{{ $section->id }}" value="{{ $section->subtitle }}">
                                  <button class="btn btn-small save-section-subtitle" data-id="{{ $section->id }}"><i class="icon-save"></i> Save</button>
                                </div>
                              </div>
                              @else
                              <div class="pad-top">
                                <h3 class="section-subtitle" id="section_subtitle-{{ $section->id }}" data-id="{{ $section->id }}"><span>{{ $section->subtitle }}</span></h3>
                                <button class="btn btn-primary add-subtitle" id="add_subtitle_button-{{$section->id}}" data-id="{{ $section->id }}">Add a Subtitle</button>
                                <div id="section_subtitle_form-{{ $section->id }}" class="hidden in-menu">
                                  <input class="input-block-level" type="text" id="section_subtitle_val-{{ $section->id }}" value="{{ $section->subtitle }}">
                                  <button class="btn btn-small save-section-subtitle" data-id="{{ $section->id }}"><i class="icon-save"></i> Save</button>
                                </div>
                              </div>
                              @endif
                              <div class="section-content pad-top pad-bottom">
                                    {{ $section->content }}
                              </div>
                              <div class="back-to-top">
                                    <p class="pull-right"><a href="#scrollTop" class="scrollTop">↑ Back to Top</a></p>
                              </div>
                              <hr class="section-hr">
                        </div>
                  </div>
            </div>
            @endforeach
      @endif
@stop