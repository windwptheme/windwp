<?php
/**
 * WindWP Offcanvas Mini Cart
 *
 * Slide-out cart panel functionality.
 * Inspired by Bootscore offcanvas cart.
 *
 * @package WindWP
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Mini Cart Toggle Button (for header)
 * Usage: windwp_mini_cart_toggle()
 */
function windwp_mini_cart_toggle() {
    if ( ! windwp_is_woocommerce_active() ) return;
    
    $cart_count = WC()->cart->get_cart_contents_count();
    ?>
    <button 
        data-wp-interactive="windwp"
        data-wp-on--click="actions.toggleCart"
        class="relative p-2 text-white hover:text-primary transition-colors"
        aria-label="<?php esc_attr_e( 'Toggle cart', 'windwp' ); ?>"
        data-wp-bind--aria-expanded="state.isCartOpen">
        
        <!-- Cart Icon -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
        </svg>
        
        <!-- Cart Count Badge -->
        <span 
            class="windwp-cart-count absolute -top-1 -right-1 w-5 h-5 bg-primary text-slate-950 text-xs font-bold rounded-full flex items-center justify-center"
            data-wp-bind--hidden="<?php echo $cart_count > 0 ? 'false' : 'true'; ?>">
            <?php echo esc_html( $cart_count ); ?>
        </span>
    </button>
    <?php
}

/**
 * Offcanvas Mini Cart Panel
 * Add to footer or header template
 */
function windwp_offcanvas_cart() {
    if ( ! windwp_is_woocommerce_active() ) return;
    ?>
    <div data-wp-interactive="windwp">
        <!-- Offcanvas Cart Overlay -->
        <div 
            data-wp-bind--hidden="!state.isCartOpen"
            data-wp-on--click="actions.toggleCart"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50">
        </div>
        
        <!-- Offcanvas Cart Panel -->
        <div 
            data-wp-bind--hidden="!state.isCartOpen"
            data-wp-effect="effects.toggleScroll"
            class="fixed top-0 right-0 h-full w-full max-w-md bg-slate-950 border-l border-white/10 shadow-2xl z-50 flex flex-col">
            
            <!-- Cart Header -->
            <div class="flex items-center justify-between p-6 border-b border-white/10">
                <h2 class="text-xl font-bold text-white">
                    <?php esc_html_e( 'Shopping Cart', 'windwp' ); ?>
                    <span class="windwp-cart-count text-slate-400 text-base font-normal ml-2">
                        (<?php echo WC()->cart->get_cart_contents_count(); ?>)
                    </span>
                </h2>
                <button 
                    data-wp-on--click="actions.toggleCart"
                    class="text-slate-400 hover:text-white transition-colors p-2"
                    aria-label="<?php esc_attr_e( 'Close cart', 'windwp' ); ?>">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Cart Content -->
            <div class="flex-1 overflow-y-auto p-6">
                <?php woocommerce_mini_cart(); ?>
            </div>
            
            <!-- Cart Footer -->
            <div class="p-6 border-t border-white/10">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-slate-400"><?php esc_html_e( 'Subtotal', 'windwp' ); ?></span>
                    <span class="windwp-cart-total text-xl font-bold text-white">
                        <?php echo WC()->cart->get_cart_subtotal(); ?>
                    </span>
                </div>
                
                <div class="flex flex-col gap-3">
                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn-outline w-full text-center">
                        <?php esc_html_e( 'View Cart', 'windwp' ); ?>
                    </a>
                    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn-primary w-full text-center">
                        <?php esc_html_e( 'Checkout', 'windwp' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Add offcanvas cart to footer
 */
function windwp_add_offcanvas_cart() {
    if ( ! windwp_is_woocommerce_active() ) return;
    
    windwp_offcanvas_cart();
}
add_action( 'wp_footer', 'windwp_add_offcanvas_cart' );

/**
 * AJAX refresh mini cart
 */
function windwp_ajax_update_mini_cart() {
    ob_start();
    woocommerce_mini_cart();
    $mini_cart = ob_get_clean();
    
    wp_send_json_success( array(
        'fragments' => array(
            '.windwp-mini-cart-content' => $mini_cart,
        ),
        'cart_count' => WC()->cart->get_cart_contents_count(),
        'cart_total' => WC()->cart->get_cart_subtotal(),
    ) );
}
add_action( 'wp_ajax_windwp_update_mini_cart', 'windwp_ajax_update_mini_cart' );
add_action( 'wp_ajax_nopriv_windwp_update_mini_cart', 'windwp_ajax_update_mini_cart' );
