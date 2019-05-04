<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer tpl-footer" role="contentinfo">
		<div class="container">
			<div class="row">
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>
				<div class='col-lg-3 tpl-footer__col tpl-footer__col--desktop'>
					<!-- < ?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('footer-col-1');
					?> -->
				</div>
				<div class="col-lg-2 tpl-footer__col tpl-footer__col--desktop">
					<!-- < ?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('footer-col-2');
					?> -->
				</div>
				<div class="col-lg-3 col-md-4 tpl-footer__col tpl-footer__col--social">
					<!-- < ?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('footer-col-3');
					?> -->
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 tpl-footer__col tpl-footer__col--mailbox">
					<!-- < ?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('footer-col-4');
					?> -->
				</div>
			</div><!-- .row -->
		</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
