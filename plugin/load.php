<?php
// Load Traslates for all addons
load_muplugin_textdomain ('fashion_inside', '/fashion-inside/languages/');

// Favicons
require WPMU_PLUGIN_DIR . '/fashion-inside/wp-head/plugin.php';

// Delete WP logo in admin bar
require_once (WPMU_PLUGIN_DIR . '/fashion-inside/wordpress-logo/plugin.php');

// Delete Seo by Yoast Stuff
require_once (WPMU_PLUGIN_DIR . '/fashion-inside/seo-by-yoast/plugin.php');

// Jetpack
require WPMU_PLUGIN_DIR . '/fashion-inside/jetpack/plugin.php';

// Yandex Share Social buttons
require WPMU_PLUGIN_DIR . '/fashion-inside/yandex-share/plugin.php';

// Filenames
require WPMU_PLUGIN_DIR . '/fashion-inside/filenames/plugin.php';

// Shortcodes
require WPMU_PLUGIN_DIR . '/fashion-inside/shortcodes/plugin.php';

// Themes
// Selena
require WPMU_PLUGIN_DIR . '/fashion-inside/themes/selena/plugin.php';
?>