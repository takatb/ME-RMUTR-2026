<?php
/**
 * SMRT Theme Functions
 *
 * @package SMRT_Theme
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function smrt_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('customize-selective-refresh-widgets');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('เมนูหลัก', 'smrt-theme'),
        'footer'  => __('เมนู Footer', 'smrt-theme'),
    ));
}
add_action('after_setup_theme', 'smrt_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function smrt_enqueue_scripts() {
    // Tailwind CSS CDN
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700&family=Orbitron:wght@400;500;600;700&display=swap', array(), null);
    
    // Theme Stylesheet
    wp_enqueue_style('smrt-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Custom CSS
    wp_enqueue_style('smrt-custom', get_template_directory_uri() . '/assets/css/custom.css', array('smrt-style'), '1.0.0');
    
    // Main JavaScript
    wp_enqueue_script('smrt-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'smrt_enqueue_scripts');

/**
 * Register Widget Areas
 */
function smrt_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'smrt-theme'),
        'id'            => 'footer-1',
        'description'   => __('Widget area ใน footer', 'smrt-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title font-bold mb-4">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'smrt-theme'),
        'id'            => 'footer-2',
        'description'   => __('Widget area ใน footer', 'smrt-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title font-bold mb-4">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'smrt_widgets_init');

/**
 * Custom Menu Walker for Navigation
 */
class SMRT_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        
        $output .= '<a href="' . esc_url($item->url) . '" class="nav-link">' . esc_html($item->title) . '</a>';
    }
}

/**
 * Mobile Menu Walker
 */
class SMRT_Mobile_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" class="mobile-nav-link text-xl text-gray-300 hover:text-cyan-400 transition">' . esc_html($item->title) . '</a>';
    }
}

/**
 * Theme Customizer Settings
 */
function smrt_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('smrt_hero', array(
        'title'    => __('Hero Section', 'smrt-theme'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'SMRT',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('ชื่อห้องปฏิบัติการ', 'smrt-theme'),
        'section' => 'smrt_hero',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Smart Machine and Robotics Technology',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Subtitle', 'smrt-theme'),
        'section' => 'smrt_hero',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default'           => 'ห้องปฏิบัติการวิจัยด้านเครื่องจักรอัจฉริยะและเทคโนโลยีหุ่นยนต์ สาขาวิชาวิศวกรรมเครื่องกล',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label'   => __('คำอธิบาย', 'smrt-theme'),
        'section' => 'smrt_hero',
        'type'    => 'textarea',
    ));
    
    // Contact Section
    $wp_customize->add_section('smrt_contact', array(
        'title'    => __('ข้อมูลติดต่อ', 'smrt-theme'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'smrt.lab@university.ac.th',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('อีเมล', 'smrt-theme'),
        'section' => 'smrt_contact',
        'type'    => 'email',
    ));
    
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '0-2xxx-xxxx',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label'   => __('โทรศัพท์', 'smrt-theme'),
        'section' => 'smrt_contact',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('contact_address', array(
        'default'           => 'สาขาวิชาวิศวกรรมเครื่องกล คณะวิศวกรรมศาสตร์',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('contact_address', array(
        'label'   => __('ที่อยู่', 'smrt-theme'),
        'section' => 'smrt_contact',
        'type'    => 'textarea',
    ));
    
    // Social Links
    $wp_customize->add_section('smrt_social', array(
        'title'    => __('Social Media', 'smrt-theme'),
        'priority' => 50,
    ));
    
    $socials = array('facebook', 'youtube', 'github', 'linkedin');
    foreach ($socials as $social) {
        $wp_customize->add_setting('social_' . $social, array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control('social_' . $social, array(
            'label'   => ucfirst($social) . ' URL',
            'section' => 'smrt_social',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'smrt_customize_register');

/**
 * Helper function to get theme mod with default
 */
function smrt_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}
