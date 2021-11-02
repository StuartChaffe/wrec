<?php
	function the_filter_items( $tax ) {
		$terms = get_terms( $tax );
		foreach ( $terms as $term ) {
			echo '<button type="button" data-toggle=".' . $term->slug . '">' . $term->name . '</button>';
		}
	}

	function get_filter_classes( $tax ) {
		$terms = get_the_terms(get_the_ID(), $tax);
		if ( !$terms ) {
			return;
		}
		$classes = '';
		foreach ( $terms as $term ) {
			$classes .= $term->slug . ' ';
		}
		return $classes;
	}