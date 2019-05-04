<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image' => array(
		'label' => __( 'bg Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload'
	),
	'link'   => array(
		'label' => __( 'Button Link', 'fw' ),
		'desc'  => __( 'Where should your button link to', 'fw' ),
		'type'  => 'text',
		'value' => '#'
	),
	'custom_class'   => array(
		'label' => __( 'Custom-class Title', 'fw' ),
		'desc'  => __( 'Custom-class title of the block.', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'desc'  => array(
		'label' => __( 'New product Description', 'fw' ),
		'desc'  => __( 'Enter a few words that describe the product', 'fw' ),
		'type'  => 'textarea',
		'value' => ''
	)
);