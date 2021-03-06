
<?php


/* REMOVE SECTION START */ 

	
	function remove_header_actions_custom() {
	/**
	 * 
	 */

		

		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
		remove_action( 'storefront_homepage', 'storefront_page_content', 20 );
		remove_action('storefront_header', 'storefront_header_container', 0 );
		remove_action('storefront_header', 'storefront_header_container_close', 41 );
		remove_action('storefront_header', 'storefront_skip_links', 5 );
		remove_action('storefront_header', 'storefront_site_branding', 20 );
		remove_action('storefront_header', 'storefront_product_search', 40 );
		remove_action('storefront_header', 'storefront_primary_navigation_wrapper', 42 );
		remove_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );
		remove_action('storefront_header', 'storefront_primary_navigation', 50 );
		remove_action('storefront_header', 'storefront_header_cart', 60 );
		remove_action('storefront_page', 'storefront_page_header', 10 );
		remove_action( 'storefront_homepage', 'storefront_homepage_header', 10 );
		remove_action( 'woocommerce_before_main_content', 'storefront_before_content', 10 );
		
	/**
	 * Homepage
	 */
		remove_action('homepage', 'storefront_product_categories', 20);
		remove_action('homepage', 'storefront_recent_products', 30);
		remove_action('homepage', 'storefront_featured_products', 40);
		remove_action('homepage', 'storefront_popular_products', 50);
		remove_action('homepage', 'storefront_on_sale_products', 60);
		remove_action('homepage', 'storefront_best_selling_products', 70);
		

		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
		remove_action( 'woocommerce_before_shop_loop','storefront_sorting_wrapper',9 );
		remove_action( 'woocommerce_before_shop_loop','storefront_sorting_wrapper_close',31 );
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );

		
		remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );  
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

		remove_action( 'storefront_after_footer', 'storefront_sticky_single_add_to_cart', 999 );
		remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
		
		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	
		remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
		

		// Удаляем лишнее с head части сайта
		// 2.0
		remove_action( 'wp_head', 'feed_links_extra', 3 ); // ссылки доп. фидов (на рубрики)
		remove_action( 'wp_head', 'feed_links',       2 ); // ссылки фидов (основные фиды)
		// <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://site.ru/xmlrpc.php?rsd" /> для публикации статей через сторонние сервисы
		remove_action( 'wp_head', 'rsd_link'            ); 
		// <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://site.ru/wp-includes/wlwmanifest.xml" /> . Используется клиентом Windows Live Writer. 
		remove_action( 'wp_head', 'wlwmanifest_link'    ); 
		//remove_action( 'wp_head', 'index_rel_link'      ); // не поддерживается с версии 3.3

		add_filter('the_generator', '__return_empty_string'); // Убираем версию WordPress

		// 3.0
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 ); // Ссылки на соседние статьи (<link rel='next'... <link rel='prev'...)
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );// Короткая ссылка - без ЧПУ <link rel='shortlink'

		// 4.6
		remove_action( 'wp_head', 'wp_resource_hints', 2); // Prints resource hints to browsers for pre-fetching, pre-rendering and pre-connecting to web sites.



	}
	


		function wpassist_remove_block_library_css(){
		wp_dequeue_style( 'wp-block-library' );
	} 
	add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );



	function move_variation_price() {
		remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
		add_action( 'woocommerce_after_add_to_cart_quantity', 'woocommerce_single_variation', 10 );
	}
	add_action( 'woocommerce_before_add_to_cart_form', 'move_variation_price' );



	

	/**
	 * General
	 */
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );



/* REMOVE SECTION END */

/* ADD ACTION SECTION START */
	
	/**
	 * Header
	 */
	add_action( 'storefront_homepage', 'storefront_page_content_custom', 20 );

	add_action('storefront_header', 'storefront_header_container_custom', 0 );
	
	add_action('storefront_header', 'storefront_header_container_close_custom', 41 );
	add_action('storefront_header', 'storefront_site_branding_custom', 20 );
	add_action( 'init', 'remove_header_actions_custom' );
	add_action('storefront_header', 'header_left_col_wrapper', 1 );
	add_action('storefront_header', 'header_left_col_wrapper_close', 20 );
	add_action('storefront_header', 'header_right_col_wrapper', 21 );
	add_action('storefront_header', 'header_right_col_widget', 21 );
	add_action('storefront_header', 'header_right_col_widget_close', 23 );
	add_action('storefront_header', 'header_right_col_wrapper_close', 40 );
	add_action('storefront_header', 'storefront_primary_navigation_wrapper', 24);
	add_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 39);
	add_action('storefront_header', 'storefront_primary_navigation', 25);
	add_action('storefront_header', 'storefront_primary_search_wrapper', 26);
	add_action('storefront_header', 'storefront_product_search_custom', 27);
	add_action('storefront_header', 'storefront_header_cart_custom', 28);
	add_action('storefront_header', 'storefront_primary_search_wrapper_close', 29);
	add_action('woocommerce_before_single_product_summary', 'wrap_single_product_main_open', 0);
	add_action('woocommerce_after_single_product_summary', 'wrap_single_product_main_close', 0);
	add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	
	/**
	 * Homepage
	 */
	// add_action('homepage', 'storefront_recent_products_custom', 30 );
	add_action( 'woocommerce_after_shop_loop_item', 'remove_price', 0 );
 

	
