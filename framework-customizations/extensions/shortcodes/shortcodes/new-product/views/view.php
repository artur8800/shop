<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}

$class = '';
if ( ! empty($atts['custom_class'] ) ) {
	$class = ' ' . $atts['custom_class'] . '';
}




?>
<div class="tpl-item tpl-item__home<?php echo esc_attr($class); ?>">
	<div class="tpl-item_image" style="background-image: url('<?php echo esc_attr($image); ?>');">
		<button class="tpl-button tpl-button--sm tpl-button--link"><a href="<?php echo esc_attr($atts['link']) ?>">Смотреть</a></button>
	</div>
	
</div>