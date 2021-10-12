<form action="<?php echo home_url( '/' ); ?>" method="get" class="search-form">
	<label for="search" class="sr-only">Search</label>
	<input type="text" name="s" id="search" class="search-form__input" placeholder="Search" value="<?php the_search_query(); ?>" />
	<button type="submit" class="search-form__submit"><span class="sr-only">Search</span><svg class="icon-search" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<g id="Page-1" stroke="white" stroke-width="1" fill="none" fill-rule="evenodd">
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
</svg></button>
</form>
