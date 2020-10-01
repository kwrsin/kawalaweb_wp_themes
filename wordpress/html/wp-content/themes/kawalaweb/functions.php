<?php
/*
 * Enqueue styles and scripts.
 */
function KawalaWeb_enqueue_scripts() {
    wp_enqueue_script('KawalaWeb-js', get_template_directory_uri() . '/js/helpers.js', array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'KawalaWeb_enqueue_scripts' );

/*
 * Setup KawalaWebtheme.
 */
function KawalaWeb_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 760, 300, true );
    add_image_size( 'KawalaWeb-single-image', 960, 540, true );
} 
add_action( 'after_setup_theme', 'KawalaWeb_setup_theme' );

/*
 * Remove #more-000 anchor from the read-more link.
 */
function KawalaWeb_remove_more_link_anchor( $link ) {
    $link = preg_replace( '/#more-[0-9]+/', '', $link );
    return $link;
  }

/*
 * Filter the archive title to remove the label of the title.
 */
function KawalaWeb_get_the_archive_title( $title ) {
    if ( is_category() ) {
      $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
    } elseif ( is_month() ) {
      $title = get_the_date( 'Y-n' );
    }
  
    return $title;
  }
  
  
$GLOBALS['content_width'] = 704;
add_theme_support('title-tag');
add_theme_support( 'automatic-feed-links' ); 
add_filter( 'the_content_more_link', 'KawalaWeb_remove_more_link_anchor' );
add_filter( 'get_the_archive_title', 'KawalaWeb_get_the_archive_title' );