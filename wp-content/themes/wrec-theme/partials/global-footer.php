<?php
	$contacttitle = get_field( 'footer_contact_title', 'options');
	$socialtitle = get_field( 'footer_social_title', 'options');
	$policy = get_field( 'footer_social_content', 'options');
	$menutitle = get_field( 'footer_menu_title', 'options');
	$copyright = get_field( 'copyright', 'options');
?>

<footer class="global-footer">
	<div class="global-footer__inner">
		<div class="global-footer--logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Whitehead Ross Logo" /></a></div>

		<div class="global-footer--content">
			<div class="global-footer--contacts">
				<h5><?php echo $contacttitle ?></h5>
				<div class="global-footer--contacts-list">
				<?php if( have_rows('location', 'options') ): ?>
					<?php while( have_rows('location', 'options') ): the_row();
						$name = get_sub_field('location_name');
						$tel = get_sub_field('location_tel');
						$email = get_sub_field('location_email');
					?>
					<div class="global-footer--contacts-list-item">
						<p><?php echo $name ?>: <?php echo $tel ?></p>
						<a href="mailto:<?php echo $email ?>"><p><?php echo $email ?></p></a>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="global-footer--links">
				<div class="global-footer--links-social">
					<h5><?php echo $socialtitle ?></h5>
					<ul class="social-links">
					<?php if(get_field('facebook', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('twitter', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('linkedin', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('instagram', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('youtube', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
					<?php endif; ?>
					
					</ul>
					<?php echo $policy ?>
				</div>
				<div class="global-footer--links-web">
					<h5><?php echo $menutitle ?><h5>
					<nav class="global-footer--nav"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>	
				</div>
			</div>
		</div>

		<div class="global-footer--copy">
			<p>Copyright &copy; <?php echo date('Y'); ?> <?php echo $copyright ?></p>
		</div>
	</div>
</footer>
