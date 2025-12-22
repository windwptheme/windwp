<?php
/**
 * Title: WindWP Newsletter Section
 * Slug: windwp/newsletter
 * Categories: featured, call-to-action
 * Description: A newsletter subscription section with email input and subscribe button.
 * Keywords: newsletter, email, subscribe, mailing list
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"bg-slate-900 py-20","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bg-slate-900 py-20">

<!-- wp:group {"className":"max-w-4xl mx-auto px-6 lg:px-8 text-center","layout":{"type":"constrained"}} -->
<div class="wp-block-group max-w-4xl mx-auto px-6 lg:px-8 text-center">

<!-- wp:heading {"level":2,"className":"text-3xl sm:text-4xl font-black text-white mb-4"} -->
<h2 class="wp-block-heading text-3xl sm:text-4xl font-black text-white mb-4"><?php echo esc_html__( 'Stay in the loop', 'windwp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-lg text-slate-400 mb-10 max-w-xl mx-auto"} -->
<p class="text-lg text-slate-400 mb-10 max-w-xl mx-auto"><?php echo esc_html__( 'Get the latest on AI development and Tailwind CSS frameworks delivered to your inbox.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="relative max-w-lg mx-auto">
    <input type="email" 
           placeholder="<?php echo esc_attr__( 'Enter your email', 'windwp' ); ?>" 
           class="w-full bg-slate-800/50 border border-slate-700/50 rounded-2xl py-5 px-6 pr-36 text-white placeholder:text-slate-500 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/20 transition-all text-base">
    <button class="btn-secondary absolute right-2 top-2 bottom-2">
        <?php echo esc_html__( 'Subscribe', 'windwp' ); ?>
    </button>
</div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"text-xs text-slate-500 mt-6"} -->
<p class="text-xs text-slate-500 mt-6"><?php echo esc_html__( 'We respect your privacy. Unsubscribe at any time.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
