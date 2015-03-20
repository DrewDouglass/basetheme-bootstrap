<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
		
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	
	<?php /* Use http://realfavicongenerator.net or similar to generate favicon code and replace this. */ ?>
	<link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo site_url(); ?>/favicon.png" type="image/x-icon">
	<link rel="icon" type="image/png" href="<?php echo site_url(); ?>/favicon.png">
		
	<?php wp_head(); ?>
	
	<?php 
	/* The below script code doesn't fully solve the problem of google-hosted jquery not loading, because it comes after all your other scripts that load in wp_head(). 
	   Try to load everything in the footer, except jquery, modernizr, and (if you have to) scripts that don't rely on jquery. */
	?>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<header id="header" class="clearfix">
		<div class="row">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="Home" id="logo"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
			<nav id="main-nav-container" class="nav-container">
				 <?php wp_nav_menu( array( "theme_location" => "mainnav", "container" => false, "menu_id" => "main-nav" ) ); ?> 
			</nav>
			<div id="mobmenu">
				<a href="#main-nav"><span>Menu</span></a>
			</div>
		</div>
	</header>