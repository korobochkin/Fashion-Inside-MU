<?php
function fashioninside_clean_seo_by_yoast ($roles) {
	$roles = array ('administrator');
	return $roles;
}
add_filter ('wpseo_bulk_edit_roles', 'fashioninside_clean_seo_by_yoast');

function fashioninside_jp_admin_bar_seo_cleanup () {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu ('wpseo-menu');
}
add_filter ('wp_before_admin_bar_render', 'fashioninside_jp_admin_bar_seo_cleanup');