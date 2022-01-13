<?php
// Template Name: Search
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<main class="main search">
	<?php the_content(); ?>
	<?php include 'searchform.php';?>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>