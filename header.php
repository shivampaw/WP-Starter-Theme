<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shivampaw
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header Navbar
	=================================================== -->
	<header class="site-header">
		<nav class="navbar navbar-toggleable-sm navbar-light">
			<button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#nav-content" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<?php echo bloginfo('name'); ?>
			</a>
			<?php
				wp_nav_menu(array(
					'theme_location'	=> 'primary',
					'container_class'	=> 'navbar-collapse collapse',
					'container_id'		=> 'nav-content',
					'menu_class'		=>	'navbar-nav mr-auto mr-sm-0 ml-sm-auto'
				));
			?>
		</nav>
	</header>

	<?php if ( get_header_image() ) : ?>
        <div class="header-image">
        	<div class="header-image-text">
		        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
		        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
	        </div>
        </div>
	<?php endif; ?>
	

	<div class="container">
		<div class="row">
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
				<div class="col-lg-8">
			<?php else : ?>
				<div class="col-lg-10 mx-auto">
			<?php endif; ?>