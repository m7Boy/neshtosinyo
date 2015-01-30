<?php  

add_action('wp_enqueue_scripts', 'md_load_scripts');

function md_load_scripts() {
	$stylesheet_dir = get_stylesheet_uri();

	# Enqueue jQuery
	wp_enqueue_script('jquery');

	# @wp_enqueue_script attributes -- id, location, dependencies, in_footer = false
	wp_enqueue_script('theme-functions', $stylesheet_dir . '/js/functions.js', array('jquery'), true);
	
	# @wp_enqueue_style attributes -- id, location, dependencies, media = all
	wp_enqueue_style('theme-styles', $stylesheet_dir . '/style.css');
}

add_action('init', 'mb_attach_post_types_and_taxonomies', 0);

function mb_attach_post_types_and_taxonomies() {
	# Attach Custom Post Types
	include_once(CRB_THEME_DIR . 'options/post-types.php');

	# Attach Custom Taxonomies
	include_once(CRB_THEME_DIR . 'options/taxonomies.php');
}