<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package shivampaw
 */

get_header(); ?>
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="col-lg-8" id="site-content">
<?php else : ?>
	<div class="col-lg-10 mx-auto" id="site-content">
<?php endif; ?>
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'shivampaw' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'shivampaw' ); ?></p>

					<?php if ( is_active_sidebar( '404-widget' ) ) : ?>
							<?php dynamic_sidebar( '404-widget' ); ?>
					<?php endif;?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div>

<?php
get_sidebar();
get_footer();
