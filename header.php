<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package draft
 */

?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 

	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
	<header> 
		<nav class="navbar navbar-default wow bounceInUp">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="logo-image">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
				<span class="icon-bar"><span class="inner"></span></span>
				<span class="icon-bar"><span class="inner"></span></span>
				<span class="icon-bar"><span class="inner"></span></span>
			  </button>


			  <?php 

			  $header_logo_01 = get_option('header-opt-val');
				 
				 if($header_logo_01):  ?>
			 <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $header_logo_01['logoup01']; ?>" alt="" /></a>
				<?php endif; ?>
				
				<?php $header_logo_02 = get_option('header-opt-val');
				 
				 if($header_logo_02):  ?>
			  <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $header_logo_02['logoup02']; ?>" alt="" /></a>
			  <?php endif; ?>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="main-menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			 <?php wp_nav_menu(array(
				'theme_location'		=> 'main-menu',
				'menu_class'		=> 'nav',
				'fallback_cb'		=> 'main_default',
			  )); ?>
			</div><!-- /.navbar-collapse -->
		</nav>
	</header>
	<div class="lan-switcher">
		<?php do_action('wpml_add_language_selector');  ?>
	</div>