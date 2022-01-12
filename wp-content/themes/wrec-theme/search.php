<?php get_header(); ?>
<main class="main search">
<?php if ( have_posts() ): ?>
	<?php include 'searchform.php';?>
	<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>

	<div class="search-results">
		<p>We found <?php echo $total_results; ?> results for <strong>'<?php echo get_search_query(); ?>'</strong>:</p>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="search-results-item">
				<h4><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
				<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>">View page <svg class="icon icon--arrow"><use xlink:href="#arrow"></use></svg></a>
			</div>
		<?php endwhile; ?>
	</div>
	<?php else: ?>
	
	<h2>No results found for '<?php echo get_search_query(); ?>'</h2>

<?php endif; ?>
</main>
<?php get_footer(); ?>