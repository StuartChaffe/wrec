<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$image = get_field('large_image', get_the_ID());
	$imagesquare = get_field('square_image', get_the_ID());
	$show = get_field('show');
	$title = get_field('page_title');
	$bkg = get_field('title_bkg');
?>
<?php if ($image) { ?>
	<section class="banner">
		<img loading="lazy" class="hidemobile" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<img loading="lazy" class="hidedesktop" src="<?php echo $imagesquare['url']; ?>" alt="<?php echo $imagesquare['alt']; ?>" />
	</section>
<?php } ?>
<?php if ($show == '1' ) { ?>
<section class="<?php echo $bkg; ?>">
	<div class="post-title">
		<h1><?php the_title(); ?></h1>
	</div>
</section>
<?php } ?>

	<main class="main">
		<?php the_content(); ?>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>