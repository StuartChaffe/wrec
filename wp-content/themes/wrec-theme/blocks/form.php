<?php
/**
* The template used for displaying a form.
*/
$form = get_field('form');
$bkg = get_field('bkg');
?>

<section class="form <?php echo $bkg; ?>">
    <?php echo do_shortcode($form); ?>
</section>