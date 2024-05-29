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
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

function cart_icon_shortcode() {
    return '<a href="' . esc_url(wc_get_cart_url()) . '" class="cart-icon"><img src="' . get_template_directory_uri() . '/resources/images/Cart.png" alt="Cart"></a>';
}
add_shortcode('cart_icon', 'cart_icon_shortcode');

function account_icon_shortcode() {
    return '<a href="' . esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))) . '" class="account-icon"><img src="' . get_template_directory_uri() . '/resources/images/Group-40.png" alt="My Account"></a>';
}
add_shortcode('account_icon', 'account_icon_shortcode');

function heart_icon_shortcode() {
    $wishlist_url = function_exists('yith_wcwl_get_wishlist_url') ? yith_wcwl_get_wishlist_url() : home_url('/wishlist');
    return '<a href="' . esc_url($wishlist_url) . '" class="heart-icon"><img src="' . get_template_directory_uri() . '/resources/images/Group.png" alt="Heart"></a>';
}
add_shortcode('heart_icon', 'heart_icon_shortcode');
?>
