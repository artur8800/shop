<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
$icon_uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/custom-icon-box');
wp_enqueue_style(
    'fw-shortcode-custom-icon-box',
    $icon_uri . '/static/css/styles.css'
);

