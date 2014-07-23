<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clearview Express">
  <meta name="author" content="Clearview Express">
  <link rel="shortcut icon" href="/favicon.png">

  <title>Package Builder - Clearview Express</title>

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

  <script src="/flatlab/js/jquery.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
  <script src="/cve_builder/app/js/app.js" type="text/javascript"></script>
  <script src="/cve_builder/app/js/services.js" type="text/javascript"></script>
  <script src="/cve_builder/app/js/controllers.js" type="text/javascript"></script>
  
  <!-- Bootstrap core CSS -->
  <link href="/flatlab/css/bootstrap.min.css" rel="stylesheet">
  <link href="/flatlab/css/bootstrap-reset.css" rel="stylesheet">

  <!--external css-->
  <link href="/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="/css/dropzone.css" rel="stylesheet"/>

  <!-- Custom styles for this template -->
  <link href="/flatlab/css/style.css" rel="stylesheet">
  <link href="/flatlab/css/style-responsive.css" rel="stylesheet" />

  <!-- Custom styles for CVEBuilder -->
  <link href="/cve_builder/app/css/app.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
  <!--[if lt IE 9]>
    <script src="/flatlab/js/html5shiv.js"></script>
    <script src="/flatlab/js/respond.min.js"></script>
  <![endif]-->

  @yield('css')
  
</head>
<body class="@yield('body_class')" ng-app="CVEBuilder" ng-controller="mainController">
  <!--sidebar start-->
  <aside>
    <div id="sidebar"  class="nav-collapse ">
      <div class="sidebar-container">
        <a href="/dashboard" class="logo">CVE<span>Builder</span></a>
        <div class="sidebar-toggle-box pull-right">
          <div data-original-title="Close Sidebar" data-placement="left" class="tooltips"><button class="btn btn-xs"><i class="fa fa-minus"></i></div>
        </div>
        <div class="control-panel">
          <div class="control-panel-row">
            <div class="control-half">
              <button class="btn btn-block btn-default text-center"><i class="fa fa-save"></i><br>Save</button>
            </div>
            <div class="control-half-last">
              <button class="btn btn-block btn-default text-center"><i class="fa fa-cloud-upload"></i><br>Publish</button>
            </div>
            <div class="clearfix">&nbsp;</div>
          </div>
          <div class="control-panel-row">
            <div class="control-half">
              <button class="btn btn-block btn-default text-center"><i class="fa fa-bolt"></i><br>Style</button>
            </div>
            <div class="control-half-last">
              <button class="btn btn-block btn-default text-center"><i class="fa fa-gears"></i><br>Settings</button>
            </div>
            <div class="clearfix">&nbsp;</div>
          </div>
          <div class="control-panel-row">
            <div class="control-full">
              <p class="control-panel-row-title">Tabs</p>
              <ul id="tab-list" class="unstyled">
                <li>
                  <div class="row tab-entry">
                    <div class="col-md-2 tab-item">
                      <div class="btn btn-xs btn-default sort-handle"><i class="fa fa-bars"></i></div>
                    </div>
                    <div class="col-md-8 tab-item">
                      <p class="tab-title">Welcome</p>
                    </div>
                    <div class="col-md-1 tab-item">
                      <i class="fa fa-pencil pull-right rename-tab"></i>
                    </div>
                    <div class="col-md-1 tab-item">
                      <i class="fa fa-times pull-right remove-tab"></i>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row tab-entry">
                    <div class="col-md-2 tab-item">
                      <div class="btn-xs btn btn-default sort-handle"><i class="fa fa-bars "></i></div>
                    </div>
                    <div class="col-md-8 tab-item">
                      <p class="tab-title">Ownership</p>
                    </div>
                    <div class="col-md-1 tab-item">
                      <i class="fa fa-pencil pull-right rename-tab"></i>
                    </div>
                    <div class="col-md-1 tab-item">
                      <i class="fa fa-times pull-right remove-tab"></i>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row tab-entry">
                    <div class="col-md-2 tab-item">
                      <div class="btn-xs btn btn-default sort-handle"><i class="fa fa-bars "></i></div>
                    </div>
                    <div class="col-md-8 tab-item">
                      <p class="tab-title">Privileges</p>
                    </div>
                    <div class="col-md-1 tab-item">
                      <i class="fa fa-pencil pull-right rename-tab"></i>
                    </div>
                    <div class="col-md-1 tab-item">
                      <i class="fa fa-times pull-right remove-tab"></i>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="control-panel-row">
            <div class="control-full">
              <p class="control-panel-row-title">Sections</p>
              <ul id="section-list" class="unstyled">
                <li>
                  <div class="row section-entry">
                    <div class="col-md-2 section-item">
                      <div class="btn btn-xs btn-default sort-handle"><i class="fa fa-bars"></i></div>
                    </div>
                    <div class="col-md-8 section-item">
                      <p class="section-title">Annual Expenses</p>
                    </div>
                    <div class="col-md-1 section-item">
                      <i class="fa fa-gear pull-right rename-section"></i>
                    </div>
                    <div class="col-md-1 section-item">
                      <i class="fa fa-times pull-right remove-section"></i>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row section-entry">
                    <div class="col-md-2 section-item">
                      <div class="btn btn-xs btn-default sort-handle"><i class="fa fa-bars"></i></div>
                    </div>
                    <div class="col-md-8 section-item">
                      <p class="section-title">Villa Rental Program</p>
                    </div>
                    <div class="col-md-1 section-item">
                      <i class="fa fa-gear pull-right rename-section"></i>
                    </div>
                    <div class="col-md-1 section-item">
                      <i class="fa fa-times pull-right remove-section"></i>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row section-entry">
                    <div class="col-md-2 section-item">
                      <div class="btn btn-xs btn-default sort-handle"><i class="fa fa-bars"></i></div>
                    </div>
                    <div class="col-md-8 section-item">
                      <p class="section-title">FAQs</p>
                    </div>
                    <div class="col-md-1 section-item">
                      <i class="fa fa-gear pull-right rename-section"></i>
                    </div>
                    <div class="col-md-1 section-item">
                      <i class="fa fa-times pull-right remove-section"></i>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="expand-sidebar" class="hide">
      <div data-original-title="Open Sidebar" data-placement="right" class="fa fa-plus tooltips"></div>
    </div>
  </aside>
  <!--sidebar end-->
  <div class="builder-preview">
    <div class="container">
      <% understand %>
      @yield('content')
    </div>
  </div>

  
  <!--script for this page only-->
  @yield('javascript')
  <script src="/flatlab/js/bootstrap.min.js"></script>
  <script src="/flatlab/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/flatlab/js/jquery.scrollTo.min.js"></script>
  <script src="/flatlab/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="/flatlab/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="/flatlab/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="/flatlab/js/owl.carousel.js" ></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <!--common script for all pages-->
  <script src="/flatlab/js/common-scripts.js"></script>
  <script>
  $(document).ready(function() {
    $("#tab-list").sortable({handle: '.sort-handle'});
    $("#tab-list").disableSelection();

    $("#section-list").sortable({handle: '.sort-handle'});
    $("#section-list").disableSelection();

    $('.fa-minus').click(function () {
        $('#sidebar').hide();
        $('#expand-sidebar').removeClass('hide');
        $("#container").addClass("sidebar-closed");
    });

    $('#expand-sidebar').click(function () {
        $('#sidebar').show();
        $('#expand-sidebar').addClass('hide');
        $("#container").removeClass("sidebar-closed");
    });
  });
  </script>
</body>
</html>