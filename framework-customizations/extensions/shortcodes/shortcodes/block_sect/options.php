<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
    ),
    'custom_section_class' => array(
		'label' => __('Custom section class', 'fw'),
		'desc'  => __('Вставьте класс для секции', 'fw'),
		'type'  => 'text',
	),
	'custom_row_class' => array(
		'label' => __('Custom row class', 'fw'),
		'desc'  => __('Вставьте класс для контейтера', 'fw'),
		'type'  => 'text',
	),'extra_class' => array(
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
