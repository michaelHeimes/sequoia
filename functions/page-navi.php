<?php // Borrowed with love from FoundationPress
	function joints_page_navi() {
		global $wp_query;
		$big = 999999999; // This needs to be an unlikely integer
		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => true,
		    'prev_text' => __( '<svg width="17px" height="12px" viewBox="0 0 17 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>page-left</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="page-left" transform="translate(1.060000, 0.530000)" stroke="#000000" stroke-width="1.5">
            <g id="Group_672" transform="translate(7.971000, 5.356000) rotate(180.000000) translate(-7.971000, -5.356000) translate(0.000000, 0.000000)">
                <g id="Group_96" transform="translate(0.000000, -0.000000)">
                    <g id="Group_95" transform="translate(0.000000, 4.856000)">
                        <line x1="0" y1="0.5" x2="15.8" y2="0.5" id="Line_1088"></line>
                    </g>
                    <polyline id="Path_35" points="10.586 0 15.942 5.356 10.586 10.712"></polyline>
                </g>
            </g>
        </g>
    </g>
</svg>', 'jointswp' ),
		    'next_text' => __( '<svg width="17px" height="12px" viewBox="0 0 17 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>page-right</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="page-right" transform="translate(0.000000, 0.531000)" stroke="#000000" stroke-width="1.5">
            <g id="Group_95" transform="translate(0.000000, 4.856000)">
                <line x1="0" y1="0.5" x2="15.8" y2="0.5" id="Line_1088"></line>
            </g>
            <polyline id="Path_35" points="10.586 0 15.942 5.356 10.586 10.712"></polyline>
        </g>
    </g>
</svg>', 'jointswp' ),
			'type' => 'list',
		) );
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'>", $paginate_links );
		$paginate_links = str_replace( '</span>', '</a>', $paginate_links );
		$paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li><span class='dots'>&hellip;</span></li>", $paginate_links );
		$paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );
		// Display the pagination if more than one page is found.
		if ( $paginate_links ) {
			echo '<div class="page-navigation">';
			echo $paginate_links;
			echo '</div><!--// end .pagination -->';
		}
	}
