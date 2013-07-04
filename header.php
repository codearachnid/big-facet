<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
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
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="page" class="hfeed site container-fluid">
	<?php do_action( 'before' ); ?>
	<?php /*

	@TODO finalize top nav

	<header id="top" class="site-top">
		<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
	</header>
	*/ ?>
	<header id="masthead" class="row-fluid navbar navbar-fixed-top" role="banner">
		<div class="center-content">
			<h1 class="site-title brand pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description pull-right"><?php bloginfo( 'description' ); ?></h2>

			<nav id="primary-nav" class="navigation pull-right" role="navigation">
				<h1 class="menu-toggle hidden-desktop"><?php _e( 'Menu', 'big_facet' ); ?></h1>
				<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'big_facet' ); ?>"><?php _e( 'Skip to content', 'big-facet' ); ?></a></div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				
			</nav><!-- #site-navigation -->

		</div>
	</header><!-- #masthead -->

	<div id="main">