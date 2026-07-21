<section class="contact-page-section" id="contact">
    <!-- Interactive Map Wrapper -->
    <div class="contact-map-wrapper">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118671.19662198083!2d-156.54924719602242!3d20.887968512140446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7954d2dd645d9095%3A0xb35515d96a5f7f32!2sKahului%2C%20HI!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" 
            width="100%" 
            height="500" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <div class="container contact-main-container">
        <!-- Quick Contact Cards (Overlapping Map) -->
        <div class="quick-contact-cards" data-scroll-reveal>
            
            <!-- Card 1: Office Info -->
            <div class="quick-card glass-card hover-lift">
                <div class="card-icon text-gradient">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"/><path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"/></svg>
                </div>
                <h3>Office Information</h3>
                <p>123 Main Street<br>Kahului, HI 96732</p>
                <a href="mailto:info@mauivehiclestorage.com">info@mauivehiclestorage.com</a>
            </div>

            <!-- Card 2: Business Hours -->
            <div class="quick-card glass-card hover-lift">
                <div class="card-icon text-gradient">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <h3>Business Hours</h3>
                <p><strong>Mon - Fri:</strong> 8:00 AM - 6:00 PM</p>
                <p><strong>Saturday:</strong> 9:00 AM - 4:00 PM</p>
                <p><strong>Sunday:</strong> By Appointment Only</p>
            </div>

            <!-- Card 3: Emergency Phone -->
            <div class="quick-card glass-card emergency-card hover-lift">
                <div class="card-icon text-gradient">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92V20.92C22.0032 21.1986 21.9022 21.4673 21.7163 21.6749C21.5303 21.8824 21.2721 22.0142 20.99 22.05C16.8927 21.597 13.011 20.1557 9.63001 17.83C6.48312 15.6888 3.86435 12.9189 2.01001 9.69998C1.55404 6.27376 1.83478 2.85327 2.83001 2.98998C3.12351 2.70932 3.48625 2.5312 3.86797 2.47957C4.24968 2.42795 4.63478 2.50493 4.97001 2.69998L8.60001 4.54998C8.88725 4.69345 9.12458 4.90847 9.28929 5.17415C9.454 5.43983 9.54044 5.74716 9.54001 6.05998V9.38998C9.54001 9.65824 9.65427 9.91485 9.85501 10.09C10.8841 11.2333 12.0465 12.2472 13.31 13.11C13.504 13.2505 13.7383 13.3155 13.97 13.3C14.28 13.3 14.58 13.19 14.82 12.99L17.52 10.99C17.7818 10.7963 18.0935 10.6865 18.4173 10.6744C18.7412 10.6622 19.0628 10.7482 19.34 10.92L23.01 13.32C23.2721 13.4912 23.4791 13.7229 23.6069 13.9877C23.7346 14.2524 23.7781 14.5406 23.73 14.82L22 16.92Z"/></svg>
                </div>
                <h3>24/7 Support</h3>
                <p>For immediate assistance or security concerns, contact our 24/7 dispatch.</p>
                <a href="tel:+18085550198" class="emergency-number">(808) 555-0198</a>
            </div>
        </div>

        <!-- Large Contact Form -->
        <div class="contact-form-wrapper glass-card" data-scroll-reveal="delay">
            <div class="form-header text-center">
                <h2 class="form-title">Send Us a Message</h2>
                <p class="form-subtitle">Whether you need a storage quote or airport pickup, we are here to assist you.</p>
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
                        <option value="detailing">Wash & Detailing</option>
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
</section>
