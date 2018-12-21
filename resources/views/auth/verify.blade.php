@extends('layouts.footer')

@extends('layouts.custom')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header" align="center">{{ __('شماره همراه خود را تایید کنید') }}</div>

                {!! Form::open(array('url' => 'varifyWithSms', 'method' => 'post'))!!}
                <div class="form-group {!! $errors->has('last_sent_sms_code') ? 'has-error' : '' !!}" align="center">
                    {!! Form::label('last_sent_sms_code', 'آخرین کد ارسالی را وارد نمایید') !!}
                    {!! Form::text('last_sent_sms_code', null, ['class'=>'form-control']) !!}
                    {!! $errors->first('last_sent_sms_code', '<p class="help-block">:message</p>') !!}
                </div>
                <input type="hidden" value="{{Auth::user()->id}}" name="userID">
                {!! Form::submit(isset($model) ? 'Update' : 'تایید هویت', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification code has been sent to your mobile Number.') }}
                        </div>
                    @endif

                    {{ __('اگر کد را دریافت ننموده اید، مجدد تلاش نمایید') }}, <br>
                        <a href="{{ url('/') }}/resendSms">{{ __('برای در یافت مجدد کد کلیک نمایید') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

