<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="wrapper">
        <div class="site-info">
            <div class="top">
                <div class="logo">
                    <img src="<?php echo get_theme_mod('header-logo') ?>" alt="">
                </div>
                <div class="top-info-container">
                    <p class="top-info">
                        <?php echo get_theme_mod('sign-up') ?>
                    </p>
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="bottom">
                <div class="bottom-container">
                    <div class="rights">
                        <p><?php echo get_theme_mod('footer-rights') ?></p>
                    </div>
                    <ul class="social-container">
                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
