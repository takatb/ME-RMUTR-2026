<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav id="navbar" class="navbar py-4 px-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <div class="w-12 h-12 rounded-xl overflow-hidden border border-cyan-400/30">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Logo" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <span class="tech-font text-2xl font-bold gradient-text"><?php echo esc_html(smrt_get_option('hero_title', 'MECHANICAL')); ?></span>
                        <span class="block text-xs text-gray-400">Department of Mechanical Engineering</span>
                    </div>
                <?php endif; ?>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'walker'         => new SMRT_Nav_Walker(),
                    ));
                } else {
                    // Default menu if none set
                    ?>
                    <a href="#home" class="nav-link">หน้าแรก</a>
                    <a href="#about" class="nav-link">เกี่ยวกับเรา</a>
                    <a href="#research" class="nav-link">งานวิจัย</a>
                    <a href="#team" class="nav-link">บุคลากร</a>
                    <a href="#program" class="nav-link">หลักสูตร</a>
                    <a href="#news" class="nav-link">ข่าวสาร</a>
                    <?php
                }
                ?>
                <a href="#contact" class="btn-primary text-sm">ติดต่อเรา</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-2xl text-gray-300 hover:text-white">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay"></div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu">
        <button id="close-menu-btn" class="absolute top-6 right-6 text-2xl text-gray-300 hover:text-white">
            <i class="fas fa-times"></i>
        </button>
        <div class="flex flex-col gap-6">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'walker'         => new SMRT_Mobile_Nav_Walker(),
                ));
            } else {
                ?>
                <a href="#home" class="mobile-nav-link text-xl text-gray-300 hover:text-cyan-400 transition">หน้าแรก</a>
                <a href="#about" class="mobile-nav-link text-xl text-gray-300 hover:text-cyan-400 transition">เกี่ยวกับเรา</a>
                <a href="#research" class="mobile-nav-link text-xl text-gray-300 hover:text-cyan-400 transition">งานวิจัย</a>
                <a href="#team" class="mobile-nav-link text-xl text-gray-300 hover:text-cyan-400 transition">บุคลากร</a>
                <a href="#program" class="mobile-nav-link text-xl text-gray-300 hover:text-cyan-400 transition">หลักสูตร</a>
                <a href="#news" class="mobile-nav-link text-xl text-gray-300 hover:text-cyan-400 transition">ข่าวสาร</a>
                <?php
            }
            ?>
            <a href="#contact" class="btn-primary text-center mt-4">ติดต่อเรา</a>
        </div>
    </div>
