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
    @yield('css')
    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/css/source/main.css') }}">

    
</head>
<body class="layout-boxed theme-default menu-static colorful-enabled">
@include('_inc.side')
@include('_inc.top')
<section class="page-content">
<div class="page-content-inner">

    @yield('content')

</div>
<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jscrollpane/script/jquery.jscrollpane.min.js') }}"></script>
<script src="{{ asset('assets/vendors/spin.js/spin.js') }}"></script>
<!-- Clean UI Scripts -->
<script src="{{ asset('assets/common/js/common.js') }}"></script>
@yield('js')

</section>

<div class="main-backdrop"><!-- --></div>

</body>
</html>