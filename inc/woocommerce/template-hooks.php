<?php
/**
 * WindWP WooCommerce Template Hooks
 *
 * Custom hooks for WooCommerce templates.
 * Rearranges default WooCommerce output for Tailwind styling.
 *
 * @package WindWP
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Shop Page Modifications
 */

// Remove result count and ordering
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// Add custom result count and ordering wrapper
function windwp_shop_filters() {
    if ( ! windwp_is_woocommerce_active() ) return;
    ?>
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div class="text-slate-500 text-sm">
            <?php woocommerce_result_count(); ?>
        </div>
        <div class="w-full sm:w-auto">
            <?php woocommerce_catalog_ordering(); ?>
        </div>
    </div>
    <?php
}
add_action( 'woocommerce_before_shop_loop', 'windwp_shop_filters', 20 );

/**
 * Product Loop Modifications
 */

// Remove default product link
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

// Add custom product card wrapper
function windwp_product_card_open() {
    echo '<div class="card-product group">';
}
add_action( 'woocommerce_before_shop_loop_item', 'windwp_product_card_open', 5 );

function windwp_product_card_close() {
    echo '</div>';
}
add_action( 'woocommerce_after_shop_loop_item', 'windwp_product_card_close', 20 );

// Wrap product image in link
function windwp_product_image_wrapper_open() {
    global $product;
    echo '<a href="' . esc_url( get_permalink( $product->get_id() ) ) . '" class="block relative overflow-hidden rounded-2xl bg-slate-100 aspect-square mb-4">';
}
add_action( 'woocommerce_before_shop_loop_item_title', 'windwp_product_image_wrapper_open', 5 );

function windwp_product_image_wrapper_close() {
    echo '</a>';
}
add_action( 'woocommerce_before_shop_loop_item_title', 'windwp_product_image_wrapper_close', 15 );

// Wrap product title in link
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
function windwp_product_title() {
    global $product;
    echo '<a href="' . esc_url( get_permalink( $product->get_id() ) ) . '" class="block">';
    echo '<h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors mb-1">' . get_the_title() . '</h3>';
    echo '</a>';
}
add_action( 'woocommerce_shop_loop_item_title', 'windwp_product_title', 10 );

// Style price
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
function windwp_product_price() {
    global $product;
    if ( $price_html = $product->get_price_html() ) {
        echo '<div class="text-slate-500 text-sm mb-4">' . $price_html . '</div>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'windwp_product_price', 10 );

// Style add to cart button
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
function windwp_loop_add_to_cart() {
    global $product;
    
    if ( ! $product->is_purchasable() ) return;
    
    $args = array(
        'class' => 'btn-primary-sm w-full text-center ajax_add_to_cart',
    );
    
    woocommerce_template_loop_add_to_cart( $args );
}
add_action( 'woocommerce_after_shop_loop_item', 'windwp_loop_add_to_cart', 15 );

/**
 * Single Product Modifications
 */

// Remove default gallery action to customize
// (Keep default for now, can be customized later)

// Style single product add to cart button
function windwp_single_add_to_cart_btn_class( $args, $product ) {
    $args['class'] = 'btn-primary single_add_to_cart_button';
    return $args;
}
add_filter( 'woocommerce_loop_add_to_cart_args', 'windwp_single_add_to_cart_btn_class', 10, 2 );

/**
 * Cart & Checkout Modifications
 */

// Add container to cart page
function windwp_before_cart() {
    echo '<div class="section-container py-12">';
}
add_action( 'woocommerce_before_cart', 'windwp_before_cart', 5 );

function windwp_after_cart() {
    echo '</div>';
}
add_action( 'woocommerce_after_cart', 'windwp_after_cart', 50 );

// Add container to checkout page
function windwp_before_checkout_form() {
    echo '<div class="section-container py-12">';
}
add_action( 'woocommerce_before_checkout_form', 'windwp_before_checkout_form', 5 );

function windwp_after_checkout_form() {
    echo '</div>';
}
add_action( 'woocommerce_after_checkout_form', 'windwp_after_checkout_form', 50 );

/**
 * Sale Badge
 */
function windwp_sale_flash() {
    global $product;
    
    if ( ! $product->is_on_sale() ) return;
    
    $percentage = '';
    if ( $product->is_type( 'simple' ) || $product->is_type( 'external' ) ) {
        $regular_price = $product->get_regular_price();
        $sale_price = $product->get_sale_price();
        if ( $regular_price && $sale_price ) {
            $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
        }
    }
    
    if ( $percentage ) {
        echo '<span class="badge-sale">-' . esc_html( $percentage ) . '%</span>';
    } else {
        echo '<span class="badge-sale">' . esc_html__( 'Sale!', 'windwp' ) . '</span>';
    }
}
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'windwp_sale_flash', 10 );

