@extends('layouts.home', ['title' => 'Dashboard client &middot; instaforex.my'])
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/cleanhtmlaudioplayer/src/player.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/cleanhtmlvideoplayer/src/player.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-sweetalert/dist/sweetalert.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/summernote/dist/summernote.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/ionrangeslider/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/media/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/c3/c3.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/chartist/dist/chartist.min.css') }}">
@endsection
@section('js')
<!-- Vendors Scripts -->
<!-- v1.0.0 -->
<script src="{{ asset('assets/vendors/ladda/dist/ladda.min.js') }}"></script>
<script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
<script src="{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
<script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js') }}"></script>
<script src="{{ asset('assets/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/vendors/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/ionrangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nestable/jquery.nestable.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables-responsive/js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('assets/vendors/editable-table/mindmup-editabletable.js') }}"></script>
<script src="{{ asset('assets/vendors/peity/jquery.peity.min.js') }}"></script>
<!-- v1.1.1 -->
<script src="{{ asset('assets/vendors/gsap/src/minified/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/hackertyper/hackertyper.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-countTo/jquery.countTo.js') }}"></script>
<!-- Page Scripts -->
@endsection
@section('content')
<!-- Dashboard -->
<div class="dashboard-container">
    <!-- Profile Header -->
    <nav class="top-submenu top-submenu-with-background">
        <div class="profile-header">
            <div class="profile-header-info">
                <div class="row">
                    <div class="col-xl-8 col-xl-offset-4">
                        <div class="width-100 text-center pull-right hidden-md-down">
                            <h4>USD&nbsp;{{ Auth::user()->balance }}</h4>
                            <p>Wallet Balance</p>
                        </div>
                        <div class="profile-header-title">
                            <h2>{{ Auth::user()->name }}</h2>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Profile Header -->
    <!-- Profile -->
    <div class="row">
        <div class="col-xl-4">
            <section class="panel profile-user" style="background-image: url(../assets/common/img/temp/photos/9.jpeg)">
                <div class="panel-body">
                    <div class="profile-user-title text-center">
                        <a class="avatar" href="javascript:void(0);">
                            <img src="{{ asset('images/avatar.png') }}" alt="Alternative text to the image">
                        </a>
                        <br />
                        
                        <p>Last login {{ date('d F, Y', strtotime(Auth::user()->created_at)) }}</p>
                        <p>
                            <span class="donut donut-success"></span>
                            Online
                        </p>
                    </div>
                </div>
            </section>
            <section class="panel">
                <div class="panel-body">
                    <h6>User Details</h6>
                    @if($checkDB)
                        <dl class="dl-horizontal user-profile-dl">
                            <dt>Gender</dt>
                            <dd>-</dd>
                            <dt>Phone Number</dt>
                            <dd>-</dd>
                            <dt>Date of Birthday</dt>
                            <dd>-</dd>
                            <dt>Address</dt>
                            <dd>-</dd>
                            <dt>Member Since</dt>
                            <dd>-</dd>
                        </dl>
                    @else
                        <a href="{{ action('ProfileController@createProfile') }}" class="btn btn-squared btn-danger-outline margin-inline">Add Profile</a>
                        <br>
                        *Please add your profile
                    @endif
                </div>
            </section>
        </div>
        <div class="col-xl-8">
            <div class="margin-bottom-50">
                <div class="panel panel-with-borders">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-4">
                                <!-- Example State Default -->
                                <div class="step-block step-success">
                                    <span class="step-digit"><i class="icmn-checkmark4"></i></span>
                                    <div class="step-desc">
                                        <span class="step-title">Verify Email</span>
                                        <p>Accepted</p>
                                    </div>
                                </div>
                                <!-- End Example State Default -->
                            </div>
                            <div class="col-lg-4">
                                <!-- Example State Current -->
                                @if($checkDB)
                                <div class="step-block step-success">
                                    <span class="step-digit"><i class="icmn-checkmark4"></i></span>
                                    <div class="step-desc">
                                        <span class="step-title">Complete profile</span>
                                        <p>Accepted</p>
                                    </div>
                                </div>
                                @else
                                <div class="step-block step-danger">
                                        <span class="step-digit"><i class="icmn-cross2"></i></span>
                                        <div class="step-desc">
                                            <span class="step-title">Add Profile </span>
                                            <p>Not Complete</p>
                                        </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <!-- Example State Current -->
                                <div class="step-block step-danger">
                                    <span class="step-digit"><i class="icmn-cross2"></i></span>
                                    <div class="step-desc">
                                        <span class="step-title">Add Account</span>
                                        <p>Not Complete</p>
                                    </div>
                                </div>
                                <!-- End Example State Current -->
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Welcome to the client dashboard,</p>
                                <p> Here you may find summary of your trading account. For receiving more information and operating your account use links in the left menu.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="panel panel-with-borders">
                    <div class="panel-heading">
                        <h6>Latest status</h6>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-default">
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Username</th>
                                <th width="200">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>@mdo</td>
                                <td>
                                    <progress class="progress progress-success" value="82" max="100">25%</progress>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>@fat</td>
                                <td>
                                    <progress class="progress progress-success" value="75" max="100">25%</progress>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>@twitter</td>
                                <td>
                                    <progress class="progress progress-default" value="33" max="100">25%</progress>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Profile -->
    
</div>
<!-- End Dashboard -->
@endsection
