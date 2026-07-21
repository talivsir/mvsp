<?php
$pageTitle = 'All Services';
$metaDescription = 'Explore all premium services offered by Maui Vehicle Storage, including car wash, detailing, airport pickup, and pier delivery.';
$canonicalUrl = '/services.php';

include __DIR__ . '/includes/header.php';
?>

<main class="main-content">

    <!-- ── Page hero ─────────────────────────────────── -->
    <section class="page-hero">
        <div class="page-hero__bg" aria-hidden="true"><span class="page-hero__grid"></span></div>
        <div class="container">
            <div class="page-hero__inner" data-scroll-reveal>
                <span class="page-hero__eyebrow">What We Offer</span>
                <h1 class="page-hero__title">Complete <span class="accent">Auto Solutions</span></h1>
                <p class="page-hero__subtitle">
                    Beyond secure storage, we offer a full suite of white-glove services so your vehicle
                    is always protected, pristine, and ready when you are.
                </p>
                <div class="page-hero__crumbs">
                    <a href="index.php">Home</a><span>/</span><span>Services</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Services grid ─────────────────────────────── -->
    <section class="page-section page-section--light">
        <div class="container">
            <div class="section-head-center" data-scroll-reveal>
                <span class="section-eyebrow section-eyebrow--center">Premium Services</span>
                <h2 class="page-heading">White-glove care, <span class="accent">start to finish</span></h2>
                <p class="page-lead">From ceramic-coat detailing to dockside delivery, every service is handled by our island professionals.</p>
            </div>

            <div class="svc-grid">

                <div class="svc-card svc-card--wide" data-scroll-reveal>
                    <div class="svc-card__media">
                        <img src="https://images.unsplash.com/photo-1601362840469-51e4d8d58785?auto=format&fit=crop&q=80&w=900" alt="Complete detailing" loading="lazy">
                        <span class="svc-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    </div>
                    <div class="svc-card__body">
                        <h3>Complete Detailing</h3>
                        <p>Interior deep-cleaning, exterior polish, and ceramic coating. Your vehicle returns feeling showroom-new.</p>
                        <a href="contact.php" class="svc-card__link">Book detailing <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

                <div class="svc-card" data-scroll-reveal>
                    <div class="svc-card__media">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=700" alt="Airport delivery" loading="lazy">
                        <span class="svc-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    </div>
                    <div class="svc-card__body">
                        <h3>Airport Delivery</h3>
                        <p>Step off your flight at OGG straight into your waiting vehicle. No shuttles, no lines.</p>
                        <a href="contact.php" class="svc-card__link">Arrange pickup <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

                <div class="svc-card" data-scroll-reveal>
                    <div class="svc-card__media">
                        <img src="https://images.unsplash.com/photo-1520340356584-f9917d1eea6f?auto=format&fit=crop&q=80&w=700" alt="Hand car wash" loading="lazy">
                        <span class="svc-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    </div>
                    <div class="svc-card__body">
                        <h3>Hand Car Wash</h3>
                        <p>Gentle hand wash with pH-balanced soaps and a spot-free rinse to protect your clear coat.</p>
                        <a href="contact.php" class="svc-card__link">Schedule wash <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

                <div class="svc-card" data-scroll-reveal>
                    <div class="svc-card__media">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&q=80&w=700" alt="Eco-friendly wash" loading="lazy">
                        <span class="svc-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54z" stroke-linejoin="round"/></svg></span>
                    </div>
                    <div class="svc-card__body">
                        <h3>Mālama Eco Wash</h3>
                        <p>Waterless, eco-friendly wash designed to protect Maui's fragile marine ecosystem.</p>
                        <a href="contact.php" class="svc-card__link">Go green <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

                <div class="svc-card" data-scroll-reveal>
                    <div class="svc-card__media">
                        <img src="https://images.unsplash.com/photo-1542272201-b1ca555f8505?auto=format&fit=crop&q=80&w=700" alt="Pier pickup" loading="lazy">
                        <span class="svc-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    </div>
                    <div class="svc-card__body">
                        <h3>Pier Pickup</h3>
                        <p>Arriving by sea? We'll have your vehicle waiting dockside at Kahului Harbor.</p>
                        <a href="contact.php" class="svc-card__link">Reserve pier drop <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

                <div class="svc-card svc-card--wide" data-scroll-reveal>
                    <div class="svc-card__media">
                        <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?auto=format&fit=crop&q=80&w=900" alt="Vehicle delivery" loading="lazy">
                        <span class="svc-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke-linejoin="round"/></svg></span>
                    </div>
                    <div class="svc-card__body">
                        <h3>Enclosed Vehicle Delivery</h3>
                        <p>Fully insured, enclosed flatbed transport for exotics and classics — or whenever you'd simply prefer zero added miles.</p>
                        <a href="contact.php" class="svc-card__link">Request transport <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Process ───────────────────────────────────── -->
    <section class="stats-band">
        <div class="container">
            <div class="section-head-center" data-scroll-reveal>
                <span class="section-eyebrow section-eyebrow--center" style="color:var(--color-gold);">How It Works</span>
                <h2 class="page-heading" style="color:#fff;">Four simple steps to peace of mind</h2>
            </div>
            <div class="process-grid">
                <div class="process-step" data-scroll-reveal><div class="process-step__num">01</div><h3>Reserve</h3><p>Pick your service and dates online or with a quick call — no long-term contracts.</p></div>
                <div class="process-step" data-scroll-reveal><div class="process-step__num">02</div><h3>Drop Off</h3><p>Bring your vehicle in, or let us coordinate airport, pier, or curbside pickup.</p></div>
                <div class="process-step" data-scroll-reveal><div class="process-step__num">03</div><h3>We Care</h3><p>Climate-controlled storage, security monitoring, and any detailing you've booked.</p></div>
                <div class="process-step" data-scroll-reveal><div class="process-step__num">04</div><h3>Delivery</h3><p>We return your car sparkling and ready — right where and when you need it.</p></div>
            </div>
        </div>
    </section>

    <!-- ── CTA ───────────────────────────────────────── -->
    <section class="page-cta">
        <div class="container">
            <div class="page-cta__card" data-scroll-reveal>
                <h2 class="page-cta__title">Let's get your vehicle <span class="accent">Maui-ready</span></h2>
                <p class="page-cta__sub">Tell us what you need and we'll build the perfect care plan for your car.</p>
                <div class="page-cta__actions">
                    <a href="contact.php" class="btn-gold">Schedule a Service <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <a href="index.php#pricing" class="btn-ghost-light">View Pricing</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
