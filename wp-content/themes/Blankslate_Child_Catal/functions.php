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
    
    // 添加多语言支持
    load_theme_textdomain('cmr-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'cmr_theme_setup');

// 注册样式和脚本
function cmr_theme_scripts() {
    // 主样式文件
    wp_enqueue_style('cmr-style', get_stylesheet_uri(), array(), '2.0.0');
    
    // Font Awesome图标
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
    
    // 主脚本文件
    wp_enqueue_script('cmr-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '2.0.0', true);
    
    // 本地化脚本
    wp_localize_script('cmr-script', 'cmr_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('cmr_nonce'),
        'current_lang' => get_current_language(),
    ));
}
add_action('wp_enqueue_scripts', 'cmr_theme_scripts');

// 多语言支持函数
function get_current_language() {
    if (isset($_COOKIE['cmr_language'])) {
        return $_COOKIE['cmr_language'];
    }
    return 'zh'; // 默认中文
}

function set_language($lang) {
    setcookie('cmr_language', $lang, time() + (86400 * 30), '/'); // 30天
}

// AJAX处理语言切换
function handle_language_switch() {
    check_ajax_referer('cmr_nonce', 'nonce');
    
    $language = sanitize_text_field($_POST['language']);
    $allowed_languages = array('zh', 'en', 'es');
    
    if (in_array($language, $allowed_languages)) {
        set_language($language);
        wp_send_json_success(array('language' => $language));
    } else {
        wp_send_json_error('Invalid language');
    }
}
add_action('wp_ajax_switch_language', 'handle_language_switch');
add_action('wp_ajax_nopriv_switch_language', 'handle_language_switch');

// 获取翻译文本
function get_translation($key, $lang = null) {
    if (!$lang) {
        $lang = get_current_language();
    }
    
    $translations = array(
        'zh' => array(
            'home' => '首页',
            'about' => '关于CMR',
            'industry' => '行业领域',
            'technology' => '技术能力',
            'innovation' => '创新资源',
            'contact' => '联系我们',
            'company_intro' => '公司介绍',
            'culture_values' => '文化与价值观',
            'qualifications' => '资质与专利',
            'news' => '新闻动态',
            'careers' => '加入我们',
            'product_applications' => '产品应用',
            'advantage_products' => '优势产品',
            'other_products' => '其他产品',
            'capability_display' => '能力陈列',
            'design_engineering' => '设计与工程',
            'solutions' => '解决方案',
            'blog_subscribe' => '博客和订阅',
            'address_online' => '地址+在线',
            'read_more' => '了解更多',
            'contact_us' => '联系我们',
            'learn_more' => '了解更多',
            'view_more' => '查看更多',
            'send_message' => '发送消息',
            'follow_us' => '关注我们',
            'back_to_top' => '返回顶部',
            'loading' => '加载中...',
            'success' => '成功',
            'error' => '错误',
            'warning' => '警告',
            'info' => '信息',
        ),
        'en' => array(
            'home' => 'Home',
            'about' => 'About CMR',
            'industry' => 'Industries',
            'technology' => 'Technology',
            'innovation' => 'Innovation',
            'contact' => 'Contact Us',
            'company_intro' => 'Company Introduction',
            'culture_values' => 'Culture & Values',
            'qualifications' => 'Qualifications & Patents',
            'news' => 'News',
            'careers' => 'Careers',
            'product_applications' => 'Product Applications',
            'advantage_products' => 'Advantage Products',
            'other_products' => 'Other Products',
            'capability_display' => 'Capabilities',
            'design_engineering' => 'Design & Engineering',
            'solutions' => 'Solutions',
            'blog_subscribe' => 'Blog & Subscribe',
            'address_online' => 'Address & Online',
            'read_more' => 'Read More',
            'contact_us' => 'Contact Us',
            'learn_more' => 'Learn More',
            'view_more' => 'View More',
            'send_message' => 'Send Message',
            'follow_us' => 'Follow Us',
            'back_to_top' => 'Back to Top',
            'loading' => 'Loading...',
            'success' => 'Success',
            'error' => 'Error',
            'warning' => 'Warning',
            'info' => 'Info',
        ),
        'es' => array(
            'home' => 'Inicio',
            'about' => 'Acerca de CMR',
            'industry' => 'Industrias',
            'technology' => 'Tecnología',
            'innovation' => 'Innovación',
            'contact' => 'Contáctanos',
            'company_intro' => 'Introducción de la Empresa',
            'culture_values' => 'Cultura y Valores',
            'qualifications' => 'Calificaciones y Patentes',
            'news' => 'Noticias',
            'careers' => 'Carreras',
            'product_applications' => 'Aplicaciones de Productos',
            'advantage_products' => 'Productos Ventajosos',
            'other_products' => 'Otros Productos',
            'capability_display' => 'Capacidades',
            'design_engineering' => 'Diseño e Ingeniería',
            'solutions' => 'Soluciones',
            'blog_subscribe' => 'Blog y Suscripción',
            'address_online' => 'Dirección y En Línea',
            'read_more' => 'Leer Más',
            'contact_us' => 'Contáctanos',
            'learn_more' => 'Aprender Más',
            'view_more' => 'Ver Más',
            'send_message' => 'Enviar Mensaje',
            'follow_us' => 'Síguenos',
            'back_to_top' => 'Volver Arriba',
            'loading' => 'Cargando...',
            'success' => 'Éxito',
            'error' => 'Error',
            'warning' => 'Advertencia',
            'info' => 'Información',
        ),
    );
    
    return isset($translations[$lang][$key]) ? $translations[$lang][$key] : $key;
}

// 简化翻译函数
function t($key, $lang = null) {
    return get_translation($key, $lang);
}

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
