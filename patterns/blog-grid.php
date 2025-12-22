<?php
/**
 * Title: WindWP Blog Post Grid
 * Slug: windwp/blog-grid
 * Categories: query
 */
?>
<!-- wp:group {"align":"full","className":"py-24 sm:pt-28 sm:pb-32 bg-white"} -->
<div class="wp-block-group alignfull py-24 sm:pt-28 sm:pb-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mb-16">
            <!-- wp:paragraph {"className":"text-primary font-bold text-xs uppercase tracking-[0.2em] mb-4 block"} -->
            <p class="text-primary font-bold text-xs uppercase tracking-[0.2em] mb-4 block">Latest Updates</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":2,"className":"text-4xl sm:text-5xl font-black tracking-tight text-slate-900"} -->
            <h2 class="wp-block-heading text-4xl sm:text-5xl font-black tracking-tight text-slate-900">From our blog.</h2>
            <!-- /wp:heading -->
        </div>

        <!-- wp:query {"queryId":1,"query":{"inherit":false,"postType":"post","perPage":3,"offset":0}} -->
        <div class="wp-block-query">
            <!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"className":"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12"} -->
                
                <article class="group">
                    <!-- Featured Image -->
                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"rounded-2xl overflow-hidden mb-6 shadow-md group-hover:shadow-xl group-hover:-translate-y-1 transition-all duration-300"} /-->
                    
                    <!-- Date -->
                    <!-- wp:post-date {"format":"F j, Y","className":"text-primary font-bold text-xs uppercase tracking-[0.15em] mb-3 block"} /-->
                    
                    <!-- Title -->
                    <!-- wp:post-title {"isLink":true,"className":"text-xl font-bold text-slate-900 mb-3 leading-tight group-hover:text-primary transition-colors [&_a]:no-underline [&_a]:text-inherit hover:[&_a]:text-primary"} /-->
                    
                    <!-- Excerpt -->
                    <!-- wp:post-excerpt {"moreText":"","excerptLength":20,"className":"text-slate-500 text-base leading-relaxed mb-4 [&_p]:m-0"} /-->
                    
                    <!-- Read More -->
                    <!-- wp:read-more {"content":"Read more →","className":"text-slate-900 font-semibold text-sm hover:text-primary transition-colors"} /-->
                </article>
                
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
</div>
<!-- /wp:group -->
