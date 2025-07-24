</main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>关于CMR</h3>
                    <p style="margin-bottom: 20px; line-height: 1.6;">
                        杭州斯莫尔磁性材料有限公司是智见集团旗下企业，专注于研发先进的EMC技术，为汽车、新能源等行业提供创新、可靠的电磁兼容解决方案。
                    </p>
                    <div style="display: flex; gap: 15px;">
                        <a href="#" style="color: var(--primary-400); font-size: 20px; transition: color 0.3s ease;">
                            <i class="fab fa-weixin"></i>
                        </a>
                        <a href="#" style="color: var(--primary-400); font-size: 20px; transition: color 0.3s ease;">
                            <i class="fab fa-weibo"></i>
                        </a>
                        <a href="#" style="color: var(--primary-400); font-size: 20px; transition: color 0.3s ease;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>快速链接</h3>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">关于CMR</a></li>
                        <li><a href="<?php echo esc_url(home_url('/industry')); ?>">行业领域</a></li>
                        <li><a href="<?php echo esc_url(home_url('/technology')); ?>">技术能力</a></li>
                        <li><a href="<?php echo esc_url(home_url('/innovation')); ?>">创新资源</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">联系我们</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>产品服务</h3>
                    <ul>
                        <li><a href="#">纳米晶材料</a></li>
                        <li><a href="#">磁打印技术</a></li>
                        <li><a href="#">EMC解决方案</a></li>
                        <li><a href="#">车规级产品</a></li>
                        <li><a href="#">定制化服务</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>联系信息</h3>
                    <div style="margin-bottom: 15px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <i class="fas fa-map-marker-alt" style="color: var(--accent-600);"></i>
                            <span>中国浙江，杭州市桐庐县下城路1号</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <i class="fas fa-phone" style="color: var(--accent-600);"></i>
                            <span>0571-64266030</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-envelope" style="color: var(--accent-600);"></i>
                            <span>info@cmr.xyz</span>
                        </div>
                    </div>
                    
                    <!-- 微信二维码 -->
                    <div style="margin-top: 20px;">
                        <p style="font-size: 14px; margin-bottom: 10px; color: var(--primary-300);">关注我们的微信公众号</p>
                        <div style="width: 80px; height: 80px; background: white; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-qrcode" style="font-size: 40px; color: var(--primary-600);"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                    <p>&copy; <?php echo date('Y'); ?> 杭州斯莫尔磁性材料有限公司. 保留所有权利.</p>
                    <div style="display: flex; gap: 20px;">
                        <a href="#" style="color: var(--primary-500); text-decoration: none; font-size: 14px;">隐私政策</a>
                        <a href="#" style="color: var(--primary-500); text-decoration: none; font-size: 14px;">使用条款</a>
                        <a href="#" style="color: var(--primary-500); text-decoration: none; font-size: 14px;">网站地图</a>
                    </div>
                </div>
                
                <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--primary-700);">
                    <p style="font-size: 14px; color: var(--primary-500);">
                        <span style="color: var(--accent-600); font-weight: 600;">Conducting Excellence</span> - 纳米晶磁芯垂直整合创新者
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button class="back-to-top" id="back-to-top" title="返回顶部">
        <i class="fas fa-arrow-up"></i>
    </button>

    <?php wp_footer(); ?>
</body>
</html>
