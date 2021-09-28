<?php
/**
* The template used for displaying a testimonial.
*/
$quote = get_field('testimonial_quote');
$author = get_field('testimonial_author');
$bkg = get_field('bkg');
?>

<section class="testimonial <?php echo $bkg; ?>">
	<?php if ( $quote ) { ?><p class="lead"><strong><?php echo $quote; ?></strong></p><?php } ?>
	<p><?php if ( $author ) { ?><?php echo $author; ?><?php } ?></p>
</section>