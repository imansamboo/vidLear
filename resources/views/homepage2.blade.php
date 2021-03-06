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

    <title>دوره های تخصصی موسیقی - محصولات</title>

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
            <div class="col-md-5">
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
<div class="container product">
    <div class="row">
        <div class="col-md-12">
            <p class="new-product"><i class="fa fa-bars" aria-hidden="true"></i>
                محصولات</p>
        </div>
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
        <div class="col-md-3">
            <div class="product-item">
                <div class="col-item">
                    <div class="photo">
                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن پیانو سطح مقدماتی</a>
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
<script src="js2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js2/jquery.min.js"><\/script>')</script>
<script src="js2/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="js2/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js2/ie10-viewport-bug-workaround.js"></script>
</body>
</html>