function wrap_widget_product_start($html) {
  $html = '<div id="popular popular-product__widget" class="row">';
  return $html;
}
add_filter('woocommerce_before_widget_product_list', 'wrap_widget_product_start', 1, 15);


function wrap_widget_product_end($html) {
  $html = '</div>';
  return $html;
}
add_filter('woocommerce_after_widget_product_list', 'wrap_widget_product_end', 1, 15);


function filter_all_storefront_sidebar_argse( $atts ) {
	
	$atts['before_title'] = '<h4 class="widget-title">';
	$atts['after_title'] = '</h4>';
	return $atts;
}
add_filter( 'storefront_sidebar_widget_tags', 'filter_all_storefront_sidebar_argse');



	


	
	/**
	 * WC
	 */
	
	add_action( 'woocommerce_before_main_content', 'storefront_before_content_custom', 10 );
	add_action('woocommerce_before_shop_loop', 'wrap_loop', 0 );
	add_action('woocommerce_after_shop_loop', 'wrap_loop_close', 60);
	add_action('woocommerce_before_shop_loop', 'wrap_loop_catalog_open', 10 );
	add_action('woocommerce_after_shop_loop', 'wrap_loop_catalog_close', 50);
	add_action('woocommerce_before_shop_loop', 'wrap_loop_catalog_merch_open', 12 );
	add_action('woocommerce_after_shop_loop', 'wrap_loop_catalog_merch_close', 48);

	add_action( 'woocommerce_before_shop_loop_item_title', 'wrap_body_custom', 15 );
	add_action( 'woocommerce_after_shop_loop_item', 'wrap_body_close_custom', 45 );

	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open_custom', 10 );
	

	add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title_custom', 10 );


	add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );

	add_action('woocommerce_before_single_product', 'wrap_single_product_page_open', 0 );
	add_action('woocommerce_after_single_product', 'wrap_single_product_page_close', 10 );


/* ADD FILTER SECTION START */
	/**
	 * Header
	 */


	add_filter( 'get_custom_logo',  'custom_logo_url' );
		
	add_filter( 'nav_menu_css_class', 'filter_add_class_item', 10, 4 );

	add_filter( 'storefront_header_cart', 'storefront_cart_link_fragment' );
		
	add_filter( 'woocommerce_breadcrumb_defaults', 'woocommerce_breadcrumbs_custom', 20 );

	// add_filter( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open_custom', 0 ); 

	
	add_filter( 'emoji_svg_url', '__return_false' );
/* ADD FILTER SECTION END */

/* REGISTER SECTION STARY */
	/**
	 * Header
	 */

add_action( 'widgets_init', 'arphabet_widgets_init' );
function arphabet_widgets_init() {

	register_sidebar( array(
        'name' => __( 'latest-post'),
        'id' => 'latest-posts',
        'description' => __( 'Latest posts', '' ),
        'before_widget' => '',
        'after_widget' => '',
        
	) );

	register_sidebar( array(
			'name' => __( 'Greeting', '' ),
			'id' => 'top-area',
			'description' => __( 'Greeting in navigation', '' ),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<p>',
			'after_title' => '</p>',
		) );


		register_sidebar( array(
        'name' => __( 'product' ),
        'id' => 'product',
        'description' => __( 'Products popular', '' ),
        'before_widget' => '',
        'after_widget' => '',
        
	) );

		register_sidebar( array(
        'name' => __( 'recent-products' ),
        'id' => 'recent-products',
        'description' => __( 'Recent Products', '' ),
        'before_widget' => '',
        'after_widget' => '',
        
	) );

}



require_once( get_stylesheet_directory(). '/my_widget.php' );
add_action("widgets_init", "my_custom_widgets_init");

function my_custom_widgets_init(){
  register_widget("My_Custom_Widget_Class");
}





	/**
	 * Header
	 */
/* REGISTER SECTION END */




add_filter( 'woocommerce_product_additional_information_heading', 'filter_function_name_3205' );
function filter_function_name_3205( $heading ){
	// filter...
	$heading = null;
	return $heading;
}


