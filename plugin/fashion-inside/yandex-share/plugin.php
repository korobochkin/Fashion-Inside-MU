<?php
/*
 * Удаляем соц кнопки после контента, которые добавляет плагин
 */
function fashion_inside_yandex_share_init () {
	remove_filter ('the_content', array ($GLOBALS['yandex_share_plugin'], 'the_content'));
}
add_action ('init', 'fashion_inside_yandex_share_init', 20);

/*
 * И добавляем соц кнопки в нужное место
 */
function fashion_inside_add_social_buttons ($content) {
	if (!is_preview ()) {
		if (isset ($GLOBALS['yandex_share_plugin'])) {
			$social_btns = $GLOBALS['yandex_share_plugin']->the_content ('');
			$social_btns = '<div class="ya-share"><div class="ya-share-container-inner">' . $social_btns . '</div></div>';
			return $social_btns . $content;
		}
	}
	return $content;
}
add_filter ('selena_entry_meta_comments_counter_add_something', 'fashion_inside_add_social_buttons', 99);
?>