<?php
/**
 * Loads the stylesheets used in this theme
 * @return void
 */
function bdt_load_stylesheets()
{
    // main stylesheet
    wp_register_style(
        'stylesheet',
        get_template_directory_uri() . '/style.css',
        [],
        filemtime(get_template_directory() . '/style.css'), // version based on file change
        'all'
    );
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'bdt_load_stylesheets');

/**
 * Loads JavaScript for this theme
 * @return void
 */
function bdt_load_javascript()
{
    wp_register_script(
        'custom',
        get_template_directory_uri() . '/assets/js/app.js',
        ['jquery'],
        filemtime(get_template_directory() . '/assets/js/app.js'), // version based on file change
        true
    );
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'bdt_load_javascript');
