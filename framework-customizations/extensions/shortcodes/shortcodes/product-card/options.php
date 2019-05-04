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
	'link'  => array(
		'label' => __( 'insert link', 'fw' ),
		'desc'  => __( 'link', 'fw' ),
		'type'  => 'text',
		'value' => '#'
	)
);