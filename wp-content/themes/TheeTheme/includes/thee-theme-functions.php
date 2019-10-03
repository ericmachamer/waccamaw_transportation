<?php

/**
 * Description of what the function does and how it is used
 *
 * @param string $var Description of the expected input
 * @return string Description of the expected output
 */
function thee_example_function($var)
{
    return $var;
}

/**
 * Generate pagination links
 */
function thee_pagination()
{
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    return paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'mid_size' => 1,
        'prev_text' => '<i class="icon icon-angle-left"></i> Previous',
        'next_text' => 'Next <i class="icon icon-angle-right"></i>',
    ));
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();

    acf_add_options_page(array(
        'page_title' => 'Testimoinals',
        'menu_title' => 'Testimonials',
        'menu_slug' => 'testimonials',
        'capability' => 'edit_posts',
        'redirect' => false,
        'icon_url' => 'dashicons-editor-quote',
    ));

}



function bootstrap_nav()
{
    wp_nav_menu( array(
            'theme_location'    => 'primary-navigation',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav justify-content-end',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}
