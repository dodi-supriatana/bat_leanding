<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from zozothemes.com/html/layer/new-variants/image-bg/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 14:20:07 GMT -->

<head>
	<!-- Title and Meta Tags Begins -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta charset="utf-8">
	<!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<title>Layer - Responsive HTML5 App Landing Page</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Title and Meta Tags Ends -->
	<!-- Google Font Begins -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,200,100,800,900' rel='stylesheet' type='text/css'>
	<!-- Google Font Ends -->
	<!-- CSS Begins-->
	<link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('assets/') . 'css/flaticon.css' ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/') . 'css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/') . 'css/portfolio.css' ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/') . 'css/animate.min.css' ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/') . 'css/prettyPhoto.css' ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/') . 'css/flexslider.css' ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/') . 'css/tweet-carousel.css' ?>" rel="stylesheet" type="text/css" />
	<!-- Main Style -->
	<link href="<?php echo base_url('assets/') . 'css/style.css' ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/') . 'css/responsive.css' ?>" rel="stylesheet" type="text/css" />
	<!-- Color Panel -->
	<link href="<?php echo base_url('assets/') . 'css/color_panel.css' ?>" rel="stylesheet" type="text/css" />
	<!-- Skin Colors -->
	<link href="<?php echo base_url('assets/') . 'css/color-schemes/red.css' ?>" id="changeable-colors" rel="stylesheet" type="text/css" />
</head>

<body id="home">

	<!-- Page Loader -->
	<div id="pageloader">
		<div class="loader-item fa fa-spin colored-border"></div>
	</div>

	<header id="header">
		<div class="bg-overlay pattern"></div>
		<div class="navbar navbar-fixed-top" id="navigation">
			<div class="container">
				<!-- Navigation Bar -->
				<div class="navbar-header">
					<!-- Responsive Menu Button -->
					<button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Logo Image -->
					<a href="index.html" class="navbar-brand"><img style="margin-top: -25px;width: 160px; height:75px" src="<?php echo base_url('assets/') . 'images/logo.png' ?>" alt="Layer App Landing Page"></a>
				</div>
				<!-- End Navigation Bar -->
				<!-- Navigation Menu -->
				<nav id="topnav" role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php foreach ($menu as $menus) { ?>
							<li><a href="#<?php echo $menus->conten_name ?>" class="scroll"><?php echo $menus->menu_name ?></a></li>
						<?php } ?>
					</ul>
				</nav>
				<!-- End Navigation Menu -->
			</div>
			<!-- End container -->
		</div>
		<!-- Slider Begins-->