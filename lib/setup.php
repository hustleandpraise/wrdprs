<?php

namespace Hustle\Setup;

use Hustle\Assets;

/**
 * Theme setup
 */
function setup() {

    /*
    |--------------------------------------------------
    | TItle Tag Support
    |--------------------------------------------------
    */
    
    add_theme_support('title-tag');

    /*
    |--------------------------------------------------
    | Register Main Navigations
    |--------------------------------------------------
    */
    register_nav_menus(array(
        'primary_navigation' => "Primary Navigation",
        'footer' => "Footer Navigation",
        'mobile' => "Mobile Navigation"
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
