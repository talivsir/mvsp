<?php
$pageTitle = 'Privacy Policy, Terms & FAQ';
$metaDescription = 'Privacy Policy, Terms of Service, storage disclaimer, and frequently asked questions for Maui Vehicle Storage, a family-owned vehicle storage company in Central Maui, Hawaii.';
$canonicalUrl = '/privacy-policy.php';

include __DIR__ . '/includes/header.php';

$legalFaqs = [
    [
        'q' => 'Is my vehicle insured while it is in storage?',
        'a' => 'No. ' . SITE_NAME . ' does not provide insurance coverage for stored vehicles. You are required to maintain your own valid insurance policy (comprehensive coverage is strongly recommended) for the full duration your vehicle is on our property. We are happy to provide proof of our facility\'s general liability coverage upon request, but that coverage does not extend to your personal property.',
    ],
    [
        'q' => 'What happens if my vehicle is damaged while stored with you?',
        'a' => 'We take reasonable, industry-standard precautions to keep every vehicle secure, but we are not an insurer. As explained in our Storage Terms &amp; Disclaimer below, our liability for loss or damage is limited to cases of our proven gross negligence or willful misconduct, and even then is capped as described in that section. We encourage you to inspect your vehicle at drop-off and pickup, and to keep your own insurance current.',
    ],
    [
        'q' => 'Can I cancel my storage agreement at any time?',
        'a' => 'Yes. Our storage agreements are month-to-month with no long-term contract required. You may cancel with the notice period stated in your signed storage agreement (typically at least 7 days) so we can prepare your vehicle for pickup.',
    ],
    [
        'q' => 'What happens if I stop paying my storage invoice?',
        'a' => 'If an account becomes past due, we will attempt to contact you using the phone number and email on file. If payment is not received within the timeframe stated in your storage agreement, we may assess late fees and, as permitted under Hawaii law, place a lien on the stored vehicle to recover unpaid storage charges. We always attempt direct communication before taking further action — please keep your contact information current with us.',
    ],
    [
        'q' => 'Do you sell or share my personal information with third parties?',
        'a' => 'We never sell your personal information. We only share it with trusted service providers who help us run the business (for example, payment processors or email delivery services), and only to the extent needed for them to perform that service, or when required by law. See "Information Sharing and Disclosure" in our Privacy Policy for full details.',
    ],
    [
        'q' => 'How is the information I submit through your website protected?',
        'a' => 'Enquiry and contact form submissions are transmitted using industry-standard encryption and sent directly to our business email over an authenticated, encrypted SMTP connection. We do not store form submissions in a public-facing database on this website.',
    ],
    [
        'q' => 'Can I ask you to delete the information I submitted?',
        'a' => 'Yes. Email us at ' . BIZ_EMAIL . ' with the subject line "Data Deletion Request" and we will remove personal information we hold about you from our systems, except where we are required to retain records for legal, accounting, or lien-related purposes.',
    ],
    [
        'q' => 'Do you use cookies or tracking on this website?',
        'a' => 'This site uses only the minimal, functional cookies/local storage needed for the site to work correctly (for example, remembering your cookie-consent choice). We do not use advertising trackers. See "Cookies &amp; Tracking Technologies" below for details.',
    ],
    [
        'q' => 'What if I leave my vehicle beyond the end of my storage term?',
        'a' => 'If a vehicle remains after your agreement ends and you have not renewed or arranged pickup, it may be treated as abandoned property under our Abandoned Vehicle Policy below, which follows Hawaii\'s statutory notice-and-lien-sale process for unclaimed property left with a bailee.',
    ],
];

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [],
];
foreach ($legalFaqs as $f) {
    $schema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ];
}
$legalJsonLd = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>

<script type="application/ld+json">
<?php echo $legalJsonLd; ?>
</script>

