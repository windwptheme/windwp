<?php
/**
 * Title: WindWP Call to Action
 * Slug: windwp/cta
 * Categories: featured, call-to-action
 * Description: A compelling call-to-action section with gradient background and centered content.
 * Keywords: cta, call to action, banner, conversion
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"relative overflow-hidden bg-slate-950 py-24 sm:pt-28 sm:pb-32","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull relative overflow-hidden bg-slate-950 py-24 sm:pt-28 sm:pb-32">

<!-- wp:html -->
<div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute -bottom-24 -right-24 w-96 h-96 bg-primary-dark/5 rounded-full blur-3xl"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"relative z-10 mx-auto max-w-7xl px-6 lg:px-8","layout":{"type":"constrained"}} -->
<div class="wp-block-group relative z-10 mx-auto max-w-7xl px-6 lg:px-8">

<!-- wp:group {"className":"mx-auto max-w-2xl text-center","layout":{"type":"constrained"}} -->
<div class="wp-block-group mx-auto max-w-2xl text-center">

<!-- wp:heading {"level":2,"className":"text-4xl font-black tracking-tight text-white sm:text-5xl mb-6"} -->
<h2 class="wp-block-heading text-4xl font-black tracking-tight text-white sm:text-5xl mb-6"><?php echo esc_html__( 'Ready to transform your development?', 'windwp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mx-auto max-w-xl text-lg leading-8 text-white/60 mb-10"} -->
<p class="mx-auto max-w-xl text-lg leading-8 text-white/60 mb-10"><?php echo esc_html__( 'Start building faster and cleaner today with the most advanced Tailwind-based FSE theme.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-btn-primary"} -->
<div class="wp-block-button is-btn-primary"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Join WindWP Today', 'windwp' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
