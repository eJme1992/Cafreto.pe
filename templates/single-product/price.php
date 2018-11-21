<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<style type="text/css">
	.price-hh{ color:#CE6108;
	font-size: 0.8em; 
	text-align:right;}
</style>
<style type="text/css">
	.price-hhh{ color:#CE6108;
	font-size: 0.8em; 
	text-align:left;}
</style>
<?php $var=get_post_meta($product->get_id(), 'dias_de_tueste', true);?>

<div class="row">
	<div class="col-7 price-hhh" style="<?php if($var==''){echo 'display:none'; }?>">Bolsa de café de 250 g.</div>
	<div class="col-5 <?php if($var==''){echo 'offset-md-7'; }?>"><p class="price-hh" ><?php echo $product->get_price_html(); ?></p></div>
</div>
