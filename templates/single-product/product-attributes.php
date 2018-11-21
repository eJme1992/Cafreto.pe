<?php
   /**
    * Product attributes
    *
    * Used by list_attributes() in the products class.
    *
    * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
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
    * @version     3.1.0
    */
   
   if ( ! defined( 'ABSPATH' ) ) {
   	exit;
   }
   ?>
<div class="row shop_attributes">
   <?php 
      $i=1;?>
   <div class="row card-body">
      <?php foreach ( $attributes as $attribute ) : ?>
      <div class="row <?php if (wc_attribute_label($attribute->get_name())=='TIPO'){ echo "col-md-12";}else{echo "col-md-6";} ?>">
         <div class="col-sm-12" style="background-color:#FFFFFF !important">
            <?php if ($attribute->get_name()!='COLOR'){?>
            <?php if ( ((wc_attribute_label($attribute->get_name())=='REGION') OR (wc_attribute_label($attribute->get_name())=='VARIEDAD') OR (wc_attribute_label($attribute->get_name())=='PRODUCTOR') OR (wc_attribute_label($attribute->get_name())=='ALTITUD') OR (wc_attribute_label($attribute->get_name())=='PROCESO') OR (wc_attribute_label($attribute->get_name())=='ORIGEN') OR (wc_attribute_label($attribute->get_name())=='TIPO')) AND ($i>1) ){?> 
            <img src="https://cafreto.pe/iconos/product_<?php echo $i ?>.png"  style="display:inline-block;width:25px;">&nbsp<?php } ?><?php echo wc_attribute_label( $attribute->get_name() ); ?> 
            <?php }else{ ?>  
            <? } ?>
         </div>
         <div  class="col-sm-<?php if ( wc_attribute_label($attribute->get_name())=='TIPO'){ echo '12'; }else{echo '12';}?>">
            <?php if (wc_attribute_label($attribute->get_name())=='TIPO'){ echo "<h1><b>";} ?>
            <?php $i++;
               $values = array();
               
               
               if ( $attribute->is_taxonomy() ) {
               	$attribute_taxonomy = $attribute->get_taxonomy_object();
               	$attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'all' ) );
               
               	foreach ( $attribute_values as $attribute_value ) {
               		$value_name = esc_html( $attribute_value->name );
               
               		if ( $attribute_taxonomy->attribute_public ) {
                     //$values[] = '<a href="' . esc_url( get_term_link( $attribute_value->term_id, $attribute->get_name() ) ) . '" rel="tag">' . $value_name . '</a>';
                     $values[] = $value_name;
               		} else {
               			$values[] = $value_name;
               		}
               	}
               } else {
               	$values = $attribute->get_options();
               
               	foreach ( $values as &$value ) {
               		$value = make_clickable( esc_html( $value ) );
               	}
               }
               
               echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );
               ?>
            <?php if (wc_attribute_label($attribute->get_name())=='TIPO'){ echo "</b></h1>";} ?>
         </div>
      </div>

      
      <?php endforeach; ?>
      <!--       <?php if ( $display_dimensions && $product->has_weight() ) : ?>
         <div class="row card-body aca">
            <div class="sm-6" style="background-color:#FFFFFF !important"> <img  src="https://cafreto.pe/iconos/product_origin.png" width="6%" style="display:inline-block">&nbsp<?php _e( 'Weight', 'woocommerce' ) ?></div>
            <div class="sm-6" style="background-color:#FFFFFF !important"><?php echo esc_html( wc_format_weight( $product->get_weight() ) ); ?></div>
         </div>
         <?php endif; ?>
         <?php if ( $display_dimensions && $product->has_dimensions() ) : ?>
         <div class="row card-body aca">
            <div class="sm-6"><?php _e( 'Dimensions', 'woocommerce' ) ?></div>
            <div class="sm-6 product_dimensions"><?php echo esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ); ?></div>
         </div>
         <?php endif; ?> -->
   </div>
</div>
<!-- fin de la tabla-->
