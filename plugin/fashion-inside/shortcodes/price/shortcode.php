<?php
function fashion_inside_shortcode_price ($attrs) {
	$html = '';

	if ($attrs['value']) {
		$html = '<span class="price-value">' . number_format (
				(float)$attrs['value'],
				2,
				_x ('.', 'The separator for the decimal point.', 'fashion_inside'),
				_x (',', 'The thousands separator.', 'fashion_inside')
			) . '</span>';

		if ($attrs['currency']) {
			switch ($attrs['currency']) {
				case "RUB":
					$currency_sign = _x ('rub', 'The Russian Ruble mark', 'fashion_inside');
					break;

				case "USD":
				default:
					$currency_sign = '$';
					break;
			}
			$html .= '<span class="price-currency">' . $currency_sign . '</span>';
		}

		$html = '<span class="price-content">' . $html . '</span>';

		// Надо узнать можем ли мы так писать, т к нужной ячейки может не быть
		if ($attrs['caption']) {
			if ($attrs['caption_link']) {
				$html .= '<span class="price-caption"><a href="' . $attrs['caption_link'] . '">' . $attrs['caption'] . '</a></span>';
			}
			else {
				$html .= '<span class="price-caption">' . $attrs['caption'] . '</span>';
			}
		}

		$html = '<span class="price">' . $html . '</span>';
	}

	return $html;
}
add_shortcode ('price', 'fashion_inside_shortcode_price');
