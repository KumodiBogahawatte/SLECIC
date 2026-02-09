<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/header.css">
<link rel="stylesheet" href="assets/css/style.css">
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
            <li><a href="index" class="nav-link current">Home</a></li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link dropdown-trigger">About Us <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="Who-we-are" class="dropdown-link">Who we are</a></li>
                    <li><a href="Our-role" class="dropdown-link">Our role</a></li>
                    <li><a href="Leadership" class="dropdown-link">Leadership</a></li>
                    <li><a href="Customer-testimonials" class="dropdown-link">Customer Testimonials</a></li>
                    <li><a href="career-Opportunities" class="dropdown-link">Career Opportunities</a></li>
                </ul>
            </li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link dropdown-trigger">Our Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="CreditInsurance.php" class="dropdown-link">Credit Insurance</a></li>
                    <li><a href="creditGurantee.php" class="dropdown-link">Credit Guarantee</a></li>
                    <li><a href="apara.php" class="dropdown-link">Apara</a></li>
                    <li><a href="buyer-info.php" class="dropdown-link">Buyer Information</a></li>
                    <li><a href="epg.php" class="dropdown-link">Export Performance Guarantee</a></li>
                </ul>
            </li>
            <li><a href="#" class="nav-link">News</a></li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link dropdown-trigger">Publications <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="annual-reports.php" class="dropdown-link">Annual Reports and Acts</a></li>
                    <li><a href="market-bullets.php" class="dropdown-link">Market Bulletins</a></li>
                    <li><a href="video.php" class="dropdown-link">video</a></li>
                </ul>
            </li>
            <li><a href="contact" class="nav-link">Contact Us</a></li>
        </ul>
    </nav>

    <div class="header-actions">
        <a href="#" class="btn-client-area">Client Area</a>
    </div>
</header>

<!-- Header scroll behavior and mobile menu -->
<script>
        (function () {
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