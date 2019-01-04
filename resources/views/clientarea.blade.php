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
                            <a href="{{url('/clientarea')}}" class="active-link">
                                <div class="active-profile"></div>
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
                    <p class="sp-body-learn-title">دوره های خریداری شده</p>
                    <hr class="sp-body-learn-hr">
                    @if(count($products) == 0)
                        <p class="sp-body-learn-title">شما تاکنون دوره ای خریداری ننموده اید.</p>
                        <hr class="sp-body-learn-hr">
                    @endif
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="{{asset('img2/350x260.png')}}" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="{{url('/products/' . $product->id)}}">{{$product->name}}</a>
                                            </div>
                                            <div class="teacher col-md-6">
                                                <p class="product-tsize new-product">{{$product->author}}</p>
                                            </div>
                                            @for($i=0; $i < $product->getAverageRating(); $i++)
                                                <i class="gold-star fa fa-star"></i>
                                            @endfor
                                            @for($i=0; $i < (5 - $product->getAverageRating()); $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <p class="product-off left-float"> تومان {{((100 - $product->discount)/100)*$product->price}}</p>
                                        <div class="clear-left">
                                            <img src="{{asset('img2/clock-outline.png')}}" class="clock">
                                            <p class="right-float">{{$product->getLength()}}</p>
                                            <p class="left-float product-price">
                                                تومان {{$product->price}} </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!--footer-->
<div class="sticky-stopper"></div>
@include('layouts.vFooter')

