<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */

 $custom_class = ( isset( $atts['heading_class'] ) && $atts['heading_class'] ) ? ' ' . $atts['heading_class'] . '': '';

?>

	<?php $heading = "<{$atts['heading']} class='{$atts['heading_class']}'>{$atts['title']}</{$atts['heading']}>"; ?>
	<?php echo $heading; ?>
