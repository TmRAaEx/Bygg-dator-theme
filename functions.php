<?php
/**
 * Loads the stylesheets used in this theme
 * @return void
 */
function bdt_load_assets()
{
    // CSS
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
        [],
        filemtime(get_template_directory() . '/style.css')
    );
    wp_enqueue_style(
        'header-style',
        get_template_directory_uri() . '/assets/css/header.css',
        [],
        filemtime(get_template_directory() . '/assets/css/header.css')
    );

    wp_enqueue_style(
        'footer-style',
        get_template_directory_uri() . '/assets/css/footer.css',
        [],
        filemtime(get_template_directory() . '/assets/css/footer.css')
    );

    wp_enqueue_style(
        'woocommerce-style',
        get_template_directory_uri() . '/assets/css/woocommerce.css',
        [],
        filemtime(get_template_directory() . '/assets/css/woocommerce.css')
    );

    // JS
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/app.js',
        ['jquery'], //TODO might change
        filemtime(get_template_directory() . '/assets/js/app.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'bdt_load_assets');



// Register nav menu
register_nav_menus([
    'top-menu' => __('Top Menu', 'bygg-dator-theme')
]);
//woocommerce support
function bdt_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'bdt_add_woocommerce_support');



//image sizes
function bdt_setup_images()
{
    add_image_size('post_image', 1100, 550, false);
}

add_action('after_setup_theme', 'bdt_setup_images');