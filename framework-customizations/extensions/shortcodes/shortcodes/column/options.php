<?php if (!defined('FW')) die('Forbidden');
$options = array(
    'column_class' => array(
		'label'   => __('column_class', 'fw'),
		'desc'    => __('This is just a demonstration. To actually make use of the options you must edit the view file.', 'unyson'),
		'type'    => 'text'
	),
	'extra_class' => array(
		'label'   => __('extra_class', 'fw'),
		'desc'    => __('This is just a demonstration. To actually make use of the options you must edit the view file.', 'unyson'),
		'type'    => 'text'
	),
	'custom_style' => array(
		'label'   => __('custom_style', 'fw'),
		'desc'    => __('This is just a demonstration. To actually make use of the options you must edit the view file.', 'unyson'),
		'type'    => 'wp-editor',
		'editor_type' => 'html',
		'wpautop' => false
	),
);