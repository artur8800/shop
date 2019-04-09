<?php
/**
 * e_shop functions and definitions
 *
 * 
 *
 * 
 */


if ( ! function_exists( 'storefront_header_container_custom' ) ) {
	/**
	 * The header container
	 */
	function storefront_header_container_custom() {
		echo '<div class="tpl-header__main"><div class="container tpl-header__container"><div class="row tpl-header__row">';
	}
}

if ( ! function_exists( 'storefront_header_container_close_custom' ) ) {
	/**
	 * The header container close
	 */
	function storefront_header_container_close_custom() {
		echo '</div></div></div>';
	}
}



function custom_logo_url ( $html ) {

	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$url = network_site_url();
	$html = sprintf( '<span class="icon icon-logo"><a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a></span>',
			esc_url( $url  ),
			wp_get_attachment_image( $custom_logo_id, 'full', false, array(
				'class'    => 'custom-logo',
			) )
		);

	return $html;    
}


if ( ! function_exists( 'storefront_site_branding_custom' ) ) {
	/**
	 * Site branding wrapper and display
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_site_branding_custom() {
		?>
		<div class="site-branding">
			<?php storefront_site_title_or_logo_custom(); ?>
		</div>
		<?php
	}
}


if ( ! function_exists( 'storefront_site_title_or_logo_custom' ) ) {
	/**
	 * Display the site title or logo
	 *
	 * @since 2.1.0
	 * @param bool $echo Echo the string or return it.
	 * @return string
	 */
	function storefront_site_title_or_logo_custom( $echo = true ) {
		if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
			$logo = get_custom_logo();
			$html = is_home() ? '<h1 class="logo">' . $logo . '</h1>' : $logo;
		} else {
			$tag = is_home() ? 'h1' : 'div';

			$html = '<' . esc_attr( $tag ) . ' class="beta site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a></' . esc_attr( $tag ) . '>';

			if ( '' !== get_bloginfo( 'description' ) ) {
				$html = '<a class="logo_link" href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '<span class="icon icon-logo"></span>' . '</a>';
				// $html = '<span class="icon icon-logo"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a></span>';
			}
		}

		if ( ! $echo ) {
			return $html;
		}

		echo $html; // WPCS: XSS ok.
	}
}




if ( ! function_exists( 'header_left_col_wrapper' ) ) {
 	/**
 	 * The header_left_col_wrapper
 	 */
	function header_left_col_wrapper() {
			?>
			<div class="col-lg-3 col-md-12 col-sm-12 tpl-header__logo">
				
			
			<?php
		
	}
}

if ( ! function_exists( 'header_left_col_wrapper_close' ) ) {
 	/**
 	 * The header_left_col_wrapper
 	 */
	function header_left_col_wrapper_close() {
			?>
			</div>
				
			
			<?php
		
	}
}

if ( ! function_exists( 'header_right_col_wrapper' ) ) {
 	/**
 	 * The header_right_col_wrapper
 	 */
	function header_right_col_wrapper() {
			?>
			<div class="col-lg-9 col-md-12">
				
			
			<?php
		
	}
}

if ( ! function_exists( 'header_right_col_wrapper_close' ) ) {
 	/**
 	 * The header_right_col_wrapper
 	 */
	function header_right_col_wrapper_close() {
			?>
			</div>
				
			
			<?php
		
	}
}

if ( ! function_exists( 'header_right_col_widget' ) ) {
 	/**
 	 * The header_right_col_widget
 	 */
	function header_right_col_widget() {
			?>
			<div class="tpl-header__preface row end-xs">
				
                 <?php dynamic_sidebar( 'top-area' ); ?>
                 
			
			<?php
		
	}
}

if ( ! function_exists( 'header_right_col_widget_close' ) ) {
 	/**
 	 * The header_right_col_
 	 */
	function header_right_col_widget_close() {
			?>
			</div>
				
			
			<?php
		
	}
}

if ( ! function_exists( 'storefront_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_primary_navigation() {
		?>
	
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary_custom',
										'menu'            => 'primary_custom', 
										'container'       => '', 
										'container_class' => '', 
										'container_id'    => '',
										'menu_class'      => 'row col-xs-8 headerMenu  ', 
										'menu_id'         => '',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',)); ?>
									<?php
	}	
}

if ( ! function_exists( 'storefront_primary_navigation_wrapper' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */

function storefront_primary_navigation_wrapper() {
		?>
			<nav id="search-container" class="row between-xs tpl-header__nav tpl-search__container" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">

		<?php
	}

}
if ( ! function_exists( 'storefront_primary_navigation_wrapper_close' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
function storefront_primary_navigation_wrapper_close() {
		?>
			</nav>
		<?php
	}
}


if ( ! function_exists( 'filter_add_class_item' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function filter_add_class_item( $classes,  $item, $args, $depth ){
		$classes = [ 'tpl-header__nav-unit' ];

		return $classes;
	}
}

if ( ! function_exists( 'storefront_primary_search_wrapper' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
function storefront_primary_search_wrapper() {
		?>
			<div class="col-xs-4 row end-xs">
					
					
		<?php
	}
}
if ( ! function_exists( 'storefront_primary_search_wrapper_close' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
function storefront_primary_search_wrapper_close() {
		?>
			</div>
					
					
		<?php
	}
}


if ( ! function_exists( 'storefront_product_search_custom' ) ) {
	/**
	 * Display Product Search
	 *
	 * @since  1.0.0
	 * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function storefront_product_search_custom() {
		if ( storefront_is_woocommerce_activated() ) {
			?>
			<div class="tpl-header__search tpl-search__box">
				<a id="search-button" class="tpl-search__button"></a>
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
			<?php
		}
	}
}




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



if ( ! function_exists( 'storefront_header_cart_custom' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function storefront_header_cart_custom() {
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

function woocommerce_breadcrumbs_custom() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="container tpl-breadcrumbs" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}


