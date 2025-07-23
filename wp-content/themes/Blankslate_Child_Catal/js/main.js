// WordPress主题JavaScript文件 - 修复版

jQuery(document).ready(function($) {
    'use strict';
    
    // 全局变量
    let isScrolling = false;
    let currentSlide = 0;
    let animationFrameId = null;
    
    // 初始化函数
    function init() {
        initSmoothScrolling();
        initHeaderEffects();
        initCultureSlideshow();
        initNumberAnimations();
        initFormHandlers();
        initInteractiveElements();
        initLanguageSwitcher();
        initBackToTop();
        initNotifications();
        initTabSwitching();
        initImageEffects();
        initProgressBars();
        initTooltips();
        initModalSystem();
        initLoadingEffects();
        initMobileOptimizations();
    }
    
    // 平滑滚动 - 修复定位问题
    function initSmoothScrolling() {
        $('a[href^="#"]').on('click', function(event) {
            const target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                
                // 动态计算header高度
                const headerHeight = $('.site-header').outerHeight() || 90;
                const offset = headerHeight + 20; // 添加20px缓冲区
                
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - offset
                }, 1000, 'easeInOutCubic');
            }
        });
    }
    
    // 导航栏效果 - 优化版
    function initHeaderEffects() {
        let lastScrollTop = 0;
        const header = $('.site-header');
        
        $(window).on('scroll', throttle(function() {
            const scrollTop = $(this).scrollTop();
            
            // 滚动状态切换
            if (scrollTop > 50) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }
            
            lastScrollTop = scrollTop;
        }, 16));
    }
    
    // 文化照片轮播
    function initCultureSlideshow() {
        const cultureImages = [
            {
                src: 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                title: '现代化办公环境',
                description: '打造开放多元的成长平台，营造专业而温馨的工作氛围'
            },
            {
                src: 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                title: '跨文化团队协作',
                description: '通过跨文化团队协作机制，让每位员工都能在专业领域实现突破性成长'
            },
            {
                src: 'https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                title: '专业技术团队',
                description: '终身学习计划助力员工持续成长，构建有温度的组织文化'
            },
            {
                src: 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                title: '公益实践平台',
                description: '通过公益实践平台，将个人价值与组织使命深度融合'
            }
        ];
        
        function updateCultureSlide() {
            const slideshow = $('#culture-slideshow');
            if (slideshow.length && cultureImages.length > 0) {
                const slide = cultureImages[currentSlide];
                const img = slideshow.find('img');
                const overlay = slideshow.find('[style*="position: absolute"][style*="bottom"]');
                
                // 淡出效果
                img.fadeOut(500, function() {
                    $(this).attr('src', slide.src).attr('alt', slide.title);
                    if (overlay.length) {
                        overlay.find('h3').text(slide.title);
                        overlay.find('p').text(slide.description);
                    }
                    $(this).fadeIn(500);
                });
            }
        }
        
        // 自动轮播
        setInterval(function() {
            if (cultureImages.length > 0) {
                currentSlide = (currentSlide + 1) % cultureImages.length;
                updateCultureSlide();
            }
        }, 4000);
    }
    
    // 数字动画
    function initNumberAnimations() {
        function animateNumbers() {
            $('.stat-number').each(function() {
                const $this = $(this);
                if ($this.hasClass('animated')) return;
                
                const text = $this.text();
                const number = parseInt(text.replace(/[^\d]/g, ''));
                
                if (number > 0) {
                    $this.addClass('animated');
                    $this.prop('Counter', 0).animate({
                        Counter: number
                    }, {
                        duration: 2000,
                        easing: 'easeOutCubic',
                        step: function(now) {
                            let formatted = Math.ceil(now);
                            
                            // 保持原有格式
                            if (text.includes('+')) formatted += '+';
                            if (text.includes('万')) formatted += '万';
                            if (text.includes('m²')) formatted += 'm²';
                            if (text.includes('年')) formatted += '年';
                            if (text.includes('项')) formatted += '项';
                            if (text.includes('家')) formatted += '家';
                            if (text.includes('美元')) {
                                formatted = (formatted / 10).toFixed(1) + '亿美元';
                            }
                            
                            $this.text(formatted);
                        }
                    });
                }
            });
        }
        
        // 滚动触发
        $(window).on('scroll', throttle(function() {
            $('.stat-number').each(function() {
                if (isElementInViewport($(this)) && !$(this).hasClass('animated')) {
                    animateNumbers();
                }
            });
        }, 100));
    }
    
    // 表单处理
    function initFormHandlers() {
        // 联系表单
        $('.contact-form').on('submit', function(e) {
            e.preventDefault();
            
            const form = $(this);
            const formData = {
                name: form.find('input[name="name"]').val(),
                email: form.find('input[name="email"]').val(),
                company: form.find('input[name="company"]').val(),
                phone: form.find('input[name="phone"]').val(),
                subject: form.find('select[name="subject"]').val(),
                message: form.find('textarea[name="message"]').val()
            };
            
            // 验证
            if (!formData.name || !formData.email || !formData.message) {
                showNotification('请填写必填字段', 'error');
                return;
            }
            
            if (!isValidEmail(formData.email)) {
                showNotification('请输入有效的邮箱地址', 'error');
                return;
            }
            
            // 显示加载状态
            const submitBtn = form.find('button[type="submit"]');
            const originalText = submitBtn.text();
            submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin" style="margin-right: 8px;"></i>发送中...');
            
            // 模拟AJAX提交
            setTimeout(function() {
                showNotification('感谢您的咨询，我们会尽快与您联系！', 'success');
                form[0].reset();
                submitBtn.prop('disabled', false).text(originalText);
            }, 2000);
        });
        
        // 简历投递
        $(document).on('click', 'button:contains("一键投递简历")', function() {
            const fileInput = $('<input type="file" accept=".pdf,.doc,.docx" style="display: none;">');
            $('body').append(fileInput);
            
            fileInput.on('change', function() {
                const file = this.files[0];
                if (file) {
                    if (file.size > 10 * 1024 * 1024) { // 10MB限制
                        showNotification('文件大小不能超过10MB', 'error');
                        return;
                    }
                    
                    showNotification('简历上传成功！我们会尽快与您联系。', 'success');
                }
                $(this).remove();
            });
            
            fileInput.click();
        });
    }
    
    // 交互元素增强
    function initInteractiveElements() {
        // 卡片悬停效果
        $('.card, .interactive-element').hover(
            function() {
                $(this).addClass('hover-active');
                $(this).find('i').addClass('icon-hover');
            },
            function() {
                $(this).removeClass('hover-active');
                $(this).find('i').removeClass('icon-hover');
            }
        );
        
        // 按钮涟漪效果
        $('.btn, .interactive-element').on('click', function(e) {
            const button = $(this);
            const ripple = $('<span class="ripple"></span>');
            
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.css({
                width: size,
                height: size,
                left: x,
                top: y
            });
            
            button.append(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    }
    
    // 语言切换 - 修复版
    function initLanguageSwitcher() {
        $('#language-selector').on('change', function() {
            const selectedLang = $(this).val();
            
            // 显示加载状态
            showNotification('正在切换语言...', 'info');
            
            // 使用AJAX方式切换语言
            $.ajax({
                url: cmr_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'switch_language',
                    language: selectedLang,
                    nonce: cmr_ajax.nonce
                },
                success: function(response) {
                    if (response.success) {
                        showNotification('语言切换成功', 'success');
                        // 延迟刷新页面以显示新语言
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        showNotification('语言切换失败', 'error');
                    }
                },
                error: function() {
                    // 如果AJAX失败，使用URL参数方式
                    const currentUrl = window.location.href;
                    const separator = currentUrl.includes('?') ? '&' : '?';
                    const newUrl = currentUrl + separator + 'lang=' + selectedLang;
                    window.location.href = newUrl;
                }
            });
        });
    }
    
    // 返回顶部按钮
    function initBackToTop() {
        const backToTop = $('.back-to-top');
        
        $(window).on('scroll', throttle(function() {
            if ($(this).scrollTop() > 300) {
                backToTop.addClass('show');
            } else {
                backToTop.removeClass('show');
            }
        }, 100));
        
        backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 1000, 'easeInOutCubic');
        });
    }
    
    // 通知系统
    function initNotifications() {
        // 通知权限请求
        $(document).on('click', 'button:contains("开启通知")', function() {
            const button = $(this);
            
            if ('Notification' in window) {
                Notification.requestPermission().then(function(permission) {
                    if (permission === 'granted') {
                        new Notification('CMR通知', {
                            body: '您已成功开启通知功能！',
                            icon: '/favicon.ico'
                        });
                        button.text('通知已开启').prop('disabled', true).addClass('btn-success');
                        showNotification('通知功能已开启', 'success');
                    } else {
                        showNotification('通知权限被拒绝', 'error');
                    }
                });
            } else {
                showNotification('您的浏览器不支持通知功能', 'warning');
            }
        });
    }
    
    // Tab切换功能 - 修复版
    function initTabSwitching() {
        // 通用tab切换
        $('.tab-btn, .tech-tab-btn').on('click', function() {
            const targetTab = $(this).data('tab');
            const tabGroup = $(this).hasClass('tech-tab-btn') ? 'tech-tab' : 'tab';
            
            // 移除所有活动状态
            $(`.${tabGroup}-btn`).removeClass('active').css({
                'background': 'transparent',
                'color': 'var(--primary-700)'
            });
            $(`.${tabGroup}-pane`).removeClass('active').hide();
            
            // 添加当前活动状态
            $(this).addClass('active').css({
                'background': 'var(--accent-600)',
                'color': 'white'
            });
            
            // 显示对应内容
            const targetPane = $(`#${targetTab}`);
            targetPane.addClass('active').fadeIn(300);
            
            // 触发内容动画
            targetPane.find('.card, .interactive-element').each(function(index) {
                $(this).css('opacity', '0').delay(index * 100).animate({
                    opacity: 1
                }, 500);
            });
        });
        
        // 能力选择器功能（技术页面专用）
        $('.capability-card').on('click', function() {
            const index = parseInt($(this).data('capability'));
            
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
        });
    }
    
    // 图片效果
    function initImageEffects() {
        // 图片懒加载
        $('img[data-src]').each(function() {
            const img = $(this);
            if (isElementInViewport(img)) {
                img.attr('src', img.data('src')).removeAttr('data-src');
            }
        });
        
        $(window).on('scroll', throttle(function() {
            $('img[data-src]').each(function() {
                const img = $(this);
                if (isElementInViewport(img)) {
                    img.attr('src', img.data('src')).removeAttr('data-src');
                }
            });
        }, 100));
        
        // 图片加载错误处理
        $('img').on('error', function() {
            $(this).attr('src', 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
        });
    }
    
    // 进度条动画
    function initProgressBars() {
        $(window).on('scroll', throttle(function() {
            $('.progress-bar').each(function() {
                const progressBar = $(this);
                if (isElementInViewport(progressBar) && !progressBar.hasClass('animated')) {
                    progressBar.addClass('animated');
                    const progressFill = progressBar.find('.progress-fill');
                    const targetWidth = progressFill.data('width') || '75%';
                    
                    progressFill.animate({
                        width: targetWidth
                    }, 2000, 'easeOutCubic');
                }
            });
        }, 100));
    }
    
    // 工具提示
    function initTooltips() {
        $('.tooltip').hover(
            function() {
                const tooltip = $(this);
                const text = tooltip.data('tooltip');
                if (text) {
                    const tooltipEl = $('<div class="tooltip-content">' + text + '</div>');
                    $('body').append(tooltipEl);
                    
                    const rect = this.getBoundingClientRect();
                    tooltipEl.css({
                        position: 'absolute',
                        top: rect.top - tooltipEl.outerHeight() - 10,
                        left: rect.left + rect.width / 2 - tooltipEl.outerWidth() / 2,
                        zIndex: 10000
                    }).fadeIn(200);
                }
            },
            function() {
                $('.tooltip-content').fadeOut(200, function() {
                    $(this).remove();
                });
            }
        );
    }
    
    // 模态框系统
    function initModalSystem() {
        // 打开模态框
        $(document).on('click', '[data-modal]', function() {
            const modalId = $(this).data('modal');
            const modal = $('#' + modalId);
            if (modal.length) {
                modal.addClass('show');
                $('body').addClass('modal-open');
            }
        });
        
        // 关闭模态框
        $(document).on('click', '.modal .modal-close, .modal', function(e) {
            if (e.target === this) {
                $(this).closest('.modal').removeClass('show');
                $('body').removeClass('modal-open');
            }
        });
        
        // ESC键关闭
        $(document).on('keydown', function(e) {
            if (e.keyCode === 27) {
                $('.modal.show').removeClass('show');
                $('body').removeClass('modal-open');
            }
        });
    }
    
    // 加载效果
    function initLoadingEffects() {
        // 页面加载完成后隐藏加载器
        $(window).on('load', function() {
            $('#page-loader').fadeOut(500);
        });
        
        // 元素进入视窗动画
        $(window).on('scroll', throttle(function() {
            $('.fade-in, .scale-in, .slide-in-down').each(function() {
                const element = $(this);
                if (isElementInViewport(element) && !element.hasClass('animated')) {
                    element.addClass('animated');
                }
            });
        }, 100));
    }
    
    // 移动端优化
    function initMobileOptimizations() {
        if ($(window).width() <= 768) {
            // 移动端时间线布局调整
            $('.timeline-item').each(function() {
                $(this).css({
                    'flex-direction': 'column',
                    'text-align': 'center'
                });
            });
            
            // 移动端导航优化
            $('.main-nav ul').addClass('mobile-nav');
            
            // 触摸优化
            $('.card, .btn').addClass('touch-optimized');
        }
        
        // 窗口大小改变时重新检查
        $(window).on('resize', debounce(function() {
            if ($(window).width() <= 768) {
                $('body').addClass('mobile-view');
            } else {
                $('body').removeClass('mobile-view');
            }
        }, 250));
    }
    
    // 工具函数
    function showNotification(message, type = 'info') {
        const notification = $(`
            <div class="notification ${type}">
                <div class="notification-content">
                    <i class="fas fa-${getNotificationIcon(type)}" style="margin-right: 8px;"></i>
                    <span>${message}</span>
                </div>
                <button class="notification-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `);
        
        $('body').append(notification);
        
        setTimeout(() => notification.addClass('show'), 100);
        
        // 自动关闭
        setTimeout(() => {
            notification.removeClass('show');
            setTimeout(() => notification.remove(), 300);
        }, 5000);
        
        // 手动关闭
        notification.find('.notification-close').on('click', function() {
            notification.removeClass('show');
            setTimeout(() => notification.remove(), 300);
        });
    }
    
    function getNotificationIcon(type) {
        const icons = {
            success: 'check-circle',
            error: 'exclamation-circle',
            warning: 'exclamation-triangle',
            info: 'info-circle'
        };
        return icons[type] || 'info-circle';
    }
    
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    function isElementInViewport(element) {
        const rect = element[0].getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
    
    function debounce(func, wait, immediate) {
        let timeout;
        return function() {
            const context = this;
            const args = arguments;
            const later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }
    
    // 自定义缓动函数
    $.easing.easeInOutCubic = function(x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
    };
    
    $.easing.easeOutCubic = function(x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t + 1) + b;
    };
    
    // 初始化所有功能
    init();
    
    // 页面可见性API
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            // 页面隐藏时暂停动画
            $('*').addClass('paused');
        } else {
            // 页面显示时恢复动画
            $('*').removeClass('paused');
        }
    });
    
    // 网络状态监听
    window.addEventListener('online', function() {
        showNotification('网络连接已恢复', 'success');
    });
    
    window.addEventListener('offline', function() {
        showNotification('网络连接已断开', 'warning');
    });
    
    // 性能监控
    if ('performance' in window) {
        window.addEventListener('load', function() {
            setTimeout(function() {
                const perfData = performance.timing;
                const loadTime = perfData.loadEventEnd - perfData.navigationStart;
                console.log('页面加载时间:', loadTime + 'ms');
                
                if (loadTime > 3000) {
                    console.warn('页面加载时间较长，建议优化');
                }
            }, 0);
        });
    }
});

