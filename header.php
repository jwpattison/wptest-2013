<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!--CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jetmenu.css" media="screen" />
	
	<!--JavaScript -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jetmenu.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function(){  
				$().jetmenu();
			});
		</script>
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead"  class="site-header" role="banner">
			<a class="home-link" href="http://www.commerce.virginia.edu/" title="University of Virginia McIntire School of Commerce" rel="home">
				<img src="http://www.commerce.virginia.edu/Style%20Library/McIntirePublic/images/logo.png" alt="University of Virginia" />
			</a>
			
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<?php get_template_part('global-nav'); ?>
			
			
			
			
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
