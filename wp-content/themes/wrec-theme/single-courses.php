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
	<section class="theme--pink">
		<div class="post-title">
			<h1><?php the_title(); ?></h1>
			<a href="" class="btn">Apply Now</a>
		</div>
	</section>
	<main class="main">
		<?php the_content(); ?>

		<div class="cta">
			<p>Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet </p>
			<div class="cta--buttons">
				<a class="btn" href="">Apply Now</a> or <a class="btn" href="/contact-us">Contact Us</a>
			</div>
		</div>
	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>