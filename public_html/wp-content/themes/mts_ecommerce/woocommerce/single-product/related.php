<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php if ( version_compare( WC()->version, '3.0.0', ">=" ) ) {

	if ( $related_products ) : ?>

		<div class="related-products">
			<div class="featured-category-title"><?php _e( 'Related Products', MTS_THEME_TEXTDOMAIN ); ?></div>
			<div class="related-products-container clearfix">
	        	<div id="slider" class="related-products-category">
				<?php foreach ( $related_products as $related_product ) :

					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); ?>

					<?php wc_get_template_part( 'content', 'product-related-carousel' ); ?>

				<?php endforeach; // end of the loop. ?>
				</div>
				<div class="custom-nav">
	          <a class="btn related-products-prev"><i class="fa fa-angle-left"></i></a>
	          <a class="btn related-products-next"><i class="fa fa-angle-right"></i></a>
	        </div>
			</div>
		</div>

	<?php endif; ?>

<?php } else { ?>

	<?php
	global $product, $woocommerce_loop;

	$related = $product->get_related( $posts_per_page );

	if ( sizeof( $related ) == 0 ) return;

	$args = apply_filters( 'woocommerce_related_products_args', array(
		'post_type'            => 'product',
		'ignore_sticky_posts'  => 1,
		'no_found_rows'        => 1,
		'posts_per_page'       => $posts_per_page,
		'orderby'              => $orderby,
		'post__in'             => $related,
		'post__not_in'         => array( $product->get_id() )
	) );

	$products = new WP_Query( $args );

	$woocommerce_loop['columns'] = $columns;

	if ( $products->have_posts() ) : ?>

		<div class="related-products">
			<div class="featured-category-title"><?php _e( 'Related Products', MTS_THEME_TEXTDOMAIN ); ?></div>
			<div class="related-products-container clearfix">
	        	<div id="slider" class="related-products-category">
				<?php while ( $products->have_posts() ) : $products->the_post(); ?>

					<?php wc_get_template_part( 'content', 'product-related-carousel' ); ?>

				<?php endwhile; // end of the loop. ?>
				</div>
				<div class="custom-nav">
	          <a class="btn related-products-prev"><i class="fa fa-angle-left"></i></a>
	          <a class="btn related-products-next"><i class="fa fa-angle-right"></i></a>
	        </div>
			</div>
		</div>

	<?php endif; ?>

<?php }

wp_reset_postdata();
