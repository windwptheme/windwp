<?php
/**
 * Title: WindWP Hero Section
 * Slug: windwp/hero
 * Categories: featured, header
 * Description: A stunning hero section with gradient background, badge, headline, description, and CTA buttons.
 * Keywords: hero, header, banner, landing
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"relative overflow-hidden bg-slate-950 py-24 sm:pt-28 sm:pb-32","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull relative overflow-hidden bg-slate-950 py-24 sm:pt-28 sm:pb-32">

    <!-- DECORATIONS: Keep in wp:html as they do not need to be edited as content -->
    <!-- wp:html -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary-dark/5 rounded-full blur-3xl"></div>
    <!-- /wp:html -->

    <!-- CONTENT: Use native blocks with Tailwind classes -->
    <!-- wp:group {"className":"relative z-10 mx-auto max-w-7xl px-6 lg:px-8","layout":{"type":"constrained"}} -->
    <div class="wp-block-group relative z-10 mx-auto max-w-7xl px-6 lg:px-8">

        <!-- wp:group {"className":"mx-auto max-w-2xl text-center","layout":{"type":"constrained"}} -->
        <div class="wp-block-group mx-auto max-w-2xl text-center">

            <!-- BADGE: Can be kept in wp:html or made via Paragraph if editing is needed -->
            <!-- wp:html -->
            <div class="mb-8 inline-flex">
                <span class="rounded-full py-1.5 px-4 text-xs font-bold uppercase tracking-[0.1em] bg-primary/10 text-primary ring-1 ring-inset ring-primary/20"><?php echo esc_html__( 'Version 1.0.0 is out', 'windwp' ); ?></span>
            </div>
            <!-- /wp:html -->

            <!-- wp:heading {"level":1,"className":"text-5xl font-black tracking-tight text-white sm:text-7xl mb-8"} -->
            <h1 class="wp-block-heading text-5xl font-black tracking-tight text-white sm:text-7xl mb-8"><?php echo esc_html__( 'WindWP – AI-First Framework', 'windwp' ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-xl leading-8 text-slate-400 mb-12"} -->
            <p class="text-xl leading-8 text-slate-400 mb-12"><?php echo esc_html__( 'Minimalist, lightning-fast FSE theme for WordPress & WooCommerce. Built with Tailwind CSS — effortless Gutenberg editing, pure coding joy, and AI-optimized.', 'windwp' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"gap-6"} -->
            <div class="wp-block-buttons gap-6">
                <!-- wp:button {"className":"is-btn-primary"} -->
                <div class="wp-block-button is-btn-primary"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Get Started', 'windwp' ); ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-btn-outline"} -->
                <div class="wp-block-button is-btn-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More', 'windwp' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</section>
<!-- /wp:group -->
