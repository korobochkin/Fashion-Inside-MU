<?php
require WPMU_PLUGIN_DIR . '/fashion-inside/jetpack/modules/related-posts.php';

// Remove jetpack widgets css
function fashion_inside_remove_jetpack_styles () {
	wp_dequeue_style ('jetpack-widgets'); // Widgets
	wp_dequeue_style ('jetpack_related-posts');
}
add_action('wp_print_styles', 'fashion_inside_remove_jetpack_styles');
add_filter( 'jetpack_implode_frontend_css', '__return_false' );
?>