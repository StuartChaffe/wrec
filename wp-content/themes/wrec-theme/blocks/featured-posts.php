<?php
/**
* The template used for displaying a featured posts block.
*/
$featuredposts = get_field( 'select_posts' );
$title = get_field( 'posts_title' );
$bkg = get_field('bkg');
?>


<?php if( $featuredposts ): ?>
	<section class="posts link-list <?php echo $bkg; ?>">
		<div class="link-list--title"><h2><?php echo $title ?></h2></div>
		<?php foreach( $featuredposts as $featuredpost ):
			$title = get_the_title($featuredpost);
			$desc = get_field( 'event_desc', $featuredpost);
			// $image = get_field( 'event_image', $featuredpost);
			$image = get_field('square_image', $featuredpost);
		?>

		<a href="<?php the_permalink($featuredpost); ?>" class="link-list-item" title="Permalink to <?php echo $title; ?>">
			<div class="link-list-item--image">
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<div class="link-list-item--content">
				<p><?php echo $title; ?></p>
			</div>
		</a>
	
	<?php endforeach; ?>
	<a href="/blog" class="btn">Read More</a>
	</section>
<?php endif; ?>
