<footer class="site-footer">

    <div class="container footer-inner">

        <div class="footer-top">

            <!-- Brand + newsletter -->
            <div class="footer-brand">
                <a href="index.php" class="footer-logo" aria-label="Maui Vehicle Storage — Home">
                    <img src="assets/images/mvs-logo.png" alt="Maui Vehicle Storage" class="footer-logo-img">
                </a>
                <p class="footer-description">
                    Family-owned vehicle storage in Central Maui, about two minutes from Kahului Airport (OGG) —
                    secure indoor &amp; outdoor storage with airport delivery, washing, and detailing.
                </p>
                <form class="footer-newsletter" action="#" method="POST">
                    <span class="footer-newsletter-label">Stay in the loop</span>
                    <div class="newsletter-input-group">
                        <label for="newsletter-email" class="sr-only">Email address</label>
                        <input type="email" id="newsletter-email" placeholder="Your email address" required>
                        <button type="submit" class="btn-newsletter" aria-label="Subscribe">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                                <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Services -->
            <div class="footer-col">
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-links">
                    <li><a href="storage.php">Covered Indoor Storage</a></li>
                    <li><a href="storage.php">Outdoor & Fleet Storage</a></li>
                    <li><a href="services.php#detailing">Hand Wash &amp; Detail</a></li>
                    <li><a href="services.php#airport">Airport (OGG) Delivery</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="dmv-rental.php">DMV Rental</a></li>
                    <li><a href="index.php#gallery">Around the Lot</a></li>
                    <li><a href="index.php#faq">FAQ</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-col">
                <h4 class="footer-heading">Get in Touch</h4>
                <ul class="footer-contact">
                    <li>
                        <span class="fc-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <a href="mailto:<?php echo BIZ_EMAIL; ?>"><?php echo BIZ_EMAIL; ?></a>
                    </li>
                    <li>
                        <span class="fc-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <a href="tel:<?php echo BIZ_PHONE; ?>"><?php echo BIZ_PHONE_DISPLAY; ?></a>
                    </li>
                    <li>
                        <span class="fc-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>
                        </span>
                        <span>Central Maui<br>Minutes from Kahului Airport (OGG)</span>
                    </li>
                </ul>
            </div>

        </div><!-- /.footer-top -->

        <div class="footer-bottom">
            <p class="footer-copy">&copy; <?php echo date('Y'); ?> <a href="index.php">Maui Vehicle Storage</a>. All rights reserved.</p>

            <p class="footer-credit">Designed and developed by <a href="https://linkedin.com/in/taliv-ansari" target="_blank" rel="noopener noreferrer">Taliv Ansari</a></p>

            <div class="legal-links">
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="privacy-policy.php#terms">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>

<!-- Book Now — Quick Enquiry Modal (shared across the whole site) -->
<div class="enquiry-modal-overlay" id="enquiryModal">
    <div class="enquiry-modal glass-panel">
        <button class="enquiry-modal__close" id="enquiryModalClose" aria-label="Close">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>

        <div class="enquiry-modal__head">
            <span class="section-eyebrow">Reserve Your Spot</span>
            <h3>Quick Enquiry</h3>
            <p>Tell us a bit about your vehicle and we'll get back to you shortly.</p>
        </div>

        <form id="enquiryForm" novalidate>
            <input type="text" name="website" class="enquiry-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">
            <input type="hidden" name="source" id="enquirySource" value="Book Now Modal">

            <div class="floating-group">
                <input type="text" id="enq-name" name="name" class="floating-input" placeholder=" " required>
                <label for="enq-name" class="floating-label">Full Name</label>
                <span class="error-msg">Please enter your full name</span>
            </div>

            <div class="form-row">
                <div class="floating-group">
                    <input type="tel" id="enq-phone" name="phone" class="floating-input" placeholder=" " required>
                    <label for="enq-phone" class="floating-label">Phone Number</label>
                    <span class="error-msg">Please enter a valid phone number</span>
                </div>
                <div class="floating-group">
                    <input type="email" id="enq-email" name="email" class="floating-input" placeholder=" " required>
                    <label for="enq-email" class="floating-label">Email Address</label>
                    <span class="error-msg">Please enter a valid email address</span>
                </div>
            </div>

            <div class="floating-group">
                <select id="enq-service" name="service" class="floating-select">
                    <option value="" selected>General Enquiry</option>
                    <option value="Indoor Storage">Indoor Storage</option>
                    <option value="Outdoor/Fleet Storage">Outdoor / Fleet Storage</option>
                    <option value="Airport/Pier Pickup">Airport / Pier Pickup</option>
                    <option value="Wash & Detailing">Wash &amp; Detailing</option>
                    <option value="DMV Rental">DMV Rental</option>
                </select>
                <label for="enq-service" class="floating-label select-label">Interested Service</label>
            </div>

            <div class="floating-group">
                <textarea id="enq-message" name="message" class="floating-input floating-textarea" placeholder=" " rows="4"></textarea>
                <label for="enq-message" class="floating-label">Message (optional)</label>
            </div>

            <div class="form-submit-container">
                <button type="submit" class="btn btn-primary btn-lg btn-animated btn-submit-form" id="enquirySubmitBtn">
                    <span class="btn-text">Send Enquiry</span>
                    <svg class="btn-loader" viewBox="0 0 50 50" style="display:none;">
                        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                    </svg>
                </button>

                <div class="submit-success-msg" id="enquirySuccessMsg" style="display:none;">
                    <div class="success-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <span id="enquirySuccessText">Thank you! Your enquiry has been sent.</span>
                </div>

                <div class="submit-error-msg" id="enquiryErrorMsg"></div>
            </div>
        </form>
    </div>
</div>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTopBtn" aria-label="Back to top">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<!-- Custom JavaScript -->
<script src="assets/js/script.js?v=<?php echo filemtime(__DIR__ . '/../assets/js/script.js'); ?>"></script>
</body>
</html>
