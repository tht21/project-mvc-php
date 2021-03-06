<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | V-Shopper</title>
	<link href="assets/site/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/site/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/site/css/prettyPhoto.css" rel="stylesheet">
	<link href="assets/site/css/price-range.css" rel="stylesheet">
	<link href="assets/site/css/animate.css" rel="stylesheet">
	<link href="assets/site/css/main.css" rel="stylesheet">
	<link href="assets/site/css/responsive.css" rel="stylesheet">


	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="assets/site/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/site/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/site/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/site/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="assets/site/images/home/logov1.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a><i class="fa fa-user"></i><?php if (isset($_SESSION['user'])) echo $_SESSION['user']->email; ?></a></li>
								<li><a href="index.php?controller=user&action=checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="index.php?controller=cart&action=showCart"><i class="fa fa-shopping-cart"></i> Cart (<?php if (isset($_SESSION['cart'])) print_r(count($_SESSION['cart'])) ?> )</a></li>
								<li><a href="index.php?controller=user&action=login"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->
		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php?controller=site&action=index" class="active">Home</a></li>
								<li class="dropdown"><a href="index.php?controller=cart&action=showCart">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="index.php?controller=cart&action=checkout">Checkout</a></li>
									</ul>
								</li>
								<li><a href="index.php?controller=site&action=add">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input id='myInput' type="text" placeholder="Search" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->