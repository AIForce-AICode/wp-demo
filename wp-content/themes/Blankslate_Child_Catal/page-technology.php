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
        <h1 class="page-title tech-text">技术能力</h1>
        <p class="page-subtitle">纳米晶磁芯垂直整合创新者，全链能力赋能客户突破性能极限</p>
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
                    <button class="tech-tab-btn active" data-tab="capabilities" style="padding: 15px 30px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; cursor: pointer; display: flex; align-items: center; gap: 10px; background: var(--accent-600); color: white;">
                        <i class="fas fa-cogs"></i>
                        <span>能力陈列</span>
                    </button>
                    <button class="tech-tab-btn" data-tab="products" style="padding: 15px 30px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; cursor: pointer; display: flex; align-items: center; gap: 10px; background: transparent; color: var(--primary-700);">
                        <i class="fas fa-cube"></i>
                        <span>产品介绍</span>
                    </button>
                    <button class="tech-tab-btn" data-tab="design" style="padding: 15px 30px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; cursor: pointer; display: flex; align-items: center; gap: 10px; background: transparent; color: var(--primary-700);">
                        <i class="fas fa-drafting-compass"></i>
                        <span>设计与工程</span>
                    </button>
                    <button class="tech-tab-btn" data-tab="solutions" style="padding: 15px 30px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; cursor: pointer; display: flex; align-items: center; gap: 10px; background: transparent; color: var(--primary-700);">
                        <i class="fas fa-lightbulb"></i>
                        <span>解决方案</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tab内容 -->
        <div class="tech-tab-content">
            <!-- 能力陈列内容 -->
            <div id="capabilities" class="tech-tab-pane active">
                <div style="text-align: center; margin-bottom: 50px;">
                    <h2 style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 20px;">核心技术能力</h2>
                    <p style="font-size: 18px; color: var(--primary-600); max-width: 800px; margin: 0 auto;">
                        材料基因库-仿真设计-智能制造-车规质控全链能力，选中查看详细方法
                    </p>
                </div>

                <!-- 能力选择器 -->
                <div class="card-grid" style="margin-bottom: 50px;">
                    <div class="card tech-card tech-hover tech-scan capability-card active interactive-element" data-capability="0" style="text-align: center; cursor: pointer; border: 2px solid var(--accent-600); background: var(--accent-50);">
                        <div style="width: 64px; height: 64px; background: #3b82f6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; transform: scale(1.1);">
                            <i class="fas fa-dna" style="font-size: 24px; color: white;"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 12px; color: var(--accent-600);">材料基因库</h3>
                        <p style="color: var(--primary-600); font-size: 14px;">10+材料配方，纳米晶材料技术突破</p>
                    </div>
                    <div class="card tech-card tech-hover tech-scan capability-card interactive-element" data-capability="1" style="text-align: center; cursor: pointer;">
                        <div style="width: 64px; height: 64px; background: #10b981; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fas fa-brain" style="font-size: 24px; color: white;"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 12px; color: var(--primary-800);">仿真设计</h3>
                        <p style="color: var(--primary-600); font-size: 14px;">多物理场联合仿真，精确预测产品性能</p>
                    </div>
                    <div class="card tech-card tech-hover tech-scan capability-card interactive-element" data-capability="2" style="text-align: center; cursor: pointer;">
                        <div style="width: 64px; height: 64px; background: #8b5cf6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fas fa-industry" style="font-size: 24px; color: white;"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 12px; color: var(--primary-800);">智能制造</h3>
                        <p style="color: var(--primary-600); font-size: 14px;">垂直整合制造，从材料到成品全链条</p>
                    </div>
                    <div class="card tech-card tech-hover tech-scan capability-card interactive-element" data-capability="3" style="text-align: center; cursor: pointer;">
                        <div style="width: 64px; height: 64px; background: #ef4444; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fas fa-certificate" style="font-size: 24px; color: white;"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 12px; color: var(--primary-800);">车规质控</h3>
                        <p style="color: var(--primary-600); font-size: 14px;">IATF 16949认证，AEC-Q200标准</p>
                    </div>
                </div>

                <!-- 选中能力的详细信息 -->
                <div class="card tech-card tech-border" style="padding: 40px; background: var(--primary-50);">
                    <div id="capability-details">
                        <div style="display: flex; align-items: center; margin-bottom: 30px;">
                            <div style="width: 80px; height: 80px; background: #3b82f6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 25px;">
                                <i class="fas fa-dna" style="font-size: 32px; color: white;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 28px; font-weight: bold; color: var(--primary-800); margin-bottom: 8px;">材料基因库</h3>
                                <p style="font-size: 18px; color: var(--primary-600);">10+材料配方，纳米晶材料技术突破</p>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" id="capability-features">
                            <div style="display: flex; align-items: center; gap: 12px; background: white; border-radius: 10px; padding: 20px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                <span style="color: var(--primary-700);">超薄带材工艺（12-10μm）</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; background: white; border-radius: 10px; padding: 20px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                <span style="color: var(--primary-700);">高饱和磁感特性</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; background: white; border-radius: 10px; padding: 20px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                <span style="color: var(--primary-700);">超高磁导率>8×10⁴</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; background: white; border-radius: 10px; padding: 20px;">
                                <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                <span style="color: var(--primary-700);">优异的温度稳定性</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 产品介绍内容 -->
            <div id="products" class="tech-tab-pane" style="display: none;">
                <div style="text-align: center; margin-bottom: 50px;">
                    <h2 style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 20px;">核心产品</h2>
                    <p style="font-size: 18px; color: var(--primary-600); max-width: 800px; margin: 0 auto;">
                        以图片展示为主的产品介绍，展现我们在磁性材料领域的技术实力
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="overflow: hidden;">
                        <div style="position: relative;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/产品介绍/带材/1.png" 
                                 alt="磁带" 
                                 style="width: 100%; height: 250px; object-fit: cover;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);"></div>
                            <div style="position: absolute; bottom: 20px; left: 20px; color: white;">
                                <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 8px;">磁带</h3>
                            </div>
                        </div>
                        
                        <div style="padding: 25px;">
                            <p style="color: var(--primary-600); margin-bottom: 25px; line-height: 1.6;">高性能纳米晶磁带，厚度可达12-10μm，具有优异的磁性能和温度稳定性</p>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">超薄带材</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">高磁导率</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">低损耗</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">温度稳定</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card tech-card tech-hover tech-scan interactive-element" style="overflow: hidden;">
                        <div style="position: relative;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/行业领域/优势产品/2.磁打印技术介绍.png" 
                                 alt="磁打印技术" 
                                 style="width: 100%; height: 250px; object-fit: cover;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);"></div>
                            <div style="position: absolute; bottom: 20px; left: 20px; color: white;">
                                <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 8px;">磁打印技术</h3>
                            </div>
                        </div>
                        
                        <div style="padding: 25px;">
                            <p style="color: var(--primary-600); margin-bottom: 25px; line-height: 1.6;">创新的磁化器技术，能够对磁体极性进行精确编程，实现复杂磁性矩阵</p>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">可编程充磁</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">磁干扰小</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">吸力更强</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">功能丰富</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card tech-card tech-hover tech-scan interactive-element" style="overflow: hidden;">
                        <div style="position: relative;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/产品介绍/带材/2.png" 
                                 alt="带材" 
                                 style="width: 100%; height: 250px; object-fit: cover;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);"></div>
                            <div style="position: absolute; bottom: 20px; left: 20px; color: white;">
                                <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 8px;">带材</h3>
                            </div>
                        </div>
                        
                        <div style="padding: 25px;">
                            <p style="color: var(--primary-600); margin-bottom: 25px; line-height: 1.6;">16-18μm高质量纳米晶带材，通过先进工艺显著提高生产力和效率</p>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">高初始磁导率</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">低矫顽力</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">优异频率特性</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">宽温度范围</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card tech-card tech-hover tech-scan interactive-element" style="overflow: hidden;">
                        <div style="position: relative;" class="image-hover-effect">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/产品介绍/磁环/图片 1.png" 
                                 alt="器件" 
                                 style="width: 100%; height: 250px; object-fit: cover;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);"></div>
                            <div style="position: absolute; bottom: 20px; left: 20px; color: white;">
                                <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 8px;">器件</h3>
                            </div>
                        </div>
                        
                        <div style="padding: 25px;">
                            <p style="color: var(--primary-600); margin-bottom: 25px; line-height: 1.6;">完整的磁性器件解决方案，从磁芯到成品的全链条产品</p>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">定制化设计</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">车规级品质</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">高可靠性</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                                    <span style="color: var(--primary-700); font-size: 14px;">快速交付</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 设计与工程内容 -->
            <div id="design" class="tech-tab-pane" style="display: none;">
                <div style="text-align: center; margin-bottom: 50px;">
                    <h2 style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 20px;">设计与工程</h2>
                    <p style="font-size: 18px; color: var(--primary-600); max-width: 800px; margin: 0 auto;">
                        专业的工程设计能力，从概念到产品的全流程支持
                    </p>
                </div>

                <!-- 自滑动展示 -->
                <div style="overflow: hidden; margin-bottom: 30px;">
                    <div style="display: flex; gap: 30px; animation: autoSlide 30s linear infinite;">
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 320px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/能力和解决方案/一体化产业链/纳米晶带材/5.png" 
                                     alt="电磁仿真设计" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">电磁仿真设计</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">先进的电磁场仿真技术，精确预测产品性能</p>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">Maxwell仿真</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">Ansys分析</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">性能优化</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">参数调试</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 320px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/能力和解决方案/一体化产业链/模具设计制造/1.png" 
                                     alt="结构工程设计" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">结构工程设计</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">专业的机械结构设计，确保产品可靠性</p>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">3D建模</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">应力分析</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">热设计</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">可靠性验证</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 320px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/能力和解决方案/一体化产业链/注塑/图片 1.jpg" 
                                     alt="工艺流程设计" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">工艺流程设计</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">优化的生产工艺流程，提升制造效率</p>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">工艺优化</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">流程标准化</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">质量控制</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">效率提升</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 320px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/技术能力/能力和解决方案/实验室/质量管理.png" 
                                     alt="测试验证设计" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">测试验证设计</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">完善的测试验证体系，确保产品质量</p>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">性能测试</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">环境试验</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">可靠性验证</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">标准认证</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 重复项目以实现无缝循环 -->
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 320px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                     alt="电磁仿真设计" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">电磁仿真设计</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">先进的电磁场仿真技术，精确预测产品性能</p>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">Maxwell仿真</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">Ansys分析</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">性能优化</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <i class="fas fa-check" style="color: var(--accent-600); font-size: 12px;"></i>
                                        <span style="color: var(--primary-700); font-size: 12px;">参数调试</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 解决方案内容 -->
            <div id="solutions" class="tech-tab-pane" style="display: none;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <h2 style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 25px;">解决方案</h2>
                    <div style="max-width: 1200px; margin: 0 auto;">
                        <p style="font-size: 18px; color: var(--primary-600); line-height: 1.8; margin-bottom: 30px;">
                            在新能源汽车、新能源储能与高端电力电子领域，效率瓶颈、成本压力、超高频技术壁垒与可靠性风险正成为行业发展的核心挑战。斯莫尔作为纳米晶磁芯垂直整合创新者，依托 
                            <span style="font-weight: 600; color: var(--accent-600);">材料基因库-仿真设计-智能制造-车规质控</span>
                            全链能力，打造覆盖原材料至成品的In-house解决方案，助力客户突破性能极限、降本增效，并实现零风险合规。
                        </p>
                    </div>
                </div>

                <!-- 自滑动展示解决方案 -->
                <div style="overflow: hidden; margin-bottom: 60px;">
                    <div style="display: flex; gap: 30px; animation: autoSlide 35s linear infinite;">
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 380px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                     alt="新能源汽车解决方案" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">新能源汽车解决方案</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">为电动汽车提供高效、可靠的磁性元件解决方案</p>
                                <div style="margin-bottom: 15px;">
                                    <h4 style="font-weight: 600; color: var(--primary-800); font-size: 14px; margin-bottom: 8px;">应用领域：</h4>
                                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">车载充电机</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">DC-DC转换器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">电机驱动器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">电池管理系统</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 380px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                     alt="电力电子解决方案" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">电力电子解决方案</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">高频开关电源和电力电子设备的专业解决方案</p>
                                <div style="margin-bottom: 15px;">
                                    <h4 style="font-weight: 600; color: var(--primary-800); font-size: 14px; margin-bottom: 8px;">应用领域：</h4>
                                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">开关电源</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">UPS系统</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">逆变器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">变频器</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 380px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                     alt="消费电子解决方案" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">消费电子解决方案</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">为消费电子产品提供小型化、高性能的磁性组件</p>
                                <div style="margin-bottom: 15px;">
                                    <h4 style="font-weight: 600; color: var(--primary-800); font-size: 14px; margin-bottom: 8px;">应用领域：</h4>
                                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">无线充电</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">快充适配器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">音响设备</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">智能设备</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 380px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="https://images.unsplash.com/photo-1565514020179-026b92b84bb6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                     alt="工业自动化解决方案" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">工业自动化解决方案</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">为工业自动化设备提供稳定可靠的磁性解决方案</p>
                                <div style="margin-bottom: 15px;">
                                    <h4 style="font-weight: 600; color: var(--primary-800); font-size: 14px; margin-bottom: 8px;">应用领域：</h4>
                                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">伺服驱动</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">变频器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">传感器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">执行器</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 重复项目以实现无缝循环 -->
                        <div class="card tech-card tech-hover tech-scan interactive-element" style="flex-shrink: 0; width: 380px; overflow: hidden;">
                            <div class="image-hover-effect">
                                <img src="https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                     alt="新能源汽车解决方案" 
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800); margin-bottom: 12px;">新能源汽车解决方案</h3>
                                <p style="color: var(--primary-600); margin-bottom: 20px;">为电动汽车提供高效、可靠的磁性元件解决方案</p>
                                <div style="margin-bottom: 15px;">
                                    <h4 style="font-weight: 600; color: var(--primary-800); font-size: 14px; margin-bottom: 8px;">应用领域：</h4>
                                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">车载充电机</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">DC-DC转换器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">电机驱动器</span>
                                        <span style="background: var(--primary-100); color: var(--primary-600); padding: 4px 8px; border-radius: 4px; font-size: 12px;">电池管理系统</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 行业痛点解决方案 -->
                <div style="display: flex; flex-direction: column; gap: 50px; margin-bottom: 60px;">
                    <!-- 痛点1 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 40px;">
                        <div style="display: flex; align-items: center; margin-bottom: 25px;">
                            <div style="width: 64px; height: 64px; background: #3b82f6; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-clock" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800);">行业痛点1</h3>
                                <p style="color: var(--primary-600);">效率瓶颈：产业链割裂导致响应迟滞</p>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 25px;">
                            <div style="background: #dbeafe; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #2563eb; margin-right: 8px;">►</span>
                                    核心能力
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">全流程垂直整合（材料-设计-制造-检测）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">敏捷研发体系（仿真驱动快速迭代）</li>
                                </ul>
                            </div>

                            <div style="background: #dcfce7; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #16a34a; margin-right: 8px;">»</span>
                                    解决方案
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">材料与器件协同开发平台</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">柔性化制造单元（72小时急单响应）</li>
                                </ul>
                            </div>

                            <div style="background: #f3e8ff; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #9333ea; margin-right: 8px;">◆</span>
                                    质控支撑
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">数字化订单追踪系统（交付准时率＞98%）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">并行工程管理（设计→试产周期缩短50%）</li>
                                </ul>
                            </div>

                            <div style="background: #fef2f2; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #dc2626; margin-right: 8px;">✓</span>
                                    价值闭环
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">客户新品开发周期压缩40%</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">紧急订单交付速度领先同业2倍</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 痛点2 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 40px;">
                        <div style="display: flex; align-items: center; margin-bottom: 25px;">
                            <div style="width: 64px; height: 64px; background: #10b981; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-dollar-sign" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800);">行业痛点2</h3>
                                <p style="color: var(--primary-600);">成本压力：供应链多层加价与良率损失</p>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 25px;">
                            <div style="background: #dbeafe; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #2563eb; margin-right: 8px;">►</span>
                                    核心能力
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">100% In-house制造（带材冶炼→成品组装）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">规模化自动生产（人均效能提升300%）</li>
                                </ul>
                            </div>

                            <div style="background: #dcfce7; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #16a34a; margin-right: 8px;">»</span>
                                    解决方案
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">薄带工艺突破（12~10μm带材原料成本↓30%）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">成熟的精益经营管理体系</li>
                                </ul>
                            </div>

                            <div style="background: #f3e8ff; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #9333ea; margin-right: 8px;">◆</span>
                                    质控支撑
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">全流程成本精细管控（MES实时监测成本）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">零缺陷运动（直通率＞99.5%）</li>
                                </ul>
                            </div>

                            <div style="background: #fef2f2; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #dc2626; margin-right: 8px;">✓</span>
                                    价值闭环
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">磁芯综合成本降低25%</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">质量目标PPM≤100</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 痛点3 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 40px;">
                        <div style="display: flex; align-items: center; margin-bottom: 25px;">
                            <div style="width: 64px; height: 64px; background: #8b5cf6; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-microchip" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800);">行业痛点3</h3>
                                <p style="color: var(--primary-600);">技术壁垒：高频场景性能不足</p>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 25px;">
                            <div style="background: #dbeafe; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #2563eb; margin-right: 8px;">►</span>
                                    核心能力
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">纳米晶材料基因库（10+材料配方）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">多物理场联合仿真</li>
                                </ul>
                            </div>

                            <div style="background: #dcfce7; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #16a34a; margin-right: 8px;">»</span>
                                    解决方案
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">薄带工艺突破（12~10μm带材原料成本↓30%）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">定制化带材，匹配使用场景需求</li>
                                </ul>
                            </div>

                            <div style="background: #f3e8ff; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #9333ea; margin-right: 8px;">◆</span>
                                    质控支撑
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">磁性能全温域测试</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">带厚在线监测</li>
                                </ul>
                            </div>

                            <div style="background: #fef2f2; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #dc2626; margin-right: 8px;">✓</span>
                                    价值闭环
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">客户电源效率突破</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">EMC整改成本减少</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 痛点4 -->
                    <div class="card tech-card tech-hover tech-scan interactive-element" style="padding: 40px;">
                        <div style="display: flex; align-items: center; margin-bottom: 25px;">
                            <div style="width: 64px; height: 64px; background: #ef4444; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-shield-alt" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 20px; font-weight: bold; color: var(--primary-800);">行业痛点4</h3>
                                <p style="color: var(--primary-600);">可靠性风险：车规场景失效</p>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 25px;">
                            <div style="background: #dbeafe; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #2563eb; margin-right: 8px;">►</span>
                                    核心能力
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">车规级制造体系（IATF 16949认证）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">失效分析实验室</li>
                                </ul>
                            </div>

                            <div style="background: #dcfce7; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #16a34a; margin-right: 8px;">»</span>
                                    解决方案
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">AEC-Q200 磁芯（丰富的材料试验储备&产品国际标准认证）</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">抗振设计 DU&PV设计高要求&高标准标准</li>
                                </ul>
                            </div>

                            <div style="background: #f3e8ff; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #9333ea; margin-right: 8px;">◆</span>
                                    质控支撑
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">零容忍清洁标准</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">加速老化模型</li>
                                </ul>
                            </div>

                            <div style="background: #fef2f2; border-radius: 10px; padding: 25px;">
                                <h4 style="font-weight: bold; color: var(--primary-800); margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="color: #dc2626; margin-right: 8px;">✓</span>
                                    价值闭环
                                </h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">客户产品十年0召回</li>
                                    <li style="color: var(--primary-700); font-size: 14px; line-height: 1.5;">车厂准入认证通过率100%</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 四大核心能力 -->
                <div class="card tech-card tech-border" style="background: var(--primary-50); border-radius: 20px; padding: 40px; margin-bottom: 60px;">
                    <h3 style="font-size: 28px; font-weight: bold; color: var(--primary-800); text-align: center; margin-bottom: 30px;">四大核心能力重构产业标准</h3>
                    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 25px; margin-bottom: 30px;">
                        <div style="text-align: center;">
                            <div style="width: 80px; height: 80px; background: #3b82f6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fas fa-layer-group" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 8px;">"材"</div>
                            <div style="font-weight: 600; color: var(--primary-700); margin-bottom: 8px;">12~10μm超薄带材</div>
                            <p style="color: var(--primary-600); font-size: 14px;">突破性薄带工艺，实现超薄带材制造</p>
                        </div>
                        <div style="text-align: center;">
                            <div style="width: 80px; height: 80px; background: #10b981; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fas fa-brain" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 8px;">"智"</div>
                            <div style="font-weight: 600; color: var(--primary-700); margin-bottom: 8px;">多物理场仿真</div>
                            <p style="color: var(--primary-600); font-size: 14px;">先进仿真技术，精确预测产品性能</p>
                        </div>
                        <div style="text-align: center;">
                            <div style="width: 80px; height: 80px; background: #8b5cf6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fas fa-cogs" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 8px;">"精"</div>
                            <div style="font-weight: 600; color: var(--primary-700); margin-bottom: 8px;">车规级产品生产管控制程</div>
                            <p style="color: var(--primary-600); font-size: 14px;">严格的生产管控，确保产品质量</p>
                        </div>
                        <div style="text-align: center;">
                            <div style="width: 80px; height: 80px; background: #ef4444; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fas fa-certificate" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="font-size: 32px; font-weight: bold; color: var(--primary-800); margin-bottom: 8px;">"严"</div>
                            <div style="font-weight: 600; color: var(--primary-700); margin-bottom: 8px;">AEC-Q200认证</div>
                            <p style="color: var(--primary-600); font-size: 14px;">国际标准认证，保障产品可靠性</p>
                        </div>
                    </div>
                    
                    <div style="text-align: center;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 25px; color: var(--primary-700);">
                            <div>
                                <div style="font-weight: 600; margin-bottom: 8px;">为车载电源提升</div>
                                <div style="color: var(--accent-600); font-weight: bold;">转换效率</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; margin-bottom: 8px;">为系统级BOM降低</div>
                                <div style="color: var(--accent-600); font-weight: bold;">综合成本</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; margin-bottom: 8px;">为EMC设计节省</div>
                                <div style="color: var(--accent-600); font-weight: bold;">整改周期</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; margin-bottom: 8px;">为关键器件提供</div>
                                <div style="color: var(--accent-600); font-weight: bold;">超长免维护保障</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 总结 -->
                <div style="background: linear-gradient(135deg, var(--accent-600), var(--accent-700)); border-radius: 20px; padding: 40px; color: white; text-align: center;">
                    <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 25px;">选择斯莫尔，即是选择未来十年的技术领跑权</h3>
                    <p style="font-size: 18px; opacity: 0.9; max-width: 1000px; margin: 0 auto; line-height: 1.6; margin-bottom: 30px;">
                        以全链垂直整合之力，赋能客户在电磁兼容性、功率密度与可靠性的三重维度实现代际跨越——选择斯莫尔，即是选择未来十年的技术领跑权。
                    </p>
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn interactive-element" style="background: white; color: var(--accent-600); padding: 15px 30px; font-size: 18px; display: inline-flex; align-items: center; gap: 12px;">
                            <i class="fas fa-envelope"></i>
                            <span>立即联系</span>
                        </a>
                        <a href="<?php echo esc_url(home_url('/innovation')); ?>" class="btn btn-outline interactive-element" style="border: 2px solid white; color: white; padding: 15px 30px; font-size: 18px; display: inline-flex; align-items: center; gap: 12px;">
                            <span>创新资源</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function($) {
    // Tab切换功能
    $('.tech-tab-btn').on('click', function() {
        const targetTab = $(this).data('tab');
        
        // 移除所有活动状态
        $('.tech-tab-btn').removeClass('active').css({
            'background': 'transparent',
            'color': 'var(--primary-700)'
        });
        $('.tech-tab-pane').removeClass('active').hide();
        
        // 添加当前活动状态
        $(this).addClass('active').css({
            'background': 'var(--accent-600)',
            'color': 'white'
        });
        
        // 显示对应内容
        $('#' + targetTab).addClass('active').fadeIn(300);
    });

    // 能力选择器功能
    const capabilities = [
        {
            title: '材料基因库',
            description: '10+材料配方，纳米晶材料技术突破',
            icon: 'fas fa-dna',
            color: '#3b82f6',
            features: [
                '超薄带材工艺（12-10μm）',
                '高饱和磁感特性',
                '超高磁导率>8×10⁴',
                '优异的温度稳定性'
            ]
        },
        {
            title: '仿真设计',
            description: '多物理场联合仿真，精确预测产品性能',
            icon: 'fas fa-brain',
            color: '#10b981',
            features: [
                '电磁场仿真分析',
                '热场耦合计算',
                '机械应力仿真',
                '产品性能优化'
            ]
        },
        {
            title: '智能制造',
            description: '垂直整合制造，从材料到成品全链条',
            icon: 'fas fa-industry',
            color: '#8b5cf6',
            features: [
                '自动化生产线',
                '智能质量控制',
                '柔性制造系统',
                '数字化管理'
            ]
        },
        {
            title: '车规质控',
            description: 'IATF 16949认证，AEC-Q200标准',
            icon: 'fas fa-certificate',
            color: '#ef4444',
            features: [
                'IATF 16949体系',
                'AEC-Q200认证',
                '零缺陷运动',
                '全流程追溯'
            ]
        }
    ];

    $('.capability-card').on('click', function() {
        const index = parseInt($(this).data('capability'));
        const capability = capabilities[index];
        
        // 移除所有活动状态
        $('.capability-card').removeClass('active').css({
            'border': '2px solid transparent',
            'background': 'white'
        }).find('h3').css('color', 'var(--primary-800)');
        $('.capability-card div[style*="transform: scale"]').css('transform', 'scale(1)');
        
        // 添加当前活动状态
        $(this).addClass('active').css({
            'border': '2px solid var(--accent-600)',
            'background': 'var(--accent-50)'
        }).find('h3').css('color', 'var(--accent-600)');
        $(this).find('div[style*="background"]').css('transform', 'scale(1.1)');
        
        // 更新详细信息
        const detailsHtml = `
            <div style="display: flex; align-items: center; margin-bottom: 30px;">
                <div style="width: 80px; height: 80px; background: ${capability.color}; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 25px;">
                    <i class="${capability.icon}" style="font-size: 32px; color: white;"></i>
                </div>
                <div>
                    <h3 style="font-size: 28px; font-weight: bold; color: var(--primary-800); margin-bottom: 8px;">${capability.title}</h3>
                    <p style="font-size: 18px; color: var(--primary-600);">${capability.description}</p>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" id="capability-features">
                ${capability.features.map(feature => `
                    <div style="display: flex; align-items: center; gap: 12px; background: white; border-radius: 10px; padding: 20px;">
                        <i class="fas fa-check-circle" style="color: var(--accent-600);"></i>
                        <span style="color: var(--primary-700);">${feature}</span>
                    </div>
                `).join('')}
            </div>
        `;
        
        $('#capability-details').html(detailsHtml);
    });
});
</script>

<?php get_footer(); ?>
