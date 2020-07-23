<?php

// Change all instances of THEMENAME to your theme name.
if (!function_exists('nearest_setup')) :

    function nearest_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'height'      => 800,
            'width'       => 800,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        register_nav_menus(array(
            'menu-primary'  =>    'Primary Menu',
            'menu-footer'   =>    'Footer Menu'
        ));
    }

endif;

add_action('after_setup_theme', 'nearest_setup');

function nearest_scripts_styles()
{
    wp_enqueue_style('nearest_style', get_stylesheet_uri());
    
    // Google Font
    wp_enqueue_style('nearest_google_fonts', "https://fonts.googleapis.com/css?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap");

    // Font Awesome
    wp_enqueue_style('nearest_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css');
}

add_action('wp_enqueue_scripts', 'nearest_scripts_styles');
