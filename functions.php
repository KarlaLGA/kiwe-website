<?php
/**
 * Kiwe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kiwe
 */

if ( ! function_exists( 'kiwe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kiwe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Kiwe, use a find and replace
		 * to change 'kiwe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kiwe', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-main' => esc_html__( 'Primary', 'kiwe' ),
			'menu-main-r' => esc_html__( 'Primary-Rest', 'kiwe' ),
			'menu-subheader' => esc_html__( 'Subheader', 'kiwe' ),
			'menu-dashboard' => esc_html__( 'Dashboard', 'kiwe' ),
			'menu-footer' => esc_html__( 'Footer', 'kiwe' ),
			'menu-social' => esc_html__( 'Social Menu', 'kiwe' ),


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
		add_theme_support( 'custom-background', apply_filters( 'kiwe_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'kiwe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kiwe_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kiwe_content_width', 640 );
}
add_action( 'after_setup_theme', 'kiwe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kiwe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kiwe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kiwe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kiwe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kiwe_scripts() {
	//google-font
	wp_enqueue_style( 'kiwe-fonts', 'https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700|Source+Serif+Pro:400,700&display=swap' );
	
	wp_enqueue_style( 'kiwe-font-awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');

	wp_enqueue_style( 'kiwe-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kiwe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20190729', true );

	wp_enqueue_script( 'kiwe-circletype', get_template_directory_uri() . '/js/circletype.min.js', array(), '20190729', true );

	wp_enqueue_script( 'kiwe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20190729', true );

	//Parallax Effect
	wp_enqueue_script( 'kiwe-parallax', get_template_directory_uri() . '/js/parallax-effect.js', array('jquery'), '20190729', true );
	

	if(is_front_page())
	{
	//Home Page Middle Menu 
	wp_enqueue_script( 'kiwe-middle-menu', get_template_directory_uri() . '/js/middle-menu.js', array('jquery'), '20190729', true );
	}

	if(is_page('rhome'))
	{
	//Restaurant Page Middle Menu
	wp_enqueue_script( 'kiwe-middle-menu-restaurant', get_template_directory_uri() . '/js/middle-menu-restaurant.js', array('jquery'), '20190729', true );
	

	}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kiwe_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

