<?php
/**
 * Title: WindWP Large Footer
 * Slug: windwp/footer-section
 * Categories: footer
 * Description: A comprehensive footer with brand logo, navigation, newsletter subscription, and social links.
 * Keywords: footer, navigation, newsletter, social
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"bg-slate-900 text-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bg-slate-900 text-white">

<!-- wp:html -->
<div class="mx-auto max-w-7xl px-6 lg:px-8 py-16 lg:py-20">
    
    <!-- Footer Grid -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-16">
        
        <!-- Brand Column -->
        <div class="md:col-span-4 flex flex-col gap-6">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 no-underline group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white text-xl font-black group-hover:scale-110 transition-all duration-300">W</div>
                <span class="text-xl font-bold tracking-tight text-white">WindWP</span>
            </a>
            
            <!-- Social Links -->
            <div class="flex gap-5 items-center">
                <a href="#" class="text-slate-400 hover:text-primary transition-colors" aria-label="Twitter/X">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
                </a>
                <a href="#" class="text-slate-400 hover:text-primary transition-colors" aria-label="GitHub">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                </a>
                <a href="#" class="text-slate-400 hover:text-primary transition-colors" aria-label="LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                </a>
            </div>
        </div>

        <!-- Navigation Column -->
        <div class="md:col-span-2">
            <h4 class="mb-6 text-xs font-black uppercase tracking-[0.2em] text-primary">Navigation</h4>
            <nav class="flex flex-col gap-3 text-slate-300 font-medium text-sm">
                <a href="/" class="hover:text-primary transition-colors no-underline">Home</a>
                <a href="/about" class="hover:text-primary transition-colors no-underline">About</a>
                <a href="/docs" class="hover:text-primary transition-colors no-underline">Documentation</a>
                <a href="/blog" class="hover:text-primary transition-colors no-underline">Blog</a>
            </nav>
        </div>

        <!-- Subscribe Column -->
        <div class="md:col-span-6">
            <h4 class="mb-6 text-xs font-black uppercase tracking-[0.2em] text-primary">Subscribe</h4>
            <p class="text-slate-400 text-base leading-relaxed mb-6 max-w-sm">Get the latest on AI development and Tailwind CSS frameworks.</p>
            
            <div class="relative max-w-md">
                <input type="email" placeholder="Email address" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-2xl py-4 px-6 pr-28 text-white placeholder:text-slate-500 focus:outline-none focus:border-primary/50 focus:ring-2 focus:ring-primary/20 transition-all text-base">
                <button class="btn-secondary absolute right-2 top-2 bottom-2">
                    Join
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Footer Bottom -->
<div class="border-t border-slate-800">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-slate-500 font-bold text-xs uppercase tracking-[0.15em]">© 2026 WindWP. Built for the AI Era.</p>
            <div class="flex gap-8 font-bold text-xs uppercase tracking-[0.15em]">
                <a href="#" class="text-slate-400 hover:text-white transition-colors no-underline">Privacy</a>
                <a href="#" class="text-slate-400 hover:text-white transition-colors no-underline">Terms</a>
            </div>
        </div>
    </div>
</div>
<!-- /wp:html -->

</div>
<!-- /wp:group -->
