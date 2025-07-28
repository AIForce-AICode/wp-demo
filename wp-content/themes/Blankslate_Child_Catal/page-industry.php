<?php get_header(); ?>

<div class="page-header tech-grid">
    <!-- 科技感粒子背景 -->
    <div class="tech-particles">
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
    </div>
    
    <!-- 脉冲波效果 -->
    <div class="tech-pulse-wave"></div>
    
    
    <div class="container">
        <h1 class="page-title tech-text"><?php echo t('industry'); ?></h1>
        <p class="page-subtitle">为全球多个行业提供专业的磁性材料解决方案</p>
    </div>
</div>

<!-- Tab导航 -->
<section class="content-section tech-grid">
    <!-- 科技感粒子背景 -->
    <div class="tech-particles">
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
        <div class="hero-particle"></div>
    </div>
    
    <div class="container">
        <!-- Tab切换按钮 -->
        <div style="display: flex; justify-content: center; margin-bottom: 50px;">
            <div style="background: var(--primary-100); padding: 8px; border-radius: 15px;">
                <div style="display: flex; gap: 8px;">
                    <button class="tab-btn active" data-tab="applications" style="padding: 15px 30px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; cursor: pointer; display: flex; align-items: center; gap: 10px; background: var(--accent-600); color: white;">
                        <i class="fas fa-cogs"></i>
                        <span><?php echo t('product_applications'); ?></span>
                    </button>
                    <button class="tab-btn" data-tab="products" style="padding: 15px 30px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; cursor: pointer; display: flex; align-items: center; gap: 10px; background: transparent; color: var(--primary-700);">
                        <i class="fas fa-star"></i>
                        <span><?php echo t('advantage_products'); ?></span>
                    </button>
                    <button class="tab-btn" data-tab="others" style="padding: 15px 30px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; cursor: pointer; display: flex; align-items: center; gap: 10px; background: transparent; color: var(--primary-700);">
                        <i class="fas fa-cube"></i>
                        <span><?php echo t('other_products'); ?></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tab内容 -->
        <div class="tab-content">
            <!-- 产品应用内容 -->
            <div id="applications" class="tab-pane active">
                <!-- 概述 -->
                <div style="text-align: center; margin-bottom: 60px;">
                    <div style="max-width: 1000px; margin: 0 auto;">
                        <p style="font-size: 20px; color: var(--accent-600); line-height: 1.8; margin-bottom: 30px;">
                            斯莫尔专注于研发先进的EMC技术，为汽车、新能源、电力电子等行业提供创新、可靠的电磁兼容解决方案，助力客户应对复杂电磁环境挑战，确保产品性能与合规性：
                        </p>
                    </div>
                </div>

                <!-- 产品应用列表 -->
                <div style="display: flex; flex-direction: column; gap: 60px;">
                    <!-- 新能源汽车 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: start;">
                            <div>
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                    <div style="width: 60px; height: 60px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-car-battery" style="font-size: 24px; color: var(--accent-600);"></i>
                                    </div>
                                    <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">新能源汽车</h3>
                                </div>
                                
                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">应用点：</h4>
                                    <p style="color: var(--primary-600); line-height: 1.6;">车载充电机、DC-DC转换器、电机驱动器、电池管理系统中的变压器、电感和电流传感器。</p>
                                </div>

                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">优势：</h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">高功率密度和效率是电动汽车的核心需求</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">宽工作温度范围（-40°C至+130°C甚至更高）满足车规要求</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">优异的抗振动性能</span>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">举例：</h4>
                                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">OBC：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">主变压器、PFC电感</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">高压DC-DC：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">隔离变压器、输出滤波电感</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">电驱系统：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">电机控制器中的驱动变压器、电流传感器</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">BMS：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">电池电流传感器</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/产品应用/汽车首图.jpg" 
                                     alt="新能源汽车" 
                                     style="width: 100%; height: 320px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>
                    </div>

                    <!-- 新能源发电与储能 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: start;">
                            <div>
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                    <div style="width: 60px; height: 60px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-solar-panel" style="font-size: 24px; color: var(--accent-600);"></i>
                                    </div>
                                    <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">新能源发电与储能</h3>
                                </div>
                                
                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">应用点：</h4>
                                    <p style="color: var(--primary-600); line-height: 1.6;">光伏逆变器、风力发电变流器中的升压电感、滤波电感；储能变流器中的磁性元件。</p>
                                </div>

                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">优势：</h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">高效率（低损耗）对于提升系统整体能效至关重要</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">高功率密度允许设备小型化</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">良好的高温稳定性适应户外或密闭机柜环境</span>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">举例：</h4>
                                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">组串式光伏逆变器：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">Boost升压电感</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">储能PCS：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">DC/AC逆变电感</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/产品应用/新能源首图.jpg" 
                                     alt="新能源发电与储能" 
                                     style="width: 100%; height: 320px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>
                    </div>

                    <!-- 电力电子与开关电源 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: start;">
                            <div>
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                    <div style="width: 60px; height: 60px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-microchip" style="font-size: 24px; color: var(--accent-600);"></i>
                                    </div>
                                    <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">电力电子与开关电源</h3>
                                </div>
                                
                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">应用点：</h4>
                                    <p style="color: var(--primary-600); line-height: 1.6;">作为高频变压器、电感器（包括共模电感、差模电感、PFC电感、输出滤波电感）、电流互感器的磁芯。</p>
                                </div>

                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">优势：</h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">高饱和磁感允许在相同功率下减小磁芯体积</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">低铁损（尤其是高频损耗）显著提高电源效率</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">良好的温度稳定性保证高温下性能可靠</span>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">举例：</h4>
                                    <div style="display: grid; grid-template-columns: 1fr; gap: 15px;">
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">高频开关电源：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">服务器电源、通信电源、工业电源、PC电源、适配器中的主变压器、PFC电感和输出滤波电感</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">光伏逆变器：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">升压电感、滤波电感</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">UPS不间断电源：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">高频逆变器和充电器中的磁性元件</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">电动汽车车载充电机：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">主变压器和PFC电感</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/能力和解决方案/实验室/质量管理.png" 
                                     alt="电力电子与开关电源" 
                                     style="width: 100%; height: 320px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>
                    </div>

                    <!-- 高端消费电子与无线充电 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: start;">
                            <div>
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                    <div style="width: 60px; height: 60px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-mobile-alt" style="font-size: 24px; color: var(--accent-600);"></i>
                                    </div>
                                    <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">高端消费电子与无线充电</h3>
                                </div>
                                
                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">应用点：</h4>
                                    <p style="color: var(--primary-600); line-height: 1.6;">无线充电发射端和接收端的屏蔽片、感应线圈的磁芯；高端音响设备中的电感；手机快充适配器中的磁性元件。</p>
                                </div>

                                <div style="margin-bottom: 25px;">
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">优势：</h4>
                                    <ul style="list-style: none; padding: 0;">
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">高磁导率有效引导和集中磁场，提高充电效率和传输距离</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px; margin-bottom: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">低损耗减少发热</span>
                                        </li>
                                        <li style="display: flex; align-items: start; gap: 8px;">
                                            <i class="fas fa-check-circle" style="color: var(--accent-600); margin-top: 4px;"></i>
                                            <span style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">超薄带材（如18μm, 14μm）适合小型化、薄型化设计</span>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">举例：</h4>
                                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">智能手机：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">背部的无线充电接收线圈下方的纳米晶屏蔽片</p>
                                        </div>
                                        <div style="background: var(--primary-50); padding: 15px; border-radius: 8px;">
                                            <h5 style="font-weight: bold; color: var(--accent-600); margin-bottom: 8px;">无线充电底座：</h5>
                                            <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">支持Qi标准的无线充电底座内部的磁芯</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/产品应用/消费电子首图.jpg" 
                                     alt="高端消费电子与无线充电" 
                                     style="width: 100%; height: 320px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 纳米晶磁芯总结 -->
                <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px; background: var(--accent-50); margin-top: 60px;">
                    <h3 style="font-size: 28px; font-weight: bold; color: var(--primary-800); text-align: center; margin-bottom: 25px;">纳米晶磁芯：赋能核心领域，解决复杂EMC挑战</h3>
                    <p style="font-size: 18px; color: var(--accent-600); line-height: 1.8; text-align: center; max-width: 1200px; margin: 0 auto;">
                        斯莫尔公司凭借先进的EMC技术，专注于研发高性能纳米晶磁芯材料。该材料以其高饱和磁感、超高磁导率、极低损耗及优异的温度与频率稳定性，成为汽车、新能源、电力电子等领域应对电磁兼容性（EMC）挑战、提升系统性能与可靠性的理想选择。
                    </p>
                    <div style="text-align: center; margin-top: 30px;">
                        <p style="font-size: 20px; font-weight: bold; color: var(--primary-800);">
                            斯莫尔纳米晶解决方案：以其卓越的电磁性能，为您的产品在复杂电磁环境中提供强大的EMC保障、更高的能效与功率密度、以及无与伦比的可靠性，助力客户轻松满足全球最严苛的电磁兼容性标准与性能要求。
                        </p>
                    </div>
                </div>
            </div>

            <!-- 优势产品内容 -->
            <div id="products" class="tab-pane" style="display: none;">
                <div style="display: flex; flex-direction: column; gap: 60px;">
                    <!-- 纳米材料 -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                        <div>
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div style="width: 60px; height: 60px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-atom" style="font-size: 24px; color: var(--accent-600);"></i>
                                </div>
                                <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">纳米材料</h3>
                            </div>
                            <p style="font-size: 18px; color: var(--primary-600); line-height: 1.6; margin-bottom: 30px;">斯莫尔设计了厚度为16-18um的高质量纳米晶带材，并显著提高了我们的生产力和效率。</p>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">高初始磁导率</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">>8*10⁴，在中频和高频下提供高磁性能</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">低损耗</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">电阻率高，提升高频性能，降低涡流损耗</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">低矫顽力</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;"><1.5A/m，磁芯性能快速反应，效率快</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">温度稳定性强</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">-55℃至150℃温度范围内，磁芯性能变化小于10%</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/优势产品/1.纳米材料介绍.png" 
                                 alt="纳米材料" 
                                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px;">
                        </div>
                    </div>

                    <!-- 磁打印技术 -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                        <div style="order: 2;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div style="width: 60px; height: 60px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-print" style="font-size: 24px; color: var(--accent-600);"></i>
                                </div>
                                <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">磁打印技术</h3>
                            </div>
                            <p style="font-size: 18px; color: var(--primary-600); line-height: 1.6; margin-bottom: 30px;">斯莫尔的磁化器能够对定义的磁体的极性进行编程，并为特定的功能要求提供磁性矩阵。</p>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">可编程充磁</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">实现同一表面存在多个正负极。磁极最小可控制在2mm内</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">磁干扰小</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">复杂磁路模拟设计，将磁干扰降低几乎为零</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">吸力更强</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">有效收缩磁力线，增强吸力，可达普通磁钢的3-5倍</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">功能丰富</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">可实现定制化磁钢的充磁，实现更多的功能需求</p>
                                </div>
                            </div>
                        </div>
                        
                        <div style="order: 1;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/优势产品/2.磁打印技术介绍.png" 
                                 alt="磁打印技术" 
                                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px;">
                        </div>
                    </div>

                    <!-- 钕铁硼 -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                        <div>
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div style="width: 60px; height: 60px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-magnet" style="font-size: 24px; color: var(--accent-600);"></i>
                                </div>
                                <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">钕铁硼</h3>
                            </div>
                            <p style="font-size: 18px; color: var(--primary-600); line-height: 1.6; margin-bottom: 30px;">斯莫尔生产的烧结钕铁硼磁铁，是当时全世界磁能积最大的物质，被广泛地应用于电子产品。</p>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">磁力强</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">最强的磁性材料，具有极高的磁极能和矫顽力，同时具备高能量密度</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">机械特性好</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">可加工性能强，加工精度高，易于加工成各种形状，实现磁铁形状上的多样性</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">稳定性好</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">本身为氧化物，具有较强的稳定性</p>
                                </div>
                                <div class="card interactive-element" style="padding: 20px; background: var(--primary-50);">
                                    <h4 style="font-size: 16px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">应用广泛</h4>
                                    <p style="color: var(--primary-600); font-size: 14px; line-height: 1.6;">在汽车、风力发电、信息产业、消费电子、家用电器、核磁共振成像仪、智能制造、智能驾驶、智能服务等领域扮演重要角色</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/优势产品/3.钕铁硼.png" 
                                 alt="钕铁硼" 
                                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px;">
                        </div>
                    </div>
                </div>

                <!-- 行业应用 -->
                <div style="margin-top: 80px;">
                    <h3 style="font-size: 28px; font-weight: bold; color: var(--accent-600); text-align: center; margin-bottom: 50px;">行业应用</h3>
                    <div style="display: flex; flex-direction: column; gap: 50px;">
                        <!-- 汽车 -->
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                                <div style="width: 80px; height: 80px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-car" style="font-size: 36px; color: var(--accent-600);"></i>
                                </div>
                                <h4 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">汽车</h4>
                            </div>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 30px;">
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">智能驾驶</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">斯莫尔通过创新设计，为客户提供更安全、更高效、更节能的纳米品元器件设计和制造解决方案。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">滤波器</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">电动汽车的技术和创新能力日新月异，CMR不断开发和迭代更高性能的纳米品产品，以支持我们全球的电动汽车合作伙伴。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">传感器</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">驾驶设备使用传感器测量数据，包括速度，距离，温度和力度。CMR 设计了多种用于汽车驱动系统的传感器磁体。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">动力转向系统</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">斯莫尔提供磁性元件和组件、联轴器、扭矩和转向电机、发电机等产品以满足汽车制造商各个方面的要求。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">激光雷达系统</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">自动驾驶汽车(AV)在交通运输行业中的作用越来越突出。CMR 与该行业的合作包括工程和设计优化、生产。</p>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/产品应用/汽车首图.jpg" 
                                     alt="汽车" 
                                     style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>

                        <!-- 新能源 -->
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                                <div style="width: 80px; height: 80px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-leaf" style="font-size: 36px; color: var(--accent-600);"></i>
                                </div>
                                <h4 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">新能源</h4>
                            </div>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 30px;">
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">新能源概述</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">随着社会的进步和生产的发展，非晶态金属以及纳米晶涉及的领域将越来越广。我们的纳米晶产品已经成为新能源行业如风电和光伏应用中不可缺少的组成器件。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">风能</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">风力发电是低碳新能源中最具开发条件，商业化发展前景和潜力最大的的发电方式之一。随着风力发电技术的发展和应用推广，对风力发电的效率和电能质量的要求越来越高。</p>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/产品应用/新能源首图.jpg" 
                                     alt="新能源" 
                                     style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>

                        <!-- 消费电子 -->
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                                <div style="width: 80px; height: 80px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-mobile-alt" style="font-size: 36px; color: var(--accent-600);"></i>
                                </div>
                                <h4 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">消费电子</h4>
                            </div>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 30px;">
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">消费电子概述</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">斯莫尔为各种消费电子设备提供磁性组件，通过改善产品的磁性功能来增强消费者的体验。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">配件</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">我们的磁铁在许多电子设备配件中起着对位和传感触发器的作用，如键盘、手机支架，平板电脑保护套等。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">无线充电</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">无线充电已经成为当前消费电子产品的标准配置。我们的纳米晶或非晶态材料作为传输元件支持高频非接触充电。</p>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/产品应用/消费电子首图.jpg" 
                                     alt="消费电子" 
                                     style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>

                        <!-- 家用电器和其他应用工具 -->
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px;">
                            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                                <div style="width: 80px; height: 80px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-home" style="font-size: 36px; color: var(--accent-600);"></i>
                                </div>
                                <h4 style="font-size: 28px; font-weight: bold; color: var(--accent-600);">家用电器和其他应用工具</h4>
                            </div>
                            
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 30px;">
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">应用概述</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">我们的工程师已将强大的创新精神和创造力融入了他们的磁性设计和开发。我们的磁性解决方案可应用于各种组件和产品中来改善我们的日常生活。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">家用电器</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">我们的产品应用于许多家用电器，如空调、吸尘器、厨房电器、智能家居设备和安防系统等。我们竭力运用创新的技术和制造工艺支持行业领先的OEM厂商。</p>
                                </div>
                                <div style="background: var(--accent-50); padding: 20px; border-radius: 10px;">
                                    <h5 style="font-size: 18px; font-weight: bold; color: var(--primary-800); margin-bottom: 10px;">其他应用工具</h5>
                                    <p style="color: var(--primary-600); line-height: 1.6; font-size: 14px;">我们为物料搬运设备、电动工具、磁选机、泵、电梯马达和许多不同的组件提供解决方案。我们旨在设计和改造产品以提高其工作效率和耐用性。</p>
                                </div>
                            </div>
                            
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/产品应用/家用电器和其他应用工具首图.jpg" 
                                     alt="家用电器和其他应用工具" 
                                     style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 其他产品内容 -->
            <div id="others" class="tab-pane" style="display: none;">
                <div class="card-grid">
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px; text-align: center;">
                        <div style="width: 80px; height: 80px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <i class="fas fa-magnet" style="font-size: 36px; color: var(--accent-600);"></i>
                        </div>
                        <h3 style="font-size: 24px; font-weight: bold; color: var(--accent-600); margin-bottom: 15px;">软磁材料</h3>
                        <p style="color: var(--primary-600); margin-bottom: 25px; line-height: 1.6;">高性能软磁材料，适用于各种电磁应用</p>
                        
                        <div style="margin-bottom: 25px;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/产品介绍/带材/1.png" 
                                 alt="软磁材料" 
                                 style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                        </div>
                        
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">高磁导率</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">低矫顽力</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">低损耗</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">温度稳定</span>
                            </div>
                        </div>
                    </div>

                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px; text-align: center;">
                        <div style="width: 80px; height: 80px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <i class="fas fa-cogs" style="font-size: 36px; color: var(--accent-600);"></i>
                        </div>
                        <h3 style="font-size: 24px; font-weight: bold; color: var(--accent-600); margin-bottom: 15px;">磁性组件</h3>
                        <p style="color: var(--primary-600); margin-bottom: 25px; line-height: 1.6;">定制化磁性组件解决方案</p>
                        
                        <div style="margin-bottom: 25px;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/产品介绍/磁环/图片 1.png" 
                                 alt="磁性组件" 
                                 style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                        </div>
                        
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">定制设计</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">精密加工</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">质量保证</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">快速交付</span>
                            </div>
                        </div>
                    </div>

                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 30px; text-align: center;">
                        <div style="width: 80px; height: 80px; background: var(--primary-100); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <i class="fas fa-microscope" style="font-size: 36px; color: var(--accent-600);"></i>
                        </div>
                        <h3 style="font-size: 24px; font-weight: bold; color: var(--accent-600); margin-bottom: 15px;">测试设备</h3>
                        <p style="color: var(--primary-600); margin-bottom: 25px; line-height: 1.6;">专业的磁性材料测试设备</p>
                        
                        <div style="margin-bottom: 25px;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/产品介绍/磁环/图片 5.png" 
                                 alt="测试设备" 
                                 style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                        </div>
                        
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">高精度测量</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">自动化操作</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">数据分析</span>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600); font-size: 14px;"></i>
                                <span style="color: var(--primary-600); font-size: 14px;">标准认证</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function($) {
    // Tab切换功能
    $('.tab-btn').on('click', function() {
        const targetTab = $(this).data('tab');
        
        // 移除所有活动状态
        $('.tab-btn').removeClass('active').css({
            'background': 'transparent',
            'color': 'var(--primary-700)'
        });
        $('.tab-pane').removeClass('active').hide();
        
        // 添加当前活动状态
        $(this).addClass('active').css({
            'background': 'var(--accent-600)',
            'color': 'white'
        });
        
        // 显示对应内容
        $('#' + targetTab).addClass('active').fadeIn(300);
    });
});
</script>

<?php get_footer(); ?>
