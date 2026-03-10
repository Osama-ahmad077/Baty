<?php
/**
 * WooCommerce compatibility functions.
 *
 * @package baty
 */

/**
 * Add support for WooCommerce features.
 *
 * @return void
 */

function baty_woocommerce_support() {
    add_theme_support( 'woocommerce' );

    // Add support for product gallery features.
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'baty_woocommerce_support' );

// Add support for block styles, responsive embeds, and editor styles.
add_theme_support('wp-block-styles');
add_theme_support('responsive-embeds');
add_theme_support('editor-styles');
add_editor_style('style.css');