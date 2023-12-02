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
                        <h3 class="d-md-inline" style="color: white">وقتی که خوب کافی نیست </h3>
                        <p class="text-justify">شرکت سهامی بیمه ایران اولین و تنها بیمه دولتی می باشد که از آبان ماه 1314 شروع به کار نموده است</p>
                        <a href="#ts" class="btn btn-primary">انواع بیمه</a>
                        <a href="#au" class="btn btn-primary">تماس با ما</a>
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
                <div class="row m-0 p-0">
                    <div class="col-lg-2 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="">
                                <img src="{{ asset('assets/img/boxf2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-featured-box">
                            <h3> بیمه مسئولیت متصدیان</h3>
                            <p class="text-justify">کالایی که توسط اشخاص حقیقی یا حقوقی در داخل کشور از شهری به شهر دیگر جابجا می‌شوند، تحت عنوان بیمه‌های داخلی تحت پوشش بیمه قرار می‌گیرند. بیمه حمل و نقل کالا خسارت‌های احتمالی وارد بر کالاها یا بار را جبران می‌کند. </p>

                            {{-- <a href="#" class="read-more-btn">بیشتر بخوانید</a> --}}

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="">
                                <img src="{{ asset('assets/img/boxf1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-featured-box">
                            <h3>بیمه باربری</h3>
                            <p class="text-justify">کالایی که توسط اشخاص حقیقی یا حقوقی در داخل کشور از شهری به شهر دیگر جابجا می‌شوند، تحت عنوان بیمه‌های داخلی تحت پوشش بیمه قرار می‌گیرند. بیمه حمل و نقل کالا خسارت‌های احتمالی وارد بر کالاها یا بار را جبران می‌کند. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Boxes Area ( home section 2 ) -->

    <hr class="text-white" id="ts">

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
                            بیمه مسئولیت
                        </h3>
                        <p class="text-justify insurance-desc p-5">
                            هریک از ما در هر حوزه زندگی‌ شخصی یا حرفه‌ای‌مان، مسئولیت‌هایی می‌پذیریم بیمه مسئولیت، بیمه تعهد بیمه‌گزار در برابر خسارات وارد به اشخاص دیگر است. بیمه‌گزاران با استفاده از تسهیلات و شرایط این بیمه‌نامه، تعهدات خود را در قبال دیگران بیمه می‌کنند. بطور کل اگرچه بیمه مسئولیت تأمینی برای اشخاص ثالث در قبال مخاطرات ناشی از فعالیت و زیست بیمه گذار می باشد اما بیمه گذار با توجه به جبران خسارت از سوی بیمه گر (شرکت بیمه) آرامش و اطمینان خاطری در زمان فعالیت خود کسب خواهد نمود.
                        </p>
                    </div>
                    <div class="insurance-photo d-md-none col-sm-12 col-md-6 mtb-70 ">
                        <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-title col-sm-12 col-md-6 mt-3 mt-md-2 mb-md-2  rounded  shadow">
                        <h3 class="pt-5 mt-5">
                            بیمه آتش سوزی
                        </h3>
                        <p class="text-justify insurance-desc p-5">بیمه آتش سوزی، از زیر مجموعه های بیمه اموال است که زیان‌های مالی که بر اثر وقوع آتش سوزی به اموال و دارائی‌های منقول و غیرمنقول بیمه‌گذار وارد می شود، را تحت پوشش قرار می دهد. این بیمه شامل دو دسته پوشش اصلی و اضافه می‌شود؛ آتش سوزی، صاعقه و انفجار پوشش‌های اصلی این بیمه‎نامه هستند. به علاوه، بیمه‌گزار می‌تواند با انتخاب مواردی مثل ترکیدگی لوله، خرابی ناشی از بارش برف و باران، سقوط هواپیما و بالگرد، سرقت با شکست حرز و بلایای طبیعی (مثل زلزله، آتشفشان، سیل، نشست و رانش زمین) از پوشش‌های اضافه بهره‌مند شود.
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
                            بیمه عمر
                        </h3>
                        <p class="text-justify insurance-desc p-5">در واقع بیمه عمر یک پشتوانه مالی محکم برای دوران پیری، بازنشستگی یا بعد از فوت برای بازماندگان است. قراردادی است که میان یک شرکت بیمه و شخص بیمه شونده منعقد می‌شود، که در آن بیمه شونده متعهد به پرداخت مبلغی به صورت تعیین شده می‌گردد علاوه بر سرمایه‌گذاری با سود تضمینی، از پوشش‌های متنوع و کاربردی هم بهره‌مند می‌شوند و با بروز وقایعی چون: فوت طبیعی، فوت بر اثر حادثه، نقص عضو، پرداخت هزینه‌های پزشکی حادثه، ابتلا به بیماری‌های خاص یا از کار افتادن بیمه شده، شرکت بیمه موظف خواهد بود، سرمایه بیمه شده را به‌طور یکجا یا به صورت مستمری به بیمه‌گذار یا به شخص ثالثی که وی تعیین کرده، بپردازد.</p>
                    </div>
                    <div class="insurance-photo d-md-none  col-sm-12 col-md-6 ">
                        <img src="{{ asset('assets/img/5.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="insurance-title col-sm-12 col-md-6 rounded mt-3 mt-md-2 mb-md-2   shadow">
                        <h3 class="pt-3 mt-2">
                            بیمه درمان
                        </h3>
                        <p class="text-justify insurance-desc p-5">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ازبیمه درمان یا بیمه بهداشت و درمان، نوعی بیمه است، که پرداخت یا تحمیل هزینه‌های مختلف خدمات سلامت و پزشکی، اعم از ارتقاء سلامت، پیشگیری، درمان و توانبخشی افراد بیمه شده را، می‌پذیرد. کارفرما می‌تواند اعضای سازمان شامل کارکنان رسمی، پیمانی، قراردادی و حتی کارکنان بازنشسته خود را بیمه تکمیلی نماید؛ البته، تعداد این افراد باید از حدی فراتر رود. همه آن افراد باید تحت پوشش بیمه تامین اجتماعی با شماره کارگاهی آن سازمان باشند. در بیمه تکمیلی گروهی، می‌توان علاوه بر اعضای سازمان خانواده آن‌ها نظیر همسر، فرزندان، پدر، مادر و افراد تحت تکفل را تحت پوشش قرار داد.
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
                                <h5 class="card-title text-justify text-center" style="font-size: 25px">{{ $category->title }}</h5>
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

    <!-- start ontact us Area ( home section 5 ) -->
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
    <!-- end contact us Area ( home section 5 ) -->

    <!-- start news area  ( home section 6 ) -->
    <section class="news-area mt-md-5 mt-3">
        <div class="container">
            <h2 class="text-center">آخرین اخبار</h2>
            <hr>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card mb-3 h-100 " style="border-radius: 20px;">
                        <div class="row g-0">
                            <div class="col-md-5 align-self-center p-2">
                                <img src="{{ asset('/assets/img/blog-image/3.jpg') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-justify text-white">قبل از ارسال بار این مطلب را بخوانید!</h5>
                                    <a href="" class="btn btn-primary btn-sm text-center">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card mb-3 h-100 " style="border-radius: 20px;">
                        <div class="row g-0">
                            <div class="col-md-5 align-self-center p-2">
                                <img src="{{ asset('/assets/img/blog-image/4.jpg') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-justify text-white">قبل از ارسال بار این مطلب را بخوانید!</h5>
                                    <a href="" class="btn btn-primary btn-sm text-center">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="card mb-3 h-100 " style="border-radius: 20px;">
                        <div class="row g-0">
                            <div class="col-md-5 align-self-center p-2">
                                <img src="{{ asset('/assets/img/blog-image/5.jpg') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-justify text-white">قبل از ارسال بار این مطلب را بخوانید!</h5>
                                    <a href="" class="btn btn-primary btn-sm text-center">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card mb-3 h-100 " style="border-radius: 20px;">
                        <div class="row g-0">
                            <div class="col-md-5 align-self-center p-2">
                                <img src="{{ asset('/assets/img/blog-image/4.jpg') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-justify text-white">قبل از ارسال بار این مطلب را بخوانید!</h5>
                                    <a href="" class="btn btn-primary btn-sm text-center">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card mb-3 h-100 " style="border-radius: 20px;">
                        <div class="row g-0">
                            <div class="col-md-5 align-self-center p-2">
                                <img src="{{ asset('/assets/img/blog-image/5.jpg') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-justify text-white">قبل از ارسال بار این مطلب را بخوانید!</h5>
                                    <a href="" class="btn btn-primary btn-sm text-center">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card mb-3 h-100 " style="border-radius: 20px;">
                        <div class="row g-0">
                            <div class="col-md-5 align-self-center p-2">
                                <img src="{{ asset('/assets/img/blog-image/3.jpg') }}" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-justify text-white">قبل از ارسال بار این مطلب را بخوانید!</h5>
                                    <a href="" class="btn btn-primary btn-sm text-center">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news area  ( home section 6 ) -->


@endsection

