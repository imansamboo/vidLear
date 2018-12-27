<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1000; user-scalable=0;" />-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--
    <link rel="icon" href="../../favicon.ico">
    -->

    <title>دوره های تخصصی موسیقی</title>

    <!-- Bootstrap core CSS -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css2/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css2/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js2/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js2/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css2/style.css" rel="stylesheet">

</head>
<!-- NAVBAR
================================================== -->
<body class="no-scroll">
<div class="navbar-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}">LOGO</a>
                        </div>
                        <div id="authenticate">
                            @if ($user = Auth::user())
                                <ul class="nav navbar-nav menu-right">
                                    <li>
                                        <a href="{{url('/logout')}}"  class="header-font"><i
                                                    class="fa fa-sign-out"
                                                    aria-hidden="true"></i>خروج از سامانه
                                        </a>
                                    </li>
                                    <li>
                                        @if ($user = Auth::user()->isAdmin == 1)
                                            <a href="{{url('/admin')}}"  class="header-font"><i
                                                        class="fa fa-user"
                                                        aria-hidden="true"></i> داشبورد
                                            </a>
                                        @endif

                                    </li>
                                </ul>
                            @else
                                <ul class="nav navbar-nav menu-right">
                                    <li><a href="#" data-toggle="modal" data-target="#loginAction" class="header-font"><i
                                                    class="fa fa-sign-in"
                                                    aria-hidden="true"></i> ورود به سامانه
                                        </a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#registerAction" class="header-font"><i
                                                    class="fa fa-user-plus"
                                                    aria-hidden="true"></i> عضویت </a>
                                    </li>
                                </ul>
                            @endif
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">

                            <div class="col-md-6">
                                <form class="form-inline">
                                    <div class="all-search" id="imaginary_container_n">
                                        <div class="input-group stylish-input-group" id="search-box-btn">
                                            <input type="text" class="form-control search-font" id="search-box"
                                                   placeholder="جستجو در دوره های آنلاین موسیقی...">
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-6">
                <form class="form-inline">
                    <div class="all-search-main" id="imaginary_container">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control search-font"
                                   placeholder="جستجو در دوره های آنلاین موسیقی...">
                            <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- The Login Modal -->
<!-- Login Modal -->
<div class="modal fade" id="loginAction" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Login Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ورود به پنل کاربری</h4>
                <div id="login-error" {{--style="padding-top: 5%;"--}}>
                    {{--<div class="alert alert-danger" style="font-size: 11px">
                         شماره همراه یا کلمه عبور اشتباه وارد شده است.
                    </div>--}}
                    {{--$("div#login-error").css('padding-top', '5%')--}}
                </div>
            </div>
            <div class="modal-body">
                @include('layouts.login')
            </div>
        </div>

    </div>
</div>
<!-- end Login Modal -->
<!-- Register Modal -->
<div class="modal fade" id="registerAction" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Register Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">لطفا بمنظور عضویت در وب سایت اطلاعات خود را وارد بفرمائید.
                </h5>
            </div>
            <div class="modal-body">
                <p id="message"></p>
                <div class="register_container">
                    @include('layouts.register')
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end Register Modal -->


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
                                                <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-12">
                                                        <a class="product-fsize" href="{{url('/products')}}/{{$newProduct->id}}">{{$newProduct->name}}</a>
                                                    </div>
                                                    <div class="rating col-md-6">
                                                        <p class="product-tsize new-product">مهران عباسی</p>
                                                    </div>
                                                    <div class="rating col-md-6">
                                                        <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                        </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="product-off left-float"> تومان {{$newProduct->price}} </p>
                                                <div class="clear-left">
                                                    <p class="right-float">
                                                        <img src="img2/clock-outline.png">07:48:29</p>
                                                    <p class="left-float product-price"> تومان {{0.9*$newProduct->price}} </p>
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
                    <img src="img2/saz-music.png" class="left-float" id="learning-image">
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
                                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                                        </div>
                                                        <div class="info">
                                                            <div class="row">
                                                                <div class="price col-md-12">
                                                                    <a class="product-fsize" href="{{url('/products')}}/{{$newProduct->id}}">{{$newProduct->name}}</a>
                                                                </div>
                                                                <div class="rating col-md-6">
                                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                                </div>
                                                                <div class="rating col-md-6">
                                                                    <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                                    </i><i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                                                    </i><i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <p class="product-off left-float"> تومان {{$newProduct->price}} </p>
                                                            <div class="clear-left">
                                                                <p class="right-float">
                                                                    <img src="img2/clock-outline.png">07:48:29</p>
                                                                <p class="left-float product-price"> تومان {{0.9*$newProduct->price}} </p>
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

