<?php
// تحديد BASE_URL بشكل آمن
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$script_dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

// تعريف الثوابت بشكل آمن لتجنّب تحذير "already defined" عند تضمين الملف أكثر من مرة
if (!defined('PRO_URL')) {
    define('PRO_URL', $script_dir);
}
if (!defined('BASE_URL')) {
    define('BASE_URL', $protocol . '://' . $host . $script_dir . '/');
}

// Site Configuration
define('SITE_NAME', 'كودلك');
define('SITE_URL', 'https://codlek.com');
define('DEV_NAME', 'أحمد رضا');
define('DEV_EMAIL', 'Ahmed.201317@gmail.com');
define('DEV_PHONE', '+966 57 052 0415');
define('DEV_LOCATION', 'القطيف، المملكة العربية السعودية');
define('DEV_EXPERIENCE', '10+');

// Social Links
$social_links = [
    'github' => '#',
    'linkedin' => '#',
    'instagram' => '#',
    'facebook' => '#'
];

// Skills Data
$skills = [
    'programming' => [
        ['name' => 'HTML / CSS', 'level' => 95],
        ['name' => 'PHP / MySQL', 'level' => 90],
        ['name' => 'WordPress', 'level' => 95],
        ['name' => 'WooCommerce', 'level' => 90],
        ['name' => 'React', 'level' => 75],
        ['name' => 'Laravel', 'level' => 70],
        ['name' => 'Node.js', 'level' => 65],
        ['name' => 'Tailwind CSS', 'level' => 80]
    ],
    'design' => [
        ['name' => 'Figma (UI/UX)', 'level' => 85],
        ['name' => 'Photoshop', 'level' => 90],
        ['name' => 'Elementor', 'level' => 95],
        ['name' => 'Shopify', 'level' => 80]
    ],
    'marketing' => [
        ['name' => 'SEO', 'level' => 85],
        ['name' => 'Google Ads', 'level' => 75],
        ['name' => 'Meta Ads', 'level' => 75],
        ['name' => 'Google Analytics', 'level' => 80]
    ]
];

// Services Data
$services = [
    [
        'id' => 1,
        'title' => 'تطوير المواقع',
        'description' => 'تصميم وتطوير مواقع احترافية متجاوبة مع جميع الأجهزة باستخدام ووردبريس وتقنيات الويب الحديثة.',
        'icon' => 'code',
        'ico-type' => '',
        'status' => 'مطلوب'
    ],
    [
        'id' => 2,
        'title' => 'متاجر إلكترونية',
        'description' => 'بناء متاجر إلكترونية متكاملة مع أنظمة الدفع والشحن وإدارة المنتجات باستخدام WooCommerce.',
        'icon' => 'shopping-cart',
        'ico-type' => '',
        'status' => 'مطلوب'
    ],
    [
        'id' => 3,
        'title' => 'تصميم UI/UX',
        'description' => 'تصميم واجهات مستخدم جذابة وتجارب مستخدم سلسة تزيد من معدل التحويل والتفاعل.',
        'icon' => 'palette',
        'ico-type' => '',
        'status' => ''
    ],
    [
        'id' => 4,
        'title' => 'تحسين محركات البحث',
        'description' => 'تحسين ظهور موقعك في نتائج البحث وزيادة الزيارات العضوية بتقنيات SEO المتقدمة.',
        'icon' => 'search',
        'ico-type' => '',
        'status' => ''
    ],
    [
        'id' => 5,
        'title' => 'أنظمة إدارية',
        'description' => 'بناء أنظمة إدارة متكاملة مخصصة لاحتياجات عملك مع لوحات تحكم احترافية.',
        'icon' => 'database',
        'ico-type' => '',
        'status' => ''
    ],
    [
        'id' => 6,
        'title' => 'إضافات ووردبريس',
        'description' => 'تطوير إضافات ووردبريس مخصصة من الصفر لتلبية متطلبات عملك الفريدة.',
        'icon' => 'wordpress',
        'ico-type' => '-brands',
        'status' => ''
    ],
    [
        'id' => 7,
        'title' => 'هوية بصرية',
        'description' => 'شعارات وهويات وتصميمات تعكس هوية علامتك التجارية',
        'icon' => 'pen-nib',
        'status' => ''
    ],
    [
        'id' => 8,
        'title' => 'تسويق رقمي',
        'description' => 'حملات فيسبوك وجوجل وإدارة السوشيال ميديا',
        'icon' => 'chart-line',
        'status' => ''
    ]
];

