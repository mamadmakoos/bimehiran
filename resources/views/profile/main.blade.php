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
                <div class="col-lg-4 ">
                    <aside class="widget-area">
                        <section class="widget widget_sidebar">
                            @include('profile.partial.sidebar')
                        </section>
                    </aside>
                </div>
                <div class="col-lg-8 ">
                    <div class="profile">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(Session::has("success"))
                            <div class="alert alert-success">
                                اطلاعات با موفقیت ویرایش شد
                            </div>
                        @endif
                        @if(Session::has("payment_error"))
                            <div class="alert alert-danger">
                                {{ Session::get('payment_error') }}
                            </div>
                        @endif
                        @if(Session::has("payment_success"))
                            <div class="alert alert-success">
                                {{ Session::get('payment_success') }}
                            </div>
                        @endif
                        <form action="{{ route("edit_profile_action") }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="mb-4">
                                        <label>موبایل</label>
                                        <input class="form-control" type="text" name="mobile" disabled value="@if(Auth::user()->mobile != null) {{ Auth::user()->mobile }} @endif">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="mb-4">
                                        <label>نام کاربری</label>
                                        <input class="form-control" type="text" name="user_name" value=" {{ $result->user_name ?? 'هنوز پر نشده' }}">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">

                                    <div class="mb-4">
                                        <label>نام</label>
                                        <input class="form-control" type="text" id="fname" name="fname" value=" {{ $result->profile->fname ?? 'خالی'}}">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="mb-4">
                                        <label>نام خانوادگی</label>
                                        <input class="form-control" type="text" id="lname" name="lname" value="{{ $result->profile->lname ?? 'خالی'}}">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="mb-4">
                                        <label>کد ملی</label>
                                        <input class="form-control" type="text" id="melli_code" name="melli_code" value="{{ $result->profile->melli_code ?? 'هنوز پر نشده'}}">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-4">
                                        <label>تلفن</label>
                                        <input class="form-control" type="tel" name="phone" value="{{ $result->profile->phone ?? 'هنوز پر نشده'}}">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-4">
                                        <label>کد پستی</label>
                                        <input class="form-control" type="tel" name="postal_code" value="{{ $result->profile->postal_code ?? 'هنوز پر نشده'}}">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="mb-4">
                                        <label>آدرس</label>
                                        <textarea class="form-control" id="address" name="address" rows="6">{{ $result->profile->address ?? 'هنوز پر نشده'}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-start">
                                        <button class="btn btn-primary m-2 text-end" type="submit">
                                            تایید
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end  Area ( profile section 1 ) -->


@endsection




