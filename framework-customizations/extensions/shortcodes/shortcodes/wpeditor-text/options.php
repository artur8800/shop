<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this wp-editor', 'fw' ),
		'wpautop' => false,
	),
);
