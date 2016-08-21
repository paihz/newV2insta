<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title or 'instaforex.my dashboard &middot; deposit &amp; withdrawl in 24hours' }}</title>

    <link href="#" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="#" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="#" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="#" rel="apple-touch-icon" type="image/png">
    <link href="#" rel="icon" type="image/png">
    <link href="favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jscrollpane/style/jquery.jscrollpane.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/ladda/dist/ladda-themeless.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}">
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
    
    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/css/source/main.css') }}">

    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jscrollpane/script/jquery.jscrollpane.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/spin.js/spin.js') }}"></script>
    <script src="{{ asset('assets/vendors/ladda/dist/ladda.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
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
    <script src="{{ asset('assets/vendors/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/c3/c3.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/peity/jquery.peity.min.js') }}"></script>
    <!-- v1.0.1 -->
    <script src="{{ asset('assets/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- v1.1.1 -->
    <script src="{{ asset('assets/vendors/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/hackertyper/hackertyper.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-countTo/jquery.countTo.js') }}"></script>

    <!-- Clean UI Scripts -->
    <script src="{{ asset('assets/common/js/common.js') }}"></script>
    <script src="{{ asset('assets/common/js/demo.temp.js') }}"></script>
</head>
<body class="layout-boxed theme-default menu-static colorful-enabled">
@include('_inc.side')

@include('_inc.top')

