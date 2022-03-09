<?php
/**
* The template used for displaying an accordion.
*/
?>
<!-- <section>
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
</section> -->


<?php
/**
* The template used for displaying an accordion.
*/
?>
<section>
	<?php if( have_rows('accordion') ): ?>
	<div class="accordion">
		<?php while( have_rows('accordion') ): the_row();
			$title = get_sub_field('accordion_title', false, false);
			$content = get_sub_field('accordion_content');
		?>
			<div class="accordion__item">
				<button aria-expanded="false" class="accordion__handle" aria-controls="accordion-<?php echo sanitize_title($title); ?>" id="<?php echo sanitize_title($title); ?>">
					<a href="#<?php echo sanitize_title($title); ?>" class="accordion__title"><?php echo $title; ?> <svg class="icon icon--arrow"><use xlink:href="#arrow"></use></svg></a>
				</button>
				<div class="accordion__body" id="accordion-<?php echo sanitize_title($title); ?>" role="region" aria-labelledby="<?php echo sanitize_title($title); ?>">
					<?php echo $content ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
</section>

