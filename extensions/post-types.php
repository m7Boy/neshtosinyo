<?php 
register_post_type('home-slide', array(
	'labels' => array(
		'name'	 => __('Home Slides', 'crb'),
		'singular_name' => __('Home Slide', 'crb'),
		'add_new' => __('Add New', 'crb'),
		'add_new_item' => __('Add new Home Slide', 'crb'),
		'view_item' => __('View Home Slide', 'crb'),
		'edit_item' => __('Edit Home Slide', 'crb'),
		'new_item' => __('New Home Slide', 'crb'),
		'view_item' => __('View Home Slide', 'crb'),
		'search_items' => __('Search Home Slides', 'crb'),
		'not_found' =>  __('No Home Slides found', 'crb'),
		'not_found_in_trash' => __('No Home Slides found in trash', 'crb'),
	),
	'public' => true,
	'exclude_from_search' => false,
	'menu_icon' => 'dashicons-images-alt2',
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => array(
		'slug' => 'home-slide',
		'with_front' => false,
	),
	'query_var' => true,
	'supports' => array('title', 'thumbnail'),
));
/*
register_post_type('custom-type', array(
	'labels' => array(
		'name'	 => __('Custom Types', 'crb'),
		'singular_name' => __('Custom Type', 'crb'),
		'add_new' => __('Add New', 'crb'),
		'add_new_item' => __('Add new Custom Type', 'crb'),
		'view_item' => __('View Custom Type', 'crb'),
		'edit_item' => __('Edit Custom Type', 'crb'),
		'new_item' => __('New Custom Type', 'crb'),
		'view_item' => __('View Custom Type', 'crb'),
		'search_items' => __('Search Custom Types', 'crb'),
		'not_found' =>  __('No custom types found', 'crb'),
		'not_found_in_trash' => __('No custom types found in trash', 'crb'),
	),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'_edit_link' =>  'post.php?post=%d',
	'rewrite' => array(
		'slug' => 'custom-type',
		'with_front' => false,
	),
	'query_var' => true,
	'supports' => array('title', 'editor', 'page-attributes'),
));
*/