<section class="page-content">
<div class="page-content-inner">

    <!-- Dashboard -->
    <div class="dashboard-container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven background-success">
                    <div class="widget-body">
                        <div href="javascript: void(0);" class="widget-body-inner">
                            <h5 class="text-uppercase">Week Sales</h5>
                            <i class="counter-icon icmn-cash3"></i>
                            <span class="counter-count">
                                <i class="icmn-arrow-up5"></i>
                                $<span class="counter-init" data-from="25" data-to="942"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven background-default">
                    <div class="widget-body">
                        <div href="javascript: void(0);" class="widget-body-inner">
                            <h5 class="text-uppercase">Server Uptime</h5>
                            <i class="counter-icon icmn-server"></i>
                            <span class="counter-count">
                                <i class="icmn-arrow-down5"></i>
                                <span class="counter-init" data-from="0" data-to="99"></span>%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven">
                    <div class="widget-body">
                        <div href="javascript: void(0);" class="widget-body-inner">
                            <h5 class="text-uppercase">New Clients</h5>
                            <i class="counter-icon icmn-users"></i>
                            <span class="counter-count">
                                <i class="icmn-arrow-up5"></i>
                                <span class="counter-init" data-from="0" data-to="67"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven">
                    <div class="widget-body">
                        <div href="javascript: void(0);" class="widget-body-inner">
                            <h5 class="text-uppercase">Subscriptions</h5>
                            <i class="counter-icon icmn-users"></i>
                            <span class="counter-count">
                                <i class="icmn-arrow-up5"></i>
                                <span class="counter-init" data-from="0" data-to="356"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="widget widget-six">
                    <div class="widget-header">
                        <div class="dropdown pull-right">
                            <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="dropdown-inline-button-icon icmn-cog"></i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="" role="menu">
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Remove All</a>
                            </ul>
                        </div>
                        <strong class="margin-right-10">Sales Statistics, Billions</strong>
                        <span class="margin-right-10 nowrap">
                            <span class="donut donut-success"></span>
                            Guns
                        </span>
                        <span class="margin-right-10 nowrap">
                            <span class="donut donut-primary"></span>
                            Girls
                        </span>
                        <span class="margin-right-10 nowrap">
                            <span class="donut donut-yellow"></span>
                            Drugs
                        </span>
                    </div>
                    <div class="widget-body">
                        <div class="chart-line height-250 chartist"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="widget widget-six">
                    <div class="widget-header">
                        <div class="dropdown pull-right">
                            <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="dropdown-inline-button-icon icmn-cog"></i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="" role="menu">
                                <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Remove All</a>
                            </ul>
                        </div>
                        <strong class="margin-right-10">Growth, %</strong>
                        <span class="margin-right-10 nowrap">
                            <span class="donut donut-primary"></span>
                            Income
                        </span>
                        <span class="margin-right-10 nowrap">
                            <span class="donut donut-success"></span>
                            Outcome
                        </span>
                    </div>
                    <div class="widget-body">
                        <div class="chart-overlapping-bar height-250 chartist"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven">
                    <div class="carousel-widget carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="widget-body">
                                    <div class="widget-body-icon">
                                        <i class="icmn-accessibility"></i>
                                    </div>
                                    <a href="javascript: void(0);" class="widget-body-inner">
                                        <h2>Sales Growth</h2>
                                        <p>View Report</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="widget-body">
                                    <div class="widget-body-icon">
                                        <i class="icmn-download"></i>
                                    </div>
                                    <a href="javascript: void(0);" class="widget-body-inner">
                                        <h2>All Reports</h2>
                                        <p>Pdf Download</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven">
                    <div class="carousel-widget-2 carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <a href="javascript: void(0);" class="widget-body">
                                    <h2>
                                        <i class="icmn-database"></i> Databases
                                    </h2>
                                    <p>
                                        Total: 765
                                        <br />
                                        New: 36
                                    </p>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="javascript: void(0);" class="widget-body">
                                    <h2>
                                        <i class="icmn-users"></i> Users
                                    </h2>
                                    <p>
                                        Total: 24 467
                                        <br />
                                        New: 456
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven background-danger">
                    <div class="carousel-widget carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <a href="javascript: void(0);" class="widget-body">
                                    <h2>
                                        <i class="icmn-books"></i> Todo
                                    </h2>
                                    <p>
                                        1. Upgrade
                                        <br />
                                        2. Finish
                                    </p>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="javascript: void(0);" class="widget-body">
                                    <h2>
                                        <i class="icmn-download"></i> Finish
                                    </h2>
                                    <p>
                                        1. Upgrade
                                        <br />
                                        2. Prepare
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                <div class="widget widget-seven background-info" style="background-image: url(../assets/common/img/temp/photos/9.jpeg)">
                    <div class="carousel-widget-2 carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <a href="javascript: void(0);" class="widget-body">
                                    <h2>Clean</h2>
                                    <p>
                                        Simple
                                        <br />
                                        Responsive
                                    </p>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="javascript: void(0);" class="widget-body">
                                    <h2>Clean</h2>
                                    <p>
                                        Simple
                                        <br />
                                        Responsive
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="widget widget-three">
                    <div class="example-calendar-block"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="widget widget-two">
                    <div class="widget-header">
                        <div class="dropdown pull-right">
                            <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="dropdown-inline-button-icon icmn-folder-open"></i>
                                <span class="hidden-lg-down">Issues History</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="" role="menu">
                                <a class="dropdown-item" href="javascript:void(0)">Current search</a>
                                <a class="dropdown-item" href="javascript:void(0)">Search for issues</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header">Opened</div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i> CLNUI-253 Project implemen...</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i> CLNUI-234 Active history iss...</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-clock"></i> CLNUI-424 Ionicons intergrat...</a>
                                <a class="dropdown-item" href="javascript:void(0)">More...</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header">Filters</div>
                                <a class="dropdown-item" href="javascript:void(0)">My open issues</a>
                                <a class="dropdown-item" href="javascript:void(0)">Reported by me</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Import issues from CSV</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-cog"></i> Settings</a>
                            </ul>
                        </div>
                        Conversation: <strong>Software</strong>
                    </div>
                    <div class="widget-body clearfix">
                        <div class="conversation-block custom-scroll" style="height: 260px">
                            <div class="conversation-item">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/3.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>David Scott</strong>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                            <div class="conversation-item">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/3.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>Chris Smith</strong>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                </div>
                            </div>
                            <div class="conversation-item you">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/4.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>Donald Trump</strong>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy</p>
                                </div>
                            </div>
                            <div class="conversation-item">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/3.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>David Scott</strong>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                            <div class="conversation-item you">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/4.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>Donald Trump</strong>
                                    <p>Ok. Thanks!</p>
                                </div>
                            </div>
                            <div class="conversation-item you">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/4.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>Donald Trump</strong>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy</p>
                                </div>
                            </div>
                            <div class="conversation-item">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/3.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>David Scott</strong>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                            <div class="conversation-item you">
                                <div class="s1">
                                    <a class="avatar" href="javascript:void(0);">
                                        <img src="../assets/common/img/temp/avatars/4.jpg" alt="Alternative text to the image" />
                                    </a>
                                </div>
                                <div class="s2">
                                    <strong>Donald Trump</strong>
                                    <p>Ok. Thanks!</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group padding-top-20 margin-bottom-0">
                            <textarea id="textarea" class="form-control" placeholder="Type and press enter"></textarea>
                            <button class="btn width-full margin-top-10">
                                <i class="fa fa-send margin-right-5"></i>
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget widget-four background-transparent">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block ">
                        <span class="step-digit">
                            <i class="icmn-database"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Databases</span>
                            <p>
                                Total: 765
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block">
                        <span class="step-digit">
                            <i class="icmn-users"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Users</span>
                            <p>Total: 24 467</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block step-warning">
                        <span class="step-digit">
                            <i class="icmn-stats-growth"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Daily Sales</span>
                            <p>
                                Total: 765
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block step-primary">
                        <span class="step-digit">
                            <i class="icmn-stats-dots"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Bandwidth</span>
                            <p>
                                <span>160.32 GB/S</span>
                                <span>&nbsp;</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-with-borders">
                <div class="panel-body">
                    <div class="nav-tabs-horizontal margin-bottom-20">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#h1" role="tab">Registered Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#h2" role="tab">Total Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#h3" role="tab">Administrators</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#h4" role="tab">Waiting for Registration</a>
                            </li>
                        </ul>
                    </div>
                    <table class="table table-hover nowrap margin-bottom-0" id="example1" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>Damon</td>
                            <td>5516 Adolfo Green</td>
                            <td>Littelhaven</td>
                            <td>85</td>
                            <td>2014/06/13</td>
                            <td>$553,536</td>
                        </tr>
                        <tr>
                            <td>Torrey</td>
                            <td>1995 Richie Neck</td>
                            <td>West Sedrickstad</td>
                            <td>77</td>
                            <td>2014/09/12</td>
                            <td>$243,577</td>
                        </tr>
                        <tr>
                            <td>Miracle</td>
                            <td>176 Hirthe Squares</td>
                            <td>Ryleetown</td>
                            <td>82</td>
                            <td>2013/09/27</td>
                            <td>$784,802</td>
                        </tr>
                        <tr>
                            <td>Wilhelmine</td>
                            <td>44727 O&#x27;Hara Union</td>
                            <td>Dibbertfurt</td>
                            <td>68</td>
                            <td>2013/06/28</td>
                            <td>$207,291</td>
                        </tr>
                        <tr>
                            <td>Hubert</td>
                            <td>8884 Jamel Pines</td>
                            <td>Howemouth</td>
                            <td>63</td>
                            <td>2013/05/28</td>
                            <td>$584,032</td>
                        </tr>
                        <tr>
                            <td>Myrtie.Gerhold</td>
                            <td>098 Noel Way</td>
                            <td>Santinoland</td>
                            <td>13</td>
                            <td>2014/12/12</td>
                            <td>$550,087</td>
                        </tr>
                        <tr>
                            <td>Chester</td>
                            <td>14095 Kling Gateway</td>
                            <td>Andresmouth</td>
                            <td>26</td>
                            <td>2014/09/27</td>
                            <td>$177,404</td>
                        </tr>
                        <tr>
                            <td>Melany_Gerhold</td>
                            <td>1100 Steve Pines</td>
                            <td>Immanuelfort</td>
                            <td>12</td>
                            <td>2014/06/28</td>
                            <td>$162,453</td>
                        </tr>
                        <tr>
                            <td>Thea</td>
                            <td>26114 Narciso Lodge</td>
                            <td>East Opal</td>
                            <td>64</td>
                            <td>2014/11/12</td>
                            <td>$581,736</td>
                        </tr>
                        <tr>
                            <td>Albin.Kreiger</td>
                            <td>111 Hershel Stream</td>
                            <td>Hermannborough</td>
                            <td>90</td>
                            <td>2013/11/27</td>
                            <td>$921,021</td>
                        </tr>
                        <tr>
                            <td>Shanel</td>
                            <td>7579 Santa Forest</td>
                            <td>Jordaneville</td>
                            <td>14</td>
                            <td>2016/04/28</td>
                            <td>$818,20</td>
                        </tr>
                        <tr>
                            <td>Bell.Mueller</td>
                            <td>083 Kshlerin Forest</td>
                            <td>Clintmouth</td>
                            <td>98</td>
                            <td>2013/10/12</td>
                            <td>$571,46</td>
                        </tr>
                        <tr>
                            <td>Clementina</td>
                            <td>5957 Hagenes Falls</td>
                            <td>Anaishaven</td>
                            <td>45</td>
                            <td>2013/11/12</td>
                            <td>$684,588</td>
                        </tr>
                        <tr>
                            <td>Johanna.Thiel</td>
                            <td>4301 Trever Radial</td>
                            <td>Lake Augustineton</td>
                            <td>67</td>
                            <td>2013/12/27</td>
                            <td>$608,507</td>
                        </tr>
                        <tr>
                            <td>Elliott_Becker</td>
                            <td>8417 Orion Parkway</td>
                            <td>Streichside</td>
                            <td>83</td>
                            <td>2014/08/28</td>
                            <td>$447,592</td>
                        </tr>
                        <tr>
                            <td>Yasmine</td>
                            <td>67284 Kreiger Freeway</td>
                            <td>Stoltenbergside</td>
                            <td>8</td>
                            <td>2014/12/12</td>
                            <td>$358,369</td>
                        </tr>
                        <tr>
                            <td>Ada.Hoppe</td>
                            <td>69842 Peyton Viaduct</td>
                            <td>South Geovannyburgh</td>
                            <td>89</td>
                            <td>2013/05/13</td>
                            <td>$211,76</td>
                        </tr>
                        <tr>
                            <td>Sammie</td>
                            <td>46406 Powlowski Common</td>
                            <td>Cristmouth</td>
                            <td>51</td>
                            <td>2014/03/29</td>
                            <td>$345,739</td>
                        </tr>
                        <tr>
                            <td>Terrance.Borer</td>
                            <td>1568 Richmond Bypass</td>
                            <td>Schillerfort</td>
                            <td>46</td>
                            <td>2014/10/27</td>
                            <td>$634,073</td>
                        </tr>
                        <tr>
                            <td>August</td>
                            <td>731 Stiedemann Crossing</td>
                            <td>Rolfsonborough</td>
                            <td>98</td>
                            <td>2013/11/12</td>
                            <td>$203,952</td>
                        </tr>
                        <tr>
                            <td>Mckenna.Herman</td>
                            <td>63204 Hegmann Keys</td>
                            <td>New Isobelview</td>
                            <td>2</td>
                            <td>2013/08/12</td>
                            <td>$702,091</td>
                        </tr>
                        <tr>
                            <td>Adrianna_Durgan</td>
                            <td>75151 Kshlerin Square</td>
                            <td>North Elwynfurt</td>
                            <td>25</td>
                            <td>2014/02/26</td>
                            <td>$481,980</td>
                        </tr>
                        <tr>
                            <td>Heath.Ryan</td>
                            <td>6778 Howe Route</td>
                            <td>Antwanbury</td>
                            <td>90</td>
                            <td>2013/08/12</td>
                            <td>$569,723</td>
                        </tr>
                        <tr>
                            <td>Alisa</td>
                            <td>64838 D&#x27;Amore Cove</td>
                            <td>Port Lempi</td>
                            <td>25</td>
                            <td>2016/04/28</td>
                            <td>$226,459</td>
                        </tr>
                        <tr>
                            <td>Treva</td>
                            <td>308 Octavia Roads</td>
                            <td>East Eunaton</td>
                            <td>37</td>
                            <td>2014/12/12</td>
                            <td>$746,921</td>
                        </tr>
                        <tr>
                            <td>Myriam_Nicolas</td>
                            <td>760 Hickle Causeway</td>
                            <td>Lake Nickolasshire</td>
                            <td>69</td>
                            <td>2014/05/13</td>
                            <td>$293,786</td>
                        </tr>
                        <tr>
                            <td>Gerhard</td>
                            <td>893 Mara Parkway</td>
                            <td>Elmermouth</td>
                            <td>32</td>
                            <td>2014/11/27</td>
                            <td>$856,275</td>
                        </tr>
                        <tr>
                            <td>Monica</td>
                            <td>0039 Heath Plain</td>
                            <td>West Bentonhaven</td>
                            <td>80</td>
                            <td>2016/05/13</td>
                            <td>$821,600</td>
                        </tr>
                        <tr>
                            <td>Lacey</td>
                            <td>995 Lang Springs</td>
                            <td>Cordellburgh</td>
                            <td>94</td>
                            <td>2014/11/27</td>
                            <td>$990,291</td>
                        </tr>
                        <tr>
                            <td>Bret</td>
                            <td>282 Susana Heights</td>
                            <td>Kaneport</td>
                            <td>47</td>
                            <td>2013/05/28</td>
                            <td>$445,494</td>
                        </tr>
                        <tr>
                            <td>Jennie</td>
                            <td>755 Greyson Key</td>
                            <td>East Jazmyne</td>
                            <td>94</td>
                            <td>2016/03/29</td>
                            <td>$530,408</td>
                        </tr>
                        <tr>
                            <td>Emerson</td>
                            <td>784 Adriel Radial</td>
                            <td>New Jerroldland</td>
                            <td>4</td>
                            <td>2014/02/26</td>
                            <td>$805,823</td>
                        </tr>
                        <tr>
                            <td>Herta</td>
                            <td>7491 Bednar Gardens</td>
                            <td>Port Lucianoton</td>
                            <td>23</td>
                            <td>2013/10/12</td>
                            <td>$352,269</td>
                        </tr>
                        <tr>
                            <td>Stone_Deckow</td>
                            <td>6440 Moen Loop</td>
                            <td>Jenningsbury</td>
                            <td>23</td>
                            <td>2014/07/28</td>
                            <td>$219,573</td>
                        </tr>
                        <tr>
                            <td>Davin</td>
                            <td>50922 Kiara Square</td>
                            <td>Port Edmund</td>
                            <td>37</td>
                            <td>2014/11/27</td>
                            <td>$241,432</td>
                        </tr>
                        <tr>
                            <td>Johnathan_Mraz</td>
                            <td>1998 Webster Fords</td>
                            <td>East Vern</td>
                            <td>50</td>
                            <td>2014/09/12</td>
                            <td>$290,875</td>
                        </tr>
                        <tr>
                            <td>Gunnar</td>
                            <td>92873 Barney Club</td>
                            <td>Beierview</td>
                            <td>82</td>
                            <td>2014/03/29</td>
                            <td>$569,778</td>
                        </tr>
                        <tr>
                            <td>Raina</td>
                            <td>828 Cathy Streets</td>
                            <td>West Uriahville</td>
                            <td>26</td>
                            <td>2013/09/27</td>
                            <td>$186,229</td>
                        </tr>
                        <tr>
                            <td>Marjorie.Orn</td>
                            <td>314 Aurore Canyon</td>
                            <td>Port Jaquelineburgh</td>
                            <td>3</td>
                            <td>2014/06/28</td>
                            <td>$547,752</td>
                        </tr>
                        <tr>
                            <td>Citlalli_Wehner</td>
                            <td>139 Ebert Freeway</td>
                            <td>Lake Esperanzamouth</td>
                            <td>78</td>
                            <td>2016/01/27</td>
                            <td>$892,012</td>
                        </tr>
                        <tr>
                            <td>Ruben.Reilly</td>
                            <td>02868 Cronin Tunnel</td>
                            <td>Rossieville</td>
                            <td>87</td>
                            <td>2013/09/12</td>
                            <td>$520,483</td>
                        </tr>
                        <tr>
                            <td>Gunner_Jakubowski</td>
                            <td>80391 Maxwell Parks</td>
                            <td>South Travon</td>
                            <td>26</td>
                            <td>2014/03/29</td>
                            <td>$272,005</td>
                        </tr>
                        <tr>
                            <td>Josephine</td>
                            <td>36238 Satterfield Avenue</td>
                            <td>New Alexanderhaven</td>
                            <td>51</td>
                            <td>2016/01/27</td>
                            <td>$189,18</td>
                        </tr>
                        <tr>
                            <td>Ceasar_Orn</td>
                            <td>2795 Clement Ridges</td>
                            <td>Beckerhaven</td>
                            <td>78</td>
                            <td>2013/11/27</td>
                            <td>$958,117</td>
                        </tr>
                        <tr>
                            <td>Coby</td>
                            <td>53700 Pagac Lodge</td>
                            <td>South Hershel</td>
                            <td>86</td>
                            <td>2013/08/28</td>
                            <td>$481,619</td>
                        </tr>
                        <tr>
                            <td>Colin</td>
                            <td>637 Paucek Mountain</td>
                            <td>West Luraberg</td>
                            <td>77</td>
                            <td>2016/02/26</td>
                            <td>$298,110</td>
                        </tr>
                        <tr>
                            <td>Monique_White</td>
                            <td>415 Corkery Walks</td>
                            <td>West Lauryn</td>
                            <td>97</td>
                            <td>2014/02/11</td>
                            <td>$222,343</td>
                        </tr>
                        <tr>
                            <td>Jarvis.Simonis</td>
                            <td>0778 Elvis Spurs</td>
                            <td>Harrisfurt</td>
                            <td>62</td>
                            <td>2013/05/28</td>
                            <td>$336,046</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Dashboard -->

