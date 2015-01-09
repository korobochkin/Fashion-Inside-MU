<?php
function fashion_inside_wp_head_icons () {
?>
<link rel="shortcut icon" href="/favicon.ico">
<meta name="apple-mobile-web-app-title" content="<?php echo esc_attr (get_bloginfo ('name')); ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url ('apple-touch-icon-76x76-precomposed.png'); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url ('apple-touch-icon-120x120-precomposed.png'); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url ('apple-touch-icon-152x152-precomposed.png'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url ('apple-touch-icon-180x180-precomposed.png'); ?>">
<meta name="application-name" content="<?php echo esc_attr (get_bloginfo ('name')); ?>">
<?php
}
add_action ('wp_head', 'fashion_inside_wp_head_icons');
?>