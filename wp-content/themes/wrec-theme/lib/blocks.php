<?php

add_filter( 'block_categories_all', 'wrec_block_categories', 10, 2 );
function wrec_block_categories( $categories, $post )
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'wrec-blocks',
                'title' => __( 'WREC Blocks', 'wrecblocks-master' ),
            ),
        )
    );
}

add_action('acf/init', 'wrec_acf_blocks');
function wrec_acf_blocks() {
	if( function_exists('acf_register_block') ) {
		acf_register_block(array(
			'name'				=> 'columns',
			'title'				=> __('Two columns'),
			'description'		=> __('Add expanding content'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'columns',
			'align' 			=> 'wide',
			'keywords'			=> array( 'cols, columns' ),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('Add testimonial'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'format-status',
			'align' 			=> 'wide',
			'keywords'			=> array( 'testimonial, quote' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('Call to action'),
			'description'		=> __('Add a CTA block'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'megaphone',
			'align' 			=> 'wide',
			'keywords'			=> array( 'cta, call to action' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'text-image',
			'title'				=> __('Text with image'),
			'description'		=> __('Add a standard text with image block'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'align-pull-right',
			'align' 			=> 'wide',
			'keywords'			=> array( 'content, text, image' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'title-block',
			'title'				=> __('Title block'),
			'description'		=> __('Add a title block'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'menu',
			'align' 			=> 'wide',
			'keywords'			=> array( 'title' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'page-title',
			'title'				=> __('Page title'),
			'description'		=> __('Add a page title'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'minus',
			'align' 			=> 'wide',
			'keywords'			=> array( 'title, page' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'posts',
			'title'				=> __('All posts'),
			'description'		=> __('Add all posts'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'calendar-alt',
			'align' 			=> 'wide',
			'keywords'			=> array( 'posts, blogs' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'careers',
			'title'				=> __('All careers'),
			'description'		=> __('Add all careers'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'admin-users',
			'align' 			=> 'wide',
			'keywords'			=> array( 'careers, jobs' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'courses',
			'title'				=> __('All courses'),
			'description'		=> __('Add all courses'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'controls-play',
			'align' 			=> 'wide',
			'keywords'			=> array( 'courses' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content block'),
			'description'		=> __('Add a content block'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'format-aside',
			'align' 			=> 'wide',
			'mode' => 'auto',
			'keywords'			=> array( 'content' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'auto',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'locations',
			'title'				=> __('Locations list'),
			'description'		=> __('Add locations list'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'location',
			'align' 			=> 'wide',
			'keywords'			=> array( 'location, campus' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'form',
			'title'				=> __('Form'),
			'description'		=> __('Add a form'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'email-alt',
			'align' 			=> 'wide',
			'keywords'			=> array( 'form, contact' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'logos',
			'title'				=> __('Logos'),
			'description'		=> __('Add a logos block'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'screenoptions',
			'align' 			=> 'wide',
			'keywords'			=> array( 'logo, award' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'image',
			'title'				=> __('Image'),
			'description'		=> __('Add an image block'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'heart',
			'align' 			=> 'wide',
			'keywords'			=> array( 'image' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		acf_register_block(array(
			'name'				=> 'featured-posts',
			'title'				=> __('Featured posts'),
			'description'		=> __('Add featured posts'),
			'render_callback'	=> 'wrec_acf_block_render_callback',
			'category'			=> 'wrec-blocks',
			'icon'				=> 'screenoptions',
			'align' 			=> 'wide',
			'keywords'			=> array( 'posts, featured' ),
			'example'			=> array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
	}
}

function wrec_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/{$slug}.php") );
	}
}

add_filter( 'allowed_block_types_all', 'wrec_allowed_block_types' );
 
function wrec_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/columns',
		'acf/testimonial',
		'acf/cta',
		'acf/content',
		'acf/text-image',
		'acf/title-block',
		'acf/page-title',
		'acf/posts',
		'acf/courses',
		'acf/locations',
		'acf/form',
		'acf/logos',
		'acf/image',
		'acf/featured-posts',
		// 'acf/careers',
	);
 
}
  
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
function add_default_value_to_image_field($field) {
	acf_render_field_setting( $field, array(
		'label'			=> 'Default Image',
		'instructions'		=> 'Appears when creating a new post',
		'type'			=> 'image',
		'name'			=> 'default_value',
	));
}
add_action('acf/render_field_settings/type=file', 'add_default_value_to_file_field');
function add_default_value_to_file_field($field) {
	acf_render_field_setting( $field, array(
		'label'			=> 'Default File',
		'instructions'		=> 'Appears when creating a new post',
		'type'			=> 'file',
		'name'			=> 'default_value',
	));
}