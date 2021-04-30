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

		<section class="pager-section overlay">
			<div class="container">
				<div class="pager-info">
					<h3>Contact</h3>
					<ul class="breacrumb">
						<li><a href="{{ url('/') }}" title="">Home </a></li>
						<li><span>Contact</span></li>
					</ul><!--breacrumb end-->
				</div><!--pager-info end-->
			</div>

			
		</section><!--pager-section end-->

	
		<section class="sec-block">
			<div class="fixed-bg light-bg"></div>
			<div class="services_section contact-v">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="service_col">
								<div class="svs-icon">
									<img src="{{ asset('assets/images/oct1.png') }}" alt="">
								</div>
								<h3>Our address</h3>
								<p>299 Doon Valley Dr, Kitchener, ON N2G 4M4</p>
							</div><!--service_col end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="service_col">
								<div class="svs-icon">
									<img src="{{ asset('assets/images/oct2.png') }}" alt="">
								</div>
								<h3>Phone Number</h3>
								<ul>
									<li><a href="tel:+1-519-731-6784">+1 (519)-731-6784</a></li>
									
								</ul>
							</div><!--service_col end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="service_col">
								<div class="svs-icon">
									<img src="{{ asset('assets/images/oct3.png') }}" alt="">
								</div>
								<h3>Email Address</h3>
								<ul>
									<li><a href="mailto:servicessmart85@gmail.com">servicessmart85@gmail.com</a></li>
									
								</ul>
							</div><!--service_col end-->
						</div>
					</div>
				</div>
			</div><!--services_section end-->
		</section>

		<section class="sec-block">
			<div class="container">
				<div class="contact-page-form">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<div class="contact-form-dv">
								<h3 class="sc-title float-none">Leave us a message</h3>
								<form method="post" action="{{ url('/email') }}" id="contact-form">
								@csrf
									<div class="form-group">
                                        <div class="response"></div>
                                    </div>
									<div class="form-group">
										<input type="text" name="name" class="form-control name" placeholder="name" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="email" name="email" class="form-control email" placeholder="email" required>
									</div><!--form-group end-->
									
									<div class="form-group">
										<textarea name="message" class="form-control" placeholder="Write us your message"></textarea>
									</div><!--form-group end-->
									<button type="submit" class="btn-default blue-clr" id="submit">Send Message<span></span></button>
								</form>
							</div><!--contact-form-dv end-->
						</div>
						<div class="col-lg-7">
							<div class="contact-img">
								<img src="{{ asset('assets/images/m11.jpg') }}" alt="">
								<div class="clearfix"></div>
							</div><!--contact-img end-->
						</div>
					</div>
				</div><!--contact-page-form end-->
			</div>
		</section>

		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6068ee31067c2605c0bf0ba0/1f2cu4sdv';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


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