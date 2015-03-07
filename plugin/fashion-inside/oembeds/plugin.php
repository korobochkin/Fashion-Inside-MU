<?php
/*
 * Резиновые iframe повысоте
 * https://github.com/twbs/bootstrap/blob/master/less/responsive-embed.less
 */
function fashion_inside_embed_oembed_html_adaptive ($cache, $url, $attr, $post_ID) {
	if (
		strpos ($url, 'youtube', 6)
		||
		strpos ($url, 'vimeo', 6)
	) {
		$cache = '<div class="embed-responsive embed-responsive-16by9 embed-content">' . $cache . '</div>';
	}
	return $cache;
}
add_filter ('embed_oembed_html', 'fashion_inside_embed_oembed_html_adaptive', 10, 4);
