<?php
/**
 * Displays all of the <head> section and everything up until <!-- site-content --> div
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package ysgoltrewen
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" value="width=device-width, initial-scale=1">
		<title><?php bloginfo( 'name' ); ?><?php if ( is_home() ) { } else { echo " : "; } ?><?php wp_title(''); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/dist/humans.txt">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header"><!-- site-header -->
			<div class="brand"><!-- site_branding -->
					<a class="brand--logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri (); ?>/dist/assets/img/logo.svg" width="130" height="125" alt="Ysgol Trewen logo"></a></h1>
					<h1 class="brand--name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="brand--desc"><?php echo get_bloginfo('description');?></h2>
			</div>
			<nav class="nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</header>
		<div><!-- site-content -->
