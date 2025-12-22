<?php
/**
 * WindWP WooCommerce Setup
 *
 * WooCommerce support and integration functions.
 *
 * @package WindWP
 * @since Alpha 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Check if WooCommerce is active
 */
function windwp_is_woocommerce_active() {
    return class_exists( 'WooCommerce' );
}

/**
 * WooCommerce Setup
 */
function windwp_woocommerce_setup() {
    if ( ! windwp_is_woocommerce_active() ) {
        return;
    }

    // Add WooCommerce theme support
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 400,
        'single_image_width'    => 600,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 1,
            'default_columns' => 4,
            'min_columns'     => 1,
            'max_columns'     => 6,
        ),
    ) );

    // Add product gallery features
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'windwp_woocommerce_setup' );

/**
 * Remove default WooCommerce styles (we use Tailwind)
 */
function windwp_dequeue_woocommerce_styles( $enqueue_styles ) {
    // Uncomment lines below to remove default WC styles
    // unset( $enqueue_styles['woocommerce-general'] );
    // unset( $enqueue_styles['woocommerce-layout'] );
    // unset( $enqueue_styles['woocommerce-smallscreen'] );
    
    return $enqueue_styles;
}
add_filter( 'woocommerce_enqueue_styles', 'windwp_dequeue_woocommerce_styles' );

/**
 * Update cart count via AJAX (for offcanvas cart)
 */
function windwp_cart_count_fragments( $fragments ) {
    $fragments['.windwp-cart-count'] = '<span class="windwp-cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';
    $fragments['.windwp-cart-total'] = '<span class="windwp-cart-total">' . WC()->cart->get_cart_total() . '</span>';
    
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'windwp_cart_count_fragments' );

/**
 * Change number of products per row
 */
function windwp_loop_columns() {
    return apply_filters( 'windwp_wc_loop_columns', 4 );
}
add_filter( 'loop_shop_columns', 'windwp_loop_columns' );

/**
 * Change number of products displayed per page
 */
function windwp_products_per_page() {
    return apply_filters( 'windwp_wc_products_per_page', 12 );
}
add_filter( 'loop_shop_per_page', 'windwp_products_per_page' );

/**
 * Add custom classes to product loop
 */
function windwp_product_post_class( $classes ) {
    $classes[] = 'windwp-product';
    $classes[] = 'group';
    return $classes;
}
add_filter( 'woocommerce_post_class', 'windwp_product_post_class' );

/**
 * Wrap WooCommerce content in container
 */
function windwp_before_main_content() {
    echo '<div class="section-container py-12">';
}
add_action( 'woocommerce_before_main_content', 'windwp_before_main_content', 5 );

function windwp_after_main_content() {
    echo '</div>';
}
add_action( 'woocommerce_after_main_content', 'windwp_after_main_content', 50 );

/**
 * Remove default WooCommerce wrapper
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

/**
 * Remove default sidebar
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

