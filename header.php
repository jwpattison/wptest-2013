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
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="http://www.commerce.virginia.edu/Style%20Library/McIntirePublic/images/logo.png" alt="University of Virginia" />
			</a>
			
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
			
			<ul id="jetmenu" class="jetmenu blue">
				
				<li><a href="#">About McIntire</a>
					<div style="text-align: justify" class="megamenu half-width">
						<div class="row">
							<div class="col2">
								<img src="img/1.jpg" alt="image" />
							</div>
							<div class="col4">
								Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Amet
								Curabitur nec lorem alty amet massalit fermentum massa eti. Nulla facilisi. 
								Phasellus in rutrum felis, sed fringilla turpis. 
								Etiam puris noiteki dignissim puruseli tempus, commodo neque eu. Dui curabitur cursus feugiat
								ullamcorper a nibh nec, ost.
							</div>
						</div>
						<div class="row">
							<div class="col2">
								<img src="img/2.jpg" alt="image" />
							</div>
							<div class="col4">
								Aliquam erat volutpat. Nulla nec justo dui. Aeneanoi atet accumsan egestas tortor at lacinia. 
								Pellentesque netus habitant morbi tristique senectus et netus etor egestasio malesuada fames ac turpis egestas. 
								Utilo pellentesquetii laoreet leo eget pretium. Integeretus eleifend et mi at velo elementum. 
								Maecenas vitaelo. 
							</div>
						</div>
						<div class="row">
							<div class="col2">
								<img src="img/3.jpg" alt="image" />
							</div>
							<div class="col4">
								Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Amet
								Curabitur nec lorem alty amet massalit fermentum massa eti. Nulla facilisi. 
								Phasellus in rutrum felis, sed fringilla turpis. 
								Etiam puris noiteki dignissim puruseli tempus, commodo neque eu. Dui curabitur cursus feugiat
								ullamcorper a nibh nec, ost. 
							</div>
						</div>
					</div>
				</li>
				
				<li><a href="#">Academic Programs</a>
					<div style="text-align: justify" class="megamenu half-width">
						<div class="row">
							<div class="col2">
								<img src="img/1.jpg" alt="image" />
							</div>
							<div class="col4">
								Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Amet
								Curabitur nec lorem alty amet massalit fermentum massa eti. Nulla facilisi. 
								Phasellus in rutrum felis, sed fringilla turpis. 
								Etiam puris noiteki dignissim puruseli tempus, commodo neque eu. Dui curabitur cursus feugiat
								ullamcorper a nibh nec, ost.
							</div>
						</div>
						<div class="row">
							<div class="col2">
								<img src="img/2.jpg" alt="image" />
							</div>
							<div class="col4">
								Aliquam erat volutpat. Nulla nec justo dui. Aeneanoi atet accumsan egestas tortor at lacinia. 
								Pellentesque netus habitant morbi tristique senectus et netus etor egestasio malesuada fames ac turpis egestas. 
								Utilo pellentesquetii laoreet leo eget pretium. Integeretus eleifend et mi at velo elementum. 
								Maecenas vitaelo. 
							</div>
						</div>
						<div class="row">
							<div class="col2">
								<img src="img/3.jpg" alt="image" />
							</div>
							<div class="col4">
								Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Amet
								Curabitur nec lorem alty amet massalit fermentum massa eti. Nulla facilisi. 
								Phasellus in rutrum felis, sed fringilla turpis. 
								Etiam puris noiteki dignissim puruseli tempus, commodo neque eu. Dui curabitur cursus feugiat
								ullamcorper a nibh nec, ost. 
							</div>
						</div>
					</div>
				</li>
				
				
				
				<li><a href="#">Faculty &amp; Research</a>
					<div style="text-align: justify" class="megamenu half-width">
						<div class="row">
							<div class="col2">
								<img src="img/1.jpg" alt="image" />
							</div>
							<div class="col4">
								Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Amet
								Curabitur nec lorem alty amet massalit fermentum massa eti. Nulla facilisi. 
								Phasellus in rutrum felis, sed fringilla turpis. 
								Etiam puris noiteki dignissim puruseli tempus, commodo neque eu. Dui curabitur cursus feugiat
								ullamcorper a nibh nec, ost.
							</div>
						</div>
					</div>
				</li>
				
				
				<li><a href="#">Recruiters &amp; Companies</a>
					<div style="text-align: justify" class="megamenu half-width">
						<div class="row">
							<div class="col2">
								<img src="img/1.jpg" alt="image" />
							</div>
							<div class="col4">
								Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Amet
								Curabitur nec lorem alty amet massalit fermentum massa eti. Nulla facilisi. 
								Phasellus in rutrum felis, sed fringilla turpis. 
								Etiam puris noiteki dignissim puruseli tempus, commodo neque eu. Dui curabitur cursus feugiat
								ullamcorper a nibh nec, ost.
							</div>
						</div>
					</div>
				</li>
				
				
				<li><a href="#">Alumni &amp; Friends</a>
					<div style="text-align: justify" class="megamenu half-width">
						<div class="row">
							<div class="col2">
								<img src="img/1.jpg" alt="image" />
							</div>
							<div class="col4">
								Lorem ipsum dolor sit amet, consectetur meti facilisi a adipiscing elit. Amet
								Curabitur nec lorem alty amet massalit fermentum massa eti. Nulla facilisi. 
								Phasellus in rutrum felis, sed fringilla turpis. 
								Etiam puris noiteki dignissim puruseli tempus, commodo neque eu. Dui curabitur cursus feugiat
								ullamcorper a nibh nec, ost.
							</div>
						</div>
					</div>
				</li>
				
				
			</ul>
			
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
