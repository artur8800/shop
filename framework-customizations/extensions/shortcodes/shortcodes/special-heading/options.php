<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Heading Title', 'fw' ),
		'desc'  => __( 'Write the heading title content', 'fw' ),
	),
	'subtitle' => array(
		'type'  => 'textarea',
		'label' => __( 'Heading Subtitle', 'fw' ),
		'desc'  => __( 'Write the heading subtitle content', 'fw' ),
	),
	'heading' => array(
		'type'    => 'select',
		'label'   => __('Heading Size', 'fw'),
		'choices' => array(
			'h1' => 'H1',
			'h2' => 'H2',
			'h3' => 'H3',
			'h4' => 'H4',
			'h5' => 'H5',
			'h6' => 'H6',
		)
	),'heading_class' => array(
		'label'   => __('Heading_class', 'fw'),
		'desc'    => __('custom class field', 'unyson'),
		'type'    => 'text'
	),
	'centered' => array(
		'type'    => 'switch',
		'label'   => __('Centered', 'fw'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'fw'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'fw'),
//		),
	)
);
