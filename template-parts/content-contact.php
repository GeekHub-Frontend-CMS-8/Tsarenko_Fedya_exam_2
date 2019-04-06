<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gh-exam
 */

?>

<section id="post-<?php the_ID(); ?>" class="contact">
    <div class="wrapper">
        <div class="contact-main-container">
            <div class="contact-location">
                <div class="dark"></div>
                <div class="contact-text-container">
                    <h1 class="contact-title">
                        <?php the_title() ?>
                    </h1>
                    <p class="contact-description">
                        <?php echo get_theme_mod('contact-description') ?>
                    </p>
                </div>
                <div class="location">
                    <button class="location-text">
                        get directions
                    </button>
                    <button class="location-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </button>
                </div>
            </div>
            <div class="contact-info-container">
                <p class="contact-info-description">
                    <?php echo get_theme_mod('contact-info-description') ?>
                </p>
                <div class="contact-info-item">
                    <div class="contact-info-data">
                        <i class="fas fa-home"></i>
                        <div class="data-container">
                            <p>
                                <?php echo get_theme_mod('address') ?>
                            </p>
                            <p>
                                <?php echo get_theme_mod('city') ?>
                            </p>
                            <p>
                                <?php echo get_theme_mod('code') ?>
                            </p>
                        </div>
                    </div>
                    <div class="contact-info-data">
                        <i class="fas fa-home"></i>
                        <div class="data-container">
                            <p>
                                <?php echo get_theme_mod('phone1') ?>
                            </p>
                            <p>
                                <?php echo get_theme_mod('phone2') ?>
                            </p>
                        </div>
                    </div>
                    <div class="contact-info-data">
                        <i class="fas fa-home"></i>
                        <div class="data-container">
                            <p>
                                <?php echo get_theme_mod('email') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
