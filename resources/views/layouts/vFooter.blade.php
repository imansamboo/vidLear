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
                                @foreach(App\Blog::all() as $blog)
                                    <a href="#" class="footer-link"><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$blog->title}}</a>
                                    <br>
                                @endforeach
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
                                @if(isset($result))
                                    @if($result == 0)
                                    <div class="modal fade in" id="resultAction" role="dialog" style="display: block;">
                                        <div class="modal-dialog modal-md">

                                            <!-- Login Modal content-->
                                            <div class="b2"></div>
                                            <div class="bb2" style="display: block;"></div>
                                            <button id="go2" style="display: none;">
                                                GO
                                            </button>
                                            <div class="message2 comein2">
                                                <div class="check2 scaledown2" style="padding-top: 15%;">
                                                    ✔
                                                </div>
                                                <p style="font-size:150%;padding-bottom: 7%;">
                                                    تراکنش موفق بود
                                                </p>

                                                <button id="ok2">
                                                    باشه
                                                </button>
                                            </div>
                                        </div></div>
                                        @else
                                        <div class="modal fade in" id="registerAction" role="dialog" style="display: block;">
                                            <div class="modal-dialog modal-md">

                                                <!-- Login Modal content-->
                                                <div class="b2"></div>
                                                <div class="bb2" style="display: block;"></div>
                                                <button id="go2" style="display: none;">
                                                    GO
                                                </button>
                                                <div class="message2 comein2">
                                                    <div class="check2 scaledown2" width="50%" style="padding-top: 10%;;background: red ; width:70px; height:70px">
                                                        !
                                                    </div>
                                                    <p style="font-size:150%;padding-bottom: 7%">
                                                        تراکنش ناموفق بود
                                                    </p>

                                                    <button id="ok2" style="background: red">
                                                        باشه
                                                    </button>
                                                </div>
                                            </div></div>
                                        @endif
                                @endif
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
<script src="{{asset('js2/jquery.min.js')}}"></script>
@if(isset($result))
    <script>
        $('#ok2').click(function(){
            $('div#resultAction').hide();
            $('#go2').click();
        });
        $('#go2').click(function(){
            go(500);

        });


        //setTimeout(function(){go(50)},700);
        //setTimeout(function(){go(500)},2000);

        function go(nr) {
            $('.bb2').fadeToggle(200);
            $('.message2').toggleClass('comein2');
            $('.check2').toggleClass('scaledown2');
            $('#go2').fadeToggle(nr);
            location.replace(address  + "/products/{{$product->id}}");
        }
    </script>
@endif

<script src="{{asset('js2/ok.js')}}"></script>
<script src="{{asset('js2/closeDial.js')}}"></script>
<script src="{{asset('js2/forceLogin.js')}}"></script>
<script src="{{asset('js2/login2.js')}}"></script>
<script src="{{asset('js2/register.js')}}"></script>
<script src="{{asset('js2/favor.js')}}"></script>
<script src="{{asset('js2/rate.js')}}"></script>
<script src="{{asset('js2/invoice.js')}}"></script>
<script src="{{asset('js2/reset-password.js')}}"></script>
<script>window.jQuery || document.write('<script src="js2/jquery.min.js"><\/script>')</script>
<script src="{{asset('js2/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{asset('js2/holder.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js2/ie10-viewport-bug')}}-workaround.js"></script>

<script src="{{asset('js2/ScrollMagic.min.js')}}"></script>

<script src="{{asset('js2/index-header-nav.js')}}"></script>
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