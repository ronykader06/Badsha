<?php
/*
  Template Name: COUSTOM-HOME
 */
get_header();
?>

<!-- Content Block
================================================== -->
<section class="intro-block page-bg">

    <!-- Overlay -->
    <div class="overlay default">

        <!-- Container -->
        <div class="container">

            <!-- Text Slider -->
            <div class="text-slider no-js">

                <!-- Bxslider -->
                <ul class="bxslider" id="text-slider" data-call="bxslider" data-options="parentSelector:'.text-slider', removeParentClass:'no-js', prevText:'', nextText:'', pager:true, controls:false, mode:'horizontal', auto:true, autoReload:true">
                    <li>
                        <div class="slide">
                            <h2>a great theme for your next project!</h2>
                        </div>
                    </li>
                    <li>
                        <div class="slide">
                            <h2>made for both business and ecommerce.</h2>
                        </div>
                    </li>
                    <li>
                        <div class="slide">
                            <h2>built using latest bootstrap release.</h2>
                        </div>
                    </li>
                    <li>
                        <div class="slide">
                            <h2>most recent font awesome glyphs.</h2>
                        </div>
                    </li>
                </ul>
                <!-- /Bxslider -->

                <p class="meta">Lorem ipsum dolor sit amet, consectetur elit.</p>

                <!-- Buttons -->
                <div>
                    <a href="#about" class="scroll-to btn btn-primary"><i class="fa fa-bars"></i>learn more</a>
                    <a href="#about" class="scroll-to btn btn-white"><i class="fa fa-print"></i>start now</a>
                </div>
                <!-- Buttons -->

            </div>
            <!-- /Text Slider -->

        </div>
        <!-- /Container -->
    </div>
    <!-- /Overlay -->
</section>
<!-- /Content Block
================================================== -->

<!-- Content Block
================================================== -->
<section class="content-block min-pad-t default-bg">


    <!-- Container -->
    <div class="container">
        
        
<!--        <script type="text/javascript">  
                    jQuery(document).ready(function(){
                        jQuery("div.woocommerce").addClass("products-slider no-js").removeClass("woocommerce columns-4");
                        
                        //jQuery("ul.products").contents().unwrap();    
                        
                        jQuery("ul.products").addClass("bxslider"); 
                        jQuery("ul.products li").addClass("slide"); 
                        //jQuery(".features_items li").contents().unwrap().wrap("<div/>");
//                        jQuery(".features_items > li").each(function() {
//                            jQuery(this).contents().unwrap().wrapAll("<div/>");
//                        });

                        jQuery(".features_items > div").addClass("col-sm-4");
                          jQuery("a.added_to_cart").addClass("btn btn-default add-to-cart added_to_cart");   
                    });    
                </script>-->
        

        <?php //echo do_shortcode('[recent_products per_page="12" columns="4" orderby="date" order="desc"]');?>

        <!-- Portfolio Slider -->
        <div id="featured-products" class="products-slider no-js">

            <h4 class="slider-title"><i class="fa fa-star"></i>Featured Products</h4>

            <!-- BxSlider -->
            <ul class="bxslider" data-call="bxslider" data-options="parentSelector:'#featured-products', removeParentClass:'no-js', slideMargin:30, pager:false, nextText:'', prevText:'', autoReload:true" data-breaks="[{screen:0, slides:1},{screen:400, slides:2}, {screen:768, slides:3}, {screen:992, slides:4}]" >
                <?php
                    $args=array('post_type'=>'product','post_status'=>'publish','posts_per_page'=>4,'paged'=>  get_query_var('paged'));
                    $loop= new WP_Query($args);
                    while ($loop->have_posts()):$loop->the_post();?>
                <li class="slide">
                    <!-- Product -->
                    <div class="product">
                        <div class="image"> 
                            <a href="#" class="main"><?php the_post_thumbnail();?></a>
                            <ul class="additional">
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <div class="title">
                            
                            <a class="name" href="#">
                                <?php if(strlen($post->post_title)>30){
                                                echo substr(the_title($before='',$after='',FALSE), 0,30).' ...';
                                            }  else {
                                                the_title();
                                            }?>
                            </a>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                        <div class="links">
                            <span class="price"><?php echo $product->get_price_html();?></span>
                            <?php woocommerce_template_loop_add_to_cart(); ?>
                            
                            <a class="compare" href=""><i class="fa fa-random"></i></a>
                            <a class="wishlist" href=""><i class="fa fa-heart"></i></a>
                        </div>
                        <?php echo do_shortcode('[yith_compare_button]');?>
                            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?>
                    </div>
                    <!-- /Product -->
                </li>
                 <?php endwhile;wp_reset_query()?>

            </ul>
            <!-- BxSlider -->

        </div>
        <!-- /Portfolio Slider -->




    </div>
    <!-- /Container -->

