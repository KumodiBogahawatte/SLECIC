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

    <nav class="header-nav">
        <ul class="nav-list">
            <li><a href="index" class="nav-link current">Home</a></li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link">About Us <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="Who-we-are" class="dropdown-link">Who we are</a></li>
                    <li><a href="Our-role" class="dropdown-link">Our role</a></li>
                    <li><a href="Leadership" class="dropdown-link">Leadership</a></li>
                    <li><a href="Customer-testimonials" class="dropdown-link">Customer Testimonials</a></li>
                    <li><a href="career-Opportunities" class="dropdown-link">Career Opportunities</a></li>
                </ul>
            </li>
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link">Our Services <i class="fas fa-chevron-down"></i></a>
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
                <a href="#" class="nav-link">Publications <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="annual-reports.php" class="dropdown-link">Annual Reports and Acts</a></li>
                    <li><a href="market-bullets.php" class="dropdown-link">Market Bulletins</a></li>
                    <li><a href="video.php" class="dropdown-link">video</a></li>
                </ul>
            </li>
            <li><a href="#" class="nav-link">Contact Us</a></li>
        </ul>
    </nav>

    <div class="header-actions">
        <a href="#" class="btn-client-area">Client Area</a>
    </div>
</header>

<!-- Header scroll behavior -->
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
    </script>