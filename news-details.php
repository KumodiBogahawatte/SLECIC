<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/news-details.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>News & Events</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <a href="news.php">News & Events</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">News Details</span>
        </nav>
    </div>
</section>

<section class="news-section">
    <div class="container">
        <?php
        $id = isset($_GET['id']) ? $_GET['id'] : '1';
        if ($id == '1') {
        ?>
        <div class="news-details-card">
            <div class="news-details-meta">
                <span class="news-date">10 Feb 2026</span>
                <span class="news-time">14:30</span>
            </div>
            <h1 class="news-details-title">A significant milestone in SLECIC’s journey</h1>
            <div class="news-details-gallery">
                <a href="assets/images/news/lolc.jpeg" class="glightbox" data-gallery="news-details1">
                    <img src="assets/images/news/lolc.jpeg" alt="LOLC Finance PLC and SLECIC signing ceremony">
                </a>
                <a href="assets/images/news/lolc2.jpeg" class="glightbox" data-gallery="news-details1">
                    <img src="assets/images/news/lolc2.jpeg" alt="Group photo of participants">
                </a>
                <a href="assets/images/news/lolc3.jpeg" class="glightbox" data-gallery="news-details1">
                    <img src="assets/images/news/lolc3.jpeg" alt="Signing moment">
                </a>
                <a href="assets/images/news/lolc4.jpeg" class="glightbox" data-gallery="news-details1">
                    <img src="assets/images/news/lolc4.jpeg" alt="Document exchange">
                </a>
                <a href="assets/images/news/lolc5.jpeg" class="glightbox" data-gallery="news-details1">
                    <img src="assets/images/news/lolc5.jpeg" alt="Team celebration">
                </a>
            </div>
            <div class="news-details-content">
                <p>LOLC Finance PLC and Sri Lanka Export Credit Insurance Corporation (SLECIC) today marked a historic milestone with the signing of the APARA Agreement, the first such agreement in SLECIC's history with a Non-Banking Financial Institution (NBFI).</p>
                <p>The agreement was signed in the presence of the senior leadership of LOLC Finance PLC, including Director/CEO Mr. Krishan Thilakarathne; Chief Operating Officer Mr. Montini Warnakula; Head of SME & Personal Finance, Mr. Charith Jagoda; Chief Manager – Personal Finance, Mr. Aruna Logus; Deputy Manager – Personal Finance, Mr. Ashraff Azmi; and Ms. Dinali Weerawarna.</p>
                <p>Representing SLECIC at the event were Chairman & Managing Director, Prof. Dr. Aruna Shanthaarachchi; Assistant General Manager – Marketing, Ms. Shama Selvaratnam; Customer Relationship Team Leader, Mr. Lakshman Jayaweera; Assistant Manager – Operations, Mr. Dulip Wickramasinghe; Assistant Manager – Marketing, Ms. Oshani Pabasara; and Junior Manager – Marketing, Ms. Dulakshi Saubhagya.</p>
                <p>This partnership marks a new chapter in strengthening financial collaboration and enhancing support for Sri Lanka's migrant workers and the national economy.</p>
                <p>SLECIC is proud to announce the launch of its new Export Credit Insurance product, designed to support exporters with enhanced coverage and streamlined claims. The event was attended by industry leaders and government officials.</p>
            </div>
            <a href="news.php" class="news-back-link">
                <i class="fas fa-arrow-left"></i> Back to News & Events
            </a>
        </div>
        <?php } else if ($id == '2') { ?>
        <div class="news-details-card">
            <div class="news-details-meta">
                <span class="news-date">11 Dec 2025</span>
                <span class="news-time">10:20</span>
            </div>
            <h1 class="news-details-title">SLECIC at the 27th Presidential Export Awards 2025</h1>
            <div class="news-details-gallery">
                <a href="assets/images/news/PA1.jpeg" class="glightbox" data-gallery="news-details2">
                    <img src="assets/images/news/PA1.jpeg" alt="SLECIC at Presidential Export Awards 2025">
                </a>
                <a href="assets/images/news/PA2.jpeg" class="glightbox" data-gallery="news-details2">
                    <img src="assets/images/news/PA2.jpeg" alt="SLECIC at Presidential Export Awards 2025">
                </a>
                <a href="assets/images/news/PA3.jpeg" class="glightbox" data-gallery="news-details2">
                    <img src="assets/images/news/PA3.jpeg" alt="SLECIC at Presidential Export Awards 2025">
                </a>
                <a href="assets/images/news/PA4.jpeg" class="glightbox" data-gallery="news-details2">
                    <img src="assets/images/news/PA4.jpeg" alt="SLECIC at Presidential Export Awards 2025">
                </a>
                <a href="assets/images/news/PA5.jpeg" class="glightbox" data-gallery="news-details2">
                    <img src="assets/images/news/PA5.jpeg" alt="SLECIC at Presidential Export Awards 2025">
                </a>
            </div>
            <div class="news-details-content">
                <p>SLECIC is proud to have participated as a Silver Sponsor at the prestigious 27th Presidential Export Awards Ceremony, organized by the Sri Lanka Export Development Board (EDB) at BMICH on December 11, 2025.</p>
                <p>Our Chairman, Prof. Dr. Aruna Shanthaarachchi, graced the occasion as a Special Guest and had the honor of presenting awards to outstanding exporters who continue to drive Sri Lanka’s economic growth.</p>
                <p>Together, we celebrate the excellence and resilience of Sri Lankan exporters who make our nation shine globally.</p>
            </div>
            <a href="news.php" class="news-back-link">
                <i class="fas fa-arrow-left"></i> Back to News & Events
            </a>
        </div>
        <?php } ?>
    </div>
</section>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- GLightbox Scripts -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize GLightbox
    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: false,
        plyr: {
            css: 'https://cdn.plyr.io/3.6.8/plyr.css',
            js: 'https://cdn.plyr.io/3.6.8/plyr.js'
        }
    });
    // Add smooth scroll for back to top if needed
    const backLink = document.querySelector('.news-back-link');
    if (backLink) {
        backLink.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = this.href;
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?>