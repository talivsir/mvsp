<?php /* ============================================================
   HERO SECTION — Complete replacement (old award-hero removed)
   ============================================================ */ ?>

<!-- Google Fonts: Anton (display headline) + Poppins (body) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<section class="sc-hero" id="hero" aria-label="Hero — Exclusive Sports Car">

    <div class="sc-hero__card">

        <!-- Red triangle accent pinned bottom-left -->
        <div class="sc-hero__triangle" aria-hidden="true"></div>

        <!-- Subtle wave shape (SVG) sweeping lower-left -->
        <svg class="sc-hero__wave" viewBox="0 0 600 220" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,220 C80,160 160,80 280,110 C400,140 480,60 600,40 L600,220 Z" fill="rgba(0,0,0,0.03)"/>
        </svg>

        <!-- ── LEFT COLUMN ─────────────────────────────── -->
        <div class="sc-hero__left">

            <p class="sc-hero__eyebrow">New in Stock</p>

            <h1 class="sc-hero__headline">
                Exclusive<br>Sports Car
            </h1>

            <h2 class="sc-hero__subheading">Sports cars advanced features.</h2>

            <p class="sc-hero__body">
                Sports cars offer advanced features and high-quality
                materials for a more comfortable driving experience.
            </p>

            <div class="sc-hero__cta-row">
                <a href="#book" class="sc-hero__btn sc-hero__btn--primary">Buy Now</a>
                <a href="services.php" class="sc-hero__btn sc-hero__btn--outline">See more</a>
            </div>

        </div><!-- /.sc-hero__left -->

        <!-- ── RIGHT COLUMN ────────────────────────────── -->
        <div class="sc-hero__right">

            <!-- Car image + mirror reflection -->
            <div class="sc-hero__car-wrap">
                <img
                    id="heroCar"
                    src="assets/images/sports-car.png"
                    alt="Exclusive red sports car"
                    class="sc-hero__car-img"
                    draggable="false"
                >
                <!-- Mirror reflection (CSS handles the flip + fade) -->
                <div class="sc-hero__reflection" aria-hidden="true">
                    <img
                        src="assets/images/sports-car.png"
                        alt=""
                        class="sc-hero__car-img sc-hero__car-img--reflect"
                        id="heroCarReflect"
                        draggable="false"
                    >
                </div>
            </div>

            <!-- Color picker -->
            <div class="sc-hero__picker">
                <span class="sc-hero__picker-label">Choose Color:</span>
                <div class="sc-hero__swatches" role="radiogroup" aria-label="Car color">
                    <button
                        class="sc-hero__swatch sc-hero__swatch--active"
                        data-color="#E01A22"
                        data-hue="0"
                        style="background:#E01A22"
                        aria-label="Red"
                        aria-checked="true"
                        role="radio"
                    ></button>
                    <button
                        class="sc-hero__swatch"
                        data-color="#E7B4B4"
                        data-hue="340"
                        style="background:#E7B4B4"
                        aria-label="Rose"
                        aria-checked="false"
                        role="radio"
                    ></button>
                    <button
                        class="sc-hero__swatch"
                        data-color="#D9D9D9"
                        data-hue="0"
                        data-sat="0"
                        style="background:#D9D9D9"
                        aria-label="Light gray"
                        aria-checked="false"
                        role="radio"
                    ></button>
                    <button
                        class="sc-hero__swatch"
                        data-color="#6b6b6b"
                        data-hue="0"
                        data-sat="0"
                        data-dark="1"
                        style="background:#6b6b6b"
                        aria-label="Medium gray"
                        aria-checked="false"
                        role="radio"
                    ></button>
                    <button
                        class="sc-hero__swatch"
                        data-color="#1a1a1a"
                        data-hue="0"
                        data-sat="0"
                        data-dark="2"
                        style="background:#1a1a1a"
                        aria-label="Black"
                        aria-checked="false"
                        role="radio"
                    ></button>
                </div>
            </div><!-- /.sc-hero__picker -->

        </div><!-- /.sc-hero__right -->

    </div><!-- /.sc-hero__card -->

</section><!-- /.sc-hero -->
