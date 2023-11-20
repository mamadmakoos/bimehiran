<!doctype html >
<html lang="fa" dir="rtl">
<head>
    {{-- for seo --}}
    <META NAME="robots" CONTENT="noindex">
    <meta name="robots" content="noindex">
    <META NAME="robots" CONTENT="nofollow">
    <meta name="robots" content="nofollow">
    <META NAME="robots" CONTENT="noindex,nofollow">
    <meta name="robots" content="noindex,nofollow">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="HTML5,CSS3,HTML,Makoos - Online bimeh" >
    <meta name="description" content="Makoos - Online bimeh">
    <meta name="author" content="MR Ramezanzadeh">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="96x96">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    <style>
        /********** Template CSS **********/
        :root {
            --primary: #29166F;
            --secondary: #E77919;
            --tertiary: #555555;
            --light: #0093dd;
            --dark: #011A41;
            --white: white;
        }

    </style>
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
<div class="navbar-area is-sticky ">
    <div class="Makoos-responsive-nav">
        <div class="container">
            <div class="Makoos-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo/bimeh-iran-logo.png') }}" alt="logo">
                        <img src="{{ asset('assets/img/logo/bl.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="Makoos-nav" >
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/img/logo/bimeh-iran-logo.png') }}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link " style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">صفحه اصلی</a></li>
                        <li class="nav-item"><a href="{{ route('about_us') }}" class="nav-link " style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">درباره ما</a></li>
                        <li class="nav-item"><a href="{{ route('weblog') }}" class="nav-link " style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">وبلاگ</a></li>
                        @auth()
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">
                                    {{ Auth::user()->user_name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item @endiffont-15" href="{{ route('user_profile') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">پروفایل</a></li>
                                    <li><a class="dropdown-item @endiffont-15" href="{{ route('user_profile') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">اعتبار {{ $credit }} تومان </a></li>
                                    <li><a class="dropdown-item @endiffont-15" href="{{ route('logout') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">خروج</a></li>
                                </ul>
                            </li>
                        @endauth

                    </ul>


                        <div class="others-options">
                            @auth()
                                    <a class="nav-link " href="{{ route('user_profile') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">
                                        پروفایل
                                    </a>
                            @endauth
                            @guest()
                            <form action="" method="post">
                                <a class="login-btn" data-bs-toggle="modal" data-bs-target="#register-login"><i class="flaticon-user"></i> وارد شوید</a>
                            </form>
                            @endguest
                        </div>

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
