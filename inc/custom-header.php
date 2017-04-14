<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package shivampaw
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses shivampaw_header_style()
 */
function shivampaw_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'shivampaw_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'header-text'			 => true,
		'width'                  => 1440,
		'height'                 => 300,
		'flex-height'            => true,
		'flex-width'			 => true,
		'wp-head-callback'       => 'shivampaw_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'shivampaw_custom_header_setup' );

if ( ! function_exists( 'shivampaw_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see shivampaw_custom_header_setup().
 */
function shivampaw_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.header-image {
			background: url(<?php echo get_header_image(); ?>) center center;
			min-height: 300px;
			position: relative;
		}
		.header-image .header-image-text{
		    position: absolute;
		    left: 0;
		    right: 0;
		    margin: auto;
		    top: 0;
		    bottom: 0;
		    text-align: center;
		    height: 50%;
		}
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
			font-size: 24px;
			font-weight: bolder;
		}
		.site-title a {
			font-size: 38px;
			font-weight: bolder;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
