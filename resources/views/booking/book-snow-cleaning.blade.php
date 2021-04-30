
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book - Snow Cleaning</title>
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
    	<img src="images/loader.gif" alt="" />
    </div><!--page-loading end-->
	
	<div class="wrapper">

		@include('header')

		<section class="pager-section overlay">
			<div class="container">
				<div class="pager-info">
					<h3>Booking</h3>
					<ul class="breacrumb">
						<li><a href="{{ url('/') }}" title="">Home </a></li>
						<li><span>Booking</span></li>
					</ul><!--breacrumb end-->
				</div><!--pager-info end-->
			</div>
		</section><!--pager-section end-->

		<section class="sec-block">
			<div class="container">
				<div class="contact-page-form">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<div class="contact-form-dv">
								<h3 class="sc-title float-none text-center">Booking</h3>
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
								<form method="post" action="{{ url('/book_snow_cleaning') }}" id="contact-form">
                                @csrf
									<div class="form-group">
                                        <div class="response"></div>
                                    </div>
									<div class="form-group">
										<input type="text" name="name" class="form-control name" placeholder="Enter your name" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="email" name="email" class="form-control email" placeholder="Enter your email" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="text" name="address" class="form-control address" placeholder="Enter your address" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="text" name="postal_code" class="form-control address" placeholder="Enter your postal-code" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="text" name="city" class="form-control city" placeholder="Enter your city" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="text" name="province" class="form-control province" placeholder="Enter your province" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="number" name="phNo" class="form-control phNo" placeholder="Enter your Phone Number" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="date" name="date" id="bookingDate" class="form-control date" placeholder="Enter your Date" required>
									</div><!--form-group end-->
									<div class="form-group">
										<input type="time" name="time" min="09:00" max="17:00" class="form-control time" placeholder="Enter your time" required>
									</div><!--form-group end-->
									<button type="submit" class="btn-default blue-clr" id="submit">Book<span></span></button>
								</form>
							</div><!--contact-form-dv end-->
						</div>
					</div>
				</div><!--contact-page-form end-->
			</div>
		</section>

		@include('footer')

	</div><!--wrapper end-->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		$(function(){
			var dtToday = new Date();
			
			var month = dtToday.getMonth() + 1;
			var day = dtToday.getDate();
			var year = dtToday.getFullYear();
			if(month < 10)
				month = '0' + month.toString();
			if(day < 10)
				day = '0' + day.toString();
			
			var minDate= year + '-' + month + '-' + day;
			
			$('#bookingDate').attr('min', minDate);
		});
	</script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>