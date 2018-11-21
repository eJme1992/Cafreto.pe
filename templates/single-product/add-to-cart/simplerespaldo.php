<?php
   /**
    * Simple product add to cart
    *
    * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
    *
    * HOWEVER, on occasion WooCommerce will need to update template files and you
    * (the theme developer) will need to copy the new files to your theme to
    * maintain compatibility. We try to do this as little as possible, but it does
    * happen. When this occurs the version of the template file will be bumped and
    * the readme will list any important changes.
    *
    * @see https://docs.woocommerce.com/document/template-structure/
    * @package WooCommerce/Templates
    * @version 3.4.0
    */?>
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

<?php
   defined( 'ABSPATH' ) || exit;
   
   global $product;
   
   if ( ! $product->is_purchasable() ) {
   	return;
   }
   
   echo wc_get_stock_html( $product ); // WPCS: XSS ok.
   
   if ( $product->is_in_stock() ) : ?>
<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
  <div class="row">
  <div class="col-sm-6">
   <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
   <?php
      
    /**  do_action( 'woocommerce_before_add_to_cart_quantity' );
      
      woocommerce_quantity_input( array(
      	'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
      	'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
      	'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
      ) );
      
      do_action( 'woocommerce_after_add_to_cart_quantity' ); */
      ?>
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
    
   <div class="col-sm-6">
   <button style="width:94%; margin-left:6px;" type="submit" class="form-control single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?> <i class="fas fa-cart-plus"></i></button>
 </div>
</div>
   <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

</form>
<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
<?php endif; ?>
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
