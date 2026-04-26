$(document).ready(function() {

    // ===================================
    // Navbar + Mobile Menu + Smooth Scroll
    // ===================================
    const $window = $(window);
    const $hamburger = $('.hamburger');
    const $navCenter = $('.nav-center');
    const $navMenu = $('.nav-menu');
    const $navLinks = $('.nav-link');
    const $sections = $('section[id]');
    const NAV_OFFSET = 88;
    let closeUnlockTimer = null;

    function preventBackgroundScroll(e) {
        if (!$navCenter.hasClass('active')) return;
        const isInsideMenu = $(e.target).closest('.nav-menu').length > 0;
        if (!isInsideMenu) {
            e.preventDefault();
        }
    }

    function lockPageScroll() {
        document.documentElement.classList.add('menu-open');
        document.body.classList.add('menu-open');
        document.addEventListener('touchmove', preventBackgroundScroll, { passive: false });
        document.addEventListener('wheel', preventBackgroundScroll, { passive: false });
    }

    function unlockPageScroll() {
        document.documentElement.classList.remove('menu-open');
        document.body.classList.remove('menu-open');
        document.removeEventListener('touchmove', preventBackgroundScroll);
        document.removeEventListener('wheel', preventBackgroundScroll);
    }

    function openMobileMenu() {
        $hamburger.addClass('active').attr('aria-expanded', 'true');
        $navCenter.addClass('active');
        $navMenu.addClass('active');
        lockPageScroll();
    }

    function closeMobileMenu(immediate = false) {
        if (!$navCenter.hasClass('active')) return;

        if (closeUnlockTimer) {
            clearTimeout(closeUnlockTimer);
            closeUnlockTimer = null;
        }

        if (immediate) {
            $hamburger.addClass('no-transition');
            $navCenter.addClass('no-transition');
            $navMenu.addClass('no-transition');
        }

        $hamburger.removeClass('active').attr('aria-expanded', 'false');
        $navCenter.removeClass('active');
        $navMenu.removeClass('active');
        if (immediate) {
            unlockPageScroll();
        } else {
            closeUnlockTimer = setTimeout(function() {
                unlockPageScroll();
                closeUnlockTimer = null;
            }, 220);
        }

        if (immediate) {
            requestAnimationFrame(function() {
                $hamburger.removeClass('no-transition');
                $navCenter.removeClass('no-transition');
                $navMenu.removeClass('no-transition');
            });
        }
    }

    function updateNavbarState() {
        if ($window.scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    }

    function updateActiveLink() {
        const scrollPosition = $window.scrollTop() + NAV_OFFSET + 40;
        let currentId = '';

        $sections.each(function() {
            const $section = $(this);
            const sectionTop = $section.offset().top;
            if (scrollPosition >= sectionTop) {
                currentId = $section.attr('id');
            }
        });

        $navLinks.removeClass('active');
        if (currentId) {
            $(`.nav-link[href="#${currentId}"]`).addClass('active');
        }
    }

    $hamburger.on('click', function() {
        if ($navCenter.hasClass('active')) {
            closeMobileMenu();
            return;
        }
        openMobileMenu();
    });

    $hamburger.on('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            $(this).trigger('click');
        }
    });

    $(document).on('pointerdown', function(e) {
        if (!$navCenter.hasClass('active')) return;
        const $target = $(e.target);
        const clickedInsideMenu = $target.closest('.nav-menu').length > 0;
        const clickedHamburger = $target.closest('.hamburger').length > 0;
        if (!clickedInsideMenu && !clickedHamburger) {
            closeMobileMenu();
        }
    });

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && $navCenter.hasClass('active')) {
            closeMobileMenu();
        }
    });

    $('a[href^="#"]').on('click', function(e) {
        const targetId = $(this).attr('href');
        if (targetId === '#' || !targetId) return;

        const $target = $(targetId);
        if (!$target.length) return;

        e.preventDefault();
        closeMobileMenu(true);

        const targetOffset = Math.max(0, $target.offset().top - NAV_OFFSET);
        window.scrollTo({
            top: targetOffset,
            behavior: 'smooth'
        });
    });

    let activeTicking = false;
    $window.on('scroll', function() {
        updateNavbarState();
        if (!activeTicking) {
            activeTicking = true;
            requestAnimationFrame(function() {
                updateActiveLink();
                activeTicking = false;
            });
        }
    });

    $(window).on('resize', function() {
        if (window.innerWidth > 1024) {
            closeMobileMenu();
        }
    });

    updateNavbarState();
    updateActiveLink();

    // ===================================
    // 2. Scroll to Top Button
    // ===================================
    $('#scrollTopBtn').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
    });

    // Show/hide scroll button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#scrollTopBtn').fadeIn();
        } else {
            $('#scrollTopBtn').fadeOut();
        }
    });

    // ===================================
    // 3. Navbar Shadow on Scroll
    // ===================================
    $(window).scroll(function() {
        let scroll = $(window).scrollTop();
        
        // Navbar shadow
        if (scroll >= 50) {
            $('.navbar').css('box-shadow', '0 10px 30px rgba(0,0,0,0.5)');
        } else {
            $('.navbar').css('box-shadow', 'none');
        }
    });

    // ===================================
    // 4. WhatsApp Form Logic (Functional)
    // ===================================
    $('#whatsappForm').on('submit', function(e) {
        e.preventDefault();
        
        let name = $('#name').val().trim();
        let email = $('#email').val().trim();
        let project = $('#projectType').val();
        let message = $('#message').val().trim();
        
        // رقم الواتساب بتاعك (بدون + أو مسافات)
        let phoneNumber = "<?php echo str_replace(['+', ' '], '', DEV_PHONE); ?>"; 
        
        // بناء الرسالة
        let text = `*رسالة جديدة من الموقع*%0a%0a`;
        text += `*الاسم:* ${name}%0a`;
        text += `*البريد الإلكتروني:* ${email}%0a`;
        text += `*نوع المشروع:* ${project}%0a`;
        text += `*الرسالة:*%0a${message}`;
        
        let url = `https://wa.me/${phoneNumber}?text=${text}`;
        
        // فتح واتساب في نافذة جديدة
        window.open(url, '_blank');
        
        // إعادة تعيين الفورم
        this.reset();
    });

    // ===================================
    // 5. Skills Progress Animation
    // ===================================
    function animateSkills() {
        $('.skill-progress').each(function() {
            let progress = $(this).data('progress');
            let position = $(this).offset().top;
            let windowHeight = $(window).height();
            let scrollTop = $(window).scrollTop();
            
            if (position < windowHeight + scrollTop) {
                $(this).css('width', progress + '%');
            }
        });
    }

    $(window).on('scroll', animateSkills);
    animateSkills(); // Run on load

    // ===================================
    // Counter Animation for Stats - Fixed NaN Issue
    // ===================================
    function animateCounter($element) {
        let target = parseFloat($element.data('target'));
        
        // Check if target is a valid number
        if (isNaN(target)) {
            target = 0;
        }
        
        let duration = 2000;
        let step = target / (duration / 16);
        let current = 0;
        let isDecimal = target % 1 !== 0;
        
        let timer = setInterval(function() {
            current += step;
            if (current >= target) {
                $element.text(target.toFixed(isDecimal ? 1 : 0));
                clearInterval(timer);
            } else {
                $element.text(current.toFixed(isDecimal ? 1 : 0));
            }
        }, 16);
    }


    // Trigger counter animation when visible
    let heroStatsAnimated = false;
    let aboutStatsAnimated = false;

    function checkStatsVisibility() {
        let $heroStatsSection = $('.hero-stats');
        let $aboutStatsSection = $('.about-stats-grid');

        if (!heroStatsAnimated && $heroStatsSection.length > 0 && isElementInViewport($heroStatsSection)) {
            heroStatsAnimated = true;
            $('.hero-stats .count').each(function() {
                let $this = $(this);
                if ($this.data('target') !== undefined) {
                    animateCounter($this);
                }
            });
        }

        if (!aboutStatsAnimated && $aboutStatsSection.length > 0 && isElementInViewport($aboutStatsSection)) {
            aboutStatsAnimated = true;
            $('.about-stats-grid .count').each(function() {
                let $this = $(this);
                if ($this.data('target') !== undefined) {
                    animateCounter($this);
                }
            });
        }
    }

    function isElementInViewport($el) {
        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();
        let elementTop = $el.offset().top;
        let elementBottom = elementTop + $el.height();
        
        return elementTop < viewportBottom && elementBottom > viewportTop;
    }
    
    $(window).on('scroll', checkStatsVisibility);
   // Run on load with a small delay to ensure DOM is ready
    $(document).ready(function() {
        setTimeout(checkStatsVisibility, 500);
    });

    // ===================================
    // 8. Create Particles
    // ===================================
    function createParticles() {
        let particlesContainer = document.getElementById('particles');
        if (!particlesContainer) return;
        
        let particleCount = 30;

        for (let i = 0; i < particleCount; i++) {
            let particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            particlesContainer.appendChild(particle);
        }
    }

    createParticles();

    // ===================================
    // 9. Typed.js Effect for Hero
    // ===================================
    const typedTextSpan = document.querySelector(".typing-text");
    if (typedTextSpan) {
        const textArray = [
            "خبير ووردبريس",
            "مصمم متاجر إلكترونية",
            "مطور ويب محترف",
            "مؤسس كودلك"
        ];
        const typingDelay = 100;
        const erasingDelay = 50;
        const newTextDelay = 2000;
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay + 1100);
            }
        }

        setTimeout(type, 1000);
    }

    // ===================================
    // 10. Magnetic Buttons Effect
    // ===================================
    $('.btn').on('mousemove', function(e) {
        let $btn = $(this);
        let rect = $btn[0].getBoundingClientRect();
        let x = e.clientX - rect.left - rect.width / 2;
        let y = e.clientY - rect.top - rect.height / 2;
        
        $btn.css({
            transform: `translate(${x * 0.2}px, ${y * 0.2}px)`
        });
    });

    $('.btn').on('mouseleave', function() {
        $(this).css('transform', 'translate(0, 0)');
    });

    // ===================================
    // 11. Theme Toggle (Optional)
    // ===================================
    function applyTheme(theme) {
        const isLight = theme === 'light';
        $('body').toggleClass('light-theme', isLight);
        $('.theme-toggle i')
            .toggleClass('fa-moon', isLight)
            .toggleClass('fa-sun', !isLight);
    }

    const savedTheme = localStorage.getItem('themeMode');
    const systemPrefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;
    const initialTheme = savedTheme || (systemPrefersLight ? 'light' : 'dark');
    applyTheme(initialTheme);

    $('.theme-toggle').on('click', function() {
        const nextTheme = $('body').hasClass('light-theme') ? 'dark' : 'light';
        applyTheme(nextTheme);
        localStorage.setItem('themeMode', nextTheme);
    });

    // ===================================
    // 12. Language Toggle (Placeholder)
    // ===================================
    $('.lang-toggle').on('click', function() {
        alert('خاصية اللغة الإنجليزية قريباً!');
    });

    // ===================================
    // Background Particle Animation
    // ===================================
    function initParticles() {
        const isMobileViewport = window.matchMedia('(max-width: 768px)').matches;
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReducedMotion) return;

        const canvas = document.createElement('canvas');
        canvas.id = 'particles-canvas';
        canvas.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        `;
        document.body.insertBefore(canvas, document.body.firstChild);

        const ctx = canvas.getContext('2d');
        let particles = [];
        let mouse = { x: null, y: null };
        const particleCount = isMobileViewport ? 30 : 80;
        const connectionDistance = isMobileViewport ? 95 : 150;
        const mouseDistance = isMobileViewport ? 120 : 200;

        // Resize canvas
        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Track mouse
        window.addEventListener('mousemove', (e) => {
            mouse.x = e.x;
            mouse.y = e.y;
        });

        window.addEventListener('mouseleave', () => {
            mouse.x = null;
            mouse.y = null;
        });

        // Particle class
        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = (Math.random() - 0.5) * 0.5;
                this.speedY = (Math.random() - 0.5) * 0.5;
                this.opacity = Math.random() * 0.5 + 0.1;
                this.color = `rgba(124, 58, 237, ${this.opacity})`;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                // Wrap around screen
                if (this.x > canvas.width) this.x = 0;
                if (this.x < 0) this.x = canvas.width;
                if (this.y > canvas.height) this.y = 0;
                if (this.y < 0) this.y = canvas.height;

                // Mouse interaction
                if (mouse.x !== null && mouse.y !== null) {
                    let dx = mouse.x - this.x;
                    let dy = mouse.y - this.y;
                    let distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < mouseDistance) {
                        const forceDirectionX = dx / distance;
                        const forceDirectionY = dy / distance;
                        const force = (mouseDistance - distance) / mouseDistance;
                        const directionX = forceDirectionX * force * 0.5;
                        const directionY = forceDirectionY * force * 0.5;

                        this.x -= directionX;
                        this.y -= directionY;
                    }
                }
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();

                // Add glow effect
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size * 2, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(124, 58, 237, ${this.opacity * 0.3})`;
                ctx.fill();
            }
        }

        // Initialize particles
        function init() {
            particles = [];
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        // Draw connections between particles
        function drawConnections() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    let dx = particles[i].x - particles[j].x;
                    let dy = particles[i].y - particles[j].y;
                    let distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < connectionDistance) {
                        let opacity = (1 - distance / connectionDistance) * 0.2;
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(124, 58, 237, ${opacity})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        // Animation loop
        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Update and draw particles
            for (let particle of particles) {
                particle.update();
                particle.draw();
            }

            // Draw connections only on non-mobile to keep mobile smooth
            if (!isMobileViewport) {
                drawConnections();
            }

            requestAnimationFrame(animate);
        }

        init();
        animate();
    }

    // Initialize particles when page loads
    $(document).ready(function() {
        initParticles();
    });