<!--footer-->
    <footer class="nb-footer fixed-bottom">
        <div class="container">
            <div class="row" id="footsize">
                <div class="col-sm-12">
                    <div class="about">
                        <div class="social-media">
                            <!--///////////////////////// for mobile ////////////////////////////////////// -->
                            <div class="col-sm-12 col-xs-12 col-md-3" id="footer-menu-mobile">
                                <p>منو</p>

                                <div>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link">
                                        درباره ما </a>
                                    <br><br>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link"> تماس
                                        باما </a>
                                    <br><br>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link">
                                        قوانین و مقررات </a>
                                    <br><br>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link">
                                        عضویت در سایت </a>
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-12 col-xs-12 col-md-3" id="footer-cr-mobile">
                                <p class="logo-size">LOGO</p>
                                <p>پلتفرم آموزش موسیقی در بستر اینترنت</p>

                                <br>
                                <div class="footer-border">
                                    <i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-2x fa-facebook footer-icon" aria-hidden="true"></i>
                                    <i class="fa fa-2x fa-instagram footer-icon" aria-hidden="true"></i>
                                    <p></p>
                                </div>


                                <p>تمامی حقوق برای مهران عباسی محفوظ میباشد.</p>
                                <p></p>
                            </div>
                            <!--///////////////////////// end for mobile ////////////////////////////////////// -->
                            <div class="col-md-3" id="footer-cr">
                                <p class="logo-size">LOGO</p>
                                <p>پلتفرم آموزش موسیقی در بستر اینترنت</p>

                                <br>
                                <div class="footer-border">
                                    <i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-2x fa-facebook footer-icon" aria-hidden="true"></i>
                                    <i class="fa fa-2x fa-instagram footer-icon" aria-hidden="true"></i>
                                    <p></p>
                                </div>


                                <p>تمامی حقوق برای مهران عباسی محفوظ میباشد.</p>
                                <p></p>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-blog">
                                    <p>وبلاگ</p>

                                    <a href="#" class="footer-link"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        عنوان مطلب مرتبط با وبلاگ در این
                                        بخش درج میشود. </a>
                                    <br>
                                    <a href="#" class="footer-link"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        عنوان مطلب مرتبط با وبلاگ در این
                                        بخش درج میشود. </a>
                                    <br>
                                    <a href="#" class="footer-link"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        عنوان مطلب مرتبط با وبلاگ در این
                                        بخش درج میشود. </a>
                                    <br>
                                    <a href="#" class="footer-link"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        عنوان مطلب مرتبط با وبلاگ در این
                                        بخش درج میشود. </a>
                                </div>
                            </div>
                            <div class="col-md-3" id="footer-end">
                                <p>منو</p>

                                <div>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link">
                                        درباره ما </a>
                                    <br><br>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link"> تماس
                                        باما </a>
                                    <br><br>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link">
                                        قوانین و مقررات </a>
                                    <br><br>
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="footer-link">
                                        عضویت در سایت </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end-footer-->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js2/jquery.min.js')}}"></script>
    <script src="{{asset('js2/login.js')}}"></script>
    <script src="{{asset('js2/register.js')}}"></script>
    <script>window.jQuery || document.write('<script src="js2/jquery.min.js"><\/script>')</script>
<script src="js2/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="js2/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js2/ie10-viewport-bug-workaround.js"></script>

</body>
</html>