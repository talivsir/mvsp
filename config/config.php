<?php
/**
 * Maui Vehicle Storage - Global Configuration & SEO Helper
 */

// Site Defaults
define('SITE_NAME', 'Maui Vehicle Storage');
define('BASE_URL', 'https://mauivehiclestorage.com'); // Replace with actual domain
define('DEFAULT_DESC', 'Family-owned vehicle storage in Central Maui, about two minutes from Kahului Airport (OGG). Secure indoor & outdoor storage for cars, trucks, boats & RVs, plus airport delivery, curbside pickup, washing, and detailing.');
define('DEFAULT_IMG', BASE_URL . '/assets/images/og-image.jpg');

// Business contact constants (single source of truth)
define('BIZ_PHONE', '+18085759008');
define('BIZ_PHONE_DISPLAY', '(808) 575-9008');
define('BIZ_EMAIL', 'mauivehiclestorage@gmail.com');

// --- Enquiry form / SMTP settings ---
// SMTP_PASSWORD must be a Gmail "App Password" (16 characters, generated at
// myaccount.google.com/apppasswords with 2-Step Verification on) — NOT the
// normal Gmail login password, which Google will reject for SMTP.
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'desiuncle901@gmail.com');
define('SMTP_PASSWORD', ''); // <-- set the Gmail App Password here before going live
define('SMTP_FROM_EMAIL', 'desiuncle901@gmail.com');
define('SMTP_FROM_NAME', SITE_NAME);
define('ENQUIRY_TO_EMAIL', 'desiuncle901@gmail.com');

// Local Business Schema Data
$business_schema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => SITE_NAME,
    "description" => "Family-owned and operated vehicle storage in Central Maui, about two minutes from Kahului Airport. Secure indoor and outdoor storage for cars, trucks, boats, and RVs, plus airport delivery, curbside pickup, car washing, and detailing.",
    "image" => DEFAULT_IMG,
    "@id" => BASE_URL,
    "url" => BASE_URL,
    "telephone" => BIZ_PHONE,
    "email" => BIZ_EMAIL,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Kahului",
        "addressRegion" => "HI",
        "postalCode" => "96732",
        "addressCountry" => "US"
    ],
    "areaServed" => [
        "@type" => "AdministrativeArea",
        "name" => "Maui, Hawaii"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 20.8893,
        "longitude" => -156.4729
    ],
    "openingHoursSpecification" => [
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "08:00",
            "closes" => "16:00"
        ],
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => "Saturday",
            "description" => "By appointment — call for service"
        ]
    ],
    "priceRange" => "$$"
];

/**
 * Generate SEO Meta Tags
 * 
 * @param string $page_title Custom title for the page
 * @param string $page_desc Custom description
 * @param string $page_url The canonical URL path (e.g. '/about.php')
 */
function get_seo_tags($page_title = '', $page_desc = '', $page_url = '') {
    global $business_schema;
    
    $title = $page_title ? $page_title . ' | ' . SITE_NAME : SITE_NAME . ' | Premium Auto Solutions in Kahului';
    $desc = $page_desc ? $page_desc : DEFAULT_DESC;
    $url = $page_url ? BASE_URL . '/' . ltrim($page_url, '/') : BASE_URL;
    
    $tags = '
    <title>' . htmlspecialchars($title) . '</title>
    <meta name="description" content="' . htmlspecialchars($desc) . '">
    <link rel="canonical" href="' . htmlspecialchars($url) . '">
    
    <!-- OpenGraph -->
    <meta property="og:title" content="' . htmlspecialchars($title) . '">
    <meta property="og:description" content="' . htmlspecialchars($desc) . '">
    <meta property="og:type" content="website">
    <meta property="og:url" content="' . htmlspecialchars($url) . '">
    <meta property="og:image" content="' . DEFAULT_IMG . '">
    <meta property="og:site_name" content="' . SITE_NAME . '">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="' . htmlspecialchars($title) . '">
    <meta name="twitter:description" content="' . htmlspecialchars($desc) . '">
    <meta name="twitter:image" content="' . DEFAULT_IMG . '">
    
    <!-- Schema.org Local Business -->
    <script type="application/ld+json">
    ' . json_encode($business_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '
    </script>
    ';
    
    return $tags;
}
?>
