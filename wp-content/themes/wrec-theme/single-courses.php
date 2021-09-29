<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$image = get_field('large_image', get_the_ID());
?>
	<?php if ($image) { ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php } ?>
	<main class="main">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</main>	
<?php endwhile; ?>

<?php get_footer(); ?>