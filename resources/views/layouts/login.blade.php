<form method="POST" id="login" onsubmit="" data-type="json" action="{{url('/login')}}">
    <label for="mobile">
        شماره تلفن همراه :
    </label>
    <input type="mobile" class="form-control" name="mobile" id="mobile" required>
    <br/>
    <label for="password">
        رمز عبور :
    </label>
    <input type="password" class="form-control" name="password" id="password" required>
    <br>
    <div class="form-check">
        <input class="form-check-input" name="remember" id="remember" type="checkbox">

        <label class="form-check-label" for="remember">
            مرا به خاطر بسپار
        </label>
    </div>
    <div class="forgot_section">
        <a href="#" class="forgot_link">رمز عبور را فراموش کردم</a>
    </div>
    {!! Form::token() !!}


    <button type="submit" {{--name="login"--}} id="login" class="login_btn" >ورود</button>
</form>
