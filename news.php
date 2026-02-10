<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="assets/css/news.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>News & Events</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">News & Events</span>
        </nav>
    </div>
</section>

<section class="news-section">
    <div class="container">
        <div class="news-list">
            <!-- Example News Item -->
            <div class="news-item"  data-aos="fade-up" data-aos-duration="1000">
                <div class="news-meta">
                    <span class="news-date">10 Feb 2026</span>
                    <span class="news-time">14:30</span>
                </div>
                <div class="news-row compact">
                    <div class="news-image">
                        <a href="assets/images/news/lolc.jpeg" class="news-image-link glightbox" data-gallery="news1">
                            <img src="assets/images/news/lolc.jpeg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-heading">
                        <h2>A significant milestone in SLECIC’s journey</h2>
                        <p class="news-excerpt">LOLC Finance PLC and Sri Lanka Export Credit Insurance Corporation (SLECIC) today marked a historic milestone with the signing of the APARA Agreement, the first such agreement in SLECIC's history with a Non-Banking Financial Institution (NBFI).</p>
                        <a class="news-readmore-link" href="news-details.php?id=1">Read More</a>
                    </div>
                </div>
            </div>

            <div class="news-item"  data-aos="fade-up" data-aos-duration="1000">
                <div class="news-meta">
                    <span class="news-date">05 Feb 2026</span>
                    <span class="news-time">10:20</span>
                </div>
                <div class="news-row compact">
                    <div class="news-image">
                        <a href="assets/images/news/PA1.jpeg" class="news-image-link glightbox" data-gallery="news2">
                            <img src="assets/images/news/PA1.jpeg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-heading">
                        <h2>SLECIC at the 27th Presidential Export Awards 2025</h2>
                        <p class="news-excerpt">SLECIC is proud to have participated as a Silver Sponsor at the prestigious 27th Presidential Export Awards Ceremony, organized by the Sri Lanka Export Development Board (EDB) at BMICH on December 11, 2025.</p>
                        <a class="news-readmore-link" href="news-details.php?id=2">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Add more news items here -->

            <!-- Pagination Bar -->
            <div class="news-pagination">
                <a href="#" class="news-page current">1</a>
                <a href="#" class="news-page">2</a>
                <a href="#" class="news-page">3</a>
                <span class="news-page-dots">...</span>
                <a href="#" class="news-page">10</a>
            </div>
        </div>
    </div>
</section>

<script>
    // Initialize GLightbox
    if (typeof GLightbox !== 'undefined') {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });
    }
</script>

<?php include 'includes/footer.php'; ?>