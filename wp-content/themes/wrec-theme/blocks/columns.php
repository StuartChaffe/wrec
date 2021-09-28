<?php
/**
* The template used for displaying two col block.
*/
$leftcol = get_field( 'left_column');
$rightcol = get_field( 'right_column');
?>

<section class="columns">
	<div class="columns-item <?php echo $leftcol['bkg']; ?>">
	<?php if ( $leftcol ) { ?>
		<?php echo $leftcol['content']; ?>
	<?php } ?>

	<?php if ($leftcol['button'] ) { ?>
		<a class="btn" href="<?php echo $leftcol['button']['url']; ?>"><?php echo $leftcol['button']['title']; ?></a>
	<?php } ?>
	</div>
	<div class="columns-item <?php echo $rightcol['bkg']; ?>">
	<?php if ( $rightcol ) { ?>
		<?php echo $rightcol['content']; ?>
	<?php } ?>
	<?php if ($rightcol['button'] ) { ?>
		<a class="btn" href="<?php echo $rightcol['button']['url']; ?>"><?php echo $rightcol['button']['title']; ?></a>
	<?php } ?>
	</div>
</section>