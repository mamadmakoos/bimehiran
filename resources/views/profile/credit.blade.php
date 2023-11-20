@extends("layout.master")
@section("meta")
    <title>ییمه ایران | افزایش عتبار</title>
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
                        <form action="{{ route('user_credit_action') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-4">
                                        <label for="credit">مبلغ</label>
                                        <input class="form-control text-center" type="text" id="credit" name="amount" value="0">
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
                            <div class="row">
                                <div class="col-12">
                                    @if(isset($history[0]))
                                        <table class="table table-bordered table-striped table-hover table-sm">
                                            <tr>
                                                <th>مبلغ</th>
                                                <th>تاریخ</th>
                                                <th>وضعیت</th>
                                            </tr>
                                            @foreach($history as $item)
                                                <tr>
                                                    <td class="text-center">{{ number_format($item->amount) }}</td>
                                                    <td class="text-center">{{ \Morilog\Jalali\Jalalian::forge($item->created_at)->ago() }}</td>
                                                    <td class="text-center text-{{ \App\Models\Payments::statusToFa($item->status)[1] }}">{{ \App\Models\Payments::statusToFa($item->status)[0] }}</td>
                                                </tr>
                                            @endforeach
                                        </table>

                                    @else
                                        <div class="alert alert-danger">سابقه پرداختی یافت نشد</div>
                                    @endif
                                </div>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end  Area ( profile section 1 ) -->


@endsection




