<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thank you</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css"
	/>

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <script type="text/javascript">
        function delayedRedirect() {
            window.location = "/"
        }
    </script>

    <style>
        #success {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 190px;
            margin-top: -85px;
            margin-left: -150px;
            text-align: center;
        }

        #success h4 {
            margin: 0;
        }

        #success h4 span {
            display: block;
            font-size: 24px;
        }
    </style>

</head>

<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">

    <div id="success" class="wow zoomIn" data-wow-duration="1.5s">
        <div class="icon icon--order-success svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
            </svg>
        </div>
        <h4><span>Contact Form successfully sent!</span>Thank you for your time</h4>
        <small>You will be redirect back to homepage in 5 seconds.</small>
    </div>
    
    <!-- ======= jQuery Library ======= -->
    <script src="assets/js/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>
        var wow = new WOW();
        wow.init();
    </script>
</body>

</html>