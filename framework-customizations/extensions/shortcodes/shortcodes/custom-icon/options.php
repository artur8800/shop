<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'custom_icon'       => array(
		'type' => 'icon',
		'label' => __( 'Icon', 'fw' )
	),
	'image' => array(
		'label' => __( 'icon Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload'
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Icon title', 'fw' ),
	)
);