// 页面加载完成后的初始化
window.addEventListener('load', function() {
    console.log('CMR主题加载完成');
    
    // 预加载关键图片
    const criticalImages = [
        'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
    ];
    
    criticalImages.forEach(function(src) {
        const img = new Image();
        img.src = src;
    });
    
    // 添加CSS动画类
    const style = document.createElement('style');
    style.textContent = `
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }
        
        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .hover-active {
            transform: translateY(-4px) scale(1.02);
            box-shadow: var(--shadow-xl);
        }
        
        .icon-hover {
            transform: scale(1.2) rotate(5deg);
        }
        
        .mobile-nav {
            flex-direction: column;
            gap: 8px;
        }
        
        .touch-optimized {
            min-height: 44px;
            min-width: 44px;
        }
        
        .paused * {
            animation-play-state: paused !important;
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-xl);
            padding: 16px 20px;
            transform: translateX(100%);
            transition: transform var(--duration-normal) ease;
            z-index: 10000;
            max-width: 400px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .notification.show {
            transform: translateX(0);
        }
        
        .notification.success {
            border-left: 4px solid var(--success);
        }
        
        .notification.error {
            border-left: 4px solid var(--error);
        }
        
        .notification.warning {
            border-left: 4px solid var(--warning);
        }
        
        .notification.info {
            border-left: 4px solid var(--info);
        }
        
        .notification-close {
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            margin-left: 12px;
            color: var(--primary-500);
            transition: color var(--duration-fast) ease;
        }
        
        .notification-close:hover {
            color: var(--primary-700);
        }
        
        .tooltip-content {
            background: var(--primary-800);
            color: white;
            padding: 8px 12px;
            border-radius: var(--radius);
            font-size: 14px;
            white-space: nowrap;
            box-shadow: var(--shadow-lg);
        }
        
        .modal-open {
            overflow: hidden;
        }
        
        @media (max-width: 768px) {
            .notification {
                right: 10px;
                left: 10px;
                max-width: none;
            }
            
            .header-nav-wrapper {
                flex-direction: column;
                gap: 15px;
                width: 100%;
            }
            
            .main-nav ul {
                flex-direction: column;
                gap: 8px;
                width: 100%;
            }
            
            .nav-link {
                text-align: center;
                padding: 10px 15px;
            }
            
            .language-switcher {
                margin-left: 0;
                justify-content: center;
            }
        }
    `;
    document.head.appendChild(style);
});

// 全局错误处理
window.addEventListener('error', function(e) {
    console.error('JavaScript错误:', e.error);
});

// Service Worker注册（如果需要）
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
            .then(function(registration) {
                console.log('ServiceWorker注册成功');
            })
            .catch(function(error) {
                console.log('ServiceWorker注册失败');
            });
    });
}
