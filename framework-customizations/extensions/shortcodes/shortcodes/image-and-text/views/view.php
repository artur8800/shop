<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}


$big_color = '';
if ( ! empty( $atts['big_color'] ) ) {
	$big_color = 'color:' . $atts['big_color'] . ';';
}
$section_style   = ( $big_color) ? 'style="' . esc_attr($big_color) . '"' : '';
?>
<div class="fw-image_h">
	<div class="fw-image_h-image"><img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($atts['title']); ?>"/></div>
	<div class="fw-image_h-inner">
		<div class="fw-image_h-name">
			<h3><?php echo $atts['title']; ?></h3>
			<span <?php echo $section_style; ?>><?php echo $atts['big_text']; ?></span>
		</div>
		<div class="fw-image_h-text">
			<p><?php echo $atts['desc']; ?></p>
		</div>
	</div>
</div>