<form action="/" method="get">
	<fieldset>
		<span id="search-fields">
			<label for="search">Search</label>
			<input type="text" name="s" id="search-for" value="<?php the_search_query(); ?>" />
		</span>
		<a href="#search" id="search-submit"><i class="icon-search"></i></a>
	</fieldset>
</form>