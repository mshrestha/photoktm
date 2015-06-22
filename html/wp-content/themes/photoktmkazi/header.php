<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="Photo Kathmandu | 3-9 November 2015">
<meta property="og:site_name" content="Photo Kathmandu">
<meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fblead.jpg">
<meta property="og:url" content="http://www.photoktm.com">
<meta property="og:description" content="The newest addition to the international photography festival circuit, Photo Kathmandu is launching in November 2015. The first edition of the festival aims to serve as a platform for interaction between photography, history, anthropology and a wide array of the arts.">
<meta property="og:type" content="website">
<meta name="twitter:card" value="summary">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.min.css" rel="stylesheet"> 
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightbox.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css" rel="stylesheet">
    <link id="css-preset" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/presets/preset1.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
	<![endif]-->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	<div id="content" class="site-content">
