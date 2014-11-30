<?php
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/images');

function add_style() {
    wp_enqueue_style('root-style', THEMEROOT . '/style.css');
    wp_enqueue_style('bootstrap', THEMEROOT . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('prettyPhoto', THEMEROOT . '/css/prettyPhoto.css');
    wp_enqueue_style('bxslider', THEMEROOT . '/css/bxslider.css');
    wp_enqueue_style('default', THEMEROOT . '/css/default.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', THEMEROOT . '/bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-bxslider', THEMEROOT . '/js/jquery.bxslider-rahisified.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-prettyPhoto', THEMEROOT . '/js/jquery.prettyPhoto.js', array('jquery'), false, true);
    wp_enqueue_script('jflickrfeed-custom', THEMEROOT . '/js/jflickrfeed.custom.js', array('jquery'), false, true);
    wp_enqueue_script('tweetable-jquery', THEMEROOT . '/js/tweetable.jquery.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-timeago', THEMEROOT . '/js/jquery.timeago.js', array('jquery'), false, true);
    wp_enqueue_script('template', THEMEROOT . '/js/template.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'add_style');

function register_my_menu() {
    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'wedevs'),
    ));
}

add_action('init', 'register_my_menu');

//FUNCTION FOR CUSTOM POST
function custom_post() {

//Register for Feature Images
    register_post_type('feature-items', array(
        'labels' => array(
            'name' => __('Feature Image'),
            'singular_name' => __('Feature Image'),
            'add_new_item' => __('Add New Feature')
        ),
        'public' => true,
        'supports' => array('author', 'editor', 'thumbnail', 'title', 'custom-fields'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'feature-item'),
            )
    );
}

add_action('init', 'custom_post');

//FUNCTION FOR TAXONOMY
function custom_taxonomy() {
    //Register for Feature Images
    register_taxonomy(
            'feature_cat', //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
            'feature-items', //post type name
            array(
        'hierarchical' => true,
        'label' => 'Feature Category', //Display name
        'query_var' => true,
        'show_admin_column' => true,
        'rewrite' => array(
            'slug' => 'feature-category', // This controls the base slug that will display before each term
            'with_front' => true // Don't display the category base before
        )
            )
    );
}

add_action('init', 'custom_taxonomy');

add_theme_support('post-thumbnails', array('post', 'feature-items'));
add_image_size('feature-size', 229, 229, true);


add_theme_support('woocommerce');

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments) {
    global $woocommerce;

    ob_start();
    ?>
    <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
    <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
    </a>
    <?php
    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}
