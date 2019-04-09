<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$html = "abc<p></p><p>dd</p><b>non-empty</b>"; 
$pattern = "/<p[^>]*><\\/p[^>]*>/"; 
//$pattern = "/<[^\/>]*>([\s]?)*<\/[^>]*>/";  use this pattern to remove any empty tag


$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}


$custom_style = '';
if ( ! empty( $atts['custom_style'] ) ) {
	$custom_style =  $atts['custom_style'];
}
// $custom_style   = ( isset( $atts['custom_style'] ) && $atts['custom_style'] ) ? ' ' . $atts['custom_style'] . '': '';


$card_style   = ( $bg_color || $custom_style ) ? 'style="' . esc_attr($bg_color . $custom_style) . '"' : '';
$custom_card_class = ( isset( $atts['custom_card_class'] ) && $atts['custom_card_class'] ) ? ' ' . $atts['custom_card_class'] . '': '';
// $custom_row_class = ( isset( $atts['custom_row_class'] ) && $atts['custom_row_class'] ) ? ' ' . $atts['custom_row_class'] . '': '';

$shortcode = $atts['elements'];

?>
<div class="<?php echo esc_attr($custom_card_class); ?>" <?php echo $card_style; ?> >
		
		<?php echo do_shortcode( $content ); ?>
		<?php echo do_shortcode( $shortcode ); ?>
	
		
	
</div>
