<?php
$pageTitle = 'Contact Us';
$metaDescription = 'Contact Maui Vehicle Storage in Kahului. Get a quote for indoor/outdoor storage, car wash, detailing, or airport pickup services.';
$canonicalUrl = '/contact.php';

include __DIR__ . '/includes/header.php';
?>

<main class="main-content">
    <section class="page-header" style="padding: 160px 0 0px;">
        <div class="container text-center" data-scroll-reveal>
            <!-- We will let the include handle the title styling to match the previous design -->
        </div>
    </section>

    <!-- Reuse the beautiful contact form include -->
    <?php include __DIR__ . '/includes/contact.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
