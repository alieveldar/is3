<?php
if(!function_exists('divichildThemeSetup')){
	function divichildThemeSetup(){
		load_theme_textdomain('divichild_theme');
	}
}
add_action('after_setup_theme', 'divichildThemeSetup');


function divichildAssets(){
	wp_enqueue_style('parent_style', get_template_directory_uri(). '/style.css');
    wp_enqueue_script('child_js', get_stylesheet_directory_uri() . '/js/custom.js');
	
    wp_enqueue_style('child_css', get_stylesheet_directory_uri() . '/css/custom.css');
}
add_action('wp_enqueue_scripts', 'divichildAssets');
