<?php
$pageTitle = 'Home';
$metaDescription = 'Kahului\'s premier luxury vehicle storage. Offering secure indoor/outdoor storage, professional detailing, and seamless airport pickups in Maui.';
$canonicalUrl = '/index.php';

include __DIR__ . '/includes/header.php';
?>

<main class="main-content">
    <?php include __DIR__ . '/includes/hero.php'; ?>
    <?php include __DIR__ . '/includes/features-grid.php'; ?>
    <?php include __DIR__ . '/includes/timeline.php'; ?>
    <?php include __DIR__ . '/includes/why-choose-us.php'; ?>
    <?php include __DIR__ . '/includes/testimonials.php'; ?>
    <?php include __DIR__ . '/includes/gallery.php'; ?>
    <?php include __DIR__ . '/includes/pricing.php'; ?>
    <!-- We can still include parts of services on home, or link out -->
    <?php include __DIR__ . '/includes/services.php'; ?>
    <?php include __DIR__ . '/includes/faq.php'; ?>
</main>

<?php include __DIR__ . '/includes/cta-section.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
