<?php
/**
 * Rehoboth Ministries Webinar Theme Functions
 *
 * @package Rehoboth_Webinar
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function rehoboth_webinar_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Support responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'rehoboth_webinar_setup');

/**
 * Enqueue Theme Stylesheets and Scripts
 */
function rehoboth_webinar_enqueue_scripts() {
    // Google Fonts: Cormorant Garamond & Plus Jakarta Sans
    wp_enqueue_style(
        'rehoboth-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet (style.css)
    wp_enqueue_style(
        'rehoboth-main-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'rehoboth_webinar_enqueue_scripts');
