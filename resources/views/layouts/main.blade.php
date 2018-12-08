

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
                        <a href="product.html" class="more-product">بیشتر</a>
                    </div>
                </div>
            </div>
            <div id="new-products" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
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
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
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
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
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
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
                                            </div>
                                            <div class="rating col-md-6">
                                                <p class="product-tsize new-product">مهران عباسی</p>
                                            </div>
                                            <div class="rating col-md-6">
                                                <i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
                                                </i><i class="gold-star fa fa-star"></i><i class="gold-star fa fa-star">
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
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
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
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
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
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
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
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img2/350x260.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12">
                                                <a class="product-fsize" href="show-product.html">دوره آموزش نواختن
                                                    پیانو سطح مقدماتی</a>
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
                        <a href="product.html" class="more-product">بیشتر</a>
                    </div>
                </div>
            </div>
            <div id="product-sales" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


