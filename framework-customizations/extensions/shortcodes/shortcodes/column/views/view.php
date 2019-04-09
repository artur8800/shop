<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
$custom_column_class = ( isset( $atts['column_class'] ) && $atts['column_class'] ) ? ' ' . $atts['column_class'] . '': '';
$custom_extra_class = ( isset( $atts['extra_class'] ) && $atts['extra_class'] ) ? ' ' . $atts['extra_class'] . '': '';
$custom_style = ( isset( $atts['custom_style'] ) && $atts['custom_style'] ) ? ' ' . $atts['custom_style'] . '': '';
?>
<div class="<?php echo esc_attr($class); ?><?php echo esc_attr($custom_column_class); ?><?php echo esc_attr($custom_extra_class); ?>" style="<?php echo esc_attr($custom_style); ?>">
	<?php echo do_shortcode($content); ?>
</div>
