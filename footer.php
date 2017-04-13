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
		<div class="site-info">
			<?php printf( esc_html__( 'Developed by %1$s.', 'shivampaw' ), '<a href="https://www.shivampaw.com/" rel="designer">Shivam Paw</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
