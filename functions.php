<?php
/**
 * WindWP functions and definitions
 *
 * AI-First Tailwind Framework Theme for WordPress & WooCommerce.
 *
 * @link https://windwp.com
 *
 * @package WindWP
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'WINDWP_VERSION', '1.0.0' );
define( 'WINDWP_DIR', get_template_directory() );
define( 'WINDWP_URI', get_template_directory_uri() );

/**
 * Asset Helper: Get versioned asset path from manifest.json
 */
function windwp_asset( $path ) {
    // Vite 5+ puts manifest in .vite/manifest.json
    $manifest_path = WINDWP_DIR . '/.vite/manifest.json';
    
    // Also check root for compatibility
    if ( ! file_exists( $manifest_path ) ) {
        $manifest_path = WINDWP_DIR . '/manifest.json';
    }

    if ( file_exists( $manifest_path ) ) {
        $manifest = json_decode( file_get_contents( $manifest_path ), true );
        
        // Try direct path first (e.g. assets/main.js)
        if ( isset( $manifest[ $path ] ) ) {
            return WINDWP_URI . '/' . $manifest[ $path ]['file'];
        }
        
        // Try source path (e.g. src/main.js)
        $src_path = 'src/' . basename( $path );
        if ( isset( $manifest[ $src_path ] ) ) {
            return WINDWP_URI . '/' . $manifest[ $src_path ]['file'];
        }
    }
    return WINDWP_URI . '/' . $path;
}

/**
 * Theme Setup
 */
function windwp_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'block-template-parts' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'windwp' ),
        'footer'    => __( 'Footer Menu', 'windwp' ),
        'mobile'    => __( 'Mobile Menu', 'windwp' ),
    ) );

    $GLOBALS['content_width'] = 1280;
}
add_action( 'after_setup_theme', 'windwp_setup' );

/**
 * Enqueue Styles and Scripts
 */
function windwp_scripts() {
    // 1. Theme Styles
    wp_enqueue_style( 'windwp-style', get_stylesheet_uri(), array(), WINDWP_VERSION );

    // 2. Theme Scripts (Vite Build)
    $main_js = windwp_asset( 'assets/main.js' );
    
    // For WP 6.5+, use wp_enqueue_script_module for Interactivity API if available
    if ( function_exists( 'wp_enqueue_script_module' ) ) {
        wp_enqueue_script_module( 'windwp-main', $main_js, array( '@wordpress/interactivity' ), WINDWP_VERSION );
    } else {
        // Fallback for older versions
        wp_enqueue_script( 'windwp-main', $main_js, array( 'wp-interactivity' ), WINDWP_VERSION, true );
        add_filter( 'script_loader_tag', function( $tag, $handle ) {
            if ( 'windwp-main' === $handle ) {
                return str_replace( '<script ', '<script type="module" ', $tag );
            }
            return $tag;
        }, 10, 2 );
    }

    wp_localize_script( 'windwp-main', 'windwp', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'windwp_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'windwp_scripts' );

/**
 * Enqueue Block Editor Assets
 */
function windwp_editor_scripts() {
    $editor_js = windwp_asset( 'assets/editor.js' );
    wp_enqueue_script( 'windwp-editor', $editor_js, array(), WINDWP_VERSION, true );

    // Mark as module if needed
    add_filter( 'script_loader_tag', function( $tag, $handle ) {
        if ( 'windwp-editor' === $handle ) {
            return str_replace( ' src', ' type="module" src', $tag );
        }
        return $tag;
    }, 10, 2 );
}
add_action( 'enqueue_block_editor_assets', 'windwp_editor_scripts' );

/**
 * Include Custom Hooks and Components
 */
$windwp_includes = array(
    '/inc/hooks.php',
    '/inc/dark-mode.php',
    '/inc/interactivity.php',
);

if ( class_exists( 'WooCommerce' ) ) {
    $windwp_includes = array_merge( $windwp_includes, array(
        '/inc/woocommerce/setup.php',
        '/inc/woocommerce/template-hooks.php',
        '/inc/woocommerce/mini-cart.php',
        '/inc/woocommerce/breadcrumbs.php',
    ) );
}

foreach ( $windwp_includes as $file ) {
    $filepath = WINDWP_DIR . $file;
    if ( file_exists( $filepath ) ) {
        require_once $filepath;
    }
}

/**
 * Register Block Patterns Category
 */
function windwp_register_block_pattern_categories() {
    register_block_pattern_category( 'windwp', array( 'label' => __( 'WindWP', 'windwp' ) ) );
    register_block_pattern_category( 'windwp-woocommerce', array( 'label' => __( 'WindWP WooCommerce', 'windwp' ) ) );
}
add_action( 'init', 'windwp_register_block_pattern_categories' );

/**
 * Add body classes
 */
function windwp_body_classes( $classes ) {
    $classes[] = 'windwp';
    if ( class_exists( 'WooCommerce' ) ) {
        $classes[] = 'windwp-woocommerce';
    }
    return $classes;
}
add_filter( 'body_class', 'windwp_body_classes' );

/**
 * Disable emojis
 */
function windwp_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'windwp_disable_emojis' );
