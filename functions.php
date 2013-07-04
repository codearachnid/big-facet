<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
if ( ! function_exists( 'big_facet_setup' ) ) {
	function big_facet_setup() {

		/**
		 * Make theme available for translation
		 * Translations can be filed in the /languages/ directory
		 * If you're building a theme based on big_facet, use a find and replace
		 * to change 'big_facet' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'big_facet', get_template_directory() . '/lang' );

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
		 * This theme uses wp_nav_menu() in one location.
		 */
		register_nav_menus( array(
			'top' => __( 'Top Menu', 'big_facet' ),
			'primary' => __( 'Primary Menu', 'big_facet' ),
			'side' => __( 'Sidebar Menu', 'big_facet' ),
			'footer' => __( 'Footer Menu', 'big_facet' )
		) );

		/**
		 * Enable support for Post Formats
		 */
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	}
} // big_facet_setup
add_action( 'after_setup_theme', 'big_facet_setup' );


/**
 * Enqueue scripts and styles
 */
function big_facet_enqueue_scripts() {

	wp_enqueue_style( 'big_facet_fonts', 'http://fonts.googleapis.com/css?family=Orienta' );
	wp_enqueue_style( 'big_facet_bootstrap', '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' );
	// wp_enqueue_style( 'big_facet_bootstrap', '//netdna.bootstrapcdn.com/bootswatch/2.3.2/superhero/bootstrap.min.css' );
	wp_enqueue_style( 'big_facet_font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' );
	wp_enqueue_style( 'big_facet_style', get_stylesheet_uri() );

	wp_enqueue_script( 'big_facet_bootstrap', '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js', array('jquery'), '2.3.2', true );
	wp_enqueue_script( 'big_facet_script', get_template_directory_uri() . '/js/doc-load.js', array('jquery'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// allow for hooking into scripts and styles
	do_action( 'big_facet_enqueue-scripts' );
}
add_action( 'wp_enqueue_scripts', 'big_facet_enqueue_scripts' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function big_facet_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'big_facet' ),
		'id'            => 'sidebar-main',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'big_facet_widgets_init' );


require_once 'inc/themify.php';