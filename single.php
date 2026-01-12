<?php
/**
 * Single Post Template - หน้าแสดงข่าวแต่ละรายการ
 *
 * @package ME-RMUTR-2026
 */

get_header();
?>

<?php while (have_posts()): the_post(); ?>

<!-- Hero Banner with Featured Image -->
<section class="pt-24 pb-12 relative overflow-hidden">
    <?php if (has_post_thumbnail()): ?>
        <!-- Background Image -->
        <div class="absolute inset-0">
            <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover opacity-20')); ?>
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/80 via-slate-900/90 to-slate-900"></div>
        </div>
    <?php else: ?>
        <div class="absolute inset-0 bg-gradient-to-b from-blue-500/10 to-transparent"></div>
    <?php endif; ?>
    
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-8">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-500 hover:text-cyan-400 transition">
                <i class="fas fa-home mr-1"></i> หน้าแรก
            </a>
            <span class="mx-2 text-gray-600">/</span>
            <a href="<?php echo get_post_type_archive_link('post'); ?>" class="text-gray-500 hover:text-cyan-400 transition">
                ข่าวสาร
            </a>
            <?php 
            $categories = get_the_category();
            if ($categories): 
            ?>
                <span class="mx-2 text-gray-600">/</span>
                <a href="<?php echo get_category_link($categories[0]->term_id); ?>" class="text-gray-500 hover:text-cyan-400 transition">
                    <?php echo esc_html($categories[0]->name); ?>
                </a>
            <?php endif; ?>
        </nav>
        
        <!-- Category Badge -->
        <?php if ($categories): ?>
            <div class="mb-4">
                <?php foreach (array_slice($categories, 0, 2) as $cat): ?>
                    <a href="<?php echo get_category_link($cat->term_id); ?>" 
                       class="inline-block px-3 py-1 bg-blue-500/80 text-white text-xs rounded-full mr-2 hover:bg-blue-600 transition">
                        <?php echo esc_html($cat->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <!-- Title -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-white leading-tight">
            <?php the_title(); ?>
        </h1>
        
        <!-- Meta Info -->
        <div class="flex flex-wrap items-center gap-6 text-sm text-gray-400">
            <!-- Author -->
            <div class="flex items-center gap-3">
                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'rounded-full')); ?>
                <div>
                    <span class="block text-white font-medium"><?php the_author(); ?></span>
                    <span class="text-gray-500">ผู้เขียน</span>
                </div>
            </div>
            
            <!-- Date -->
            <div class="flex items-center gap-2">
                <i class="fas fa-calendar-alt text-cyan-400"></i>
                <span><?php echo get_the_date('j F Y'); ?></span>
            </div>
            
            <!-- Read Time (estimated) -->
            <div class="flex items-center gap-2">
                <i class="fas fa-clock text-cyan-400"></i>
                <span><?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> นาทีในการอ่าน</span>
            </div>
            
            <!-- Comments -->
            <?php if (comments_open()): ?>
                <div class="flex items-center gap-2">
                    <i class="fas fa-comments text-cyan-400"></i>
                    <span><?php comments_number('0 ความคิดเห็น', '1 ความคิดเห็น', '% ความคิดเห็น'); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<main class="py-12 px-6">
    <div class="max-w-4xl mx-auto">
        
        <article id="post-<?php the_ID(); ?>" <?php post_class('fade-in'); ?>>
            
            <!-- Featured Image -->
            <?php if (has_post_thumbnail()): ?>
                <figure class="mb-10 rounded-2xl overflow-hidden glow">
                    <?php the_post_thumbnail('full', array('class' => 'w-full h-auto')); ?>
                    <?php if (get_the_post_thumbnail_caption()): ?>
                        <figcaption class="text-center text-sm text-gray-500 mt-3">
                            <?php echo get_the_post_thumbnail_caption(); ?>
                        </figcaption>
                    <?php endif; ?>
                </figure>
            <?php endif; ?>
            
            <!-- Content -->
            <div class="glass-card p-8 md:p-12">
                <div class="prose prose-lg prose-invert max-w-none 
                            prose-headings:gradient-text prose-headings:font-bold
                            prose-a:text-cyan-400 prose-a:no-underline hover:prose-a:underline
                            prose-img:rounded-xl prose-img:my-8
                            prose-blockquote:border-l-cyan-400 prose-blockquote:bg-white/5 prose-blockquote:py-4 prose-blockquote:px-6 prose-blockquote:rounded-r-xl
                            prose-code:bg-white/10 prose-code:px-2 prose-code:py-1 prose-code:rounded
                            prose-pre:bg-slate-800 prose-pre:border prose-pre:border-white/10
                            text-gray-300 leading-relaxed">
                    <?php the_content(); ?>
                </div>
                
                <!-- Tags -->
                <?php if (has_tag()): ?>
                    <div class="mt-10 pt-8 border-t border-white/10">
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="text-gray-500"><i class="fas fa-tags mr-2"></i>แท็ก:</span>
                            <?php
                            $tags = get_the_tags();
                            foreach ($tags as $tag):
                            ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" 
                                   class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-sm text-gray-400 hover:text-cyan-400 hover:border-cyan-400/50 transition">
                                    #<?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Share Buttons -->
                <div class="mt-8 pt-8 border-t border-white/10">
                    <div class="flex flex-wrap items-center gap-4">
                        <span class="text-gray-500"><i class="fas fa-share-alt mr-2"></i>แชร์:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                           target="_blank" class="social-link" title="แชร์ Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                           target="_blank" class="social-link" title="แชร์ Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://line.me/R/msg/text/?<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" 
                           target="_blank" class="social-link" title="แชร์ LINE">
                            <i class="fab fa-line"></i>
                        </a>
                        <button onclick="navigator.clipboard.writeText('<?php echo esc_js(get_permalink()); ?>'); alert('คัดลอกลิงก์แล้ว!');" 
                                class="social-link" title="คัดลอกลิงก์">
                            <i class="fas fa-link"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Author Box -->
            <div class="mt-8 glass-card p-8 flex flex-col md:flex-row items-center md:items-start gap-6">
                <div class="flex-shrink-0">
                    <?php echo get_avatar(get_the_author_meta('ID'), 100, '', '', array('class' => 'rounded-full border-4 border-cyan-400/30')); ?>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">
                        เกี่ยวกับผู้เขียน
                    </h3>
                    <p class="text-xl font-bold gradient-text mb-2"><?php the_author(); ?></p>
                    <p class="text-gray-400 text-sm mb-4">
                        <?php echo get_the_author_meta('description') ?: 'นักวิจัยและบุคลากรของห้องปฏิบัติการ SMRT'; ?>
                    </p>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="text-cyan-400 text-sm hover:underline">
                        ดูบทความทั้งหมด <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- Post Navigation -->
            <div class="mt-8 grid md:grid-cols-2 gap-4">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                
                <?php if ($prev_post): ?>
                    <a href="<?php echo get_permalink($prev_post); ?>" class="glass-card p-6 hover:border-cyan-400/50 transition group">
                        <span class="text-xs text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-arrow-left mr-1"></i> ข่าวก่อนหน้า
                        </span>
                        <p class="text-white font-medium mt-2 group-hover:text-cyan-400 transition line-clamp-2">
                            <?php echo get_the_title($prev_post); ?>
                        </p>
                    </a>
                <?php else: ?>
                    <div></div>
                <?php endif; ?>
                
                <?php if ($next_post): ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="glass-card p-6 hover:border-cyan-400/50 transition group text-right">
                        <span class="text-xs text-gray-500 uppercase tracking-wider">
                            ข่าวถัดไป <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                        <p class="text-white font-medium mt-2 group-hover:text-cyan-400 transition line-clamp-2">
                            <?php echo get_the_title($next_post); ?>
                        </p>
                    </a>
                <?php endif; ?>
            </div>
            
        </article>
        
        <!-- Related Posts -->
        <?php
        $categories = get_the_category();
        if ($categories):
            $related_posts = new WP_Query(array(
                'category__in'   => array($categories[0]->term_id),
                'post__not_in'   => array(get_the_ID()),
                'posts_per_page' => 3,
                'orderby'        => 'rand',
            ));
            
            if ($related_posts->have_posts()):
        ?>
            <section class="mt-16">
                <h2 class="text-2xl font-bold mb-8 gradient-text">ข่าวที่เกี่ยวข้อง</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
                        <article class="glass-card overflow-hidden group">
                            <div class="relative h-40 overflow-hidden">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium', array(
                                        'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
                                    )); ?>
                                <?php else: ?>
                                    <div class="w-full h-full bg-gradient-to-br from-blue-500/20 to-cyan-400/20 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-3xl text-gray-600"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-4">
                                <span class="text-xs text-gray-500"><?php echo get_the_date(); ?></span>
                                <h3 class="font-bold mt-1 line-clamp-2">
                                    <a href="<?php the_permalink(); ?>" class="text-white hover:text-cyan-400 transition">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </section>
        <?php
            endif;
            wp_reset_postdata();
        endif;
        ?>
        
        <!-- Comments -->
        <?php if (comments_open() || get_comments_number()): ?>
            <section class="mt-16 glass-card p-8 fade-in">
                <?php comments_template(); ?>
            </section>
        <?php endif; ?>
        
    </div>
</main>

<?php endwhile; ?>

<?php get_footer(); ?>
