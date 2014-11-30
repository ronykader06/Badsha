<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Deluxer Shop :: Home</title>

    <!-- Bootstrap core CSS
    ================================================== -->
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template
    ================================================== -->
   <!--  <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/bxslider.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

   <?php wp_head(); ?>
    <?php global $woocommerce; ?>
  </head>

  <body>

    <!-- Page Wrapper
    ================================================== -->
    <div id="page-wrapper">
      
      <!-- Header
      ================================================== -->
      <header id="header">
      
        <!-- Top Bar -->
        <div id="top-bar" class="open">

          <!-- Container -->
          <div class="container">

            <!-- Left Nav -->
            <ul class="links pull-left hidden-xs">
              <li><a href="#"><i class="fa fa-envelope"></i>support@domain.com</a></li>
              <li><a href="#"><i class="fa fa-user"></i>Phone: +48 880 440 110</a></li>
            </ul>
            <!-- /Left nav -->

            <!-- Right Nav -->
            <ul class="links pull-right no-float-xs">
              <li><a href="#"><i class="fa fa-rss"></i>feed</a></li>
              <li><a href="#"><i class="fa fa-bars"></i>statements</a></li>
              <li><a href="#"><i class="fa fa-download"></i>downloads</a></li>
            </ul>
            <!-- /Right nav -->

          </div>
          <!-- /Container-->
          
        </div>
        <!-- /Top Bar -->

        <!-- Main Navigation -->
        <div  id="main-nav" class="navbar navbar-default shop">

          <!-- Container -->
          <div class="container" >

            <!-- header -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars fa-lg"></span>
              </button>
              <a href="index.html" class="navbar-brand">
                <i class="fa fa-graduation-cap alt-color"></i>Delu<span class="color-1">xer</span>
              </a>
            </div>
            <!-- /header-->
            
            <!-- nav-collapse -->
            <div class="navbar-collapse collapse">
            
              <!-- Nav Buttons -->
              <ul class="nav navbar-nav nav-buttons navbar-right">
                <li><a class="nav-btn icon-only bg-1" href="shop-index.html"><i class="fa fa-home"></i><span class="xs-only">home</span></a></li>
                <li><a class="nav-btn icon-only top-bar-toggle open" href="#top-bar" data-custom-toggle="slide" data-class="open" data-target="#top-bar"><span class="symbol"></span></a></li>
              </ul>
              <!-- /Nav Buttons -->
              
              <!-- Nav Buttons -->
              <ul class="nav navbar-nav nav-buttons navbar-right">
                <li>
                    <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
                            <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
                        </a>
                    <a class="nav-btn bg-1" href="shop-cart"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">0 item(s)</span></a>
                </li>
              </ul>
              <!-- /Nav Buttons -->
              
              <!-- Header Search -->
              <form class="navbar-form header-search navbar-right" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary btn-search"></button>
              </form>
              <!-- /Header Search -->

              <!-- Links -->
              

              <?php 
                wp_nav_menu(array(
                  'Theme_location' =>'main_menu',
                  'depth'    => 0,
                  //'container'=> 'ul',
                  //'container_class'=> 'nav navbar-nav navbar-right',
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                  //'walker'      => new wp_bootstrap_navwalker()

                  )

                  );

               ?>


            </div>
            <!-- /nav-collapse-->
            
          </div>
          <!-- /Container-->
          
        </div>
        <!-- /Main Navigation -->
      
      </header>
      <!-- /Header
      ================================================== -->