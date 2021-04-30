<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="{{ asset('assets_admin/css/bootstrap.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ asset('assets_admin/css/font-awesome.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ asset('assets_admin/css/animate-css/animate.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ asset('assets_admin/css/lobipanel/lobipanel.min.css') }}" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="{{ asset('assets_admin/css/prism/prism.css') }}" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="{{ asset('assets_admin/css/toastr/toastr.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ asset('assets_admin/css/icheck/skins/line/blue.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets_admin/css/icheck/skins/line/red.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets_admin/css/icheck/skins/line/green.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets_admin/css/bootstrap-tour/bootstrap-tour.css') }}" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="{{ asset('assets_admin/css/main.css') }}" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="{{ asset('assets_admin/js/modernizr/modernizr.min.js') }}"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            @include('admin/topbar')

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-12">
                                    <h2 class="title">Dashboard</h2>
                                    <p class="sub-title">One stop solution for perfect admin dashboard!</p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-sm-12">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Dashboard</li>
            						</ul>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="{{ url('/dashboard/bookings/airduct') }}">
                                            <span class="name">Airduct Cleaning</span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="{{ url('/dashboard/bookings/baby') }}">
                                            <span class="name">Baby Sitting</span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="{{ url('/dashboard/bookings/grass') }}">
                                            <span class="name">Grass Cutting</span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                                </div>
                                <div class="row mt-5">

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="{{ url('/dashboard/bookings/maids') }}">
                                            <span class="name">Maids</span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="{{ url('/dashboard/bookings/packers') }}">
                                            <span class="name">Packers and Movers</span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="{{ url('/dashboard/bookings/snow') }}">
                                            <span class="name">Snow Cleaning</span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        
                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="{{ asset('assets_admin/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/pace/pace.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/lobipanel/lobipanel.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/iscroll/iscroll.js') }}"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="{{ asset('assets_admin/js/prism/prism.js') }}"></script>
        <script src="{{ asset('assets_admin/js/waypoint/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/counterUp/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('assets_admin/js/amcharts/serial.js') }}"></script>
        <script src="{{ asset('assets_admin/js/amcharts/plugins/export/export.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets_admin/js/amcharts/plugins/export/export.css') }}" type="text/css" media="all" />
        <script src="{{ asset('assets_admin/js/amcharts/themes/light.js') }}"></script>
        <script src="{{ asset('assets_admin/js/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/icheck/icheck.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/bootstrap-tour/bootstrap-tour.js') }}"></script>

        <!-- ========== THEME JS ========== -->
        <script src="{{ asset('assets_admin/js/main.js') }}"></script>
        <script src="{{ asset('assets_admin/js/production-chart.js') }}"></script>
        <script src="{{ asset('assets_admin/js/traffic-chart.js') }}"></script>
        <script src="{{ asset('assets_admin/js/task-list.js') }}"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "3500",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"]("One stop solution to your website admin panel!", "Welcome to Admin Panel");

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
