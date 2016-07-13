<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

		<input type="search" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		<button class="search-submit">Search
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	
</form>
