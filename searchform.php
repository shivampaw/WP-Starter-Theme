<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label class="sr-only" for="search"><?php echo _x( 'Search for:', 'label', 'shivampaw' ); ?></label>
		<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search Site &hellip;', 'placeholder', 'shivampaw' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</div>
</form>