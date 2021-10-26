<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$image = get_field('large_image', get_the_ID());
	$imagesquare = get_field('square_image', get_the_ID());
?>
<?php if ($image) { ?>
	<section class="banner">
		<img loading="lazy" class="hidemobile" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<img loading="lazy" class="hidedesktop" src="<?php echo $imagesquare['url']; ?>" alt="<?php echo $imagesquare['alt']; ?>" />
		<a href="/contact" class="btn btn--primary hidedesktop">Apply Now</a>
	</section>
<?php } ?>
	<section class="theme--pink">
		<div class="post-title">
			<h1><?php the_title(); ?></h1>
		<?php if ($image) { ?>
			<a href="/contact" class="btn hidemobile">Apply Now</a>
		<?php } else { ?>
			<a href="/contact" class="btn">Apply Now</a>
		<?php } ?>
		</div>
	</section>
	<main class="main">
		<?php the_content(); ?>

		<!-- <section class="cta">
			<p>Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet </p>
			<div class="cta--buttons">
				<a class="btn" href="/contact">Apply Now</a> or <a class="btn" href="/contact">Contact Us</a>
			</div>
		</section> -->

		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$courses = new WP_Query( array(
				'post_type' => 'courses',
				'posts_per_page' => 3,
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
			<section class="courses link-list theme--blue">
				<div class="link-list--title"><h2>More Courses</h2></div>
				<?php while($courses->have_posts()) : $courses->the_post(); ?>
				<?php
					$images = get_field('images', get_the_ID());
					$image = get_field('square_image', get_the_ID());
				?>
				<div class="link-list-item">
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
				<a href="/courses" class="btn">Read More</a>
			</section>
		<?php endif; ?>
	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>