@extends('layouts.auth', ['title' => 'Sign in &middot; Dashboard client instaforex.my'])
@section('content')
    <div class="header-form-heading">
        <h4>Login to dashboard</h4>
        <p>Please sign in to get access</p>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>

        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <!-- pop up untuk session -->
    @if (session()->has('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif
    <!-- /.login-logo -->
    <form method="POST" action="{{ action('Auth\LoginController@login') }}" class="header-form affa-form-signup">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn-small pull-right">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
        <hr>
        <a href="{{ action('Auth\ForgotPasswordController@showLinkRequestForm') }}">Forgot password?</a>
        <a href="{{ action('Auth\RegisterController@showRegistrationForm') }}" class="pull-right">Create an
            account</a></div>
    </form>
    <div>
        <img class="center-block" style="padding-top: 20px;" src="{{ asset('/images/pyment/img-cysec.png') }}" alt="">


    </div>

    </div>

@stop
