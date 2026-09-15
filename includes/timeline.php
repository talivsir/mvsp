<?php
/* Cache-bust local timeline images so an updated file is never served stale,
   and fall back gracefully (no query string, no PHP warning) if one is missing. */
function timelineImg($relPath) {
    $abs = __DIR__ . '/../' . $relPath;
    return $relPath . (is_file($abs) ? '?v=' . filemtime($abs) : '');
}

$expCards = [
    [
        'num'   => '01',
        'area'  => 'a',
        'size'  => 'exp-card--large',
        'img'   => timelineImg('img/car-washing.jpg'),
        'alt'   => 'Car washing and detailing',
        'title' => 'Wash &amp; Detailing',
        'desc'  => 'Optional hand wash and full detailing so your vehicle is fresh, clean, and ready the moment you return.',
        'icon'  => '<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" stroke-linejoin="round"></path>',
    ],
    [
        'num'   => '02',
        'area'  => 'b',
        'size'  => 'exp-card--tall',
        'img'   => timelineImg('img/vehicle-storage.jpg'),
        'alt'   => 'Vehicle storage',
        'title' => 'Vehicle Storage',
        'desc'  => 'Kept secure and cared for by our local family team, in a fully fenced facility, while you&rsquo;re away.',
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',
    ],
    [
        'num'   => '03',
        'area'  => 'c',
        'size'  => '',
        'img'   => timelineImg('img/lot/registrations-1.jpg'),
        'alt'   => 'Vehicle registration renewal',
        'title' => 'Registration Renewal',
        'desc'  => 'We handle your vehicle&rsquo;s registration renewal while it&rsquo;s in our care.',
        'icon'  => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M9 15l2 2 4-4"></path>',
    ],
    [
        'num'   => '04',
        'area'  => 'd',
        'size'  => 'exp-card--tall',
        'img'   => timelineImg('img/container-storage.jpg'),
        'alt'   => 'Container storage',
        'title' => 'Container Storage',
        'desc'  => 'Prefer extra protection? Your vehicle can be sealed in its own private storage container, shielded from dust, weather, and prying eyes.',
        'icon'  => '<path d="M21 8l-9-5-9 5 9 5 9-5z"></path><path d="M3 8v8l9 5 9-5V8"></path><path d="M12 13v8"></path>',
    ],
    [
        'num'   => '05',
        'area'  => 'e',
        'size'  => 'exp-card--wide',
        'img'   => timelineImg('img/servicing-oil-change.jpg'),
        'alt'   => 'Vehicle servicing and oil change',
        'title' => 'Servicing &amp; Oil Change',
        'desc'  => 'Routine servicing and oil changes while your vehicle is in our care, so it&rsquo;s running smoothly and ready to go.',
        'icon'  => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" stroke-linecap="round" stroke-linejoin="round"></path>',
    ],
    [
        'num'   => '06',
        'area'  => 'f',
        'size'  => '',
        'img'   => timelineImg('img/driving-test.jpg'),
        'alt'   => 'DMV driving test vehicle rental',
        'title' => 'Driving Test',
        'desc'  => 'Need a car for your DMV road test? Fully insured, thoroughly inspected, ready with confidence.',
        'icon'  => '<circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="2.5"></circle><path d="M12 5v2.5M6.5 15.5L9 14M17.5 15.5L15 14" stroke-linecap="round"></path>',
    ],
];
?>
<section class="premium-timeline-section" id="how-it-works">
    <div class="container">

        <div class="section-header text-center" data-scroll-reveal>
            <span class="section-eyebrow section-eyebrow--center">Start to Finish</span>
            <h2 class="section-title">The Seamless Experience</h2>
            <p class="section-subtitle">Six ways we take care of your vehicle &mdash; and you &mdash; from drop-off to drive-away.</p>
        </div>

        <div class="exp-bento">
            <?php foreach ($expCards as $i => $c): ?>
            <div class="exp-card exp-card--<?php echo $c['area']; ?> <?php echo $c['size']; ?>" data-scroll-reveal="<?php echo $i % 2 === 0 ? 'left' : 'right'; ?>">
                <img class="exp-card__img" src="<?php echo htmlspecialchars($c['img']); ?>" alt="<?php echo htmlspecialchars($c['alt']); ?>" loading="lazy">
                <div class="exp-card__scrim"></div>
                <span class="exp-card__num"><?php echo $c['num']; ?></span>
                <div class="exp-card__body">
                    <div class="exp-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><?php echo $c['icon']; ?></svg>
                    </div>
                    <h3><?php echo $c['title']; ?></h3>
                    <p><?php echo $c['desc']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
