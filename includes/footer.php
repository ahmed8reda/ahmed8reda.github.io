<!-- ==========================================
Footer (New Design)
========================================== -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand -->
            <div class="footer-col brand-col">
                <div class="footer-logo">
                    <span class="icon">&lt;_/&gt;</span>
                    <div class="text">
                        <h3>أحمد رضا</h3>
                        <span>CODLEK</span>
                    </div>
                </div>
                <p class="footer-desc">مطور ويب متخصص ومؤسس كودلك، أساعد الشركات والأفراد في بناء حضور رقمي قوي واحترافي.</p>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>روابط سريعة</h4>
                <ul>
                    <li><a href="#about">عني</a></li>
                    <li><a href="#services">خدماتي</a></li>
                    <li><a href="#portfolio">أعمالي</a></li>
                    <li><a href="#testimonials">آراء العملاء</a></li>
                    <li><a href="#contact">تواصل</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-col">
                <h4>الخدمات</h4>
                <ul>
                    <li><a href="#">تطوير المواقع</a></li>
                    <li><a href="#">تطبيقات الويب</a></li>
                    <li><a href="#">تصميم UI/UX</a></li>
                    <li><a href="#">متاجر إلكترونية</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-col">
                <h4>تواصل معي</h4>
                <ul class="contact-list">
                    <li>
                        <a href="mailto:<?php echo DEV_EMAIL; ?>">
                            <i class="far fa-envelope"></i> 
                            <?php echo DEV_EMAIL; ?>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:<?php echo str_replace(['+', ' '], '', DEV_PHONE); ?>" style="unicode-bidi: bidi-override;direction: ltr;">
                            <?php echo DEV_PHONE; ?>
                        </a>
                    </li>
                    <li><span><i class="fas fa-map-marker-alt"></i> <?php echo DEV_LOCATION; ?></span></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2026 أحمد رضا. صُنع بـ <i class="fas fa-heart"></i> وكوب قهوة ☕</p>
            <button id="scrollTopBtn" class="scroll-top">
                <i class="fas fa-arrow-up"></i> العودة للأعلى
            </button>
        </div>
    </div>
</footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/<?php echo str_replace(['+', ' '], '', DEV_PHONE); ?>" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Main JS -->
    <script src="assets/js/main.js?v=<?= $ver; ?>"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>