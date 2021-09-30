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
		<p><strong>Written by: <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?></strong></p>
		<?php the_content(); ?>
		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$posts = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'DESC',
				'paged' => $paged,
			));

			global $wp_query;
			$tmp_query = $wp_query;
			$wp_query = null;
			$wp_query = $posts;
			$counter = 1;
		?>
		<?php if ($posts->have_posts()) : ?>
			<section class="posts link-list theme--green">
				<div class="link-list--title"><h2>Our Blogs</h2></div>
				<?php while($posts->have_posts()) : $posts->the_post(); ?>
				<?php
					$images = get_field('images', get_the_ID());
					$image = get_field('square_image', get_the_ID());
				?>
				<a href="<?php esc_url( the_permalink() ); ?>" class="link-list-item" title="Permalink to <?php the_title(); ?>">
					<div class="link-list-item--image">
						<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<div class="link-list-item--content">
						<p><?php the_title(); ?></p>
					</div>
				</a>
					
				<?php endwhile; wp_reset_query(); ?>
				<a href="/posts" class="btn">Read More</a>
			</section>
		<?php endif; ?>

	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>