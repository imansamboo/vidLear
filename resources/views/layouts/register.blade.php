<form method="POST" onsubmit="" action="{{url("/register")}}">
    <label for="name">
        نام و نام خانوادگی :
    </label>
    <input type="name" class="form-control" name="name" id="name" required>
    <br/>
    <label for="mobile">
        شماره تلفن همراه:
    </label>
    <input type="text" class="form-control" name="mobile" id="mobile"
           required>
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
    <label for="email">
        پست الکترونیک :
    </label>
    <input type="email" class="form-control" name="email" id="email" required>
    <br/>
    {!! Form::token() !!}
    <input type="submit" name="register" id="register" class="register_btn" value="ثبت نام">
</form>
