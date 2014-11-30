<?php
/**
 * Content wrappers
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
?>	
			
            </div>
            
			<?php if(is_singular( 'product' )){ ?>

				<?php if ( is_active_sidebar(6) ){?>
				    <div class="col-md-2">
					    <div class="sidebar">
					    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Product Post Sidebar') ) ?>
					    </div>
				    </div>
				<?php } ?>
			<?php } else{?>
				<?php if ( is_active_sidebar(5) ){?>
					<div class="col-md-3">
					    <div class="sidebar">
					    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Shop Sidebar') ) ?>
					    </div>
					</div>
				<?php } ?>
			<?php } ?>
			</div>

			<div class="dokan-cart-details col-md-3" style="display:none">
                <div class="vc_separator wpb_content_element vc_el_width_100">
                    <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                    <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                </div>
                <?php  require_once( THEMEPATH. '/includes/cart-details-info.php' ); ?>
            
            </div>
		</div>
	</div>
</div>