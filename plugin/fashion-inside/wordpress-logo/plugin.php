<?php
function fashioninside_remove_wp_logo () {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu ('wp-logo');
}
add_action ('wp_before_admin_bar_render', 'fashioninside_remove_wp_logo', 0);
?>