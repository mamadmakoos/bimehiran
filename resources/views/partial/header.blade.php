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
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
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
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets/img/logo/bimeh-iran-logo.png')}}" alt="logo">
                        <img src="{{asset('assets/img/logo/bl.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="Makoos-nav" >
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img style="width: 50px; height: 50px;" src="{{ asset('assets/img/logo/bimeh-iran-logo.png') }}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link p-0 " style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">صفحه اصلی</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                انواع بیمه
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                        بیمه حمل و نقل
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">بیمه متصدیان حمل و نقل</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">بیمه باربری</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                        بیمه اتوموبیل
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">بیمه ثالث</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">بیمه ثالث موتور</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">بیمه بدنه</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                        بیمه مسئولیت
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                                بیمه کارفرما در قبال کارکنان
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">ساختمانی</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">عمرانی</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مشاغل ( خدماتی ، صنعتی ، تجاری )</a></li>

                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                                بیمه مسئولیت عمومی
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">ناشی از اجرای عملیات ساختمانی</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">نگهداری آسانسور</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مدیران و مربیان مجموعه ورزشی</a></li>

                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                                بیمه مسئولیت حرفه ای
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">پرشکان</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">دامپزشکان</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">وکلای رسمی دادگستری</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مهندسین طراح ، محاسب ، ناظر</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                                بیمه مسئولیت مدیران
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">هیئت مدیره ساختمان</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مدیران مراکز آموزشی</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مدیران رستوران ها</a></li>
                                                <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مدیران مهد کودک</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                        بیمه آتش سوزی
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">واحد های مسکونی</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مراکز صنعتی</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">مراکز غیرصنعتی</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">طرح حامی</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">طرح اصناف</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                        بیمه اشخاص
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">عمر</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">حوادث</a></li>
                                        <li><a class="dropdown-item font-15" href="" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">درمان</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('about_us') }}" class="nav-link p-0 " style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">درباره ما</a></li>
                        <li class="nav-item"><a href="{{ route('weblog') }}" class="nav-link p-0 " style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">وبلاگ</a></li>
                        @auth()
                            <li class="nav-item dropdown">
                                <a class="nav-link p-0  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">
                                    {{ Auth::user()->user_name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item font-15" href="{{ route('user_profile') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">پروفایل</a></li>
                                    <li><a class="dropdown-item font-15" href="{{ route('user_profile') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">اعتبار {{ $credit }} تومان </a></li>
                                    <li><a class="dropdown-item font-15" href="{{ route('logout') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif padding: 0px !important;">خروج</a></li>
                                </ul>
                            </li>
                        @endauth

                    </ul>


                        <div class="others-options">
                            @auth()
                                    <a class="nav-link p-0 " href="{{ route('user_profile') }}" style="font-size: {{ $setting['a_size']['value'] }} !important; @if(isset($menu))color: var(--primary) !important; @endif">
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
