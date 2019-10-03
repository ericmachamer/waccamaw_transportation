<?php

function thee_theme_setup()
{
    // Enable support for post thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add custom image sizes
    // add_image_size( $name, $width = 0, $height = 0, $crop = false );
    add_image_size( 'logo', $width = 350, $height = 100, $crop = true );
    add_image_size( 'icons', $width = 130, $height = 140, $crop = false );
    add_image_size( 'timeline', $width = 500, $height = 99999, $crop = false );
    add_image_size( 'bg-block', $width = 1920, $height = 99999, $crop = false );
    add_image_size( 'featured-thumb-large', $width = 624, $height = 394, $crop = true );
    add_image_size( 'logo-area', $width = 245, $height = 99999, $crop = false );

    // Enable support for post formats
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

    // Enable support for HTML5 markup.
    add_theme_support('html5', array('comment-list', 'search-form', 'comment-form', 'gallery', 'caption'));

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Enable admin to set custom background images in 'appearance > background'
    // add_theme_support('custom-background');

    // Add WYSIWYG editor stylesheet
    add_editor_style('/dist/styles/editor.css');

    // Register commonly used menus
    register_nav_menus(array(
        'primary-navigation' => 'Primary Navigation',
        'secondary-navigation' => 'Secondary Navigation',
        'footer1-navigation' => 'Footer Col 1 Navigation',
        'footer2-navigation' => 'Footer Col 2 Navigation',
        'footer3-navigation' => 'Footer Cal 3 Navigation',
        'copy-navigation' => 'Copy Navigation',
    ));

    // Disables the admin bar
    //add_filter('show_admin_bar', '__return_false');

    // Cleanup Head
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Include custom post types, custom taxonomies, and general includes
    $includes = array_merge(
        glob(get_theme_root() . '/' . get_template() . '/taxonomies/*.php'), // All taxonomies
        glob(get_theme_root() . '/' . get_template() . '/types/*.php'), // All custom post types
        glob(get_theme_root() . '/' . get_template() . '/includes/*.php') // All includes
    );

    // Register commonly used menus
    register_nav_menus(array(
        'primary-navigation' => 'Primary Navigation',
        'secondary-navigation' => 'Secondary Navigation'
    ));

    // Ignore files starting with an underscore
    if ($includes) {
        foreach ($includes as $include) {
            $exploded_path = explode('/', $include);
            $filename = end($exploded_path);
            if (strpos($filename, '_') !== 0) {
                include_once($include);
            }
        }
    }
}

add_action('after_setup_theme', 'thee_theme_setup');

function custom_login_failed( $username )
{
    $referrer = wp_get_referer();

    if ( $referrer && ! strstr($referrer, 'wp-login') && ! strstr($referrer,'wp-admin') )
    {
        wp_redirect( add_query_arg('login', 'failed', $referrer) );
        exit;
    }
}
add_action( 'wp_login_failed', 'custom_login_failed' );

function remove_page_from_query_string($query_string)
{
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        $query_string['paged'] = $query_string['page'];
    }
    return $query_string;
}
add_filter('request', 'remove_page_from_query_string');