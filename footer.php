    <!-- Footer -->
    <footer class="footer">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <!-- Logo & Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl overflow-hidden border border-cyan-400/30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Logo" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="tech-font text-2xl font-bold gradient-text"><?php echo esc_html(smrt_get_option('hero_title', 'MECHANICAL')); ?> ENGINEERING</span>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        <?php echo esc_html(smrt_get_option('hero_subtitle', 'Department of Mechanical Engineering')); ?><br>
                        สาขาวิชาวิศวกรรมเครื่องกล
                    </p>
                    <div class="flex gap-3">
                        <?php if ($fb = smrt_get_option('social_facebook', '#')): ?>
                            <a href="<?php echo esc_url($fb); ?>" class="social-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if ($yt = smrt_get_option('social_youtube', '#')): ?>
                            <a href="<?php echo esc_url($yt); ?>" class="social-link" target="_blank"><i class="fab fa-youtube"></i></a>
                        <?php endif; ?>
                        <?php if ($gh = smrt_get_option('social_github', '#')): ?>
                            <a href="<?php echo esc_url($gh); ?>" class="social-link" target="_blank"><i class="fab fa-github"></i></a>
                        <?php endif; ?>
                        <?php if ($li = smrt_get_option('social_linkedin', '#')): ?>
                            <a href="<?php echo esc_url($li); ?>" class="social-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-bold mb-4">ลิงก์ด่วน</h4>
                    <?php
                    if (has_nav_menu('footer')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'space-y-2',
                            'link_before'    => '',
                            'link_after'     => '',
                        ));
                    } else {
                        ?>
                        <ul class="space-y-2">
                            <li><a href="#about" class="text-gray-400 hover:text-cyan-400 transition">เกี่ยวกับเรา</a></li>
                            <li><a href="#research" class="text-gray-400 hover:text-cyan-400 transition">งานวิจัย</a></li>
                            <li><a href="#team" class="text-gray-400 hover:text-cyan-400 transition">บุคลากร</a></li>
                            <li><a href="#tools" class="text-gray-400 hover:text-cyan-400 transition">เครื่องมือ</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
                
                <!-- Widget Area -->
                <div>
                    <?php if (is_active_sidebar('footer-1')): ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php else: ?>
                        <h4 class="font-bold mb-4">ทรัพยากร</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition">ผลงานตีพิมพ์</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition">โปรเจกต์</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition">ข่าวสารและกิจกรรม</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition">ร่วมงานกับเรา</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-gray-500 text-sm">
                    © <?php echo date('Y'); ?> <?php echo esc_html(smrt_get_option('hero_title', 'SMRT')); ?> Lab - <?php echo esc_html(smrt_get_option('hero_subtitle', 'Smart Machine and Robotics Technology')); ?>. All rights reserved.<br>
                    สาขาวิชาวิศวกรรมเครื่องกล | Mechanical Engineering Department
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
