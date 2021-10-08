<?php
/**
* The template used for displaying an image block.
*/
$image = get_field('image');
?>

<section class="image">
    <img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</section>