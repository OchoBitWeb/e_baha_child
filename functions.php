<?php
/**
 * Enqueue Paretn style.css
 *
 * @package    e-baha
 * @subpackage setup
 */
function e_baha_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'e_baha_enqueue_styles' );

/**
 * Sets up theme defaults
 *
 * @package    e-baha
 * @subpackage setup
 */
function e_baha_child_setup() {
	load_child_theme_textdomain( 'e-baha', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'e_baha_child_setup', 11 );

/**
 * Enqueues the parent and the child theme styles.
 *
 * @package    e-baha
 * @subpackage setup
 */
function e_baha_child_scripts() {

	wp_enqueue_style( 'e-baha-style', get_stylesheet_directory_uri() . '/assets/css/custom.css' );
	wp_enqueue_script( 'e-baha-theme-scripts', get_stylesheet_directory_uri() . '/assets/js/custom.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'e_baha_child_scripts', 11 );
