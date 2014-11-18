<?php
require WPMU_PLUGIN_DIR . '/fashion-inside/filenames/inc/plugin.php';
add_filter ('sanitize_file_name', 'kolya_korobochkin_sanitize_file_name', 99, 2);
?>