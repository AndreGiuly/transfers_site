<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="homepage/img/favicon.png" rel="icon">
  <link href="homepage/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="homepage/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="homepage/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="homepage/lib/animate/animate.min.css" rel="stylesheet">
  <link href="homepage/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="homepage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="homepage/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="homepage/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="homepage/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">


  @include('frontoffice.partials.header')

	@yield('content')

	@include('frontoffice.partials.footer')
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="homepage/lib/jquery/jquery.min.js"></script>
  <script src="homepage/lib/jquery/jquery-migrate.min.js"></script>
  <script src="homepage/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="homepage/lib/easing/easing.min.js"></script>
  <script src="homepage/lib/superfish/hoverIntent.js"></script>
  <script src="homepage/lib/superfish/superfish.min.js"></script>
  <script src="homepage/lib/wow/wow.min.js"></script>
  <script src="homepage/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="homepage/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="homepage/lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="homepage/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="homepage/js/main.js"></script>

  @yield('script')

</body>
</html>