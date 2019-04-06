<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gh-exam
 */

?>

<section id="post-<?php the_ID(); ?>" class="home-hero">
    <div class="home-hero-bg-element"></div>
    <div class="wrapper">
        <div class="home-hero-main-container">
            <div class="home-hero-left">
                <div class="hero-social">
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
                <div class="home-hero-current-slide">
                    <p class="current-slide-left">
                        02
                    </p>
                </div>
            </div>
            <?php
            $args = array(
                'post_type' => 'hero-slider',
                'posts_per_page' => '4'
            );
            $home_slider = new WP_Query($args);
            if ($home_slider->have_posts()) :
                while ($home_slider->have_posts()) : $home_slider->the_post(); ?>
                    <div class="home-hero-text-container">
                        <?php the_post_thumbnail() ?>
                        <div class="home-hero-item">
                            <h1 class="home-hero-title">
                                <?php echo get_the_content(); ?>
                            </h1>
                            <p class="home-hero-description">
                                <?php the_title(); ?>
                            </p>
                        </div>
                        <div class="home-hero-view-profile">
                            <div class="text">
                                VIEW PROFILE
                            </div>
                            <button class="view-profile">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="home-hero-slides">
                <p class="slide-right">01</p>
                <p class="slide-right current">02</p>
                <p class="slide-right">03</p>
                <p class="slide-right">04</p>
            </div>
        </div>
    </div>
</section>

<section class="home-portfolio">
    <div class="wrapper">
        <div class="home-portfolio-categories-container">
            <?php $arg_cat = array(
                'taxonomy' => 'category',
                'orderby' => 'name',
                'order' => 'ASC',
                'type' => 'post',
                'hide_empty' => 1,
                'exclude' => '',
                'include' => '',
            );
            $categories = get_categories($arg_cat);
            if ($categories) {
                foreach ($categories as $cat) { ?>
                    <div class="category-item">
                        <button class="home-portfolio-category-btn <?php echo $cat->name ?>-btn"> <?php echo $cat->name; ?> </button>
                    </div>
                <?php }
            }
            ?>
        </div>
        <div class="home-portfolio-container">
            <?php $actor_args = array(
                'category_name' => 'Actor'
            );
            $actor = new WP_Query($actor_args);
            while ($actor->have_posts()) {
                $actor->the_post(); ?>
                <div class="home-portfolio-item actor">
                    <?php the_post_thumbnail('full') ?>
                    <div class="home-portfolio-item-hover">
                        <p class="name"><?php the_title() ?></p>
                        <?php echo get_the_content() ?>
                    </div>
                </div>
            <?php }
            ?>


            <?php $comedian_args = array(
                'category_name' => 'Comedian'
            );
            $comedian = new WP_Query($comedian_args);
            while ($comedian->have_posts()) {
                $comedian->the_post(); ?>
                <div class="home-portfolio-item comedian">
                    <?php the_post_thumbnail('full') ?>
                    <div class="home-portfolio-item-hover">
                        <p class="name"><?php the_title() ?></p>
                        <?php echo get_the_content() ?>
                    </div>
                </div>
            <?php }
            ?>

            <?php $musician_args = array(
                'category_name' => 'Musician'
            );
            $musician = new WP_Query($musician_args);
            while ($musician->have_posts()) {
                $musician->the_post(); ?>
                <div class="home-portfolio-item musician">
                    <?php the_post_thumbnail('full') ?>
                    <div class="home-portfolio-item-hover">
                        <p class="name"><?php the_title() ?></p>
                        <?php echo get_the_content() ?>
                    </div>
                </div>
            <?php }
            ?>

            <?php $model_args = array(
                'category_name' => 'Model'
            );
            $model = new WP_Query($model_args);
            while ($model->have_posts()) {
                $model->the_post(); ?>
                <div class="home-portfolio-item model">
                    <?php the_post_thumbnail('full') ?>
                    <div class="home-portfolio-item-hover">
                        <p class="name"><?php the_title() ?></p>
                        <?php echo get_the_content() ?>
                    </div>
                </div>
            <?php }
            ?>
        </div>
        <button class="home-portfolio-more-btn">
            Explore more
        </button>
    </div>
</section>

<section class="home-news">
    <div class="wrapper">
        <h2 class="home-news-title">
            Latest News
        </h2>
        <div class="home-news-container">
            <?php $news_args = array(
                'post_type' => 'news',
                'posts_per_page' => 3
            );
            $news = new WP_Query($news_args);
            while ($news->have_posts()) {
                $news->the_post(); ?>
                <div class="home-news-item">
                    <div class="home-news-thumbnail">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="home-news-text-container">
                        <p class="home-news-description">
                            <?php the_title() ?>
                        </p>
                        <p class="home-news-date">
                            <?php echo get_the_date() ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
