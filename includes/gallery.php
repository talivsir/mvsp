<?php
/* ============================================================
   AROUND THE LOT — tabbed, auto-scrolling photo carousel
   Each tab shows its own set of local photos (img/lot/) looping
   right-to-left; exactly 3 photos are visible in the frame at a
   time (see .lot-carousel-item width, set responsively in CSS/JS).
   ============================================================ */

$lotCategories = [
    'vehicles' => [
        'label' => 'Vehicles',
        'items' => [
            ['img' => 'img/lot/vehicles-1.jpg', 'title' => 'Everyday Ride',      'sub' => 'Stored on Maui'],
            ['img' => 'img/lot/vehicles-2.jpg', 'title' => 'Ready to Roll',      'sub' => 'Cars, Trucks & More'],
            ['img' => 'img/lot/vehicles-3.jpg', 'title' => 'Family SUV',         'sub' => 'Safe & Secure'],
            ['img' => 'img/lot/vehicles-4.jpg', 'title' => 'Weekend Cruiser',    'sub' => 'On Our Maui Lot'],
            ['img' => 'img/lot/vehicles-5.jpg', 'title' => 'Daily Driver',       'sub' => 'Stored on Maui'],
            ['img' => 'img/lot/vehicles-6.jpg', 'title' => 'Island Ready',       'sub' => 'Cars, Trucks & More'],
        ],
    ],
    'storage' => [
        'label' => 'Storage',
        'items' => [
            ['img' => 'img/lot/storage-1.jpg', 'title' => 'Covered Storage',    'sub' => 'On Our Maui Lot'],
            ['img' => 'img/lot/storage-2.jpg', 'title' => 'Secure Bays',        'sub' => 'Cars, Boats & RVs'],
            ['img' => 'img/lot/storage-3.jpg', 'title' => 'Gated & Watched',    'sub' => '24/7 Peace of Mind'],
            ['img' => 'img/lot/storage-4.jpg', 'title' => 'Room for Everything','sub' => 'Boats, RVs & Fleets'],
            ['img' => 'img/lot/storage-5.jpg', 'title' => 'Central Maui',       'sub' => 'Minutes from OGG'],
        ],
    ],
    'detailing' => [
        'label' => 'Detailing',
        'items' => [
            ['img' => 'img/lot/detailing-1.jpg', 'title' => 'Hand Wash & Detail',  'sub' => 'Ready When You Are'],
            ['img' => 'img/lot/detailing-2.jpg', 'title' => 'Spot-Free Finish',    'sub' => 'Detailing Services'],
            ['img' => 'img/lot/detailing-3.jpg', 'title' => 'Interior Refresh',    'sub' => 'Fresh & Clean'],
            ['img' => 'img/lot/detailing-4.jpg', 'title' => 'Paint Correction',    'sub' => 'Detailing Services'],
            ['img' => 'img/lot/detailing-5.jpg', 'title' => 'Pre-Pickup Prep',     'sub' => 'Washed & Ready'],
        ],
    ],
    'registrations' => [
        'label' => 'Registrations',
        'items' => [
            ['img' => 'img/lot/registrations-1.jpg', 'title' => 'Registration Help',       'sub' => 'Renewals & Transfers'],
            ['img' => 'img/lot/registrations-2.jpg', 'title' => 'Title & Plate Guidance',   'sub' => 'We Handle the Paperwork'],
            ['img' => 'img/lot/registrations-3.jpg', 'title' => 'Vehicle Registration',     'sub' => 'Fast & Friendly'],
            ['img' => 'img/lot/registrations-4.jpg', 'title' => 'Out-of-State Transfers',   'sub' => 'Made Simple'],
            ['img' => 'img/lot/registrations-5.jpg', 'title' => 'Expert Assistance',        'sub' => 'Registration Services'],
        ],
    ],
    'driving-test' => [
        'label' => 'Driving Test',
        'items' => [
            ['img' => 'img/lot/driving-test-1.jpg', 'title' => 'DMV Road Test',          'sub' => 'Fully Insured Vehicle'],
            ['img' => 'img/lot/driving-test-2.jpg', 'title' => 'Test-Ready Car',         'sub' => 'Inspected & Compliant'],
            ['img' => 'img/lot/driving-test-3.jpg', 'title' => 'Driving Test in Progress','sub' => 'Confidence Behind the Wheel'],
            ['img' => 'img/lot/driving-test-4.jpg', 'title' => 'Student Driver',         'sub' => 'DMV Rental'],
            ['img' => 'img/lot/driving-test-5.jpg', 'title' => 'Pass with Confidence',   'sub' => 'DMV Test Vehicle'],
        ],
    ],
    'containers' => [
        'label' => 'Containers',
        'items' => [
            ['img' => 'img/lot/containers-1.jpg', 'title' => 'Container Storage',      'sub' => 'Secure & Flexible'],
            ['img' => 'img/lot/containers-2.jpg', 'title' => 'Private Containers',     'sub' => 'Shielded from the Elements'],
            ['img' => 'img/lot/containers-3.jpg', 'title' => '24/7 Access',            'sub' => 'On Our Maui Lot'],
            ['img' => 'img/lot/containers-4.jpg', 'title' => 'Extra Protection',       'sub' => 'Sealed Storage'],
            ['img' => 'img/lot/containers-5.jpg', 'title' => 'More Space',             'sub' => 'For a Brighter Tomorrow'],
            ['img' => 'img/lot/containers-6.jpg', 'title' => 'Trusted Local Storage',  'sub' => 'Containers on Maui'],
        ],
    ],
];

