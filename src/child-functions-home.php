<?php
/**
 * e_shop functions and definitions
 *
 * 
 *
 * 
 */


if ( ! function_exists( 'storefront_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments
	 * Ensure cart contents update when products are added to the cart via AJAX
	 *
	 * @param  array $fragments Fragments to refresh via AJAX.
	 * @return array            Fragments to refresh via AJAX
	 */
	function storefront_cart_link_fragment( $fragments ) {
		global $woocommerce;

		ob_start();
		storefront_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		ob_start();
		storefront_handheld_footer_bar_cart_link();
		$fragments['a.footer-cart-contents'] = ob_get_clean();

		return $fragments;
	}
}


if ( ! function_exists( 'storefront_header_cart' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function storefront_header_cart() {
		if ( storefront_is_woocommerce_activated() ) {
			if ( is_cart() ) {
				$class = 'tpl-header__cart site-header-cart';
			} else {
				$class = 'tpl-header__cart site-header-cart';
			}
			?>
	
					<?php
					global $woocommerce; ?>
					<div id="site-header-cart" class="<?php echo esc_attr( $class ); ?>">
						
								<span class="tpl-header__cart-icon icon icon-cart"></span>
								<span class="tpl-header__cart-title">КОРЗИНА</span>
							
								<a class="widget_shopping_cart_content footer-cart-contents tpl-header__cart-counter" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>"><?php echo ''.WC()->cart->get_cart_contents_count(); ?></a>
							
						
					</div>
			<?php
		}
	}
}



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



if ( ! function_exists( 'storefront_product_categories' ) ) {
	/**
	 * Display Product Categories
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function storefront_product_categories_custom( $args ) {
		$args = apply_filters(
			'storefront_product_categories_args', array(
				'limit'            => 3,
				'columns'          => 3,
				'child_categories' => 0,
				'orderby'          => 'menu_order',
				'title'            => __( 'Shop by Category', 'storefront' ),
			)
		);

		$shortcode_content = storefront_do_shortcode(
			'product_categories', apply_filters(
				'storefront_product_categories_shortcode_args', array(
					'number'  => intval( $args['limit'] ),
					'columns' => intval( $args['columns'] ),
					'orderby' => esc_attr( $args['orderby'] ),
					'parent'  => esc_attr( $args['child_categories'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns product categories
		 */
		if ( false !== strpos( $shortcode_content, 'product-category' ) ) {
			echo '<section class="storefront-product-section storefront-product-categories" aria-label="' . esc_attr__( 'Product Categories', 'storefront' ) . '">';

			do_action( 'storefront_homepage_before_product_categories' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'storefront_homepage_after_product_categories_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'storefront_homepage_after_product_categories' );

			echo '</section>';
		}
	}
}


if ( ! function_exists( 'storefront_page_content_custom' ) ) {
	/**
	 * Display the post content
	 *
	 * @since 1.0.0
	 */
	function storefront_page_content_custom() {
		?>
		
			<?php the_content(); ?>
			<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'storefront' ),
						'after'  => '</div>',
					)
				);
			?>
	
		<?php
	}
}