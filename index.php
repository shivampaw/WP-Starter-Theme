<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
			<div class="archive-details">
				<?php
				if ( ! is_front_page() ) :
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<p>', '</p>');
				else:
					echo '<h1 class="page-title">'; bloginfo('name'); echo '</h1>';
					echo '<p>'; bloginfo('description'); echo '</p>';
				endif; ?>
			</div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part('template-parts/content', get_post_format());	

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
