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
<div class="tpl-category">
	<div class="hover-block shadow__image">
		<a class="tpl-category__link" href="<?php echo esc_attr($atts['link']); ?>">
		<div class="tpl-category__image hover-block__image" style="background-image:url('<?php echo esc_attr($image); ?>');"></div>
		</a>
	</div>
	<div class="tpl-product_card--title">
			<h4><?php echo $atts['title']; ?></h4>
	</div>
	
</div>

