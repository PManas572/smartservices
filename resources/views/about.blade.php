<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Smart Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Octavian - Multipurpose agency website" />
	<meta name="author" content="TexTheme">
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
						<h2 class="wow fadeInUp" data-wow-duration="1000ms"><strong>About Us</strong> </h2>
						
					</div><!--banner-text end-->
					<div class="clearfix"></div>
				</div><!--banner-content end-->
			</div>
			<div class="banner-img">
				<img src="{{ asset('assets/images/cc1.jpg') }}" alt="">
			</div>
		</section><!--main-banner end-->

		<section class="sec-block">
			<div class="container">
				<div class="about-block2">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<div class="about-text style2 pl-0">
								<h2>Our story begins in the Ontario</h2>
								<p>Here at Smart Services, we’re not believe in cleaning routines — we believe in cleaning programs. We’re passionate about giving you the best practices.</p>
								<p class="m-0">We’re proud that we are providing best services to people of Ontario and have been serving in a professional cleaning service capacity since 2015.</p>
							</div><!--about-text end-->
						</div>
						<div class="col-lg-7">
							<div class="abt-block2-img pl-100">
								<img src="{{ asset('assets/images/m2.jpg') }}" alt="" class="img-fluid">
							</div><!--abt-block2-img end-->
						</div>
					</div>
					<div class="row md-mg-0">
						<div class="full-image">
							<img src="{{ asset('assets/images/m7.jpg') }}" alt="">
						</div><!--full-image end-->
					</div>
				</div><!--about-block2 end-->
			</div>
		</section>

		<section class="sec-block">
			<div class="fixed-bg bg-light"></div>
			<div class="container">
				<div class="section-title text-center">
					<h2>What we are including in every service?</h2>					
				</div>
				<div class="services_section bg-none">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="serivce_col p-75 bg-white">
								
								<h3>Snow Cleaning</h3>
								<p> In Snow Cleaning Service we includes cleaning of Sidewalks, Residential areaa like driveways of homes and Commercial cleaning example removal of snow from the front of offices.
                                  
                                 </p>

								 
							</div><!--serivce_col end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="serivce_col p-75 bg-white">
								
								<h3>Baby Sitting</h3>
								<p>It is taking care of someone's child. The responsibilities of babysitters are feeding, bathing, playing, making snacks, preparring bottles and make bed for children .
                                 </p>
							</div><!--serivce_col end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="serivce_col p-75 bg-white">
								
								<h3>Grass Cutting</h3>
								<p> Our Grass Cutting service includes Lawn Care and Manintainance, mowing of lawn biweekly, precision trimming, Leaf collection, bagging and removal.
                                 </p>

							</div><!--serivce_col end-->
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="serivce_col p-75 bg-white">
								
								<h3>Air Duct Cleaning</h3>
								<p> Highly effective airduct cleaning process, cleaning of furnaces and changing of air condensor and evaporation coils which improved indoor air quality. 
                                </p>

							</div><!--serivce_col end-->
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="serivce_col p-75 bg-white">
								
								<h3>Maid Services</h3>
								<p> This service includes cleaning of bathroosm, bedrooms, kitchen, washing and drying dishes, cleaning interior windows, removing garbage.
                                </p>

								 
							</div><!--serivce_col end-->
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="serivce_col p-75 bg-white">
								
								<h3>Packers & Movers</h3>
								<p> In this service, we are providing complete residential and commercial moves, packing & organization, moving of furniture and office equipment.
                                </p>

								 
							</div><!--serivce_col end-->
						</div>
					</div>
				</div><!--services_section end-->
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