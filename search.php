<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: "%s"', 'shivampaw' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content' );

			endwhile;

			shivampaw_bootstrap_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div>

<?php
get_sidebar();
get_footer();
