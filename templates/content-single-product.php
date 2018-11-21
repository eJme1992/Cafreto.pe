<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<style type="text/css">
	body{
		background-color: #F8F8F8;
	}
	.single_add_to_cart_button{
		
		width: 100%;
	}
	.woocommerce-product-gallery__image{
		width: 100%;
	}
.storefront-product-pagination a {
    display: none;
  }
  .desc h1,h2,h3,h4,h5 {
   margin-top:0; margin-bottom:0;}

   .desc div {
   	padding-right: 0px !important;
    padding-left: 0px !important;
   }

  .zoomImg{ width: 1000px !important; height: 1000px !important;  }

  #informacion { width: 100% !important }
   .row {margin-left:0px; margin-right:0px;}
   .site {

    overflow-x: visible !important;

}
</style>
<div class="row card-body" style="width:100%;>
<div class="card-body">	
<div id="product-<?php the_ID(); ?>" class="row card-body" style="width:100%;background-color:#fff;border-radius:10px;">

	

	<div class="col-lg-5 card-body center-block desc" style="margin-left:4.15%">
	 <div>
		<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */

           remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
           remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
           // add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
           add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 40 );
		   do_action( 'woocommerce_single_product_summary' );
		?>
	</div>
	</div>
    
    <div class="col-lg-5 card-body offset-md-1 imgp">
    <div>
	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
   </div>
   </div>
   <?php 
   $dias_de_tueste=get_post_meta($post->ID, 'dias_de_tueste', true);
   $lu=get_post_meta($post->ID, 'lunes', true);
   $ma=get_post_meta($post->ID, 'martes', true);
   $mi=get_post_meta($post->ID, 'miercoles', true);
   $ju=get_post_meta($post->ID, 'jueves', true);
   $vi=get_post_meta($post->ID, 'viernes', true);
   $sa=get_post_meta($post->ID, 'sabado', true);
   $do=get_post_meta($post->ID, 'domingo', true);
   ?>
   <div class="col-lg-12 text-center" style="display:<?php if($dias_de_tueste!=1){echo 'none'; } ?>">
    <h1>Días de tueste</h1>
<p>Tu café será tostado en estos días y te lo enviaremos al día siguiente</p>
<h2 style="padding-top:0px;padding-bottom:0px;margin-top: 0px; font-weight: bold;color: #e7e7e7;">
<span style="<?php if($lu==1){echo 'color:#000000;'; }?>">Lun</span> 
<span style="<?php if($ma==1){echo 'color:#000000;'; }?>">Mar</span>
<span style="<?php if($mi==1){echo 'color:#000000;'; }?>">Mie</span> 
<span style="<?php if($ju==1){echo 'color:#000000;'; }?>">Jue</span> 
<span style="<?php if($vi==1){echo 'color:#000000;'; }?>">Vie</span> 
<span style="<?php if($sa==1){echo 'color:#000000;'; }?>">Sab</span> 
<span style="<?php if($do==1){echo 'color:#000000;'; }?>">Dom</span>
</h2>
   </div>
   </div>
   </div>
   
   <div class="row" id="informacion">
   <div class="stf" style="width:100%;">
	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
   </div>

 <div class="col-lg-12 s">
<?php do_action( 'woocommerce_after_single_product' ); ?>
</div>

   </div>

