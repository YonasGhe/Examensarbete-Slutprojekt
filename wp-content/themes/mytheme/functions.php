<?php
require_once("Vite.php");

function my_custom_script() {
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true );
    wp_localize_script( 'custom-script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_custom_script' );

add_action('after_setup_theme', 'theme_setup');
function theme_setup(){
    add_theme_support('woocommerce');
}

function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

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
