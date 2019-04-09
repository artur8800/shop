<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
$uri = get_stylesheet_directory_uri();
wp_enqueue_style(
    'fw-shortcode-button',
    $uri . '/framework-customizations/extensions/shortcodes/shortcodes/button/static/css/styles.css'
);

