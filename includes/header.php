<?php require_once 'config.php'; $ver = '1.18'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= BASE_URL; ?>favicon.ico" type="image/x-icon">
    <title><?php echo DEV_NAME; ?> | <?php echo SITE_NAME; ?> - مطور ويب متخصص</title>
    <meta name="description" content="أحمد رضا - مطور ويب متخصص، مؤسس كودلك">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?= $ver; ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?= $ver; ?>">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-wrapper">
            <!-- Right - Logo -->
            <div class="nav-right">
                <a href="index.php" class="logo">
                    <span class="logo-icon">_<</span>
                    <div class="logo-text">
                        <span class="logo-name">أحمد رضا</span>
                        <span class="logo-sub">CODLEK</span>
                    </div>
                </a>
            </div>
            
            <!-- Center - Menu -->
            <div class="nav-center">
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home" class="nav-link active">الرئيسية</a></li>
                    <li><a href="#about" class="nav-link">عني</a></li>
                    <li><a href="#services" class="nav-link">خدماتي</a></li>
                    <li><a href="#portfolio" class="nav-link">أعمالي</a></li>
                    <li><a href="#testimonials" class="nav-link">آراء العملاء</a></li>
                    <li><a href="#faq" class="nav-link">أسئلة شائعة</a></li>
                    <li><a href="#contact" class="nav-link">تواصل</a></li>
                    <li class="mobile-menu-social">
                        <a href="https://wa.me/<?php echo str_replace(['+', ' '], '', DEV_PHONE); ?>" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="mobile-menu-cta">
                        <a href="#contact" class="btn-start">
                            <span class="pulse-dot"></span>
                            ابدأ مشروعك
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Left - Social & CTA -->
            <div class="nav-left">
                <div class="nav-extras">
                    <button class="theme-toggle"><i class="fas fa-sun"></i></button>
                    <button class="lang-toggle"><span>EN</span><i class="fas fa-globe"></i></button>
                </div>
                <div class="nav-social">
                    <a href="https://wa.me/<?php echo str_replace(['+', ' '], '', DEV_PHONE); ?>" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                </div>
                <a href="#contact" class="btn-start">
                    <span class="pulse-dot"></span>
                    ابدأ مشروعك
                </a>
            </div>
            
            <div class="hamburger" id="hamburger" role="button" tabindex="0" aria-label="فتح القائمة" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>