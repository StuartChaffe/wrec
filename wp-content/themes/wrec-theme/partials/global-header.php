<header class="global-header">
	<div class="global-header--inner">
		<div class="global-header--logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Whitehead Ross Logo" /></a></div>

		<div class="global-header--content">
			<?php the_field('strapline_text', 'options'); ?>
			<nav class="global-header--nav global-header--nav-desktop"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>
		</div>
		
		<div class="global-header--logo-2"><img src="<?php echo get_template_directory_uri(); ?>/src/images/ESF-logo.png" alt="European Union Logo" /></div>
	</div>
</header>
<nav class="global-header--nav global-header--nav-mobile"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>