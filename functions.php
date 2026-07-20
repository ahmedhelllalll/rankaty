<?php
/**
 * Rankaty functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Setup Theme
 */
function rankaty_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'rankaty' ),
        'mobile'  => esc_html__( 'Mobile Menu', 'rankaty' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
}
add_action( 'after_setup_theme', 'rankaty_setup' );

/**
 * Enqueue scripts and styles.
 */
function rankaty_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Enqueue Theme Stylesheet
    wp_enqueue_style( 'rankaty-style', get_stylesheet_uri(), array(), $theme_version );

    // Tailwind CSS
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/assets/css/tailwind.css', array(), $theme_version );

    // Google Fonts
    wp_enqueue_style( 'rankaty-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&family=Cairo:wght@300;400;500;700&display=swap', array(), null );

    // Main Custom CSS
    wp_enqueue_style( 'rankaty-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version );

    // Scripts
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true );
    wp_enqueue_script( 'scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true );
    wp_enqueue_script( 'tsparticles', 'https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js', array(), null, true );

    // Custom main.js
    wp_enqueue_script( 'rankaty-main', get_template_directory_uri() . '/assets/js/main.js', array('gsap', 'scrolltrigger', 'tsparticles'), $theme_version, true );
    
    // Pass data to JS
    wp_localize_script('rankaty-main', 'rankatyData', array(
        'whatsappNumber' => get_theme_mod('rankaty_whatsapp_number', '+201007462953'),
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action( 'wp_enqueue_scripts', 'rankaty_scripts' );

/**
 * Customizer Additions
 */
require get_template_directory() . '/inc/customizer.php';