// ===================================
// Portfolio: Show More & Filters
// ===================================
const $cards = $('.portfolio-card');
const $showMoreBtn = $('#showMoreBtn');
const $hiddenCount = $('#hiddenCount');
const $showMoreContainer = $('#showMoreContainer');

let currentFilter = 'all';
let visibleCount = 6; // Number of items to show initially
let loadStep = 3; // Items to load per click

// Portfolio height changes after AOS.init; refresh so sections below can animate / stay visible
function refreshPortfolioAOS() {
    if (typeof AOS !== 'undefined' && typeof AOS.refresh === 'function') {
        AOS.refresh();
    }
}

// Count items per category
function countByCategory(category) {
    if (category === 'all') return $cards.length;
    return $cards.filter(`[data-category="${category}"]`).length;
}

// After filter animation: keep only the first `visibleCount` items visible
function limitVisibleForCurrentFilter() {
    const $inFilter = currentFilter === 'all'
        ? $cards
        : $cards.filter(`[data-category="${currentFilter}"]`);

    $inFilter.each(function(index) {
        const $card = $(this);
        if (index < visibleCount) {
            $card.removeClass('filter-hidden').show();
        } else {
            $card.addClass('filter-hidden').hide();
        }
    });
}

// Update Show More Button Visibility
function updateShowMoreButton(options) {
    const skipAos = options && options.skipAos;
    $showMoreContainer.css('transition', '');
    const totalInFilter = countByCategory(currentFilter);
    let currentlyVisible;
    if (currentFilter === 'all') {
        currentlyVisible = $cards.filter(':not(.filter-hidden)').length;
    } else {
        currentlyVisible = $cards.filter(`[data-category="${currentFilter}"]:not(.filter-hidden)`).length;
    }
    const remaining = totalInFilter - currentlyVisible;

    if (remaining > 0) {
        $hiddenCount.text(`(+${remaining})`);
        $showMoreContainer.removeClass('hidden');
    } else {
        $showMoreContainer.addClass('hidden');
    }
    if (!skipAos) {
        refreshPortfolioAOS();
    }
}

