<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sri Lanka Export Credit Insurance Corporation</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/header.css">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Add GLightbox CSS in your header or here -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Anime.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<header class="slecic-header">
    <div class="header-branding">
        <a href="/" class="brand-link">
            <img src="assets/images/logo/logo_main.png" alt="SLECIC Logo" class="brand-logo">
        </a>
    </div>

    <!-- Mobile Menu Toggle Button -->
    <button class="mobile-menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
    </button>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay"></div>

    <nav class="header-nav" id="mainNav">
        <ul class="nav-list">
            <li><a href="index" class="nav-link<?php if ($current == 'index.php') echo ' current'; ?>">Home</a></li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link dropdown-trigger<?php if (in_array($current, ['Who-we-are.php', 'Our-role.php', 'Leadership.php', 'Customer-testimonials.php', 'career-Opportunities.php'])) echo ' current'; ?>">About Us <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="Who-we-are" class="dropdown-link<?php if ($current == 'Who-we-are.php') echo ' current'; ?>">Who we are</a></li>
                    <li><a href="Our-role" class="dropdown-link<?php if ($current == 'Our-role.php') echo ' current'; ?>">Our role</a></li>
                    <li><a href="Leadership" class="dropdown-link<?php if ($current == 'Leadership.php') echo ' current'; ?>">Leadership</a></li>
                    <li><a href="Customer-testimonials" class="dropdown-link<?php if ($current == 'Customer-testimonials.php') echo ' current'; ?>">Customer Testimonials</a></li>
                    <li><a href="career-Opportunities" class="dropdown-link<?php if ($current == 'career-Opportunities.php') echo ' current'; ?>">Career Opportunities</a></li>
                </ul>
            </li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link dropdown-trigger<?php if (in_array($current, ['CreditInsurance.php', 'creditGurantee.php', 'apara.php', 'buyer-info.php', 'epg.php'])) echo ' current'; ?>">Our Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="CreditInsurance" class="dropdown-link<?php if ($current == 'CreditInsurance.php') echo ' current'; ?>">Credit Insurance</a></li>
                    <li><a href="creditGurantee" class="dropdown-link<?php if ($current == 'creditGurantee.php') echo ' current'; ?>">Credit Guarantee</a></li>
                    <li><a href="apara" class="dropdown-link<?php if ($current == 'apara.php') echo ' current'; ?>">Apara</a></li>
                    <li><a href="buyer-info" class="dropdown-link<?php if ($current == 'buyer-info.php') echo ' current'; ?>">Buyer Information</a></li>
                    <li><a href="epg" class="dropdown-link<?php if ($current == 'epg.php') echo ' current'; ?>">Export Performance Guarantee</a></li>
                </ul>
            </li>
            <li><a href="news" class="nav-link<?php if ($current == 'news.php') echo ' current'; ?>">News & Events</a></li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link dropdown-trigger<?php if (in_array($current, ['annual-reports.php', 'market-bullets.php', 'video.php'])) echo ' current'; ?>">Publications <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="annual-reports" class="dropdown-link<?php if ($current == 'annual-reports.php') echo ' current'; ?>">Annual Reports and Acts</a></li>
                    <li><a href="market-bullets" class="dropdown-link<?php if ($current == 'market-bullets.php') echo ' current'; ?>">Market Bulletins</a></li>
                    <li><a href="video" class="dropdown-link<?php if ($current == 'video.php') echo ' current'; ?>">video</a></li>
                </ul>
            </li>
            <li><a href="contact" class="nav-link<?php if ($current == 'contact.php') echo ' current'; ?>">Contact Us</a></li>
        </ul>
    </nav>

    <!-- <div class="header-actions">
        <a href="#" class="btn-client-area">Client Area</a>
    </div> -->
</header>

<!-- Header scroll behavior and mobile menu -->
<script>
    (function() {
        const header = document.querySelector('.slecic-header');
        if (!header) return;

        const SCROLL_TRIGGER = 50; // px from top to start background

        function onScroll() {
            if (window.scrollY > SCROLL_TRIGGER) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // Run once on load and then on scroll
        window.addEventListener('scroll', onScroll);
        window.addEventListener('load', onScroll);
    })();

    // Mobile Menu Toggle Functionality
    (function() {
        const mobileToggle = document.querySelector('.mobile-menu-toggle');
        const mobileNav = document.querySelector('.header-nav');
        const mobileOverlay = document.querySelector('.mobile-menu-overlay');
        const body = document.body;

        if (!mobileToggle || !mobileNav) return;

        // Toggle menu function
        function toggleMenu() {
            const isActive = mobileNav.classList.contains('active');

            if (isActive) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        function openMenu() {
            mobileNav.classList.add('active');
            mobileToggle.classList.add('active');
            mobileToggle.setAttribute('aria-expanded', 'true');
            if (mobileOverlay) {
                mobileOverlay.classList.add('active');
            }
            body.style.overflow = 'hidden'; // Prevent body scroll
        }

        function closeMenu() {
            mobileNav.classList.remove('active');
            mobileToggle.classList.remove('active');
            mobileToggle.setAttribute('aria-expanded', 'false');
            if (mobileOverlay) {
                mobileOverlay.classList.remove('active');
            }
            body.style.overflow = ''; // Restore body scroll

            // Close all dropdowns when closing menu
            const activeDropdowns = document.querySelectorAll('.nav-item-dropdown.active');
            activeDropdowns.forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }

        // Toggle button click
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });

        // Overlay click to close
        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', closeMenu);
        }

        // Close menu when clicking on a nav link (except dropdown triggers)
        const navLinks = document.querySelectorAll('.header-nav .nav-link:not(.dropdown-trigger)');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    closeMenu();
                }
            });
        });

        // Close menu when clicking on dropdown links
        const dropdownLinks = document.querySelectorAll('.dropdown-link');
        dropdownLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    closeMenu();
                }
            });
        });

        // Close menu on window resize if it becomes desktop size
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 768) {
                    closeMenu();
                }
            }, 250);
        });

        // Mobile Dropdown Toggle Functionality
        const dropdownTriggers = document.querySelectorAll('.dropdown-trigger');

        dropdownTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                // Only handle click on mobile - desktop uses CSS hover
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    e.stopPropagation();

                    const dropdownItem = this.closest('.nav-item-dropdown');
                    const isActive = dropdownItem.classList.contains('active');

                    // Close all other dropdowns
                    document.querySelectorAll('.nav-item-dropdown.active').forEach(item => {
                        if (item !== dropdownItem) {
                            item.classList.remove('active');
                        }
                    });

                    // Toggle current dropdown
                    if (isActive) {
                        dropdownItem.classList.remove('active');
                    } else {
                        dropdownItem.classList.add('active');
                    }
                }
                // On desktop (>768px), don't prevent default - let CSS hover handle it
            });
        });

        // Close dropdowns when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                const clickedDropdown = e.target.closest('.nav-item-dropdown');
                if (!clickedDropdown) {
                    document.querySelectorAll('.nav-item-dropdown.active').forEach(item => {
                        item.classList.remove('active');
                    });
                }
            }
        });

        // Handle ESC key to close menu
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                closeMenu();
            }
        });
    })();
</script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>