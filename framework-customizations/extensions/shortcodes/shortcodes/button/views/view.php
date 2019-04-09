<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php 

$color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; 
$button_class = ( isset( $atts['button_class'] ) && $atts['button_class'] ) ? ' ' . $atts['button_class'] . '': '';
?>

<div class="tpl-button__container">
	<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="<?php echo $atts['button_class']; ?> <?php echo esc_attr($color_class); ?>">
		<span><?php echo $atts['label']; ?></span>
	</a>
</div>
	