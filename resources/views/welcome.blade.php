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
						<h2 class="wow fadeInUp" data-wow-duration="1000ms"><strong>Smart <br> Services</strong></h2>
						<p class="wow fadeInUp" data-wow-duration="1000ms">Do it the Smart way... <br> We are always here for you</p>
						
					</div><!--banner-text end-->
					<div class="clearfix"></div>
				</div><!--banner-content end-->
			</div>
			<div class="banner-img">
				<img src="{{ asset('assets/images/p2.jpg') }}" alt="">
			</div>
		</section><!--main-banner end-->

		<section class="sec-block">
			<div class="container">
				<div class="about-section v1">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6 order-0">
							<div class="about-text v1 wow fadeIn" data-wow-duration="700ms">
								<h2>Explore More</h2>
								<p>Book service today and <br>make your work easier.</p>
								<a href="{{ url('/services') }}" title="" class="btn-default blue-clr wow fadeInUp" data-wow-duration="1000ms">Get Your service <span></span></a>
							</div><!--about-text end-->
						</div>
						<div class="col-lg-6 col-md-6 order-1">
							<div class="abt-img">
							<img src="{{ asset('assets/images/b1.jpg') }}" alt="">
								<div class="abt-2 wow fadeIn" data-wow-duration="700ms" data-wow-delay="370ms">
								<img src="{{ asset('assets/images/b2.jpg') }}" alt="">
								</div>
							</div><!--abt-img end-->
						</div>
					</div>
				</div><!--about-section end-->
			</div>
		</section><!--about-section end-->

		
		<section class="sec-block-200 marketing-scy">
			<div class="container-fluid">
				<div class="section-title text-center">
					<h2>See our happy clients</h2>
					<p>In the service of 8 years we never disappointed our customers see what they save about us.</p>
				</div><!--section-title end-->
				<div class="marketing-projects">
					<div class="row project-carousel">
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a1.jpg') }}" alt="">
								<h2>We are happy that we choose smart services. They cleaned our driveway properly.</h2>
							</div><!--marketing-project end-->
						</div>
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a3.jpg') }}" alt="">
								<h2>Thank You Smart Services!! Our Lawn is looking awesome now.</h2>
							</div><!--marketing-project end-->
						</div>
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/tt1.jpg') }}" alt="">
								<h2>There services are really very good. </h2>
							</div><!--marketing-project end-->
						</div>
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a5.jpg') }}" alt="">
								<h2>There maid services are very awesome. They make your house look like new</h2>
							</div><!--marketing-project end-->
						</div>
						<div class="col-lg-4">
							<div class="marketing-project">
								<img src="{{ asset('assets/images/a6.jpg') }}" alt="">
								<h2>They are very nice. They handled our stuff carefully.</h2>
							</div><!--marketing-project end-->
						</div>
					</div>
				</div><!--marketing-projects end-->
			</div>
		</section>

		<section class="sec-block pt-0 pb-0">
			<div class="container">
				<div class="testimonial-section">
					<div class="row">
						<div class="col-lg-4">
							<div class="testi-img wow fadeIn" data-wow-duration="1000ms">
								<img src="{{ asset('assets/images/m1.jpg') }}" alt="">
							</div><!--testi-img end-->
						</div>
						<div class="col-lg-8">
							<div class="testi-slides">
								<div class="testi-comment">
									<p>There is no space like home when its clean!!! Imagine a crisply made bed, sparkling sinks, lawns, backyards and floors that bring new meaning to the word shine. This is what we love to do. </p>
									<h3>Smart Services</h3>
								</div><!--testi-comment end-->
							</div><!--testi-slides end-->
						</div>
					</div>
				</div><!--testimonial-section end-->
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