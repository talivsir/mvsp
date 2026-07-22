<?php
/**
 * Main Navigation Structure with Mega Menu
 */
$is_mobile_menu = isset($is_mobile) && $is_mobile;
?>
<nav class="<?php echo $is_mobile_menu ? 'mobile-nav' : 'desktop-nav'; ?>">
    <ul class="<?php echo $is_mobile_menu ? 'mobile-nav-links' : 'nav-links'; ?>">
        <li>
            <a href="index.php" class="nav-link smooth-underline">Home</a>
        </li>
        <li>
            <a href="about.php" class="nav-link smooth-underline">About Us</a>
        </li>
        
        <!-- Mega Menu Item -->
        <li class="has-mega-menu">
            <a href="services.php" class="nav-link smooth-underline mega-toggle">
                Services
                <svg class="dropdown-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            
            <?php if (!$is_mobile_menu): ?>
            <!-- Desktop Mega Menu Dropdown -->
            <div class="mega-menu-dropdown">
                <div class="mega-menu-inner container">
                    <div class="mega-menu-col">
                        <h4>Storage Options</h4>
                        <ul>
                            <li>
                                <a href="storage.php">
                                    <span class="mega-link-title">Covered Indoor Storage</span>
                                    <span class="mega-link-desc">Keeps your vehicle out of the sun, salt air, and rain.</span>
                                </a>
                            </li>
                            <li>
                                <a href="storage.php">
                                    <span class="mega-link-title">Outdoor & Fleet</span>
                                    <span class="mega-link-desc">Affordable, fenced space for cars, trucks, boats & RVs.</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu-col">
                        <h4>Specialty Services</h4>
                        <ul>
                            <li>
                                <a href="services.php#detailing">
                                    <span class="mega-link-title">Wash & Detailing</span>
                                    <span class="mega-link-desc">Hand wash and full detailing to keep it clean.</span>
                                </a>
                            </li>
                            <li>
                                <a href="dmv-rental.php">
                                    <span class="mega-link-title">DMV Rental</span>
                                    <span class="mega-link-desc">Fully compliant vehicles for road tests.</span>
                                </a>
                            </li>
                            <li>
                                <a href="services.php#pickup">
                                    <span class="mega-link-title">Airport & Pier Pickup</span>
                                    <span class="mega-link-desc">Seamless delivery right when you arrive.</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu-col mega-menu-featured">
                        <div class="featured-card">
                            <img src="https://images.unsplash.com/photo-1596706059298-b80c3e9863a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Storage Facility">
                            <div class="featured-card-content">
                                <h5>Reserve Your Spot</h5>
                                <p>Limited indoor spaces available for the season.</p>
                                <a href="contact.php" class="link-arrow">Book Now <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2"/></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <!-- Mobile Accordion sub-menu -->
            <ul class="mobile-sub-menu">
                <li><a href="storage.php">Indoor Storage</a></li>
                <li><a href="storage.php">Outdoor & Fleet</a></li>
                <li><a href="services.php#detailing">Wash & Detailing</a></li>
                <li><a href="dmv-rental.php">DMV Rental</a></li>
                <li><a href="services.php#pickup">Airport & Pier Pickup</a></li>
            </ul>
            <?php endif; ?>
        </li>
        
        <li>
            <a href="contact.php" class="nav-link smooth-underline">Contact</a>
        </li>
    </ul>
</nav>
