<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="particles" id="particles"></div>
    
    <div class="container">
        <div class="hero-wrapper">
            <!-- Right Side - Content -->
            <div class="hero-content" data-aos="fade-left" data-aos-duration="1000">
                <div class="hero-badge" data-aos="zoom-in" data-aos-delay="200">
                    <span class="badge-dot"></span>
                    <span>متاح للعمل على مشاريع جديدة</span>
                </div>
                
                <h1 class="hero-title"><?php echo DEV_NAME; ?></h1>
                
                <!-- Typing Text - Below the name -->
                <div class="typing-container">
                    <span style="color: #ec4899;font-size: x-large;font-weight: bold;margin-left: 10px;">></span>
                    <span class="typing-text"></span>
                    <span class="cursor-blink">|</span>
                </div>
                
                <p class="hero-desc">
                    أساعدك على تحويل فكرتك لمشروع رقمي ناجح. متخصص في تصميم وتطوير مواقع ومتاجر إلكترونية احترافية وأنظمة إدارة متكاملة.
                </p>
                
                <div class="hero-btns">
                    <a href="#portfolio" class="btn btn-primary">
                        استعراض أعمالي <i class="fas fa-arrow-left"></i>
                    </a>
                    <a href="#contact" class="btn btn-outline">
                        تواصل معي
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <h3><span class="count" data-target="4">0</span>.<span>9</span>/5</h3>
                        <p>تقييم العملاء</p>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <h3>+<span class="count" data-target="10">0</span></h3>
                        <p>سنوات خبرة</p>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <h3>+<span class="count" data-target="65">0</span></h3>
                        <p>مشروع ناجح</p>
                    </div>
                </div>
            </div>
            
            <!-- Left Side - Code Window -->
            <div class="hero-code" data-aos="fade-right" data-aos-duration="1000">
                <div class="code-window">
                    <div class="window-header">
                        <span class="filename">developer.ts</span>
                        <div class="dots">
                            <span class="dot green"></span>
                            <span class="dot yellow"></span>
                            <span class="dot red"></span>
                        </div>
                    </div>
                    <div class="window-body">
                        <div class="line-numbers">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                        </div>
                        <div class="code-text">
                            <div class="code-line">
                                <span class="comment">// مرحباً بالعالم</span>
                            </div>
                            <div class="code-line">
                                <span class="kw">const</span> <span class="prop">developer</span> = {
                            </div>
                            <div class="code-line">
                                <span class="prop">name</span>: <span class="str">"<?php echo DEV_NAME; ?>"</span>,
                            </div>
                            <div class="code-line">
                                <span class="prop">role</span>: <span class="str">"Full-Stack Developer"</span>,
                            </div>
                            <div class="code-line">
                                <span class="prop">projects</span>: <span class="num">65</span>,
                            </div>
                            <div class="code-line">
                                <span class="prop">available</span>: <span class="bool">true</span>
                            </div>
                            <div class="code-line">
                                };
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Terminal - Separated -->
                <div class="terminal-window">
                    <span class="terminal-prompt">with-codlek ~</span>
                    <span class="terminal-command">npx create-project $</span>
                    <span class="terminal-cursor">_</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section" id="about">
    <div class="container">
        <div class="about-header" data-aos="fade-up">
            <div class="about-badge">
                <span>من أنا</span>
            </div>
            <h2 class="about-title">نبذة <span class="highlight">عني</span></h2>
        </div>

        <div class="about-content">
            <div class="about-text" data-aos="fade-right">
                <p>
                    مطور ويب متخصص بخبرة أكثر من 10 سنوات في بناء مشاريع رقمية ناجحة. أسست <?php echo SITE_NAME; ?> عشان أساعد الشركات والأفراد يحولوا أفكارهم لواقع رقمي.
                </p>
                <p>
                    بشتغل على أحدث التقنيات وبتبع أفضل الممارسات في التطوير عشان أضمن لك مشروع احترافي، سريع، وآمن.
                </p>

                <div class="about-cta-row">
                    <a href="#contact" class="btn btn-primary">
                        ابدأ مشروعك الآن <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <div class="about-mini-cards">
                    <div class="about-mini-card">
                        <div class="about-mini-card-ico">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <span>كود نظيف</span>
                    </div>
                    <div class="about-mini-card">
                        <div class="about-mini-card-ico">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <span>أداء عالي</span>
                    </div>
                    <div class="about-mini-card">
                        <div class="about-mini-card-ico">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <span>بنية قوية</span>
                    </div>
                    <div class="about-mini-card">
                        <div class="about-mini-card-ico">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <span>تسليم سريع</span>
                    </div>
                </div>

                <div class="about-stats-grid">
                    <div class="about-stat-card">
                        <h3>+<span class="count" data-target="65">0</span></h3>
                        <p>مشروع</p>
                    </div>
                    <div class="about-stat-card">
                        <h3>+<span class="count" data-target="<?php echo DEV_EXPERIENCE; ?>">0</span></h3>
                        <p>سنوات خبرة</p>
                    </div>
                    <div class="about-stat-card">
                        <h3><span class="count" data-target="97">0</span>%</h3>
                        <p>رضا العملاء</p>
                    </div>
                </div>
            </div>
            
            <div class="about-skills-panel" data-aos="fade-left">
                <div class="about-skills-header">
                    <div class="dots">
                        <span class="dot green"></span>
                        <span class="dot yellow"></span>
                        <span class="dot red"></span>
                    </div>
                    <span class="filename">Skills.json</span>
                </div>

                <div class="about-skills-body">
                    <div class="about-skills-category">
                        <h3>البرمجة والتطوير</h3>
                        <div class="about-skills-list">
                            <?php foreach($skills['programming'] as $skill): ?>
                            <div class="about-skill-row">
                                <span class="about-skill-percent"><?php echo $skill['level']; ?>%</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="<?php echo $skill['level']; ?>"></div>
                                </div>
                                <span class="about-skill-name"><?php echo $skill['name']; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="about-skills-category">
                        <h3>التصميم والأدوات</h3>
                        <div class="about-skills-list">
                            <?php foreach($skills['design'] as $skill): ?>
                            <div class="about-skill-row">
                                <span class="about-skill-percent"><?php echo $skill['level']; ?>%</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="<?php echo $skill['level']; ?>"></div>
                                </div>
                                <span class="about-skill-name"><?php echo $skill['name']; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">خدماتي</span>
            <h2 class="section-title">اقدر <span class="highlight"> أساعدك في ...</span></h2>
            <p class="section-subtitle">حلول رقمية متكاملة تناسب احتياجاتك وتساعدك على النمو أونلاين.</p>
        </div>
        
        <div class="services-grid">
            <?php foreach(array_slice($services, 0, 6) as $index => $service): ?>
            <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="service-icon">
                    <i class="fa<?php echo $service['ico-type']; ?>  fa-<?php echo $service['icon']; ?>"></i>
                </div>
                <h3 class="service-title"><?php echo $service['title']; ?></h3>
                <p class="service-description"><?php echo $service['description']; ?></p>
                <a href="#contact" class="service-link">
                    اطلب الخدمة <i class="fas fa-arrow-left"></i>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio-section" id="portfolio">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">أعمالي</span>
            <h2 class="section-title">مشاريع <span class="highlight">نفتخر بها</span></h2>
            <p class="section-subtitle">مجموعة من أحدث مشاريعي اللي بتعكس خبرتي في مختلف المجالات</p>
        </div>

        <!-- Filters -->
        <div class="portfolio-filters" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">الكل</button>
            <button class="filter-btn" data-filter="dashboard">أنظمة إدارة</button>
            <button class="filter-btn" data-filter="e-commerce">متاجر إلكترونية</button>
            <button class="filter-btn" data-filter="custom-design">موقع تعريفي</button>
            <button class="filter-btn" data-filter="booking">حجز خدمات</button>
            <button class="filter-btn" data-filter="real-estate">عقارات</button>
            <button class="filter-btn" data-filter="restaurants">مطاعم</button>
            <button class="filter-btn" data-filter="tourism">سياحة وسفر</button>
        </div>

        <!-- Grid -->
        <div class="portfolio-grid" id="portfolioGrid">
            <?php foreach($projects as $index => $project): ?>
            <a href="<?php echo $project['url']; ?>" target="_blank" 
               class="portfolio-card" 
               data-category="<?php echo $project['category_slug']; ?>"
               data-index="<?php echo $index; ?>"
               data-aos="fade-up"
               data-aos-duration="900"
               data-aos-delay="<?php echo min($index, 5) * 100; ?>">
                
                <!-- Browser Bar -->
                <div class="portfolio-browser">
                    <div class="browser-dots">
                        <span class="browser-dot red"></span>
                        <span class="browser-dot yellow"></span>
                        <span class="browser-dot green"></span>
                    </div>
                    <span class="browser-url">
                        <?php echo str_replace(['https://', 'http://', 'www.'], '', $project['url']); ?>
                        <i class="fas fa-external-link-alt" style="font-size: 0.7rem;"></i>
                    </span>
                </div>
                
                <!-- Image -->
                <div class="portfolio-image">
                    <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" loading="lazy">
                    <div class="portfolio-overlay">
                        <span class="view-project">
                            <i class="fas fa-external-link-alt"></i>
                            زيارة الموقع
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="portfolio-content">
                    <span class="portfolio-category"><?php echo $project['category']; ?></span>
                    <h3 class="portfolio-title"><?php echo $project['title']; ?></h3>
                    <p class="portfolio-description"><?php echo $project['description']; ?></p>
                    <div class="portfolio-tech">
                        <?php foreach($project['technologies'] as $tech): ?>
                        <span class="tech-tag"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Show More Button -->
        <div class="show-more-container" id="showMoreContainer">
            <button id="showMoreBtn">
                عرض المزيد <span id="hiddenCount"></span>
            </button>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="statistics-section" id="statistics">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">إحصائيات</span>
            <h2 class="section-title">أرقام <span class="highlight">تتحدث</span></h2>
        </div>
        
        <div class="statistics-grid">
            <div class="stat-card" data-aos="fade-up" data-aos-delay="0">
                <div class="stat-icon">
                    <i class="fas fa-code"></i>
                </div>
                <div class="stat-number" data-plus="true" data-target="80000">0</div>
                <div class="stat-label">سطر كود</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="stat-number" data-plus="true" data-target="10">0</div>
                <div class="stat-label">دولة حول العالم</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-number" data-plus="false" data-target="97" data-suffix="%">0%</div>
                <div class="stat-label">رضا العملاء</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number" data-plus="true" data-target="45">0</div>
                <div class="stat-label">عميل سعيد</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-number" data-plus="true" data-target="10">0</div>
                <div class="stat-label">سنوات خبرة</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="500">
                <div class="stat-icon">
                    <i class="fas fa-folder-open"></i>
                </div>
                <div class="stat-number" data-plus="true" data-target="65">0</div>
                <div class="stat-label">مشروع مكتمل</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">آراء العملاء</span>
            <h2 class="section-title">ماذا <span class="highlight">يقولون</span></h2>
            <p class="section-subtitle">تقييمات حقيقية من عملاء وثقوا فينا لبناء مشاريعهم الرقمية.</p>
        </div>
        
        <div class="testimonials-slider" data-aos="fade-up">
            <div class="testimonials-track">
                <?php foreach($testimonials as $testimonial): ?>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                        <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">"<?php echo $testimonial['text']; ?>"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span><?php echo $testimonial['initial']; ?></span>
                        </div>
                        <div class="author-info">
                            <h4><?php echo $testimonial['client_name']; ?></h4>
                            <span><?php echo $testimonial['client_role']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fa-regular fa-circle-question"></i> أسئلة شائعة</span>
            <h2 class="section-title">إجابات على <span class="highlight">أسئلتك</span></h2>
        </div>
        
        <div class="faq-wrapper">
            <!-- Left Side: Image -->
            <div class="faq-image-wrapper" data-aos="fade-left">
                <img src="assets/imgs/faq.png" alt="Faq Illustration" class="faq-img">
            </div>
            
            <!-- Right Side: Questions -->
            <div class="faq-content" data-aos="fade-right">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">
                        <span class="faq-text">كم مدة تنفيذ المشروع؟</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>تختلف المدة حسب حجم المشروع. المواقع التعريفية من 5-10 أيام، المتاجر الإلكترونية من 10-20 يوم، والأنظمة المعقدة قد تصل لشهر أو أكثر.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question">
                        <span class="faq-text">هل تقدم دعم فني بعد التسليم؟</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>نعم، أقدم دعم فني مجاني لمدة 3 أشهر بعد تسليم المشروع يشمل إصلاح الأخطاء والتعديلات البسيطة.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question">
                        <span class="faq-text">ما هي طرق الدفع المتاحة؟</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>أقبل التحويل البنكي، فودافون كاش، STC Pay, و PayPal. يتم دفع 50% مقدم والباقي عند التسليم.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question">
                        <span class="faq-text">هل تصمم مواقع متجاوبة مع الموبايل؟</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>بالطبع! جميع المواقع التي أطورها تكون متجاوبة 100% مع جميع الأجهزة والشاشات.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="faq-question">
                        <span class="faq-text">هل يمكنني تعديل الموقع بنفسي بعد التسليم؟</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>نعم، أستخدم ووردبريس كنظام إدارة محتوى سهل الاستخدام، وأقدم لك تدريب مجاني على إدارة موقعك.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
