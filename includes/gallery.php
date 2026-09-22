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
            ['img' => 'img/lot/vehicles-1.jpg', 'title' => 'Off-Road Ready',     'sub' => 'Stored on Maui'],
            ['img' => 'img/lot/vehicles-2.jpg', 'title' => 'Weekend Cruiser',    'sub' => 'Cars, Trucks & More'],
            ['img' => 'img/lot/vehicles-3.jpg', 'title' => 'Sunset Convertible', 'sub' => 'Safe & Secure'],
            ['img' => 'img/lot/vehicles-4.jpg', 'title' => 'Island Ready',       'sub' => 'On Our Maui Lot'],
        ],
    ],
    'storage' => [
        'label' => 'Storage',
        'items' => [
            ['img' => 'img/lot/storage-1.jpg', 'title' => 'Covered Storage',    'sub' => 'On Our Maui Lot'],
            ['img' => 'img/lot/storage-2.jpg', 'title' => 'Secure Bays',        'sub' => 'Cars, Trucks & More'],
            ['img' => 'img/lot/storage-3.jpg', 'title' => 'Our Facility',       'sub' => 'Central Maui'],
            ['img' => 'img/lot/storage-4.jpg', 'title' => 'Classics Welcome',   'sub' => 'Stored with Care'],
            ['img' => 'img/lot/storage-5.jpg', 'title' => 'Room for Everything','sub' => 'Boats, RVs & Fleets'],
        ],
    ],
    'detailing' => [
        'label' => 'Detailing',
        'items' => [
            ['img' => 'img/lot/detailing-1.jpg', 'title' => 'Full-Service Care',   'sub' => 'Vehicle Service & Detailing'],
            ['img' => 'img/lot/detailing-2.jpg', 'title' => 'Interior Detailing',  'sub' => 'Clean Rides, Happier Journeys'],
            ['img' => 'img/lot/detailing-3.jpg', 'title' => 'Trusted Vehicle Care','sub' => 'For a Smoother Maui Journey'],
            ['img' => 'img/lot/detailing-4.jpg', 'title' => 'Hand Wash & Detail',  'sub' => 'Ready When You Are'],
            ['img' => 'img/lot/detailing-5.jpg', 'title' => 'Complete Detailing',  'sub' => 'Wash, Wax & Paint Protection'],
        ],
    ],
    'registrations' => [
        'label' => 'Registrations',
        'items' => [
            ['img' => 'img/lot/registrations-1.jpg', 'title' => 'Registration Assistance',  'sub' => 'Renewals & Transfers'],
            ['img' => 'img/lot/registrations-2.jpg', 'title' => 'Title & Registration',     'sub' => 'We Handle the Paperwork'],
            ['img' => 'img/lot/registrations-3.jpg', 'title' => 'On-the-Spot Service',      'sub' => 'Fast & Friendly'],
            ['img' => 'img/lot/registrations-4.jpg', 'title' => 'Mobile Registration',      'sub' => 'We Come to You'],
            ['img' => 'img/lot/registrations-5.jpg', 'title' => 'Registration Help',        'sub' => 'On Our Maui Lot'],
        ],
    ],
    'driving-test' => [
        'label' => 'Driving Test',
        'items' => [
            ['img' => 'img/lot/driving-test-1.jpg', 'title' => 'Test-Day Guidance',       'sub' => 'Confidence Behind the Wheel'],
            ['img' => 'img/lot/driving-test-2.jpg', 'title' => 'Test Passed',             'sub' => 'Ready to Drive'],
            ['img' => 'img/lot/driving-test-3.jpg', 'title' => 'Student Driver',          'sub' => 'DMV Rental'],
            ['img' => 'img/lot/driving-test-4.jpg', 'title' => 'Pass with Confidence',    'sub' => 'DMV Test Vehicle'],
            ['img' => 'img/lot/driving-test-5.jpg', 'title' => 'DMV Road Test',           'sub' => 'Fully Insured Vehicle'],
        ],
    ],
    'containers' => [
        'label' => 'Containers',
        'items' => [
            ['img' => 'img/lot/containers-1.jpg', 'title' => 'Container Storage',      'sub' => 'Secure & Flexible'],
            ['img' => 'img/lot/containers-2.jpg', 'title' => 'Loading & Handling',     'sub' => 'Careful, Professional Service'],
            ['img' => 'img/lot/containers-3.jpg', 'title' => 'Arriving by Sea',        'sub' => 'Dockside Ready'],
            ['img' => 'img/lot/containers-4.jpg', 'title' => 'Stacked & Secure',       'sub' => 'Sealed Storage'],
            ['img' => 'img/lot/containers-5.jpg', 'title' => 'Extra Protection',       'sub' => 'Shielded from the Elements'],
        ],
    ],
];

// Shuffle each tab's photo order so the carousel doesn't scroll in the
// same 1-2-3-4-5 sequence every time — re-randomized on every page load.
foreach ($lotCategories as $slug => $cat) {
    shuffle($lotCategories[$slug]['items']);
}

// "All" tab = every photo from every category, shuffled together.
$lotAllItems = [];
foreach ($lotCategories as $cat) {
    $lotAllItems = array_merge($lotAllItems, $cat['items']);
}
shuffle($lotAllItems);

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
