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
<div id="page" class="site">

	<!-- Header Navbar
	=================================================== -->
	<header class="site-header">
		<nav class="navbar navbar-toggleable-sm navbar-light">
			<button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#nav-content" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="/">Brand Name</a>
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
	