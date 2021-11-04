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
		<?php
			$courses = new WP_Query( array(
				'post_type' => 'courses',
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'DESC',
			));

			$counter = 1;
			$related = get_field('related_content');
			$globaltitle = get_field( 'featured_courses_title', 'options' );
			$globalbutton = get_field( 'featured_courses_button', 'options' );
		?>
		<?php if ($courses->have_posts()) { ?>
			<section class="courses link-list theme--blue">
				<div class="link-list--title"><h2><?php if ($globaltitle) { ?><?php echo $globaltitle; ?><?php } elseif ($related['title']) { ?><?php echo $related['title']; ?><?php } else { ?>More Courses<?php } ?></h2></div>
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
				<div class="link-list--button">
					<a href="/courses" class="btn"><?php if ($globalbutton) { ?><?php echo $globalbutton; ?><?php } elseif ($related['button']) { ?><?php echo $related['button'] ?><?php } else { ?>Read More<?php } ?></a>
				</div>
			</section>
		<?php } ?>
	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>