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
	</section>
<?php } ?>
	<section class="theme--green">
		<div class="post-title">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<main class="main">
		<div class="post-meta"><p><strong>Written by: <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?></strong></p> <p><strong><?php echo do_shortcode('[rt_reading_time label="Read time:" postfix="mins" postfix_singular="min"]'); ?></strong></p></div>
		<?php the_content(); ?>
		<?php
			$the_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 2,
				'orderby' => 'date',
				'order' => 'DESC',
			));
		?>
		<section class="posts link-list theme--green">
			<div class="link-list--title"><h2>Our Blogs</h2></div>
		
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
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
			<?php endwhile;?>
			<a href="/blog" class="btn">Read More</a>
		</section>

	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>