<?php
/**
* The template used for displaying a cta block.
*/
$cta = get_field('cta');
$bkg = get_field('bkg');
?>

<section class="cta <?php echo $bkg; ?>">
	<?php if ($cta['content'] ) { ?>
		<?php echo $cta['content']; ?>
	<?php } ?>
	<?php if ($cta['button'] ) { ?>
		<a class="btn" href="<?php echo $cta['button']['url']; ?>"><?php echo $cta['button']['title']; ?></a>
	<?php } ?>
</section>