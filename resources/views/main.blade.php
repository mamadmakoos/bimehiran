@extends("layout.master")
@section("meta")
    <title>ییمه ایران | نمایندگی عامری 5799</title>
    {{-- for seo --}}
    <META NAME="robots" CONTENT="noindex">
    <meta name="robots" content="noindex">
    <META NAME="robots" CONTENT="nofollow">
    <meta name="robots" content="nofollow">
    <META NAME="robots" CONTENT="noindex,nofollow">
    <meta name="robots" content="noindex,nofollow">

    <style>
        /********** Template CSS **********/
        :root {
            --primary: #29166F;
            --secondary: #E77919;
            --tertiary: #555555;
            --light: #0093dd;
            --dark: #011A41;
        }
    </style>
@endsection
@section("content")
    <!-- Start Main Banner Area ( home section 1 ) -->
    <div class="main-banner jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <h1 class="d-md-inline" style="color: var(--secondary) !important">کجا بیمه </h1>
                        <h3 class="d-md-inline" style="color: white">خدمات بیمه ایران </h3>                        <p class="text-justify">شرکت بیمه ایران یکی از قدیمی ترین بیمه های ایران است که از سال ۱۳۱۴ شروع به کار نموده
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
                            <p class="text-justify">بیمه بدنه یکی از انواع پرطرفدار بیمه خودرو است. برخلاف بیمه شخص ثالث، خرید بیمه بدنه برای رانندگان اجباری نیست. بیمه بدنه با ارائه پوشش‌های مختلف و متنوع از صاحبان خودرو در برابر خسارات مالی وارده به خودرو پشتیبانی می‌کند.</p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon-(7).png') }}" alt="">
                            </div>

                            <h3>بیمه ثالث</h3>
                            <p class="text-justify">خرید بیمه شخص ثالث برای تمام صاحبان وسایل نقلیه زمینی مثل موتور و ماشین اجباری است. این بیمه مانند یک سپر قوی و قابل اعتماد در کنار شماست. این بیمه خسارت تصادف هارا تا مبلغ بیمه نامه پوشش میدهد. </p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon-(4).png') }}" alt="">
                            </div>

                            <h3>بیمه آتش سوزی</h3>
                            <p class="text-justify">بیمه آتش سوزی به‌طور کلی خود ساختمان و کالاها و لوازم موجود در آن را در مقابل خطرات بیمه می‌کند. این بیمه  دو نوع خسارت را تحت پوشش قرار می‌دهد. ذکر این نکته لازم است که خسارت‌های جانی و بدنی تحت پوشش  قرار نمی‌گیرند.</p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon-(5).png') }}" alt="">
                            </div>

                            <h3>بیمه عمر و مزایا</h3>
                            <p class="text-justify">کالایی که توسط اشخاص حقیقی یا حقوقی در داخل کشور از شهری به شهر دیگر جابجا می‌شوند، تحت عنوان بیمه‌های داخلی تحت پوشش بیمه قرار می‌گیرند. بیمه حمل و نقل کالا خسارت‌های احتمالی وارد بر کالاها یا بار را جبران می‌کند. </p>

                            <a href="#" class="read-more-btn">بیشتر بخوانید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Boxes Area ( home section 2 ) -->

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
                            بیمه مسئولیت حمل و نقل متصدیان حمل و نقل
                        </h3>
                        <p class="text-justify insurance-desc p-5">
                            بیمه حمل و نقل  به دو نوع بیمه باربری و بیمه مسئولیت متصدیان حمل و نقل تقسیم  می‌گردد.
                            شرکت‌ها و موسسات حمل و نقل طبق قانون تجارت، کالاهایی را که حمل می‌کنند تحت پوشش قرارداد مسئولیت متصدیان حمل و نقل داخلی بیمه می نمایند و چنانچه کالاهای حمل شده دچار حادثه و خسارت گردد شرکت بیمه با توجه به قرارداد(از بارگیری تا تخلیه)، خسارت‌های وارده به ذینفع را در سریعترین زمان ممکن جبران می‌نماید.
                            این نمایندگی با توجه به سابقه طولانی همکاری با شرکت‌های حمل و نقل ،بهترین و جامع‌ترین قراردادهای حال حاضر در ایران را ارائه داده تا متصدیان و مدیران شرکت‌ها و موسسات حمل و نقل با آرامش خیال محموله را به مقاصد‌ مختلف حمل نمایند.


                        </p>
                    </div>
                    <div class="insurance-photo d-md-none col-sm-12 col-md-6 mtb-70 ">
                        <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-title col-sm-12 col-md-6 mt-3 mt-md-2 mb-md-2  rounded  shadow">
                        <h3 class="pt-5 mt-5">
                            بیمه آتش سوزی و مزایا
                        </h3>
                        <p class="text-justify insurance-desc p-5">
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
                        <p class="text-justify insurance-desc p-5">
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
                        <p class="text-justify insurance-desc p-5">
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

    <!-- start articles Area ( home section 3 ) -->
    <section class="article-area mt-md-5 mt-3">
        <div class="container">
            <h2 class="text-center">آخرین دسته بندی ها</h2>
            <hr>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach($categories as $category)
                    <div class="col">
                        <div class="card blue-gradient h-100">
                            <img src="{{ asset($category->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 25px">{{ $category->title }}</h5>
                                <div class="article-link text-center">
                                    <hr>
                                    <a href="{{ $category->slug }}" class="text-center text-white" style="font-size: 15px">ادامه مطلب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- start articles Area ( home section 3 ) -->

@endsection

