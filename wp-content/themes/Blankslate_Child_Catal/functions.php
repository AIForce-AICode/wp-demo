<?php
// WordPress主题功能文件

// 主题支持
function cmr_theme_setup() {
    // 添加主题支持
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // 注册导航菜单
    register_nav_menus(array(
        'primary' => '主导航菜单',
        'footer' => '页脚菜单',
    ));
}
add_action('after_setup_theme', 'cmr_theme_setup');

// 注册样式和脚本
function cmr_theme_scripts() {
    wp_enqueue_style('cmr-style', get_stylesheet_uri());
    wp_enqueue_script('cmr-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'cmr_theme_scripts');

// 注册侧边栏
function cmr_widgets_init() {
    register_sidebar(array(
        'name'          => '页脚区域1',
        'id'            => 'footer-1',
        'description'   => '页脚第一个区域',
        'before_widget' => '<div class="footer-section">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => '页脚区域2',
        'id'            => 'footer-2',
        'description'   => '页脚第二个区域',
        'before_widget' => '<div class="footer-section">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => '页脚区域3',
        'id'            => 'footer-3',
        'description'   => '页脚第三个区域',
        'before_widget' => '<div class="footer-section">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'cmr_widgets_init');

// 自定义页面模板
function cmr_page_template_redirect() {
    if (is_page()) {
        $page_slug = get_post_field('post_name', get_post());
        $template_file = '';
        
        switch ($page_slug) {
            case 'about':
            case 'about-cmr':
                $template_file = 'page-about.php';
                break;
            case 'industry':
            case 'industry-fields':
                $template_file = 'page-industry.php';
                break;
            case 'technology':
            case 'tech-capability':
                $template_file = 'page-technology.php';
                break;
            case 'innovation':
            case 'innovation-resources':
                $template_file = 'page-innovation.php';
                break;
            case 'contact':
            case 'contact-us':
                $template_file = 'page-contact.php';
                break;
        }
        
        if ($template_file && locate_template($template_file)) {
            include(locate_template($template_file));
            exit;
        }
    }
}
add_action('template_redirect', 'cmr_page_template_redirect');

// 添加自定义字段支持
function cmr_add_custom_fields() {
    // 这里可以添加自定义字段的定义
}
add_action('init', 'cmr_add_custom_fields');
?>