// Reset all cards to default state
function resetCards() {
    $cards.removeClass('filter-hidden filtering-out filtering-in active-filter').show();
}

// Apply filter with smooth animation (only first `visibleCount` cards animate in — no flash of all items)
function applyFilter(filter) {
    currentFilter = filter;
    const $targetCards = filter === 'all' ? $cards : $cards.filter(`[data-category="${filter}"]`);

    // Hide button immediately (no fade) until final state — avoids flicker when switching filters
    $showMoreContainer.css('transition', 'none').addClass('hidden');

    // Step 1: Fade out all currently visible cards
    $cards.addClass('filtering-out');

    setTimeout(() => {
        // Step 2: Hide all cards
        $cards.addClass('filter-hidden').removeClass('filtering-out filtering-in active-filter').hide();

        const nShow = Math.min(visibleCount, $targetCards.length);
        const $toAnimate = $targetCards.slice(0, nShow);
        const $toStayHidden = $targetCards.slice(nShow);

        $toStayHidden.each(function() {
            $(this).addClass('filter-hidden').removeClass('filtering-in active-filter').hide();
        });

        // Step 3: Stagger only the cards that stay visible (max `visibleCount`)
        $toAnimate.removeClass('filter-hidden').addClass('filtering-in');
        $toAnimate.each(function(index) {
            const $card = $(this);
            setTimeout(() => {
                $card.show().addClass('active-filter');
            }, index * 80);
        });

        const staggerDoneMs = $toAnimate.length * 80 + 400;
        setTimeout(() => {
            limitVisibleForCurrentFilter();
            updateShowMoreButton();
        }, staggerDoneMs);
    }, 400); // Wait for fade out to complete
}

