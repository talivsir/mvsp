<?php
/**
 * Maui Vehicle Storage - Global Configuration & SEO Helper
 */

// Site Defaults
define('SITE_NAME', 'Maui Vehicle Storage');
define('BASE_URL', 'https://mauivehiclestorage.com'); // Replace with actual domain
define('DEFAULT_DESC', 'Premium vehicle storage, detailing, and delivery services in Kahului, Maui. Indoor, outdoor, and fleet storage available.');
define('DEFAULT_IMG', BASE_URL . '/assets/images/og-image.jpg');

// Local Business Schema Data
$business_schema = [
    "@context" => "https://schema.org",
    "@type" => "AutoStorage",
    "name" => SITE_NAME,
    "image" => DEFAULT_IMG,
    "@id" => BASE_URL,
    "url" => BASE_URL,
    "telephone" => "+18085550198",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "123 Main Street",
        "addressLocality" => "Kahului",
        "addressRegion" => "HI",
        "postalCode" => "96732",
        "addressCountry" => "US"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 20.8893,
        "longitude" => -156.4729
    ],
    "openingHoursSpecification" => [
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => [
            "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"
        ],
        "opens" => "08:00",
        "closes" => "17:00"
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
