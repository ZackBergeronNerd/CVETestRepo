
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clearview Express">
  <meta name="author" content="Clearview Express">
  <link rel="shortcut icon" href="/favicon.png">

  <title>@yield('title') - Clearview Express</title>
  
  <!-- Bootstrap core CSS -->
  <link href="/flatlab/css/bootstrap.min.css" rel="stylesheet">
  <link href="/flatlab/css/bootstrap-reset.css" rel="stylesheet">

  <!--external css-->
  <link href="/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

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
  @yield('content')
  
  <script src="/flatlab/js/jquery.js"></script>
  <script src="/flatlab/js/bootstrap.min.js"></script>
  <script src="/flatlab/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/flatlab/js/jquery.scrollTo.min.js"></script>
  <script src="/flatlab/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="/flatlab/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="/flatlab/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="/flatlab/js/owl.carousel.js" ></script>

  <!--common script for all pages-->
  <script src="/flatlab/js/common-scripts.js"></script>

  <!--script for this page only-->

  @yield('javascript')
</body>
</html>