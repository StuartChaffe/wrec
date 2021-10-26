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
		$courses = get_field('programme_courses');
		$title = get_field('programme_courses_title');
	?>
		<?php if( $courses ) { ?>
		<section class="courses link-list theme--blue">
			<div class="link-list--title"><?php if( $title ) { ?><h2><?php echo $title; ?></h2><?php } else { ?><h2>Courses in this programme</h2> <?php } ?></div>
			<?php foreach( $courses as $post ) { ?>
			<?php setup_postdata($post); ?>
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
			<?php } ?>
			</div>
		</section>
   		<?php wp_reset_postdata(); ?>
		<?php } ?>
	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>