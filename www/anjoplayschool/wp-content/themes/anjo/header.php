<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/templates/css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/css/fractionslider.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/css/style-fraction.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/templates/css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/templates/css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body>
		<!--Start Header-->
    <header id="header">
        <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div id="logo" style="background: transparent none repeat scroll 0% 0%;">
                        <h1><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/templates/images/logo.png" alt="Everest"/></a></h1>
                    </div>
                </div>
                <div class="col-sm-9 top-info">
                    <ul>
                        <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <span class="hidden-xs"><i class="fa fa-phone"></i>Phone: 8939042163</span>
                    <span class="hidden-xs"><i class="fa fa-envelope"></i>Email: enquiry@anjoplayschool.com</span>
                </div>
            </div>
        </div>
    </div>
        <div class="pixel-header">
            <img src="<?php echo get_template_directory_uri(); ?>/templates/images/page_header.jpg" alt=""/>
        </div>

        <!-- Navigation
================================================== -->
        <div class="navbar navbar-default navbar-static-top container" role="navigation">
            <!--  <div class="container">-->
            <div class="row">
                <span class="nav-caption">Navigation Menu...</span>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url();?>">Home</a></li>
                        <li><a href="<?php echo site_url();?>/aboutus">About Us</a></li>
                        <li><a href="<?php echo site_url();?>/contactus">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.row -->
            <!--</div>--><!--/.container -->
        </div>
    </header>
	<!--End Header-->

		
