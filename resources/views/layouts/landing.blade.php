<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>@yield('title')</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/assets/landing/img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/landing/css/animate.css">
    <link rel="stylesheet" href="/assets/landing/css/LineIcons.css">
    <link rel="stylesheet" href="/assets/landing/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/landing/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/landing/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/landing/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/assets/landing/css/main.css">
    <link rel="stylesheet" href="/assets/landing/css/responsive.css">

</head>

<body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">
        <div class="overlay">
            <span></span>
            <span></span>
        </div>
        {{-- Navbar --}}
        @include('includes.landing.navbar')
        <div class="container">
            <div class="row space-100">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="contents">
                        <h2 class="head-title">Air Terjun Batu Mahasur</h2>
                        <p>Please, Purchase full version of Slick to get all pages, features and permission to use in
                            commercial projects</p>
                        <div class="header-button">
                            <a href="https://rebrand.ly/slick-ud" rel="nofollow" target="_blank"
                                class="btn btn-border-filled">Purchase Now</a>
                            <a href="https://rebrand.ly/slick-ud" rel="nofollow" target="_blank"
                                class="btn btn-border page-scroll">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="p-0 col-lg-6 col-md-12 col-xs-12">
                    <div class="intro-img">
                        <img src="/assets/landing/img/intro.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    @yield('content')

    <!-- Footer Section Start -->
    {{-- @include('includes.landing.footer') --}}
    <!-- Footer Section End -->


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/assets/landing/js/jquery-min.js"></script>
    <script src="/assets/landing/js/popper.min.js"></script>
    <script src="/assets/landing/js/bootstrap.min.js"></script>
    <script src="/assets/landing/js/owl.carousel.js"></script>
    <script src="/assets/landing/js/jquery.nav.js"></script>
    <script src="/assets/landing/js/scrolling-nav.js"></script>
    <script src="/assets/landing/js/jquery.easing.min.js"></script>
    <script src="/assets/landing/js/nivo-lightbox.js"></script>
    <script src="/assets/landing/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/landing/js/form-validator.min.js"></script>
    <script src="/assets/landing/js/contact-form-script.js"></script>
    <script src="/assets/landing/js/main.js"></script>

</body>

</html>