@extends("layout.master")
@section("meta")
    <title>ییمه ایران | نمایندگی عامری 5799</title>
@endsection
@section("content")

    <!-- Start Main Banner Area ( home section 1 ) -->
    <div class="main-banner jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <h1>خدمات بیمه ایران<br> شعبه 5799</h1>
                        <p>شرکت بیمه ایران یکی از قدیمی ترین بیمه های ایران است که از سال ۱۳۱۴ شروع به کار نموده
                            است.</p>
                        <a href="#" class="btn btn-primary">اکنون شروع کنید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Main Banner Area ( home section 1 ) -->

    <!-- Start Featured Boxes Area ( home section 2 )  -->
    <section class="featured-boxes-area">
        <div class="container">
            <div class="featured-boxes-inner">
                <div class="row m-0">
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon-(1).png') }}" alt="">
                            </div>

                            <h3>بیمه بدنه</h3>
                            <p>لورم ایپسوم متن ساختگی صنعتی با تولید نامفهوم در وب است.</p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon-(7).png') }}" alt="">
                            </div>

                            <h3>بیمه سرقت</h3>
                            <p>لورم ایپسوم متن ساختگی صنعتی با تولید نامفهوم در وب است.</p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon-(4).png') }}" alt="">
                            </div>

                            <h3>بیمه آتش سوزی</h3>
                            <p>لورم ایپسوم متن ساختگی صنعتی با تولید نامفهوم در وب است.</p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon-(5).png') }}" alt="">
                            </div>

                            <h3>بیمه عمر</h3>
                            <p>لورم ایپسوم متن ساختگی صنعتی با تولید نامفهوم در وب است.</p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Boxes Area ( home section 2 ) -->


    <!-- start articles Area ( home section 3 ) -->
    <section class="article-area mt-md-5 mt-3">
        <div class="container">
            <h2 class="text-center">آخرین مقالات</h2>
            <hr>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card blue-gradient h-100">
                        <img src="{{ asset('assets/img/blog-image/1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">مقاله اول سایت</h5>
                            <p class="card-text">وقتی ثروت‌ های بزرگ به دست برخی مردم می‌افتد در پرتو آن نیرومند می‌شوند
                                و در سایهٔ نیرومندی و ثروت خیال می‌ کنند که می‌توانند در خارج از وطن خود زندگی
                                نمایند!</p>
                            <div class="article-link text-center">
                                <a href="#">ادامه مطلب</a>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <small class="text-white"> مقاله 4 دقیقه پیش ویرایش شده</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card blue-gradient h-100">
                        <img src="{{ asset('assets/img/blog-image/2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">مقاله دوم سایت</h5>
                            <p class="card-text">وقتی ثروت‌ های بزرگ به دست برخی مردم می‌افتد در پرتو آن نیرومند می‌شوند
                                و در سایهٔ نیرومندی و ثروت خیال می‌ کنند که می‌توانند در خارج از وطن خود زندگی
                                نمایند!</p>
                            <div class="article-link text-center">
                                <a href="#">ادامه مطلب</a>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <small class="text-white"> مقاله 10 دقیقه پیش ویرایش شده</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card blue-gradient h-100">
                        <img src="{{ asset('assets/img/blog-image/3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">مقاله سوم سایت</h5>
                            <p class="card-text">وقتی ثروت‌ های بزرگ به دست برخی مردم می‌افتد در پرتو آن نیرومند می‌شوند
                                و در سایهٔ نیرومندی و ثروت خیال می‌ کنند که می‌توانند در خارج از وطن خود زندگی
                                نمایند!</p>
                            <div class="article-link text-center">
                                <a href="#">ادامه مطلب</a>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <small class="text-white"> مقاله 25 دقیقه پیش ویرایش شده</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card blue-gradient h-100">
                        <img src="{{ asset('assets/img/blog-image/4.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">مقاله چهارم سایت</h5>
                            <p class="card-text">وقتی ثروت‌ های بزرگ به دست برخی مردم می‌افتد در پرتو آن نیرومند می‌شوند
                                و در سایهٔ نیرومندی و ثروت خیال می‌ کنند که می‌توانند در خارج از وطن خود زندگی
                                نمایند!</p>
                            <div class="article-link text-center">
                                <a href="#">ادامه مطلب</a>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <small class="text-white"> مقاله 40 دقیقه پیش ویرایش شده</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- start articles Area ( home section 3 ) -->

    <!-- start insurance Boxes Area ( home section 4 ) -->
    <section class="insurance-boxes-area mt-5">
        <div class="container">
            <div class="insurance-boxes-inner">
                <div class="row">
                    <div class="insurance-photo col-sm-12 col-md-6 mt-md-2 mb-md-2">
                        <img src="{{ asset('assets/img/1.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-title col-sm-12 col-md-6 mtb-50 rounded  shadow">
                        <h3 class="pt-3 mt-2">
                            بیمه بدنه و مزایا
                        </h3>
                        <p class="insurance-desc p-5">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        </p>
                    </div>
                    <div class="insurance-photo d-md-none col-sm-12 col-md-6 mtb-70 ">
                        <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-title col-sm-12 col-md-6 mt-3 mt-md-2 mb-md-2  rounded  shadow">
                        <h3 class="pt-5 mt-5">
                            بیمه آتش سوزی و مزایا
                        </h3>
                        <p class="insurance-desc p-5">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        </p>
                    </div>
                    <div class="insurance-photo d-none d-md-block col-sm-12 col-md-6  ">
                        <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-photo col-sm-12 col-md-6 ">
                        <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-title col-sm-12 col-md-6  rounded mt-3 mt-md-2 mb-md-2    shadow">
                        <h3 class="pt-3 mt-2">
                            بیمه عمر و مزایا
                        </h3>
                        <p class="insurance-desc p-5">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        </p>
                    </div>
                    <div class="insurance-photo d-md-none  col-sm-12 col-md-6 ">
                        <img src="{{ asset('assets/img/5.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-title col-sm-12 col-md-6 rounded mt-3 mt-md-2 mb-md-2   shadow">
                        <h3 class="pt-3 mt-2">
                            بیمه سرقت و مزایا
                        </h3>
                        <p class="insurance-desc p-5">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        </p>
                    </div>
                    <div class="insurance-photo d-none d-md-block col-sm-12 col-md-6  ">
                        <img src="{{ asset('assets/img/5.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start insurance Boxes Area ( home section 4 ) -->

@endsection


