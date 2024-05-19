

		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<label>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
			</label>
			<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
		</form>


		<form class="class-name" action="">
			<input type="search" class="class-name" placeholder="Search" value="" title="Search" /> <!-- For Search form input -->
			<input type="submit" class="class-name" value="Search"/> <!-- For Search button/icon input -->
		</form>


		
		<div class="bwdsb-search-box-11">
        <div class="bwdsb-search-form">
            <form role="search" method="get" class="bwdsb-form" action="<?php echo home_url( '/' ); ?>">
                <input type="search" class="bwdsb-input-text" placeholder="<?php echo esc_attr( 'Search …', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ); ?>" />
                <button type="submit" class="bwdsb-search-btn fas fa-home"></button>
            </form>
        </div>
    </div>