// Projects Data
$projects = [
    [
        'id' => 1,
        'title' => 'دجلة تورز',
        'category' => 'سياحة وسفر',
        'category_slug' => 'tourism',
        'description' => 'موقع شركة سياحة مع نظام حجز فنادق ورحلات متكامل',
        'image' => 'assets/imgs/d-t.png',
        'technologies' => ['SEO', 'Booking System', 'WordPress'],
        'url' => 'https://deglatours.com'
    ],
    [
        'id' => 2,
        'title' => 'متجر سبكتر',
        'category' => 'متجر إلكتروني',
        'category_slug' => 'e-commerce',
        'description' => 'متجر متخصص في مستحضرات التجميل والعناية بالبشرة',
        'image' => 'assets/imgs/spec.png',
        'technologies' => ['PHP', 'WordPress', 'WooCommerce'],
        'url' => 'https://ispektra.com'
    ],
    [
        'id' => 3,
        'title' => 'متجر سابا',
        'category' => 'متجر إلكتروني',
        'category_slug' => 'e-commerce',
        'description' => 'متجر أزياء وتصاميم مستخدم أنيقة ومميزة',
        'image' => 'assets/imgs/saba.png',
        'technologies' => ['UI/UX', 'Payment Gateway', 'WooCommerce'],
        'url' => 'https://saba-design.com'
    ],
    [
        'id' => 4,
        'title' => 'كيه فت فيتنس',
        'category' => 'موقع تعريفي',
        'category_slug' => 'custom-design',
        'description' => 'موقع نادي رياضي متكامل مع برامج تدريب ولياقة',
        'image' => 'assets/imgs/kfit.png',
        'technologies' => ['Custom Design', 'Elementor', 'WordPress'],
        'url' => 'https://kfit-fitness.com'
    ],
    [
        'id' => 5,
        'title' => 'عقارتكم',
        'category' => 'عقارات',
        'category_slug' => 'real-estate',
        'description' => 'منصة عقارية متكاملة للبحث عن الأراضي والعقارات مع فلاتر بحث متقدمة.',
        'image' => 'assets/imgs/aqartcom.png',
        'technologies' => ['Maps', 'Real Estate', 'WordPress'],
        'url' => 'https://aqartcom.com'
    ]
    ,
    [
        'id' => 6,
        'title' => 'خصلة ولون',
        'category' => 'حجز خدمات',
        'category_slug' => 'booking',
        'description' => 'موقع صالون تجميل متكامل مع نظام حجز مواعيد وعرض خدمات الجمال والعناية.',
        'image' => 'assets/imgs/strandcolor.png',
        'technologies' => ['WooCommerce', 'Booking', 'WordPress'],
        'url' => 'https://strandcolor.com'
    ]
    ,
    [
        'id' => 7,
        'title' => 'ميت موت',
        'category' => 'مطاعم',
        'category_slug' => 'restaurants',
        'description' => 'موقع مطعم لحوم مدخنة فاخر في تركيا مع قائمة طعام وفروع متعددة.',
        'image' => 'assets/imgs/meatmoot.png',
        'technologies' => ['Premium', 'Multi-Language', 'WordPress'],
        'url' => 'https://meatmoot.com.tr/ar'
    ]
    ,
    [
        'id' => 8,
        'title' => 'متجر 2B',
        'category' => 'متجر إلكتروني',
        'category_slug' => 'e-commerce',
        'description' => 'متجر إلكتروني متكامل للعطور ومنتجات العناية في السعودية مع عروض وتصنيفات متعددة ونظام دفع إلكتروني.',
        'image' => 'assets/imgs/2b.png',
        'technologies' => ['Payment', 'E-Commerce', 'Salla'],
        'url' => 'https://2b-sa.com'
    ]
    ,
    [
        'id' => 9,
        'title' => 'كلينك برو - نظام إدارة عيادات',
        'category' => 'أنظمة إدارة',
        'category_slug' => 'dashboard',
        'description' => 'نظام إدارة عيادات متكامل يشمل إدارة المواعيد، المرضى، الزيارات، الحسابات، التقارير ولوحة تحكم شاملة.',
        'image' => 'assets/imgs/clinic-pro.png',
        'technologies' => ['REST API', 'Dashboard', 'Node.JS', 'React'],
        'url' => '#'
    ]
    ,
    [
        'id' => 10,
        'title' => 'Stone Beam - نظام إدارة مقاولات',
        'category' => 'أنظمة إدارة',
        'category_slug' => 'dashboard',
        'description' => 'نظام إدارة متكامل لشركة مقاولات وهدم، يشمل إدارة المشاريع، المبيعات، الموارد البشرية، التقارير المالية ولوحة تحكم احترافية.',
        'image' => 'assets/imgs/stonebeam.png',
        'technologies' => ['Dashboard', 'REST API', 'MySQL', 'PHP', 'React'],
        'url' => '#'
    ]
    ,
    [
        'id' => 11,
        'title' => 'هوزن للنقل',
        'category' => 'موقع تعريفي',
        'category_slug' => 'custom-design',
        'description' => 'موقع شركة نقل بضائع بين المدن داخل السعودية مع عرض الأسطول والخدمات.',
        'image' => 'assets/imgs/huzen.png',
        'technologies' => ['Modern Design', 'Tailwind', 'React'],
        'url' => '#'
    ]
    ,
    [
        'id' => 12,
        'title' => 'Advantage Sport Agency',
        'category' => 'موقع تعريفي',
        'category_slug' => 'custom-design',
        'description' => 'موقع وكالة رياضية احترافي مع لوحة تحكم كاملة لإدارة اللاعبين، المدربين، المعسكرات والوسائط المتعددة.',
        'image' => 'assets/imgs/advantage-sport.png',
        'technologies' => ['Multi-Language', 'Dashboard', 'WordPress'],
        'url' => 'https://advantagesport.org'
    ]
    ,
    [
        'id' => 13,
        'title' => 'Glow Cosmetic',
        'category' => 'موقع تعريفي',
        'category_slug' => 'custom-design',
        'description' => 'موقع تعريفي لشركة مستحضرات تجميل علمية متقدمة، يدعم 3 لغات مع تصميم احترافي وعرض خدمات وتقنيات.',
        'image' => 'assets/imgs/glowcosmetic.png',
        'technologies' => ['UI / UX', 'Languages 3', 'WordPress'],
        'url' => 'https://glowcosmetic.net'
    ]
    ,
    [
        'id' => 14,
        'title' => 'SB Demolition',
        'category' => 'موقع تعريفي',
        'category_slug' => 'custom-design',
        'description' => 'موقع شركة هدم وإزالة احترافية في الإمارات مع عرض المشاريع والخدمات.',
        'image' => 'assets/imgs/sbdemolition.png',
        'technologies' => ['English', 'SEO', 'WordPress'],
        'url' => 'https://sbdemolition.ae'
    ]
];

