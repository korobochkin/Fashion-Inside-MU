<?php
function fashioninside_clean_seo_by_yoast ($roles) {
	$roles = array ('administrator');
	return $roles;
}
add_filter ('wpseo_bulk_edit_roles', 'fashioninside_clean_seo_by_yoast');

/*
 * Remove admin bar stuff and dequeue style for this
 * wordpress-seo/inc/wpseo-non-ajax-functions.php:538
 *
 * This actions attached via add_action( 'plugins_loaded', 'wpseo_init', 14 );
 * wordpress-seo/wp-seo-main.php:404
 */
function fashion_inside_remove_wpseo_admin_bar_css () {
	remove_action ('admin_bar_menu', 'wpseo_admin_bar_menu', 95);
	remove_action ('wp_enqueue_scripts', 'wpseo_admin_bar_css');
}
add_action ('plugins_loaded', 'fashion_inside_remove_wpseo_admin_bar_css', 20);
