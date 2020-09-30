<?php
/*
 * Enqueue styles and scripts.
 */
// function KawalaWeb_enqueue_scripts() {
//   wp_enqueue_style( 'KawalaWeb-style', get_stylesheet_directory_uri() . "/css/loggers.css" );

// }
// add_action( 'wp_enqueue_scripts', 'KawalaWeb_enqueue_scripts' );

/*
 * Setup KawalaWebtheme.
 */
function KawalaWeb_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 760, 300, true );
} 
add_action( 'after_setup_theme', 'KawalaWeb_setup_theme' );