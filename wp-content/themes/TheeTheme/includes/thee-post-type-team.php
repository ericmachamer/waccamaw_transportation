<?php

$labels = array(
	'name' => 'Team',
	'singular_name' => 'Team Member',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New',
	'edit_item' => 'Edit Team Member',
	'new_item' => 'New Team Member',
	'view_item' => 'View Team Member',
	'search_items' => 'Search Teams',
	'not_found' => 'No Teams Found',
	'not_found_in_trash' => 'No Teams Found in Trash',
	'menu_name' => 'Team'
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
	'menu_icon' => 'dashicons-groups' , // http://melchoyce.github.io/dashicons/
	'capability_type' => 'page',
	'hierarchical' => true,
	'supports' => array( 'title', 'editor', 'thumbnail' ),
	//'register_meta_box_cb' => 'init_slide_fields',
	'taxonomies' => array(),
    'rewrite' => array('slug' => '/about/the-waccamaw-team', 'with_front' => false),
	'has_archive' => false
);

register_post_type( 'team', $args );