</div>


<!-- Page Scripts -->
<script>
    $(function() {

        ///////////////////////////////////////////////////////////
        // COUNTERS
        $('.counter-init').countTo({
            speed: 1500
        });

        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('#textarea'));

        ///////////////////////////////////////////////////////////
        // CUSTOM SCROLL
        if (!cleanUI.hasTouch) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

        ///////////////////////////////////////////////////////////
        // CALENDAR
        $('.example-calendar-block').fullCalendar({
            //aspectRatio: 2,
            height: 450,
            header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            viewRender: function(view, element) {
                if (!cleanUI.hasTouch) {
                    $('.fc-scroller').jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                }
            },
            defaultDate: '2016-05-12',
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-05-01',
                    className: 'fc-event-success'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-09T16:00:00',
                    className: 'fc-event-default'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-16T16:00:00',
                    className: 'fc-event-success'
                },
                {
                    title: 'Conference',
                    start: '2016-05-11',
                    end: '2016-05-14',
                    className: 'fc-event-danger'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                if (!$(this).hasClass('event-clicked')) {
                    $('.fc-event').removeClass('event-clicked');
                    $(this).addClass('event-clicked');
                }
            }
        });

        ///////////////////////////////////////////////////////////
        // CAROUSEL WIDGET
        $('.carousel-widget').carousel({
            interval: 4000
        });

        $('.carousel-widget-2').carousel({
            interval: 6000
        });

        ///////////////////////////////////////////////////////////
        // DATATABLES
        $('#example1').DataTable({
            responsive: true,
            "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]]
        });

        ///////////////////////////////////////////////////////////
        // CHART 1
        new Chartist.Line(".chart-line", {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            series: [
                [12, 9, 7, 8, 5],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: !0,
            chartPadding: {
                right: 40
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });

        ///////////////////////////////////////////////////////////
        // CHART 2
        var overlappingData = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                    ]
                },
                overlappingOptions = {
                    seriesBarDistance: 10,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                },
                overlappingResponsiveOptions = [
                    ["", {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0]
                            }
                        }
                    }]
                ];

        new Chartist.Bar(".chart-overlapping-bar", overlappingData, overlappingOptions, overlappingResponsiveOptions);


    });
</script>
<!-- End Page Scripts -->
</section>

<div class="main-backdrop"><!-- --></div>

</body>
</html>