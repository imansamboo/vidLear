@include('layouts.sHeader')



<style>/* Start by setting display:none to make this hidden.
   Then we position it in relation to the viewport window
   with position:fixed. Width, height, top and left speak
   for themselves. Background we set to 80% white with
   our animation centered, and no-repeating */
  .moda {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 )
    url('http://i.stack.imgur.com/FhHRx.gif')
    50% 50%
    no-repeat;
  }

  /* When the body has the loading class, we turn
     the scrollbar off with overflow:hidden */
  body.loading .moda {
    overflow: hidden;
  }

  /* Anytime the body has the loading class, our
     modal element will be visible */
  body.loading .moda {
    display: block;
  }</style>
  <div class="row">

    <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 sp-sidebar-main">
      <!-- ////////////////// Sidebar /////////////////// -->

      <!-- ///////////////// menu 2 /////////////////////// -->
      <div class="sp-sidebar">
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 sp-sidebar-owner-main">
          <img src="{{url('pics/user-pic.jpeg')}}" class="sp-sidebar-owner-pic">
          <p class="sp-sidebar-owner-name">مهران عباسی</p>
        </div>
        <p class="sp-sidebar-owner-desc">

          مهران عباسی تنظیم کننده موسیقی پاپ متولد ۵ مهر ۱۳۶۳ است.

          از سن ۶ سالگی علاقه خود را به موسیقی الکترونیک دنبال کرد، جهت تکمیل دوران راهنمایی به مدرسه خوارزمی تهران نقل مکان کرد و در تهران فعالیت موسیقی خود را آغاز کرد.

          در سال ۸۳ با آشنایی با کوشان حداد (عضو گروه اشکان و کوشان) گروه نئورین را تاسیس کردند.

          پس از شرکت در ۴ مسابقه بین المللی موسیقی الکترونیک ۴ رتبه جهانی (به ترتیب مقام نهم، چهارم و دوبار مقام اول را از پنج قاره) خوب را کسب کردند.
        </p>
        <p>
          <a href="#">click on it</a>
        </p>
      </div>


      <!-- ///////////////// menu 3 /////////////////////// -->
    </div>
      </div>
    </div>

    <!--footer-->
    <div class="sticky-stopper"></div>
@include('layouts.sFooter')



