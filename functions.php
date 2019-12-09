<?php
/**
 * SFS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SFS
 */



add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
add_action( 'after_setup_theme' , 'myMenu' );
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
add_filter( 'excerpt_length', function(){
	return 30;
} );
add_filter('excerpt_more', function($more) {
	return '...';
});

function myMenu () {
	register_nav_menu ('top', 'Меню в шапке');
}



function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri());
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

