<?php
function fashion_inside_shortcode_person ($attrs, $content = null) {

	$attrs = shortcode_atts (
		array (
			'avatar_url' => '',
			'name'       => _x ('Anonymous', 'Anonymous person name', 'fashion_inside'),
			'position'   => ''
		),
		$attrs,
		'person'
	);

	if ($attrs['avatar_url']) {
		$html = '<div class="person_card"><div class="media"><div class="media-left"><div class="person_portrait"><img src="' . $attrs['avatar_url'] . '" width="150" height="150" class="img-responsive" alt="' . $attrs['name'] . '"></div></div>';


		$html .= '<div class="media-body media-middle"><div class="person_about"><h3>' . $attrs['name'] .'</h3>';

		if ($attrs['position']) {
			$html .= '<p class="position">' . $attrs['position'] . '</p>';
		}
		if ($content) {
			$html .= '<p class="description">' . $content . '</p>';
		}

		$html .= '</div></div></div></div>';



		return $html;
	}
}
add_shortcode ('person', 'fashion_inside_shortcode_person');
