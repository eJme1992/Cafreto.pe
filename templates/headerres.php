<?php
   /**
    * The header for our theme.
    *
    * Displays all of the <head> section and everything up till <div id="content">
    *
    * @package storefront
    */
   
   ?><!doctype html>
<html <?php language_attributes(); ?>>
   <head>
	   <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T94JD8M');</script>
	<!-- End Google Tag Manager -->
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/ulg/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <?php wp_head(); ?>
      <style>
      /*Para el nav de lado*/
    .show {
    	transform: translateX(0);
    }
      /*fin el nav de lado*/
    }
#nav-movil {  
 width: 100%;
    left: 0px;
    position: absolute;
   background-color: transparent;
    padding: 0em 0em 0em 0em !important;
    min-height: 65px;
}
#primary{
  padding-left:0 !important;
  padding-right:0 !important;
  margin-left:0 !important;
  margin-right: 0 !important;
}
.w3-col {
	max-height: 69px;
}
#collapsibleNavbar {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    width: 240px;
    height: 100%;
    max-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    box-sizing: border-box;
    border-right: 1px solid #e0e0e0;
    background: #fafafa;
    -webkit-transform: translateX(-250px);
    transform: translateX(-250px);
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    will-change: transform;
    transition-duration: .2s;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-property: transform;
    transition-property: transform,-webkit-transform;
    color: #424242;
    overflow: visible;
    overflow-y: visible;
    overflow-y: auto;
    z-index: 9999999999999999999 !important;
}
.woocommerce-message{
	margin-top:6vh;
}
.fondoss{
	left: 0px;
position: sticky;width:100%;background-color:#f2f2f2; max-height:65px;
}
#coupon_code{
  margin-bottom: 15px;
}
.wc-forward{
	margin-bottom:7px;
}
site-filter{
	margin-top: 20px;
}
@media only screen and (max-width: 795px) {
.site-content{
  margin-top:2.7em;
}
.added-to-cart{display:none !important;}
}

      </style>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119804153-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-119804153-1');
      </script>
	   <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="183455055596529"
  theme_color="#6f4e37"
  logged_in_greeting="¡Hola! ¿Cómo podemos ayudarte? =)"
  logged_out_greeting="¡Hola! ¿Cómo podemos ayudarte? =)">
</div>
	   
	   <!-- Hotjar Tracking Code for cafreto.pe -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:896274,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
	   <!-- Global site tag (gtag.js) - Google Ads: 805962790 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-805962790"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-805962790');
	</script>
	   <script>
  gtag('event', 'page_view', {
    'send_to': 'AW-805962790',
    'user_id': 'replace with value'
  });
	</script>
	   <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '345774719324586');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=345774719324586&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

   </head>
   <body <?php body_class(); ?>>
	   <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T94JD8M"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	 	<!-- End Google Tag Manager (noscript) -->
      <?php do_action( 'storefront_before_site' ); ?>
      <div id="page" class="hfeed site">
      <?php do_action( 'storefront_before_header' ); ?>
      <header id="masthead"  class="site-header" role="banner" style="<?php  storefront_header_styles(); ?>">
         <?php
            $settings = pods('datos_del_sitio');
                  $logo = $settings->field('logo');
                  $telefono  = $settings->field('telefono');
                  $correo = $settings->field('correo');
            /**
             * Functions hooked into storefront_header action
             *
             * @hooked storefront_header_container                 - 0
             * @hooked storefront_skip_links                       - 5
             * @hooked storefront_social_icons                     - 10
             * @hooked storefront_site_branding                    - 20
             * @hooked storefront_secondary_navigation             - 30
             * @hooked storefront_product_search                   - 40
             * @hooked storefront_header_container_close           - 41
             * @hooked storefront_primary_navigation_wrapper       - 42
             * @hooked storefront_primary_navigation               - 50
             * @hooked storefront_header_cart                      - 60
             * @hooked storefront_primary_navigation_wrapper_close - 68
             */
            //do_action( 'storefront_header' ); ?>
         <div>
            <div class="row clearfix">
               <nav id='navega' class="navbar visible-xs-block" role="navigation" style="width: 100%">
                  <div class="container-fluid w3-row" >
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="w3-col s2">
                        <a id='img-centro' href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo['guid']; ?>" class="img-fluid animated slideInUp logo" alt="Logo"/ style="max-height: 45px;"></a>
                     </div>
                     <nav id="nav" class="w3-col s9" role="navigation" style="text-align:right;">
                        <?php wp_nav_menu( 
                           array(
                           	'theme_location' => 'primaryy', 
                           	'menu_class' => 'nav nav-pills text-right justify-content-end',
                           	'container' => '',
                           	
                           	) 
                           ); ?>
                        <span id='icons_menu'  >
                           <span>
                            <button  class="icons abrir_carrito"><i class='fas fa-shopping-cart' ></i></button>
                            <!--  <button  class="icons" data-toggle="dropdown"><i class='fas fa-shopping-cart' ></i></button>
                              <div class="dropdown-menu card-body container text-center" style="left: 62vw !important;overflow:auto;max-height:40vw;width:30vw;z-index:9999;">
                                 <?php dynamic_sidebar( 'carrito' ); ?>
                              </div>-->
                           </span>
                           <span>
                           <a class="icons" href="https://cafreto.pe/mi-cuenta/">
                           <button class="icons"><i class='fas fa-user'></i></button></a></span>
                        </span>
                     </nav>
                  </div>
               </nav>
               <!-- ESTRUCTURA PARA NAV RESPONSIVE -->
               <nav class='navbar navega-movil hidden-xs' id="nav-movil">
                  <div class="row w3-row">
                     <div class='mx-auto row text-right fondoss'>
                        <div class="w3-col s4 card-body d" style="text-align: left;">
                        <button class="navbar-toggler  ico-ba" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <i class='fas fa-bars fa-lg'></i>
                        </button>
                        </div>
                        <div class="w3-col s4 logor" style="max-height:100px;">
                        <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo['guid']; ?>" class="img-fluid w3-center animated slideInUp logo" alt="Logo" style="max-width:170px;margin: auto;width:100%;"/></a>
                        </div>
                        <div class="w3-col s4 card-body is">
                           <!--<span class="iconos-r">
                              <button  class="icons" data-toggle="dropdown"><i class='fas fa-shopping-cart' ></i></button>
                              <style>.cdd{position: absolute; !important;}</style>
                              <div class="dropdown-menu card-body container text-center cdd" style="overflow:auto;max-height:40vw;width:30vw;z-index:9999;">
                                 <?php dynamic_sidebar( 'carrito' ); ?>
                              </div>
                           </span>-->
                           <span class="iconos-r">
                           <a class="icons" href="https://cafreto.pe/mi-cuenta/">
                           <button class="icons"><i class='fas fa-user'></i></button></a></span> 
                        </div>
                     </div>
                     <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <?php wp_nav_menu( 
                           array(
                           	'theme_location' => 'primaryy', 
                           	'menu_class' => 'nav nav-pills nav_movil  flex-column menu-r',
                           	'container' => '',
                           	
                           	) 
                           ); ?>
                     </div>
                  </div>
               </nav style="margin-bottom:4vw;">
            </div>
         </div>
      </header>
      <!-- #masthead -->
      <?php
         /**
          * Functions hooked in to storefront_before_content
          *
          * @hooked storefront_header_widget_region - 10
          * @hooked woocommerce_breadcrumb - 10
          */
         do_action( 'storefront_before_content' ); ?>
      <div id="content" class="site-content" tabindex="-1">
      <div>
      <!--class="col-full"-->
      <?php
      do_action( 'storefront_content_top' );
