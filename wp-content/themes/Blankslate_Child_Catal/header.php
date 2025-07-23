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
    <div class="container">
        <div class="header-content">
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>
            
            <nav class="main-nav">
                <ul>
                    <li class="dropdown">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" 
                           class="<?php echo (is_page('about') || is_page('about-cmr')) ? 'active' : ''; ?>">
                            关于CMR
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url(home_url('/about#company')); ?>">公司介绍</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about#culture')); ?>">文化与价值观</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about#qualifications')); ?>">资质与专利</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about#news')); ?>">新闻动态</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about#careers')); ?>">加入我们</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="<?php echo esc_url(home_url('/industry')); ?>" 
                           class="<?php echo (is_page('industry') || is_page('industry-fields')) ? 'active' : ''; ?>">
                            行业领域
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url(home_url('/industry#applications')); ?>">产品应用</a></li>
                            <li><a href="<?php echo esc_url(home_url('/industry#featured')); ?>">优势产品</a></li>
                            <li><a href="<?php echo esc_url(home_url('/industry#other')); ?>">其他产品</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="<?php echo esc_url(home_url('/technology')); ?>" 
                           class="<?php echo (is_page('technology') || is_page('tech-capability')) ? 'active' : ''; ?>">
                            技术能力
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url(home_url('/technology#capabilities')); ?>">能力陈列</a></li>
                            <li><a href="<?php echo esc_url(home_url('/technology#design')); ?>">设计与工程</a></li>
                            <li><a href="<?php echo esc_url(home_url('/technology#solutions')); ?>">解决方案</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="<?php echo esc_url(home_url('/innovation')); ?>" 
                           class="<?php echo (is_page('innovation') || is_page('innovation-resources')) ? 'active' : ''; ?>">
                            创新资源
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                           class="<?php echo (is_page('contact') || is_page('contact-us')) ? 'active' : ''; ?>">
                            联系我们
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main class="main-content">
