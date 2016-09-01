@extends('layouts.home', ['title' => 'Change current password profile &middot; instaforex.my'])
@section('js')
    <script src="{{ asset('assets/vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script>
        $(function() {
            $('#pass1').password({
                eyeClass: '',
                eyeOpenClass: 'icmn-eye',
                eyeCloseClass: 'icmn-eye-blocked'
            });
            $('#pass2').password({
                eyeClass: '',
                eyeOpenClass: 'icmn-eye',
                eyeCloseClass: 'icmn-eye-blocked'
            });
        });
    </script>
@endsection
@section('content')
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Ops!</strong> <a href="#" class="alert-link"> {{ session('error') }}
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Great,</strong> <a href="#" class="alert-link"> {{ session('success') }}
        </div>
    @endif
    <section class="panel profile-user-content">
        <div class="panel-body">
            <h5>Change Password</h5>
            <form class="form-horizontal" role="form" method="POST" action="{{ action('ProfileController@updatePass') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-3">
                        <label class="form-control-label">Current password</label>
                    </div>
                    <div class="col-md-9">
                        <input  type="password" class="form-control" name="current_password" placeholder="Your current password">
                        @if ($errors->has('current_password'))
                            <div class="form-control-error-list" data-error-list="">
                                <ul>
                                    <li>{{ $errors->first('current_password') }}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label class="form-control-label">New password</label>
                    </div>
                    <div class="col-md-9">
                        <input id="pass1" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <div class="form-control-error-list" data-error-list="">
                                <ul>
                                    <li>{{ $errors->first('password') }}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label class="form-control-label">Re-type password</label>
                    </div>
                    <div class="col-md-9">
                        <input id="pass2" type="password" class="form-control" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <div class="form-control-error-list">
                                <ul>
                                    <li>{{ $errors->first('password_confirmation') }}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-actions">
                    <div class="form-group">
                        <button type="submit" class="btn width-150 btn-primary">Change Password</button>
                        <button type="reset" value="Reset" class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
