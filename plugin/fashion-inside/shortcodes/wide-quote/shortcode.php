<?php
function fashion_inside_shortcode_wide_quote ($attrs, $content) {
	$content = trim ($content);
	if ($content) {
		$attrs = shortcode_atts (
			array (
				'author'           => null,
				'preset'           => null,
				'bgscheme'         => 'color',
				'color'            => 'dark',
				'background_image' => null,
				'background_color' => null,
				'ratio'            => null,
				'vertical_align'   => 'bottom'
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


		$classes = 'wide-quote';
		$styles = '';

		// Если мы используем готовый набор стилей (фоновый цвет и цвет шрифта)
		if ($attrs['preset']) {
			$classes .= ' wide-quote-preset-' . $attrs['preset'];
		}
		// Используем собственный фон и цвет шрифта
		else {
			// Цвет шрифта
			$classes .= ' wide-quote-' . $attrs['color'];

			// Фоновый цвет, если он есть
			if ($attrs['background_color']) {
				$styles = 'background-color:' . $attrs['background_color'] . ';';
			}

			/*
			 * Фонова картинка, если есть.
			 * Здесь также должно быть условие
			 * if ($attrs['bgscheme'] == 'photo' || $attrs['bgscheme'] == 'pattern')
			 * но мы его не ставим для ускорения работы
			 * и договариваемся не указывать фоновую картинку, если bgscheme установлено в color.
			 */
			if ($attrs['background_image']) {
				$styles .= 'background-image: url(\'' . $attrs['background_image'] . '\');';
			}
		}

		// Цвет, паттерн или фото?
		$classes .= ' wide-quote-' . $attrs['bgscheme'];

		// Соотношение сторон и выравнивание
		if($attrs['ratio']) {
			$classes .= ' wide-quote-' . $attrs['ratio'];
			$classes .= ' wide-quote-' . $attrs['vertical_align'];
		}

		// Оборачиваем свойства в HTML-атрибуты
		$classes = 'class="' . $classes . '" ';
		$styles = 'style="' . $styles . '"';
		// Добавляем полученные атрибуты к HTML-тегу
		$html = '<blockquote ' . $classes . $styles . '>' . $html . '</blockquote>';

		return $html;
	}
}
add_shortcode ('wide-quote', 'fashion_inside_shortcode_wide_quote');