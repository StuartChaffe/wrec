<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$image = get_field('large_image', get_the_ID());
	$imagesquare = get_field('square_image', get_the_ID());
	$author = get_field('author', get_the_ID());
	$featuredposts = get_field( 'select_posts' );
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
		<?php if ($author) { ?><div class="post-meta"><p><strong>Written by: <?php echo $author; ?></strong></p> <p><strong><?php echo do_shortcode('[rt_reading_time label="Read time:" postfix="mins" postfix_singular="min"]'); ?></strong></p></div><?php } ?>
		<?php the_content(); ?>
		

		<?php if ( has_blocks( $featuredposts ) ) { ?>
			I DONT HAVE ANY
		<?php } ?>

		<section class="posts link-list theme--green">
			<div class="link-list--title"><h2>Our Blogs</h2></div>
			<?php
				$the_query = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'orderby' => 'date',
					'order' => 'DESC',
				));
			?>
		
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
			<div class="link-list--button">
				<a href="/blog" class="btn">Read More</a>
			</div>
		</section>

	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>