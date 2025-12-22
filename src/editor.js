/**
 * WindWP Editor Logic
 * 
 * This file contains logic that runs only within the Gutenberg block editor.
 * Use this for registering block styles, variations, or editor UI enhancements.
 */

console.log('WindWP Editor Logic Initialized');

// Example: Registering a custom block style for core/paragraph
// wp.blocks.registerBlockStyle('core/paragraph', {
//     name: 'windwp-lead',
//     label: 'Lead Paragraph'
// });

// Add custom body class to the editor if needed
document.addEventListener('DOMContentLoaded', () => {
    if (document.body.classList.contains('block-editor-page')) {
        console.log('We are inside the Gutenberg Editor');
    }
});


