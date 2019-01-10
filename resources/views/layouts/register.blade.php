<form method="POST" onsubmit="" action="{{url("/register")}}" id="register">
    <div id="name-error" {{--style="padding-top: 5%;"--}}>
        {{--<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">
             شماره همراه یا کلمه عبور اشتباه وارد شده است.
        </div>--}}
    </div>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
    <input placeholder="نام و نام خانوادگی " type="name" class="form-control" name="name" id="name" required>                    </div>

    <br/>
    <div id="mobile-error" {{--style="padding-top: 5%;"--}}>
        {{--<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">
            شماره همراه یا کلمه عبور اشتباه وارد شده است.
        </div>--}}
    </div>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
    <input placeholder="شماره تلفن همراه" type="number" class="form-control" name="mobile" id="mobile"
           required>                    </div>
    <br>
    <div id="password-error" {{--style="padding-top: 5%;"--}}>
        {{--<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">
            شماره همراه یا کلمه عبور اشتباه وارد شده است.
        </div>--}}
    </div>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    <input placeholder="رمز عبور" type="password" class="form-control" name="password" id="password" required>                    </div>

            <br/>
    <div id="passwordConfirm-error" {{--style="padding-top: 5%;"--}}>
        {{--<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">
            شماره همراه یا کلمه عبور اشتباه وارد شده است.
        </div>--}}
    </div>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    <input placeholder="تکرار رمز عبور" type="password" class="form-control" name="password_confirmation" id="passwordConfirm"
           required>
                </div>

                <br/>
    <div id="email-error" {{--style="padding-top: 5%;"--}}>
        {{--<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">
            شماره همراه یا کلمه عبور اشتباه وارد شده است.
        </div>--}}
    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
    <input placeholder="پست الکترونیک" type="email" class="form-control" name="email" id="email" required>
                    </div>
    <br/>
    <center><img src="{{asset('img/loader.gif')}}" id="loading" style="width: 4%;display: none"></center>
    {!! Form::token() !!}

    <input type="submit" name="register" id="register" class="register_btn" value="ثبت نام">
</form>
