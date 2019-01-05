@include('layouts.iHeader')


<div class="main-clientarea">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 sp-sidebar-main">
                <!-- ////////////////// Sidebar /////////////////// -->

                <!-- ///////////////// menu 1 /////////////////////// -->
                <div class="sp-sidebar">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-sidebar-owner-main">
                        <img src="pics/user-pic.jpeg" class="sp-sidebar-owner-pic">
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
                        <div class="profile-option-2">
                            <a href="{{url('transactions')}}" class="profile-link">
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
                        <div class="sp-sidebar-profile">
                            <a href="{{url('settings')}}" class="active-link">
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
                {!! Form::open(['route' => 'user.update', 'files' => true])!!}
                    {{Form::token()}}
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body sp-top-align">
                        <p class="sp-body-learn-title">تنظیمات پروفایل</p>
                        <hr class="sp-body-learn-hr">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <p class="profile-title">
                                    اطلاعات حساب کاربری
                                </p>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <p>تصویر پروفایل</p>
                                    <div class="profile-settings">
                                        <img src="pics/user-pic.jpeg" class="sp-sidebar-owner-pic profile-pic">
                                        <input accept="image/*" id="fileInput" style="display: none;" type="file">
                                        <button class="profile-picture profile-pic-btn" onclick="document.getElementById('fileInput').click();">
                                            <span class="captionSpan">تغییر تصویر</span>
                                        </button>
                                    </div>
                                </div>
                                <br><br><br>
                                <br><br><br>
                                <div class="form-group">
                                    <p>نام و نام خانوادگی</p>
                                    <input type="text" class="form-control profile-settings-input" name="name" value="{{Auth::user()->name}}" id="name" placeholder="نام حقیقی و به فارسی بنویسید">
                                </div>
                                <div class="form-group">
                                    <p>پست الکترونیک (ایمیل)</p>
                                    <input type="email" class="form-control profile-settings-input" name="email" value="{{Auth::user()->email}}" id="email" placeholder="example : test@test.com">
                                </div>
                            </div>
                        </div>
                        <hr class="the-hr">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <p class="profile-title">
                                    اطلاعات فردی
                                </p>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <p>تاریخ تولد</p>
                                    <div class="date">
                                        <select class="form-control date-day" name="day" value="{{Auth::user()->day}}" id="day">
                                            @for($i = 1; $i < 31; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                        <select class="form-control date-month" name="month" value="{{Auth::user()->month}}" id="month">
                                            <option value="فروردین">فروردین</option>
                                            <option value="اردیبهشت">اردیبهشت</option>
                                            <option value="خرداد">خرداد</option>
                                            <option value="تیر">تیر</option>
                                            <option value="مرداد">مرداد</option>
                                            <option value="شهریور">شهریور</option>
                                            <option value="مهر">مهر</option>
                                            <option value="آبان">آبان</option>
                                            <option value="آذر">آذر</option>
                                            <option value="دی">دی</option>
                                            <option value="بهمن">بهمن</option>
                                            <option value="اسفند">اسفند</option>
                                        </select>
                                        <select class="form-control date-year" name="year" value="{{Auth::user()->year}}" id="year">
                                            @for($i = 1330; $i < 1400; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <p>تیتر شغلی یا حرفه</p>
                                    <input type="text" class="form-control profile-settings-input" id="job" name="job" value="{{Auth::user()->job}}" placeholder="نام سمت یا حرفه ایی که در آن متخصص هستید.">
                                    <p style="padding-top: 10px;font-size: 13px;">برای مثال: طراح رابط کاربری، برنامه‌نویس، تصویرساز، دبیر شیمی</p>
                                </div>
                                <div class="form-group">
                                    <p>درباره من</p>
                                    <textarea class="form-control profile-settings-input profile-bio" name="bio" value="{{Auth::user()->bio}}" id="bio" placeholder="توضیحی مختصر و مفید درباره خودتان و حرفه‌ایی که در آن تخصص دارید، برای آشنایی بیشتر داشنجویان با شما"></textarea>
                                </div>
                            </div>
                            <hr class="the-hr">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <p class="profile-title">
                                        راه های ارتباطی
                                    </p>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <p>سایت</p>
                                        <input type="text" class="form-control profile-settings-input" name="site" value="{{Auth::user()->site}}" id="site" placeholder="http://www.example.com">
                                    </div>
                                    <div class="form-group">
                                        <p>تلگرام</p>
                                        <input type="text" class="form-control profile-settings-input" name="telegram" value="{{Auth::user()->telegram}}" id="telegram" placeholder="https://t.me/...">
                                    </div>
                                    <div class="form-group">
                                        <p>لینکدین</p>
                                        <input type="text" class="form-control profile-settings-input" name="linkedin" value="{{Auth::user()->linkedin}}" id="linkedin" placeholder="https://www.linkedin.com/in/...">
                                    </div>
                                    <div class="form-group">
                                        <p>توئیتر</p>
                                        <input type="text" class="form-control profile-settings-input" name="twitter" value="{{Auth::user()->twitter}}" id="twitter" placeholder="https://www.twitter.com/...">
                                    </div>
                                    <div class="form-group">
                                        <p>فیسبوک</p>
                                        <input type="text" class="form-control profile-settings-input" name="facebook" value="{{Auth::user()->facebook}}" id="facebook" placeholder="https://www.facebook.com/...">
                                    </div>
                                    <div class="form-group">
                                        <p>اینستاگرام</p>
                                        <input type="text" class="form-control profile-settings-input" name="instagram" value="{{Auth::user()->instagram}}" id="instagram" placeholder="https://www.instagram.com/...">
                                    </div>
                                </div>
                            </div>
                            <hr class="the-hr">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <p class="profile-title">
                                        تغییر رمز عبور
                                    </p>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <p>رمز عبور جدید</p>
                                        <input type="password" class="form-control profile-settings-input" name="new-password" id="new-password" placeholder="رمزعبور جدید خود را وارد کنید.">
                                        <p style="padding-top: 10px;font-size: 13px;">رمز عبور حداقل ۸ کاراکتر و دارای عدد و حروف بزرگ و کوچک باشد.</p>
                                    </div>
                                    <div class="form-group">
                                        <p>تکرار رمز عبور جدید</p>
                                        <input type="password" class="form-control profile-settings-input" name="new-password-confirm" id="new-password-confirm" placeholder="رمزعبور جدید خود را دوباره وارد کنید.">
                                    </div>
                                    <button class="applyBtn" type="submit">
                                        ثبت تغییرات
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


<!--footer-->
<div class="sticky-stopper"></div>
@include('layouts.vFooter')
