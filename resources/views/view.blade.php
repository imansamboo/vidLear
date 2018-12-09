<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--
    <link rel="icon" href="../../favicon.ico">
    -->

    <title>دوره های تخصصی موسیقی - دوره آموزش نواختن پیانو سطح مقدماتی</title>

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
<body>
<div class="navbar-wrapper-single">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 col-sm-12">
                <nav class="navbar navbar-inverse navbar-static-top navbar-full">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">LOGO</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
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
                                <li class="nav-item dropdown category">
                                    <a class="nav-link dropdown-toggle header-font" href="#" id="navbarDropdown"
                                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img2/view-grid-menu.png">
                                        دسته بندی
                                    </a>
                                    <div class="dropdown-menu nav-dropdown" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-drop-item" href="#">تنظیم آهنگ</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-drop-item" href="#">نوازندگی</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-drop-item" href="#">میکس و مستر</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-drop-item" href="#">پیانو</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-drop-item" href="#">ساکسیفون</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-drop-item" href="#">درامز</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-drop-item" href="#">گیتار الکتریک</a>
                                    </div>
                                </li>
                            </ul>
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
            </div>
            <div class="modal-body">
                <form method="post" onsubmit="">
                    <label for="email">
                        ایمیل :
                    </label>
                    <input type="email" class="form-control" name="lemail" id="lemail" required>
                    <br/>
                    <label for="password">
                        رمز عبور :
                    </label>
                    <input type="password" class="form-control" name="lpassword" id="lpassword" required>
                    <br>
                    <div class="forgot_section">
                        <a href="#forgot" class="forgot_link">رمز عبور را فراموش کردم</a>
                    </div>

                    <input type="submit" name="login" id="login" class="login_btn" value="ورود">
                </form>
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
                <h4 class="modal-title">ثبت نام</h4>
            </div>
            <div class="modal-body">
                <p id="message"></p>
                <div class="register_container">
                    <form method="post" onsubmit="">
                        <label for="email">
                            ایمیل :
                        </label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        <br/>
                        <label for="password">
                            رمز عبور :
                        </label>
                        <input type="password" class="form-control" name="password" id="password" required>
                        <br/>
                        <label for="passwordConfirm">
                            تکرار رمز عبور :
                        </label>
                        <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm"
                               required>
                        <br/>
                        <input type="submit" name="register" id="register" class="register_btn" value="ثبت نام">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end Register Modal -->


