<?php require_once(ABSPATH . '/wp-admin/includes/plugin.php'); ?>

<?php get_template_part('includes/layouts') ?>
<?php get_template_part('includes/plug') ?>
<?php $h_sm_locations = ot_get_option('h_sm_locations') ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <?php get_template_part('includes/title') ?>

        <?php get_template_part('includes/seo') ?>

        <?php get_template_part('includes/meta-viewport') ?>

        <meta name="author" content="lidplussdesign" />

        <?php get_template_part('includes/favicon') ?>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

        <div id="header">

            <?php // get_template_part('includes/header-top' ) ?>
            <div class="header-middle clearfix">
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-middle-wrap">
                                    <?php get_template_part('includes/logo') ?>
                                    <?php if (is_plugin_active('woocommerce/woocommerce.php')) { ?>
                                        <?php get_template_part('includes/cart') ?>
                                    <?php } ?>

                                    <div class="header-middle-sm social-right-align" >
                                        <span class="order-phone-icon glyphicons earphone glyphicons-icon pull-left"></span>
                                        <div class="call-order-wrapper pull-left">
                                            <span class="call_to_order">Call to Order</span>
                                            <span><strong>01850777111</strong></span>	
                                        </div>
                                    </div>

                                </div>
                                <?php get_template_part('includes/search') ?>
                                <?php if (!is_user_logged_in()): ?>
                                    <div class="dokan-login-registration">
                                        <a href="<?php echo get_permalink(wc_get_page_id('myaccount')); ?>" class="btn btn-default">Login</a>
                                        <a href="<?php echo get_permalink(wc_get_page_id('myaccount')); ?>" class="btn btn-primary">Sign Up</a>		
                                    </div>
                                <?php else: ?>
                                    <div class="dokan-after-login-menu header-menu">
                                        <nav class="navbar" role="navigation">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle custom-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                    <span class="sr-only"><?php _e('Toggle navigation', GETTEXT_DOMAIN); ?></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <span class="navbar-brand visible-xs"><?php _e('Navigation', GETTEXT_DOMAIN); ?></span>
                                            </div>
                                            <div class="collapse navbar-collapse navbar-ex1-collapse <?php if ($dropdown_font_style == "bold") { ?>dd-bold-font<?php } ?> <?php if ($navigation_font_style == "bold") { ?>bold-font<?php } ?> animation-dd">
                                                <ul class="nav navbar-nav">
                                                    <li class="dropdown"><a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="#">Hello, Sabbir <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="<?php echo get_permalink(wc_get_page_id('myaccount')); ?>"><?php _e('My Account', GETTEXT_DOMAIN); ?></a></li>
                                                            <li><a href="<?php echo wc_customer_edit_account_url(); ?>"><?php _e('Edit Account', GETTEXT_DOMAIN); ?></a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="<?php echo wc_get_endpoint_url('edit-address', 'billing', get_permalink(wc_get_page_id('myaccount'))); ?>"><?php _e('Billing Address', GETTEXT_DOMAIN); ?></a></li>
                                                            <li><a href="<?php echo wc_get_endpoint_url('edit-address', 'shipping', get_permalink(wc_get_page_id('myaccount'))); ?>"><?php _e('Shipping Address', GETTEXT_DOMAIN); ?></a></li>
                                                        </ul><div class="clearfix"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                    <?php //get_template_part('includes/menu' ) ?>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
