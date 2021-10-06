<?php
/**
* The template used for displaying a page title.
*/
$title = get_field( 'title');
$bkg = get_field('bkg');
?>

<section class="title-block <?php echo $bkg; ?>">
<?php if ($title) { ?>
    <h1><?php echo $title; ?></h1>
<?php } else { ?>
    <h1><?php the_title(); ?></h1>
<?php } ?>
</section>