// Show More Button Click Handler
$showMoreBtn.on('click', function() {
    const $hiddenCards = currentFilter === 'all'
        ? $cards.filter('.filter-hidden')
        : $cards.filter(`[data-category="${currentFilter}"].filter-hidden`);
    const $nextBatch = $hiddenCards.slice(0, loadStep);
    
    $nextBatch.each(function(index) {
        const $card = $(this);
        $card.removeClass('filter-hidden').addClass('filtering-in');
        
        setTimeout(() => {
            $card.show().addClass('active-filter');
        }, index * 100);
    });
    
    // Update counter after batch animation
    setTimeout(() => {
        updateShowMoreButton();
    }, $nextBatch.length * 100 + 400);
});

// Filter Button Click Handler
$('.filter-btn').on('click', function() {
    // Update active state
    $('.filter-btn').removeClass('active');
    $(this).addClass('active');
    
    const filter = $(this).data('filter');
    
    // Disable buttons during animation
    $('.filter-btn').css('pointer-events', 'none');
    
    // Apply filter
    applyFilter(filter);
    
    // Re-enable after stagger + limit (max ~6 cards: 400 + 480 + 400ms)
    setTimeout(() => {
        $('.filter-btn').css('pointer-events', 'auto');
    }, 1500);
});

// Initialize: first `visibleCount` projects only on "all"
$cards.each(function(index) {
    if (index >= visibleCount) {
        $(this).addClass('filter-hidden').hide();
    }
});

