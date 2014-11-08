<?php
function fashioninside_selena_get_the_home_page_header_h1_text ($header) {
	return get_option ('blogname');
}
add_filter ('selena_get_the_home_page_header_h1_text', 'fashioninside_selena_get_the_home_page_header_h1_text');
?>