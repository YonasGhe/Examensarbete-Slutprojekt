<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YourThemeName
 */

?>

    <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-sections">
            <div class="footer-urban">
                <h2>Tech Trend</h2>
                <p> We are a residential interior design firm located 
                    in Sweden. Our boutique-store offers more than!</p>
                    <p><strong>Adress:</strong> Teknikgatan, 111 22 Malmö</p>
        <p><strong>Telefon:</strong> <a href="tel:+46123456789">+46 123 456 789</a></p>
        <p><strong>E-post:</strong> <a href="mailto:info@techtrend.se">info@techtrend.se</a></p>
            </div>
            
            <div class="footer-shopping">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Bonus program</a></li> 
                    <li><a href="#">Gift cards</a></li>
                    <li><a href="#">Credit and payment</a></li>
                    <li><a href="#">Service contracts</a></li>
                    <li><a href="#">Non-cash account</a></li>
                    <li><a href="#">Payment</a></li>
                </ul>
            </div>
            
            <div class="footer-link">
                <h3>More Links</h3>
                <ul>
                    <li><a href="#">Blog</a></li> 
                    <li><a href="#">Gift Center</a></li>
                    <li><a href="#">Buying Guides</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Clearance</a></li>
                </ul>
            </div>
            
            <div class="footer-blog">
                <h3>Assistance to the buyer</h3>
                <ul>
                    <li><a href="#">Find an order</a></li> 
                    <li><a href="#">Terms of delivery</a></li>
                    <li><a href="#">Exchange and return of goods</a></li>
                    <li><a href="#">Guarantee</a></li>
                    <li><a href="#">Frequently asked questions</a></li>
                    <li><a href="#">Terms of use of the site</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-social-media">

            <div class="facebook">
            <img src="/wp-content/uploads/2024/05/facebook.png.png" alt="">
            </div>

            <div class="twitter">
            <img src="/wp-content/uploads/2024/05/twitter.png.png" alt="">
            </div>

            <div class="instagram"> 
            <img src="/wp-content/uploads/2024/05/instagram.png.png" alt="">
            </div>

            <div class="tiktok">
            <img src="/wp-content/uploads/2024/05/Tiktok.png" alt="">
            </div>
            
        </div>
    </div>
    
    <div class="site-info">
            <?php
            printf( esc_html__( ' %1$s TechTrend AB © - All Rights Reserved.', 'yourthemename' ), date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );
            ?>
        </div>
</footer>


    <?php wp_footer(); ?>

</body>
</html>
