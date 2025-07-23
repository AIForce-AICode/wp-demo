</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>关于CMR</h3>
                <p>专业的技术服务提供商，致力于为客户提供优质的解决方案和服务。</p>
                <div class="social-links">
                    <!-- 社交媒体链接 -->
                </div>
            </div>
            
            <div class="footer-section">
                <h3>快速链接</h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">关于我们</a></li>
                    <li><a href="<?php echo esc_url(home_url('/industry')); ?>">行业领域</a></li>
                    <li><a href="<?php echo esc_url(home_url('/technology')); ?>">技术能力</a></li>
                    <li><a href="<?php echo esc_url(home_url('/innovation')); ?>">创新资源</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>联系信息</h3>
                <ul>
                    <li>📍 地址：[公司地址]</li>
                    <li>📞 电话：[联系电话]</li>
                    <li>✉️ 邮箱：[联系邮箱]</li>
                    <li>🌐 网站：[公司网站]</li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>服务支持</h3>
                <ul>
                    <li><a href="#">技术支持</a></li>
                    <li><a href="#">在线咨询</a></li>
                    <li><a href="#">资料下载</a></li>
                    <li><a href="#">常见问题</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 版权所有 | 
               <a href="#">隐私政策</a> | 
               <a href="#">使用条款</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
