<?php
if (!function_exists('timelineImg')) {
    function timelineImg($relPath) {
        $abs = __DIR__ . '/../' . $relPath;
        return $relPath . (is_file($abs) ? '?v=' . filemtime($abs) : '');
    }
}
?>
<section class="why-choose-us-section" id="why-choose-us">

    <div class="container">

        <!-- Section Header -->
        <div class="section-header text-center" data-scroll-reveal>
            <span class="section-eyebrow section-eyebrow--center">Trust &amp; Convenience</span>
            <h2 class="section-title">Why Choose Us</h2>
            <p class="section-subtitle">We're a local, family-owned team that treats your vehicle — and you — like ʻohana, with real convenience from drop-off to airport pickup.</p>
        </div>

        <!-- Hero photo panel -->
        <div class="wcu-hero" data-scroll-reveal>
            <div class="wcu-hero__photo">
                <img class="wcu-hero__img" src="<?php echo timelineImg('img/why-chooseus.png'); ?>" alt="Maui Vehicle Storage facility at sunset">
                <div class="wcu-hero__scrim"></div>
            </div>
            <div class="wcu-hero__panel glass-panel">
                <div class="wcu-hero__stat"><span>10</span>Years Serving Maui</div>
                <div class="wcu-hero__stat"><span>500+</span>Vehicles Stored</div>
                <div class="wcu-hero__stat"><span>2 Min</span>From OGG Airport</div>
                <div class="wcu-hero__stat"><span>100%</span>Family-Owned</div>
            </div>
        </div>

        <!-- Alternating Features Layout -->
        <div class="wcu-alternating-grid">

            <!-- Feature 1 -->
            <div class="wcu-row" data-scroll-reveal>
                <div class="wcu-content">
                    <span class="wcu-tag">01</span>
                    <h3 class="wcu-title">Airport Convenience</h3>
                    <p class="wcu-desc">Traveling should be seamless. Drop off your vehicle at our facility or let us meet you directly at OGG (Kahului Airport). We take the hassle out of airport parking by providing valet-level transitions.</p>
                    <ul class="wcu-list">
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Meet &amp; Greet Service</li>
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Flight Tracking Integration</li>
                    </ul>
                </div>
                <div class="wcu-photo-wrapper">
                    <div class="wcu-photo glass-panel">
                        <img src="<?php echo timelineImg('img/lot/vehicles-3.jpg'); ?>" alt="Airport convenience — vehicle on the road">
                        <span class="wcu-photo__badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16V14L13 9V3.5C13 3.23478 12.8946 2.98043 12.7071 2.79289C12.5196 2.60536 12.2652 2.5 12 2.5C11.7348 2.5 11.4804 2.60536 11.2929 2.79289C11.1054 2.98043 11 3.23478 11 3.5V9L3 14V16L11 13.5V19L8 20.5V22L12 21L16 22V20.5L13 19V13.5L21 16Z" stroke-linejoin="round"/></svg>
                            OGG Direct
                        </span>
                    </div>
                </div>
            </div>

            <!-- Feature 2 (Reversed) -->
            <div class="wcu-row reverse" data-scroll-reveal>
                <div class="wcu-content">
                    <span class="wcu-tag">02</span>
                    <h3 class="wcu-title">Covered Indoor Storage</h3>
                    <p class="wcu-desc">Maui's salt air and sun are tough on any vehicle. Our covered indoor storage keeps your car out of the elements, dust, and UV — an ideal choice for longer stays away from the island.</p>
                    <ul class="wcu-list">
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Covered &amp; Protected</li>
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Battery Tending (optional add-on)</li>
                    </ul>
                </div>
                <div class="wcu-photo-wrapper">
                    <div class="wcu-photo glass-panel">
                        <img src="<?php echo timelineImg('img/lot/storage-1.jpg'); ?>" alt="Covered indoor vehicle storage">
                        <span class="wcu-photo__badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            Premium Indoor
                        </span>
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="wcu-row" data-scroll-reveal>
                <div class="wcu-content">
                    <span class="wcu-tag">03</span>
                    <h3 class="wcu-title">Affordable Outdoor &amp; Fleet</h3>
                    <p class="wcu-desc">Need space for larger vehicles, boats, RVs, or a commercial fleet? Our fully fenced, brightly lit outdoor lots offer great value and easy access for vehicles of every size.</p>
                    <ul class="wcu-list">
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Fully Fenced &amp; Gated</li>
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Room for Trucks, Boats &amp; RVs</li>
                    </ul>
                </div>
                <div class="wcu-photo-wrapper">
                    <div class="wcu-photo glass-panel">
                        <img src="<?php echo timelineImg('img/lot/storage-4.jpg'); ?>" alt="Affordable outdoor and fleet storage">
                        <span class="wcu-photo__badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                            Fleet Ready
                        </span>
                    </div>
                </div>
            </div>

            <!-- Feature 4 (Reversed) -->
            <div class="wcu-row reverse" data-scroll-reveal>
                <div class="wcu-content">
                    <span class="wcu-tag">04</span>
                    <h3 class="wcu-title">Vehicle Delivery &amp; Professional Team</h3>
                    <p class="wcu-desc">Whether you need your car dropped off at the pier or washed before you arrive, our dedicated automotive professionals handle your vehicle with white-glove care.</p>
                    <ul class="wcu-list">
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Pier / Hotel Delivery</li>
                        <li><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="var(--color-gold)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Fully Insured Drivers</li>
                    </ul>
                </div>
                <div class="wcu-photo-wrapper">
                    <div class="wcu-photo glass-panel">
                        <img src="<?php echo timelineImg('img/lot/detailing-1.jpg'); ?>" alt="Maui Vehicle Storage professional team member">
                        <span class="wcu-photo__badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            White-Glove Care
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
