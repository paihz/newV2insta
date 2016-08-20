<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>{{ $title or 'instaforex.my dashboard &middot; deposit &amp; withdrawl in 24hours' }}</title>
        <meta name="description"
        content="Instaforex.my dashboard is the place where trader can submit secured deposit and withdrawal. We are the best currency exchanger in Malaysia">
        <meta name="keywords"
        content="instaforex, instaforex.my, dashboard, exchanger, malaysia, kualalumpur, secured, deposit, withdrawal, withdraw, currency">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}"
            type="text/css"/>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
            <!-- iCheck -->
            <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/blue.css') }}">
            <!-- iCheck -->
            <link rel="stylesheet" href="{{ asset('/bower_components/AdminLTE/plugins/iCheck/square/green.css') }}">
            <!-- Panggil internal css everpage -->
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>
            <!-- #header -->
            <header id="header">
                <!-- #navigation -->
                <nav id="navigation" class="navbar">
                    <!-- .container -->
                    <div class="container">
                        <div class="navbar-brand">
                            <a href="index.html"><img src="images/logo0.png" alt="Logo"/></a> <!-- site logo -->
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="javascript:void(0)" class="smooth-scroll">Email : admin@instaforex.my</a></li>
                            <li class="active"><a href="javascript:void(0)">Whatsapp : +6010-294&nbsp;5432</a></li>
                        </ul>
                    </div>
                    <!-- .container end -->
                </nav>
                <!-- #navigation end -->
                <!-- .header-content -->
                <div class="header-content">
                    <!-- .container -->
                    <div class="container">
                        <!-- .row -->
                        <div class="row">
                            <div class="col-sm-6 col-md-7 col-lg-6">
                                <div class="header-text">
                                    <div class="post-heading-left">
                                        <h2>Welcome to instaforex.my dashboard</h2>
                                        <p>Malaysia's best local transfer for Deposit &amp; Withdrawal</p>
                                    </div>
                                    <p style="text-align: left;">Our dashboard provides one central location to complete all essential account management functions
                                        with instaforex. Accessible from any web-enabled device,
                                    get latest update, and also will place you in full control of your trading account.</p>
                                    <div class="list-icon no-margin-bottom">
                                        <ul>
                                            <li><i class="fa fa-check-square-o"></i> Reliable and secure platform</li>
                                            <li><i class="fa fa-check-square-o"></i> Everything is perfectly orgainized for future
                                            </li>
                                            <li><i class="fa fa-check-square-o"></i> Check your account balance</li>
                                            <li><i class="fa fa-check-square-o"></i> Track your Deposit &amp; Withdrawal history </li>
                                        </ul>
                                    </div>
                                    <div class="btn-section">
                                        <a href="javascript:void(0)" class="btn-custom smooth-scroll">Get Real Account</a>
                                        <a href="javascript:void(0)" class="btn-link">Download MetaTrader</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-offset-1">
                                <div class="header-form-wrapper">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .header-content end -->
            </header>
            <!-- #header end -->
        </body>
        <!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        <script src="{{ asset('/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset('/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('/bower_components/AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
        <script>
        $(function () {
        $('input').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '20%' // optional
        });
        });
        </script>
    </body>
</html>