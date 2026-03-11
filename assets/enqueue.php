<?php
/**
 * Initialize the plugin.
 *
 * @return void
 */
function mytheme_swiper_assets() {

    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@12.1.2/swiper-bundle.min.css',
        array(),
        null
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@12.1.2/swiper-bundle.min.js',
        array(),
        null,
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'mytheme_swiper_assets');






function mytheme_enqueue_assets()
{

    // Main Theme Style
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    // Owl Carousel CSS
    wp_enqueue_style(
        'owl-carousel',
        get_template_directory_uri() . '/inc/assets/owl/owl.carousel.min.css',
        [],
        '2.3.4'
    );

    wp_enqueue_style(
        'owl-theme',
        get_template_directory_uri() . '/inc/assets/owl/owl.theme.default.min.css',
        ['owl-carousel'],
        '2.3.4'
    );

    // Owl Carousel JS
    wp_enqueue_script(
        'owl-carousel',
        get_template_directory_uri() . '/inc/assets/owl/owl.carousel.min.js',
        ['jquery'],
        '2.3.4',
        true
    );

    // Custom JS Init
wp_enqueue_script(
    'mytheme-main',
    get_template_directory_uri() . '/inc/assets/js/main.js',
    ['jquery', 'owl-carousel', 'swiper-js'], // اضفت swiper-js هنا
    '1.0',
    true
);
    wp_enqueue_script(
        'sliders',
        get_template_directory_uri() . '/inc/assets/js/sliders.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
    wp_enqueue_style(
        'components', // handle
        get_template_directory_uri() . '/inc/assets/style/components.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );

    wp_enqueue_style(
        'single', // handle
        get_template_directory_uri() . '/inc/assets/style/single-product.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );
        wp_enqueue_style(
        'archive', // handle
        get_template_directory_uri() . '/inc/assets/style/archive-product.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');



function mytheme_enqueue_hero_css() {
    wp_enqueue_style(
        'hero-style', // handle
        get_template_directory_uri() . '/inc/assets/style/hero.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_hero_css');

function mytheme_enqueue_coverflow_slider_css() {
    wp_enqueue_style(
        'coverflow-slider-style', // handle
        get_template_directory_uri() . '/inc/assets/style/coverflowSlider.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_coverflow_slider_css');

function mytheme_enqueue_features_product_css() {
    wp_enqueue_style(
        'features-product-style', // handle
        get_template_directory_uri() . '/inc/assets/style/features_product.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_features_product_css');


function mytheme_enqueue_360banner_css() {
    wp_enqueue_style(
        '360-banner-style', // handle
        get_template_directory_uri() . '/inc/assets/style/au_360preview.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_360banner_css');


function mytheme_enqueue_h_style() {
    wp_enqueue_style(
        '360-banner-style', // handle
        get_template_directory_uri() . '/inc/assets/style/h-style.css', // المسار
        array(), // dependencies
        wp_get_theme()->get('Version') // version
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_h_style');

