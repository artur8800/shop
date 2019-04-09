<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
    'custom_card_class' => array(
		'label' => __('Custom card class', 'fw'),
		'desc'  => __('Вставьте класс', 'fw'),
		'type'  => 'text',
	),
	'elements' => array(
		'label'   => __('custom_style', 'fw'),
		'desc'    => __('This is just a demonstration. To actually make use of the options you must edit the view file.', 'unyson'),
		'type'    => 'wp-editor',
		'wpautop'  => false,
		'shortcodes' => true,
		'quicktags' => false
	),
);
