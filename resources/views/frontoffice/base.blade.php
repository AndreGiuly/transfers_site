<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>HiTransfers | @yield('title')</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('homepage/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('homepage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link href="{{ asset('homepage/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('homepage/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('homepage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('plugins/mdb-bootstrap/css/mdb.min.css') }}" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="{{ asset('homepage/css/style.css') }}" rel="stylesheet">

  <style>

  #logo {
    display: inline-block;
  }
    .floatlabel {
  
  position:relative;
  width: 93%;
}
.floatlabel input {
  -webkit-appearance: none;
  color:#333;
}
.floatlabel label.label {
  position:absolute;
  top:8px;
  left:18px;
  transition:all 0.2s ease-out;
  color:#999;
  font-size:12px;
  cursor:text;

}
.floatlabel label.label.floatlabel-shift {
    top: -16px;
    left: 12px;
    padding: 0 4px;
    font-size: 10px;
    color: white;
}
.floatlabel label.label.floatlabel-active {
  color: #000;
}

.form-control:focus {
  box-shadow: 2px;
}

.search-form label {
  font-size: 12px;
}

.input-group-text {
  background: #00498b;
  color: white;
}

.input-group-text {
  padding: 8px;
}
.select2-container--default .select2-selection--single {
  border-radius: 0 5px 5px 0 !important;
}
.select2-container--default .select2-selection--single .select2-selection__placeholder{
  font-size: 12px;
  margin-left: 6px;
}

.search-form ::placeholder {
  font-size: 12px;
  margin-left: 6px;
  margin-top: -5px
  color: #999;
  position: absolute;
  top: 8px;
  left: 18px;
}
.select2-selection--single {
  height: 38px !important;
}


@media (max-width: 768px) {
  .search-form {
    width: 90%;
    left: 5%;
  }

  .floatlabel {
    max-width: 90%;
  }

  .text {
     margin: 0;
    font-size: 12px;
    position: absolute;
  }
  
  .text-danger {
    color: #E74C3C;
  }

  .text-success {
    color: #00498b;

  }
}
  </style>

  @yield('style')

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
  <script src="{{ asset('homepage/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('homepage/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/sticky/sticky.js') }}"></script>
   <script src="{{ asset('plugins/air-datepicker/dist/js/datepicker.min.js') }}"></script>
<!-- Include English language -->
<script src="{{ asset('plugins/air-datepicker/dist/js/i18n/datepicker.en.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX_UHJYjvGoKAfP94IaPnI9rxMkU06LFo&libraries=places"></script>
 
<script src="{{ asset('plugins/mdb-bootstrap/js/mdb.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('homepage/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('homepage/js/main.js') }}"></script>

  <script>
    $(".floatlabel input").focus(function() {
      var elementId = $(this).attr('id');
       $("label[for=" + elementId + "]").addClass('floatlabel-shift');
    });

  $(".floatlabel input").blur(function() {
     if($(this).val().length == 0) {
      var elementId = $(this).attr('id');
       $("label[for=" + elementId + "]").removeClass('floatlabel-shift');
     }
  });

  $(".floatlabel input").focus(function() {
    var elementId = $(this).attr('id');
     $("label[for=" + elementId + "]").addClass('floatlabel-active');
  });

  $(".floatlabel input").blur(function(){
    var elementId = $(this).attr('id');
     $("label[for=" + elementId + "]").removeClass('floatlabel-active');
  });

  $('.select2').select2();

  </script>

  @yield('script')

</body>
</html>