<?php

/**
 * Initialize the pattern.
 *
 * @return void
 */
add_action('init', function () {

    if (function_exists('register_block_pattern_category')) {

        register_block_pattern_category(
            'baty_pattern',
            array(
                'label' => __('Baty Patterns', 'baty'),
            )
        );
    }
});
add_action('init', function () {

    if (function_exists('register_block_pattern_category')) {

        register_block_pattern_category(
            'baty_about_page_pattern',
            array(
                'label' => __('Baty About Page Patterns', 'baty'),
            )
        );
    }
});

function baty_register_patterns() {

    if ( function_exists('register_block_pattern') && class_exists('Algori_Image_360') ) {

        register_block_pattern_category(
            'baty_about_page_pattern',
            array('label' => __('Baty About Page'))
        );

        require get_template_directory() . '/patterns/au_360banner.php';

    }

}

add_action('init', 'baty_register_patterns');

function my_theme_register_pattern_categories() {
    register_block_pattern_category(
        'my_theme_Baty',
        array( 'label' => __( 'My Theme Styles', 'textdomain' ) )
    );
}
add_action( 'init', 'my_theme_register_pattern_categories' );