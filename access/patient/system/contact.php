<!DOCTYPE HTML>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6H7FV028QC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6H7FV028QC');
</script>
<html>
<?php 
	include 'logincheck.php';
	require_once 'dbConn.php'; 

        $apiKey = "46665872";
		echo "
        <script type='text/javascript'>var apiKey = '$apiKey';</script>";

	if($_SESSION["mid"] != ""){
		$MID = $_SESSION["mid"];
		//$recordId = $_SESSION["RID"];
		$sessionId = $_SESSION["sessionId"];
        $token = $_SESSION["token1"];
        echo "
		<script type='text/javascript'>var sessionId = '$sessionId';</script>
		<script type='text/javascript'>var token = '$token';</script>";
	}else{
		$MID = "";
		$sessionId = "";
        $token = "";
        $recordId="";
	}
	
	
	$pID= $_SESSION["priority"];


	//echo $recordId, " ", $MID;

	$_SESSION["MID"] = $MID;
	$_SESSION["SID"] = $sessionId;
	$_SESSION["TID"] = $token;
	//$_SESSION["RID"] = $recordId;

?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CuRec | Patient Dashboard</title>
	<link href="images/favicon.svg" rel="shortcut icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	
	<link href='css/app.css' rel='stylesheet' type='text/css'>
    <script src='https://static.opentok.com/v2/js/opentok.min.js'></script>
</head>

<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="top">
								<div class="row">
									<div class="col-md-6">
										<div id="colorlib-logo"><img src="images/logo.png" style="width: 30%;"></div>
										<div class="menu-1">
											<ul>
												<li class="active"><a href="index.php">Home</a></li>
												<li class="has-dropdown">
                                                    <button type="button" class="btn btn-primary btn">
                                                    <a href="logout.php">Log out</a></button>
                                                </li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<!-- <div class="num">
											<span class="icon"><i class="icon-phone"></i></span>
											<p><a href="#">111-222-333</a><br><a href="#">99-222-333</a></p>
										</div> -->
									</div>
									<div class="col-md-3">

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="menu-wrap">
					<div class="container">
						<div class="row">
							<div class="col-xs-8">
								<div class="menu-1">
									<ul>
										<li class="active"><a href="index.php">Home</a></li>
										<li class="has-dropdown">
											<a href="doctors.php">Doctors</a>
										</li>
										<li class="has-dropdown">
											<a href="departments.php">Hospitals</a>
										</li>
										<li class="has-dropdown">
											<a href="./doctor/">Doctor Login</a>
										</li>
										<li class="has-dropdown">
											<a href="./admin/">Admin Login</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</nav>

		<div id="colorlib-contact">

			<div class="container">
				<div class="row">
					<div class="col-md-14 animate-box" id="start">
						<h2>Patient Information.</h2>
						<hr>

					</div>

					<div class="border border-light p-3 mb-4">

					</div>

					<div class="col-md-12 animate-box">
						<div class="row">
							<div class="col-md-8">

								<!-- <div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item"
										src="https://www.youtube.com/watch?v=s8TZvdiekAk"></iframe>
								</div> -->

								<div style="height: 800px">
									<div id='videos' >
								        <div id='subscriber'></div>
								        <div id='publisher'></div>
								    </div>
									<script type='text/javascript' src='js/app.js'></script>
								</div>

								<!-- <div id='videos' style="width: 100%">
							        <div id='subscriber'></div>
							        <div id='publisher'></div>
							    </div>
								<script type='text/javascript' src='js/app.js'></script> -->


							</div>
						</div>
						<hr>
					</div>

					<br><br>
					<hr>

					<div class="col-md-12 animate-box">
						<div class="row">
							<form method="POST" action="submit.php">
								<div class="row">
									<button type="submit" id="btnNextPat" name="btnNextPat" class="btn btn-success btn-lg" style="width: 45%">Next Patient</button>
									<button type="submit" id="btnFinish" name="btnFinish" class="btn btn-primary btn-lg" style="width: 45%">Finish & Exit</button>
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>


		<footer id="colorlib-footer" role="contentinfo">
			<div class="overlay"></div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy;
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> All rights reserved |
							Developed by <a href="https://www.kdu.ac.lk/" target="_blank">General Sir John
								Kotelawala Defence
								University</a>
					</p>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Google Map -->
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>