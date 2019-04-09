<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
<?php
/*
 * `.fw-iconbox` supports 3 styles:
 * `fw-iconbox-1`, `fw-iconbox-2` and `fw-iconbox-3`
 */


$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/custom-icon-box');
$image_url = !empty($image['iamge']['url'])	? $image['image']['url']
	: $uri . '/static/img/default.png';
			



$list_class = ( isset( $atts['text'] ) && $atts['text'] ) ? 'fw-container-block' : 'fw-container-none'; 
?>
<div class="fw-iconbox clearfix <?php echo esc_attr($atts['style']); ?>">
	<div class="fw-icon_h">
		<div class="fw-iconbox-image">
			<img src="<?php echo esc_attr($image_url); ?>"/>
		</div>
		<div class="fw-iconbox-aside">
			<div class="fw-iconbox-title">
				<span class="<?php echo esc_attr($atts['text_style']); ?>"><?php echo $atts['title']; ?></span>
				<div class="<?php echo esc_attr($list_class); ?>"><?php echo do_shortcode( $atts['text'] ); ?></div>
			</div>
		</div>
	</div>
</div>