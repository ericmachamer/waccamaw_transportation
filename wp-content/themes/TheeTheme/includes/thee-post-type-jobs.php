<?php

$labels = array(
	'name' => 'Jobs',
	'singular_name' => 'Job',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New',
	'edit_item' => 'Edit Job',
	'new_item' => 'New Job',
	'view_item' => 'View Job',
	'search_items' => 'Search Jobs',
	'not_found' => 'No Jobs Found',
	'not_found_in_trash' => 'No Jobs Found in Trash',
	'menu_name' => 'Jobs'
);

$args = array(
	'labels' => $labels,
	'description' => '',
	'public' => true,
	'exclude_from_search' => false,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_nav_menus' => false,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
	'show_in_rest' => true,
	'menu_position' => 20,
	'menu_icon' => 'dashicons-businessman' , // http://melchoyce.github.io/dashicons/
	'capability_type' => 'page',
	'hierarchical' => true,
	'supports' => array( 'title', 'editor', 'thumbnail' ),
	//'register_meta_box_cb' => 'init_slide_fields',
	'taxonomies' => array(),
    'rewrite' => array( 'slug' => 'about/job-opportunities', 'with_front' => false),
	'has_archive' => false
);

register_post_type( 'jobs', $args );