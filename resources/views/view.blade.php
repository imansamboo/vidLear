@include('layouts.vHeader')

<!------ Products ---------->

<div class="container sp-head">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p class="sp-head-title">
                {{$product->name}}
            </p>
            <p>
                <a href="{{url('/')}}" class="sp-head-link">صفحه نخست</a>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <a href="{{url('/categories/' . $product->categories[0]->id . '/products')}}" class="sp-head-link-active">{{$product->categories[0]->title}}</a>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <a href="{{url('/products/' . $product->id)}}" class="sp-head-link">{{$product->name}}</a>
            </p>
        </div>
    </div>
</div>
{{--
<div id="Stellar_video_player" style="direction: ltr;position: block;overflow:hidden;max-height:460px" ></div>
--}}


<div class="container">

    <div class="row">

        <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 sp-sidebar-main">
            <!-- ////////////////// Sidebar /////////////////// -->
            <div class="sp-sidebar">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 rating sp-sidebar-rating">
                    @if(!$productBuy)<div id="shouldBuy"><p class="help-block label-danger" style="color: white;display: none"> برای ثبت رای نیاز دارید دوره را بخرید</p></div>@endif
                    <center><img id="load-rate" src="{{asset('img/loader.gif')}}"  style="width: 8%;display: none"></center>
                    <div class="the-rate-star" id="star1-load">
                        @if($rating == 0)
                            <i class="fa fa-2x fa-star" id="5"></i>
                            <i class="fa fa-2x fa-star" id="4"></i>
                            <i class="fa fa-2x fa-star" id="3"></i>
                            <i class="fa fa-2x fa-star" id="2"></i>
                            <i class="fa fa-2x fa-star" id="1"></i>
                        @else
                            @for ($i = 0; $i < $rating; $i++)
                                <i class="fa fa-2x fa-star" style="color:  #FFC106;pointer-events: none;" ></i>
                            @endfor
                        @endif
                    </div>
                    <div class="sp-rating-num" id="star2-load">
                        @if($averageRate == "بدون رای")
                            <p class="sp-rating-code-two">{{$averageRate}} </p>
                        @else
                            <p class="sp-rating-code-one"> {{number_format((float)$averageRate, 1, '.', '')}} </p><p class="sp-rating-code-two">از {{$voterCount}} رای </p>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-sidebar-data-main">
                    <div class="discount">
                        <span class="discount-per">50%</span>
                        تخفیف
                    </div>
                    <p class="sp-sidebar-data-title">اطلاعات دوره :</p>

                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <img src="{{asset('img2/format-list-checkbox.png')}}">
                        <p class="sp-sidebar-data">تعداد ویدئوها</p>
                        <p class="sp-sidebar-data">{{$videoCount}}</p>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <img src="{{asset('img2/clock-outline.png')}}">
                        <p class="sp-sidebar-data"> مدت زمان دوره</p>
                        <p class="sp-sidebar-data">{{gmdate("H:i:s", $totalDuration)}}</p>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <img src="{{asset('img2/account-group.png')}}">
                        <p class="sp-sidebar-data">تعداد دانشجویان</p>
                        <p class="sp-sidebar-data">125</p>
                    </div>
                </div>
                @if($productBuy)
                    <div class="sp-sidebar-buy-main">
                        <a class="sp-sidebar-buy" href="#"> دوره خریداری شده است</a>
                    </div>
                @else
                    <div class="realPrice">
                        {{$product->price}}
                    </div>
                    <div class="sp-sidebar-buy-main">
                        <a class="sp-sidebar-buy" href="{{url('/payInvoice/' . $product->id)}}">خرید دوره | {{((100 - $product->discount)/100)*$product->price}} تومان</a>
                    </div>
                @endif

                <div class="sp-sidebar-favor">
                    <img id="load-favor" src="{{asset('img/loader.gif')}}"  style="width: 4%;display: none">
                    <a class="like-this">
                        <p id="like-it">
                            @if($isFavored == 1)
                                <i class="fa fa-2x fa-heart" aria-hidden="true" style="color: red"></i>
                            @else
                                <i class="fa fa-2x fa-heart" aria-hidden="true"></i>
                            @endif

                         افزودن به لیست مورد علاقه ها
                        </p>
                    </a>
                </div>
            </div>

            <!-- ///////////////// menu 2 /////////////////////// -->
            <div class="sp-sidebar">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-sidebar-owner-main">
                    @if(isset($product->author_photo))
                        <img src="{{url('pics/'. $product->author_photo)}}" class="sp-sidebar-owner-pic">
                    @endif
                    <p class="sp-sidebar-owner-name">{{$product->author}}</p>
                </div>
                <p class="sp-sidebar-owner-desc">{{$product->author_description}}</p>
            </div>

            <!-- ///////////////// menu 3 /////////////////////// -->
            <div class="sp-sidebar">
                <div class="sp-sidebar-share">
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 sp-sidebar-share-option">
                        <p class="sp-sidebar-share-txt">اشتراک گذاری</p>
                    </div>
                    <div class="col-md-6 sp-sidebar-share-lin">
                        <p class="sp-sidebar-share-icons">
                            <a class="sp-sidebar-share-link" href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                            </a>
                            <a class="sp-sidebar-share-link" href="https://twitter.com/home?status={{url()->full()}}" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a class="sp-sidebar-share-link" href="https://www.linkedin.com/shareArticle?mini=true&url=&title={{$product->name}}}&summary={{$product->description}}&source={{url()->full()}}" target="_blank">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a class="sp-sidebar-share-link" href="#" target="_blank">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 sp-body-main" >
            <!-- ////////////////// Body /////////////////// -->
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body" style="padding:0">
                @if(count($videos) > 0)

                    <div id="Stellar_video_player" class="sp-image" style="direction: ltr;padding: 0;    border-radius: 5px;    overflow: hidden;    min-height: 460px;    background-color: #212121;
