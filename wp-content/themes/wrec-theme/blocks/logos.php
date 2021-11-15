<?php
/**
* The template used for displaying a logos block.
*/
$title = get_field('title');
$number = get_field('in_row');
?>

<section>
	<h2><?php echo $title; ?></h2>
	<div class="logos <?php echo $number; ?>">
	<?php while( have_rows('images') ): the_row();
		$image = get_sub_field('image');
		$content = get_sub_field('content');
		$link = get_sub_field('link');
	?>
		<?php if ($link) { ?>
		<a href="<?php echo $link['url']; ?>" class="logos-item">
		<?php } else { ?>
		<div class="logos-item">
		<?php } ?>
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<div class="logos-item--content">
				<?php if ($content) { ?>
					<?php echo $content ?>
					<?php } else { ?>
					<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php } ?>
			</div>
		<?php if ($link) { ?>
		</a>
		<?php } else { ?>
		</div>
		<?php } ?>
	<?php endwhile; ?>
	</div>
</section>