Contact Section (New Design)
========================================== -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag">تواصل</span>
            <h2 class="section-title">ابدأ <span class="highlight">مشروعك</span></h2>
            <p class="section-subtitle">عندك فكرة مشروع؟ تواصل معايا وهنحولها لواقع.</p>
        </div>

        <div class="contact-wrapper">
            <!-- Left Side: Contact Cards -->
            <div class="contact-info-cards" data-aos="fade-right">
                <div class="info-card">
                    <div class="icon-box whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="info-text">
                        <span class="label">واتساب</span>
                        <a href="https://wa.me/<?php echo str_replace(['+', ' '], '', DEV_PHONE); ?>" target="_blank"><?php echo DEV_PHONE; ?></a>
                    </div>
                    <div class="arrow"><i class="fas fa-arrow-up-left"></i></div>
                </div>

                <div class="info-card">
                    <div class="icon-box email">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <span class="label">إيميل</span>
                        <a href="mailto:Ahmed.201317@gmail.com">Ahmed.201317@gmail.com</a>
                    </div>
                    <div class="arrow"><i class="fas fa-arrow-up-left"></i></div>
                </div>

                <div class="info-card">
                    <div class="icon-box phone">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text">
                        <span class="label">تليفون</span>
                        <a href="tel:<?php echo str_replace(['+', ' '], '', DEV_PHONE); ?>"><?php echo DEV_PHONE; ?></a>
                    </div>
                    <div class="arrow"><i class="fas fa-arrow-up-left"></i></div>
                </div>
            </div>

            <!-- Right Side: Code Form -->
            <div class="contact-code-box" data-aos="fade-left">
                <div class="code-window-header">
                    <div class="dots">
                        <span class="dot red"></span>
                        <span class="dot yellow"></span>
                        <span class="dot green"></span>
                    </div>
                    <span class="filename">contact-form.tsx</span>
                </div>
                <form id="whatsappForm" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>الاسم الكامل</label>
                            <input type="text" id="name" placeholder="مثال: أحمد رضا" required>
                        </div>
                        <div class="form-group">
                            <label>البريد الإلكتروني</label>
                            <input type="email" id="email" placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>نوع المشروع</label>
                        <select id="projectType">
                            <option value="موقع إلكتروني">موقع إلكتروني</option>
                            <option value="متجر إلكتروني">متجر إلكتروني</option>
                            <option value="تطبيق موبايل">تطبيق موبايل</option>
                            <option value="نظام إدارة">نظام إدارة (ERP/CRM)</option>
                            <option value="أخرى">أخرى</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>الرسالة</label>
                        <textarea id="message" rows="4" placeholder="اكتب تفاصيل مشروعك هنا..." required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">
                        <i class="fab fa-whatsapp"></i> إرسال عبر واتساب
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>