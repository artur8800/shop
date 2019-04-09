<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style'   => array(
		'type'    => 'select',
		'label'   => __('Box Style', 'fw'),
		'choices' => array(
			'fw-iconbox-1' => __('Icon above title', 'fw'),
			'fw-iconbox-2' => __('Icon in line with title', 'fw')
		)
	),
	'text_style'   => array(
		'type'    => 'select',
		'label'   => __('Text Style', 'fw'),
		'choices' => array(
			'fw-icontext-bold' => __('Bold heading text', 'fw'),
			'fw-icontext-slim' => __('Slim heading text', 'fw')
		)
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title of the Box', 'fw' ),
	),
	'content' => array(
		'type'  => 'textarea',
		'label' => __( 'Content', 'fw' ),
		'desc'  => __( 'Enter the desired content', 'fw' ),
	),
	'image' => array(
		'label' => __( 'icon Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload'
	),
	'text' => array(
		'type'  => 'wp-editor',
		'value' => 'default value',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Label', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
		'size' => 'small', // small, large
		'editor_height' => 400,
		'wpautop' => true,
		'editor_type' => false, // tinymce, html

		/**
		 * By default, you don't have any shortcodes into the editor.
		 *
		 * You have two possible values:
		 *   - false:   You will not have a shortcodes button at all
		 *   - true:    the default values you provide in wp-shortcodes
		 *              extension filter will be used
		 *
		 *   - An array of shortcodes
		 */
		'shortcodes' => true
		
	)
);