<?php
$faqs = [
    [
        "q" => "Where is Maui Vehicle Storage located?",
        "a" => "We're a family-owned vehicle storage company in Central Maui, about two minutes from Kahului Airport (OGG). That makes dropping off or picking up your vehicle quick and easy before and after your flight.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>'
    ],
    [
        "q" => "What types of vehicles can you store?",
        "a" => "We store cars, trucks, boats, and RVs. Whether it's a daily driver, a second-home vehicle, or a work truck, we have indoor and outdoor options to fit your needs and budget.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 13l2-5h14l2 5M5 13h14v5H5z"></path><circle cx="7.5" cy="18.5" r="1.5"></circle><circle cx="16.5" cy="18.5" r="1.5"></circle></svg>'
    ],
    [
        "q" => "Do you offer airport delivery and pickup?",
        "a" => "Yes. We deliver your vehicle to and from Kahului Airport (OGG), plus curbside pickup and drop-off across the island — so you can skip the shuttles and rental lines.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"></path></svg>'
    ],
    [
        "q" => "How secure is my vehicle?",
        "a" => "Your vehicle is stored in a fully fenced and gated facility and looked after by our local, family-run team who treat every car like their own ʻohana.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>'
    ],
    [
        "q" => "When can I access my vehicle?",
        "a" => "Indoor storage clients have 24/7 access by appointment, and outdoor storage offers in/out access during regular business hours.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>'
    ],
    [
        "q" => "Do you wash and detail vehicles?",
        "a" => "Yes. Car washing, full detailing, and battery tending are available as optional add-on services, so your vehicle is clean and ready to drive the moment you return.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>'
    ]
];

// Generate JSON-LD Schema
$schema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => []
];

foreach ($faqs as $faq) {
    $schema['mainEntity'][] = [
        "@type" => "Question",
        "name" => $faq['q'],
        "acceptedAnswer" => [
            "@type" => "Answer",
            "text" => $faq['a']
        ]
    ];
}
$json_ld = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>

<!-- JSON-LD Schema -->
<script type="application/ld+json">
<?php echo $json_ld; ?>
</script>

<section class="faq-section" id="faq">
    <div class="container">
        <div class="section-header text-center" data-scroll-reveal>
            <span class="section-eyebrow section-eyebrow--center">Good to Know</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Answers to common questions about storing your vehicle in Central Maui, minutes from Kahului Airport (OGG).</p>
        </div>

        <div class="faq-search-wrapper" data-scroll-reveal>
            <div class="faq-search-box glass-card hover-lift">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="faqSearchInput" placeholder="Search questions..." aria-label="Search FAQ">
                <button class="clear-search" id="faqClearSearch" aria-label="Clear Search" style="display:none;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div id="faqNoResults" class="faq-no-results" style="display:none;">
                <p>No matching questions found.</p>
            </div>
        </div>

        <div class="faq-container" id="faqContainer" data-scroll-reveal>
            <?php foreach($faqs as $faq): ?>
            <div class="faq-item glass-card">
                <div class="faq-question">
                    <div class="faq-q-left">
                        <div class="faq-icon text-gradient">
                            <?php echo $faq['icon']; ?>
                        </div>
                        <h3><?php echo $faq['q']; ?></h3>
                    </div>
                    <div class="faq-toggle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p><?php echo $faq['a']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