</section>
<!-- /Content Block
================================================== -->

<!-- Content Block
================================================== -->
<section class="content-block page-bg dark-bg">

    <!-- Overlay -->
    <div class="overlay default">

        <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="section-title">		
                <h2>happy customers</h2>
                <div class="line"></div>
                <p>Deserunt sit animi totam dicta suscipit non sapiente.</p>
            </div>
            <!-- Title /END -->

            <!-- Testimonials -->
            <div class="testimonial-slider slider-mode dark-bg no-js">

                <!-- BxSlider -->
                <ul class="bxslider" data-call="bxslider" data-options="parentSelector:'.testimonial-slider', removeParentClass:'no-js', autoReload:true, slideMargin:30, nextText:'', prevText:'', pager:false, controls:true" data-breaks="[{screen:0, slides:1},{screen:600, slides:2}]">

                    <li>
                        <!-- Testimonial -->
                        <div class="testimonial clearfix">

                            <div class="avatar">
                                <img src="<?php echo IMAGES; ?>/face1.jpg" alt="John Doe">
                            </div>

                            <div class="quote-box"> 
                                <p class="quote"><i class="arrow"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitrrmod tempor invidunt ut m et justo duo dolores et ea rebum.</p>
                                <div class="author"><strong>John Doe</strong>, Web Designer </div>
                            </div>

                        </div>
                        <!-- /Testimonial -->
                    </li>

                    <li>
                        <!-- Testimonial -->
                        <div class="testimonial clearfix">

                            <div class="avatar">
                                <img src="<?php echo IMAGES; ?>/face2.jpg" alt="John Doe">
                            </div>

                            <div class="quote-box"> 
                                <p class="quote"><i class="arrow"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitrrmod tempor invidunt ut m et justo duo dolores et ea rebum.</p>
                                <div class="author"><strong>John Doe</strong>, Web Designer </div>
                            </div>

                        </div>
                        <!-- /Testimonial -->
                    </li>

                    <li>
                        <!-- Testimonial -->
                        <div class="testimonial clearfix">

                            <div class="avatar">
                                <img src="<?php echo IMAGES; ?>/face3.jpg" alt="John Doe">
                            </div>

                            <div class="quote-box"> 
                                <p class="quote"><i class="arrow"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitrrmod tempor invidunt ut m et justo duo dolores et ea rebum.</p>
                                <div class="author"><strong>John Doe</strong>, Web Designer </div>
                            </div>

                        </div>
                        <!-- /Testimonial -->
                    </li>

                    <li>
                        <!-- Testimonial -->
                        <div class="testimonial clearfix">

                            <div class="avatar">
                                <img src="<?php echo IMAGES; ?>/face1.jpg" alt="John Doe">
                            </div>

                            <div class="quote-box"> 
                                <p class="quote"><i class="arrow"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitrrmod tempor invidunt ut m et justo duo dolores et ea rebum.</p>
                                <div class="author"><strong>John Doe</strong>, Web Designer </div>
                            </div>

                        </div>
                        <!-- /Testimonial -->
                    </li>

                    <li>
                        <!-- Testimonial -->
                        <div class="testimonial clearfix">

                            <div class="avatar">
                                <img src="<?php echo IMAGES; ?>/face1.jpg" alt="John Doe">
                            </div>

                            <div class="quote-box"> 
                                <p class="quote"><i class="arrow"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitrrmod tempor invidunt ut m et justo duo dolores et ea rebum.</p>
                                <div class="author"><strong>John Doe</strong>, Web Designer </div>
                            </div>

                        </div>
                        <!-- /Testimonial -->
                    </li>

                    <li>
                        <!-- Testimonial -->
                        <div class="testimonial clearfix">

                            <div class="avatar">
                                <img src="<?php echo IMAGES; ?>/face2.jpg" alt="John Doe">
                            </div>

                            <div class="quote-box"> 
                                <p class="quote"><i class="arrow"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitrrmod tempor invidunt ut m et justo duo dolores et ea rebum.</p>
                                <div class="author"><strong>John Doe</strong>, Web Designer </div>
                            </div>

                        </div>
                        <!-- /Testimonial -->
                    </li>

                </ul>
                <!-- /BxSlider -->
            </div>
            <!-- /Testimonials -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Overlay -->

