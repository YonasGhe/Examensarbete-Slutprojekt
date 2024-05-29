
<?php

register_nav_menus( array(
    'header' => __( 'Header Menu', 'your-theme-textdomain' ),
) );

function cart_icon_shortcode() {
    // Check if WooCommerce is active
    if (class_exists('WooCommerce')) {
        // Get the cart URL dynamically
        $cart_url = wc_get_cart_url();
        // Return the cart icon with the dynamically generated URL
        return '<a href="' . esc_url($cart_url) . '" class="cart-icon"><img src="/wp-content/themes/mytheme/resources/images/Cart.png" alt="Cart"></a>';
    } else {
        return ''; // Return empty string if WooCommerce is not active
    }
}
add_shortcode('cart_icon', 'cart_icon_shortcode');
