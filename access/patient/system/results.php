<!DOCTYPE HTML>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6H7FV028QC"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-6H7FV028QC');
</script>
<html>
<?php
include 'logincheck.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curec | COVID-19 Personal Assistant</title>
    <link href="images/favicon.svg" rel="shortcut icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

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

    <!-- google material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <script src="js/healthAPI.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                                                <a href="doctors.php">Doctors</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="departments.php">Hospitals</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <button type="button" class="btn btn-primary btn">
                                                    <a href="logout.php">Log out</a></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="colorlib-hero" class="breadcrumbs">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_6.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    <h1>Your Status is <strong>Status</strong></h1>
                                    <h2>Instructions text here</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>


    <div class="colorlib-doctor">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="row row-pb-lg">
                        <div class="owl-carousel2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">
                            <div class="doctor" style="background-color:#FFE6B3;">
                                <form method="post" action="">
                                    <div class="desc">
                                        <span style="color:red">Done Checking?</span>
                                        <button type="submit" name="your_name" value="your_value" class="btn-link"><h3>
                                                Back To Dashboard</h3></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center">
                            <div class="doctor" style="background-color:#B3FFCC; ">
                                <form method="post" action="">
                                    <div class="desc">
                                        <span style="color:red">Face to Face Video Call</span>
                                        <button type="submit" name="your_name" value="your_value" class="btn-link"><h3>
                                                Proceed to Video Call</h3></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-services">
        <footer id="colorlib-footer" role="contentinfo">
            <div class="overlay"></div>
            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy;
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved |
                            Developed by <a href="https://www.kdu.ac.lk/" target="_blank">General Sir John
                                Kotelawala Defence
                                University</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
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
<!-- Main -->
<script src="js/main.js"></script>

<script>
    $(document).ready(function () {

        function load_unseen_notification(view = '') {
            $.ajax({
                url: "noti/fetch.php",
                method: "POST",
                data: {view: view},
                dataType: "json",
                success: function (data) {
                    $('.dropdown-menu').html(data.notification);
                    if (data.unseen_notification > 0) {
                        $('.count').html(data.unseen_notification);
                        var a = new Audio()
                        a.src = "noti/not3.wav"
                        a.play()
                    } else {
                        $('.count').html('0');
                    }
                }
            });
        }

        load_unseen_notification();

        setInterval(function () {
            load_unseen_notification();
            ;
        }, 3000);

    });
</script>

</body>

</html>