// Testimonials Data
$testimonials = [
    [
        'id' => 1,
        'client_name' => 'محمد العتيبي',
        'client_role' => 'صاحب متجر إلكتروني',
        'rating' => 5,
        'text' => 'تجربة ممتازة من البداية للنهاية الموقع طلع أحسن من اللي كنت متخيله وزاد مبيعاتي بشكل ملحوظ',
        'initial' => 'م'
    ],
    [
        'id' => 2,
        'client_name' => 'سارة الحربي',
        'client_role' => 'مديرة شركة سياحة',
        'rating' => 5,
        'text' => 'احترافية عالية في التعامل والتنفيذ. نظام الحجز اللي عملوه لنا وفر علينا وقت ومجهود كبير',
        'initial' => 'س'
    ],
    [
        'id' => 3,
        'client_name' => 'خالد المنصوري',
        'client_role' => 'صاحب مطعم',
        'rating' => 5,
        'text' => 'من أفضل المطورين اللي اشتغلت معاهم. سرعة في التنفيذ وجودة في الشغل ودعم فني ممتاز',
        'initial' => 'خ'
    ],
    [
        'id' => 4,
        'client_name' => 'نورة السيد',
        'client_role' => 'صاحبة براند أزياء',
        'rating' => 5,
        'text' => 'المتجر طلع تصميم أنيق جداً وسهل الاستخدام. العملاء يمدحوا تجربة الشراء كل يوم',
        'initial' => 'ن'
    ],
    [
        'id' => 5,
        'client_name' => 'عبدالله الشمري',
        'client_role' => 'مدير تسويق',
        'rating' => 5,
        'text' => 'شغل SEO ممتاز. موقعنا بقي يظهر في اول نتائج جوجل وزادت الزيارات 3 أضعاف',
        'initial' => 'ع'
    ],
    [
        'id' => 6,
        'client_name' => 'فاطمة الزهراني',
        'client_role' => 'صاحبة عيادة تجميل',
        'rating' => 5,
        'text' => 'تصميم الموقع عكس هوية العيادة بشكل رائع. الحجز اونلاين سهل على عملائنا كثير',
        'initial' => 'ف'
    ]
];
?>