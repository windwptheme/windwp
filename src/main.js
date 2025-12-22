/**
 * WindWP Main JS Entry Point
 * 
 * This file is processed by Vite and builds into /assets/main.js.
 * It imports the source stylesheet for Tailwind CSS processing.
 */

import './styles.css';
import './interactivity.js';

// Initialize WindWP
document.addEventListener('DOMContentLoaded', function() {
    console.log('WindWP Theme Initialized');
    
    // Add loaded class for animations
    document.body.classList.add('windwp-loaded');
});
