<?php
$faqs = [
    [
        "q" => "Is my vehicle accessible 24/7?",
        "a" => "Yes, our premium indoor storage clients have 24/7 access by appointment, while outdoor storage has unlimited in/out privileges during regular business hours.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>'
    ],
    [
        "q" => "How secure is the facility?",
        "a" => "Our facility features 24/7 HD video surveillance, fully fenced and gated perimeters, and our premium indoor storage includes a 24/7 armed response system.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>'
    ],
    [
        "q" => "Do you offer airport delivery?",
        "a" => "Absolutely. We offer priority OGG airport delivery for our premium indoor members and as an available add-on for outdoor storage clients.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"></path></svg>'
    ],
    [
        "q" => "Are battery tenders included?",
        "a" => "Battery tenders and regular tire pressure maintenance are included complimentary with all Premium Indoor Storage plans.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="16" height="10" rx="2" ry="2"></rect><line x1="22" y1="11" x2="22" y2="13"></line></svg>'
    ],
    [
        "q" => "Is the storage climate-controlled?",
        "a" => "Our Premium Indoor facility is 100% climate-controlled, ensuring your luxury or exotic vehicle is protected from humidity and temperature fluctuations.",
        "icon" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path></svg>'
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
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find answers to common questions about our secure vehicle storage facility.</p>
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
