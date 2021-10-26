<?php
/**
* The template used for displaying all courses.
*/
?>
<?php
	$courses = new WP_Query( array(
		'post_type' => array('courses', 'programmes'),
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));

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
?>

<?php if ($courses->have_posts()) : ?>
	<section class="filter courses theme--pink">
		<div class="filter__controls">
			<button type="button" data-filter="all">All</button>
			<div data-filter-group>
				<p>Categories:</p>
				<?php the_filter_items( 'wreccategories' ); ?>
			</div>
			<div data-filter-group>
				<p>Location:</p>
				<?php the_filter_items( 'location' ); ?>
			</div>
			<div data-filter-group>
				<p>Type:</p>
				<?php the_filter_items( 'wrectype' ); ?>
			</div>
			<div>
				<p>Search:</p>
				<input type="text" id="filter-input" placeholder="Type here">
			</div>
		</div>

		<div class="filter__targets link-list">

			<?php while($courses->have_posts()) : $courses->the_post(); ?>

				<?php
					$images = get_field('images', get_the_ID());
					$image = get_field('square_image', get_the_ID());
					$locations = get_filter_classes( 'location' );
					$types = get_filter_classes( 'wrectype' );
					$categories = get_filter_classes( 'wreccategories' );
				?>

				<a href="<?php esc_url( the_permalink() ); ?>" class="mix <?php echo $locations; echo $types; echo $categories; ?> link-list-item" title="Permalink to <?php the_title(); ?>" data-title="<?php the_title(); ?>">
					<div class="link-list-item--image">
						<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<div class="link-list-item--content">
						<p><?php the_title(); ?></p>
					</div>
				</a>
				
			<?php endwhile; wp_reset_query(); ?>
		
		</div>

		<div class="mixitup-page-list"></div>

	</section>
<?php endif; ?>
