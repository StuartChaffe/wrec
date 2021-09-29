<?php
/**
* The template used for displaying a title block.
*/
$content = get_field( 'title_content');
?>

<section class="title-block">
	<?php if ( $content['title']) { ?>
		<h1><?php echo $content['title']; ?></h1>
	<?php } ?>
	<?php if ( $content['text']) { ?>
		<?php echo $content['text']; ?>
	<?php } ?>
</section>