<?php
/**
 * CoffeeShop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CoffeeShop
 */





//подключаем стили к теме

	function сoffeeshop_enqueue_style() {
		 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', array(), '1.0.1',  'all' );
		 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet', array(), '1.0.1',  'all' );
	
	    wp_enqueue_style( 'сoffeeshop-styles', get_template_directory_uri() .  '/assets/css/styles.css', array(), '1.0.1',  'all' );
	  
}

add_action( 'wp_enqueue_scripts', 'сoffeeshop_enqueue_style' );
;


function сoffeeshop_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '1.0.1',  'all' );
    wp_enqueue_script( 'сoffeeshop-scripts', get_template_directory_uri() .  '/assets/js/scripts.js', array('bootstrap'), '1.0.1',  'all' );
    wp_enqueue_script( 'сoffeeshop-customizer', get_template_directory_uri() .  '/js/customizer.js', array('bootstrap', 'сoffeeshop-scripts'), '1.0.1',  'all' );
    wp_enqueue_script( 'сoffeeshop-navigation', get_template_directory_uri() .  '/js/navigation.js', array('bootstrap', 'сoffeeshop-scripts', 'сoffeeshop-customizer'), '1.0.1',  'all' );
} 


add_action( 'wp_enqueue_scripts', 'сoffeeshop_enqueue_scripts' );

function сoffeeshop_enqueue_links() {

	echo '<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />';
 
  
}
add_action( 'wp_head', 'сoffeeshop_enqueue_links' );


function сoffeeshop_theme_init() {
	register_nav_menus( array(
		'header_nav' => 'Header menu',
		'footer_nav' => 'Footer menu',
		 ) );
	//підклюення мов
		load_theme_textdomain( 'coffeeshop', get_template_directory() . '/languages' );
}
add_action('after_setup_theme', 'сoffeeshop_theme_init');
 
 //добавление пагинации на страницу блога
function coffeeshop_register_post_type_working() {

$labels = array(
		'name'              => _x( 'Time', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Time', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Time', 'textdomain' ),
		'all_items'         => __( 'All Time', 'textdomain' ),
		'parent_item'       => __( 'Parent Time', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Time:', 'textdomain' ),
		'edit_item'         => __( 'Edit Time', 'textdomain' ),
		'update_item'       => __( 'Update Time', 'textdomain' ),
		'add_new_item'      => __( 'Add New Time', 'textdomain' ),
		'new_item_name'     => __( 'New Time Name', 'textdomain' ),
		'menu_name'         => __( 'Time', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Time' ),
	);


	register_taxonomy('Time', array('working'), $args);
	unset($args);


	$args = [
		'label' => 'Working','coffeeshop',
		'public' => true,
		'has_arhive' => true,
		'supports' => ['title',
		'editor',
		'thumbnail',
		'excerpt'
			],
		'rewrite' =>  array('slug' => 'working' ),	
		];

	register_post_type('working', $args);
}
add_action('init', 'coffeeshop_register_post_type_working');




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function coffeeshop_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on CoffeeShop, use a find and replace
		* to change 'coffeeshop' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'coffeeshop', get_template_directory() . '/languages' );

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

	

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'coffeeshop_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'coffeeshop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coffeeshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'coffeeshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'coffeeshop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coffeeshop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'coffeeshop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'coffeeshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'coffeeshop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function coffeeshop_scripts() {
	wp_enqueue_style( 'coffeeshop-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'coffeeshop-style', 'rtl', 'replace' );

	wp_enqueue_script( 'coffeeshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'coffeeshop_scripts' );

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

