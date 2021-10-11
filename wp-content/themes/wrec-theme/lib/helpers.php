<?php

/**
 * Display Post Blocks 
 */

function origin_display_post_blocks() {
	global $post;
	origin_pp( esc_html( $post->post_content ) );
}
// add_action( 'wp_footer', 'origin_display_post_blocks' );


/**
 * Handy function for seeing if a page is parent of child
 * Usage:
 * if ( is_tree(2) ) {
 *   // stuff
 * }
 * via http://css-tricks.com/snippets/wordpress/if-page-is-parent-or-child/
 */

function is_tree($pid){
	global $post;

	$ancestors = get_post_ancestors($post->$pid);
	$root = count($ancestors) - 1;
	$parent = $ancestors[$root];

	if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
	{
		return true;
	}
	else
	{
		return false;
	}
}



/**
 * SVG helper icon
 * Usage:
 */

function get_icon($icon) {
	return '<svg class="icon icon-' . $icon . '"><use xlink:href="#' . $icon . '"></use></svg>';
}


/** Add pagination */

function pagination_bar() {
	global $wp_query;
	$total_pages = $wp_query->max_num_pages;
	if ($total_pages > 1){
		$current_page = max(1, get_query_var('paged'));

		echo paginate_links(array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => 'page/%#%',
			'current' => $current_page,
			'total' => $total_pages,
			'prev_text' => '<span>< Last Page</span>',
			'next_text' => '<span>Next Page ></span>'
		));
	}
}