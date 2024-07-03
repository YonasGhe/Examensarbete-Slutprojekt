<?php
require_once("Vite.php");

add_action('after_setup_theme', 'theme_setup');
function theme_setup() {
    add_theme_support('woocommerce');
    register_nav_menus(array(
        'header' => __('Header Menu', 'your-theme-textdomain'),
    ));
}

function enqueue_custom_styles_and_scripts() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/build/assets/app.css', array(), null);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/build/assets/app.js', array('jquery'), null, true);

    wp_localize_script('custom-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}

function exclude_wishlist_page_from_menu($items, $args) {
    $excluded_page_slug = 'wishlist';
    
    foreach ($items as $key => $item) {
        if (strpos($item->url, $excluded_page_slug) !== false || stripos($item->title, 'wishlist') !== false) {
            unset($items[$key]);
        }
    }
    return $items;
}

add_filter('wp_nav_menu_objects', 'exclude_wishlist_page_from_menu', 10, 2);

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

function cart_icon_shortcode() {
    return '<a href="' . esc_url(wc_get_cart_url()) . '" class="cart-icon"><img src="' . get_template_directory_uri() . '/resources/images/Cart.png" alt="Cart"></a>';
}
add_shortcode('cart_icon', 'cart_icon_shortcode');

function account_icon_shortcode() {
    $account_page_url = esc_url(get_permalink(get_option('woocommerce_myaccount_page_id')));
    return '<a href="' . $account_page_url . '" class="account-icon"><img src="' . get_template_directory_uri() . '/resources/images/Group-40.png" alt="My Account"></a>';
}
add_shortcode('account_icon', 'account_icon_shortcode');


function heart_icon_shortcode() {
    $wishlist_url = function_exists('yith_wcwl_get_wishlist_url') ? yith_wcwl_get_wishlist_url() : home_url('/wishlist');
    $wishlist_count = function_exists('yith_wcwl_count_products') ? yith_wcwl_count_products() : 0;

    $count_display = $wishlist_count > 0 ? '<span class="wishlist-count">' . esc_html($wishlist_count) . '</span>' : '';

    return '<a href="' . esc_url($wishlist_url) . '" class="heart-icon">
                <img src="' . get_template_directory_uri() . '/resources/images/Group.png" alt="Heart">
                ' . $count_display . '
            </a>';
}
add_shortcode('heart_icon', 'heart_icon_shortcode');

function update_wishlist_count() {
    if (function_exists('yith_wcwl_count_products')) {
        wp_send_json_success(array('count' => yith_wcwl_count_products()));
    } else {
        wp_send_json_error();
    }
}
add_action('wp_ajax_update_wishlist_count', 'update_wishlist_count');
add_action('wp_ajax_nopriv_update_wishlist_count', 'update_wishlist_count');

function custom_wishlist_scripts() {
    wp_enqueue_script( 'custom-wishlist-js', get_template_directory_uri() . '/js/custom-wishlist.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'custom_wishlist_scripts' );

?>

