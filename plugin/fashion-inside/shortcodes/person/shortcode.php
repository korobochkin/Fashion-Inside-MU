<?php
function fashion_inside_shortcode_person ($attrs, $content = null) {
	//$content = $content;
	$content = do_shortcode ($content);
	//return;
	if ($content) {
		 return '<div class="person_card"><div class="media">' . $content . '</div></div>';
	}
}
add_shortcode ('person', 'fashion_inside_shortcode_person');

function fashion_inside_shortcode_person_portrait ($attrs, $content = null) {
	$html = '<div class="media-left"><div class="person_portrait">';

	$content = trim ($content);

	if ($content) {
		$html .= $content;
	}
	else {
		$html .= '<img src="/human-face.png" width="150" height="150">';
	}

	$html .= '</div></div>';

	return $html;
}
//add_shortcode ('person_portrait', 'fashion_inside_shortcode_person_portrait');

function fashion_inside_shortcode_person_about ($attrs, $content = null) {
	if ($content) {
		return '<div class="media-body"><div class="person_about">' . do_shortcode ($content) . '</div></div>';
	}
}
//add_shortcode ('person_about', 'fashion_inside_shortcode_person_about');

function fashion_inside_shortcode_person_title ($attrs, $content = null) {
	if ($content) {
		return '<h3>' . $content . '</h3>';
	}
}
//add_shortcode ('person_title', 'fashion_inside_shortcode_person_title');

function fashion_inside_shortcode_person_position ($attrs, $content = null) {
	if ($content) {
		return '<p class="position">' . $content . '</p>';
	}
}
//add_shortcode ('person_position', 'fashion_inside_shortcode_person_position');

function fashion_inside_shortcode_person_description ($attrs, $content = null) {
	if ($content) {
		return '<p class="description">' . $content . '</p>';
	}
}
//add_shortcode ('person_desc', 'fashion_inside_shortcode_person_description');