<main class="main-content">

    <!-- ── Page hero ─────────────────────────────────── -->
    <section class="page-hero">
        <div class="page-hero__bg" aria-hidden="true"><span class="page-hero__grid"></span></div>
        <div class="container">
            <div class="page-hero__inner" data-scroll-reveal>
                <span class="page-hero__eyebrow">Legal</span>
                <h1 class="page-hero__title">Privacy Policy &amp; <span class="accent">Terms of Service</span></h1>
                <p class="page-hero__subtitle">
                    How we handle your information, the terms that govern storing a vehicle with us, and answers
                    to common legal questions.
                </p>
                <div class="page-hero__crumbs">
                    <a href="index.php">Home</a><span>/</span><span>Privacy Policy</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Jump links ────────────────────────────────── -->
    <section class="page-section page-section--tint" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="container">
            <nav class="legal-jumpnav" aria-label="Page sections" data-scroll-reveal>
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms &amp; Storage Disclaimer</a>
                <a href="#faq">FAQ</a>
            </nav>
        </div>
    </section>

    <!-- ── Privacy Policy ────────────────────────────── -->
    <section class="page-section page-section--light" id="privacy">
        <div class="container">
            <div class="legal-content" data-scroll-reveal>

                <p class="legal-updated">Last updated: September 2026</p>

                <p><?php echo SITE_NAME; ?> ("<?php echo SITE_NAME; ?>," "we," "us," or "our") operates this website
                (the "Site") and provides vehicle storage and related concierge services in Central Maui, Hawaii
                (the "Services"). This Privacy Policy explains what information we collect through the Site and
                in the course of providing our Services, how we use and protect it, and the choices you have.
                By using the Site or our Services, you agree to the practices described here.</p>

                <h2>1. Information We Collect</h2>
                <p><strong>Information you give us directly.</strong> When you fill out our enquiry or contact
                forms, sign a storage agreement, or otherwise communicate with us, we may collect:</p>
                <ul>
                    <li>Your name, phone number, and email address;</li>
                    <li>Vehicle information (make, model, year, license plate, VIN) needed to provide storage or
                    concierge services;</li>
                    <li>Billing and payment details when you pay for a service (processed by our payment
                    processor — we do not store full card numbers on our own systems);</li>
                    <li>Any other details you choose to include in a message to us (for example, the content of
                    your enquiry).</li>
                </ul>
                <p><strong>Information collected automatically.</strong> Like most websites, our hosting and
                analytics tools may automatically log standard technical data such as your IP address, browser
                type, device type, pages visited, and the date/time of your visit. This is used in aggregate to
                keep the Site secure and understand how it's used — it is not used to build an advertising
                profile of you.</p>

                <h2>2. How We Use Your Information</h2>
                <p>We use the information we collect to:</p>
                <ul>
                    <li>Respond to enquiries and provide requested quotes;</li>
                    <li>Create and manage your storage agreement and account;</li>
                    <li>Coordinate drop-off, pickup, airport delivery, washing, detailing, and other requested
                    services;</li>
                    <li>Process payments and send invoices or receipts;</li>
                    <li>Send you service-related communications (for example, a reminder about your storage
                    renewal);</li>
                    <li>Maintain the security, integrity, and proper functioning of the Site;</li>
                    <li>Comply with applicable law, including tax, accounting, and lien-notice recordkeeping
                    requirements.</li>
                </ul>
                <p>We do not use your personal information for automated decision-making that produces legal or
                similarly significant effects, and we do not sell your personal information.</p>

                <h2>3. Cookies &amp; Tracking Technologies</h2>
                <p>The Site uses only minimal, functional cookies and browser local storage needed for core
                functionality (for example, remembering a preference you set, or keeping a multi-step form
                working correctly). We do not use third-party advertising cookies or sell data to ad networks.
                You can disable cookies in your browser settings, though some parts of the Site may not function
                as intended if you do.</p>

                <h2>4. Third-Party Services</h2>
                <p>Certain features of the Site rely on third-party providers, each governed by their own privacy
                policy:</p>
                <ul>
                    <li><strong>Google Maps</strong> — to display our location and service area;</li>
                    <li><strong>Google Fonts</strong> — to load the typefaces used on this Site;</li>
                    <li><strong>Email delivery (SMTP)</strong> — to deliver enquiry-form submissions to our
                    business inbox;</li>
                    <li><strong>Payment processors</strong> — if you pay online, your payment details are handled
                    directly by our payment processor's secure systems, not stored by us.</li>
                </ul>

                <h2>5. Information Sharing and Disclosure</h2>
                <p>We do not sell, rent, or trade your personal information. We may share it only:</p>
                <ul>
                    <li>With service providers who perform functions on our behalf (payment processing, email
                    delivery, hosting), under obligations to protect your data;</li>
                    <li>When required to comply with a subpoena, court order, or other legal process, or to
                    comply with applicable law;</li>
                    <li>To protect the rights, property, or safety of <?php echo SITE_NAME; ?>, our customers, or
                    others, including to enforce a lien or recover unpaid storage fees as described in our
                    Terms below;</li>
                    <li>In connection with a merger, sale, or transfer of business assets, subject to
                    confidentiality obligations.</li>
                </ul>

                <h2>6. Data Security</h2>
                <p>We use reasonable administrative and technical safeguards designed to protect your
                information — including encrypted transmission of form submissions and restricted access to
                customer records. No method of transmission or storage is 100% secure, and we cannot guarantee
                absolute security, but we work to protect your information appropriately for a small local
                business.</p>

                <h2>7. Data Retention</h2>
                <p>We keep personal information for as long as reasonably necessary to provide the Services,
                maintain business and tax records as required by Hawaii and federal law, and resolve disputes.
                Storage-agreement and payment records are typically retained for at least the period required by
                applicable recordkeeping law after the relationship ends.</p>

                <h2>8. Your Privacy Choices</h2>
                <p>You may ask us at any time to:</p>
                <ul>
                    <li>Tell you what personal information we hold about you;</li>
                    <li>Correct inaccurate information;</li>
                    <li>Delete personal information we hold about you, subject to our legal recordkeeping
                    obligations;</li>
                    <li>Stop sending you marketing or newsletter emails (use the unsubscribe link, or just email
                    us).</li>
                </ul>
                <p>To exercise any of these choices, email <a href="mailto:<?php echo BIZ_EMAIL; ?>"><?php echo BIZ_EMAIL; ?></a>
                or call <a href="tel:<?php echo BIZ_PHONE; ?>"><?php echo BIZ_PHONE_DISPLAY; ?></a>.</p>

                <h2>9. Children's Privacy</h2>
                <p>This Site and our Services are directed to adults and are not intended for children under 13.
                We do not knowingly collect personal information from children under 13. If you believe a child
                has provided us with personal information, please contact us and we will delete it.</p>

                <h2>10. Changes to This Policy</h2>
                <p>We may update this Privacy Policy from time to time to reflect changes in our practices or
                for legal reasons. The "Last updated" date at the top of this page will always reflect the most
                recent revision. Continued use of the Site after changes are posted means you accept the revised
                policy.</p>

                <h2>11. Contact Us</h2>
                <p>Questions about this Privacy Policy can be sent to
                <a href="mailto:<?php echo BIZ_EMAIL; ?>"><?php echo BIZ_EMAIL; ?></a> or by calling
                <a href="tel:<?php echo BIZ_PHONE; ?>"><?php echo BIZ_PHONE_DISPLAY; ?></a>.</p>

            </div>
        </div>
    </section>

    <!-- ── Terms & Storage Disclaimer ────────────────── -->
    <section class="page-section page-section--tint" id="terms">
        <div class="container">
            <div class="legal-content" data-scroll-reveal>

                <span class="section-eyebrow">Please Read Carefully</span>
                <h2 class="page-heading" style="margin-bottom: 24px;">Terms of Service &amp; Storage Disclaimer</h2>

                <p class="legal-disclaimer-box">
                    <strong>General notice:</strong> This page is provided for general informational purposes and
                    does not constitute legal advice. Your specific storage terms are governed by the signed
                    storage agreement you receive at drop-off, which controls in the event of any conflict with
                    this summary. If you have questions about your rights or obligations, consult an attorney
                    licensed in Hawaii.
                </p>

                <h2>1. Acceptance of Terms</h2>
                <p>By using this Site, requesting a quote, or entering into a storage or service agreement with
                <?php echo SITE_NAME; ?>, you agree to be bound by these Terms of Service, our Privacy Policy,
                and the specific terms of your signed storage agreement.</p>

                <h2>2. Description of Services</h2>
                <p><?php echo SITE_NAME; ?> is a family-owned business offering covered indoor and outdoor
                storage for cars, trucks, boats, and RVs in Central Maui, along with optional add-on services
                such as airport (OGG) delivery, curbside pickup, car washing, detailing, battery tending, DMV
                road-test vehicle rental, and vehicle registration assistance. Availability of any specific
                service or space is not guaranteed and is subject to capacity at the time of your request.</p>

                <h2>3. Vehicle Eligibility &amp; Condition</h2>
                <p>You represent that any vehicle you store with us is legally owned or lawfully in your
                possession, is currently registered (or you have disclosed otherwise), and is free of liens that
                would prevent you from storing it. We may inspect and photograph a vehicle's condition at
                drop-off and reserve the right to decline storage of a vehicle that poses a safety, fire, or
                environmental hazard (for example, active fluid leaks, non-functional brakes towed onto the lot,
                or hazardous cargo).</p>

                <h2>4. Rates, Payment &amp; Late Fees</h2>
                <p>Storage rates are provided as a custom quote based on vehicle size, storage type (indoor vs.
                outdoor), and requested add-ons, and are set out in your signed storage agreement. Payment is due
                on the schedule stated in that agreement. Accounts not paid within the grace period stated in
                your agreement may be assessed a late fee and are subject to the lien rights described below.</p>

                <h2>5. Term, Renewal &amp; Cancellation</h2>
                <p>Unless otherwise stated in your signed agreement, storage is offered on a month-to-month
                basis and automatically renews until either party gives the notice period specified in that
                agreement (typically at least 7 days) to cancel or pick up the vehicle.</p>

                <h2>6. Insurance Requirement &amp; Disclaimer of Liability</h2>
                <p><strong>You are solely responsible for insuring your own vehicle</strong> against loss, theft,
                fire, weather, vandalism, and collision while it is in our care. <?php echo SITE_NAME; ?> is not
                an insurer and does not provide coverage for your vehicle or its contents.</p>
                <p>We use commercially reasonable measures to secure our facility (fencing, gating, and
                supervision by our team), but <?php echo SITE_NAME; ?>, its owners, and employees are not liable
                for any loss, theft, or damage to a stored vehicle or its contents except to the extent caused by
                our proven gross negligence or willful misconduct. We are not liable for loss or damage caused
                by acts of God, weather events, fire, theft or vandalism by third parties, mechanical or
                electrical failure, pre-existing conditions, or ordinary wear that occurs during the storage
                period. Where any liability is found, it is limited to the lesser of the vehicle's fair market
                value at the time of loss or the amount stated in your signed storage agreement, and excludes
                indirect, incidental, or consequential damages (such as loss of use).</p>

                <h2>7. Access to Stored Vehicles</h2>
                <p>Access to your vehicle is available according to the storage type you've selected, as stated
                in your agreement — typically 24/7 by appointment for indoor storage, and during posted business
                hours for outdoor/fleet storage. We may require advance notice for retrieval so we can safely
                position and prepare your vehicle.</p>

                <h2>8. Abandoned Vehicle &amp; Lien Policy</h2>
                <p>If storage charges remain unpaid, or a vehicle is left beyond the end of a terminated
                agreement without arrangement for pickup, <?php echo SITE_NAME; ?> may, after providing notice to
                the last known contact information on file and in accordance with Hawaii's statutory
                requirements for liens on stored property, treat the vehicle as unclaimed and pursue available
                lien remedies — which can include a lien sale to recover unpaid charges — after the required
                statutory notice period has passed.</p>

                <h2>9. Prohibited Items &amp; Conduct</h2>
                <p>Vehicles must not be used to store hazardous, flammable, illegal, or perishable materials
                while on our lot. We reserve the right to refuse or terminate service for conduct that
                endangers people, property, or violates applicable law.</p>

                <h2>10. Assumption of Risk</h2>
                <p>You acknowledge that storing a vehicle outdoors exposes it to weather, salt air, UV exposure,
                and similar environmental conditions inherent to a Hawaii climate, and that you assume this risk
                by choosing outdoor storage rather than covered indoor storage.</p>

                <h2>11. Indemnification</h2>
                <p>You agree to indemnify and hold harmless <?php echo SITE_NAME; ?>, its owners, and employees
                from any claims, damages, or expenses (including reasonable attorney's fees) arising from your
                breach of these Terms, your violation of law, or your vehicle's condition causing harm to
                property or persons on our lot.</p>

                <h2>12. Website Use Disclaimer</h2>
                <p>Content on this Site (including pricing ranges, service descriptions, and photos) is provided
                "as is" for general informational purposes and may not always be fully up to date. It does not
                constitute a binding offer or professional/legal advice. External links (for example, to Google
                Maps) are provided for convenience; we are not responsible for third-party sites' content or
                practices.</p>

                <h2>13. Force Majeure</h2>
                <p>Neither party is liable for delay or failure to perform caused by events beyond reasonable
                control, including natural disasters, government action, labor disputes, or utility failures.</p>

                <h2>14. Governing Law &amp; Dispute Resolution</h2>
                <p>These Terms and any storage agreement with <?php echo SITE_NAME; ?> are governed by the laws
                of the State of Hawaii, without regard to conflict-of-law principles. Any dispute arising from
                these Terms or our Services shall be resolved in the state or federal courts located in Maui
                County, Hawaii, unless your signed storage agreement specifies a different dispute-resolution
                process (such as mediation or arbitration).</p>

                <h2>15. Severability &amp; Entire Agreement</h2>
                <p>If any provision of these Terms is found unenforceable, the remaining provisions remain in
                full effect. These Terms, together with your signed storage agreement and our Privacy Policy,
                constitute the entire agreement between you and <?php echo SITE_NAME; ?> regarding the Services.</p>

                <h2>16. Changes to These Terms</h2>
                <p>We may revise these Terms from time to time; the version posted here at the time of your
                signed storage agreement, or as amended in writing and signed by both parties, controls.</p>

            </div>
        </div>
    </section>

    <!-- ── FAQ ───────────────────────────────────────── -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-header text-center" data-scroll-reveal>
                <span class="section-eyebrow section-eyebrow--center">Legal &amp; Policy</span>
                <h2 class="section-title">Privacy &amp; Terms — Frequently Asked Questions</h2>
                <p class="section-subtitle">Quick answers about insurance, liability, payments, and your data.</p>
            </div>

            <div class="faq-container">
                <?php foreach ($legalFaqs as $f): ?>
                <div class="faq-item glass-card">
                    <div class="faq-question">
                        <div class="faq-q-left">
                            <div class="faq-icon text-gradient">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            </div>
                            <h3><?php echo htmlspecialchars($f['q']); ?></h3>
                        </div>
                        <div class="faq-toggle">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p><?php echo $f['a']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ── CTA ───────────────────────────────────────── -->
    <section class="page-cta">
        <div class="container">
            <div class="page-cta__card" data-scroll-reveal>
                <h2 class="page-cta__title">Still have <span class="accent">questions?</span></h2>
                <p class="page-cta__sub">Our local Kahului team is happy to walk you through the details before you book.</p>
                <div class="page-cta__actions">
                    <a href="contact.php" class="btn-gold">Contact Us <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    <a href="tel:<?php echo BIZ_PHONE; ?>" class="btn-ghost-light">Call <?php echo BIZ_PHONE_DISPLAY; ?></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
