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
	?>
		<div class="logos-item">
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<div class="logos-item--content">
				thisis s sdgfiun dfgli sudbfguoisbdfogusdfog
			</div>
		</div>
	<?php endwhile; ?>
	</div>
</section>