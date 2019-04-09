<?php
/**
 * e_shop functions and definitions
 *
 * 
 *
 * 
 */





if ( ! function_exists( 'storefront_recent_products_custom' ) ) {
	/**
	 * Display Recent Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function storefront_recent_products_custom( $args ) {
		$args = apply_filters(
			'storefront_recent_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'date',
				'order'   => 'desc',
				'title'   => __( 'New In', 'storefront' ),
			)
		);

		$shortcode_content = storefront_do_shortcode(
			'products', apply_filters(
				'storefront_recent_products_shortcode_args', array(
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="storefront-product-section storefront-recent-products" aria-label="' . esc_attr__( 'Recent Products', 'storefront' ) . '">';

			add_filter( 'woocommerce_get_price_html', function( $price ) {
				if ( is_front_page() ) {
					$price = 0;
					return $price;
				}

				
			} );

			remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';
			

			do_action( 'storefront_homepage_after_recent_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'storefront_homepage_after_recent_products' );

			echo '</section>';
		}
		
	}
}



if ( ! function_exists( 'wrap_loop' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_loop() {
		?>
		<div class="container tpl-catalogue">
			<?php
			
				do_action( 'storefront_sidebar' );
		
			
	}
}

	

 
function bbloomer_remove_sidebar_product_pages() {
	if ( is_product() ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
			remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}
}


if ( ! function_exists( 'wrap_loop_catalog_open' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_loop_catalog_open() {
		?>
		<div class="tpl-section__main">
			<div class="catalogue">
		

		<?php
	}
}


if ( ! function_exists( 'wrap_loop_close' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_loop_close() {
		?>
		</div>
		<?php
	}
}





if ( ! function_exists( 'wrap_loop_catalog_close' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_loop_catalog_close() {
		?>


			</div>
		</div>
		
		

		<?php
	}
}






function woocommerce_template_loop_product_title_custom() {
	echo '<h3 class="tpl-catalogue__merch-title">' . get_the_title() . '</h3>';
}






if ( ! function_exists( 'wrap_body_custom' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_body_custom() {
		?>

		<div class="tpl-catalogue__merch-body">
		

		<?php
	}
}



if ( ! function_exists( 'wrap_body_close_custom' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_body_close_custom() {
		?>

		</div>
		

		<?php
	}
}


// if ( ! function_exists( 'woocommerce_get_product_thumbnail_custom' ) ) {   
//     function woocommerce_get_product_thumbnail_custom( $size = 'shop_catalog' ) {
       
        
// 		 global $post;
// 		$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );
		
// 		echo '<div class="tpl-catalogue__merch-img" style="background-image:url(' . get_the_post_thumbnail_url( $post->ID, $image_size ) . ');">';
//     }
// }



// function woocommerce_template_loop_product_link_open_custom() {
// 	global $product;

// 	$link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );

// 	echo '<a href="' . esc_url( $link ) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
// }





if ( ! function_exists( 'woocommerce_template_loop_product_link_close_custom' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function woocommerce_template_loop_product_link_close_custom() {
		?>

		</a>
		

		<?php
	}
}




add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart_wrap_open', 5 );

if ( ! function_exists( 'woocommerce_template_loop_add_to_cart_wrap_open' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function woocommerce_template_loop_add_to_cart_wrap_open() {
		?>
		<div class="tpl-catalogue__merch-buttons">
			<button class="tpl-button tpl-button--brand tpl-button--sm">
		

		<?php
	}
}

add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart_wrap_close', 10 );

if ( ! function_exists( 'woocommerce_template_loop_add_to_cart_wrap_close' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function woocommerce_template_loop_add_to_cart_wrap_close() {
		?>

			</button>
		</div>

		<?php
	}
}




