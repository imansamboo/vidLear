
<form method="POST" id="login" onsubmit="" data-type="json" action="{{url('/login')}}">
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input name="mobile" id="mobile" class="form-control" placeholder="شماره تلفن همراه" required="" autofocus="" type="text">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
        <input name="password" id=lpassword" class="form-control" placeholder="رمز عبور" required="" autofocus="" type="password">
    </div>
    <br>
    <div class="form-check">
        <input class="form-check-input" name="remember" id="remember" type="checkbox">

        <label class="form-check-label" for="remember">
            مرا به خاطر بسپار
        </label>
    </div>
    <br>
    <div class="forgot_section">
        <a href="#forgot" id="forgot" class="forgot_link">رمز عبور را فراموش کردم</a>
    </div>
    <center><img src="{{asset('img/loader.gif')}}" id="loading" style="width: 4%;display: none"></center>

    {!! Form::token() !!}
    <input name="login" id="login" class="login_btn" value="ورود" type="submit" >
</form>

