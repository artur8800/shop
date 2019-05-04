<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;


$product_url =  get_the_post_thumbnail_url($product->ID);

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

?>
	
				<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>
				<div class="tpl-catalogue__merch-item">
					<div class="tpl-catalogue__merch-img" style="background-image: url('<?php echo $product_url ; ?>');"></div>
					<div class="tpl-catalogue__merch-body">
						<h3 class="tpl product-title"><?php echo wp_kses_post( $product->get_name() ); ?></h3>
						
						<?php if ( ! empty( $show_rating ) ) : ?>
							<?php echo wc_get_rating_html( $product->get_average_rating() ); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php endif; ?>

						<?php echo $product->get_price_html(); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<a href="<?php echo esc_url( $product->get_permalink() ); ?>"><button class="">Подробнее</button></a> 
					</div>
					
				</div>
				<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
	