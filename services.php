<?php
$pageTitle = 'All Services';
$metaDescription = 'Explore all premium services offered by Maui Vehicle Storage, including car wash, detailing, airport pickup, and pier delivery.';
$canonicalUrl = '/services.php';

include __DIR__ . '/includes/header.php';
?>

<main class="main-content">
    <section class="page-header" style="padding: 160px 0 40px;">
        <div class="container text-center" data-scroll-reveal>
            <h1 class="section-title">Complete Auto Solutions</h1>
            <p class="section-subtitle">Beyond storage. We offer comprehensive care for your vehicle.</p>
        </div>
    </section>

    <!-- We can reuse the includes/services.php bento grid here -->
    <?php include __DIR__ . '/includes/services.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
