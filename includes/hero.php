<!-- Lottie Web Component -->
<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.14/dist/dotlottie-wc.js" type="module"></script>

<section class="award-hero-section" id="hero">
    
    <!-- Video Background -->
    <div class="hero-video-wrapper">
        <video autoplay loop muted playsinline class="hero-video">
            <source src="https://cdn.coverr.co/videos/coverr-driving-a-luxury-car-2713/1080p.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Animated Gradient Overlay -->
    <div class="hero-gradient-overlay"></div>

    <!-- Animated Light Particles Canvas -->
    <canvas id="hero-particles" class="hero-particles"></canvas>

    <!-- Parallax Shapes -->
    <div class="hero-shapes">
        <div class="shape shape-1 mouse-parallax" data-speed="2"></div>
        <div class="shape shape-2 mouse-parallax" data-speed="-1.5"></div>
        <div class="shape shape-3 mouse-parallax" data-speed="1"></div>
    </div>

    <div class="container hero-container">

        <!-- LEFT: Text Content -->
        <div class="hero-content">

            <!-- Headline -->
            <h1 class="hero-title slide-up-anim" style="animation-delay: 0.2s;">
                Maui's #1 Vehicle Storage
                <span class="text-gradient-gold type-text-wrapper"><span class="type-text" data-type="— Secure & Seamless."></span><span class="type-cursor"></span></span>
            </h1>

            <!-- Lottie Animation — shown BETWEEN heading & subtitle on mobile only -->
            <div class="hero-lottie-mobile slide-up-anim" style="animation-delay: 0.35s;" aria-hidden="true">
                <dotlottie-wc
                    src="https://lottie.host/275d6049-993c-4af2-a805-ae3646f50fe9/orM6XtE4e9.json"
                    autoplay loop
                    style="width:100%;max-width:280px;height:280px;display:block;margin:0 auto;">
                </dotlottie-wc>
            </div>

            <!-- Subheadline -->
            <p class="hero-subtitle slide-up-anim" style="animation-delay: 0.3s;">
                Climate-controlled storage, airport delivery &amp; white-glove care for your vehicle in Kahului, Maui.
            </p>

            <!-- CTAs -->
            <div class="hero-cta-group slide-up-anim" style="animation-delay: 0.4s;">
                <a href="#book" class="btn btn-primary btn-lg btn-glow btn-animated">
                    <span>Reserve Space</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                <a href="services.php" class="btn btn-glass btn-lg btn-animated">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0-2a8 8 0 100-16 8 8 0 000 16z" fill="currentColor"/></svg>
                    <span>Watch Video</span>
                </a>
            </div>

        </div>

        <!-- RIGHT: Lottie Animation — desktop only -->
        <div class="hero-lottie-wrapper slide-in-right" style="animation-delay: 0.3s;" aria-hidden="true">
            <dotlottie-wc
                src="https://lottie.host/275d6049-993c-4af2-a805-ae3646f50fe9/orM6XtE4e9.json"
                autoplay loop
                style="width:300px;height:300px;display:block;">
            </dotlottie-wc>
        </div>

        <!-- Trust Metrics — full width below car -->
        <div class="hero-trust-metrics-wrapper slide-up-anim" style="animation-delay: 0.6s;">
            <div class="hero-trust-metrics">
                <div class="metric">
                    <div class="metric-icon">🛡️</div>
                    <div class="metric-text">
                        <strong>24/7</strong>
                        <span>Armed Security</span>
                    </div>
                </div>
                <div class="metric-divider"></div>
                <div class="metric">
                    <div class="metric-icon">🌡️</div>
                    <div class="metric-text">
                        <strong>100%</strong>
                        <span>Climate Controlled</span>
                    </div>
                </div>
                <div class="metric-divider"></div>
                <div class="metric">
                    <div class="metric-icon">✈️</div>
                    <div class="metric-text">
                        <strong>OGG</strong>
                        <span>Airport Drop-off</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.hero-container -->

    <!-- Scroll Indicator -->
    <div class="hero-scroll-indicator">
        <span class="scroll-text">Scroll to explore</span>
        <div class="mouse-icon">
            <div class="wheel"></div>
        </div>
    </div>

    <!-- Wave Divider Removed -->

</section>
