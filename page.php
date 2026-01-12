<?php
/**
 * Page Template
 *
 * @package ME-RMUTR-2026
 */

get_header();
?>

<main class="py-20 px-6 min-h-screen">
    <div class="max-w-4xl mx-auto">
        
        <?php while (have_posts()): the_post(); ?>
            
            <article id="page-<?php the_ID(); ?>" <?php post_class('glass-card p-8 fade-in'); ?>>
                <header class="mb-8">
                    <h1 class="text-3xl md:text-4xl font-bold gradient-text">
                        <?php the_title(); ?>
                    </h1>
                </header>
                
                <?php if (has_post_thumbnail()): ?>
                    <div class="mb-8 rounded-xl overflow-hidden">
                        <?php the_post_thumbnail('full', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>
                
                <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed">
                    <?php the_content(); ?>
                </div>
            </article>
            
            <!-- Comments -->
            <?php if (comments_open() || get_comments_number()): ?>
                <div class="mt-8 glass-card p-8 fade-in">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>
            
        <?php endwhile; ?>
        
    </div>
</main>

<?php get_footer(); ?>
