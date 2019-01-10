@include('layouts.iHeader')


<div class="main-clientarea">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 sp-sidebar-main">
                <!-- ////////////////// Sidebar /////////////////// -->

                <!-- ///////////////// menu 1 /////////////////////// -->
                <div class="sp-sidebar">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-sidebar-owner-main">
                        @if(isset($user->photo))
                            <img src="{{asset('/pics/' .$user->photo )}}" class="sp-sidebar-owner-pic profile-pic">
                        @endif
                        <p class="sp-sidebar-owner-name">حامد خالقی اصفهانی</p>
                    </div>
                    <div class="sp-sidebar-profile">
                        <div class="profile-option-1">
                            <a href="{{url('/clientarea')}}" class="profile-link">
                                <i class="fa fa-3x fa-graduation-cap" aria-hidden="true"></i>
                                <p class="profile-txt">
                                    دوره های خریداری شده
                                </p>
                            </a>
                        </div>
                        <hr>
                        <div class="sp-sidebar-profile">
                            <a href="{{url('transactions')}}" class="active-link">
                                <div class="active-profile"></div>
                                <i class="fa fa-3x fa-credit-card" aria-hidden="true"></i>
                                <p class="profile-txt">
                                    تراکنش های مالی
                                </p>
                            </a>
                        </div>
                        <hr>
                        <div class="profile-option-3">
                            <a href="{{url('favorite')}}" class="profile-link">
                                <i class="fa fa-3x fa-heart" aria-hidden="true"></i>
                                <p class="profile-txt">
                                    علاقه مندی ها
                                </p>
                            </a>
                        </div>
                        <hr>
                        <div class="profile-option-4">
                            <a href="{{url('settings')}}" class="profile-link">
                                <i class="fa fa-3x fa-cogs" aria-hidden="true"></i>
                                <p class="profile-txt">
                                    تنظیمات پروفایل
                                </p>
                            </a>
                        </div>
                        <hr>
                        <div class="profile-option-5">
                            <a href="{{url('/logout')}}" class="profile-link">
                                <i class="fa fa-3x fa-sign-out" aria-hidden="true"></i>
                                <p class="profile-txt">
                                    خروج
                                </p>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 sp-body-main">
                <!-- ////////////////// Body /////////////////// -->

                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body sp-top-align">
                    <p class="sp-body-learn-title">تراکنش های مالی</p>
                    <hr class="sp-body-learn-hr">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">تاریخ</th>
                            <th scope="col">مبلغ</th>
                            <th scope="col">کد پیگیری</th>
                            <th scope="col">وضعیت</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(App\PtOrder::where('user_id', '=', Auth::user()->id)->count() > 0)
                            @foreach(App\PtOrder::where('user_id', '=', Auth::user()->id)->get() as $invoice)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$invoice->product->name}}</td>
                                    <td>{{$invoice->shamsi_date}}</td>
                                    <td>{{10*($invoice->price)}} ریال</td>
                                    <td>{{$invoice->au}}</td>
                                    @if($invoice->payment_result == 0)
                                    <td class="transaction-success">موفق</td>
                                    @else
                                    <td class="transaction-faild">پرداخت نشده</td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                           <tr>
                               <td colspan="6"> <p class="sp-body-learn-title">سفارشی تا کنون ثبت نشده است</p></td>
                           </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!--footer-->
<div class="sticky-stopper"></div>
@include('layouts.vFooter')
