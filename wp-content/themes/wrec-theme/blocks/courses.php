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
		'order' => 'DESC'
	));
?>

<?php if ($courses->have_posts()) : ?> 
	<section class="filter courses theme--pink">
		<div class="post-selection">
			<div class="post-selection--filter">
				<button class="btn btn--filter" data-toggler="#filter-controls" data-toggle-clear="true" aria-label="Toggle the filter" aria-expanded="false"><span class="hidemobile">Filter</span>
				<svg width="22px" height="17px" class="icon-filter hidedesktop" viewBox="0 0 22 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="Group" transform="translate(1.000000, 0.000000)">
							<line x1="0.5" y1="2.5" x2="19.5" y2="2.5" id="Line" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></line>
							<line x1="0.5" y1="8.5" x2="19.5" y2="8.5" id="Line" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></line>
							<line x1="0.5" y1="14.5" x2="19.5" y2="14.5" id="Line" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></line>
							<rect id="Rectangle" fill="#FFFFFF" x="5" y="0" width="5" height="5" rx="2.5"></rect>
							<rect id="Rectangle" fill="#FFFFFF" x="12" y="6" width="5" height="5" rx="2.5"></rect>
							<rect id="Rectangle" fill="#FFFFFF" x="3" y="12" width="5" height="5" rx="2.5"></rect>
						</g>
					</g>
				</svg></button>
			</div>
			<div class="search-form">
				<label for="search" class="sr-only">Search</label>
				<input type="text" name="s" id="filter-input" class="search-form__input" placeholder="Search" />
				<button type="submit" class="search-form__submit"><span class="sr-only">Search</span><svg class="icon-search" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="white" stroke-width="1" fill="none" fill-rule="evenodd">
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
				<div data-filter-group>
					<p>Type:</p>
					<div class="filter__controls--wrap">
						<?php the_filter_items( 'wrectype' ); ?>
					</div>
				</div>
				<!-- <div data-filter-group>
					<p>Categories:</p>
					<?php the_filter_items( 'wreccategories' ); ?>
				</div> -->
				<div data-filter-group>
					<p>Location:</p>
					<div class="filter__controls--wrap">
						<?php the_filter_items( 'location' ); ?>
					</div>
				</div>

				<div class="filter__controls--reset">
					<button type="reset" data-filter="all">Reset</button>
					<button class="btn--filter" data-toggler="#filter-controls" data-toggle-clear="true" aria-label="Toggle the filter" aria-expanded="false">Close</button>
				</div>
			</div>
			
		</form>

		<div class="filter__targets link-list" id="filter">

			<?php while($courses->have_posts()) : $courses->the_post(); ?>

				<?php
					$images = get_field('images', get_the_ID());
					$image = get_field('square_image', get_the_ID());
					$locations = get_filter_classes( 'location' );
					$types = get_filter_classes( 'wrectype' );
					$categories = get_filter_classes( 'wreccategories' );
					$posttype = get_post_type();
				?>
				<div class="mix <?php echo $locations; echo $types; echo $categories; echo $posttype; ?> link-list-item" data-title="<?php the_title(); ?>">
					<a href="<?php esc_url( the_permalink() ); ?>" class="link-list-item--link" title="Permalink to <?php the_title(); ?>">
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
