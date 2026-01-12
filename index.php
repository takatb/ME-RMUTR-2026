<?php
/**
 * Main Index Template
 *
 * @package ME-RMUTR-2026
 */

get_header();
?>

<main class="py-20 px-6 min-h-screen">
    <div class="max-w-4xl mx-auto">
        
        <?php if (have_posts()): ?>
            
            <div class="space-y-8">
                <?php while (have_posts()): the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('glass-card p-8 fade-in'); ?>>
                        <header class="mb-6">
                            <h2 class="text-2xl font-bold mb-2">
                                <a href="<?php the_permalink(); ?>" class="gradient-text hover:opacity-80 transition">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="text-sm text-gray-400">
                                <span><i class="fas fa-calendar-alt mr-1"></i> <?php echo get_the_date(); ?></span>
                                <span class="mx-3">|</span>
                                <span><i class="fas fa-user mr-1"></i> <?php the_author(); ?></span>
                                <?php if (has_category()): ?>
                                    <span class="mx-3">|</span>
                                    <span><i class="fas fa-folder mr-1"></i> <?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>
                        </header>
                        
                        <?php if (has_post_thumbnail()): ?>
                            <div class="mb-6 rounded-xl overflow-hidden">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="text-gray-300 leading-relaxed mb-6">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="btn-primary inline-block">
                            อ่านเพิ่มเติม <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </article>
                    
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="mt-12 flex justify-center gap-4">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                ));
                ?>
            </div>
            
        <?php else: ?>
            
            <div class="glass-card p-12 text-center">
                <i class="fas fa-search text-6xl text-gray-500 mb-6"></i>
                <h2 class="text-2xl font-bold mb-4 gradient-text">ไม่พบเนื้อหา</h2>
                <p class="text-gray-400 mb-6">ขออภัย ไม่พบเนื้อหาที่คุณกำลังค้นหา</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
                    <i class="fas fa-home mr-2"></i>กลับหน้าแรก
                </a>
            </div>
            
        <?php endif; ?>
        
    </div>
</main>

<?php get_footer(); ?>
