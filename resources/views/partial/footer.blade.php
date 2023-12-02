
<!-- Start Account Create Area -->
<section class="account-create-area">
    <div class="container">
        <div class="account-create-content text-sm-center">
            <h2>در عرض یک دقیقه برای پرسیدن سوال خود اقدام کنید</h2>
            <p>اکنون برای دریافت پشتیبانی تماس بگیرید!</p>
            <a href="tel:09123135739" class="btn btn-primary"> کلیک کنید</a>
        </div>
    </div>
</section>
<!-- End Account Create Area -->

<!-- Start Footer Area -->
<footer class="footer-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="#"><img class="w-25" src="assets/img/logo/bimeh-iran-logo.png" alt="logo"></a>
                        <p>یک واقعیت طولانی مدت این است که محتوای قابل خواندن یک صفحه باعث می شود خواننده از تمرکز بر طرح کلی متن یا فرم پاراگراف های قرار داده شده در صفحه مورد نظر خود منحرف شود.</p>
                    </div>

                    <ul class="social-links">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget pl-5">
                    <h3>شرکت ما</h3>

                    <ul class="list">
                        <li><a href="#">خدمات</a></li>
                        <li><a href="#">انواع بیمه</a></li>
                        <li><a href="{{ route('about_us') }}">لوح تقدیر</a></li>
                        <li><a href="{{ route('weblog') }}">آخرین مقالات ما</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>پشتیبانی</h3>

                    <ul class="list">
                        {{--<li><a href="#">شبکه های اجتماعی</a></li>--}}
                        <li><a href="{{ route('about_us') }}">درباره ما</a></li>
                        <li><a href="{{ route('weblog') }}">وبلاگ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>راه های ارتباطی</h3>

                    <ul class="footer-contact-info">
                        <li><span>آدرس:</span>اتوبان شهید محلاتی - نرسیده به مخبر شمالی - ساختمان شیشه ای یاران - پلاک 397 - طبقه سوم</li>
                        <li><span>پست الکترونیک:</span> <a href="#">درج ایمیل</a></li>
                        <li><span>تلفن:</span> <a href="tel:02135868">021-35868</a></li>
                        <li><span>فکس:</span> <a href="tel:02133715330">021-33715330</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p>کپی رایت © 1400 تمام حقوق محفوظ است. طراحی و توسعه توسط <a href="tel:09123135739" target="_blank">MR Ramezanzadeh</a></p>
        </div>
    </div>

    <div class="map-image"><img src="assets/img/bg-map.png" alt="map"></div>
</footer>
<!-- End Footer Area -->

{{-- go top button --}}
<div class="go-top"><i class="fas fa-arrow-up"></i></div>
{{-- tel  button --}}
<a href="tel:02135868" class="telf"><i class="fas fa-phone"></i></a>

{{-- start login register modal --}}
<div class="modal fade" id="register-login">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ورود - ثبت نام</h5>
            </div>
            <div class="modal-body" id="change-code">
                <input type="tel" name="mobile" id="mobile" placeholder="شماره موبایل خود را وارد نمایید" class="text-center shadow-sm form-control">
                <span id="result-login-register"></span>
            </div>

        </div>
    </div>
</div>
{{-- end login register modal --}}

{{-- js scripts --}}
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield("src")
<script>
    $("#mobile").on("keyup",function(){
        mobile = $("#mobile").val();
        if(mobile.length == 11){
            $.ajax({
                url: "{{ route('login_register') }}",
                cache: false,
                type:"POST",
                data: {"mobile":mobile,"_token":"{{ csrf_token() }}"},
                success: function(result){
                    $("#change-code").html(result);
                }
            });
        }
    });
</script>
<script>

      $("#send-login-register").on("click",function(){
        mobile = $("#mobile").val();
        if(mobile.length == 11){
            $("#result-login-register").css("color","black").html("لطفا صبر کنید");
            $.ajax({
                url: "{{ route('login_register') }}",
                cache: false,
                type:"POST",
                data: {"mobile":mobile,"_token":"{{ csrf_token() }}"},
                success: function(result){
                    $("#change-code").html(result);
                }
            });
        }else{
            $("#result-login-register").html("شماره موبایل باید 11 رقم باشد");
        }
    });

</script>
<script>
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            formError();
            submitMSG(false, "آیا فرم را به درستی پر کردید؟");
        }
        else {
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm(){
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();
        var gridCheck = $("#gridCheck").val();

        $.ajax({
            type: "POST",
            url: "#",
            data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&phone_number=" + phone_number + "&message=" + message +"&gridCheck=" + gridCheck,
            success : function(text){
                if (text == "success"){
                    formSuccess();
                }
                else {
                    formError();
                    submitMSG(false,text);
                }
            }
        });
    }
    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "پیام ارسال شد!")
    }
    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }
    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }

</script>
</body>
</html>
