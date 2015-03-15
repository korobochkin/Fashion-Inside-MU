<?php
function fashion_inside_shortcode_wide_quote ($attrs, $content) {
	$content = trim ($content);
	if ($content) {
		$html = '';

		$attrs = shortcode_atts (
			array (
				'author' => null,
				'color'  => 'dark',
				'preset'  => null,
				'bgscheme' => 'color',
				'ratio'  => null,
				'vertical_align' => 'bottom',
				'background_image' => null,
				'background_color' => null
			),
			$attrs,
			'wide-quote'
		);


		// Текст цитаты и имя автора
		$html = '<div class="ratio"></div><div class="wide-quote-text"><div class="row"><div class="col-xs-3"><div class="wide-quote-quote" draggable="false" selectable="false">“</div></div><div class="col-xs-9"><p>' . $content . '</p>';

		if ($attrs['author']) {
			$html .= '<footer><p class="wide-quote-author">' . $attrs['author'] . '</p></footer>';
		}

		$html .= '</div></div></div>';


		// Classes
		$classes = 'wide-quote';
		if ($attrs['preset']) {
			$classes .= ' wide-quote-' . $attrs['preset'];
		}
		else {
			$classes .= ' wide-quote-' . $attrs['color'];
			$classes .= ' wide-quote-' . $attrs['bgscheme'];
		}
		if ($attrs['ratio']) {
			$classes .= ' wide-quote-' . $attrs['ratio'];
			$classes .= ' wide-quote-' . $attrs['vertical_align'];
		}
		$classes = 'class="' . $classes . '" ';


		// Styles Attrs
		$styles = '';
		if ($attrs['background_color']) {
			$styles = 'background-color:' . $attrs['background_color'] . ';';
		}
		// Если bgscheme установлена в photo или pattern.
		if ($attrs['background_image']) {
			$styles .= 'background-image: url(\'' . $attrs['background_image'] . '\');';
		}
		if ($styles) {
			$styles = 'style="' . $styles . '"';
		}

		$html = '<blockquote ' . $classes . $styles . '>' . $html . '</blockquote>';

		return $html;
	}
}
add_shortcode ('wide-quote', 'fashion_inside_shortcode_wide_quote');