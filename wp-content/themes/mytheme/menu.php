
<?php

register_nav_menus( array(
    'header' => __( 'Header Menu', 'your-theme-textdomain' ),
) );

function cart_icon_shortcode() {
    if (class_exists('WooCommerce')) {
        $cart_url = wc_get_cart_url();
        
        return '<a href="' . esc_url($cart_url) . '" class="cart-icon"><img src="/wp-content/themes/mytheme/resources/images/Cart.png" alt="Cart"></a>';
    } else {
        return ''; 
    }
}
add_shortcode('cart_icon', 'cart_icon_shortcode');