function the_excerpt_max_charlength( $charlength, $excerpt ){

	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		
		} else {
			echo $subex;
		}
		
	} else {
		echo $excerpt;
	}
}


/* Remove WooCommerce styles and scripts. */


add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

function sf_child_theme_dequeue_style() {
	
	wp_dequeue_style( 'storefront-icons');
	wp_dequeue_style( 'storefront-fonts');
	// wp_dequeue_style( 'storefront-navigation');
	wp_dequeue_style( 'woocommerce-general' );
	wp_dequeue_style( 'woocommerce-smallscreen' );
	wp_dequeue_style( 'storefront-style' );
	wp_dequeue_style( 'storefront-woocommerce-style' );
	wp_dequeue_style( 'storefront-gutenberg-blocks' );

}	




function woocommerce_dequeue_styles( $enqueue_styles ) {
   
        unset( $enqueue_styles['woocommerce-general'] );
        // unset( $enqueue_styles['woocommerce-layout'] );
        unset( $enqueue_styles['woocommerce-smallscreen'] );
    
    return $enqueue_styles;
}
add_filter( 'woocommerce_enqueue_styles', 'woocommerce_dequeue_styles' );




function my_child_theme_scripts() {
		
		wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '2.0' );
		
		wp_enqueue_script( 'parent-scrypt', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array() );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_scripts' );


function remove_price() {
      if( is_front_page()) { 
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
		remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );	
      }
}

add_action( 'woocommerce_after_shop_loop_item_title', 'bbloomer_ins_woocommerce_product_excerpt', 35, 2);
 
function bbloomer_ins_woocommerce_product_excerpt() {
     if ( !is_home() ) {
     echo '<p class="tpl-catalogue__merch-description">';
     the_excerpt();
     echo '</p>';
     }
}



function wc_dropdown_variation_attribute_options( $args = array() ) { 
    $args = wp_parse_args( apply_filters( 'woocommerce_dropdown_variation_attribute_options_args', $args ), array( 
        'options' => false,  
        'attribute' => false,  
        'product' => false,  
        'selected' => false,  
        'name' => '',  
        'id' => '',  
        'class' => 'filter',  
        'show_option_none' => __( 'Choose an option', 'woocommerce' ),  
 ) ); 
 
    $options = $args['options']; 
    $product = $args['product']; 
    $attribute = $args['attribute']; 
    $name = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title( $attribute ); 
    $id = $args['id'] ? $args['id'] : sanitize_title( $attribute ); 
    $class = $args['class']; 
    $show_option_none = $args['show_option_none'] ? true : false; 
    $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'Choose an option', 'woocommerce' ); // We'll do our best to hide the placeholder, but we'll need to show something when resetting options. 
 
    if ( empty( $options ) && ! empty( $product ) && ! empty( $attribute ) ) { 
        $attributes = $product->get_variation_attributes(); 
        $options = $attributes[ $attribute ]; 
    } 
 
    $html = '<select id="' . esc_attr( $id ) . '" class="' . esc_attr( $class ) . '" name="' . esc_attr( $name ) . '" data-attribute_name="attribute_' . esc_attr( sanitize_title( $attribute ) ) . '" data-show_option_none="' . ( $show_option_none ? 'yes' : 'no' ) . '">'; 
    $html .= '<option value="">' . esc_html( $show_option_none_text ) . '</option>'; 
 
    if ( ! empty( $options ) ) { 
        if ( $product && taxonomy_exists( $attribute ) ) { 
            // Get terms if this is a taxonomy - ordered. We need the names too. 
            $terms = wc_get_product_terms( $product->get_id(), $attribute, array( 'fields' => 'all' ) ); 
 
            foreach ( $terms as $term ) { 
                if ( in_array( $term->slug, $options ) ) { 
                    $html .= '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $args['selected'] ), $term->slug, false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name ) ) . '</option>'; 
                } 
            } 
        } else { 
            foreach ( $options as $option ) { 
                // This handles < 2.4.0 bw compatibility where text attributes were not sanitized. 
                $selected = sanitize_title( $args['selected'] ) === $args['selected'] ? selected( $args['selected'], sanitize_title( $option ), false ) : selected( $args['selected'], $option, false ); 
                $html .= '<option value="' . esc_attr( $option ) . '" ' . $selected . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option ) ) . '</option>'; 
            } 
        } 
    } 
 
    $html .= '</select>'; 
 
    echo apply_filters( 'woocommerce_dropdown_variation_attribute_options_html', $html, $args ); 
} 





