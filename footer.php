<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shivampaw
 */

get_sidebar();
?>

	<footer class="site-footer">
		<div class="container">
		<?php if ( is_active_sidebar('footer-widget-1') || is_active_sidebar('footer-widget-2') ) : ?>
			<div id="footer-widgets" class="row">
			<?php if ( is_active_sidebar('footer-widget-1') ) : ?>
				<div class="col-lg">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
			<?php endif;?>
			<?php if ( is_active_sidebar('footer-widget-2') ) : ?>
				<div class="col-lg">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
			<?php endif;?>
			</div>
		<?php endif; ?>
			<div class="row">
				<div class="col">
					<div class="site-info text-center">
						<?php printf( esc_html__( 'Developed by %1$s.', 'shivampaw' ), '<a href="https://www.shivampaw.com/" rel="designer">Shivam Paw</a>' ); ?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
