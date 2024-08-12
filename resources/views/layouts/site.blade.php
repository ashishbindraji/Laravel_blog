<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Agency Template v1.0">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/themify/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/magnific-popup/magnific-popup.css') }}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/slick/slick-theme.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">
  {{-- js --}}
  <script src="{{ asset('assets/site/plugins/jquery/jquery.min.js') }}"></script>
  <!--Favicon-->
  <link rel="icon" href="{{asset('assets/site/images/favicon.png')}}" type="image/x-icon">
  @yield('styles')
</head>

<body>

<!-- Header Start -->
<header class="navigation">
  <div id="navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg px-0 py-4">
            <a class="navbar-brand" href="{{url('/')}}">
              Mega<span>kit.</span>
            </a>
      
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item @@home">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                @if(empty($user->id))
                <li class="nav-item @@contact"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item @@contact"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                @endif
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Close -->
@yield('content')
<footer class="footer section">
  <div class="container">
    <div class="footer-btm pt-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            Copyright &copy; 2024, Designed &amp; Developed by <a href="#"
              >Themefisher</a>
          </div>
        </div>
        <div class="col-lg-6 text-left text-lg-right">
          <ul class="list-inline footer-socials">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
  <span class="icon fa fa-angle-up"></span>
</div>


<!-- 
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<!-- Bootstrap 4.3.1 -->
<script src="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!--  Magnific Popup-->
<script src="{{ asset('assets/site/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('assets/site/plugins/slick/slick.min.js') }}"></script>
<!-- Counterup -->
<script src="{{ asset('assets/site/plugins/counterup/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/site/plugins/counterup/jquery.counterup.min.js') }}"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{ asset('assets/site/plugins/google-map/map.js') }}" defer></script>

<script src="{{asset('assets/site/js/script.js')}}"></script>
@yield('scripts')
</body>

</html>