function wc_varb_price_range( $wcv_price, $product ) {
 
    $prefix = sprintf('%s ', __('', 'wcvp_range'));
 
    $wcv_reg_min_price = $product->get_variation_regular_price( 'min', true );
    $wcv_min_sale_price    = $product->get_variation_sale_price( 'min', true );
    $wcv_max_price = $product->get_variation_price( 'max', true );
    $wcv_min_price = $product->get_variation_price( 'min', true );
 
    $wcv_price = ( $wcv_min_sale_price == $wcv_reg_min_price ) ?
        wc_price( $wcv_reg_min_price ) :
        '<del>' . wc_price( $wcv_reg_min_price ) . '</del>' . '<ins>' . wc_price( $wcv_min_sale_price ) . '</ins>';
 
    return ( $wcv_min_price == $wcv_max_price ) ?
        $wcv_price :
        sprintf('%s%s', $prefix, $wcv_price);
}
 
add_filter( 'woocommerce_variable_sale_price_html', 'wc_varb_price_range', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_varb_price_range', 10, 2 );



add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'UAH': $currency_symbol = ' грн'; break;
     }
     return $currency_symbol;
}


add_filter( 'rest_authentication_errors', function( $result ){

	if( empty( $result ) && ! current_user_can('edit_others_posts') ){
		return new WP_Error( 'rest_forbidden', 'You are not currently logged in.', array( 'status' => 401 ) );
	}

	return $result;
});


add_action( 'pre_get_posts', 'iconic_hide_out_of_stock_products' );

function iconic_hide_out_of_stock_products( $q ) {

    if ( ! $q->is_main_query() || is_admin() ) {
        return;
    }

    if ( $outofstock_term = get_term_by( 'name', 'outofstock', 'product_visibility' ) ) {

        $tax_query = (array) $q->get('tax_query');

        $tax_query[] = array(
            'taxonomy' => 'product_visibility',
            'field' => 'term_taxonomy_id',
            'terms' => array( $outofstock_term->term_taxonomy_id ),
            'operator' => 'NOT IN'
        );

        $q->set( 'tax_query', $tax_query );

    }

    remove_action( 'pre_get_posts', 'iconic_hide_out_of_stock_products' );

}	


add_filter( 'fw_ext_page_builder_content_wrapper_class',  function(){
     return 'tpl-section__container';
} );



function duck_product_categories( $atts ) {
        global $woocommerce_loop;

        $atts = shortcode_atts( array(
            'number'     => null,
            'orderby'    => 'name',
            'order'      => 'ASC',
            'columns'    => '4',
            'hide_empty' => 1,
            'parent'     => '',
            'ids'        => ''
        ), $atts );

        if ( isset( $atts['ids'] ) ) {
            $ids = explode( ',', $atts['ids'] );
            $ids = array_map( 'trim', $ids );
        } else {
            $ids = array();
        }

        $hide_empty = ( $atts['hide_empty'] == true || $atts['hide_empty'] == 1 ) ? 1 : 0;

        // get terms and workaround WP bug with parents/pad counts
        $args = array(
            'orderby'    => $atts['orderby'],
            'order'      => $atts['order'],
            'hide_empty' => $hide_empty,
            'include'    => $ids,
            'pad_counts' => true,
            'child_of'   => $atts['parent']
        );

        $product_categories = get_terms( 'product_cat', $args );

        if ( '' !== $atts['parent'] ) {
            $product_categories = wp_list_filter( $product_categories, array( 'parent' => $atts['parent'] ) );
        }

        if ( $hide_empty ) {
            foreach ( $product_categories as $key => $category ) {
                if ( $category->count == 0 ) {
                    unset( $product_categories[ $key ] );
                }
            }
        }

        if ( $atts['number'] ) {
            $product_categories = array_slice( $product_categories, 0, $atts['number'] );
        }

        $columns = absint( $atts['columns'] );
        $woocommerce_loop['columns'] = $columns;

        ob_start();

        if ( $product_categories ) {
            ?>
            
            <?php
            foreach ( $product_categories as $category ) {
                ?>
                <div class="col-lg-3">
                    <a href="<?php echo get_category_link($category); ?>">
						<div class="hover-block">
							<?php
								$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
									$image = wp_get_attachment_url( $thumbnail_id );
									if ( $image ) {
										echo '<div class="hover-block__image" style="background-image: url(' . $image . ');"></div>';
									}
								?>
								<?php echo $category->name; 
									echo '<div class="shop_cat_desc">'.$category->description.'</div>';
							?>
						</div>
                     </a>
                </div>
              
                <?php
            }

            woocommerce_product_loop_end();
        }

        woocommerce_reset_loop();

        return '<div class="row">' . ob_get_clean() . '</div>';
    }
add_shortcode('dd_product_categories', 'duck_product_categories');

require 'src/child-functions-header.php';
require 'src/child-functions-home.php';
require 'src/child-functions-wc.php';
require 'src/child-functions-single.php';







