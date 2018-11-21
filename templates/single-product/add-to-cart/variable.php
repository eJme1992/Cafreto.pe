<?php
   /**
    * Variable product add to cart
    *
    * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
    *
    * HOWEVER, on occasion WooCommerce will need to update template files and you
    * (the theme developer) will need to copy the new files to your theme to
    * maintain compatibility. We try to do this as little as possible, but it does
    * happen. When this occurs the version of the template file will be bumped and
    * the readme will list any important changes.
    *
    * @see https://docs.woocommerce.com/document/template-structure/
    * @package WooCommerce/Templates
    * @version 3.4.1
    */
   
   defined( 'ABSPATH' ) || exit;
   
   global $product;
   
   $attribute_keys = array_keys( $attributes );
   
   do_action( 'woocommerce_before_add_to_cart_form' ); ?>
   <style type="text/css">
    .form select {
    display: inline;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
     font-size: 14px;
    line-height: 1.42857143;
    color:#6f4e37;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.form select option {
  color:#6f4e37;
}
     
   </style>
   <form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $available_variations ) ); // WPCS: XSS ok. ?>">
   <?php do_action( 'woocommerce_before_variations_form' ); ?>
   <?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
   <p class="stock out-of-stock"><?php esc_html_e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
   <?php else : ?>
   <div class="row variations" cellspacing="0">
      <?php foreach ( $attributes as $attribute_name => $options ) : ?>
      <div class="col-md-12" class="label" style="color:#6f4e37;margin-top:2px;"><b><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></b></div> 
      <div class="value col-md-6 form">
         <?php
            wc_dropdown_variation_attribute_options( array(
            	'options'   => $options,
            	'attribute' => $attribute_name,
            	'product'   => $product,
            ));

             /*echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : ''; */
            ?>
      </div>
      <?php endforeach; ?>
   </div>
   <div class="single_variation_wrap">
      <?php
         /**
          * Hook: woocommerce_before_single_variation.
          */
         do_action( 'woocommerce_before_single_variation' );
         
         /**
          * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
          *
          * @since 2.4.0
          * @hooked woocommerce_single_variation - 10 Empty div for variation data.
          * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
          */
         do_action( 'woocommerce_single_variation' );
         
         /**
          * Hook: woocommerce_after_single_variation.
          */
         do_action( 'woocommerce_after_single_variation' );
         ?>
   </div>
   <?php endif; ?>
   <?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>
<?php
do_action( 'woocommerce_after_add_to_cart_form' );
