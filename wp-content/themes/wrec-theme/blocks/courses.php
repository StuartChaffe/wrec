<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $courses = new WP_Query( array(
		'post_type' => 'courses',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $paged,
    ));

	global $wp_query;
	$tmp_query = $wp_query;
	$wp_query = null;
	$wp_query = $courses;
	$counter = 1;
?>
<?php if ($courses->have_posts()) : ?>
	<section class="courses link-list">
		<?php while($courses->have_posts()) : $courses->the_post(); ?>
		<?php
			$location = get_field( 'courses-location', get_the_ID());
			$rooms = get_field( 'courses-rooms', get_the_ID());
			$price = get_field( 'courses-price', get_the_ID());
			$shortdesc = get_field( 'courses-short-desc', get_the_ID());
			$images = get_field('courses-images', get_the_ID());

			// Image
			// $image = get_field( 'post-image', $post);
			// $alt = $image['alt'];
			// $size = 'Square-large';
			// $thumb = $image['sizes'][ $size ];
			// $featuredimage = get_field( 'post-featured-image', $post);
		?>
		<a href="<?php esc_url( the_permalink() ); ?>" class="link-list-item" title="Permalink to <?php the_title(); ?>">
			<div class="link-list-item--content">
				<p><?php the_title(); ?></p>
			</div>

			<?php if ( $shortdesc ) { ?>
				<p class="lead"><?php echo $shortdesc ?></p>
			<?php } ?>
			<?php if ( $location ) { ?>
				<p><?php echo $location ?></p>
			<?php } ?>
			<?php if ( $rooms ) { ?>
				<p><?php echo $rooms ?> Rooms</p>
			<?php } ?>
			<?php if ( $price ) { ?>
				<p>£<?php echo $price ?> pcm</p>
			<?php } ?>
		</a>
			
		<?php endwhile; wp_reset_query(); ?>
	</section>
<?php endif; ?>
