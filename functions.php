<?php  

function md_load_scripts() {
	/*var_dump(get_stylesheet_uri());
	var_dump(get_template_directory_uri());*/

	$stylesheet_dir = get_stylesheet_uri();

	wp_enqueue_style('styles', $stylesheet_dir);
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'md_load_scripts');