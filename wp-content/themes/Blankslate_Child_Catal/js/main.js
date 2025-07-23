// WordPress主题JavaScript文件

jQuery(document).ready(function($) {
    // 平滑滚动
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // 导航栏滚动效果
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.site-header').addClass('scrolled');
        } else {
            $('.site-header').removeClass('scrolled');
        }
    });
    
    // 文化照片轮播
    var cultureImages = [
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
    
    var currentSlide = 0;
    
    function updateCultureSlide() {
        if ($('#culture-slideshow').length) {
            var slide = cultureImages[currentSlide];
            $('#culture-slideshow img').attr('src', slide.src).attr('alt', slide.title);
            $('#culture-slideshow').siblings().find('h3').text(slide.title);
            $('#culture-slideshow').siblings().find('p').text(slide.description);
        }
    }
    
    // 自动轮播文化照片
    setInterval(function() {
        currentSlide = (currentSlide + 1) % cultureImages.length;
        updateCultureSlide();
    }, 4000);
    
    // 数字动画效果
    function animateNumbers() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var text = $this.text();
            var number = parseInt(text.replace(/[^\d]/g, ''));
            
            if (number > 0) {
                $this.prop('Counter', 0).animate({
                    Counter: number
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function(now) {
                        var formatted = Math.ceil(now);
                        if (text.includes('+')) {
                            formatted += '+';
                        }
                        if (text.includes('万')) {
                            formatted += '万';
                        }
                        if (text.includes('m²')) {
                            formatted += 'm²';
                        }
                        if (text.includes('年')) {
                            formatted += '年';
                        }
                        if (text.includes('项')) {
                            formatted += '项';
                        }
                        if (text.includes('家')) {
                            formatted += '家';
                        }
                        if (text.includes('美元')) {
                            formatted = (formatted / 10).toFixed(1) + '亿美元';
                        }
                        $this.text(formatted);
                    }
                });
            }
        });
    }
    
    // 滚动触发数字动画
    $(window).scroll(function() {
        $('.stats-grid').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                if (!$(this).hasClass('animated')) {
                    $(this).addClass('animated');
                    animateNumbers();
                }
            }
        });
    });
    
    // 表单提交处理
    $('.contact-form').on('submit', function(e) {
        e.preventDefault();
        
        // 获取表单数据
        var formData = {
            name: $(this).find('input[type="text"]').first().val(),
            company: $(this).find('input[type="text"]').eq(1).val(),
            email: $(this).find('input[type="email"]').val(),
            phone: $(this).find('input[type="tel"]').val(),
            type: $(this).find('select').val(),
            message: $(this).find('textarea').val()
        };
        
        // 简单验证
        if (!formData.name || !formData.email || !formData.message) {
            alert('请填写必填字段');
            return;
        }
        
        // 这里可以添加AJAX提交逻辑
        alert('感谢您的咨询，我们会尽快与您联系！');
        
        // 重置表单
        this.reset();
    });
    
    // 简历投递处理
    $('button').filter(function() {
        return $(this).text().includes('一键投递简历');
    }).on('click', function() {
        // 创建文件输入元素
        var fileInput = $('<input type="file" accept=".pdf,.doc,.docx" style="display: none;">');
        $('body').append(fileInput);
        
        fileInput.on('change', function() {
            var file = this.files[0];
            if (file) {
                // 这里可以添加文件上传逻辑
                alert('简历上传成功！我们会尽快与您联系。');
            }
            $(this).remove();
        });
        
        fileInput.click();
    });
    
    // 邮件订阅处理
    $('form').has('input[type="email"]').on('submit', function(e) {
        if ($(this).hasClass('contact-form')) return;
        
        e.preventDefault();
        var email = $(this).find('input[type="email"]').val();
        
        if (!email) {
            alert('请输入有效的邮箱地址');
            return;
        }
        
        // 这里可以添加邮件订阅逻辑
        alert('订阅成功！感谢您的关注。');
        
        // 重置表单
        this.reset();
    });
    
    // 通知权限请求
    $('button').filter(function() {
        return $(this).text().includes('开启通知');
    }).on('click', function() {
        if ('Notification' in window) {
            Notification.requestPermission().then(function(permission) {
                if (permission === 'granted') {
                    new Notification('CMR通知', {
                        body: '您已成功开启通知功能！',
                        icon: '/favicon.ico'
                    });
                    $(this).text('通知已开启').prop('disabled', true);
                } else {
                    alert('通知权限被拒绝');
                }
            }.bind(this));
        } else {
            alert('您的浏览器不支持通知功能');
        }
    });
    
    // 卡片悬停效果增强
    $('.content-card').hover(
        function() {
            $(this).find('i').css('transform', 'scale(1.1)');
        },
        function() {
            $(this).find('i').css('transform', 'scale(1)');
        }
    );
    
    // 移动端菜单处理
    if ($(window).width() <= 768) {
        // 移动端时间线布局调整
        $('.timeline-item').each(function() {
            $(this).css({
                'flex-direction': 'column',
                'text-align': 'center'
            });
            $(this).find('> div:first-child').css({
                'width': '100%',
                'padding': '0',
                'text-align': 'center',
                'margin-bottom': '20px'
            });
        });
        
        // 移动端网格布局调整
        $('.stats-grid').css('grid-template-columns', 'repeat(2, 1fr)');
    }
    
    // 页面元素淡入效果
    function fadeInElements() {
        $('.content-card, .stat-item').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                if (!$(this).hasClass('fade-in')) {
                    $(this).addClass('fade-in');
                    $(this).css({
                        'opacity': '0',
                        'transform': 'translateY(30px)'
                    }).animate({
                        'opacity': '1'
                    }, 800).css('transform', 'translateY(0)');
                }
            }
        });
    }
    
    $(window).scroll(fadeInElements);
    fadeInElements(); // 初始检查
});

// 页面加载完成后的初始化
window.addEventListener('load', function() {
    // 添加页面加载完成后的逻辑
    console.log('CMR主题加载完成');
    
    // 预加载图片
    var images = [
        'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
    ];
    
    images.forEach(function(src) {
        var img = new Image();
        img.src = src;
    });
});
