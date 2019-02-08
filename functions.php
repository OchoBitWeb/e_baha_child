<?php
// Enqueue Paretn style.css
add_action( 'wp_enqueue_scripts', 'dynamix_enqueue_styles' );

function dynamix_enqueue_styles() 
{
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}