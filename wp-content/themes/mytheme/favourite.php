<?php
function add_shortcode_to_single_product() {
    echo do_shortcode('');
}
add_action('woocommerce_before_single_product', 'add_shortcode_to_single_product');

function custom_shortcode_function($atts) {
    $atts = shortcode_atts(
        array(
            'placeholder' => 'Enter your text',
            'icon_image' => 'default-icon.png',
        ),
        $atts,
        'custom_shortcode'
    );
    ob_start();
    ?>
    <li class="menu-item menu-item-heart">
        <a href="#" class="heart-icon" data-product-id="PRODUCT_ID">
            <img src="/wp-content/themes/mytheme/resources/images/Group.png" alt="Heart">
        </a>
    </li>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_shortcode', 'custom_shortcode_function');
