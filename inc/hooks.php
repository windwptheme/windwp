<?php
/**
 * WindWP Custom Hooks and Filters
 * 
 * Provides extensibility for the theme's structure and classes.
 * 
 * @package WindWP
 */

/**
 * Filter default container classes.
 * Usage in templates: apply_filters('windwp_container_classes', 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8')
 */
function windwp_default_container_classes($classes) {
    return 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8';
}
add_filter('windwp_container_classes', 'windwp_default_container_classes');

/**
 * Filter default section classes.
 * Usage in templates: apply_filters('windwp_section_classes', 'py-12 md:py-24')
 */
function windwp_default_section_classes($classes) {
    return 'py-12 md:py-24';
}
add_filter('windwp_section_classes', 'windwp_default_section_classes');

/**
 * Add more WindWP-specific hooks below for maximum AI and developer control.
 */
