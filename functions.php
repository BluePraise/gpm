<?php
/**
 * GPM Installatietechniek Theme Functions
 *
 * @package GPM_Installatietechniek
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function gpm_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gpm-installatietechniek'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 180,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'gpm_theme_setup');

/**
 * Enqueue scripts and styles
 */
function gpm_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // Google Fonts
    wp_enqueue_style(
        'google-fonts-roboto',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'google-fonts-cinzel-inter',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap',
        array(),
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'gpm-style',
        get_stylesheet_uri(),
        array('bootstrap'),
        wp_get_theme()->get('Version')
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.2',
        true
    );

    // Theme scripts
    wp_enqueue_script(
        'gpm-scripts',
        get_template_directory_uri() . '/js/scripts.js',
        array('bootstrap'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'gpm_enqueue_scripts');

/**
 * ACF JSON Save Point
 * Saves ACF field groups to theme/acf-json folder
 */
function gpm_acf_json_save_point($path) {
    return get_stylesheet_directory() . '/acf-json';
}
add_filter('acf/settings/save_json', 'gpm_acf_json_save_point');

/**
 * ACF JSON Load Point
 * Loads ACF field groups from theme/acf-json folder
 */
function gpm_acf_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'gpm_acf_json_load_point');

/**
 * ACF Options Page (optional - for global settings)
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'  => 'Thema Instellingen',
        'menu_title'  => 'Thema Instellingen',
        'menu_slug'   => 'theme-general-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false,
        'icon_url'    => 'dashicons-admin-generic',
    ));
}

/**
 * Custom excerpt length
 */
function gpm_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'gpm_excerpt_length');

/**
 * Custom excerpt more
 */
function gpm_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'gpm_excerpt_more');
