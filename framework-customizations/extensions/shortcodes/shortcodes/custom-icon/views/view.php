<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}
?>
<div class="fw-icon">
	<div class="icon-image"><img src="<?php echo esc_attr($image); ?>"/></div>
	<?php if (!empty($atts['title'])): ?>
		<span class="list-title"><?php echo $atts['title'] ?></span>
	<?php endif; ?>
</div>