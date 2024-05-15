<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
    <nav class="main-navigation">
        <div class="primary-menu">
            <ul>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'Header',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                    )
                );
                ?>
                <li class="menu-item menu-item-cart">
                    <a href="<?php echo esc_url( home_url( '/?s=' ) ); ?>" class="cart-icon"><img src="/wp-content/themes/mytheme/resources/images/Cart.png" alt="Cart"></a>
                </li>
                <li class="menu-item menu-item-account">
                    <a href="<?php echo esc_url( wc_get_account_endpoint_url( 'dashboard' ) ); ?>" class="account-icon"><img src="/wp-content/themes/mytheme/resources/images/Group-40.png" alt="My Account"></a>
                </li>
                <li class="menu-item menu-item-heart">
                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="heart-icon"><img src="/wp-content/themes/mytheme/resources/images/Group.png" alt="Heart"></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
