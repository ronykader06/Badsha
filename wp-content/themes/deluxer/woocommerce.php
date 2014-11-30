<?php get_header(); ?>

<?php
global $post;
$args = array();

$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
                
                
                      woocommerce_content()
                    
       
			
<?php endforeach; wp_reset_query();?>


<?php get_footer(); ?>