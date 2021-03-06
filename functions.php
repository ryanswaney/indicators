<?php
/**
 * indicators functions and definitions
 *
 * @package indicators
 */

if ( ! function_exists( 'indicators_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function indicators_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on indicators, use a find and replace
	 * to change 'indicators' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'indicators', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'indicators' ),
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

}
endif; // indicators_setup
add_action( 'after_setup_theme', 'indicators_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function indicators_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'indicators_content_width', 640 );
}
add_action( 'after_setup_theme', 'indicators_content_width', 0 );

/** Remove unused menu pages */
add_action( 'admin_menu', 'indicators_remove_menu_pages' );

function indicators_remove_menu_pages() {
    remove_menu_page('edit.php');  
}

// Add custom post type information ot the 'At A Glance' admin widget
add_action( 'dashboard_glance_items', 'cpad_at_glance_content_table_end' );

function cpad_at_glance_content_table_end() {
    $args = array(
        'public' => true,
        '_builtin' => false
    );
    $output = 'object';
    $operator = 'and';
 
    $post_types = get_post_types( $args, $output, $operator );
    foreach ( $post_types as $post_type ) {
        $num_posts = wp_count_posts( $post_type->name );
        $num = number_format_i18n( $num_posts->publish );
        $text = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $num_posts->publish ) );
        if ( current_user_can( 'edit_posts' ) ) {
            $output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a>';
            echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
            } else {
            $output = '<span>' . $num . ' ' . $text . '</span>';
                echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
            }
    }
}

/**
 * Enqueue scripts and styles.
 */
function indicators_scripts() {
	wp_enqueue_style( 'indicators-style', get_stylesheet_uri() );

	wp_enqueue_script( 'indicators-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'indicators-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	//wp_enqueue_script( 'bigfoot-footnotes', get_template_directory_uri() . '/js/bigfoot.min.js', array( 'jquery' ), '20130115', true );

	if ( is_post_type_archive( array( 'indicators', 'targets' ) ) ) {

	wp_enqueue_script( 'instafilta', get_template_directory_uri() . '/js/instafilta.min.js', array( 'jquery' ), '', true );

	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'indicators_scripts' );

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
 * Custom Taxonomies
 */
require get_template_directory() . '/inc/custom-taxonomies.php';

/**
 * Custom Post Type for Indicators
 */
require get_template_directory() . '/inc/cpt-indicators.php';

/**
 * Custom Post Type for Indicators
 */
require get_template_directory() . '/inc/cpt-targets.php';

/**
 * Custom WordPress Filters
 */
require get_template_directory() . '/inc/filters.php';
