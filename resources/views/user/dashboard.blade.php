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
            <section class="panel profile-user" style="background-color: #16295F">
                <div class="panel-body">
                    <div class="profile-user-title text-center">
                        <a class="avatar" href="javascript:void(0);">
                            <img src="{{ asset('images/avatar.png') }}" alt="Alternative text to the image">
                        </a>
                        <br />
                        
                        <p>Member since {{ date('d F, Y', strtotime(Auth::user()->created_at)) }}</p>
                        <p>
                            <span class="donut donut-success"></span>
                            Trader
                        </p>
                    </div>
                </div>
            </section>
            <section class="panel">
                <div class="panel-body">
                    <h6>Actions</h6>
                    <div class="btn-group-vertical btn-group-justified">
                        <button type="button" class="btn">Send Message</button>
                        <button type="button" class="btn">Send File</button>
                        <button type="button" class="btn">Access History</button>
                        <button type="button" class="btn">Rename User</button>
                        <button type="button" class="btn">Ban User</button>
                    </div>
                </div>
            </section>
            <section class="panel">
                <div class="panel-body">
                    <h6>Information</h6>
                    <dl class="dl-horizontal user-profile-dl">
                        <dt>Courses End</dt>
                        <dd>Digital Ocean, Nokia</dd>
                        <dt>Address</dt>
                        <dd>New York, US</dd>
                        <dt>Skills</dt>
                        <dd><span class="label label-default">html</span> <span class="label label-default">css</span> <span class="label label-default">design</span> <span class="label label-default">javascript</span></dd>
                        <dt>Last companies</dt>
                        <dd>Microsoft, Soft Mailstorm</dd>
                        <dt>Personal Information</dt>
                        <dd>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</dd>
                    </dl>
                </div>
            </section>
        </div>
        <div class="col-xl-8">
            <section class="panel profile-user-content">
                <div class="panel-body">
                    <h5>Personal Information</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l0">Username</label>
                                <input type="text" class="form-control" id="l0">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l1">Email</label>
                                <input type="email" class="form-control" id="l1">
                            </div>
                        </div>
                    </div>
                    <br />
                    <h5>Password</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l3">Password</label>
                                <input type="password" class="form-control" id="l3">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="l4">Password</label>
                                <input type="password" class="form-control" id="l4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <br />
                            <h5>Profile Avatar</h5>
                            <div class="form-group">
                                <label class="form-control-label" for="l6">File Upload</label>
                                <input type="file" id="l6">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <br />
                            <h5>Profile Background</h5>
                            <div class="form-group">
                                <label class="form-control-label" for="l5">File Upload</label>
                                <input type="file" id="l5">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="form-group">
                            <button type="button" class="btn width-150 btn-primary">Submit</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- End Profile -->
    
</div>
<!-- End Dashboard -->
@endsection