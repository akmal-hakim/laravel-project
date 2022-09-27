<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Anno - Digital Agency HTML5 Template</title>
<link rel="shortcut icon" href="{{ asset('themeHome/images/favicon.ico')}} ">
<!--{{themes('vendors/css/vendors.min.css')}}-->
<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{ asset('themeHome/css/master.css') }}">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{ asset('themeHome/css/responsive.css') }}">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('themeHome/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themeHome/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themeHome/revolution/css/navigation.css') }}">

</head>
<body>
Hahaha
<!--== Loader Start ==-->
<div id="loader-overlay">
  <div class="loader">
    <img src="{{ asset('themeHome/images/loader.svg') }}" width="80" alt="">
  </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

  <!--== Header Start ==-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full no-border">
  	<!--== Start Top Search ==-->
    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
      <div id="fullscreen-search-wrapper">
        <form method="get" id="fullscreen-searchform">
          <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input" class="search-bar-top">
          <i class="fullscreen-search-icon icofont icofont-search">
          <input value="" type="submit">
          </i>
        </form>
      </div>
    </div>
    <!--== End Top Search ==-->
    <div class="container">
      <!--== Start Atribute Navigation ==-->
      <div class="attr-nav hidden-xs sm-display-none">
        <ul>
          <li class="side-menu"><a href="#"><i class="icofont icofont-navigation-menu"></i></a></li>
          <!-- <li class="search"><a href="#" id="search-button"><i class="icofont icofont-search"></i></a></li> -->
        </ul>
      </div>
      <!--== End Atribute Navigation ==-->

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="{{ asset('themeHome/images/logo-white.png') }}" alt=""> <img class="logo logo-scrolled" src="assets/images/logo-black.png" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
        <!--
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Concepts</a>
            <ul class="dropdown-menu">
              <li><a href="home-main.html">Main Demo</a></li>
              <li><a href="home-creative-agency.html">Home Creative Agency</a></li>
              <li><a href="home-digital.html">Home Digital</a></li>
              <li><a href="home-minimal-agency.html">Home Minimal Agency</a></li>
              <li><a href="home-business.html">Home Business</a></li>
              <li><a href="home-studio.html">Home Studio</a></li>
              <li><a href="home-startup.html">Home Startup</a></li>
              <li><a href="home-marketing.html">Home Marketing</a></li>
              <li><a href="home-parallax.html">Home Parallax</a></li>
              <li><a href="home-image-bg.html">Home Image Background</a></li>
              <li><a href="home-video-bg.html">Home Video Background</a></li>
              <li><a href="home-kenburn.html">Home Kenburn</a></li>
            </ul>
          </li>
          -->
          <li class="link-item"><a class="page-scroll" href="#home">Account</a></li>
          <li class="link-item"><a class="page-scroll" href="#about">About</a></li>
          <li class="link-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
          <li class="link-item"><a class="page-scroll" href="#contact">Contact</a></li>
        </ul>
      </div>
      
      <!--== /.navbar-collapse ==-->
    </div>

    <!-- Start Side Menu -->
    <div class="side default-bg">
    		<a href="index.html" class="logo-side"><img src="{{ asset('themeHome/images/logo-white-sidemenu.png') }}" alt="side-logo"/></a>
            <a href="#" class="close-side"><i class="icofont icofont-close"></i></a>
            <div class="widget mt-120">
              <ul class="link">
                <li class="link-item"><a class="page-scroll" href="#home">Account</a></li>
                <li class="link-item"><a class="page-scroll" href="#about">About</a></li>
                <li class="link-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
                <li class="link-item"><a class="page-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
            <ul class="social-media">
              <li><a href="#" class="icofont icofont-social-facebook"></a></li>
              <li><a href="#" class="icofont icofont-social-twitter"></a></li>
              <li><a href="#" class="icofont icofont-social-behance"></a></li>
              <li><a href="#" class="icofont icofont-social-dribble"></a></li>
              <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
            </ul>
     </div>
     <!-- End Side Menu -->

  </nav>
  <!--== Header End ==-->

  <!--== Hero Slider Start ==-->
  
  <section class="home-slider" id="home">
    <div class="default-slider slick">
      <div class="slide">                       <!-- background-image:url({{url('images/php_mysql.jpg')}}) Cara tulis background -->
        <div class="slide-img parallax-effect" style="background:url( {{ url('themeHome/images/slides/home1.webp') }} ) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color text-center">
                <h1 class="white-color font-800 font-100px line-height-90" data-backfont="Minimal">Digital Creations</h1>
                <h4 class="white-color font-600 mt">Learn the skills and tips on pixel art</h4>
                <p class="text-center mt-30"><a class="btn btn-light-outline btn-lg radius-0 xs-mb-20">Purchase Theme</a> <a class="btn btn-color btn-lg radius-0">Start a Project</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url( {{ url('themeHome/images/slides/home2.png') }} ) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color text-center">
                <h1 class="white-color font-800 font-100px line-height-90" data-backfont="Minimal">Creative Designs</h1>
                <h4 class="white-color font-600 mt-0">Core to the success of what we achieve for our clients</h4>
                <p class="text-center mt-30"><a class="btn btn-light-outline btn-lg radius-0 xs-mb-20">Purchase Theme</a> <a class="btn btn-light-outline btn-lg radius-0">Start a Project</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Hero Slider End ==-->

 
  <!--== Go to Top  ==-->
  <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
  <!--== Go to Top End ==-->

</div>
<!--== Wrapper End ==-->

<!--== Javascript Plugins ==-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJNGOwO2hJpJ9kz8e0UUPjZhEbgDJTTXE"></script>
<script src="{{ asset('themeHome/js/jquery.min.js') }}"></script>
<script src="{{ asset('themeHome/js/plugins.js') }}"></script>
<script src="{{ asset('themeHome/js/master.js') }}"></script>

<!-- Revolution js Files -->
<script src="{{ asset('themeHome/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('themeHome/revolution/js/revolution.extension.video.min.js') }}"></script>
<!--== Javascript Plugins End ==-->

</body>
</html>
