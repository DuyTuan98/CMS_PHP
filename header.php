<!DOCTYPE html>
<html>
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">

    <!-- Title -->
    <title>Blog</title>

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description" content="Suchen is a premium template for directory listing related websites which is built with the twitter bootstrap (version: 4.3). This template is suitable for any listing, real estate, hotel, booking, restaurant, travel, cars. Easy to use, with beautiful clean design and full of features.">
    <meta name="keywords" content="business, directory, city guide, classified, google maps, listings, local, restaurant, hotel, places">
    <meta name="author" content="https://themeforest.net/user/cbr-themes/portfolio">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Plugins -->
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animsition.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cubeportfolio.css">

    <!-- Icon Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/core-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/suchen-icons.css">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/imgs/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" href="assets/apple-touch-icon-precomposed.jpg">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="no-sidebar sidebar-1 header-fixed">
    <div id="wrapper">
        <div id="page" class="clearfix animsition">
            <div id="site-header-wrap">
                <header id="site-header" class="header-front-page style-1 dark-bg">
                    <div id="site-header-inner" class="boxed-5">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-logo-inner">
                                    <a href="index.php" title="Suchen" class="main-logo">
                                        <h1 style="color:#fff">Blog Học Tập</h1>
                                    </a>
                                </div>
                            </div><!-- #site-logo -->

                            <div class="mobile-button"><span></span></div><!-- //mobile menu button -->


    
                            <div class="toggle shadow"></div>

                            <nav id="main-nav" class="main-nav">
                            	
                                <ul id="menu-primary-menu" class="menu">
                                	<?php
	                            		include_once 'connection.php';
	                            		$get_posts = "select * from categories";
	                                    $run_posts = mysqli_query($con,$get_posts); 
	                                    while ($row = mysqli_fetch_array($run_posts)){
	                                    $cat_id = $row['cat_id']; 
		  								$cat_title = $row['cat_title'];
                                    ?> 
                                    <li class="menu-item current-menu-item menu-item-has-children">
                                    	<a href="category.php?cat=<?php echo $cat_id ?>"><?php echo $cat_title; ?></a>
                                    </li>
								<?php  } ?>
                                   
                                </ul>
                            </nav><!-- #main-nav -->
                        </div>
                    </div>
                </header>
            </div><!-- #site-header-wrap -->