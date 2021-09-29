<?php
/**
* The template used for displaying all posts.
*/
?>
<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$news = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $paged,
	));

	global $wp_query;
	$tmp_query = $wp_query;
	$wp_query = null;
	$wp_query = $news;

	$counter = 1;
?>

<section class="posts">
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="posts-item">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="posts-item__image">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
			</div>
			<div class="posts-item__content">
				<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>">Read more ></a>
			</div>

			<?php } else { ?>
			<div class="posts-item__content--full">
				<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>">Read more ></a>
			</div>
		<?php } ?>
		</div>
	<?php endwhile; ?>
</section>