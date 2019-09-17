<?php

/**
 * Enqueueing
 */
function dano_enqueue_stuff() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'dano_enqueue_stuff');


/**
 * Remove frontend admin bar
 */
add_filter('show_admin_bar', '__return_false');


/**
 * Enqueue Universal Template CSS
 */
function dano_enqueue_css() {
    wp_enqueue_style( 'ut-style', get_template_directory_uri() . '/css/ut-style.css' );
}
add_action( 'wp_enqueue_scripts', 'dano_enqueue_css');

/**
 * Enqueue Menu Clickhandler
 */
function dano_enqueue_clickhandler() {
    wp_enqueue_script( 'clickhandler', get_template_directory_uri() . '/js/dano_menu_clickhandler.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'dano_enqueue_clickhandler');

/**
 * Google Fonts
 */

include (get_stylesheet_directory() . '/google_fonts.php');

// custom excerpt length

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );