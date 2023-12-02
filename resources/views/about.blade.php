@extends("layout.master")
@section("meta")
    <title>درباره ما | ییمه ایران نمایندگی عامری 5799</title>
    <style>
        .navbar-area {
            background: black;
            border-radius: 500px !important;
        }
    </style>
    {{-- for seo --}}
    <META NAME="robots" CONTENT="noindex">
    <meta name="robots" content="noindex">
    <META NAME="robots" CONTENT="nofollow">
    <meta name="robots" content="nofollow">
    <META NAME="robots" CONTENT="noindex,nofollow">
    <meta name="robots" content="noindex,nofollow">
@endsection
@section("content")

    <br> <br> <br> <br>

    <!-- about us section 1 Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0 te" id="about1">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="d-md-none col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                             src="{{ asset('assets/img/aboutus1.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title">
                            <h1 class="display-5 mb-4">نمایندگی عامری</h1>
                        </div>
                        <p class="text-justify mb-4 pb-2">نمایندگی عامری کد 5799 در سال 1384 تاسیس گردید و بیش از 15 سال است که مشغول به خدمات رسانی به ملت شریف ایران مخصوصا صاحبان کالا می باشد.
                            آقای عامری ابتدا به عنوان مدیر یکی از شرکت های حمل و نقل استان تهران شروع به کار نمود و پس از چند سال نسبت به فعالیت در بیمه ایران اقدام نمودند که تجربه ایشان در امور حمل کالا موجب گردید یکی از نماینده های برتر شرکت سهامی بیمه ایران در رشته بیمه های مسئولیت حمل و نقل متصدیان داخلی و بیمه های باربری وارداتی و صادراتی باشند و رضایت 95% صاحبان کالا و متصدیان را جلب نمایند.
                        </p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-justify mb-2">سرعت پشتیبانی</p>
                                        <h5 class="mb-0">عالی</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-justify mb-2">هدف</p>
                                        <h5 class="mb-0">رضایت بیمه گذار</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-justify mb-2">مشاوره</p>
                                        <h5 class="mb-0">حق مشتریست</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-justify mb-2">مشتری مداری</p>
                                        <h5 class="mb-0">افتخار ماست</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                             src="{{ asset('assets/img/aboutus1.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us section 1 End -->

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

    <!-- Appreciation Start -->
    <div class="container-xxl Appreciation py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <p class="text-justify d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">لوح های ما</p>
                <h1 class="display-5 mb-5">مفتخریم که به ملتی مثل شما خدمت میکنیم</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4 px-md-3">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>لوح 1</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>لوح 2</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>لوح 3</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>لوح 4</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="{{ asset('assets/img/loh/loh2.jpg') }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">لوح تقدیر 20 ساله از بیمه ایران</h3>

                                    <p class="text-justify mb-4" dir="rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p><p><i class="fa fa-check text-primary me-3"></i>یاربری</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>حمل و نقل</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>ثالث</p>
                                    <a href="" class="btn btn-primary py-3 mt-3">بیشتر بدانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="{{ asset('assets/img/loh/loh1.jpg') }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">لوح تقدیر 20 ساله از بیمه ایران</h3>
                                    <p class="text-justify mb-4" dir="rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>یاربری</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>حمل و نقل</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>ثالث</p>
                                    <a href="" class="btn btn-primary py-3 mt-3">بیشتر بدانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="{{ asset('assets/img/loh/loh2.jpg') }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">لوح تقدیر 20 ساله از بیمه ایران</h3>
                                    <p class="text-justify mb-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>یاربری</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>حمل و نقل</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>ثالث</p>
                                    <a href="" class="btn btn-primary py-3 mt-3">بیشتر بدانید</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="{{ asset('assets/img/loh/loh3.jpg') }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">لوح تقدیر 20 ساله از بیمه ایران</h3>
                                    <p class="text-justify mb-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>یاربری</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>حمل و نقل</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>ثالث</p>
                                    <a href="" class="btn btn-primary py-3 mt-3">بیشتر بدانید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appreciation End -->

    <!-- start contact us Area ( contact section 4 ) -->
    <section class="contact-area ptb-70">
        <div class="container">
            <div class="section-title">
                <h3>تماس با ما</h3>
                <div class="bar"></div>
                <p> هرگونه سوال را با ما درمیان بگذارید</p>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <span>آدرس</span>
                                اتوبان شهید محلاتی - نرسیده به مخبر شمالی - ساختمان شیشه ای یاران - پلاک 397 - طبقه سوم
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span>پست الکترونیک</span>
                                <a href="#">support@kojabime.com</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <span>تلفن</span>
                                <a href="tel:02135868">021-35868</a>

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="لطفا نام خود را وارد کنید" placeholder="لطفا نام خود را وارد کنید">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="لطفا آدرس ایمیل خود را وارد کنید" placeholder="پست الکترونیک">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="لطفا شماره خود را وارد کنید" class="form-control" placeholder="تلفن">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="لطفا موضوع خود را وارد کنید" placeholder="موضوع">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="پیام خود را تایپ کنید" placeholder="پیام شما"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">ارسال پیام</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
    </section>
    <!-- end contact us Area ( contact section 4 ) -->


@endsection


