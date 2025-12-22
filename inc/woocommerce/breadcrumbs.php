<?php
/**
 * WindWP Breadcrumbs
 *
 * Custom breadcrumb functionality with Tailwind styling.
 * Works with WooCommerce and standard WordPress.
 *
 * @package WindWP
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Custom Breadcrumbs
 * 
 * Usage: windwp_breadcrumbs()
 */
function windwp_breadcrumbs() {
    // WooCommerce breadcrumbs
    if ( windwp_is_woocommerce_active() && ( is_woocommerce() || is_cart() || is_checkout() ) ) {
        windwp_woocommerce_breadcrumbs();
        return;
    }
    
    // Standard WordPress breadcrumbs
    windwp_standard_breadcrumbs();
}

/**
 * WooCommerce Breadcrumbs with Tailwind
 */
function windwp_woocommerce_breadcrumbs() {
    woocommerce_breadcrumb( array(
        'delimiter'   => '<span class="text-slate-400 mx-2">/</span>',
        'wrap_before' => '<nav class="windwp-breadcrumbs flex items-center flex-wrap text-sm mb-8" aria-label="' . esc_attr__( 'Breadcrumb', 'windwp' ) . '">',
        'wrap_after'  => '</nav>',
        'before'      => '<span class="text-slate-400 hover:text-primary transition-colors">',
        'after'       => '</span>',
        'home'        => esc_html__( 'Home', 'windwp' ),
    ) );
}

/**
 * Standard WordPress Breadcrumbs
 */
function windwp_standard_breadcrumbs() {
    if ( is_front_page() ) return;
    
    $separator = '<span class="text-slate-400 mx-2">/</span>';
    $home_title = __( 'Home', 'windwp' );
    
    echo '<nav class="windwp-breadcrumbs flex items-center flex-wrap text-sm mb-8" aria-label="' . esc_attr__( 'Breadcrumb', 'windwp' ) . '">';
    
    // Home link
    echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="text-slate-400 hover:text-primary transition-colors">' . esc_html( $home_title ) . '</a>';
    echo $separator;
    
    if ( is_category() || is_single() ) {
        $categories = get_the_category();
        if ( $categories ) {
            $category = $categories[0];
            echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="text-slate-400 hover:text-primary transition-colors">' . esc_html( $category->name ) . '</a>';
            
            if ( is_single() ) {
                echo $separator;
                echo '<span class="text-white font-medium">' . esc_html( get_the_title() ) . '</span>';
            }
        }
    } elseif ( is_page() ) {
        // Check for parent pages
        global $post;
        if ( $post->post_parent ) {
            $ancestors = get_post_ancestors( $post->ID );
            $ancestors = array_reverse( $ancestors );
            
            foreach ( $ancestors as $ancestor ) {
                echo '<a href="' . esc_url( get_permalink( $ancestor ) ) . '" class="text-slate-400 hover:text-primary transition-colors">' . esc_html( get_the_title( $ancestor ) ) . '</a>';
                echo $separator;
            }
        }
        echo '<span class="text-white font-medium">' . esc_html( get_the_title() ) . '</span>';
        
    } elseif ( is_tag() ) {
        echo '<span class="text-white font-medium">' . esc_html( single_tag_title( '', false ) ) . '</span>';
        
    } elseif ( is_day() ) {
        echo '<a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '" class="text-slate-400 hover:text-primary transition-colors">' . esc_html( get_the_time( 'Y' ) ) . '</a>';
        echo $separator;
        echo '<a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '" class="text-slate-400 hover:text-primary transition-colors">' . esc_html( get_the_time( 'F' ) ) . '</a>';
        echo $separator;
        echo '<span class="text-white font-medium">' . esc_html( get_the_time( 'd' ) ) . '</span>';
        
    } elseif ( is_month() ) {
        echo '<a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '" class="text-slate-400 hover:text-primary transition-colors">' . esc_html( get_the_time( 'Y' ) ) . '</a>';
        echo $separator;
        echo '<span class="text-white font-medium">' . esc_html( get_the_time( 'F' ) ) . '</span>';
        
    } elseif ( is_year() ) {
        echo '<span class="text-white font-medium">' . esc_html( get_the_time( 'Y' ) ) . '</span>';
        
    } elseif ( is_author() ) {
        global $author;
        $userdata = get_userdata( $author );
        echo '<span class="text-white font-medium">' . esc_html( $userdata->display_name ) . '</span>';
        
    } elseif ( is_search() ) {
        echo '<span class="text-white font-medium">' . esc_html__( 'Search results for: ', 'windwp' ) . esc_html( get_search_query() ) . '</span>';
        
    } elseif ( is_404() ) {
        echo '<span class="text-white font-medium">' . esc_html__( '404 Not Found', 'windwp' ) . '</span>';
    }
    
    echo '</nav>';
}

/**
 * Add breadcrumbs before WooCommerce archive
 */
function windwp_add_breadcrumbs_to_shop() {
    windwp_breadcrumbs();
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'windwp_add_breadcrumbs_to_shop', 20 );

