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
                    <div class="profile-option-1">
                        <div class="profile-option-1">
                            <a href="{{url('/clientarea')}}" class="profile-link">
                                <div class="profile"></div>
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
                        <div class="sp-sidebar-profile">
                            <a href="{{url('favorite')}}" class="active-link">
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
                    <p class="sp-body-learn-title">علاقه مندی ها</p>
                    <hr class="sp-body-learn-hr">
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{asset('img2/350x260.png')}}" class="img-responsive" alt="a"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
                                        </div>
                                        <div class="teacher col-md-6">
                                            <p class="product-tsize new-product">مهران عباسی</p>
                                        </div>
                                        <div class="rating col-md-6">
                                            <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                        </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                        </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="product-off left-float">180.000</p>
                                    <div class="clear-left">
                                        <img src="{{asset('img2/clock-outline.png')}}" class="clock">
                                        <p class="right-float">07:48:29</p>
                                        <p class="left-float product-price">
                                            145.000 تومان</p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{asset('img2/350x260.png')}}" class="img-responsive" alt="a"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
                                        </div>
                                        <div class="teacher col-md-6">
                                            <p class="product-tsize new-product">مهران عباسی</p>
                                        </div>
                                        <div class="rating col-md-6">
                                            <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                        </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                        </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="product-off left-float">180.000</p>
                                    <div class="clear-left">
                                        <img src="{{asset('img2/clock-outline.png')}}" class="clock">
                                        <p class="right-float">07:48:29</p>
                                        <p class="left-float product-price">
                                            145.000 تومان</p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{asset('img2/350x260.png')}}" class="img-responsive" alt="a"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
                                        </div>
                                        <div class="teacher col-md-6">
                                            <p class="product-tsize new-product">مهران عباسی</p>
                                        </div>
                                        <div class="rating col-md-6">
                                            <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                        </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                        </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="product-off left-float">180.000</p>
                                    <div class="clear-left">
                                        <img src="{{asset('img2/clock-outline.png')}}" class="clock">
                                        <p class="right-float">07:48:29</p>
                                        <p class="left-float product-price">
                                            145.000 تومان</p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{asset('img2/350x260.png')}}" class="img-responsive" alt="a"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
                                        </div>
                                        <div class="teacher col-md-6">
                                            <p class="product-tsize new-product">مهران عباسی</p>
                                        </div>
                                        <div class="rating col-md-6">
                                            <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                        </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                        </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="product-off left-float">180.000</p>
                                    <div class="clear-left">
                                        <img src="{{asset('img2/clock-outline.png')}}" class="clock">
                                        <p class="right-float">07:48:29</p>
                                        <p class="left-float product-price">
                                            145.000 تومان</p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{asset('img2/350x260.png')}}" class="img-responsive" alt="a"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
                                        </div>
                                        <div class="teacher col-md-6">
                                            <p class="product-tsize new-product">مهران عباسی</p>
                                        </div>
                                        <div class="rating col-md-6">
                                            <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                        </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                        </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="product-off left-float">180.000</p>
                                    <div class="clear-left">
                                        <img src="{{asset('img2/clock-outline.png')}}" class="clock">
                                        <p class="right-float">07:48:29</p>
                                        <p class="left-float product-price">
                                            145.000 تومان</p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
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
