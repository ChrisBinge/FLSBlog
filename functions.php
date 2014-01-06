<?php

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 650, 400, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'fullscreen', 400, 175 ); //300 pixels wide (and unlimited height)
add_image_size( 'ipad', 300, 130 ); //300 pixels wide (and unlimited height)
add_image_size( 'smartphone', 200, 100 ); //300 pixels wide (and unlimited height)
}
function wptuts_scripts_with_jquery()  
{  
    // Register the script like this for a theme:  
    wp_register_script( 'custom-script', get_template_directory_uri() . '/scriptfile.js', array( 'jquery' ) );  
    // Register the style like this for a theme:  
    wp_register_style( 'custom-style', get_template_directory_uri() . '/style.css', array(), '01032014', 'all' );  
    // For either a plugin or a theme, you can then enqueue the script:  
    wp_enqueue_script( 'custom-script' );
    wp_enqueue_style( 'custom-style' );  
}  
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );