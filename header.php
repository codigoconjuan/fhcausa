<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fundacion_Honoris_Causa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'fhcausa' ); ?></a>




	<header id="masthead" class="site-header" role="banner">
		<span data-responsive-toggle="site-navigation" data-hide-for="medium">
			<button class="menu-icon " type="button" data-toggle></button>
		</span> <!--.responsive button-->

		<div class="row">

	  		<div class="large-4 columns">
						<div class="site-branding ">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/LogotipoFHC.png">
								</a>
						</div><!-- .site-branding -->
				</div> <!--.large-4 columns-->

				<div class="large-8 columns">
						<nav id="site-navigation" class="header-navigation" role="navigation">
							<?php wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_id' => 'primary-menu',
									'menu_class' => 'menu-principal'
								)
							); ?>
						</nav><!-- #site-navigation -->
				</div> <!--.large-8 columns-->
    </div> <!--.topbar-->
	</header><!-- #masthead -->

	<div id="content" class="site-content row">
