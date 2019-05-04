
<?php
/**
 * e_shop functions and definitions
 *
 * 
 *
 * 
 */



 if ( ! function_exists( 'wrap_single_product_open' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs       EDITED
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_open() {
		?>
		<div class="container tpl-item">       
			
        <?php
	}
}

if ( ! function_exists( 'wrap_single_product_close' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_close() {
		?>
		</div>
			
        <?php
	}
}

if ( ! function_exists( 'wrap_single_product_container_open' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_container_open() {
		?>
		<div class="container tpl-item item-pad">
			
        <?php
	}
}

if ( ! function_exists( 'wrap_single_product_container_close' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_container_close() {
		?>
		</div>
			
        <?php
	}
}

if ( ! function_exists( 'wrap_single_product_main_open' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs ***********edited  tpl-section__main
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_main_open() {
		?>
		<div class="container tpl-item">
			
        <?php
	}
}

if ( ! function_exists( 'wrap_single_product_main_close' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_main_close() {
		?>
		</div>
			
        <?php
	}
}


function my_stock_loop() {
    global $product;
    if ( $product->is_in_stock() ) {
        echo '';
    } else {
        echo '<div class="out-of-stock" >Нет в наличии</div>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'my_stock_loop' );


add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );
function wc_remove_all_quantity_fields( $return, $product ) {
  if ( is_product() )
    return true;
  else return $return;
}




if ( ! function_exists( 'wrap_single_product_page_open' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs ***********edited  tpl-section__main
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_page_open() {
		?>
		<div class="tpl-section tpl-section--no-top-gap tpl-section--item">
			
        <?php
	}
}

if ( ! function_exists( 'wrap_single_product_page_close' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function wrap_single_product_page_close() {
		?>
		</div>
			
        <?php
	}
}


add_filter( 'woocommerce_output_related_products_args', 'filter_function_name_4573' );
function filter_function_name_4573( $args ){
	$args = array(
		'posts_per_page' => 4,
		'columns'        => 4,
		'orderby'        => 'rand', // @codingStandardsIgnoreLine.
	);


	return $args;
}