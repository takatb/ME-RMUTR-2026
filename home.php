<?php
/**
 * Home Template - หน้ารวมบทความ/ข่าว (Blog Page)
 * ใช้เมื่อตั้งค่า "หน้าบทความ" ใน Settings > Reading
 *
 * @package ME-RMUTR-2026
 */

get_header();
?>

<!-- Hero Banner -->
<section class="pt-32 pb-16 px-6 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-blue-500/10 to-transparent"></div>
    <div id="particles" class="particles"></div>
    
    <div class="max-w-7xl mx-auto relative z-10 text-center">
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-500/20 to-cyan-400/20 rounded-full flex items-center justify-center">
            <i class="fas fa-newspaper text-3xl gradient-text"></i>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">ข่าวสารและกิจกรรม</h1>
        <p class="text-gray-400 max-w-2xl mx-auto">
            อัพเดทข่าวสาร กิจกรรม งานวิจัย และความเคลื่อนไหวล่าสุดจากห้องปฏิบัติการ SMRT
        </p>
    </div>
</section>

<main class="py-12 px-6 min-h-screen">
    <div class="max-w-7xl mx-auto">
        
        <?php if (have_posts()): ?>
            
            <!-- Featured Post (First Post) -->
            <?php if (!is_paged()): ?>
                <?php the_post(); ?>
                <article class="glass-card overflow-hidden mb-12 fade-in">
                    <div class="grid md:grid-cols-2 gap-0">
                        <!-- Thumbnail -->
                        <div class="relative h-64 md:h-auto overflow-hidden">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', array(
                                    'class' => 'w-full h-full object-cover'
                                )); ?>
                            <?php else: ?>
                                <div class="w-full h-full bg-gradient-to-br from-blue-500/30 to-cyan-400/30 flex items-center justify-center">
                                    <i class="fas fa-newspaper text-6xl text-gray-600"></i>
                                </div>
                            <?php endif; ?>
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-cyan-400 text-white text-sm font-bold rounded-full">
                                    <i class="fas fa-star mr-1"></i> ข่าวเด่น
                                </span>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-8 md:p-10 flex flex-col justify-center">
                            <?php 
                            $categories = get_the_category();
                            if ($categories): 
                            ?>
                                <div class="mb-3">
                                    <a href="<?php echo get_category_link($categories[0]->term_id); ?>" 
                                       class="text-cyan-400 text-sm hover:underline">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <h2 class="text-2xl md:text-3xl font-bold mb-4">
                                <a href="<?php the_permalink(); ?>" class="text-white hover:text-cyan-400 transition">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <p class="text-gray-400 mb-6">
                                <?php echo wp_trim_words(get_the_excerpt(), 40); ?>
                            </p>
                            
                            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 mb-6">
                                <span><i class="fas fa-calendar-alt mr-1"></i> <?php echo get_the_date(); ?></span>
                                <span><i class="fas fa-user mr-1"></i> <?php the_author(); ?></span>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn-primary self-start">
                                อ่านเพิ่มเติม <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endif; ?>
            
            <!-- News Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()): the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('glass-card overflow-hidden fade-in group'); ?>>
                        <!-- Thumbnail -->
                        <div class="relative h-48 overflow-hidden">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium_large', array(
                                    'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
                                )); ?>
                            <?php else: ?>
                                <div class="w-full h-full bg-gradient-to-br from-blue-500/20 to-cyan-400/20 flex items-center justify-center">
                                    <i class="fas fa-newspaper text-4xl text-gray-600"></i>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Category Badge -->
                            <?php 
                            $categories = get_the_category();
                            if ($categories): 
                            ?>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-blue-500/80 backdrop-blur text-white text-xs rounded-full">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6">
                            <!-- Date -->
                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                                <span><i class="fas fa-calendar-alt mr-1"></i> <?php echo get_the_date(); ?></span>
                                <span><i class="fas fa-user mr-1"></i> <?php the_author(); ?></span>
                            </div>
                            
                            <!-- Title -->
                            <h2 class="text-xl font-bold mb-3 line-clamp-2">
                                <a href="<?php the_permalink(); ?>" class="text-white hover:text-cyan-400 transition">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <!-- Excerpt -->
                            <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>
                            
                            <!-- Read More -->
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-cyan-400 text-sm font-medium hover:gap-3 transition-all gap-2">
                                อ่านเพิ่มเติม <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <?php
                $pagination = paginate_links(array(
                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                    'type'      => 'array',
                ));
                
                if ($pagination):
                ?>
                    <nav class="flex items-center gap-2">
                        <?php foreach ($pagination as $page): ?>
                            <span class="pagination-item">
                                <?php echo str_replace(
                                    array('page-numbers', 'current'),
                                    array('px-4 py-2 rounded-lg text-gray-400 hover:bg-white/10 transition', 'bg-gradient-to-r from-blue-500 to-cyan-400 text-white'),
                                    $page
                                ); ?>
                            </span>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </div>
            
        <?php else: ?>
            
            <!-- No Posts -->
            <div class="glass-card p-16 text-center">
                <i class="fas fa-inbox text-6xl text-gray-600 mb-6"></i>
                <h2 class="text-2xl font-bold mb-4 gradient-text">ยังไม่มีข่าวสาร</h2>
                <p class="text-gray-400 mb-8">ขณะนี้ยังไม่มีข่าวสารหรือบทความ กรุณากลับมาตรวจสอบใหม่ภายหลัง</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
                    <i class="fas fa-home mr-2"></i>กลับหน้าแรก
                </a>
            </div>
            
        <?php endif; ?>
        
    </div>
</main>

<!-- Categories Section -->
<aside class="py-12 px-6 bg-black/20">
    <div class="max-w-7xl mx-auto">
        <h3 class="text-xl font-bold mb-6 gradient-text">หมวดหมู่ข่าว</h3>
        <div class="flex flex-wrap gap-3">
            <?php
            $categories = get_categories(array('hide_empty' => true));
            foreach ($categories as $cat):
            ?>
                <a href="<?php echo get_category_link($cat->term_id); ?>" 
                   class="px-4 py-2 glass-card hover:border-cyan-400/50 transition text-gray-400 hover:text-cyan-400 text-sm">
                    <i class="fas fa-folder mr-2"></i>
                    <?php echo esc_html($cat->name); ?>
                    <span class="ml-1 text-gray-600">(<?php echo $cat->count; ?>)</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</aside>

<?php get_footer(); ?>
