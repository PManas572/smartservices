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
                                    <li><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
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

                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Bookings</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <table id="example2" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>email</th>
                                                            <th>address</th>
                                                            <th>postal_code</th>
                                                            <th>city</th>
                                                            <th>province</th>
                                                            <th>phNo</th>
                                                            <th>numberOfRooms</th>
                                                            <th>date</th>
                                                            <th>time</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>email</th>
                                                            <th>address</th>
                                                            <th>postal_code</th>
                                                            <th>city</th>
                                                            <th>province</th>
                                                            <th>phNo</th>
                                                            <th>numberOfRooms</th>
                                                            <th>date</th>
                                                            <th>time</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @foreach($bookings as $booking)
                                                        <tr>
                                                            <td>{{ $booking->name }}</td>
                                                            <td>{{ $booking->email }}</td>
                                                            <td>{{ $booking->address }}</td>
                                                            <td>{{ $booking->postal_code }}</td>
                                                            <td>{{ $booking->city }}</td>
                                                            <td>{{ $booking->province }}</td>
                                                            <td>{{ $booking->phNo }}</td>
                                                            <td>{{ $booking->numberOfRooms }}</td>
                                                            <td>{{ $booking->date }}</td>
                                                            <td>{{ $booking->time }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

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
