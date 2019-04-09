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
?>
<!-- <div class="fw-iconbox clearfix < ?php echo esc_attr($atts['style']); ?>"> -->
	<div class="tpl-feature__icon">
		<span class="icon"><i class="<?php echo esc_attr($atts['icon']); ?>"></i></span>
	</div>
	<div>
		<h4 class="tpl-feature__title"><?php echo $atts['title']; ?></h4>
		<p><?php echo $atts['content']; ?></p>
	</div>
<!-- </div> -->