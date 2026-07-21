<!-- =========================================
     Pre-Footer CTA Section — "Ready to secure your vehicle?"
     ========================================= -->
<section class="pre-footer-cta" id="book">

    <!-- Background decorative blobs -->
    <div class="cta-bg-blob cta-blob-1"></div>
    <div class="cta-bg-blob cta-blob-2"></div>

    <div class="container">

        <div class="cta-section-grid">

            <!-- LEFT: Headline + trust -->
            <div class="cta-section-content" data-scroll-reveal="left">

                <!-- Section label -->
                <span class="cta-eyebrow">Reserve Your Spot Today</span>

                <h2 class="cta-section-title">Ready to secure <br><span class="text-gradient-gold">your vehicle?</span></h2>

                <p class="cta-section-sub">
                    Join Kahului's most exclusive vehicle sanctuary. Reserve your spot for premium indoor or outdoor storage — seamless airport delivery included.
                </p>

                <!-- Google Reviews -->
                <div class="cta-review-badge">
                    <div class="cta-stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg viewBox="0 0 24 24" width="20" fill="#FFC107"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <?php endfor; ?>
                    </div>
                    <span>5.0 on Google Reviews</span>
                </div>

                <!-- Trust bullets -->
                <ul class="cta-trust-list">
                    <li>
                        <svg viewBox="0 0 24 24" width="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>No long-term contracts required</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" width="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>24/7 armed security & HD surveillance</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" width="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Free OGG airport pickup coordination</span>
                    </li>
                </ul>

            </div>

            <!-- RIGHT: Booking form card -->
            <div class="cta-form-card" data-scroll-reveal="right">
                <div class="cta-form-header">
                    <div class="cta-form-icon">
                        <svg viewBox="0 0 24 24" width="26" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                    </div>
                    <div>
                        <h3>Check Availability</h3>
                        <p>Secure your spot in minutes</p>
                    </div>
                </div>

                <form class="cta-booking-form" action="contact.php" method="POST">

                    <div class="cta-input-group">
                        <label for="cta-service">Service Type</label>
                        <div class="cta-select-wrap">
                            <select id="cta-service" name="service" required>
                                <option value="" disabled selected>Select an option...</option>
                                <option value="indoor">Indoor Storage</option>
                                <option value="outdoor">Outdoor / Fleet Storage</option>
                                <option value="dmv">DMV Rental</option>
                                <option value="detail">Wash &amp; Detail</option>
                            </select>
                            <svg class="cta-select-arrow" viewBox="0 0 24 24" width="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </div>
                    </div>

                    <div class="cta-date-row">
                        <div class="cta-input-group">
                            <label for="cta-dropoff">Drop-off Date</label>
                            <input type="date" id="cta-dropoff" name="dropoff" required>
                        </div>
                        <div class="cta-input-group">
                            <label for="cta-pickup">Pick-up Date</label>
                            <input type="date" id="cta-pickup" name="pickup">
                        </div>
                    </div>

                    <label class="cta-checkbox-label">
                        <input type="checkbox" name="airport_pickup" value="yes">
                        <span class="cta-checkmark"></span>
                        Include Airport Delivery (OGG)
                    </label>

                    <button type="submit" class="btn btn-primary btn-full btn-animated cta-submit-btn">
                        <span>Check Availability</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>
