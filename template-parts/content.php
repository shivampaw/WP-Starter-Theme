<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shivampaw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<a href="'.get_permalink().'"><h2 class="entry-title">', '</h2></a>' );
		endif; ?>

		<div class="entry-meta">
			Posted on <?php the_date(); ?> by <?php the_author(); ?> 
			<?php if ( get_edit_post_link() ) :
				edit_post_link( __( 'Edit', 'shivampaw' ), ' - '); 
			endif; ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

			if ( is_single() ) :
				the_content();
			else :
				if ( has_post_thumbnail() ) : ?>
					<div class="row">
						<div class="col-md-4 text-center">
					        <?php the_post_thumbnail('medium', [
					        	'class'	=>	'mb-2 img-fluid'
					        ]); ?>
					    </div>
					    <div class="col-md-8">
					    	<?php the_excerpt(); ?>
					    </div>
				    </div>
				<?php 
				else:
					the_excerpt();
				endif;
			endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shivampaw' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="post-categories">
			Filed Under: <?php the_category(', '); ?>
		</div>
		<div class="post-categories">
			<?php the_tags(); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->