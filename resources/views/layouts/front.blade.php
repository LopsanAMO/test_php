<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Tooring">
    <!-- description -->
    <meta name="description" content="Broad firma de asesoría financiera y legal a empresas">
    <!-- keywords -->
    <meta name="keywords" content="Broad firma de asesoría financiera y legal a empresas">
    <!-- Page Title -->
    <title>BROAD </title>
    <!-- Favicon -->
    <link href="{{ asset('bro-advisory/img/favicon.ico') }}" rel="icon">
    <!-- Bundle -->
    <link href="{{ asset('bro-advisory/vendor/css/bundle.min.css') }}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{ asset('bro-advisory/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/vendor/css/revolution-settings.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/vendor/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/vendor/css/LineIcons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/vendor/css/wow.css') }}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{ asset('bro-advisory/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('bro-advisory/css/style.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="center">
        <div class="loader loader-32">
            <div class='loader-container'>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->
<header class="cursor-light" id="home" >

    <div class="inner-header">
        <!--colored-lines-->
        <div class="color-lines position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 bg-color"></div>
                </div>
            </div>
            <div class="color-line-overlay"></div>
        </div>

        <!--main nav-->
        <div class="main-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-lg-3 d-flex">
                        <a class="navbar-brand simple-nav-logo link" href="{{ route('welcome') }}">
                            <img src="{{ asset('bro-advisory/img/logoOK.png') }}" alt="logo">
                        </a>
                        <a class="navbar-brand fixed-nav-logo link" href="{{ route('welcome') }}">
                            <img src="{{ asset('bro-advisory/img/logoOK.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="col-4 col-lg-9 simple-navbar d-flex align-items-center justify-content-end" id="simple-navbar">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="nav-link active link" href="#"><span>0</span><span data-count="1" class="num-nav">1</span><span>.</span>INICIO</a></li>
                                    <li class="nav-item"><a class="nav-link scroll link" href="#about-sec"><span>0</span><span data-count="2" class="num-nav">2</span><span>.</span>ACERCA DE</a></li>
                                    <li class="nav-item"><a class="nav-link scroll link" href="#company-portfolio-section"><span>0</span><span data-count="3" class="num-nav">3</span><span>.</span>EXPERIENCIA</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link scroll link" href="#testimonial-sec"><span>0</span><span data-count="4" class="num-nav">4</span><span>.</span>CLIENTES</a></li> -->
                                    <!-- <li class="nav-item"><a class="nav-link scroll link" href="#blog-sec"><span>0</span><span data-count="5" class="num-nav">5</span><span>.</span>BLOG</a></li> -->
                                    <li class="nav-item"><a class="nav-link scroll link" href="#contact-sec"><span>0</span><span data-count="4" class="num-nav">4</span><span>.</span>CONTACTO</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--toggle btn-->
        <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity" style="background-image: url('bro-advisory/img/example12.jpg');background-size: cover;background-position: center;">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <div class="container">
                <div class="row w-100 side-menu-inner-content">
                <div class="col-12 d-flex justify-content-center align-items-center text-center">
                    <a href="{{ route('welcome') }}" class="sideNav"><img src="{{ asset('bro-advisory/img/logoOK.png') }}" alt="logo"></a>
                </div>
                <div class="col-12 col-lg-8">
                    <nav class="side-nav w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#home">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#about-sec">ACERCA DE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#company-portfolio-section">EXPERIENCIA</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link scroll" href="#testimonial-sec">CLIENTES</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link scroll" href="#blog-sec">BLOG</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#contact-sec">CONTACTO</a>
                            </li>
                        </ul>
                    </nav>
                </div>


@yield('content')

<!--Footer Start-->
<footer class="footer-style-1">

    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-lg-6">
                <div class="footer-social text-center text-lg-left text-white">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="{{ route('login') }}" class="wow fadeInDown pinterest"><i class="fas fa-sign-in-alt"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-lg-6 text-center text-lg-right">
                <p class="company-about fadeIn">© {{ now()->year }}. Hecho con <span style="color: red;">&#9829;</span> por <a href="javascript:void(0);">Tooring</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->


<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->


<!--Animated Cursor-->
<div class="aimated-cursor">
    <div class="cursor">
        <div class="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

<!-- JavaScript -->
<script src="{{ asset('bro-advisory/vendor/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{ asset('bro-advisory/vendor/js/jquery.appear.js')}}"></script>
<script src="{{ asset('bro-advisory/vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset('bro-advisory/vendor/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('bro-advisory/vendor/js/parallaxie.min.js')}}"></script>
<script src="{{ asset('bro-advisory/vendor/js/wow.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('bro-advisory/vendor/js/jquery.cubeportfolio.min.js')}}"></script>

<!--Tilt Js-->
<script src="{{ asset('bro-advisory/js/slick.js')}}"></script>
<script src="{{ asset('bro-advisory/js/slick.min.js')}}"></script>
<!-- custom script-->
<script src="{{ asset('bro-advisory/js/circle-progress.min.js')}}"></script>
<script src="{{ asset('bro-advisory/js/TweenMax.min.js')}}"></script>

<script src="{{ asset('bro-advisory/vendor/js/contact_us.js')}}"></script>
<script src="{{ asset('bro-advisory/js/script.js')}}"></script>

</body>
</html>
