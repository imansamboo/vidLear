<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
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
                            <a class="navbar-brand" href="index.html">LOGO</a>
                        </div>
                        @if ($user = Auth::user())
                            <ul class="nav navbar-nav menu-right">
                                <li>
                                    <a href="{{url('/logout')}}"  class="header-font"><i
                                                class="fa fa-sign-out"
                                                aria-hidden="true"></i>خروج از سامانه
                                    </a>
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
            </div>
            <div class="modal-body">
                <form method="POST" id="login" onsubmit="" data-type="json" action="{{url('/login')}}">
                    <label for="email">
                        ایمیل :
                    </label>
                    <input type="email" class="form-control" name="email" id="email" required>
                    <br/>
                    <label for="password">
                        رمز عبور :
                    </label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" name="remember" id="remember" type="checkbox">

                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    <div class="forgot_section">
                        <a href="{{url('/password/reset')}}" class="forgot_link">رمز عبور را فراموش کردم</a>
                    </div>
                    {!! Form::token() !!}


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
                    <form method="POST" onsubmit="" action="{{url("/register")}}">
                        <label for="name">
                            نام :
                        </label>
                        <input type="name" class="form-control" name="name" id="name" required>
                        <br/>
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
                        <input type="password" class="form-control" name="password_confirmation" id="passwordConfirm"
                               required>
                        <br/>

                        <br/>
                        <label for="mobile">
                            موبایل:
                        </label>
                        <input type="text" class="form-control" name="mobile" id="mobile"
                               required>
                        <br/>
                        <label for="nationalCode">
                            کد ملی:
                        </label>
                        {!! Form::token() !!}
                        <input type="text" class="form-control" name="nationalCode" id="nationalCode"
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
                <p><a class="btn btn-success" href="#" role="button"> دسته بندی دوره ها <i class="fa fa-arrow-left"
                                                                                           aria-hidden="true"></i>
                    </a></p>
                <div id="top-btns">
                    <ul class="ul-main">
                        <li><img src="img2/view-grid.png" class="grid-icon"></li>
                        <li><a href="#" class="ul-btn">تنظیم آهنگ</a></li>
                        <li><a href="#" class="ul-btn">نوازندگی</a></li>
                        <li><a href="#" class="ul-btn">میکس و مستر</a></li>
                        <li><a href="#" class="ul-btn">پیانو</a></li>
                        <li><a href="#" class="ul-btn">ساکسیفون</a></li>
                        <li><a href="#" class="ul-btn">درامز</a></li>
                        <li><a href="#" class="ul-btn">گیتار الکتریک</a></li>
                        <li><img src="img2/view-grid.png" class="grid-icon"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')
