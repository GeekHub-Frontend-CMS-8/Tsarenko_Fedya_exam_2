<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="header-wrapper">
        <header id="masthead" class="site-header">
            <div class="main-navigation">
                <div class="header__menu menu">
                    <div class="hamburger" id="openMenu">
                        <span class="hamburger__item hamburger__item--top"></span>
                        <span class="hamburger__item hamburger__item--middle"></span>
                        <span class="hamburger__item hamburger__item--bottom"></span>
                    </div>
                    <nav id="site-navigation" class="menu-list menu__menu-list">
                        <?php
                        $menu = wp_nav_menu(array(
                            'echo' => 0,
                            'container' => false,
                            'theme_location' => 'header-menu',
                            'menu_id' => 'header-navigations',
                            'menu_class' => 'menu-list__links',
                        ));
                        $menu = str_replace('class="menu-item menu-item-type-post_type menu-item-object-page', 'class="menu-list__item', $menu);
                        echo $menu
                        ?>
                        <div class="logo">
                            <img src="<?php echo get_theme_mod('header-logo')?>" alt="">
                        </div>
                        <div class="search">
                            <i class="fas fa-search"></i>
                        </div>
                    </nav><!-- #site-navigation -->
                </div><!-- .header_menu menu -->
            </div><!-- .main-navigation-->
        </header><!-- #masthead -->
    </div><!-- .wrapper -->
    <div id="content" class="site-content">