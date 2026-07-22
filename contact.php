<?php
$pageTitle = 'Contact Us';
$metaDescription = 'Contact Maui Vehicle Storage, a family-owned vehicle storage company in Central Maui near Kahului Airport (OGG). Call (808) 575-9008 or email mauivehiclestorage@gmail.com for a quote on indoor/outdoor storage, airport delivery, washing, and detailing.';
$canonicalUrl = '/contact.php';

include __DIR__ . '/includes/header.php';
?>

<main class="main-content">

    <!-- ── Page hero ─────────────────────────────────── -->
    <section class="page-hero">
        <div class="page-hero__bg" aria-hidden="true"><span class="page-hero__grid"></span></div>
        <div class="container">
            <div class="page-hero__inner" data-scroll-reveal>
                <span class="page-hero__eyebrow">Contact</span>
                <h1 class="page-hero__title">Let's Get <span class="accent">in Touch</span></h1>
                <p class="page-hero__subtitle">
                    Questions about storage, a quote, or an airport pickup? Our Kahului team is ready to help —
                    reach out and we'll respond within one business day.
                </p>
                <div class="page-hero__crumbs">
                    <a href="index.php">Home</a><span>/</span><span>Contact</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Contact layout ────────────────────────────── -->
    <section class="page-section page-section--light">
        <div class="container">
            <div class="ct-layout">

                <!-- Info -->
                <div class="ct-info" data-scroll-reveal="left">
                    <div class="ct-info__card is-accent">
                        <div class="ct-info__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div>
                            <h3>Call Us</h3>
                            <p>Speak with our family team</p>
                            <a href="tel:<?php echo BIZ_PHONE; ?>"><?php echo BIZ_PHONE_DISPLAY; ?></a>
                        </div>
                    </div>
                    <div class="ct-info__card">
                        <div class="ct-info__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div>
                            <h3>Email Us</h3>
                            <a href="mailto:<?php echo BIZ_EMAIL; ?>"><?php echo BIZ_EMAIL; ?></a>
                        </div>
                    </div>
                    <div class="ct-info__card">
                        <div class="ct-info__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div>
                            <h3>Business Hours</h3>
                            <p>Mon–Fri: 8:00 AM – 4:00 PM<br>Sat: Call for service (appointments available)<br>Sun: Closed</p>
                        </div>
                    </div>
                    <div class="ct-info__card">
                        <div class="ct-info__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div>
                            <h3>Service Area</h3>
                            <p>Central Maui · minutes from Kahului Airport (OGG). By appointment — we're building our new Kahului home.</p>
                        </div>
                    </div>
                </div>

                <!-- Form (JS hooks preserved) -->
                <div class="ct-form" data-scroll-reveal="right">
                    <div class="ct-form__head">
                        <h2>Send us a message</h2>
                        <p>Whether you need a storage quote or an airport pickup, we're here to assist.</p>
                    </div>

                    <form class="large-contact-form" id="mainContactForm" novalidate>
                        <div class="form-row">
                            <div class="floating-group">
                                <input type="text" id="fname" name="fname" class="floating-input" placeholder=" " required>
                                <label for="fname" class="floating-label">First Name</label>
                                <span class="error-msg">Please enter your first name</span>
                            </div>
                            <div class="floating-group">
                                <input type="text" id="lname" name="lname" class="floating-input" placeholder=" " required>
                                <label for="lname" class="floating-label">Last Name</label>
                                <span class="error-msg">Please enter your last name</span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="floating-group">
                                <input type="email" id="email" name="email" class="floating-input" placeholder=" " required>
                                <label for="email" class="floating-label">Email Address</label>
                                <span class="error-msg">Please enter a valid email address</span>
                            </div>
                            <div class="floating-group">
                                <input type="tel" id="phone" name="phone" class="floating-input" placeholder=" " required>
                                <label for="phone" class="floating-label">Phone Number</label>
                                <span class="error-msg">Please enter a valid phone number</span>
                            </div>
                        </div>

                        <div class="floating-group">
                            <select id="service" name="service" class="floating-select" required>
                                <option value="" disabled selected></option>
                                <option value="indoor">Indoor Storage</option>
                                <option value="outdoor">Outdoor/Fleet Storage</option>
                                <option value="airport">Airport/Pier Pickup</option>
                                <option value="detailing">Wash &amp; Detailing</option>
                                <option value="dmv">DMV Rental</option>
                            </select>
                            <label for="service" class="floating-label select-label">Interested Service</label>
                            <span class="error-msg">Please select a service</span>
                        </div>

                        <div class="floating-group">
                            <textarea id="message" name="message" class="floating-input floating-textarea" placeholder=" " rows="5" required></textarea>
                            <label for="message" class="floating-label">How can we help you?</label>
                            <span class="error-msg">Please enter your message</span>
                        </div>

                        <div class="form-submit-container">
                            <button type="submit" class="btn btn-primary btn-lg btn-animated btn-submit-form" id="submitBtn">
                                <span class="btn-text">Submit Request</span>
                                <svg class="btn-loader" viewBox="0 0 50 50" style="display:none;">
                                    <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                                </svg>
                            </button>

                            <div class="submit-success-msg" id="successMsg" style="display:none;">
                                <div class="success-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span>Message sent successfully! We will contact you shortly.</span>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Map ───────────────────────────────────────── -->
    <section class="ct-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118671.19662198083!2d-156.54924719602242!3d20.887968512140446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7954d2dd645d9095%3A0xb35515d96a5f7f32!2sKahului%2C%20HI!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
            width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Maui Vehicle Storage location">
        </iframe>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
