<?php
/**
 * Title: FAQ Accordion
 * Slug: windwp/faq
 * Categories: windwp, featured
 * Description: An accordion-style FAQ section with Alpine.js interactivity. Features expandable questions with smooth animations.
 * Keywords: faq, questions, accordion, help
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"bg-slate-50 py-24 sm:pt-28 sm:pb-32","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bg-slate-50 py-24 sm:pt-28 sm:pb-32">

<!-- wp:group {"className":"mx-auto max-w-7xl px-6 lg:px-8","layout":{"type":"constrained"}} -->
<div class="wp-block-group mx-auto max-w-7xl px-6 lg:px-8">

<!-- wp:group {"className":"max-w-3xl mx-auto text-center mb-16","layout":{"type":"constrained"}} -->
<div class="wp-block-group max-w-3xl mx-auto text-center mb-16">

<!-- wp:paragraph {"className":"mb-4 text-xs font-black uppercase tracking-[0.2em] text-primary"} -->
<p class="mb-4 text-xs font-black uppercase tracking-[0.2em] text-primary">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"text-4xl sm:text-5xl font-black tracking-tight text-slate-900 mb-4"} -->
<h2 class="wp-block-heading text-4xl sm:text-5xl font-black tracking-tight text-slate-900 mb-4"><?php echo esc_html__( 'Frequently Asked Questions', 'windwp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-xl text-slate-500"} -->
<p class="text-xl text-slate-500"><?php echo esc_html__( 'Everything you need to know about WindWP.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="max-w-3xl mx-auto" data-wp-interactive="windwp">
    
    <!-- FAQ Item 1 -->
    <div class="border-b border-slate-200" data-wp-context='{ "id": 1 }'>
        <button 
            data-wp-on--click="actions.toggleFaq"
            class="w-full py-6 flex items-center justify-between text-left group">
            <span class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors"><?php echo esc_html__( 'What is WindWP?', 'windwp' ); ?></span>
            <svg 
                class="w-5 h-5 text-slate-400 transition-transform duration-300"
                data-wp-class--rotate-180="state.activeFaq === 1"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div 
            data-wp-bind--hidden="state.activeFaq !== 1"
            class="pb-6">
            <p class="text-slate-500 leading-relaxed"><?php echo esc_html__( 'WindWP is an AI-First Tailwind Framework Theme for WordPress. It\'s built specifically for developers who use AI coding assistants like Cursor, Copilot, and Claude. The theme provides a clean, minimal codebase that AI can easily understand and modify.', 'windwp' ); ?></p>
        </div>
    </div>
    
    <!-- FAQ Item 2 -->
    <div class="border-b border-slate-200" data-wp-context='{ "id": 2 }'>
        <button 
            data-wp-on--click="actions.toggleFaq"
            class="w-full py-6 flex items-center justify-between text-left group">
            <span class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors"><?php echo esc_html__( 'Is WindWP compatible with WooCommerce?', 'windwp' ); ?></span>
            <svg 
                class="w-5 h-5 text-slate-400 transition-transform duration-300"
                data-wp-class--rotate-180="state.activeFaq === 2"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div 
            data-wp-bind--hidden="state.activeFaq !== 2"
            class="pb-6">
            <p class="text-slate-500 leading-relaxed"><?php echo esc_html__( 'Yes! WindWP includes full WooCommerce support with custom Tailwind-styled templates for shop, product, cart, and checkout pages. It also includes an offcanvas mini-cart and AJAX add-to-cart functionality.', 'windwp' ); ?></p>
        </div>
    </div>
    
    <!-- FAQ Item 3 -->
    <div class="border-b border-slate-200" data-wp-context='{ "id": 3 }'>
        <button 
            data-wp-on--click="actions.toggleFaq"
            class="w-full py-6 flex items-center justify-between text-left group">
            <span class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors"><?php echo esc_html__( 'Do I need to know Tailwind CSS?', 'windwp' ); ?></span>
            <svg 
                class="w-5 h-5 text-slate-400 transition-transform duration-300"
                data-wp-class--rotate-180="state.activeFaq === 3"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div 
            data-wp-bind--hidden="state.activeFaq !== 3"
            class="pb-6">
            <p class="text-slate-500 leading-relaxed"><?php echo esc_html__( 'While knowing Tailwind CSS helps, you don\'t need to be an expert. WindWP comes with pre-built CSS components like .btn-primary, .card-glass, and .section-dark that you can use right away. Plus, AI coding assistants can help you write Tailwind classes!', 'windwp' ); ?></p>
        </div>
    </div>
    
    <!-- FAQ Item 4 -->
    <div class="border-b border-slate-200" data-wp-context='{ "id": 4 }'>
        <button 
            data-wp-on--click="actions.toggleFaq"
            class="w-full py-6 flex items-center justify-between text-left group">
            <span class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors"><?php echo esc_html__( 'Is WindWP free?', 'windwp' ); ?></span>
            <svg 
                class="w-5 h-5 text-slate-400 transition-transform duration-300"
                data-wp-class--rotate-180="state.activeFaq === 4"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div 
            data-wp-bind--hidden="state.activeFaq !== 4"
            class="pb-6">
            <p class="text-slate-500 leading-relaxed"><?php echo esc_html__( 'Yes! WindWP is open-source and free under the GPL-2.0 license. You can use it for personal and commercial projects without any restrictions. The source code is available on GitHub.', 'windwp' ); ?></p>
        </div>
    </div>
    
    <!-- FAQ Item 5 -->
    <div class="border-b border-slate-200" data-wp-context='{ "id": 5 }'>
        <button 
            data-wp-on--click="actions.toggleFaq"
            class="w-full py-6 flex items-center justify-between text-left group">
            <span class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors"><?php echo esc_html__( 'How do I get started?', 'windwp' ); ?></span>
            <svg 
                class="w-5 h-5 text-slate-400 transition-transform duration-300"
                data-wp-class--rotate-180="state.activeFaq === 5"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div 
            data-wp-bind--hidden="state.activeFaq !== 5"
            class="pb-6">
            <p class="text-slate-500 leading-relaxed"><?php echo esc_html__( 'Simply download the theme from GitHub, install it in WordPress, and run npm install && npm run dev to start developing. Check out our documentation for detailed setup instructions.', 'windwp' ); ?></p>
        </div>
    </div>
    
</div>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
