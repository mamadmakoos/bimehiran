<!doctype html >
<html lang="fa" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="HTML5,CSS3,HTML,Makoos - Online bimeh" >
    <meta name="description" content="Makoos - Online bimeh">
    <meta name="author" content="MR Ramezanzadeh">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="96x96">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @yield("meta")
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="Makoos-responsive-nav">
        <div class="container">
            <div class="Makoos-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/bimeh-iran-logo.png') }}" alt="logo">
                        <img src="{{ asset('assets/img/black-logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="Makoos-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/img/bimeh-iran-logo.png') }}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">صفحه اصلی</a></li>
                        <li class="nav-item"><a href="{{ route('about_us') }}" class="nav-link">درباره ما</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">وبلاگ</a></li>

                    </ul>

                    <div class="others-options">
                        <a href="#" class="login-btn"><i class="flaticon-user"></i> وارد شوید</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
