<?php
function fashion_inside_shortcode_price ($attrs, $content = null) {
	$html = '';

	if (!empty ($attrs['value'])) {

		$attrs = shortcode_atts (
			array (
				'value'	   => '',
				'currency' => 'USD',
			),
			$attrs,
			'price'
		);

		$html = '<span class="price-value">' . number_format (
				(float)$attrs['value'],
				((float)$attrs['value'] == (int)$attrs['value'] ? 0 : 2),
				_x ('.', 'The separator for the decimal point.', 'fashion_inside'),
				_x (',', 'The thousands separator.', 'fashion_inside')
			) . '</span>';


		switch ($attrs['currency']) {
			case "RUB":
				$currency_sign = _x ('₽', 'The Russian Ruble mark', 'fashion_inside');
				break;

			case "BYR":
				$currency_sign = _x ('Br', 'The Belarusian Ruble mark', 'fashion_inside');
				break;

			case "EUR":
				$currency_sign = _x ('€', 'The Euro mark', 'fashion_inside');
				break;

			case "USD":
			default:
				$currency_sign = _x ('$', 'The United States dollar mark', 'fashion_inside');
				break;
		}
		$html .= ' <span class="price-currency">' . $currency_sign . '</span>';


		$html = '<span class="price-content">' . $html . '</span>';

		if ($content) {
			$html .= '<span class="price-caption">' . $content .'</span>';
		}

		$html = '<span class="price">' . $html . '</span>';
	}

	return $html;
}
add_shortcode ('price', 'fashion_inside_shortcode_price');
