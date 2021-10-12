<?php
/**
* The template used for displaying all posts.
*/
?>
<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$posts = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
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
	<section class="posts link-list theme--blue">
		<div class="post-selection">
			<div class="post-selection--filter">
				<button class="btn">Filter</button>
			</div>
			<?php get_search_form(); ?>
		</div>
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
		<div class="pagination">
			<nav class="pagination-nav">
				<?php pagination_bar(); ?>
			</nav>
		</div>
		
	</section>
<?php endif; ?>