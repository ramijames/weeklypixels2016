<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_tk' ),
	) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

// function register_books() {
// 	register_post_type( 'books', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
// 		array( 'labels' => array(
// 			'name' => __( 'Books', '_tk' ), /* This is the Title of the Group */
// 			'singular_name' => __( 'Book', '_tk' ), /* This is the individual type */
// 			'all_items' => __( 'All Books', '_tk' ), /* the all items menu item */
// 			'add_new' => __( 'Add New Book', '_tk' ), /* The add new menu item */
// 			'add_new_item' => __( 'Add New Book', '_tk' ), /* Add New Display Title */
// 			'edit' => __( 'Edit', '_tk' ), /* Edit Dialog */
// 			'edit_item' => __( 'Edit Book', '_tk' ), /* Edit Display Title */
// 			'new_item' => __( 'New Book', '_tk' ), /* New Display Title */
// 			'view_item' => __( 'View Books', '_tk' ), /* View Display Title */
// 			'search_items' => __( 'Search Books', '_tk' ), /* Search Custom Type Title */
// 			'not_found' =>  __( 'Nothing found in the Database.', '_tk' ), /* This displays if there are no entries yet */
// 			'not_found_in_trash' => __( 'Nothing found in Trash', '_tk' ), /* This displays if there is nothing in the trash */
// 			'parent_item_colon' => ''
// 			), /* end of arrays */
// 			'description' => __( 'These are the Books', '_tk' ), /* Custom Type Description */
// 			'public' => true,
// 			'publicly_queryable' => true,
// 			'exclude_from_search' => false,
// 			'show_ui' => true,
// 			'query_var' => true,
// 			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */
// 			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
// 			//'rewrite'	=> array( 'slug' => 'about', 'with_front' => false ), /* you can specify its url slug */
// 			//'has_archive' => 'about', /* you can rename the slug here */
// 			'capability_type' => 'post',
// 			'hierarchical' => false,
// 			/* the next one is important, it tells what's enabled in the post editor */
// 			'supports' => array( 'title', 'excerpt', 'custom-fields', 'revisions', 'sticky')
// 		) /* end of options */
// 	); /* end of register post type */

// 	/* this adds your post categories to your custom post type */
// 	register_taxonomy_for_object_type( 'category', 'books' );
// 	/* this adds your post tags to your custom post type */
// 	register_taxonomy_for_object_type( 'post_tag', 'books' );

// }
// add_action( 'init', 'register_books');

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {

	// load jquery first
	wp_enqueue_script('jqeury', get_template_directory_uri().'/bower_components/jquery/dist/jquery.min.js', array('jquery') );

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_tk-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load headroom.js
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load headroom.js
	wp_enqueue_script('headeroomjs', get_template_directory_uri().'/bower_components/headroom.js/dist/headroom.min.js' );

	// load headroom.js
	wp_enqueue_script('jqueryheaderoomjs', get_template_directory_uri().'/bower_components/headroom.js/dist/jQuery.headroom.min.js' );


	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_tk-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