// AOS after portfolio DOM is final (hidden cards excluded from layout) so scroll reveals match other sections
if (typeof AOS !== 'undefined') {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isMobileViewport = window.matchMedia('(max-width: 768px)').matches;

    AOS.init({
        duration: isMobileViewport ? 600 : 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50,
        disable: prefersReducedMotion
    });
}

updateShowMoreButton();

// Handle window resize
$(window).on('resize', function() {
    updateShowMoreButton({ skipAos: true });
    refreshPortfolioAOS();
});

// ===================================
// Statistics Counter Animation
// ===================================
function animateStatsCounter($element) {
    let target = parseFloat($element.data('target'));
    let suffix = $element.data('suffix') || '';
    let duration = 2500;
    let step = target / (duration / 16);
    let current = 0;
    let isDecimal = target % 1 !== 0;
    // التحكم في وجود علامة + من خاصية data-plus
    let showPlus = $element.data('plus') !== false && $element.data('plus') !== "false"; // الافتراضي يوجد +
    
    let timer = setInterval(function() {
        current += step;
        if (current >= target) {
            $element.text(
                (showPlus ? '+' : '') + Math.floor(target).toLocaleString() + suffix
            );
            clearInterval(timer);
        } else {
            $element.text(
                (showPlus ? '+' : '') + Math.floor(current).toLocaleString() + suffix
            );
        }
    }, 16);
}

// Trigger stats animation when visible
let statsSectionAnimated = false;

function checkStatsSectionVisibility() {
    let $statsSection = $('.statistics-section');
    if ($statsSection.length === 0) return;
    
    if (!statsSectionAnimated && isElementInViewport($statsSection)) {
        statsSectionAnimated = true;
        
        $('.stat-card').each(function(index) {
            let $card = $(this);
            let $number = $card.find('.stat-number');
            
            setTimeout(function() {
                animateStatsCounter($number);
            }, index * 100);
        });
    }
}

$(window).on('scroll', checkStatsSectionVisibility);

// ===================================
// FAQ Accordion
// ===================================
$('.faq-question').on('click', function() {
    const $item = $(this).parent();
    const wasActive = $item.hasClass('active');

    const openItem = ($targetItem) => {
        const $targetAnswer = $targetItem.find('.faq-answer');
        const $targetIcon = $targetItem.find('.faq-icon i');

        $targetItem.addClass('active');
        $targetIcon.removeClass('fa-plus').addClass('fa-minus');
        $targetAnswer.css('max-height', $targetAnswer[0].scrollHeight + 'px');
    };

    const closeItem = ($targetItem) => {
        const $targetAnswer = $targetItem.find('.faq-answer');
        const $targetIcon = $targetItem.find('.faq-icon i');

        $targetItem.removeClass('active');
        $targetIcon.removeClass('fa-minus').addClass('fa-plus');
        $targetAnswer.css('max-height', 0);
    };
    
    // Close siblings first for a cleaner accordion transition.
    $item.siblings('.faq-item').each(function() {
        closeItem($(this));
    });

    if (wasActive) {
        closeItem($item);
    } else {
        openItem($item);
    }
});

});

// Add easing function
$.easing.easeInOutCubic = function (x, t, b, c, d) {
    if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
    return c / 2 * ((t -= 2) * t * t + 2) + b;
};