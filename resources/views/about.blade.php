@extends("layout.master")
@section("meta")
    <title>درباره ما | ییمه ایران نمایندگی عامری 5799</title>
    <style>
        .navbar-area{
            background:black;
            border-radius: 500px !important;
        }
    </style>
@endsection
@section("content")

    <br> <br> <br> <br>

    <!-- Team Start -->
    <div id="team" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary text-center">تیم ما</p>
                <h1 class="display-5 mb-5 text-center">مشاورین ما آماده کمک به شما می باشند</h1>
                <hr>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/team-img1.jpg') }}" alt="">
                        <h5>لورم ایپسوم</h5>
                        <span class="text-primary">مدیریت</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/team-img2.jpg') }}" alt="">
                        <h5>لورم ایپسوم</h5>
                        <span class="text-primary">حسابدار</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/team-img3.jpg') }}" alt="">
                        <h5>لورم ایپسوم</h5>
                        <span class="text-primary">بازاریاب</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/team-img4.jpg') }}" alt="">
                        <h5>لورم ایپسوم</h5>
                        <span class="text-primary">مدیر آی تی</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


@endsection


