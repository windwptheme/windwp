<?php
/**
 * WindWP Dark Mode
 *
 * Dark/Light mode toggle functionality.
 *
 * @package WindWP
 * @since Alpga 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Dark Mode Toggle Button
 * 
 * Usage: windwp_dark_mode_toggle()
 * Add x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" to body or parent element
 */
function windwp_dark_mode_toggle() {
    ?>
    <button 
        data-wp-on--click="actions.toggleDarkMode"
        class="relative p-2 text-slate-400 hover:text-white transition-colors"
        data-wp-class--text-yellow-400="state.isDarkMode"
        aria-label="<?php esc_attr_e( 'Toggle dark mode', 'windwp' ); ?>">
        
        <!-- Sun Icon (Light Mode) -->
        <svg data-wp-bind--hidden="state.isDarkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
        
        <!-- Moon Icon (Dark Mode) -->
        <svg data-wp-bind--hidden="!state.isDarkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
        </svg>
    </button>
    <?php
}

/**
 * Add dark mode initialization script
 */
function windwp_dark_mode_init_script() {
    ?>
    <script>
        // Initialize dark mode from localStorage before Alpine loads
        if (localStorage.getItem('darkMode') === 'true' || 
            (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    <?php
}
add_action( 'wp_head', 'windwp_dark_mode_init_script', 1 );

/**
 * Add dark mode attribute to html tag
 */
function windwp_dark_mode_html_class( $output ) {
    return $output;
}

/**
 * Dark Mode CSS Variables
 * Add this to your Tailwind config for dark mode support
 * 
 * In tailwind.config.js:
 * module.exports = {
 *   darkMode: 'class',
 *   // ...
 * }
 * 
 * Then use dark: prefix in classes:
 * class="bg-white dark:bg-slate-900 text-slate-900 dark:text-white"
 */

