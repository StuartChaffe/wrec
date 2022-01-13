<header class="global-header">
	<div class="global-header--inner">
		<div class="global-header--logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="Whitehead Ross Logo" /></a></div>

		<div class="global-header--content">
			<?php the_field('strapline_text', 'options'); ?><a href="/search" class="icon-search"><svg class="icon-search" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="currentColor" stroke-width="1" fill="none" fill-rule="evenodd">
					<g class="icon-search--stroke" transform="translate(-754.000000, -308.000000)" stroke-width="2">
						<g transform="translate(232.000000, 157.000000)">
							<g transform="translate(0.000000, 134.000000)">
								<g transform="translate(523.000000, 18.000000)">
									<circle cx="6.5" cy="6.5" r="6.5"></circle>
									<line x1="17.3000005" y1="17.3000005" x2="11.7000005" y2="11.7000005" stroke-linecap="round" stroke-linejoin="round"></line>
								</g>
							</g>
						</g>
					</g>
				</g>
			</svg></a>
			<nav class="global-header--nav global-header--nav-desktop"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>
		</div>
		
		<div class="global-header--logo-2"><img src="<?php echo get_template_directory_uri(); ?>/src/images/ESF-logo.jpg" alt="European Union Logo" /></div>
	</div>
</header>
<nav class="global-header--nav global-header--nav-mobile"><?php wp_nav_menu( array('theme_location' => 'primary') ); ?></nav>