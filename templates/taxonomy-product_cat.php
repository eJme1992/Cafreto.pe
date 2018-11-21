<?php
   /**
    * The Template for displaying products in a product category. Simply includes the archive template
    *
    * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
    *
    * HOWEVER, on occasion WooCommerce will need to update template files and you
    * (the theme developer) will need to copy the new files to your theme to
    * maintain compatibility. We try to do this as little as possible, but it does
    * happen. When this occurs the version of the template file will be bumped and
    * the readme will list any important changes.
    *
    * @see      https://docs.woocommerce.com/document/template-structure/
    * @package  WooCommerce/Templates
    * @version     1.6.4
    */
   
   if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
   }
   //defined( 'ABSPATH' ) || exit;
   get_header( 'shop' );
   ?>
<style>
   .site-main ul.products.columns-3 li.product{
   border-style: solid;
   border-width: 1px;
   border-radius:3px;
   border-color:#d2d2d2;
   background-color:#F2F2F2;
   }
   .berocket_aapf_widge { background-color:#f9f9f9 !important;}
   .widget-title{
   font-size:18px;
   padding-bottom:10px;
   padding-top:10px;
   border-bottom-style:solid;
  border-bottom-width:1px;
   border-bottom-color: #636060 !important;
  background-color:#eeeeee !important;
   min-height:30px;
      }
   .border-top{
    border-top-width: 1px !important;
    border-top-style: solid !important; 
    border-top-color: #636060 !important;

   }
   .widget-title span{
   margin-top:15px;
   margin-left:30px;
   line-height:40px;
   }
   .col-md-3{
   padding-right: 0px;
   padding-left: 0px;
   }
   .card-body{
    border:none;
   }
   .site-filter {
   display:none;
   }
   .sitefilter{
     border-right-width: 1px !important;
    border-right-color: #636060 !important;
      border-right-style:solid !important;
      border-bottom-width: 1px;
    border-bottom-color: #636060 !important;
      border-bottom-style:solid !important;
   }
   input[type="checkbox"] + label, input[type="radio"] + label {
    margin-left: 40px;
}
   @media(max-width:600px){
   .site-filter {
   display:block !important;
   }
   .sitefilter{
   display:none; 
   }
   }
   .m-b{
    border-bottom-style:solid;
  border-bottom-width:1px;
   }
</style>
<div class="row">
   <div class="col-md-3" style="background-color:#FFF;">
      
      <div class="sitefilter">
        <div class="card-body m-b" style="background-color:#f9f9f9;">
         <i class="fa fa-filter"></i> Filtros
      </div>
         <?php dynamic_sidebar( 'lateral' ); ?>
      </div>
      <div class="site-filter">
        <div class="card-body m-b">
        <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#demo">
         <i class="fa fa-filter"></i> Filtros
         </button>
       </div>
         <div id="demo" class="collapse">
            <?php dynamic_sidebar( 'lateral' ); ?>
         </div>
      </div>
   </div>
   <div class="col-md-9">
      <div class="card-body">
         <?php wc_get_template( 'archive-product.php' ); ?>
      </div>
   </div>
</div>
<?php get_footer( 'shop' );?>
<script type="text/javascript">
  
  for (y=1;y<5;y++){
 document.getElementsByClassName("widget-title")[y].classList.add("border-top");}

</script>