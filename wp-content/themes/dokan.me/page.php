<?php $sidebar_checkbox = get_post_meta($post->ID, 'sidebar_checkbox', true);?>
<?php get_header(); ?>

<?php //get_template_part('includes/title-breadcrumb' ) ?>
<div id="main" class="inner-page <?php if ($sidebar_checkbox){?>left-sidebar-template<?php }?>">
	<div class="container sticky_menu">
		<div class="row">
			<div class="col-md-12 page-content dokan-front-page">
	        <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
                <?php $post_thumbnail_id = get_post_thumbnail_id(); ?> 
                <?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);?>
	            <img class="page-thumbnail img-responsive" alt="<?php echo $alt; ?>" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'default-sidebar-page' ); echo $image[0];?>" />
	        <?php }?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.', GETTEXT_DOMAIN) ?></p>
            <?php endif; ?>
            </div>
            <?php //get_sidebar(); ?>
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