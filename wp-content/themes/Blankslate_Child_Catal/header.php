<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-content">
        <div class="site-branding">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    CMR
                </a>
            <?php endif; ?>
        </div>
        
        <div class="header-nav-wrapper">
            <nav class="main-nav">
                <ul>
                    <li>
                        <a href="<?php echo esc_url(home_url('/about')); ?>" 
                           class="nav-link <?php echo (is_page('about') || is_page('about-cmr')) ? 'active' : ''; ?>">
                            关于CMR
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo esc_url(home_url('/industry')); ?>" 
                           class="nav-link <?php echo (is_page('industry') || is_page('industry-fields')) ? 'active' : ''; ?>">
                            行业领域
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo esc_url(home_url('/technology')); ?>" 
                           class="nav-link <?php echo (is_page('technology') || is_page('tech-capability')) ? 'active' : ''; ?>">
                            技术能力
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo esc_url(home_url('/innovation')); ?>" 
                           class="nav-link <?php echo (is_page('innovation') || is_page('innovation-resources')) ? 'active' : ''; ?>">
                            创新资源
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                           class="nav-link <?php echo (is_page('contact') || is_page('contact-us')) ? 'active' : ''; ?>">
                            联系我们
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- 语言切换器 -->
            <div class="language-switcher">
                <select id="language-selector">
                    <option value="zh" <?php echo (get_current_language() == 'zh') ? 'selected' : ''; ?>>中文</option>
                    <option value="en" <?php echo (get_current_language() == 'en') ? 'selected' : ''; ?>>English</option>
                    <option value="es" <?php echo (get_current_language() == 'es') ? 'selected' : ''; ?>>Español</option>
                </select>
            </div>
        </div>
    </div>
</header>

<!-- 返回顶部按钮 -->
<button class="back-to-top interactive-element" id="back-to-top" title="<?php echo t('back_to_top'); ?>">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- 加载动画 -->
<div id="page-loader" class="loading-spinner" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; display: none;"></div>

<main class="main-content">
