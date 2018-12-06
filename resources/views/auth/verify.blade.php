@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Mobile Number') }}</div>

                {!! Form::open(array('url' => 'varifyWithSms', 'method' => 'post'))!!}
                <div class="form-group {!! $errors->has('last_sent_sms_code') ? 'has-error' : '' !!}">
                    {!! Form::label('last_sent_sms_code', 'last_sent_sms_code') !!}
                    {!! Form::text('last_sent_sms_code', null, ['class'=>'form-control']) !!}
                    {!! $errors->first('last_sent_sms_code', '<p class="help-block">:message</p>') !!}
                </div>
                <input type="hidden" value="{{Auth::user()->id}}" name="userID">
                {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification code has been sent to your mobile Number.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your mobile for a verification code.') }}
                    {{ __('If you did not receive the verification code') }}, <a href="{{ url('/') }}/resendSms">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
