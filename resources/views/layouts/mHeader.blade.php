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
    <link href="{{asset('css2/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css2/font-awesome.min.css')}}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('css2/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="{{asset('js2/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{asset('js2/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="{{asset('css2/style.css')}}" rel="stylesheet">

</head>
<!-- NAVBAR
================================================== -->
<body class="no-scroll">
<header class="header">
    <div class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <nav class="navbar navbar-inverse">
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
                            <div id="navbar" class="navbar-collapse collapse">
                                <div id="authenticate">
                                    @if ($user = Auth::user())
                                        <ul class="nav navbar-nav menu-right">
                                            <li><a href="{{url('/clientarea')}}" class="header-font"><i class="fa fa-user" aria-hidden="true"></i> ناحیه کاربری</a></li>
                                            <li>
                                                <a href="{{url('/logout')}}"  class="header-font"><i
                                                            class="fa fa-sign-out"
                                                            aria-hidden="true"></i>خروج از سامانه
                                                </a>
                                            </li>
                                            {{--<li>
                                                @if ($user = Auth::user()->isAdmin == 1)
                                                    <a href="{{url('/admin')}}"  class="header-font"><i
                                                                class="fa fa-user"
                                                                aria-hidden="true"></i> داشبورد
                                                    </a>
                                                @endif

                                            </li>--}}

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
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <form class="form-inline" method="GET" action="{{url('/products')}}">
                        <div class="all-search-main" id="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input name="q" type="text" class="form-control search-font"
                                       placeholder="جستجو در دوره های آنلاین موسیقی...">
                                <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search search-color"></span>
                        </button>
                    </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- The Login Modal -->
<!-- Login Modal -->
<div class="modal fade" id="loginAction" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Login Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ورود به پنل کاربری</h4>

            </div>
            <div class="modal-body">
                <div class="login-modal">
                    <div id="login-error" ></div>
                    @include('layouts.login')

                </div>
            </div>
        </div>

    </div>
</div>
<!-- end Login Modal -->
<!-- Register Modal -->
<div class="modal fade" id="registerAction" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Register Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ثبت نام</h4>
            </div>
            <div class="modal-body">
                <p id="message"></p>
                <div class="register_container">
                    <div class="register-modal">
                        @include('layouts.register')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end Register Modal -->

<!-- end Register Modal -->
