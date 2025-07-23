<?php get_header(); ?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title">欢迎来到CMR</h1>
        <p class="page-subtitle">专业的技术服务提供商</p>
    </div>
</div>

<section class="content-section">
    <div class="container">
        <h2 class="section-title">我们的服务</h2>
        <div class="card-grid">
            <div class="card">
                <div class="card-icon">🏢</div>
                <h3 class="card-title">关于CMR</h3>
                <p class="card-description">了解我们的公司文化、价值观和发展历程</p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn">了解更多</a>
            </div>
            
            <div class="card">
                <div class="card-icon">🏭</div>
                <h3 class="card-title">行业领域</h3>
                <p class="card-description">探索我们在各个行业的产品应用和解决方案</p>
                <a href="<?php echo esc_url(home_url('/industry')); ?>" class="btn">了解更多</a>
            </div>
            
            <div class="card">
                <div class="card-icon">⚙️</div>
                <h3 class="card-title">技术能力</h3>
                <p class="card-description">展示我们的技术实力和工程设计能力</p>
                <a href="<?php echo esc_url(home_url('/technology')); ?>" class="btn">了解更多</a>
            </div>
            
            <div class="card">
                <div class="card-icon">💡</div>
                <h3 class="card-title">创新资源</h3>
                <p class="card-description">获取最新的行业资讯和技术博客</p>
                <a href="<?php echo esc_url(home_url('/innovation')); ?>" class="btn">了解更多</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
