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
                // Display the main menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'header',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                    )
                );
                ?>
                <!-- Use your custom shortcodes for the icons -->
                <li class="menu-item menu-item-cart">
                    <?php echo do_shortcode('[cart_icon]'); ?>
                </li>
                <li class="menu-item menu-item-account">
                    <?php echo do_shortcode('[account_icon]'); ?>
                </li>
                <li class="menu-item menu-item-heart">
                    <?php echo do_shortcode('[heart_icon]'); ?>
                </li>
            </ul>
        </div>
    </nav>
</header>

<?php wp_footer(); ?>
</body>
</html>
