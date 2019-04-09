<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image' => array(
		'label' => __( 'Team Member Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload'
	),
	'title'  => array(
		'label' => __( 'title text', 'fw' ),
		'desc'  => __( 'title', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'big_color' => array(
		'label' => __('Big Color', 'fw'),
		'desc'  => __('Please select the big text color', 'fw'),
		'type'  => 'color-picker',
	),
	'big_text'   => array(
		'label' => __( 'Big Title', 'fw' ),
		'desc'  => __( 'Big title', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'desc'  => array(
		'label' => __( 'Description', 'fw' ),
		'desc'  => __( 'Enter a few words that describe the ...', 'fw' ),
		'type'  => 'textarea',
		'value' => ''
	)
);