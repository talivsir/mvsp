<?php /* ============================================================
   HERO SECTION — Luxury & Classic Car Storage (full redesign)
   Old sports-car "Buy Now" hero fully removed and replaced.
   ============================================================ */ ?>

<section class="lux-hero" id="hero" aria-label="Hero — Luxury &amp; Classic Car Storage">

    <!-- Ambient background layers -->
    <div class="lux-hero__bg" aria-hidden="true">
        <span class="lux-hero__glow lux-hero__glow--gold"></span>
        <span class="lux-hero__glow lux-hero__glow--blue"></span>
        <span class="lux-hero__grid"></span>
    </div>

    <div class="lux-hero__inner container">

        <!-- ── LEFT: Copy ─────────────────────────────── -->
        <div class="lux-hero__content">

            <span class="lux-hero__eyebrow">
                <span class="lux-hero__eyebrow-dot"></span>
                Kahului &middot; Maui
            </span>

            <h1 class="lux-hero__title">
                A Sanctuary for Your
                <span class="lux-hero__title-accent">Classic&nbsp;Car</span>
            </h1>

            <p class="lux-hero__subtitle">
                Climate-controlled, fully insured and monitored around the clock &mdash;
                Maui&rsquo;s most trusted home for luxury and classic vehicles, with
                showroom detailing and airport delivery on demand.
            </p>

            <div class="lux-hero__actions">
                <a href="contact.php" class="lux-hero__btn lux-hero__btn--primary">
                    Reserve Your Space
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="services.php" class="lux-hero__btn lux-hero__btn--ghost">
                    Explore Services
                </a>
            </div>

            <ul class="lux-hero__trust" aria-label="Why owners trust us">
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Insured &amp; Secured
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3v2M12 19v2M3 12h2M19 12h2M6 6l1.5 1.5M16.5 16.5L18 18M6 18l1.5-1.5M16.5 7.5L18 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/></svg>
                    Climate-Controlled
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v5l3.5 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    24/7 Monitored
                </li>
            </ul>

        </div><!-- /.lux-hero__content -->

        <!-- ── RIGHT: Car visual ──────────────────────── -->
        <div class="lux-hero__visual">
            <div class="lux-hero__car-glow" aria-hidden="true"></div>

            <!-- Light 3D glass frame holding the (transparent) car image -->
            <div class="lux-hero__stage">
                <img
                    src="assets/images/sports-car.png"
                    alt="Luxury car in secure Maui storage"
                    class="lux-hero__car"
                    draggable="false"
                    fetchpriority="high"
                >

                <!-- Floating glass stat card -->
                <div class="lux-hero__stat">
                    <span class="lux-hero__stat-num">500<span>+</span></span>
                    <span class="lux-hero__stat-label">Vehicles kept<br>in pristine condition</span>
                </div>
            </div>
        </div><!-- /.lux-hero__visual -->

    </div><!-- /.lux-hero__inner -->

</section><!-- /.lux-hero -->
