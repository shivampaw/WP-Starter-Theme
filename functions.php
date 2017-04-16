<?php
/**
 * shivampaw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shivampaw
 */

if ( ! function_exists( 'shivampaw_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shivampaw_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on shivampaw, use a find and replace
	 * to change 'shivampaw' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'shivampaw', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for custom logo
	add_theme_support( 'custom-logo' , array (
			'height'      => 38,
			'width'       => 150,
			'flex-width'  => true,
			'flex-height' => true,
		));

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'shivampaw' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'shivampaw_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'shivampaw_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shivampaw_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shivampaw_content_width', 800 );
}
add_action( 'after_setup_theme', 'shivampaw_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shivampaw_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shivampaw' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'shivampaw' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'shivampaw' ),
		'id'            => 'footer-widget-1',
		'description'   => esc_html__( 'Add widgets here.', 'shivampaw' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'shivampaw' ),
		'id'            => 'footer-widget-2',
		'description'   => esc_html__( 'Add widgets here.', 'shivampaw' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'shivampaw' ),
		'id'            => 'footer-widget-3',
		'description'   => esc_html__( 'Add widgets here.', 'shivampaw' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Page Not Found Widget', 'shivampaw' ),
		'id'            => '404-widget',
		'description'   => esc_html__( 'Add widgets here.', 'shivampaw' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'shivampaw_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shivampaw_scripts() {
	wp_enqueue_style( 'shivampaw-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-tether', get_template_directory_uri() . '/js/dist/jquery.tether.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/dist/bootstrap.min.js', null, null, true );
	wp_enqueue_script( 'shivampaw-javascript', get_template_directory_uri() . '/js/dist/main.js', null, null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shivampaw_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load BS4 Nav Walker
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Add Bootstrap navbar class to the `li`
 */
add_filter('nav_menu_css_class','shivampaw_add_class_to_navbar_li',1,3);
function shivampaw_add_class_to_navbar_li( $classes, $item, $args ) {
	$classes[] = 'nav-item';
	return $classes;
}

/**
 * Add Bootstrap navbar class to the `li a`
 */
add_filter( 'nav_menu_link_attributes', 'shivampaw_add_class_to_navbar_li_a', 10, 3 );
function shivampaw_add_class_to_navbar_li_a( $atts, $item, $args ) {
	$atts['class'] = 'nav-link';
	return $atts;
}

/**
 * Filter the excerpt "read more" string.
 */
function shivampaw_change_excerpt_more( $more ) {
    return '[...] &nbsp; <a href="'. esc_attr( get_permalink() ) .'" title="'. esc_attr(get_the_title()) .'">Continue Reading &rarr;</a>';
}
add_filter( 'excerpt_more', 'shivampaw_change_excerpt_more' );

/**
 * Change excerpt length
 */
function shivampaw_change_excerpt_length( $length ) {
	return 60;
}
add_filter('excerpt_length', 'shivampaw_change_excerpt_length');

/**
 * Customise Archive Titles for specific archives
 */
add_filter('get_the_archive_title', function ( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( 'Posts Filed Under: ', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( 'Posts Tagged With: ', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">Posts By: ' . get_the_author() . '</span>';
    } else {
        $title = __( 'Blog Posts', 'shivampaw' );
    }
    return $title;
});

/**
 * Set default media link location to 'None'
 */
update_option( 'image_default_link_type', 'none' ); 



/*
 * custom pagination with bootstrap .pagination class
 * source: http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/
 */
function bootstrap_pagination( $echo = true ) {
	global $wp_query;

	$big = PHP_INT_MAX; // need an unlikely integer

	$pages = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array',
			'prev_next'   => true,
			'prev_text'    => __('« Prev'),
			'next_text'    => __('Next »'),
		)
	);

	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

		$pagination = '<ul class="pagination justify-content-center">';

		foreach ( $pages as $page ) {
			$pagination .= '
				<li class="page-item">
					'.$page.'
				</li>';
		}

		$pagination .= '</ul>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
}