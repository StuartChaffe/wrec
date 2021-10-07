<?php
/**
* The template used for displaying locations.
*/
$title = get_field('locations_title');
?>


<?php if( have_rows('location', 'options') ): ?>
	<section>
		<?php echo $title ?>
		<div class="locations">
		<?php while( have_rows('location', 'options') ): the_row();
			$name = get_sub_field('location_name');
			$tel = get_sub_field('location_tel');
			$email = get_sub_field('location_email');
		?>
			<div class="locations-item">
				<p><?php echo $name ?>: <?php echo $tel ?></p>
				<a href="mailto:<?php echo $email ?>"><p><?php echo $email ?></p></a>
			</div>
		<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>