<?php
/**
 * Content wrappers
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly?>
<?php $sidebar_checkbox = ''; ?>
<?php global $post;?>
<?php

if( is_tax() ) {
	global $wp_query;
	$term =	$wp_query->queried_object;
	$term_id = '';
	if( $term->parent == 0 ) {
		$term_id = $term->term_id;
		$term_name = $term->name;
	} else {
		$term_id = $term->parent;
		$term_name_obj = get_term_by( 'id', $term->parent, 'product_cat' );
		$term_name = $term_name_obj->name;
	}  

	$categories=get_categories(
	    array( 'parent' => $term_id, 'taxonomy' => 'product_cat' )
	);
}

//var_dump( $term );

?>
<?php if (is_shop()){?>
	<?php if (!is_search()){?>
		<?php $shop_page = get_post( woocommerce_get_page_id( 'shop' ) ); ?>
		<?php $sidebar_checkbox = get_post_meta($shop_page->ID, 'sidebar_checkbox', true);?>
	<?php }?>
<?php } elseif (is_singular( 'product' )){?>
	<?php $sidebar_checkbox = get_post_meta($post->ID, 'sidebar_checkbox', true); ?>
<?php }?>

<?php //get_template_part('includes/title-breadcrumb' ) ?>
<div id="main" class="inner-page <?php if ($sidebar_checkbox){?>left-sidebar-template<?php }?>">
	<div class="container sticky_menu">
		<div class="row">
		<div class="col-md-12 dokan-front-page">

		<?php if ( is_tax() ): ?>
			<div class="col-md-3">
			<div class="widget widget_categories">
				<h4 class="title"><?php echo $term_name; ?></h4>
				<?php if ( $categories ): ?>
					<ul>
						<?php foreach ($categories as $category ): ?>
							<li <?php echo ( $term->term_id == $category->term_id ) ? 'class="active"': '' ?>><a href="<?php echo get_term_link( (int)$category->cat_ID, 'product_cat' ); ?>"><?php echo $category->name; ?></a></li>	
						<?php endforeach ?>
					</ul>
				<?php else: ?>
					<?php _e( '<p>No Category found under this category</p>', GETTEXT_DOMAIN ); ?>	
				<?php endif ?>
			</div>
			</div>
		<?php endif ?>

		<?php if(is_singular( 'product' )){ ?>
			<?php if ( is_active_sidebar(6) ){?>
				<div class="col-md-10 page-content shop-post-page">
			<?php } else{?>
				<div class="col-md-12 page-content shop-post-page">
			<?php } ?>
		<?php } else{?>
			<?php if ( is_active_sidebar(5) ){?>
				<div class="col-md-9 page-content shop-page">
			<?php } elseif ( is_tax() ) { ?>
				<div class="col-md-9 page-content shop-page">
			<?php } else{?>
				<div class="col-md-12 page-content shop-page">
			<?php } ?>
		<?php } ?>
