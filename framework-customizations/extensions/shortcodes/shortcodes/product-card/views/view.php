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
<div class="tpl-product_card">
	<div class="tpl-product_card--image">
		<a href="<?php echo esc_attr($atts['link']); ?>" class="tpl-product_card_link">
			<img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($atts['title']); ?>"/>
		</a>
		<div class="tpl-product_card--title">
			<h4><?php echo $atts['title']; ?></h4>
		</div>
	</div>
	
</div>