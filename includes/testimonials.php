<section class="testimonials-section" id="testimonials">
    <!-- Abstract Particles/Glow in background -->
    <div class="testimonials-bg-glow glow-1"></div>
    <div class="testimonials-bg-glow glow-2"></div>

    <div class="container">
        
        <!-- Section Header -->
        <div class="section-header text-center" data-scroll-reveal>
            <h2 class="section-title">Client Experiences</h2>
            <p class="section-subtitle">See what our premium members have to say about Kahului's finest vehicle sanctuary.</p>
        </div>

        <!-- Testimonial Slider Container -->
        <div class="testimonial-slider-wrapper" data-scroll-reveal>
            <div class="testimonial-slider-track">
                
                <?php 
                $testimonials = [
                    [
                        "name" => "James L.",
                        "date" => "2 weeks ago",
                        "text" => "Unbelievable service. I leave my Porsche here every time I fly out of OGG. The climate-controlled facility is pristine and the battery tender service gives me total peace of mind.",
                        "img" => "https://randomuser.me/api/portraits/men/32.jpg"
                    ],
                    [
                        "name" => "Sarah M.",
                        "date" => "1 month ago",
                        "text" => "Maui Vehicle Storage is a game changer. Airport pickup was seamless and my SUV was fully detailed and waiting for me. Highly recommend for any Maui resident or frequent visitor.",
                        "img" => "https://randomuser.me/api/portraits/women/44.jpg"
                    ],
                    [
                        "name" => "David W.",
                        "date" => "3 months ago",
                        "text" => "The security here is top-notch. Finding a truly secure, indoor spot in Kahului wasn't easy until I found MVS. The staff is professional and the facility is immaculate.",
                        "img" => "https://randomuser.me/api/portraits/men/86.jpg"
                    ],
                    [
                        "name" => "Elena R.",
                        "date" => "4 months ago",
                        "text" => "Five stars isn't enough. They handle everything from tire pressure checks to startups. Knowing my exotic is in their hands lets me travel without worry.",
                        "img" => "https://randomuser.me/api/portraits/women/68.jpg"
                    ]
                ];
                
                // Duplicate for infinite scroll
                $all_testimonials = array_merge($testimonials, $testimonials);

                foreach($all_testimonials as $t): 
                ?>
                <div class="testimonial-card glass-card hover-lift">
                    <!-- Animated Quote Icon -->
                    <div class="quote-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>

                    <div class="testimonial-header">
                        <div class="user-info">
                            <img src="<?php echo $t['img']; ?>" alt="<?php echo $t['name']; ?>" class="user-avatar" loading="lazy">
                            <div class="user-meta">
                                <h4><?php echo $t['name']; ?></h4>
                                <span class="review-date"><?php echo $t['date']; ?></span>
                            </div>
                        </div>
                        <div class="google-icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        </div>
                    </div>
                    
                    <div class="review-stars">
                        <svg viewBox="0 0 24 24" fill="#FFC107"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24" fill="#FFC107"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24" fill="#FFC107"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24" fill="#FFC107"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24" fill="#FFC107"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>

                    <p class="testimonial-text">"<?php echo $t['text']; ?>"</p>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        
    </div>
</section>
