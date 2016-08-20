@extends('layouts.auth', ['title' => 'Register &middot; Dashboard client instaforex.my'])
@section('content')
<!-- Content -->
<!-- pop up untuk session -->
@if (session()->has('message'))
<div class="alert alert-info">{{ session('message') }}</div>
@endif
<div  ng-app="">
    <div class="header-form-heading">
        <h4>Register new account</h4>
        <p>Welcome to client dashboard</p>
    </div>
    <form action="{{ action('Auth\RegisterController@register') }}" method="post" class="header-form affa-form-signup">
        {!! csrf_field() !!}
        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : ''}}">
            @if ($errors->has('name'))
            <label class="control-label" for="inputError"><i
            class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</label>
            @endif
            <input type="text" class="form-control" name="name" id="name"
            value="{{ old('name') }}" placeholder="Full name">
        </div>
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : ''}}">
            @if ($errors->has('email'))
            <label class="control-label" for="inputError"><i
            class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>
            @endif
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
            placeholder="Email">
        </div>
        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : ''}}">
            @if ($errors->has('password'))
            <label class="control-label" for="inputError"><i
            class="fa fa-times-circle-o"></i> {{ $errors->first('password') }}</label>
            @endif
            <input id="password" class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : ''}}">
            @if ($errors->has('password_confirmation'))
            <label class="control-label" for="inputError"><i
                class="fa fa-times-circle-o"></i> {{ $errors->first('password_confirmation') }}
            </label>
            @endif
            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"
            placeholder="Retype password">
        </div>
        <div class="row">
            <div class="col-xs-9">
                By clicking on Sign up, you agree to our<br>terms &amp; conditions and privacy policy
            </div>
            <div class="col-xs-3">
                <button type="submit" class="pull-right btn-small ">Sign up</button>
            </div>
        </div>
    </form>
    <div style="padding-bottom: 24px;" class="social-auth-links text-center">
        <hr>
        <a  href="{{ action('Auth\LoginController@showLoginForm') }}">I already have a membership</a>
    </div>
</div>
<!-- /.register-box -->
@stop