<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}
$custom_style = '';
if ( ! empty( $atts['custom_style'] ) ) {
	$custom_style =  $atts['custom_style'];
}
// $custom_style   = ( isset( $atts['custom_style'] ) && $atts['custom_style'] ) ? ' ' . $atts['custom_style'] . '': '';
$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

$section_style   = ( $bg_color || $bg_image || $custom_style ) ? 'style="' . esc_attr($bg_color . $bg_image . $custom_style) . '"' : '';
$custom_section_class = ( isset( $atts['custom_section_class'] ) && $atts['custom_section_class'] ) ? ' ' . $atts['custom_section_class'] . '': '';
$custom_row_class = ( isset( $atts['custom_row_class'] ) && $atts['custom_row_class'] ) ? ' ' . $atts['custom_row_class'] . '': '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'container-fluid' : 'container';
$custom_extra_class = ( isset( $atts['extra_class'] ) && $atts['extra_class'] ) ? ' ' . $atts['extra_class'] . '': '';


?>
<section class="tpl-section<?php echo esc_attr($custom_section_class); ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?> >
	<div class="<?php echo esc_attr($container_class); ?><?php echo esc_attr($custom_extra_class) ?>">
		<?php echo do_shortcode( $content ); ?>
	</div>
</section>
