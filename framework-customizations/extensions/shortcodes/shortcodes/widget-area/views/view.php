<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts ;
 * @var string $content ;
 * @var string $tag ;
 */
?>
<div class="container tpl-popular">
	<div class="tpl-popular__container">
		<div id="popular-slider" class="tpl-popular__body">
			<?php dynamic_sidebar( $atts['sidebar'] ); ?>
		</div>
	</div>
	
</div>
