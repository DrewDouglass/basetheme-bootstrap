<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- Bootstrap it -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
	<script src="<?php echo get_template_directory_uri();?>/js/vendor/bootstrap.min.js"></script>
		
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
		<!-- Begin Navigation -->
		<nav class="navbar navbar-default col-md-7 col-md-offset-5" role="navigation">
			
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
			
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="main-nav">
			     <?php
				 	//FB and Twitter are appended in functions.php
					$args = array(
						'theme_location' => 'mainnav',
						'depth'		 => 0,
						'container'	 => false,
						'menu_class'	 => 'clearfix',//nav navbar-nav
						'walker'	 => new BootstrapNavMenuWalker()
					);
	
					wp_nav_menu($args);
		
				?>
			    </div><!-- /.navbar-collapse -->
			    
		</nav>
		<!-- End Navigation -->
	</header>