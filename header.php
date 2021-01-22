<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Almiron_Digital_Group_-_Base
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
	<?php // the_field_('scripts','option'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php //esc_html_e( 'Skip to content', 'cj-base' ); ?></a> -->

	<header id="masthead" class="site-header">


		<nav class="navbar navbar-expand-md navbar-light " role="navigation">
		  <div class="container-fluid">

				<div class="header-buttons">
					<!-- <a onclick="ga('PhoneCalls','HeaderClick');" href="tel:<?php //the_field('phone', 'option');?>"><?php //the_field('phone', 'option');?></a> -->
				</div>

				<!-- .site-branding -->
					<div class="site-branding">
			 			<a href="/">	<img src="<?php the_field('logo','option');?>"></a>
			 		</div>
				<!-- .site-branding -->

		        <?php
		        wp_nav_menu( array(
		            'theme_location' => 'mega_menu',
					'depth' => 0,
					'menu_class'  => 'navbar-nav mr-auto',
					'walker'  => new WP_Bootstrap_Mega_Navwalker(),
		        ) );




		        ?>

						<div class="cta-header">
							<a href="tel:800-294-6637">(800) 294-6637</a>
						</div>

						<div class="search-header">
							<i class="icon-search"></i>
						</div>



		    </div>


		</nav>

		<div class="mobile-menu">
			<a class="mobile-toggle" href="#"><icon class="icon-menu"></icon> MORE</a>
			<a href="/"><icon  class="icon-handshake-o"></icon> CONTACT</a>
			<a href="/"><icon  class="icon-trophy"></icon> RESULTS</a>
			<a href="/"><icon  class="icon-users"></icon> ATTORNEYS</a>
	</div>


	</header><!-- #masthead -->



	<div class="search-form-section">
			<a class="close-btn" href="#">close	<icon class="icon-cross"></icon></a>
		  	<div class="search-wrap">
			  	<h2><white>How can we help?</white></h2>
				  <?php get_search_form();?>
	  	 </div>
	</div>
