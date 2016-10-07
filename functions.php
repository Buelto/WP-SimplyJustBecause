<?php

function SimplyJustBecause_resources() {
 /*---------------Linking Css------------------------------------*/  
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'SimplyJustBecause_resources');


/*-------------------Add featured img support--------------------*/

function featuredImg_setup()

{add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 600,500,true);
 add_image_size('banner-image', 1280,960,true);
}
add_action('after_setup_theme','featuredImg_setup');

/*-------------------Nav Menu--------------------*/

register_nav_menus(array('primary' => __('Primary Menu'),
                        'footer' =>__('Footer Menu'),));

/*-------------------Searchbar--------------------*/


add_theme_support('html5', array('search-form'));
