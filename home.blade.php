<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جولي روز | JOLIE ROSE - المتجر الإلكتروني الفاخر</title>
    
    <!-- خط تجول + أيقونات FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-burgundy: #3b1124;
            --accent-gold: #c5a059;
            --soft-cream: #faf6f0;
            --dark-plum: #230814;
            --text-dark: #1f1f1f;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background-color: var(--soft-cream);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* 1. الشريط العلوي */
        .top-header {
            background-color: var(--dark-plum);
            color: #ffffff;
            padding: 12px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--accent-gold);
            position: relative;
            z-index: 100;
        }

        .logo-area {
            text-decoration: none;
            color: #ffffff;
            font-size: 24px;
            font-weight: 900;
            line-height: 1.1;
        }

        .logo-area span {
            display: block;
            font-size: 11px;
            color: var(--accent-gold);
            letter-spacing: 2px;
            font-weight: 400;
        }

        .search-container {
            display: flex;
            align-items: center;
            background: #ffffff;
            border-radius: 20px;
            padding: 6px 15px;
            width: 35%;
        }

        .search-container input {
            border: none;
            outline: none;
            width: 100%;
            padding: 4px 8px;
            font-size: 14px;
            text-align: right;
            color: #333;
        }

        .top-links {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .btn-whatsapp {
            background-color: #25d366;
            color: #ffffff;
            padding: 7px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: transform 0.2s, background-color 0.2s;
        }

        .btn-whatsapp:hover {
            background-color: #1eb954;
            transform: translateY(-2px);
        }

        .top-link-item {
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.3s;
        }

        .top-link-item:hover {
            color: var(--accent-gold);
        }

        .cart-icon-btn {
            background: none;
            border: none;
            color: #ffffff;
            font-size: 20px;
            cursor: pointer;
            position: relative;
            margin-right: 10px;
            display: flex;
            align-items: center;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            left: -10px;
            background-color: var(--accent-gold);
            color: var(--dark-plum);
            font-size: 11px;
            font-weight: bold;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* 2. القائمة الرئيسية */
        .main-navbar {
            background-color: #ffffff;
            padding: 14px 5%;
            display: flex;
            justify-content: center;
            gap: 35px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid #eee;
            flex-wrap: wrap;
        }

        .main-navbar a {
            text-decoration: none;
            color: var(--primary-burgundy);
            font-weight: 700;
            font-size: 15px;
            transition: color 0.3s;
        }

        .main-navbar a:hover {
            color: var(--accent-gold);
        }

        /* 3. البانر الرئيسي */
        .hero-section {
            margin: 25px 5%;
            background-color: #fcf8f2;
            border-radius: 18px;
            padding: 30px 40px;
            border: 1px solid #e8dec8;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            overflow: hidden;
        }

        .hero-content {
            flex: 1;
            max-width: 480px;
        }

        .hero-title {
            font-size: 32px;
            font-weight: 900;
            color: var(--primary-burgundy);
            line-height: 1.35;
            margin-bottom: 15px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #4a4a4a;
            margin-bottom: 25px;
            font-weight: 500;
        }

        .btn-shop-now {
            background-color: var(--primary-burgundy);
            color: #ffffff;
            padding: 13px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(59, 17, 36, 0.3);
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-shop-now:hover {
            background-color: var(--accent-gold);
            transform: translateY(-2px);
        }

        .gift-tagline {
            display: block;
            margin-top: 12px;
            font-size: 13px;
            color: #666;
        }

        .limited-timer-badge {
            margin-top: 25px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: #ffffff;
            border: 1px solid var(--accent-gold);
            color: var(--primary-burgundy);
            padding: 8px 18px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 700;
        }

        .hero-image-wrapper {
            flex: 1.2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image-wrapper img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        /* 4. قسم المنتجات */
        .products-section {
            margin: 40px 5%;
        }

        .section-header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-right: 4px solid var(--accent-gold);
            padding-right: 12px;
        }

        .section-title {
            font-size: 24px;
            color: var(--primary-burgundy);
            font-weight: 900;
        }

        .products-count {
            font-size: 14px;
            color: #777;
            font-weight: 500;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: #ffffff;
            border-radius: 12px;
            border: 1px solid #eee;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .new-tag {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--accent-gold);
            color: #fff;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: bold;
            z-index: 2;
        }

        .product-card img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 12px;
            background-color: #f9f5f0;
        }

        .product-card h3 {
            font-size: 15px;
            color: var(--primary-burgundy);
            margin-bottom: 8px;
            height: 42px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-card .price {
            font-size: 16px;
            font-weight: bold;
            color: var(--accent-gold);
            margin-bottom: 12px;
        }

        .btn-add-cart {
            background-color: var(--primary-burgundy);
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 13px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.2s;
        }

        .btn-add-cart:hover {
            background-color: var(--accent-gold);
        }

        /* 5. قسم الفروع */
        .branches-section {
            margin: 60px 5% 40px 5%;
            padding-top: 30px;
            border-top: 2px dashed #e8dec8;
            text-align: center;
        }

        .branches-title {
            font-size: 26px;
            font-weight: 900;
            color: var(--primary-burgundy);
            margin-bottom: 10px;
        }

        .branches-subtitle {
            font-size: 15px;
            color: #666;
            margin-bottom: 30px;
        }

        .branches-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .branch-card {
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.06);
            border: 1px solid #e8dec8;
            transition: transform 0.3s ease;
            position: relative;
        }

        .branch-card:hover {
            transform: translateY(-5px);
        }

        .branch-img-container {
            width: 100%;
            height: 220px;
            overflow: hidden;
            position: relative;
            background-color: #f9f5f0;
        }

        .branch-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .branch-card:hover img {
            transform: scale(1.05);
        }

        .branch-info {
            padding: 18px;
            text-align: right;
            background-color: #ffffff;
        }

        .branch-info h3 {
            font-size: 18px;
            color: var(--primary-burgundy);
            margin-bottom: 6px;
            font-weight: 700;
        }

        .branch-info p {
            font-size: 13px;
            color: #666;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 4px;
        }

        .btn-map-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 14px;
            padding: 8px 16px;
            background-color: var(--soft-cream);
            color: var(--primary-burgundy);
            border: 1px solid var(--accent-gold);
            border-radius: 20px;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-map-link:hover {
            background-color: var(--accent-gold);
            color: #ffffff;
        }

        /* 6. القائمة الجانبية للسلة */
        .cart-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
            display: none;
        }

        .cart-drawer {
            position: fixed;
            top: 0;
            left: -400px;
            width: 380px;
            max-width: 90vw;
            height: 100%;
            background-color: #ffffff;
            z-index: 999;
            box-shadow: 5px 0 25px rgba(0,0,0,0.15);
            transition: left 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .cart-drawer.open {
            left: 0;
        }

        .cart-header {
            background-color: var(--dark-plum);
            color: #ffffff;
            padding: 18px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-header h3 {
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .close-cart-btn {
            background: none;
            border: none;
            color: #ffffff;
            font-size: 20px;
            cursor: pointer;
        }

        .cart-items {
            padding: 20px;
            overflow-y: auto;
            flex-grow: 1;
        }

        .empty-cart {
            text-align: center;
            color: #888;
            margin-top: 50px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .cart-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .cart-item-details h4 {
            font-size: 14px;
            color: var(--primary-burgundy);
            margin-bottom: 4px;
        }

        .cart-item-details .item-price {
            font-size: 13px;
            color: var(--accent-gold);
            font-weight: bold;
        }

        .qty-controls {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 5px;
        }

        .qty-btn {
            background: #eee;
            border: none;
            width: 24px;
            height: 24px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .remove-item-btn {
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
            font-size: 14px;
        }

        .cart-footer {
            padding: 20px;
            border-top: 1px solid #eee;
            background-color: var(--soft-cream);
        }

        .total-price-box {
            display: flex;
            justify-content: space-between;
            font-size: 16px;
            font-weight: bold;
            color: var(--primary-burgundy);
            margin-bottom: 15px;
        }

        .btn-send-whatsapp {
            background-color: #25d366;
            color: #ffffff;
            border: none;
            width: 100%;
            padding: 14px;
            border-radius: 25px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
            transition: background-color 0.2s, transform 0.2s;
        }

        .btn-send-whatsapp:hover {
            background-color: #1eb954;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .top-header {
                flex-direction: column;
                gap: 10px;
                padding: 15px;
            }
            .search-container {
                width: 100%;
            }
            .hero-section {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .hero-content {
                max-width: 100%;
            }
        }
        /* كود كسر الحاويات وإجبار الخريطة على عرض الشاشة الكامل 100% */
        .footer-single-map {
            width: 100vw !important;
            position: relative !important;
            left: 50% !important;
            right: 50% !important;
            margin-left: -50vw !important;
            margin-right: -50vw !important;
            margin-top: 50px !important;
            margin-bottom: 0 !important;
            padding: 0 !important;
            clear: both !important;
            display: block !important;
        }

        .footer-single-map iframe {
            width: 100% !important;
            height: 450px !important;
            border: 0 !important;
            display: block !important;
        }

        @media (max-width: 768px) {
            .footer-single-map iframe {
                height: 300px !important;
            }
        }
    </style>
</head>
<body>

 <!-- 1. الشريط العلوي -->
<header class="top-header">
    <a href="#" class="logo-area">
        جولي روز
        <span>JOLIE ROSE</span>
    </a>

    <div class="search-container">
        <i class="fa-solid fa-magnifying-glass" style="color: #888;"></i>
        <input type="text" id="search-input" onkeyup="filterProducts()" placeholder="ابحثي عن كريم، عطر، حقيبة، أو مكياج...">
    </div>

    <div class="top-links">
        <!-- تم تعديل الرقم إلى 972598942479 -->
        <a href="https://wa.me/970598942479" target="_blank" class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i> تواصل عبر واتساب
        </a>
        <a href="#products" class="top-link-item">عروض حصرية</a>
        <a href="#products" class="top-link-item">باقات هدايا</a>
        
        <button class="cart-icon-btn" onclick="toggleCart(true)">
            <i class="fa-solid fa-bag-shopping"></i>
            <span class="cart-badge" id="cart-badge-count">0</span>
        </button>
    </div>
</header>

    <!-- 2. القائمة الرئيسية -->
    <nav class="main-navbar">
        <a href="#products">الكريمات والعناية</a>
        <a href="#products">الحقائب الفاخرة</a>
        <a href="#products">المكياج والكوزمتكس</a>
        <a href="#products">العطور والباقات</a>
        <a href="#branches">فروعنا في السعودية</a>
    </nav>

    <!-- 3. البانر الرئيسي - استخدام الصورة المحلية hero-banner.jpg -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">تألّقي بالفخامة واكتشفي سحركِ الخاص.</h1>
            <p class="hero-subtitle">تشكيلة مميزة من 50 منتج فاخر بخصومات حصرية!</p>
            
            <a href="#products" class="btn-shop-now">تسوقي الآن</a>
            
            <span class="gift-tagline">تسوقي الآن واحصلي على هدية مجانية مع طلبكِ!</span>
            
            <div class="limited-timer-badge">
                <i class="fa-regular fa-clock"></i> عرض لفترة محدودة
            </div>
        </div>

        <div class="hero-image-wrapper">
            <img src="{{ asset('images/hero-banner.jpg') }}" alt="جولي روز" onerror="handleImgError(this)">
        </div>
    </section>

    <!-- 4. قسم المنتجات -->
    <section class="products-section" id="products">
        <div class="section-header-flex">
            <h2 class="section-title">تشكيلة الفخامة الكاملة</h2>
            <span class="products-count" id="products-count-label">إجمالي المنتجات: 50 منتج</span>
        </div>
        <div class="products-grid" id="products-container">
            <!-- يتم تحميل المنتجات بواسطة JavaScript -->
        </div>
    </section>

    <!-- 5. قسم الفروع - استخدام الصور المحلية الثلاث (khobar-branch, jeddah-branch, riyadh-branch) -->
    <section class="branches-section" id="branches">
        <h2 class="branches-title">فروعنا الفاخرة في المملكة العربية السعودية</h2>
        <p class="branches-subtitle">زوري معارضنا الفاخرة لتجربة تسوق راقية وشخصية فريدة</p>

        <div class="branches-grid">
            <!-- فرع الخبر -->
            <div class="branch-card">
                <div class="branch-img-container">
                    <img src="images/khobar-branch.jpg" alt="معرض جولي روز - الخبر" onerror="handleImgError(this)">
                </div>
                <div class="branch-info">
                    <h3>فرع الخبر - الظهران مول</h3>
                    <p><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> الخبر، حي الدوحة الجنوبية، البوابة 1</p>
                    <p><i class="fa-solid fa-clock" style="color: var(--accent-gold);"></i> يومياً من الساعة 10:00 صباحاً - 11:00 مساءً</p>
                    <a href="https://maps.google.com/?q=Mall+of+Dhahran+Khobar+Saudi+Arabia" target="_blank" class="btn-map-link">
                        <i class="fa-solid fa-map-location-dot"></i> موقع الفرع على خرائط جوجل
                    </a>
                </div>
            </div>

            <!-- فرع الرياض -->
            <div class="branch-card">
                <div class="branch-img-container">
                    <img src="images/riyadh-branch.jpg" alt="معرض جولي روز - الرياض" onerror="handleImgError(this)">
                </div>
                <div class="branch-info">
                    <h3>فرع الرياض - السنتريا مول</h3>
                    <p><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> الرياض، طريق الملك فهد، الدور الأول</p>
                    <p><i class="fa-solid fa-clock" style="color: var(--accent-gold);"></i> يومياً من الساعة 10:00 صباحاً - 11:00 مساءً</p>
                    <a href="https://maps.google.com/?q=Centria+Mall+Riyadh+Saudi+Arabia" target="_blank" class="btn-map-link">
                        <i class="fa-solid fa-map-location-dot"></i> موقع الفرع على خرائط جوجل
                    </a>
                </div>
            </div>

            <!-- فرع جدة -->
            <div class="branch-card">
                <div class="branch-img-container">
                    <img src="images/jeddah-branch.jpg" alt="فرع جدة" onerror="handleImgError(this)">
                </div>
                <div class="branch-info">
                    <h3>فرع جدة - ردسي مول</h3>
                    <p><i class="fa-solid fa-location-dot" style="color: var(--accent-gold);"></i> جدة، طريق الملك عبدالعزيز، البوابة 3</p>
                    <p><i class="fa-solid fa-clock" style="color: var(--accent-gold);"></i> يومياً من الساعة 10:00 صباحاً - 11:00 مساءً</p>
                    <a href="https://maps.google.com/?q=Red+Sea+Mall+Jeddah+Saudi+Arabia" target="_blank" class="btn-map-link">
                        <i class="fa-solid fa-map-location-dot"></i> موقع الفرع على خرائط جوجل
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. السلة الجانبية -->
    <div class="cart-overlay" id="cart-overlay" onclick="toggleCart(false)"></div>

    <div class="cart-drawer" id="cart-drawer">
        <div class="cart-header">
            <h3><i class="fa-solid fa-bag-shopping"></i> سلة التسوق</h3>
            <button class="close-cart-btn" onclick="toggleCart(false)"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="cart-items" id="cart-items-list"></div>

        <div class="cart-footer">
            <div class="total-price-box">
                <span>المجموع الكلي:</span>
                <span id="cart-total-price">0 ر.س</span>
            </div>
            <button class="btn-send-whatsapp" onclick="sendOrderToWhatsApp()">
                <i class="fa-brands fa-whatsapp"></i> إرسال الطلب عبر واتساب
            </button>
        </div>
    </div>

    <!-- JavaScript لإدارة المنتجات والسلة -->
    <script>
       const WHATSAPP_NUMBER = "970598942479";

        // صورة بديلة في حال التعذر
        const SVG_FALLBACK = "data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 400 400'><rect width='100%' height='100%' fill='%23f9f5f0'/><text x='50%' y='45%' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='22' font-weight='bold' fill='%233b1124'>JOLIE ROSE</text><text x='50%' y='58%' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='14' fill='%23c5a059'>جولي روز الفاخرة</text></svg>";

        function handleImgError(img) {
            img.onerror = null; 
            img.src = SVG_FALLBACK;
        }

        // قائمة الـ 50 منتج
        // قائمة الـ 50 منتج (جميع الأسعار بالريال السعودي ر.س)
const productsList = [
    { id: 1, name: "بوكس مكياج من ماركة كيكو ميلانو", price: 210, image: "images/KIKO Milano Makeup Set.jpg" },
    { id: 2, name: "ماء ميسيلار لإزالة المكياج وتنظيف البشرة من غارنييه", price: 230, image: "images/KIKO Milano.jpg" },
    { id: 3, name:" بخاخ معطر ومزيل عرق للجسم - للجنسين (للرجال والنساء) - 200 مل", price: 15, image: "images/Perfumed Body Spray Deodorant.jpg" },
    { id: 4, name:"شامبو أوليف هيركير للترطيب الفائق بزيت الزيتون (للشعر الجاف والتالف)", price: 15, image: "images/Olive Haircare Extra Hydrating Shampoo.jpg" },
    { id: 5, name:" طقم مناكير (طلاء أظافر) كيرو - ألوان موضة متنوعة (24 حبة - 16 مل)", price: 40, image: "images/CAIRUO Nail Polish Set - Fashion Color.jpg" },
    { id: 6, name:" باليت ظلال العيون (أيشادو) احترافي من أونيو (12 لون)", price: 45, image: "images/ONEYIOO 12-Color Eyeshadow Palette.jpg" },
    { id: 7, name:" باليت إضاءة ومورد خدود (هايلايتر وبلاشر) من أونيو (4 ألوان)", price: 90, image: "images/ONEYIOO The Blush Highlighter & Blusher Palette.jpg" },
    { id: 8, name:" بودرة سحب لون (تفتيح) الشعر ميو هير - سوبر وايت (500 مل)", price: 30, image: "images/Mio Hair Bleaching Powder - Super White.jpg" },
    { id: 9, name:" عطر ستيفان همبرت لوكاس - فينوم إنكارنات (عطر الأفعى الحمراء)", price: 950, image: "images/Stéphane Humbert Lucas 777 - Venom Incarnat (50 ml).jpg" },
    { id: 10, name:" طقم العناية للمتزوجين فيكتوريا سيكريت (3 في 1: نكهات قابلة للأكل، عطر، وزيت مساج)", price: 40, image: "images/photo_5442861632041196963_y.jpg" },
    { id: 11, name:" مجموعة أقلام أحمر شفاه (روج قلم) من شي جلام", price: 60, image: "images/SHEGLAM Lip Crayon .jpg" },
    { id: 12, name:" باليت كونتور وكونسيلر إتش دي من ميس فرايداي (6 ألوان - إخفاء، تصحيح، كونتور)", price: 80, image: "images/MISS FRIDAY HD Contour Palette - 6 Colors.jpg" },
    { id: 13, name:" باليت ظلال العيون ميني دياموند بيوتي - بورن ذيس واي (كولد سمولدر نيودز)", price: 25, image: "images/Nudes - Mini Eye Shadow Palette.jpg" },
    { id: 14, name:" طقم هدايا إيف سان لوران - بلاك أوبيوم (مجموعة عطور ميني ومكياج فاخرة)", price: 35, image: "images/Yves Saint Laurent (YSL) Black Opium Luxury Beauty Gift Box Set.jpg" },
    { id: 15, name:" حقيبة ديور جولي بحجم ميني (Dior Jolie) - لون أبيض/لاتيه جلد الخروف بنمط كاناج", price: 700, image: "images/Dior Jolie Top Handle Mini Bag (Latte  White Cannage Lambskin).jpg" },
    { id: 16, name:" حقيبة يد وكتف نسائية باللون الأحمر مزينة بطبعة وردة بيضاء", price:80, image: "images/Women's Red Floral Handbag & Shoulder Bag (White Rose Print).jpg" },
    { id: 17, name:" حقيبة يد وكتف نسائية باللون البنفسجي (لافندر) مزودة بسلسلة ذهبية", price: 60, image: "images/Women's PurpleLavender Quilted Chain Crossbody & Shoulder Bag.jpg" },
    { id: 18, name:"حقيبة يد نسائية بتصميم هلالي (نصف دائري) - أبيض منقط بأسود مع مقبض حلقة ذهبية ملتوية", price: 100, image: "images/Women's Polka Dot Half-Moon Handbag (Gold Twist Ring Handle).jpg" },
    { id: 19, name:" حقيبة ظهر نسائية باللون الأسود مضلعة (شنطة ظهر خفيفة من النايلون المقاوم للماء)", price: 70, image: "images/Women's Black Quilted Waterproof Nylon Backpack  Casual Travel Daypack.jpg" },
    { id: 20, name:" حقيبة سهرة نسائية مرصعة بالكريستال والاستراس الفضي (شنطة كلتش وكتف للمناسبات)", price: 90, image: "images/Women's Silver Crystal Rhinestone Evening Clutch & Crossbody Bag.jpg" },
    { id: 21, name:" حقيبة سهرة نسائية بلون وردي براق (جليتر) بمقبض معدني ومزينة ببروش كريستال", price: 80, image: "images/Women's Pink Glitter Top Handle Evening Bag with Crystal Brooch.jpg" },
    { id: 22, name:" حقيبة كتف وكروس نسائية بلونين متناسقين (أوف وايت وبيج) مع سلسلة ذهبية", price: 310, image: "images/Women's Two-Tone Colorblock Flap Crossbody & Shoulder Chain Bag.jpg" },
    { id: 23, name:" حقيبة كروس نسائية صغيرة بحزام عريض (شنطة كتف جلد عملية متعددة الألوان)", price: 50, image: "images/Women's Small PU Leather Crossbody Bag with Wide Adjustable Strap.jpg" },
    { id: 24, name:" حقيبة عمل وكتف رجالية من الجلد الطبيعي 100% (صنع يدوي من AM Group)", price: 180, image: "images/AM Group Handmade 100% Genuine Leather Men's Briefcase & Messenger Bag.jpg" },
    { id: 25, name:" عطر مسك الطهارة الأصلي - المسك الأبيض (بخاخ 50 مل)", price: 30, image: "images/Musk Al-Tahara White Musk Perfume (50ml) - FATTO Perfum Koz.jpg" },
    { id: 26, name:" عطر شوبارد روز ملكي - أو دو بارفيوم (حجم 80 مل)", price: 500, image: "images/Chopard Rose Malaki Eau de Parfum (80ml  2.7 fl.oz).jpg" },
    { id: 27, name:" عطر تروبيكال جاسمين (ياسمين استوائي) - أو دو بارفيوم (حجم 30 مل)", price: 30, image: "images/Tropical Jasmine Eau De Parfum (30ml  1.01 fl. oz).jpg" },
    { id: 28, name:" عطر سينشوال فانيلا من ميزون الهمبرا - أو دو بارفيوم (حجم 80 مل)", price: 100, image: "images/Maison Alhambra Sensual Vanilla Eau De Parfum (80ml).jpg" },
    { id: 29, name:" بخاخ مثبت المكياج لوكا - لمسة نهائية ندية ديوي (حجم 60 مل)", price: 20, image: "images/LOCA 16-Hour Hold Setting Spray - Dewy Finish (60 ml).jpg" },
    { id: 30, name:" معطر ورذاذ للجسم نسائي يربريتي جل  من لا روز دي فأن (حجم 250 مل)", price: 40, image: "images/La Rose De Faan Pretty Girl Body Splash (250ml).jpg" },
    { id: 31, name:" كيس ورقي فاخر للتغليف والهدايا مطبوع مخصص (مع فيونكة ستان سوداء)", price: 100, image: " images/Luxury Custom Printed Paper Gift Bag with Ribbon Bow & Handles.jpg" },
    { id: 32, name:" طقم هدايا عطور ودهن عود فاخر (بوكس خشبي جلدي برتقالي)", price: 400, image: "images/Luxury VIP Oriental Perfume & Oud Gift Set (Orange Wooden Leather Box).jpg" },
    { id: 33, name:" بوكس هدايا نسائي فاخر من ZIVXX (عطر، ساعة، طقم إكسسوارات وشوكولاتة فيريرو روشيه)", price: 250, image: "images/ZIVXX Luxury Women's Gift Box (Perfume, Watch, Jewelry Set & Ferrero Rocher Chocolates).jpg" },
    { id: 34, name:" بوكس هدايا رجالي فاخر من ZIVXX (عطر، ساعة، محفظة جلد وشوكولاتة فيريرو روشيه)", price: 220, image: "images/ZIVXX Luxury Men's Gift Box (Perfume, Watch, Leather Wallet & Ferrero Rocher Chocolates).jpg"},
    { id: 35, name:" صندوق/كيس هدايا فاخر بتصميم حقيبة يد مع ربطة وشاح حريري (تويلي) بألوان خريفية", price: 35, image: "images/Luxury Handbag Style Gift Box  Paper Bag with Floral Scarf Bow & Handles.jpg" },
    { id: 36, name:" بوكس هدايا تخرج نسائي فاخر (حقيبة كتف، طقم ساعة وإكسسوارات، عطر وتنسيق ورد أحمر)", price: 330, image: "images/Luxury Graduation Women's Gift Box Set (Handbag, Watch & Jewelry Set, Perfume & Red Roses).jpg" },
    { id: 37, name:" زيت الجسم بالورد من بيت الورد الطائفي (سائل فائق الترطيب - حجم 50 مل)", price: 30, image: " images/Taif Rose House Rose Body Oil - Ultra-Moisturizing Fluid (50ml).jpg" },
    { id: 38, name: "كونسيلر لإخفاء العيوب بتغطية كاملة", price: 110, image: "images/CELIA Cosmetics French Fragrance Complete Body Care Set (5 Pieces).jpg" },
    { id: 39, name:" غسول الوجه الطبيعي باللبان والكركديه مع فرشاة السيليكون من نور أورجانيك (حجم 200 مل)", price: 105, image: "images/NOOR Organic Frankincense and Hibiscus Natural Face Wash with Silicone Brush (200ml).jpg" },
    { id: 40, name:"مجموعة العناية بالشعر ريتش بيرفيوم بالكولاجين من كوندال (شامبو، معالج، وبخاخ معطر للشعر - برائحة زهر الكرز)", price: 210, image: "images/Kundal Rich Perfume Collagen Hair Care Set (Shampoo, Treatment & Hair Mist - Cherry & Blossom).jpg" },

 
];

        let cart = [];

        function renderProducts(list) {
            const container = document.getElementById("products-container");
            const countLabel = document.getElementById("products-count-label");
            
            container.innerHTML = "";
            countLabel.textContent = `إجمالي المنتجات المعروضة: ${list.length} منتج`;

            if (list.length === 0) {
                container.innerHTML = `<p style="grid-column: 1/-1; text-align: center; color: #888; font-size: 16px; padding: 40px 0;">لا توجد منتجات تطابق البحث.</p>`;
                return;
            }

            list.forEach(product => {
                const card = document.createElement("div");
                card.className = "product-card";
                card.innerHTML = `
                    ${product.isNew ? '<span class="new-tag">جديد</span>' : ''}
                    <img src="${product.image}" alt="${product.name}" onerror="handleImgError(this)">
                    <h3>${product.name}</h3>
                    <div class="price">${product.price} ر.س</div>
                    <button class="btn-add-cart" onclick="addToCart(${product.id})">
                        <i class="fa-solid fa-cart-plus"></i> إضافة للسلة
                    </button>
                `;
                container.appendChild(card);
            });
        }

        function addToCart(productId) {
            const product = productsList.find(p => p.id === productId);
            const existItem = cart.find(item => item.id === productId);

            if (existItem) {
                existItem.qty += 1;
            } else {
                cart.push({ ...product, qty: 1 });
            }

            updateCartUI();
            toggleCart(true);
        }

        function changeQty(productId, delta) {
            const item = cart.find(i => i.id === productId);
            if (!item) return;

            item.qty += delta;
            if (item.qty <= 0) {
                removeFromCart(productId);
            } else {
                updateCartUI();
            }
        }

        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartUI();
        }

        function updateCartUI() {
            const cartItemsList = document.getElementById("cart-items-list");
            const badgeCount = document.getElementById("cart-badge-count");
            const totalPriceEl = document.getElementById("cart-total-price");

            cartItemsList.innerHTML = "";

            let totalQty = 0;
            let totalPrice = 0;

            if (cart.length === 0) {
                cartItemsList.innerHTML = `<div class="empty-cart"><i class="fa-solid fa-basket-shopping" style="font-size: 40px; margin-bottom: 10px; color: #ccc;"></i><br>السلة فارغة حالياً</div>`;
            } else {
                cart.forEach(item => {
                    totalQty += item.qty;
                    totalPrice += item.price * item.qty;

                    const itemDiv = document.createElement("div");
                    itemDiv.className = "cart-item";
                    itemDiv.innerHTML = `
                        <img src="${item.image}" alt="${item.name}" onerror="handleImgError(this)">
                        <div class="cart-item-details">
                            <h4>${item.name}</h4>
                            <div class="item-price">${item.price * item.qty} ر.س</div>
                            <div class="qty-controls">
                                <button class="qty-btn" onclick="changeQty(${item.id}, -1)">-</button>
                                <span>${item.qty}</span>
                                <button class="qty-btn" onclick="changeQty(${item.id}, 1)">+</button>
                            </div>
                        </div>
                        <button class="remove-item-btn" onclick="removeFromCart(${item.id})">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    `;
                    cartItemsList.appendChild(itemDiv);
                });
            }

            badgeCount.textContent = totalQty;
            totalPriceEl.textContent = `${totalPrice} ر.س`;
        }

        function toggleCart(open) {
            const drawer = document.getElementById("cart-drawer");
            const overlay = document.getElementById("cart-overlay");
            if (open) {
                drawer.classList.add("open");
                overlay.style.display = "block";
            } else {
                drawer.classList.remove("open");
                overlay.style.display = "none";
            }
        }

        function filterProducts() {
            const query = document.getElementById("search-input").value.trim().toLowerCase();
            const filtered = productsList.filter(p => p.name.toLowerCase().includes(query));
            renderProducts(filtered);
        }

        function sendOrderToWhatsApp() {
            if (cart.length === 0) {
                alert("السلة فارغة! يرجى إضافة منتجات أولاً.");
                return;
            }

            let message = "مرحباً *جولي روز Jolie Rose* 👋\nأود إتمام الطلب التالي:\n\n";
            let grandTotal = 0;

            cart.forEach((item, index) => {
                const itemTotal = item.price * item.qty;
                grandTotal += itemTotal;
                message += `${index + 1}. *${item.name}*\n   - الكمية: ${item.qty}\n   - السعر: ${itemTotal} ر.س\n`;
            });

            message += `\n💵 *المجموع الكلي:* ${grandTotal} ر.س\n\nيرجى تزويدي بتفاصيل التوصيل والدفع! ✨`;

            const encodedMessage = encodeURIComponent(message);
            const whatsappUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodedMessage}`;

            window.open(whatsappUrl, "_blank");
        }

        document.addEventListener("DOMContentLoaded", () => {
            renderProducts(productsList);
        });
    </script>
</body>
<!-- خريطة فقط ممتدة على كامل عرض الشاشة -->
<!-- خريطة موقع السعودية ممتدة على كامل عرض الشاشة -->
<div class="footer-single-map">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.484196191416!2d46.6752957!3d24.7135517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sar!2ssa!4v1700000000000!5m2!1sar!2ssa" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
</html>