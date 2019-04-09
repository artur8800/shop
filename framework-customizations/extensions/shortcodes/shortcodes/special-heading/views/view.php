<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */

 $custom_class = ( isset( $atts['heading_class'] ) && $atts['heading_class'] ) ? ' ' . $atts['heading_class'] . '': '';

?>
<div class="fw-heading fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo !empty($atts['centered']) ? 'fw-heading-center' : ''; ?>">
	<?php $heading = "<{$atts['heading']} class='{$atts['heading_class']}'>{$atts['title']}</{$atts['heading']}>"; ?>
	<?php echo $heading; ?>
	<?php if (!empty($atts['subtitle'])): ?>
		<div class="row tpl-section__content"><p><?php echo $atts['subtitle']; ?></p></div>
	<?php endif; ?>
</div>