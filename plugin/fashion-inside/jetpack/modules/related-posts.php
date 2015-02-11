<?php
function fashion_inside_jetpack_remove_rp () {
	$jprp = Jetpack_RelatedPosts::init();
	remove_filter (
		'the_content',
		array ($jprp, 'filter_add_target_to_dom'),
		40
	);
}

function fashion_inside_jetpack_module_loaded_related_posts () {
	add_action ('wp', 'fashion_inside_jetpack_remove_rp', 20);
}
add_action ('jetpack_module_loaded_related-posts', 'fashion_inside_jetpack_module_loaded_related_posts');

function fashion_inside_network_jetpack_relatedposts_post_category_context ($post_cat_context, $category) {
	return sprintf(
		__ ( 'Category &bdquo;%s&ldquo;', 'fashion_inside' ),
		$category->name
	);
}
add_filter ('jetpack_relatedposts_post_category_context', 'fashion_inside_network_jetpack_relatedposts_post_category_context', 10, 2);

function fashion_inside_network_jetpack_relatedposts_post_tag_context ($post_tag_context, $tag) {
	return sprintf(
		__ ( 'Tag &bdquo;%s&ldquo;', 'fashion_inside' ),
		$tag->name
	);
}
add_filter ('jetpack_relatedposts_post_tag_context', 'fashion_inside_network_jetpack_relatedposts_post_tag_context', 10, 2);
