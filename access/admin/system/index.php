<!doctype html>
<?php
include 'logincheck.php';
?>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Covid-19 - Admin</title>
    <link href="../../doctor/system/images/favicon.svg" rel="shortcut icon"/>

    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>


<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="admin.dashboard.php"><img src="../img/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="admin.dashboard.php"><img src="../img/logo.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="admin.dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    <a href="logout.php"> <i class="menu-icon fa fa-home"></i>Back to Login </a>

                </li>

                <h3 class="menu-title">Page Roles</h3>
                <!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-stethoscope"></i>Doctor</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="admin.movie.php">Add</a></li>
                        <li><i class="fa fa-wrench"></i><a href="admin.movie.php">Update</a></li>
                        <li><i class="fa fa-search"></i><a href="admin.movie.php">Search</a></li>
                        <li><i class="fa fa-trash"></i><a href="admin.movie.php">Make Inactive</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-medkit"></i>PHI</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-search"></i><a href="admin.user.php"> Add</a></li>
                        <li><i class="fa fa-trash"></i><a href="admin.user.php"> Update</a></li>
                        <li><i class="fa fa-trash"></i><a href="admin.user.php"> Search</a></li>
                        <li><i class="fa fa-trash"></i><a href="admin.user.php"> Make Inactive</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-hospital-o"></i>MOH</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-wrench"></i><a href="admin.theatre.php">Add</a></li>
                        <li><i class="menu-icon fa fa-search"></i><a href="admin.theatre.php">Update</a></li>
                        <li><i class="menu-icon fa fa-trash"></i><a href="admin.theatre.php">Search</a></li>
                        <li><i class="menu-icon fa fa-trash"></i><a href="admin.theatre.php">Make Inactive</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-user-circle"></i>Admin</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="admin.snacks.php"> Add</a></li>
                        <li><i class="fa fa-wrench"></i><a href="admin.snacks.php"> Update</a></li>
                        <li><i class="fa fa-search"></i><a href="admin.snacks.php"> Search</a></li>
                        <li><i class="fa fa-trash"></i><a href="admin.snacks.php"> Make Inactive</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Data Sheets</h3>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="admin.basicTable.php">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="admin.dataTable.php">Data Table</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</aside>


<div id="right-panel" class="right-panel">


    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="../img/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                    class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
                       aria-expanded="true">
                        <i class="flag-icon flag-icon-lk"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language">
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-fr"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header>

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <!--                        <li class="active">Dashboard</li>-->
                        <!--                        <li><a href="#">UI Elements</a></li>-->

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> Welcome OnBoard!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="social-box facebook">
                <a href="https://www.facebook.com/"><i class="fa fa-instagram"></i></a>
                <ul>
                    <li>
                        <strong><span class="count">3500</span></strong>
                        <span>friends</span>
                    </li>
                    <li>
                        <strong><span class="count">450</span></strong>
                        <span>Posts</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="social-box facebook">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <ul>
                    <li>
                        <strong><span class="count">3500</span> </strong>
                        <span>friends</span>
                    </li>
                    <li>
                        <strong><span class="count">450</span></strong>
                        <span>Posts</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="social-box instagram">
                <a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
                <ul>
                    <li>
                        <strong><span class="count">970</span> </strong>
                        <span>Followers</span>
                    </li>
                    <li>
                        <strong><span class="count">307</span></strong>
                        <span>Following</span>
                    </li>
                </ul>
            </div>
            <!--/social-box-->
        </div>
        <!--/.col-->
        <div class="col-lg-3 col-md-6">
            <div class="social-box instagram">
                <a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
                <ul>
                    <li>
                        <strong><span class="count">970</span> </strong>
                        <span>Followers</span>
                    </li>
                    <li>
                        <strong><span class="count">307</span></strong>
                        <span>Following</span>
                    </li>
                </ul>
            </div>
            <!--/social-box-->
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-four">
                        <div class="stat-icon dib">
                            <i class="ti-server text-muted"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-heading">Database</div>
                                <div class="stat-text">Up and Running</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-four">
                        <div class="stat-icon dib">
                            <i class="ti-user text-muted"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-heading">Users</div>
                                <div class="stat-text"> Total: <span class="count"> 10</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-four">
                        <div class="stat-icon dib">
                            <i class="ti-stats-up text-muted"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-heading">Daily Calls</div>
                                <div class="stat-text"> Total: <span class="count"> 20000</span> Mins</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-four">
                        <div class="stat-icon dib">
                            <i class="ti-pulse text-muted"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-heading">Bandwidth</div>
                                <div class="stat-text">Total: 4TB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"></div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">1</span>
                    </h4>
                    <p class="text-light">Members online</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart1"></canvas>
                    </div>

                </div>

            </div>
        </div>

        <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-users text-light"></i>
                </div>

                <div class="h4 mb-0 text-light">
                    <span class="count">500</span>
                </div>
                <small class="text-uppercase font-weight-bold text-light">Total Visitors</small>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
            </div>
        </div>

        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
            <div class="card-body bg-flat-color-3">
                <div class="h1 text-right mb-4">
                    <i class="fa fa-film text-light"></i>
                </div>
                <div class="h4 mb-0 text-light">
                    <span class="count">38</span>
                </div>
                <small class="text-light text-uppercase font-weight-bold">Films Theatred</small>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
            </div>
        </div>

        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
            <div class="card-body bg-flat-color-5">
                <div class="h1 text-right text-light mb-4">
                    <i class="fa fa-pie-chart"></i>
                </div>
                <div class="h4 mb-0 text-light">
                    <span class="count">63</span>%
                </div>
                <small class="text-uppercase font-weight-bold text-light">Returning Visitors</small>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
            </div>
        </div>

        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
            <div class="card-body bg-flat-color-2">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-user-plus text-light"></i>
                </div>
                <div class="h4 mb-0 text-light">
                    <span class="count">21</span>
                </div>
                <small class="text-uppercase font-weight-bold text-light">New Clients</small>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
            </div>
        </div>


    </div>
</div>


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script src="admin.dashboard.js"></script>


<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>

</html>
