<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Smart Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="author" content="">
	<meta name="keywords" content="" />
	<link rel="icon" href="{{ asset('assets/images/favicon.png')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon4.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>


<body>


	<div class="page-loading">
    	<img src="{{ asset('assets/images/loader.gif') }}" alt="" />
    </div><!--page-loading end-->

	<div class="wrapper">

		@include('header')

		<section class="main-banner hp1">
			<div class="fixed-bg banner-bg1"></div>
			<div class="container">
				<div class="banner-content">
					<div class="banner-text">
						<h2 class="wow fadeInUp" data-wow-duration="1000ms"><strong>Services</strong> </h2>
						<p class="wow fadeInUp" data-wow-duration="1000ms">Service at your door.</p>
						
						
					</div><!--banner-text end-->
					<div class="clearfix"></div>
				</div><!--banner-content end-->
			</div>
			<div class="banner-img">
				<img src="{{ asset('assets/images/m10.jpg') }}" alt="">
			</div>
		</section><!--main-banner end-->

		<section class="sec-block-200 marketing-scy">
			<div class="container-fluid">
				<div class="section-title text-center">
					<h2>Book Your Services</h2>
					
				</div><!--section-title end-->
				<div class="marketing-projects">
					<div class="row">
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a1.jpg') }}" alt="">
								<h2><a href="{{ url('book/snow-cleaning') }}" title="">SNOW CLEANING</a></h2>
							</div><!--marketing-project end-->
						</div>

						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a3.jpg') }}" alt="">
								<h2><a href="{{ url('book/grass-cutting') }}" title="">GRASS CUTTING</a></h2>
							</div><!--marketing-project end-->
						</div>
						
						
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a4.jpg') }}" alt="">
								<h2><a href="{{ url('book/airduct-cleaning') }}" title="">AIRDUCT CLEANING</a></h2>
							</div><!--marketing-project end-->
						</div>

						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a2.jpg') }}" alt="">
								<h2><a href="{{ url('book/baby-sitting') }}" title="">BABY SITTING</a></h2>
							</div><!--marketing-project end-->
						</div>
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a5.jpg') }}" alt="">
								<h2><a href="{{ url('book/maid-services') }}" title="">MAID SERVICES</a></h2>
							</div><!--marketing-project end-->
						</div>
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a6.jpg') }}" alt="">
								<h2><a href="{{ url('book/packers-movers') }}" title="">PACKERS & MOVERS</a></h2>
							</div><!--marketing-project end-->
						</div>
					</div>
				</div><!--marketing-projects end-->
			</div>
		</section>

		@include('footer')
			
	</div><!--wrapper end-->



<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>