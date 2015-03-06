<?php
function fashion_inside_shortcode_price ($attrs, $content = null) {
	$html = '';

	if ($attrs['value']) {

		$html = '<span class="price-value">' . number_format (
				(float)$attrs['value'],
				((float)$attrs['value'] == (int)$attrs['value'] ? 0 : 2),
				_x ('.', 'The separator for the decimal point.', 'fashion_inside'),
				_x (',', 'The thousands separator.', 'fashion_inside')
			) . '</span>';

		// Надо узнать можем ли мы так писать, т к нужной ячейки может не быть
		if ($attrs['currency']) {
			switch ($attrs['currency']) {
				case "RUB":
					$currency_sign = _x ('Rub', 'The Russian Ruble mark', 'fashion_inside');
					break;

				case "BYR":
					$currency_sign = _x ('Br', 'The Russian Ruble mark', 'fashion_inside');
					break;

				case "USD":
				default:
					$currency_sign = '$';
					break;
			}
			$html .= ' <span class="price-currency">' . $currency_sign . '</span>';
		}

		$html = '<span class="price-content">' . $html . '</span>';

		if ($content) {
			$html .= '<span class="price-caption">' . $content .'</span>';
		}

		$html = '<span class="price">' . $html . '</span>';
	}

	return $html;
}
add_shortcode ('price', 'fashion_inside_shortcode_price');
