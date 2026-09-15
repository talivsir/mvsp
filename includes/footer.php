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

            <div class="footer-socials">
                <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>
            </div>

            <div class="legal-links">
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="privacy-policy.php#terms">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTopBtn" aria-label="Back to top">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<!-- Custom JavaScript -->
<script src="assets/js/script.js?v=<?php echo filemtime(__DIR__ . '/../assets/js/script.js'); ?>"></script>
</body>
</html>
