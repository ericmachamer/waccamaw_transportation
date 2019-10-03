<?php

/**
 * Front End CSS
 */
function thee_load_styles()
{
    if (WP_DEBUG) {
        wp_enqueue_style('main-style', get_bloginfo('stylesheet_directory') . '/dist/styles/styles.css', array(), false, 'screen');
    } else {
        wp_enqueue_style('main-style', get_bloginfo('stylesheet_directory') . '/dist/styles/styles.min.css', array(), false, 'screen');
    }


    if(get_field('google-fonts', 'options')) {
        wp_enqueue_style('google-fonts', get_field('google-fonts', 'options'));
    } else {
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i|Roboto:300,400,500,700|Satisfy');
    }

}

add_action('wp_enqueue_scripts', 'thee_load_styles');

/**
 * Front End JS
 */
function thee_load_scripts()
{
    wp_enqueue_script('jquery');

    // Theme Script
    if (WP_DEBUG) {
        wp_enqueue_script('main', get_bloginfo('stylesheet_directory') . '/dist/scripts/scripts.js', array(), false, true);
    } else {
        wp_enqueue_script('main', get_bloginfo('stylesheet_directory') . '/dist/scripts/scripts.min.js', array(), false, true);
    }


    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    // WordPress Scripts
    if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply');

    // Dynamic URLs for use in scripts
    wp_localize_script('main', 'urls', array(
        'base' => get_bloginfo('url'),
        'theme' => get_bloginfo('template_url'),
        'ajax' => admin_url('admin-ajax.php')
    ));

    // Initialize vars for JS
    wp_localize_script('main', 'info', array( /* IDs, etc. */));
}

add_action('wp_enqueue_scripts', 'thee_load_scripts');

/**
 * Admin CSS
 */
function thee_load_admin_styles()
{
    wp_enqueue_style('admin-styles', get_bloginfo('stylesheet_directory') . '/dist/styles/admin.css');
}

add_action('admin_enqueue_scripts', 'thee_load_admin_styles');
add_action( 'login_enqueue_scripts', 'thee_load_admin_styles' );

/**
 * Admin JS
 */
function thee_load_admin_scripts()
{
    wp_enqueue_script('admin', get_bloginfo('template_url') . '/dist/scripts/admin.js');
}

add_action('admin_enqueue_scripts', 'thee_load_admin_scripts');

//Disable gutenberg style in Front
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );