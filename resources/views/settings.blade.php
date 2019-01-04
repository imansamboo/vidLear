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
                                <input type="text" class="form-control profile-settings-input" id="nameFamily" placeholder="نام حقیقی و به فارسی بنویسید">
                            </div>
                            <div class="form-group">
                                <p>پست الکترونیک (ایمیل)</p>
                                <input type="email" class="form-control profile-settings-input" id="email" placeholder="example : test@test.com">
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
                                    <select class="form-control date-day" id="day">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select class="form-control date-month" id="month">
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
                                    <select class="form-control date-year" id="year">
                                        <option value="1330">1330</option>
                                        <option value="1331">1331</option>
                                        <option value="1332">1332</option>
                                        <option value="1333">1333</option>
                                        <option value="1334">1334</option>
                                        <option value="1335">1335</option>
                                        <option value="1336">1336</option>
                                        <option value="1337">1337</option>
                                        <option value="1338">1338</option>
                                        <option value="1339">1339</option>
                                        <option value="1340">1340</option>
                                        <option value="1341">1341</option>
                                        <option value="1342">1342</option>
                                        <option value="1343">1343</option>
                                        <option value="1344">1344</option>
                                        <option value="1345">1345</option>
                                        <option value="1346">1346</option>
                                        <option value="1347">1347</option>
                                        <option value="1348">1348</option>
                                        <option value="1349">1349</option>
                                        <option value="1350">1350</option>
                                        <option value="1351">1351</option>
                                        <option value="1352">1352</option>
                                        <option value="1353">1353</option>
                                        <option value="1354">1354</option>
                                        <option value="1355">1355</option>
                                        <option value="1356">1356</option>
                                        <option value="1357">1357</option>
                                        <option value="1358">1358</option>
                                        <option value="1359">1359</option>
                                        <option value="1360">1360</option>
                                        <option value="1361">1361</option>
                                        <option value="1362">1362</option>
                                        <option value="1363">1363</option>
                                        <option value="1364">1364</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <p>تیتر شغلی یا حرفه</p>
                                <input type="text" class="form-control profile-settings-input" id="job" placeholder="نام سمت یا حرفه ایی که در آن متخصص هستید.">
                                <p style="padding-top: 10px;font-size: 13px;">برای مثال: طراح رابط کاربری، برنامه‌نویس، تصویرساز، دبیر شیمی</p>
                            </div>
                            <div class="form-group">
                                <p>درباره من</p>
                                <textarea class="form-control profile-settings-input profile-bio" id="bio" placeholder="توضیحی مختصر و مفید درباره خودتان و حرفه‌ایی که در آن تخصص دارید، برای آشنایی بیشتر داشنجویان با شما"></textarea>
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
                                    <input type="text" class="form-control profile-settings-input" id="site" placeholder="http://www.example.com">
                                </div>
                                <div class="form-group">
                                    <p>تلگرام</p>
                                    <input type="text" class="form-control profile-settings-input" id="telegram" placeholder="https://t.me/...">
                                </div>
                                <div class="form-group">
                                    <p>لینکدین</p>
                                    <input type="text" class="form-control profile-settings-input" id="linkedin" placeholder="https://www.linkedin.com/in/...">
                                </div>
                                <div class="form-group">
                                    <p>توئیتر</p>
                                    <input type="text" class="form-control profile-settings-input" id="twitter" placeholder="https://www.twitter.com/...">
                                </div>
                                <div class="form-group">
                                    <p>فیسبوک</p>
                                    <input type="text" class="form-control profile-settings-input" id="facebook" placeholder="https://www.facebook.com/...">
                                </div>
                                <div class="form-group">
                                    <p>اینستاگرام</p>
                                    <input type="text" class="form-control profile-settings-input" id="instagram" placeholder="https://www.instagram.com/...">
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
                                    <p>رمز عبور فعلی</p>
                                    <input type="password" class="form-control profile-settings-input" id="password" placeholder="رمزعبور فعلی خود را وارد کنید.">
                                </div>
                                <div class="form-group">
                                    <p>رمز عبور جدید</p>
                                    <input type="password" class="form-control profile-settings-input" id="bew-password" placeholder="رمزعبور جدید خود را وارد کنید.">
                                    <p style="padding-top: 10px;font-size: 13px;">رمز عبور حداقل ۸ کاراکتر و دارای عدد و حروف بزرگ و کوچک باشد.</p>
                                </div>
                                <div class="form-group">
                                    <p>تکرار رمز عبور جدید</p>
                                    <input type="password" class="form-control profile-settings-input" id="bew-password-confirm" placeholder="رمزعبور جدید خود را دوباره وارد کنید.">
                                </div>
                                <button class="applyBtn">
                                    ثبت تغییرات
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--footer-->
<div class="sticky-stopper"></div>
@include('layouts.vFooter')
