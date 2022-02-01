<?php
/**
* The template used for displaying an accordion.
*/
// TITLE? $content = get_field( 'accordion_content');
?>
<section>
	<?php if( have_rows('accordion') ): ?>
		<ul class="accordion">
		<?php while( have_rows('accordion') ): the_row();
			$title = get_sub_field('accordion_title', false, false);
			$content = get_sub_field('accordion_content');
		?>
			<li>
				<button class="accordion__title" aria-expanded="false"><?php echo $title ?> <svg class="icon icon--arrow"><use xlink:href="#arrow"></use></svg></button>
				<div class="accordion__content">
					<?php echo $content ?>
				</div>
			</li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</section>
