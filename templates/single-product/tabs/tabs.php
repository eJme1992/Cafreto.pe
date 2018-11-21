<?php
   /**
    * Single Product tabs
    *
    * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
    *
    * HOWEVER, on occasion WooCommerce will need to update template files and you
    * (the theme developer) will need to copy the new files to your theme to
    * maintain compatibility. We try to do this as little as possible, but it does
    * happen. When this occurs the version of the template file will be bumped and
    * the readme will list any important changes.
    *
    * @see 	https://docs.woocommerce.com/document/template-structure/
    * @author  WooThemes
    * @package WooCommerce/Templates
    * @version 2.4.0
    */
   
   if ( ! defined( 'ABSPATH' ) ) {
   	exit;
   }
   
   /**
    * Filter tabs and allow third parties to add their own.
    *
    * Each tab is an array containing title, callback and priority.
    * @see woocommerce_default_product_tabs()
    */
   $tabs = apply_filters( 'woocommerce_product_tabs', array() );
   
   if ( ! empty( $tabs ) ) : ?>
<div>
   <div rules="cols">
      <div class="row card-body">
         <?php $i =1;?>
         <?php foreach ( $tabs as $key => $tab ) : ?>
         <div  class="card-body text-justify<?php if($i%2!==0){ echo ' col-lg-6';}else{ echo ' col-lg-6';} $i=$i+1;?>"  style="background-color:#FFF; border-radius:10px;">
            <?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
 
</div>
<?php endif; ?>