// "All" tab = every photo from every category, in category order.
$lotAllItems = [];
foreach ($lotCategories as $cat) {
    $lotAllItems = array_merge($lotAllItems, $cat['items']);
}

function renderLotTrack($items) {
    // Duplicated so the CSS animation (translateX to -50%) loops seamlessly.
    $doubled = array_merge($items, $items);
    foreach ($doubled as $item) {
        $imgAbs = __DIR__ . '/../' . $item['img'];
        $src = $item['img'] . (is_file($imgAbs) ? '?v=' . filemtime($imgAbs) : '');
        echo '<div class="gallery-item lot-carousel-item">';
        echo '  <div class="gallery-img-wrapper" data-full="' . htmlspecialchars($item['img']) . '">';
        echo '    <img src="' . htmlspecialchars($src) . '" alt="' . htmlspecialchars($item['title']) . '" loading="lazy">';
        echo '    <div class="gallery-overlay">';
        echo '      <div class="gallery-caption"><h4>' . htmlspecialchars($item['title']) . '</h4><p>' . htmlspecialchars($item['sub']) . '</p></div>';
        echo '      <div class="zoom-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg></div>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
}
?>
<section class="gallery-section" id="gallery">
    <div class="container">

        <div class="section-header text-center" data-scroll-reveal>
            <h2 class="section-title">Around the Lot</h2>
            <p class="section-subtitle">A look at the everyday vehicles and services we handle here on Maui.</p>
        </div>

        <!-- Tabs (single line, scrolls horizontally on small screens) -->
        <div class="lot-tabs-wrapper" data-scroll-reveal>
            <div class="lot-tabs">
                <button class="filter-btn active" data-lot-filter="all">All</button>
                <?php foreach ($lotCategories as $slug => $cat): ?>
                    <button class="filter-btn" data-lot-filter="<?php echo htmlspecialchars($slug); ?>"><?php echo htmlspecialchars($cat['label']); ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Carousels: one per category, only the active one is shown -->
        <div class="lot-carousels" data-scroll-reveal>

            <div class="lot-carousel-wrapper is-active" data-lot-panel="all">
                <div class="lot-carousel-track">
                    <?php renderLotTrack($lotAllItems); ?>
                </div>
            </div>

            <?php foreach ($lotCategories as $slug => $cat): ?>
            <div class="lot-carousel-wrapper" data-lot-panel="<?php echo htmlspecialchars($slug); ?>">
                <div class="lot-carousel-track">
                    <?php renderLotTrack($cat['items']); ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox-overlay" id="galleryLightbox">
    <button class="lightbox-close" id="lightboxClose">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    <div class="lightbox-content">
        <img src="" alt="" id="lightboxImg">
    </div>
</div>
