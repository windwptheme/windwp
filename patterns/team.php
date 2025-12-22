<?php
/**
 * Title: Team Section
 * Slug: windwp/team
 * Categories: windwp, about
 * Description: A team section showcasing team members with avatars, roles, and social links in glassmorphism cards.
 * Keywords: team, members, about, staff
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

<!-- wp:group {"className":"text-center mb-16","layout":{"type":"constrained"}} -->
<div class="wp-block-group text-center mb-16">

<!-- wp:paragraph {"className":"mb-4 text-xs font-black uppercase tracking-[0.2em] text-primary"} -->
<p class="mb-4 text-xs font-black uppercase tracking-[0.2em] text-primary"><?php echo esc_html__( 'Our Team', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"text-5xl font-black tracking-tight text-white sm:text-6xl"} -->
<h2 class="wp-block-heading text-5xl font-black tracking-tight text-white sm:text-6xl"><?php echo esc_html__( 'Meet the Creators', 'windwp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mx-auto mt-8 max-w-2xl text-xl text-slate-400"} -->
<p class="mx-auto mt-8 max-w-2xl text-xl text-slate-400"><?php echo esc_html__( 'The passionate developers behind WindWP.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8","layout":{"type":"constrained"}} -->
<div class="wp-block-group grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

<!-- wp:group {"className":"card-glass group text-center","layout":{"type":"constrained"}} -->
<div class="wp-block-group card-glass group text-center">

<!-- wp:html -->
<div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white text-3xl font-black">
    IV
</div>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"text-xl font-bold text-white mb-1"} -->
<h3 class="wp-block-heading text-xl font-bold text-white mb-1"><?php echo esc_html__( 'Ilia Volkov', 'windwp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-primary text-sm font-medium mb-4"} -->
<p class="text-primary text-sm font-medium mb-4"><?php echo esc_html__( 'Founder & Lead Developer', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"text-slate-400 text-sm mb-6"} -->
<p class="text-slate-400 text-sm mb-6"><?php echo esc_html__( 'Full-stack developer passionate about AI-assisted development and modern web technologies.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="flex justify-center gap-4">
    <a href="#" class="text-slate-400 hover:text-primary transition-colors">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
    </a>
    <a href="#" class="text-slate-400 hover:text-primary transition-colors">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
    </a>
</div>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"card-glass group text-center","layout":{"type":"constrained"}} -->
<div class="wp-block-group card-glass group text-center">

<!-- wp:html -->
<div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white text-3xl font-black">
    CL
</div>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"text-xl font-bold text-white mb-1"} -->
<h3 class="wp-block-heading text-xl font-bold text-white mb-1"><?php echo esc_html__( 'Claude AI', 'windwp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-primary text-sm font-medium mb-4"} -->
<p class="text-primary text-sm font-medium mb-4"><?php echo esc_html__( 'AI Pair Programmer', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"text-slate-400 text-sm mb-6"} -->
<p class="text-slate-400 text-sm mb-6"><?php echo esc_html__( 'Anthropic\'s AI assistant helping write clean, efficient code and documentation.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="flex justify-center gap-4">
    <a href="#" class="text-slate-400 hover:text-primary transition-colors">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
    </a>
</div>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"card-glass group text-center","layout":{"type":"constrained"}} -->
<div class="wp-block-group card-glass group text-center">

<!-- wp:html -->
<div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white text-3xl font-black">
    YO
</div>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"text-xl font-bold text-white mb-1"} -->
<h3 class="wp-block-heading text-xl font-bold text-white mb-1"><?php echo esc_html__( 'You', 'windwp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-primary text-sm font-medium mb-4"} -->
<p class="text-primary text-sm font-medium mb-4"><?php echo esc_html__( 'Contributor', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"text-slate-400 text-sm mb-6"} -->
<p class="text-slate-400 text-sm mb-6"><?php echo esc_html__( 'Open-source is built by the community. Join us and become a contributor!', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"inline-block rounded-xl border-2 border-white/20 bg-white/10 text-white text-xs px-4 py-2 font-black uppercase tracking-widest hover:bg-primary hover:border-primary transition-all duration-300"} -->
<div class="wp-block-button inline-block rounded-xl border-2 border-white/20 bg-white/10 text-white text-xs px-4 py-2 font-black uppercase tracking-widest hover:bg-primary hover:border-primary transition-all duration-300"><a class="wp-block-button__link" href="#"><?php echo esc_html__( 'Contribute', 'windwp' ); ?></a></div>
<!-- /wp:button -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"card-glass group text-center","layout":{"type":"constrained"}} -->
<div class="wp-block-group card-glass group text-center">

<!-- wp:html -->
<div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white text-3xl font-black">
    +
</div>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"text-xl font-bold text-white mb-1"} -->
<h3 class="wp-block-heading text-xl font-bold text-white mb-1"><?php echo esc_html__( 'Join Us', 'windwp' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-primary text-sm font-medium mb-4"} -->
<p class="text-primary text-sm font-medium mb-4"><?php echo esc_html__( 'Open Position', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"text-slate-400 text-sm mb-6"} -->
<p class="text-slate-400 text-sm mb-6"><?php echo esc_html__( 'We\'re always looking for passionate developers to join the project.', 'windwp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"inline-block rounded-xl bg-gradient-to-r from-primary to-primary-dark text-white text-xs px-4 py-2 font-black uppercase tracking-widest hover:from-primary-dark hover:to-primary hover:scale-105 transition-all duration-300"} -->
<div class="wp-block-button inline-block rounded-xl bg-gradient-to-r from-primary to-primary-dark text-white text-xs px-4 py-2 font-black uppercase tracking-widest hover:from-primary-dark hover:to-primary hover:scale-105 transition-all duration-300"><a class="wp-block-button__link" href="#"><?php echo esc_html__( 'View Openings', 'windwp' ); ?></a></div>
<!-- /wp:button -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
