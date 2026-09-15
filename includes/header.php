<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Dynamic SEO Tags -->
    <?php 
        $current_title = isset($pageTitle) ? $pageTitle : '';
        $current_desc = isset($metaDescription) ? $metaDescription : '';
        $current_url = isset($canonicalUrl) ? $canonicalUrl : '';
        echo get_seo_tags($current_title, $current_desc, $current_url); 
    ?>
    
    <!-- Favicon Support -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/site.webmanifest">
    <meta name="theme-color" content="#0F4C81">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800;900&family=Cormorant+Garamond:ital,wght@1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <?php if (!empty($preloadHeroBanner)): ?>
    <!-- Preload the first hero banner so the crossfade never shows a blank frame -->
    <link rel="preload" as="image" href="img/banner-1.jpg" fetchpriority="high">
    <?php endif; ?>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Global Site Background — one continuous animated dark surface behind every section -->
    <div class="site-bg" aria-hidden="true">
        <div class="site-bg__glow site-bg__glow--gold"></div>
        <div class="site-bg__glow site-bg__glow--blue"></div>
        <div class="site-bg__glow site-bg__glow--gold2"></div>
        <div class="site-bg__grid"></div>
    </div>

    <!-- Premium Preloader -->
    <div id="preloader" class="preloader">
        <div class="loader-content">
            <img class="loader-logo" src="assets/images/mvs-logo.png" alt="Maui Vehicle Storage">
            <div class="loader-line"></div>
        </div>
    </div>

    <!-- Custom Cursor -->
    <div class="cursor-dot" id="cursorDot"></div>
    <div class="cursor-ring" id="cursorRing"></div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress-container">
        <div class="scroll-progress-bar" id="scrollBar"></div>
    </div>
    
    <header class="site-header transparent-top" id="siteHeader">
        <div class="container header-inner">
            <!-- Logo -->
            <a href="index.php" class="logo animated-logo">
                <img
                    src="assets/images/mvs-logo.png"
                    alt="Maui Vehicle Storage"
                    class="nav-logo-img"
                >
            </a>

            <!-- Desktop Navigation Include -->
            <div class="desktop-nav-wrapper">
                <?php $is_mobile = false; include __DIR__ . '/navigation.php'; ?>
            </div>

            <!-- Header Actions (Search, Phone, Book) -->
            <div class="header-actions">
                <button class="action-icon-btn search-btn" aria-label="Search">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 21L16.65 16.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <a href="tel:<?php echo BIZ_PHONE; ?>" class="action-icon-btn phone-btn" aria-label="Call Us">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 16.92V20.92C22.0032 21.1986 21.9022 21.4673 21.7163 21.6749C21.5303 21.8824 21.2721 22.0142 20.99 22.05C16.8927 21.597 13.011 20.1557 9.63001 17.83C6.48312 15.6888 3.86435 12.9189 2.01001 9.69998C1.55404 6.27376 1.83478 2.85327 2.83001 2.98998C3.12351 2.70932 3.48625 2.5312 3.86797 2.47957C4.24968 2.42795 4.63478 2.50493 4.97001 2.69998L8.60001 4.54998C8.88725 4.69345 9.12458 4.90847 9.28929 5.17415C9.454 5.43983 9.54044 5.74716 9.54001 6.05998V9.38998C9.54001 9.65824 9.65427 9.91485 9.85501 10.09C10.8841 11.2333 12.0465 12.2472 13.31 13.11C13.504 13.2505 13.7383 13.3155 13.97 13.3C14.28 13.3 14.58 13.19 14.82 12.99L17.52 10.99C17.7818 10.7963 18.0935 10.6865 18.4173 10.6744C18.7412 10.6622 19.0628 10.7482 19.34 10.92L23.01 13.32C23.2721 13.4912 23.4791 13.7229 23.6069 13.9877C23.7346 14.2524 23.7781 14.5406 23.73 14.82L22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="contact.php" class="btn btn-primary btn-animated header-cta">
                    <span>Book Now</span>
                </a>
                
                <!-- Animated Hamburger -->
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                    <div class="hamburger">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                </button>
            </div>
        </div>
        
        <!-- Mobile Slide Menu Overlay -->
        <div class="mobile-slide-menu" id="mobileSlideMenu">
            <div class="mobile-menu-inner">
                <?php $is_mobile = true; include __DIR__ . '/navigation.php'; ?>
                <div class="mobile-menu-footer">
                    <a href="contact.php" class="btn btn-primary btn-full btn-animated"><span>Book Now</span></a>
                    <div class="mobile-contact-info mt-4">
                        <p><a href="tel:<?php echo BIZ_PHONE; ?>"><?php echo BIZ_PHONE_DISPLAY; ?></a></p>
                        <p><a href="mailto:<?php echo BIZ_EMAIL; ?>"><?php echo BIZ_EMAIL; ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
