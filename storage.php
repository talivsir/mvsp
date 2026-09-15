<?php
$pageTitle = 'Vehicle Storage Options';
$metaDescription = 'Covered indoor and affordable outdoor vehicle storage in Central Maui, minutes from Kahului Airport (OGG). Room for cars, trucks, boats, RVs, and commercial fleets.';
$canonicalUrl = '/storage.php';

include __DIR__ . '/includes/header.php';
?>

<main class="main-content">

    <!-- ── Page hero ─────────────────────────────────── -->
    <section class="page-hero">
        <div class="page-hero__bg" aria-hidden="true"><span class="page-hero__grid"></span></div>
        <div class="container">
            <div class="page-hero__inner" data-scroll-reveal>
                <span class="page-hero__eyebrow">Storage Options</span>
                <h1 class="page-hero__title">Space for <span class="accent">Every Vehicle</span></h1>
                <p class="page-hero__subtitle">
                    Covered indoor and affordable outdoor storage in Central Maui, minutes from Kahului Airport —
                    with room for cars, trucks, boats, RVs, and commercial fleets.
                </p>
                <div class="page-hero__crumbs">
                    <a href="index.php">Home</a><span>/</span><span>Storage</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Storage options ───────────────────────────── -->
    <section class="page-section page-section--light">
        <div class="container">
            <div class="feature-grid">

                <div class="feature-card" data-scroll-reveal>
                    <div class="feature-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke-linejoin="round"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
                    <h3>Covered Indoor Storage</h3>
                    <p>Our covered indoor storage keeps your vehicle out of the sun, salt air, and rain — a great choice for longer stays away from the island.</p>
                    <ul class="about-story__list" style="margin-top:18px;">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg> Out of the elements</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg> Dust &amp; UV protection</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg> Optional battery tending</li>
                    </ul>
                </div>

                <div class="feature-card" data-scroll-reveal>
                    <div class="feature-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="10" rx="2"/><path d="M3 11h18" stroke-linecap="round"/></svg></div>
                    <h3>Outdoor &amp; Fleet Storage</h3>
                    <p>Fully fenced, brightly lit outdoor space that's affordable and easy to access — perfect for larger trucks, RVs, boats, and commercial fleets.</p>
                    <ul class="about-story__list" style="margin-top:18px;">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg> Fully fenced &amp; gated</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg> Room for boats, RVs &amp; fleets</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg> Unlimited in/out during hours</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- ── CTA ───────────────────────────────────────── -->
    <section class="page-cta">
        <div class="container">
            <div class="page-cta__card" data-scroll-reveal>
                <h2 class="page-cta__title">Find the right space for <span class="accent">your vehicle</span></h2>
                <p class="page-cta__sub">Tell us what you're storing and we'll recommend the best indoor or outdoor option.</p>
                <div class="page-cta__actions">
                    <a href="contact.php" class="btn-gold">Request a Quote <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <a href="index.php#gallery" class="btn-ghost-light">See Our Lot</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
