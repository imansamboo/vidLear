
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
