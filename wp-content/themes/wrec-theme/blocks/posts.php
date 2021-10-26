<?php
/**
* The template used for displaying all posts.
*/
?>
<?php
	$posts = new WP_Query( array(
		'post_type' => 'post',
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

<?php if ($posts->have_posts()) : ?>
	<section class="filter posts theme--blue">
		<div class="post-selection">
			<div class="post-selection--filter">
				<button class="btn btn--filter" data-toggler="#filter-controls" data-toggle-clear="true" aria-label="Toggle the filter" aria-expanded="false">Filter</button>
			</div>
			<div class="search-form">
				<label for="search" class="sr-only">Search</label>
				<input type="text" name="s" id="filter-input" class="search-form__input" placeholder="Search" />
				<button type="submit" class="search-form__submit"><span class="sr-only">Search</span><svg class="icon-search" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="white" stroke-width="1" fill="none" fill-rule="evenodd">
					<g class="icon-search--stroke" transform="translate(-754.000000, -308.000000)" stroke-width="2">
						<g transform="translate(232.000000, 157.000000)">
							<g transform="translate(0.000000, 134.000000)">
								<g transform="translate(523.000000, 18.000000)">
									<circle cx="6.5" cy="6.5" r="6.5"></circle>
									<line x1="17.3000005" y1="17.3000005" x2="11.7000005" y2="11.7000005" stroke-linecap="round" stroke-linejoin="round"></line>
								</g>
							</g>
						</g>
					</g>
				</g>
			</svg></button>
			</div>
		</div>
		<form class="filter__controls" id="filter-controls">
			<div class="filter__controls--options">
			<div class="filter__controls--reset">
				<button type="reset" data-filter="all">Show all</button>
			</div>
				<div data-filter-group>
					<p>Categories:</p>
					<?php the_filter_items( 'category' ); ?>
				</div>
			</div>
		</form>

		<div class="filter__targets link-list">

			<?php while($posts->have_posts()) : $posts->the_post(); ?>

				<?php
					$images = get_field('images', get_the_ID());
					$image = get_field('square_image', get_the_ID());
					$categories = get_filter_classes( 'category' );
				?>
				<div class="mix <?php echo $categories; ?> link-list-item">
					<a href="<?php esc_url( the_permalink() ); ?>" class="link-list-item--link" title="Permalink to <?php the_title(); ?>" data-title="<?php the_title(); ?>">
						<div class="link-list-item--image">
							<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
						<div class="link-list-item--content">
							<p><?php the_title(); ?></p>
						</div>
					</a>
				</div>
				
			<?php endwhile; wp_reset_query(); ?>
		
		</div>

		<div class="mixitup-page-list"></div>
		
	</section>
<?php endif; ?>