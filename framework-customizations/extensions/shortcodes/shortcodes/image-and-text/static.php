<?php if (!defined('FW')) die('Forbidden');
$uri = get_stylesheet_directory_uri(); 
$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-shortcode-image-and-text',
	$uri . '/framework-customizations/extensions/shortcodes/shortcodes/image-and-text/static/css/styles.css'
);