<!------ Products ---------->
<div class="container sp-head">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p class="sp-head-title">
                دوره آموزش نواختن پیانو سطح مقدماتی
            </p>
            <p>
                <a href="index.html" class="sp-head-link">صفحه نخست</a>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <a href="index.html" class="sp-head-link">آموزش ها</a>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <a href="index.html" class="sp-head-link-active">نواختن پیانو</a>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <a href="index.html" class="sp-head-link">دوره آموزش نواختن پیانو سطح مقدماتی</a>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 sp-sidebar-main">
            <!-- ////////////////// Sidebar /////////////////// -->
            <div class="sp-sidebar">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 rating sp-sidebar-rating">
                    <i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star">
                    </i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star">
                    </i><i class="fa fa-2x fa-star"></i>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-sidebar-data-main">
                    <p class="sp-sidebar-data-title">اطلاعات دوره :</p>

                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <img src="img2/format-list-checkbox.png">
                        <p class="sp-sidebar-data">تعداد ویدئوها</p>
                        <p class="sp-sidebar-data">12</p>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <img src="img2/clock-outline.png">
                        <p class="sp-sidebar-data">مدت زمان دوره</p>
                        <p class="sp-sidebar-data">07:48:29</p>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                        <img src="img2/account-group.png">
                        <p class="sp-sidebar-data">تعداد دانشجویان</p>
                        <p class="sp-sidebar-data">125</p>
                    </div>
                </div>
                <div class="sp-sidebar-buy-main">
                    <a class="sp-sidebar-buy" href="#buy">دانلود کامل دوره | 145000</a>
                </div>
                <div class="sp-sidebar-favor">
                    <p><i class="fa fa-2x fa-heart" aria-hidden="true"></i> افزودن به لیست مورد علاقه ها</p>
                </div>
            </div>
            <!-- ///////////////// menu 2 /////////////////////// -->
            <div class="sp-sidebar">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-sidebar-owner-main">
                    <img src="pics/user-pic.jpeg" class="sp-sidebar-owner-pic">
                    <p class="sp-sidebar-owner-name">حامد خالقی اصفهانی</p>
                </div>
                <p class="sp-sidebar-owner-desc">تیم تولید محتوای رستا آی تی آماده مشاوره رایگان ویژه دانشجویان فرانش
                    است برای ارتباط با ادمین ما ترجیحا در تلگرام به ایدی زیر پیام دهید (rastait_ir_pr@)
                </p>
            </div>

            <!-- ///////////////// menu 3 /////////////////////// -->
            <div class="sp-sidebar">
                <div class="sp-sidebar-share">
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 sp-sidebar-share-option">
                        <p class="sp-sidebar-share-txt">اشتراک گذاری</p>
                    </div>
                    <div class="col-md-6 sp-sidebar-share-lin">
                        <p class="sp-sidebar-share-icons">
                            <a class="sp-sidebar-share-link" href="https://facebook.com" target="_blank">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                            <a class="sp-sidebar-share-link" href="https://www.twitter.com" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a class="sp-sidebar-share-link" href="https://www.linkedin.com/" target="_blank">
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
        <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 sp-body-main">
            <!-- ////////////////// Body /////////////////// -->
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body">
                <div class="sp-img">
                    <img src="img2/video-cover.png" class="img-responsive">
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body">
                <div class="sp-body-data">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <p>
                            <img src="img2/the_key.png" class="img-key">
                            دسترسی سریع
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <p>
                            <img src="img2/the_chat.png" class="img-other">
                            ارتباط با استاد
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        <p>
                            <img src="img2/the_wallet.png" class="img-other">
                            امکان بازگشت وجه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-body sp-top-align">
                <p class="sp-body-learn-title">توضیحات و سرفصل دوره</p>
                <hr class="sp-body-learn-hr">
                <p class="sp-body-learn-desc">این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی
                    برای توضیحات این دوره آموزشی است.
                    این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی برای توضیحات این دوره آموزشی
                    است. <br>
                    این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی برای توضیحات این دوره آموزشی
                    است.
                    این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی برای توضیحات این دوره آموزشی
                    است.<br>
                    این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی برای توضیحات این دوره آموزشی
                    است.
                    این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی برای توضیحات این دوره آموزشی
                    است.<br>
                    این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی برای توضیحات این دوره آموزشی
                    است.
                    این یک متن آزمایشی برای توضیحات این دوره آموزشی است.این یک متن آزمایشی برای توضیحات این دوره آموزشی
                    است.</p>

                <p class="sp-body-learn-title">سرفصل دوره</p>
                <hr class="sp-body-learn-hr">

                <!-- Timeline -->
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
                                    <p class="timeline-time">10:42</p>
                                    <a href="#" class="timeline-links"><i class="fa fa-download dl-btn timeline-dl"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="the-hover">
                        <div class="separator line-color"></div>
                        <article class="panel panel-default panel-outline">
                            <div class="panel-heading icon">
                                <i class="fa fa-lock lock-icon"></i>
                            </div>
                            <div class="panel-body">
                                <div class="timeline-right">
                                    <p>جلسه اول</p>
                                </div>
                                <div class="timeline-left">
                                    <p class="timeline-time-disabled">10:42</p>
                                    <a href="#" class="isDisabled"><i class="fa fa-download dl-btn timeline-dl"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="the-hover">
                        <div class="separator line-color"></div>
                        <article class="panel panel-default panel-outline">
                            <div class="panel-heading icon">
                                <i class="fa fa-lock lock-icon"></i>
                            </div>
                            <div class="panel-body">
                                <div class="timeline-right">
                                    <p>جلسه دوم</p>
                                </div>
                                <div class="timeline-left">
                                    <p class="timeline-time-disabled">10:42</p>
                                    <a href="#" class="isDisabled"><i class="fa fa-download dl-btn timeline-dl"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="the-hover">
                        <div class="separator line-color"></div>
                        <article class="panel panel-default panel-outline">
                            <div class="panel-heading icon">
                                <i class="fa fa-lock lock-icon"></i>
                            </div>
                            <div class="panel-body">
                                <div class="timeline-right">
                                    <p>جلسه سوم</p>
                                </div>
                                <div class="timeline-left">
                                    <p class="timeline-time-disabled">10:42</p>
                                    <a href="#" class="isDisabled"><i class="fa fa-download dl-btn timeline-dl"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="the-hover">
                        <div class="separator line-color"></div>
                        <article class="panel panel-default panel-outline">
                            <div class="panel-heading icon">
                                <i class="fa fa-lock lock-icon"></i>
                            </div>
                            <div class="panel-body">
                                <div class="timeline-right">
                                    <p>جلسه چهارم</p>
                                </div>
                                <div class="timeline-left">
                                    <p class="timeline-time-disabled">10:42</p>
                                    <a href="#" class="isDisabled"><i class="fa fa-download dl-btn timeline-dl"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
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
                        <a href="#new-products" data-slide="prev" class="more-product">
                            <i class="left fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                        <a href="#new-products" data-slide="next" class="more-product"><i
                                    class="left fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div id="new-products" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 1</a>
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
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
                                                <p class="left-float product-price">
                                                    145.000 تومان</p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 2</a>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="fa fa-star"></i><i class="fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
                                                <p class="left-float product-price">
                                                    145.000 تومان</p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 3</a>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <i class="gold-star fa fa-star"></i><i class="fa fa-star">
                                                    </i><i class="fa fa-star"></i><i class="fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
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
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 4</a>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
                                                <p class="left-float product-price">
                                                    145.000 تومان</p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 5</a>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
                                                <p class="left-float product-price">
                                                    145.000 تومان</p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 6</a>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
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
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 1</a>
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
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
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
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 2</a>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
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
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-3 col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                        پیانو سطح مقدماتی 3</a>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <p class="product-tsize new-product">مهران عباسی</p>
                                                </div>
                                                <div class="rating col-md-6">
                                                    <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                    </i><i class="gold-star fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="product-off left-float">180.000</p>
                                            <div class="clear-left">
                                                <p class="right-float">
                                                    <img src="img2/clock-outline.png">07:48:29</p>
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
    </div>
</div>


<!--footer-->
<div class="sticky-stopper"></div>
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

                            <div class="footer-line">
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
<script src="js2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js2/jquery.min.js"><\/script>')</script>
<script src="js2/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="js2/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js2/ie10-viewport-bug-workaround.js"></script>

<script>
    $(document).ready(function () {

        var $sticky = $('.sticky');
        var $stickyrStopper = $('.sticky-stopper');
        if (!!$sticky.offset()) { // make sure ".sticky" element exists

            var generalSidebarHeight = $sticky.innerHeight();
            var stickyTop = $sticky.offset().top;
            var stickOffset = 0;
            var stickyStopperPosition = $stickyrStopper.offset().top;
            var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
            var diff = stopPoint + stickOffset;

            $(window).scroll(function () { // scroll event
                var windowTop = $(window).scrollTop(); // returns number

                if (stopPoint < windowTop) {
                    $sticky.css({position: 'absolute', top: diff});
                } else if (stickyTop < windowTop + stickOffset) {
                    $sticky.css({position: 'fixed', top: stickOffset});
                } else {
                    $sticky.css({position: 'absolute', top: 'initial'});
                }
            });

        }
    });
</script>
</body>
</html>