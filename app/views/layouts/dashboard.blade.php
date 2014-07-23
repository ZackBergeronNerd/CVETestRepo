<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clearview Express">
  <meta name="author" content="Clearview Express">
  <link rel="shortcut icon" href="/favicon.png">

  <title>@yield('title') - Clearview Express</title>

  <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  
  <!-- Bootstrap core CSS -->
  <link href="/flatlab/css/bootstrap.min.css" rel="stylesheet">
  <link href="/flatlab/css/bootstrap-reset.css" rel="stylesheet">

  <!--external css-->
  <link href="/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="/css/dropzone.css" rel="stylesheet"/>

  <!-- Custom styles for this template -->
  <link href="/flatlab/css/style.css" rel="stylesheet">
  <link href="/flatlab/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
  <!--[if lt IE 9]>
    <script src="/flatlab/js/html5shiv.js"></script>
    <script src="/flatlab/js/respond.min.js"></script>
  <![endif]-->

  @yield('css')
  
</head>
<body class="@yield('body_class')">
  <header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
    </div>
    <!--logo start-->
    <a href="/dashboard" class="logo"><img src="http://cve.io/img/cve_logo.png" height="75"></a>
    <!--logo end-->
    <div class="top-nav ">
        <!--search & user info goes here-->
        <ul class="nav pull-right top-menu">
          <!-- user login dropdown start-->
          <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  @if(!is_null(Auth::user()->details()->first()->photo))
                    <img alt="" src="{{ Helpers::timthumb('uploads/users/' . Auth::user()->details()->first()->photo, 29, 29) }}">
                  @elseif(!is_null(Auth::user()->details()->first()->fb_photo))
                    <img alt="" class="dashboard-profile-pic" src="{{ Auth::user()->details()->first()->fb_photo }}">
                  @elseif(!is_null(Auth::user()->details()->first()->tw_photo))
                    <img alt="" class="dashboard-profile-pic" src="{{ Auth::user()->details()->first()->tw_photo }}">
                  @else
                    <i class="fa fa-user"></i>
                  @endif
                  <span class="username hidden-xs">{{ Auth::user()->name }}</span>
                  <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout">
                  <div class="log-arrow-up"></div>
                  <li><a href="/profile"><i class=" fa fa-suitcase"></i>Edit Profile</a></li>
                  <!--<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>-->
                  <li><a href="/logout"><i class="fa fa-key"></i> Log Out</a></li>
              </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
    </div>
  </header>
  <!--sidebar start-->
  <aside>
      <div id="sidebar"  class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <li><a href="/dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
          <li><a href="/timeline"><i class="fa fa-calendar"></i><span>Timeline</span></a></li>
          <li class="sub-menu dcjq-parent-li">
              <a href="javascript:;" class="dcjq-parent">
                  <i class="fa fa-users"></i>
                  <span>Clients</span>
              <span class="dcjq-icon"></span></a>
              <ul class="sub" style="display: none;">
                  <li><a href="/clients">My Clients</a></li>
                  <li><a href="/clients/create">Add New Client</a></li>
              </ul>
          </li>
          <li class="sub-menu dcjq-parent-li">
              <a href="javascript:;" class="dcjq-parent">
                  <i class="fa fa-archive"></i>
                  <span>Packages</span>
              <span class="dcjq-icon"></span></a>
              <ul class="sub" style="display: none;">
                  <li><a href="/user_websites">My Packages</a></li>
                  <li><a href="/send_website">Send Package</a></li>
              </ul>
          </li>
            <!--
          <li class="sub-menu dcjq-parent-li">
              <a href="javascript:;" class="dcjq-parent">
                  <i class="fa fa-envelope"></i>
                  <span>Emails</span>
              <span class="dcjq-icon"></span></a>
              <ul class="sub" style="display: none;">
                  <li><a href="">My Emails</a></li>
                  <li><a href="#">Create New Email</a></li>
                  <li><a href="#">Send Email</a></li>
              </ul>
          </li>
          <li class="sub-menu dcjq-parent-li">
              <a href="javascript:;" class="dcjq-parent">
                  <i class="fa fa-rocket"></i>
                  <span>Landing Pages</span>
              <span class="dcjq-icon"></span></a>
              <ul class="sub" style="display: none;">
                  <li><a href="#">My Landing Pages</a></li>
                  <li><a href="#">Create Landing Page</a></li>
              </ul>
          </li>
          -->
          <li class="sub-menu dcjq-parent-li">
              <a href="javascript:;" class="dcjq-parent">
                  <i class="fa fa-user"></i>
                  <span>Account</span>
              <span class="dcjq-icon"></span></a>
              <ul class="sub" style="display: none;">
                  <li><a href="/profile">Profile</a></li>
                  <!--<li><a href="#">Settings</a></li>-->
                  <li><a href="/logout">Logout</a></li>
              </ul>
          </li>
            @if(Auth::user()->is_superadmin)
            <li class="sub-menu dcjq-parent-li">
                <a href="javascript:;" class="dcjq-parent">
                    <i class="fa fa-rocket"></i>
                    <span>Administration</span>
                    <span class="dcjq-icon"></span>
                </a>
                <ul class="sub" style="display: none;">
                    <li><a href="/admin/manage_packages">Manage Packages</a></li>
                    <li><a href="/admin/setup_package">Setup a Package</a></li>
                    <li><a href="/admin/users">Manage Users</a></li>
                </ul>
            </li>
            @endif
        </ul>
      </div>
  </aside>
  <!--sidebar end-->
  <section id="main-content">
      <section class="wrapper">
          @include('plugins.status')
          @yield('content')
          <div class="modal fade" id="builderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title">Package Builder</h4>
                </div>
                <div class="modal-body text-center">
                  <h1 style="font-size:72px"><i class="fa fa-magic"></i></h1>
                  <h3>Package Builder Coming Soon!</h3>
                  <h4>Our Package Builder will allow you to easily build and edit your very own resort, property, and listing presentations to send to your clients.</h4>
                  <p>Click the button below and let us know how cool this might be, and in the mean time we can build a package together.</p>
                  <p><a class="btn btn-lg btn-primary" href="mailto:support@clearviewexpress.com?subject={{ "Clearview Express Package Builder" }}&body={{ "First of all, on a scale of 1 to 10 I think the ability to create and edit my own packages is a: (please fill in the blank). Next I would like to talk with you about creating a package now." }}"><i class="fa fa-envelope"></i> Contact Us</a></p>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
              </div>
            </div>
          </div>
      </section>
  </section>
  
  <!-- Start JS includes -->
  <script src="/flatlab/js/jquery.js"></script>
  <!--script for this page only-->
  @yield('javascript')
  <script src="/flatlab/js/bootstrap.min.js"></script>
  <script src="/flatlab/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/flatlab/js/jquery.scrollTo.min.js"></script>
  <script src="/flatlab/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="/flatlab/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="/flatlab/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="/flatlab/js/owl.carousel.js" ></script>

  <!--common script for all pages-->
  <script src="/flatlab/js/common-scripts.js"></script>
</body>
</html>