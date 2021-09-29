<?php
/**
* The template used for displaying text with image.
*/
$title = get_field('text_image_title');
$content = get_field('text_image_content');
?>

<?php if ($title) { ?><h2><?php echo $title; ?></h2><?php } ?>
<div class="text-image">
	<div class="text-image--content<?php if ( $content['image_position']  == 'text-image--image__left' ) { ?> text-image--content__right<?php } ?>">
		<?php echo $content['text']; ?>
	</div>
	<div class="text-image--image <?php echo $content['image_position']; ?>">
		<img loading="lazy" src="<?php echo $content['image']['url']; ?>" alt="<?php echo $content['image']['alt']; ?>" />
	</div>
</div>