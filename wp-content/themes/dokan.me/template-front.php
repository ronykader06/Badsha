<?php 
/*
Template Name: Front Template
*/?>

<?php get_header(); ?>

<div id="main" class="front-page sticky_menu">
	<div class="container">
		<div class="row">
			<div class="col-md-12 page-content dokan-front-page">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.', GETTEXT_DOMAIN) ?></p>
            <?php endif; ?>
            </div>
            <div class="dokan-cart-details col-md-3" style="display:none">
                <div class="vc_separator wpb_content_element vc_el_width_100">
                    <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                </div>
                
                <?php  include( THEMEPATH. '/includes/cart-details-info.php' ); ?>
            
            </div>

		</div>
	</div>
</div>
        
<?php get_footer(); ?>