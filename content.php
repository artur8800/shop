<?php
/**
 * Template used to display post content.
 *
 * @package storefront
 */

?>



	<?php
	/**
	 * Functions hooked in to storefront_loop_post action.
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_content         - 30
	 */
	do_action( 'storefront_loop_post' );
	?>


