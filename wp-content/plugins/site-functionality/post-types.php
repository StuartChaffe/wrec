<?php

add_action('init', 'origin_cpts');

function origin_cpts() {
	$post_type_name		= "courses";
	$single_name		= "Course";
	$plural_name		= "Courses";
	$icon				= "dashicons-controls-play";
	$gutenberg_enabled	= true;

	$post_type_options = array(
	    'label'                 => $single_name,
	    'public'                => true,
	    'menu_icon'             => $icon,
	    'show_ui'               => true,
	    'show_in_menu'          => true,
	    'capability_type'       => 'post',
	    'hierarchical'          => true,
	    'rewrite'               => array(
	        'slug'                  => '',
	        'with_front'            => '0'
	    ),
	    'query_var'             => true,
	    'has_archive'           => false,
		'show_in_rest'			=> $gutenberg_enabled,
	    'supports'              => array(
	        'title',
	        'editor',
	        'revisions',
	        'thumbnail',
	        'author',
	        'page-attributes',
	    ),
	    'labels'                => array(
	        'name'                  => $single_name,
	        'singular_name'         => $single_name,
	        'menu_name'             => $plural_name,
	        'add_new'               => 'Add ' . $single_name,
	        'add_new_item'          => 'Add New ' . $single_name,
	        'edit'                  => 'Edit',
	        'edit_item'             => 'Edit ' . $single_name,
	        'new_item'              => 'New '. $single_name,
	        'view'                  => 'View '. $single_name,
	        'view_item'             => 'View '. $single_name,
	        'search_items'          => 'Search ' . $plural_name,
	        'not_found'             => 'No '. $plural_name . ' Found',
	        'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
	        'parent'                => 'Parent '. $single_name
	    )
	);
	register_post_type($post_type_name, $post_type_options);
	
	$post_type_name		= "programmes";
	$single_name		= "Programme";
	$plural_name		= "Programmes";
	$icon				= "dashicons-controls-forward";
	$gutenberg_enabled	= true;

	$post_type_options = array(
	    'label'                 => $single_name,
	    'public'                => true,
	    'menu_icon'             => $icon,
	    'show_ui'               => true,
	    'show_in_menu'          => true,
	    'capability_type'       => 'post',
	    'hierarchical'          => true,
	    'rewrite'               => array(
	        'slug'                  => '',
	        'with_front'            => '0'
	    ),
	    'query_var'             => true,
	    'has_archive'           => false,
		'show_in_rest'			=> $gutenberg_enabled,
	    'supports'              => array(
	        'title',
	        'editor',
	        'revisions',
	        'thumbnail',
	        'author',
	        'page-attributes',
	    ),
	    'labels'                => array(
	        'name'                  => $single_name,
	        'singular_name'         => $single_name,
	        'menu_name'             => $plural_name,
	        'add_new'               => 'Add ' . $single_name,
	        'add_new_item'          => 'Add New ' . $single_name,
	        'edit'                  => 'Edit',
	        'edit_item'             => 'Edit ' . $single_name,
	        'new_item'              => 'New '. $single_name,
	        'view'                  => 'View '. $single_name,
	        'view_item'             => 'View '. $single_name,
	        'search_items'          => 'Search ' . $plural_name,
	        'not_found'             => 'No '. $plural_name . ' Found',
	        'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
	        'parent'                => 'Parent '. $single_name
	    )
	);
	register_post_type($post_type_name, $post_type_options);
}