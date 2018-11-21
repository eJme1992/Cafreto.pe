<?php
   /**
    * Single variation cart button
    *
    * @see https://docs.woocommerce.com/document/template-structure/
    * @package WooCommerce/Templates
    * @version 3.4.0
    */
   
   defined( 'ABSPATH' ) || exit;
   
   global $product;
   ?>
<div class="row woocommerce-variation-add-to-cart variations_button">
   <!-- CANTIDAD -->	
 
   <div class="col-sm-4" style="margin-top:7px;">
  
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
               <div class="input-group-prepend" style="background-color:#F2F2F2;">
                  <span style="margin:5px"  id="minus-btn"><i class="fa fa-minus"></i></span>
               </div>
                   <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
      <?php
         do_action( 'woocommerce_before_add_to_cart_quantity' );
         
         woocommerce_quantity_input( array(
          'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
          'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
          'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
         ));
         
         do_action( 'woocommerce_after_add_to_cart_quantity' );          ?>
               <div class="input-group-prepend" style="background-color:#F2F2F2;">
                  <span style="margin:5px"  id="plus-btn"><i class="fa fa-plus"></i></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-8" style="margin-top:7px;text-align:center;">
      <button style="width:94%;" type="submit" class="form-control single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?> <i class="fas fa-cart-plus"></i></button>
      <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
      <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
      <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
      <input type="hidden" name="variation_id" class="variation_id" value="0" />
   </div>
</div>
  <script type="text/javascript">
      $(document).ready(function(){
      
        $('#plus-btn').click(function(){
          $('.input-text').val(parseInt($('.input-text').val()) + 1 );
              });
            $('#minus-btn').click(function(){
          $('.input-text').val(parseInt($('.input-text').val()) - 1 );
          if ($('.input-text').val() == 0) {
        $('.input-text').val(1);
      }
      
              });
      });
   </script>
   <style>
   
.qty{ 
display: inline;
width: 100% !important;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #6f4e37;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
height: 35.88px;
}
.quantity{
display: inline;
width: 60% !important;
}
    </style>
