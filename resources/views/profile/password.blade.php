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
@endsection
@section("content")

    <!-- Start  Area ( profile section 1 ) -->
    <section class=" mt-md-5 ptb-70">
        <div class="container mt-md-5">
            <div class="row">
                <div></div>
                <div class="col-lg-4 ">
                    <aside class="widget-area">
                        <section class="widget widget_sidebar">
                            @include('profile.partial.sidebar')
                        </section>
                    </aside>
                </div>
                <div class="col-lg-8 ">
                    <div class="profile">
                        <form action="{{ route('user_password_action') }}" method="post" class="">
                            @csrf
                            @if(Session::has("status"))
                                <div class="mb-4 alert alert-{{ Session::get("status")["type"] }}">{{ Session::get("status")["msg"] }}</div>
                            @endif
                            <div class="input-group">

                                <div class="pass m-3">
                                    <label class="form-label fw-bold" for="oldpassword" style="color: #E77919">رمز عبور فعلی</label>
                                    <input class="form-control rounded-3 " type="oldpassword" name="oldpassword" id="oldpassword">
                                </div>
                                <div class="pass m-3">
                                    <label class="form-label fw-bold" for="password" style="color: #E77919">رمز عبور جدید</label>
                                    <input class="form-control rounded-3 " type="password" name="password" id="password">
                                </div>
                                <div class="repass m-3">
                                    <label class="form-label fw-bold" for="repassword" style="color: #E77919">تایید رمز عبور جدید</label>
                                    <input class="form-control rounded-3 " type="password" name="repassword" id="repassword">

                                </div>
                            </div>
                            <div class="text-start">
                                <button class="btn btn-primary m-2 text-end" type="submit">
                                    تایید
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end  Area ( profile section 1 ) -->


@endsection




