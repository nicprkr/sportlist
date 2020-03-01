<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sprts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Oswald&display=swap" rel="stylesheet"> 
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sprts' ); ?></a>

	<header id="masthead" class="site-header max-width">
	<a class="remove-default" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<div class="site-branding">
				<?php get_template_part( 'graphics/logo.svg' ); ?>
			<div class="site-branding__content">

				<?php if( is_front_page() ) : ?>

				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

				<?php else : ?>

					<p class="site-title"><?php bloginfo( 'name' ); ?></p>
				<?php endif; ?>

				<?php

				$sprts_description = get_bloginfo( 'description', 'display' );
				if ( $sprts_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sprts_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div><!-- .site-branding__content -->
		</div><!-- .site-branding -->
		</a>
		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sprts' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	 => 'header-menu'
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content max-width">
