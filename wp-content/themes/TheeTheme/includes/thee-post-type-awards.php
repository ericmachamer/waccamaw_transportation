<?php

$labels = array(
	'name' => 'Safety Awards',
	'singular_name' => 'Safety Award',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New',
	'edit_item' => 'Edit Safety Award',
	'new_item' => 'New Safety Award',
	'view_item' => 'View Safety Award',
	'search_items' => 'Search Awards',
	'not_found' => 'No Awards Found',
	'not_found_in_trash' => 'No Awards Found in Trash',
	'menu_name' => 'Awards'
);

$args = array(
	'labels' => $labels,
	'description' => '',
	'public' => true,
	'exclude_from_search' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_nav_menus' => false,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
    'show_in_rest' => false,
	'menu_position' => 20,
	'menu_icon' => 'dashicons-awards' , // http://melchoyce.github.io/dashicons/
	'capability_type' => 'page',
	'hierarchical' => true,
	'rewrite' => true,
	'supports' => array( 'title', 'editor', 'thumbnail' ),
	//'register_meta_box_cb' => 'init_slide_fields',
    'taxonomies' => array( 'categories' ),
	'has_archive' => true
);

register_post_type( 'safety-awards', $args );

register_taxonomy( 'categories', array('work'), array(
        'hierarchical' => true,
        'label' => 'Categories',
        'singular_label' => 'Category',
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> true )
    )
);

register_taxonomy_for_object_type( 'categories', 'safety-awards' );