</section>
<!-- /Content Block
================================================== -->

<!-- Content Block
================================================== -->
<section class="content-block default-bg">

    <!-- Container -->
    <div class="container">

        <!-- Portfolio Slider -->
        <div id="new-products" class="products-slider no-js">

            <h4 class="slider-title"><i class="fa fa-rss"></i>Newest Products</h4>

            <!-- BxSlider -->
            <ul class="bxslider" data-call="bxslider" data-options="parentSelector:'#new-products', removeParentClass:'no-js', slideMargin:30, pager:false, nextText:'', prevText:'', autoReload:true" data-breaks="[{screen:0, slides:1},{screen:400, slides:2}, {screen:768, slides:3}, {screen:992, slides:4}]" >


                <li class="slide">
                    <!-- Product -->
                    <div class="product">
                        <div class="image"> 
                            <a href="#" class="main"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a>
                            <ul class="additional">
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <a class="name" href="#">Product Name</a>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                        <div class="links">
                            <span class="price">&#36;1500</span>
                            <a class="cart" href=""><i class="fa fa-shopping-cart"></i><span>add to cart</span></a>	
                            <a class="compare" href=""><i class="fa fa-random"></i></a>
                            <a class="wishlist" href=""><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /Product -->
                </li>

                <li class="slide">
                    <!-- Product -->
                    <div class="product">
                        <div class="image"> 
                            <a href="#" class="main"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a>
                            <ul class="additional">
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <a class="name" href="#">Product Name</a>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                        <div class="links">
                            <span class="price">&#36;1500</span>
                            <a class="cart" href=""><i class="fa fa-shopping-cart"></i><span>add to cart</span></a>	
                            <a class="compare" href=""><i class="fa fa-random"></i></a>
                            <a class="wishlist" href=""><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /Product -->
                </li>

                <li class="slide">
                    <!-- Product -->
                    <div class="product">
                        <div class="image"> 
                            <a href="#" class="main"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a>
                            <ul class="additional">
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <a class="name" href="#">Product Name</a>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                        <div class="links">
                            <span class="price">&#36;1500</span>
                            <a class="cart" href=""><i class="fa fa-shopping-cart"></i><span>add to cart</span></a>	
                            <a class="compare" href=""><i class="fa fa-random"></i></a>
                            <a class="wishlist" href=""><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /Product -->
                </li>

                <li class="slide">
                    <!-- Product -->
                    <div class="product">
                        <div class="image"> 
                            <a href="#" class="main"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a>
                            <ul class="additional">
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <a class="name" href="#">Product Name</a>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                        <div class="links">
                            <span class="price">&#36;1500</span>
                            <a class="cart" href=""><i class="fa fa-shopping-cart"></i><span>add to cart</span></a>	
                            <a class="compare" href=""><i class="fa fa-random"></i></a>
                            <a class="wishlist" href=""><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /Product -->
                </li>

                <li class="slide">
                    <!-- Product -->
                    <div class="product">
                        <div class="image"> 
                            <a href="#" class="main"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a>
                            <ul class="additional">
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <a class="name" href="#">Product Name</a>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                        <div class="links">
                            <span class="price">&#36;1500</span>
                            <a class="cart" href=""><i class="fa fa-shopping-cart"></i><span>add to cart</span></a>	
                            <a class="compare" href=""><i class="fa fa-random"></i></a>
                            <a class="wishlist" href=""><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /Product -->
                </li>

                <li class="slide">
                    <!-- Product -->
                    <div class="product">
                        <div class="image"> 
                            <a href="#" class="main"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a>
                            <ul class="additional">
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                                <li><a href="<?php echo IMAGES; ?>/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="<?php echo IMAGES; ?>/products/product1.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <a class="name" href="#">Product Name</a>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                        </div>
                        <div class="links">
                            <span class="price">&#36;1500</span>
                            <a class="cart" href=""><i class="fa fa-shopping-cart"></i><span>add to cart</span></a>	
                            <a class="compare" href=""><i class="fa fa-random"></i></a>
                            <a class="wishlist" href=""><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <!-- /Product -->
                </li>

            </ul>
            <!-- BxSlider -->

        </div>
        <!-- /Portfolio Slider -->

    </div>
    <!-- /Container -->

</section>
<!-- /Content Block
================================================== -->
<?php get_footer(); ?>