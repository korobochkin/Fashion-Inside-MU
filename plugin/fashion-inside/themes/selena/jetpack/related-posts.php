<?php
function fashion_inside_network_themes_fashion_inside_related_posts ($content) {
	if (is_single ()) {
		$related = Jetpack_RelatedPosts::init()->get_target_html();
		return $content . '<div class="entry-meta-item">' . $related . '</div>';
	}
	return $content;
}

function fashion_inside_network_themes_fashion_inside_jetpack_module_loaded_related_posts () {
	add_filter ('fashion_inside_entire_entry_meta', 'fashion_inside_network_themes_fashion_inside_related_posts', 15);
}
add_action ('jetpack_module_loaded_related-posts', 'fashion_inside_network_themes_fashion_inside_jetpack_module_loaded_related_posts');

function fashion_inside_network_themes_fashion_inside_related_posts_headline ($headline) {
	return '<h3 class="jp-relatedposts-headline h4">' . __ ('Related posts', 'fashion_inside') . '</h3>';
}
add_filter ('jetpack_relatedposts_filter_headline', 'fashion_inside_network_themes_fashion_inside_related_posts_headline');