"></div>@endif
                <div class="sp-img"  style="direction: rtl">
                    <a href="#" class="round-button"><i class="fa fa-play fa-3x"></i></a>
                    <img src="{{asset('img2//Rain-l.jpg')}}" class="img-responsive">
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body">
                <div class="sp-body-data">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <p>
                            <img src="{{url('img2/the_key.png')}}" class="img-key">
                            دسترسی سریع
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <p>
                            <img src="{{url('img2/the_chat.png')}}" class="img-other">
                            ارتباط با استاد
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <p>
                            <img src="{{url('img2/the_wallet.png')}}" class="img-other">
                            امکان بازگشت وجه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body sp-top-align">
                <p class="sp-body-learn-title">توضیحات و سرفصل دوره</p>
                <hr class="sp-body-learn-hr">
                <p class="sp-body-learn-desc">{!! $product->description !!}</p>

                <p class="sp-body-learn-title">سرفصل دوره</p>
                <hr class="sp-body-learn-hr">

                <!-- Timeline -->
                @if($productBuy)
                    <div class="timeline">
                        <!-- Line component -->
                        <div class="line line-color"></div>

                        <div class="the-hover">
                            <div class="separator line-color"></div>
                            <article class="panel panel-default panel-outline">
                                <div class="panel-heading icon">
                                    <p class="the-number">1</p>
                                </div>
                                <div class="panel-body">
                                    <div class="timeline-right">
                                        <p>مقدمه دوره</p>
                                    </div>
                                    <div class="timeline-left">

                                        <a href="{{url('/products/' . $product->id)}}" class="timeline-links"><p class="timeline-dl" style="margin-top: 0px;">{{gmdate("i:s", $videos[0]->duration)}}</p></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @foreach($videos as $video)
                            @if($loop->index != 0)
                                <div class="the-hover">
                                    <div class="separator line-color"></div>
                                    <article class="panel panel-default panel-outline">
                                        <div class="panel-heading icon">
                                            <p class="the-number">{{$loop->index + 1}}</p>
                                        </div>
                                        <div class="panel-body">
                                            <div class="timeline-right">
                                                <a @if(Auth::user())href="{{'/products/'. $product->id.'/video/' . $video->id}}"@endif><p>{{$video->title}}</p></a>
                                            </div>
                                            <div class="timeline-left">

                                                <a @if(Auth::user())href="{{'/products/'. $product->id.'/video/' . $video->id}}"@endif class="timeline-links "><p class="timeline-dl" style="margin-top: 0px;">{{gmdate("i:s", $video->duration)}}</p></a>
                                            </div>                            </div>
                                    </article>
                                </div>
                            @endif
                        @endforeach
                    </div>

                @else
                    <div class="timeline">
                        <!-- Line component -->
                        <div class="line line-color"></div>

                        <div class="the-hover">
                            <div class="separator line-color"></div>
                            <article class="panel panel-default panel-outline">
                                <div class="panel-heading icon">
                                    <p class="the-number">1</p>
                                </div>
                                <div class="panel-body">
                                    <div class="timeline-right">
                                        <p>مقدمه دوره</p>
                                        <div class="timeline-free">
                                            <p>نمایش رایگان</p>
                                        </div>
                                    </div>
                                    <div class="timeline-left">

                                        <a href="{{url('/products/' . $product->id)}}" class="timeline-links"><p class="timeline-dl" style="margin-top: 0px;">{{gmdate("i:s", $videos[0]->duration)}}</p></a>
                                    </div>                            </div>
                            </article>
                        </div>
                        @foreach($videos as $video)
                            @if($loop->index != 0)
                                <div class="the-hover">
                                    <div class="separator line-color"></div>
                                    <article class="panel panel-default panel-outline">
                                        <div class="panel-heading icon">
                                            <i class="fa fa-lock lock-icon"></i>
                                        </div>
                                        <div class="panel-body">
                                            <div class="timeline-right">
                                                <p>{{$video->title}}</p>
                                            </div>
                                            <div class="timeline-left">
                                                @if(Auth::user())

                                                <a href="javascript:javascript:forceBuy();" class="timeline-links isDisabled"><p class="timeline-dl isDisabled" style="margin-top: 0px;color: dimgrey;">{{gmdate("i:s", $video->duration)}}</p></a>
                                                @elseif(!Auth::user())
                                                    <a href="javascript:forceLogin();" class="timeline-links isDisabled"><p class="timeline-dl isDisabled" style="margin-top: 0px;color: dimgrey;">{{gmdate("i:s", $video->duration)}}</p></a>
                                                @endif
                                            </div>                            </div>
                                    </article>
                                </div>
                            @endif
                        @endforeach
                    </div>
            @endif

            <!-- /Timeline -->

            </div>

            <!-- for desktop view -->
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 re-pro">
                <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
                    <p class="recommended">دوره های پیشنهادی</p>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right">
                        <a href="#new-products-mobile" data-slide="prev" class="more-product">
                            <i class="left fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                        <a href="#new-products-mobile" data-slide="next" class="more-product"><i
                                    class="left fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div id="new-products-mobile" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach($products as $newProducts)
                            @if ($loop->first)
                                <div class="item  active">
                                    @else
                                        <div class="item">
                                            @endif
                                            <div class="row">
                                                @foreach($newProducts as $newProduct)
                                                    <div class="col-sm-3 col-md-4">
                                                        <div class="col-item">
                                                            <div class="photo">
                                                                <a href="{{url('/products')}}/{{$newProduct->id}}"><img src={{asset('img2/'. (fmod($loop->index, 8) + 1) . '.jpg')}} class="img-responsive" alt="a"/></a>
                                                            </div>
                                                            <div class="info">
                                                                <div class="row">
                                                                    <div class="price col-md-12">
                                                                        <a class="product-fsize" href="{{url('/products')}}/{{$newProduct->id}}">{{$newProduct->name}}</a>
                                                                    </div>
                                                                    <div class="rating col-md-6">
                                                                        <p class="product-tsize new-product">{{$newProduct->author}}</p>
                                                                    </div>
                                                                    <div class="rating col-md-6">
                                                                        @for($i=0; $i < $newProduct->getAverageRating(); $i++)
                                                                            <i class="gold-star fa fa-star"></i>
                                                                        @endfor
                                                                        @for($i=0; $i < (5 - $newProduct->getAverageRating()); $i++)
                                                                            <i class="fa fa-star"></i>
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                                <p class="product-off left-float"> تومان {{$newProduct->price}} </p>
                                                                <div class="clear-left">
                                                                    <p class="right-float">
                                                                        <img src="{{asset('img2/clock-outline.png')}}">{{$newProduct->getLength()}}</p>
                                                                    <p class="left-float product-price"> تومان {{((100 - $newProduct->discount)/100)*$newProduct->price}} </p>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                    </div>
                </div>


                <!-- FOR MOBILE Device -->
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 re-pro-mobile">
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
                        <p class="recommended">دوره های پیشنهادی</p>
                    </div>
                    <div class="col-md-3">
                        <!-- Controls -->
                        <div class="controls pull-right">
                            <a href="#new-products-mobile" data-slide="prev" class="more-product">
                                <i class="left fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                            <a href="#new-products-mobile" data-slide="next" class="more-product"><i
                                        class="left fa fa-angle-double-left" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div id="new-products-mobile" class="carousel slide" data-ride="carousel" data-interval="false">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @foreach($products as $newProducts)
                                @if ($loop->first)
                                    <div class="item  active">
                                        @else
                                            <div class="item">
                                                @endif
                                                <div class="row">
                                                    @foreach($newProducts as $newProduct)
                                                        <div class="col-sm-3 col-md-4">
                                                            <div class="col-item">
                                                                <div class="photo">
                                                                    <a href="{{url('/products')}}/{{$newProduct->id}}"><img src={{asset('img2/'. (fmod($loop->index, 8) + 1) . '.jpg')}} class="img-responsive" alt="a"/></a>
                                                                </div>
                                                                <div class="info">
                                                                    <div class="row">
                                                                        <div class="price col-md-12">
                                                                            <a class="product-fsize" href="{{url('/products')}}/{{$newProduct->id}}">{{$newProduct->name}}</a>
                                                                        </div>
                                                                        <div class="rating col-md-6">
                                                                            <p class="product-tsize new-product">{{$newProduct->author}}</p>
                                                                        </div>
                                                                        <div class="rating col-md-6">
                                                                            @for($i=0; $i < $newProduct->getAverageRating(); $i++)
                                                                                <i class="gold-star fa fa-star"></i>
                                                                            @endfor
                                                                            @for($i=0; $i < (5 - $newProduct->getAverageRating()); $i++)
                                                                                <i class="fa fa-star"></i>
                                                                            @endfor
                                                                        </div>
                                                                    </div>
                                                                    <p class="product-off left-float"> تومان {{$newProduct->price}} </p>
                                                                    <div class="clear-left">
                                                                        <p class="right-float">
                                                                            <img src="{{asset('img2/clock-outline.png')}}">{{$newProduct->getLength()}}</p>
                                                                        <p class="left-float product-price"> تومان {{((100 - $newProduct->discount)/100)*$newProduct->price}} </p>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--footer-->
        <div class="sticky-stopper"></div>
@include('layouts.vFooter')