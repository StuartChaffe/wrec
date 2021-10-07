<footer class="global-footer">
	<div class="global-footer__inner">
		<div class="global-footer--logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" alt="Whitehead Ross Logo" /></a></div>

		<div class="global-footer--content">
			<div class="global-footer--contacts">
				<h5>Contact Us</h5>
				<div class="global-footer--contacts-list">
					<div class="global-footer--contacts-list-item">
						<p>Brighton: 01273 281 981</p>
						<p>workforceskills@wrecltd.co.uk</p>
					</div>
					<div class="global-footer--contacts-list-item">
						<p>Brighton: 01273 281 981</p>
						<p>workforceskills@wrecltd.co.uk</p>
					</div>
					<div class="global-footer--contacts-list-item">
						<p>Brighton: 01273 281 981</p>
						<p>workforceskills@wrecltd.co.uk</p>
					</div>
					<div class="global-footer--contacts-list-item">
						<p>Brighton: 01273 281 981</p>
						<p>workforceskills@wrecltd.co.uk</p>
					</div>
					<div class="global-footer--contacts-list-item">
						<p>Brighton: 01273 281 981</p>
						<p>workforceskills@wrecltd.co.uk</p>
					</div>
					<div class="global-footer--contacts-list-item">
						<p>Brighton: 01273 281 981</p>
						<p>workforceskills@wrecltd.co.uk</p>
					</div>
				</div>
			</div>
			<div class="global-footer--links">
				<div class="global-footer--links-social">
					<h5>Follow us on...</h5>
					<ul class="social-links">
					<?php if(get_field('facebook', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('twitter', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('linkedin', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('instagram', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
					<?php endif; ?>
					<?php if(get_field('youtube', 'options')): ?>
						<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
					<?php endif; ?>
					
					</ul>
					<h5>Our Policies</h5>
				</div>
				<div class="global-footer--links-web">
					<h5>Website Pages<h5>
				</div>
			</div>
		</div>

		<div class="global-footer--copy">
			<p>Copyright &copy; <?php echo date('Y'); ?> Whitehead Ross Education and Consulting.</p>
		</div>
	</div>
</footer>
