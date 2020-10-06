<?php
/*
 * Enqueue styles and scripts.
 */


function set_custom_ver_css_js($src)
{
    $hash = 9999;
    $_src = parse_url($_src);

    if (!$_src) {
        return $hash;
    }

    $filePath = ABSPATH . $_src['path'];
    if (file_exists($filePath)) {
        $hash = filemtime($filePath);
    }

    return $hash;
}


function KawalaWeb_enqueue_scripts() {
    $js_path = get_template_directory_uri() . '/js/helpers.js';
    wp_enqueue_script('KawalaWeb', $js_path, array('jquery'), set_custom_ver_css_js($js_path), true);
    
    $css_path = get_template_directory_uri() . '/css/loggers.css';
    if(is_front_page() || is_404()) {
        $css_path = get_template_directory_uri() . '/css/main.css';
    }
    wp_enqueue_style( 'KawalaWeb', $css_path, null, set_custom_ver_css_js($css_path));
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

add_action( 'wp','controlCache', 1 );
if ( !function_exists( 'controlCache' ) ):
function controlCache() {
  if (is_singular()) {
    header( "Cache-Control:no-cache,no-store,must-revalidate,max-age=0" );
    header( "Cache-Control:pre-check=0,post-check=0" ,false);
    header( "Pragma:no-cache" );
  }
}
endif;
  
$GLOBALS['content_width'] = 704;
add_theme_support('title-tag');
add_theme_support( 'automatic-feed-links' ); 
add_filter( 'the_content_more_link', 'KawalaWeb_remove_more_link_anchor' );