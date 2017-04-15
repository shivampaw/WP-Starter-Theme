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
?>
		</div><!-- .row -->
	</div><!-- .container -->
	
	<footer class="site-footer">
		<div class="container-fluid">
		<?php if ( is_active_sidebar( 'footer-widget-1' ) || 
				   is_active_sidebar( 'footer-widget-2' ) ||
				   is_active_sidebar( 'footer-widget-3' ) ||
				   is_active_sidebar( 'footer-widget-4' )) : ?>

			<div id="footer-widgets" class="row">
			<?php if ( is_active_sidebar('footer-widget-1') ) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
			<?php endif;?>
			<?php if ( is_active_sidebar('footer-widget-2') ) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
			<?php endif;?>
			<?php if ( is_active_sidebar('footer-widget-3') ) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer-widget-3' ); ?>
				</div>
			<?php endif;?>
			</div>
			
		<?php endif; ?>
			<div class="row">
				<div class="col">
					<div class="site-info text-center">
						<?php _e( 'Developed by <a href="https://www.shivampaw.com/" rel="designer">Shivam Paw</a>.', 'shivampaw' ); ?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
