<?php  
define('THEME_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);

add_action('wp_enqueue_scripts', 'md_load_scripts');

function md_load_scripts() {
	$stylesheet_dir = get_template_directory_uri();

	# Enqueue jQuery
	wp_enqueue_script('jquery');

	# @wp_enqueue_script attributes -- id, location, dependencies, in_footer = false
	#wp_enqueue_script('theme-functions', $stylesheet_dir . '/js/functions.js', array('jquery'), true);
	
	# @wp_enqueue_style attributes -- id, location, dependencies, media = all
	wp_enqueue_style('theme-styles', $stylesheet_dir . '/style.css');
}

add_action('init', 'mb_attach_post_types_and_taxonomies', 0);

function mb_attach_post_types_and_taxonomies() {
	# Attach Custom Post Types
	include_once(THEME_DIR . 'extensions/post-types.php');

	# Attach Custom Taxonomies
	include_once(THEME_DIR . 'extensions/taxonomies.php');
}

add_action('after_setup_theme', 'md_setup_theme');

# functions.php file.
if (!function_exists('md_setup_theme')) {
	function md_setup_theme() {
		# Make this theme available for translation.
		//load_theme_textdomain( 'crb', get_template_directory() . '/languages' );

		# Common libraries

		# Additional libraries and includes
		# comments code
		
		# Theme supports
		add_theme_support('automatic-feed-links');
		add_theme_support('menus');
		add_theme_support('post-thumbnails');

		# Manually select Post Formats to be supported - http://codex.wordpress.org/Post_Formats
		// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

		# Add Image Size

		# Register Theme Menu Locations
		
		/*register_nav_menus(array(
			'main-menu'=>__('Main Header Menu', 'crb'),
			'footer-menu'=>__('Footer Menu', 'crb'),
		));*/
		
		# Add Actions

		# Add Filters
	}
}