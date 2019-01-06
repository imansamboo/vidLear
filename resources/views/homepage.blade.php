@include('layouts.mHeader')

<!-- Carousel
================================================== -->
<div class="wrappers">
    <div class="container">
        <div class="row">
            <div class="wrappers-content">
                <h1 class="class-head">دوره های تخصصی موسیقی</h1>
                <p class="class-desc">- بدون نیاز به مراجعه حضوری
                    <br>
                    - بدون پیش نیاز
                    <br>
                    - امکان پرسش از استاد بصورت آنلاین
                    <br>
                    - مقرون بصرفه
                </p>
                <p><a class="btn btn-success" href="{{url('/')}}/categories" role="button"> دسته بندی دوره ها <i class="fa fa-arrow-left"
                                                                                                                 aria-hidden="true"></i>
                    </a></p>
                <div id="top-btns">
                    <ul class="ul-main">
                        <li><img src="img2/view-grid.png" class="grid-icon"></li>
                        @foreach($categories as $category)
                            <li><a href="{{url('/')}}/categories/{{$category->id}}/products" class="ul-btn">{{$category->title}}</a></li>
                        @endforeach
                        {{-- <li><a href="#" class="ul-btn">تنظیم آهنگ</a></li>
                         <li><a href="#" class="ul-btn">نوازندگی</a></li>
                         <li><a href="#" class="ul-btn">میکس و مستر</a></li>
                         <li><a href="#" class="ul-btn">پیانو</a></li>
                         <li><a href="#" class="ul-btn">ساکسیفون</a></li>
                         <li><a href="#" class="ul-btn">درامز</a></li>
                         <li><a href="#" class="ul-btn">گیتار الکتریک</a></li>--}}
                        <li><img src="img2/view-grid.png" class="grid-icon"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

    </div>
</div>


<!------ Desktop Products ---------->
<div class="container">
    <div class="row">
        <div id="products">
            <div class="row">
                <div class="col-md-9">
                    <p class="new-product"><i class="fa fa-bars" aria-hidden="true"></i>
                        جدیدترین دوره ها</p>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right">
                        <a href="#new-products" data-slide="prev" class="more-product">
                            <i class="left fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                        <a href="#new-products" data-slide="next" class="more-product"><i
                                    class="left fa fa-angle-double-left" aria-hidden="true"></i></a>
                        <a href="{{url('/products')}}" class="more-product">بیشتر</a>
                    </div>
                </div>
            </div>
            <div id="new-products" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($news as $newProducts)
                        @if ($loop->first)
                            <div class="item  active">
                                @else
                                    <div class="item">
                                        @endif
                                        <div class="row">
                                            @foreach($newProducts as $newProduct)
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <a href="{{url('/products')}}/{{$newProduct->id}}"><img src={{asset('img2/'. $newProduct->photo)}} class="img-responsive" alt="a"/></a>
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
                                                                    <img src="img2/clock-outline.png">{{$newProduct->getLength()}}</p>
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

<!-- Learning Section -->
<div id="learning">
    <div class="container">
        <div class="row">
            <div class="col-md-6 learning-txt">
                <h1 class="learning">
                    دوره های تخصصی
                </h1>
                <h1 class="learning">
                    Drums & Percussion Instruments
                </h1>
            </div>
            <div class="col-md-6 learning-img">
                <img src="{{asset('img2/saz-music.png')}}" class="left-float" id="learning-image">
            </div>
        </div>
    </div>
</div>


<!-- Sales Products -->
<!------ Products ---------->
<div class="container">
    <div class="row">
        <div class="product-sales">
            <div class="row">
                <div class="col-md-9">
                    <p class="new-product"><i class="fa fa-bars" aria-hidden="true"></i>
                        پرفروش ترین ها</p>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right">
                        <a href="#product-sales" data-slide="prev" class="more-product">
                            <i class="left fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                        <a href="#product-sales" data-slide="next" class="more-product"><i
                                    class="left fa fa-angle-double-left" aria-hidden="true"></i></a>
                        <a href="{{url('/products')}}" class="more-product">بیشتر</a>
                    </div>
                </div>
            </div>
            <div id="product-sales" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($products as $newProducts)
                        @if ($loop->last)
                            <div class="item  active">
                                @else
                                    <div class="item">
                                        @endif
                                        <div class="row">
                                            @foreach($newProducts as $newProduct)
                                                <div class="col-sm-3">
                                                    <div class="col-item">
                                                        <div class="photo">
                                                            <a href="{{url('/products')}}/{{$newProduct->id}}"><img src={{asset('img2/'. $newProduct->photo)}} class="img-responsive" alt="a"/></a>
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
                                                                    <img src="img2/clock-outline.png">{{$newProduct->getLength()}}</p>
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

@include('layouts.mFooter')