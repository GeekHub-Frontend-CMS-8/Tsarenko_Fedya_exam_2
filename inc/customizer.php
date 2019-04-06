<?php
/**
 * gh-exam Theme Customizer
 *
 * @package gh-exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gh_exam_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'gh_exam_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'gh_exam_customize_partial_blogdescription',
        ));
    }

    $wp_customize->add_section('header',
        array(
            'title' => esc_html__('Header Section'),
            'priority' => '400'
        )
    );

    $wp_customize->add_setting('header-logo',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'header-logo',
            array(
                'label' => 'Header Logo',
                'settings' => 'header-logo',
                'section' => 'header'
            )
        )
    );

    $wp_customize->add_section('home-hero',
        array(
            'title' => esc_html__('Home Hero Section'),
            'priority' => '400'
        )
    );

    $wp_customize->add_setting('home-hero-bg-element',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'home-hero-bg-element',
            array(
                'label' => 'Home Hero Background Element',
                'settings' => 'home-hero-bg-element',
                'section' => 'home-hero'
            )
        )
    );

    $wp_customize->add_section('footer',
        array(
            'title' => esc_html__('Footer'),
            'priority' => '400'
        )
    );

    $wp_customize->add_setting('sign-up',
        array(
            'default' => 'sign up our newsletter',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('sign-up',
        array(
            'label' => 'Footer text',
            'section' => 'footer',
            'setting' => 'sign-up'
        ));

    $wp_customize->add_setting('footer-rights',
        array(
            'default' => '© 2018 MI Talent. Designed by Tranmautritam for Mass Impressions.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('footer-rights',
        array(
            'label' => 'Footer rights',
            'section' => 'footer',
            'setting' => 'footer-rights'
        ));

    $wp_customize->add_section('contact',
        array(
            'title' => esc_html__('Contact Page'),
            'priority' => '400'
        )
    );

    $wp_customize->add_setting('contact-description',
        array(
            'default' => 'mass impressions',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('contact-description',
        array(
            'label' => 'Contact description',
            'section' => 'contact',
            'setting' => 'contact-description'
        ));

    $wp_customize->add_setting('contact-location-bg',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'contact-location-bg',
            array(
                'label' => 'Contact Location Background Img',
                'settings' => 'contact-location-bg',
                'section' => 'contact'
            )
        )
    );

    $wp_customize->add_setting('contact-info-description',
        array(
            'default' => 'we would love to hear from you, whether you want more information on
             any of our acts or wish to discover how our artists can support your event. our acts or
              wish to discover how our artists can support your event.',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('contact-info-description',
        array(
            'label' => 'Contact Info description',
            'section' => 'contact',
            'setting' => 'contact-info-description'
        ));

    $wp_customize->add_setting('address',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('address',
        array(
            'label' => 'Address',
            'section' => 'contact',
            'setting' => 'address'
        ));

    $wp_customize->add_setting('city',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('city',
        array(
            'label' => 'City',
            'section' => 'contact',
            'setting' => 'city'
        ));

    $wp_customize->add_setting('code',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('code',
        array(
            'label' => 'Code',
            'section' => 'contact',
            'setting' => 'code'
        ));

    $wp_customize->add_setting('phone1',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('phone1',
        array(
            'label' => 'Phone 1',
            'section' => 'contact',
            'setting' => 'phone1'
        ));

    $wp_customize->add_setting('phone2',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('phone2',
        array(
            'label' => 'Phone 2',
            'section' => 'contact',
            'setting' => 'phone2'
        ));

    $wp_customize->add_setting('email',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );

    $wp_customize->add_control('email',
        array(
            'label' => 'Email',
            'section' => 'contact',
            'setting' => 'email'
        ));
}

add_action('customize_register', 'gh_exam_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gh_exam_customize_partial_blogname()
{
    bloginfo('name');
}

function render_customizer_css()
{
    echo '<style>';

    echo '.home-hero-bg-element {';
    if ($background_image_url = get_theme_mod('home-hero-bg-element')) {
        echo 'background: url( ' . $background_image_url . ' ) no-repeat center/cover;';
    }
    echo '}';

    echo '.contact-location {';
    if ($background_contact_location_image_url = get_theme_mod('contact-location-bg')) {
        echo 'background: url( ' . $background_contact_location_image_url . ' ) no-repeat center/cover;';
    }
    echo '}';

    echo '</style>';
}

add_action('wp_head', 'render_customizer_css');

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gh_exam_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gh_exam_customize_preview_js()
{
    wp_enqueue_script('gh-exam-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'gh_exam_customize_preview_js');
