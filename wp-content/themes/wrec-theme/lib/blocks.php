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
			'align' 			=> 'full',
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
			'align' 			=> 'full',
			'keywords'			=> array( 'testimonial, quote' ),
			'example'         => array(
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
			'align' 			=> 'full',
			'keywords'			=> array( 'cta, call to action' ),
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
				),
			),
		));
		// acf_register_block(array(
		// 	'name'				=> 'accordion',
		// 	'title'				=> __('Accordion'),
		// 	'description'		=> __('Add expanding content'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'insert',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'accordion, expanding' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'banner',
		// 	'title'				=> __('Banner'),
		// 	'description'		=> __('Add a banner block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'format-image',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'banner' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'carousel',
		// 	'title'				=> __('Carousel'),
		// 	'description'		=> __('Add a carousel'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'slides',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'carousel, slider' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'content',
		// 	'title'				=> __('Content block'),
		// 	'description'		=> __('Add a content block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'format-aside',
		// 	'align' 			=> 'full',
		// 	'mode' => 'auto',
		// 	'keywords'			=> array( 'content, journal' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'cta',
		// 	'title'				=> __('Call to action'),
		// 	'description'		=> __('Add a CTA block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'megaphone',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'cta, call to action' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'featured-space',
		// 	'title'				=> __('Featured space'),
		// 	'description'		=> __('Add featured space'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'admin-home',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'featured space, space' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'featured-journal',
		// 	'title'				=> __('Featured journal'),
		// 	'description'		=> __('Add featured journal'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'sticky',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'featured journal, journal' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'journals',
		// 	'title'				=> __('All Journals'),
		// 	'description'		=> __('Add all journals'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'calendar-alt',
        //     'align' 			=> 'full',
		// 	'keywords'			=> array( 'journals' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'image',
		// 	'title'				=> __('Image'),
		// 	'description'		=> __('Add a full width image'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'format-image',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'images, image' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'image-block',
		// 	'title'				=> __('Image block'),
		// 	'description'		=> __('Add an image block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'format-gallery',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'images, image' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'location-images',
		// 	'title'				=> __('Location images'),
		// 	'description'		=> __('Add location image slider'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'slides',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'images, slider, location images' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'logos',
		// 	'title'				=> __('Logos block'),
		// 	'description'		=> __('Add a logos block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'youtube',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'logos' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'manifesto',
		// 	'title'				=> __('Manifesto'),
		// 	'description'		=> __('Add a manifesto block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'media-document',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'manifesto' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'membership',
		// 	'title'				=> __('Membership block'),
		// 	'description'		=> __('Add a membership block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'universal-access',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'membership' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'space-description',
		// 	'title'				=> __('Space description'),
		// 	'description'		=> __('Add space description'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'menu',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'space, space description' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'space-cta',
		// 	'title'				=> __('Space call to action'),
		// 	'description'		=> __('Add a Space CTA block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'megaphone',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'cta, call to action. space cta' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'spaces',
		// 	'title'				=> __('All Spaces'),
		// 	'description'		=> __('Add all spaces'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'admin-home',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'spaces' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'text-block',
		// 	'title'				=> __('Text block'),
		// 	'description'		=> __('Add a standard text block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'text-page',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'content, text' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'intro-block',
		// 	'title'				=> __('Intro block'),
		// 	'description'		=> __('Add an intro text block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'text-page',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'content, text, intro' ),
		// 	'example'         => array(
		// 		'attributes' => array(
		// 			'mode' => 'preview',
		// 		),
		// 	),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'stat',
		// 	'title'				=> __('Stat'),
		// 	'description'		=> __('Add stat'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'admin-comments',
		// 	'keywords'			=> array( 'stat' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'image-text',
		// 	'title'				=> __('Image with text'),
		// 	'description'		=> __('Add an image with text block'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'id',
		// 	'keywords'			=> array( 'image with text, image, text with image, text' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'carousel',
		// 	'title'				=> __('Carousel'),
		// 	'description'		=> __('Add a carousel'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'slides',
		// 	'keywords'			=> array( 'carousel, slider' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'role-models',
		// 	'title'				=> __('Role models'),
		// 	'description'		=> __('Add some role models'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'smiley',
		// 	'keywords'			=> array( 'role model, people' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'downloads',
		// 	'title'				=> __('Downloads'),
		// 	'description'		=> __('Add downloads'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'download',
		// 	'keywords'			=> array( 'download, file' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'events',
		// 	'title'				=> __('All Events'),
		// 	'description'		=> __('Add all events'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'calendar-alt',
        //     'keywords'			=> array( 'events' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'columns',
		// 	'title'				=> __('Two columns'),
		// 	'description'		=> __('Add two columns'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'forms',
        //     'keywords'			=> array( 'two, 2, cols, columns' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'featured-carousel',
		// 	'title'				=> __('Featured Carousel'),
		// 	'description'		=> __('Add a featured carousel'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'slides',
		// 	'keywords'			=> array( 'carousel, featured carousel' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'spacer',
		// 	'title'				=> __('Spacer'),
		// 	'description'		=> __('Add a spacer'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'align-wide',
		// 	'keywords'			=> array( 'spacer' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'project-details',
		// 	'title'				=> __('Project details'),
		// 	'description'		=> __('Add project details'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'format-aside',
		// 	'keywords'			=> array( 'project, project details' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'pull-out',
		// 	'title'				=> __('Pull out'),
		// 	'description'		=> __('Add pull out'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'admin-comments',
		// 	'keywords'			=> array( 'pull out' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'next-project',
		// 	'title'				=> __('Next project'),
		// 	'description'		=> __('Add next project link'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'category',
		// 	'keywords'			=> array( 'project, next project' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'form',
		// 	'title'				=> __('Form'),
		// 	'description'		=> __('Add a form'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'email-alt',
		// 	'keywords'			=> array( 'email, form' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'map',
		// 	'title'				=> __('Map'),
		// 	'description'		=> __('Add a map'),
		// 	'render_callback'	=> 'wrec_acf_block_render_callback',
		// 	'category'			=> 'wrec-blocks',
		// 	'icon'				=> 'location-alt',
		// 	'keywords'			=> array( 'map, location' )
		// ));
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
		// 'acf/accordion',
		// 'acf/banner',
		// 'acf/carousel',
		// 'acf/content',
		// 'acf/featured-space',
		// 'acf/featured-journal',
		// 'acf/intro-block',
		// 'acf/image',
		// 'acf/image-block',
		// 'acf/image-slider',
		// 'acf/journals',
		// 'acf/logos',
		// 'acf/location-images',
		// 'acf/manifesto',
		// 'acf/membership',
		// 'acf/text-block',
		// 'acf/space-cta',
		// 'acf/spaces',
		// 'acf/space-description'
	);
 
}


 // add default image setting to ACF image fields
  // let's you select a default image
  // this is simply taking advantage of a field setting that already exists
  
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