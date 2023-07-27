<?php

namespace Hustle\Setup;

use Hustle\Assets;




/**
 * Theme setup
 */
function setup() {

    /*
    |--------------------------------------------------
    | Title Tag Support
    |--------------------------------------------------
    */
    
    add_theme_support('title-tag');

    /*
    |--------------------------------------------------
    | Register Main Navigations
    |--------------------------------------------------
    */
    register_nav_menus(array(
        'main_navigation' => "Main Navigation",
        'footer_navigation' => "Footer Navigation",
        'mobile_navigation' => "Mobile Navigation"
    ));

    /*
    |--------------------------------------------------
    | Add Support for Featured Images
    |--------------------------------------------------
    */

    add_theme_support('post-thumbnails');

    /*
    |--------------------------------------------------
    | Add Support for HTML5 Features
    |--------------------------------------------------
    */

    add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));
}

add_action('after_setup_theme', __NAMESPACE__ . '\\setup');


/*
|--------------------------------------------------
| Get Manifest File
|--------------------------------------------------
*/

function getManifest() {
    $assDir = get_template_directory_uri() . '/assets/dist/';
    $jsonString = file_get_contents($assDir . '/manifest.json');
    return json_decode($jsonString, true);
}


$manifest = getManifest();


function assets_init() {
    $manifest = getManifest();

    /*
    |--------------------------------------------------
    | Enqueue Scripts
    |--------------------------------------------------
    */
    
    wp_enqueue_script( 
        'main',
        join("/", [get_template_directory_uri(), $manifest['main.js']]),
        null,
        false,
        true
   );

   wp_enqueue_style(
       'main',
       join("/", [get_template_directory_uri(), $manifest['main.css']]),
   );


    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS

    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');

}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets_init');
    

/*
|--------------------------------------------------
| Create Widgets Here
|--------------------------------------------------
*/

function widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'footer',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}

add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');