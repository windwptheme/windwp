<?php
/**
 * WindWP Interactivity API Configuration
 * 
 * Sets up server-side state for the Interactivity API.
 * 
 * @package WindWP
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Initialize server-side state
 */
function windwp_interactivity_init() {
    if ( ! function_exists( 'wp_interactivity_state' ) ) {
        return;
    }

    // Set initial state for the 'windwp' namespace
    wp_interactivity_state( 'windwp', array(
        'isDarkMode' => false,
        'isCartOpen' => false,
        'isMenuOpen' => false,
        'activeFaq'  => 1,
    ) );
}
add_action( 'init', 'windwp_interactivity_init' );

