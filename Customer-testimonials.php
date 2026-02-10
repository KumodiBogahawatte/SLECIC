<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="assets/css/testimonials.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Customer Testimonials</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Customer Testimonials</span>
        </nav>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="section-header">
            <h2>What Our Clients Say</h2>
            <p class="section-subtitle">Trusted by leading exporters across Sri Lanka</p>
        </div>

        <div class="testimonials-carousel">
            <div class="testimonials-wrapper" id="testimonialsWrapper">
                
                <!-- Testimonial 1 -->
                <div class="testimonial-card active">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">
                            It is a great pleasure to state that we have been working with SLECIC for more than 10 years for insurance against the credit risk. We take this opportunity to thank for the continuous support, flexibility and the positive attitude of SLECIC in tailoring the policies for export credit with the intention of securing the exporters. We are sincerely grateful to have the contribution of SLECIC in our successful journey toward being the 2nd largest Tea exporter today and no doubt that SLECIC will be a great partner to any exporter who wish to expand their export business.
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/testinominals/anverally.jpg" alt="Anverally & Sons" onerror="this.src='assets/images/testinominals/default-company.png'">
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Anverally & Sons (Pvt) Ltd</h4>
                                <p class="author-title">Leading Tea Exporter</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigation Controls - Uncomment when you have multiple testimonials -->
            <!--
            <div class="carousel-controls">
                <button class="carousel-btn prev-btn" id="prevBtn" aria-label="Previous testimonial">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="carousel-dots" id="carouselDots"></div>
                <button class="carousel-btn next-btn" id="nextBtn" aria-label="Next testimonial">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            -->
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Carousel Script - Uncomment when you have multiple testimonials -->
<!--
<script>
    // Testimonials Carousel
    const wrapper = document.getElementById('testimonialsWrapper');
    const cards = wrapper.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsContainer = document.getElementById('carouselDots');
    
    let currentIndex = 0;
    let autoSlideInterval;
    const autoSlideDelay = 6000; // 6 seconds

    // Create dots
    cards.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.classList.add('carousel-dot');
        dot.setAttribute('aria-label', `Go to testimonial ${index + 1}`);
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll('.carousel-dot');

    function updateCarousel() {
        cards.forEach((card, index) => {
            card.classList.remove('active', 'prev', 'next');
            if (index === currentIndex) {
                card.classList.add('active');
            } else if (index < currentIndex) {
                card.classList.add('prev');
            } else {
                card.classList.add('next');
            }
        });

        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
        resetAutoSlide();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % cards.length;
        updateCarousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + cards.length) % cards.length;
        updateCarousel();
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, autoSlideDelay);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    // Event Listeners
    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoSlide();
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoSlide();
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
            nextSlide();
            resetAutoSlide();
        } else if (e.key === 'ArrowLeft') {
            prevSlide();
            resetAutoSlide();
        }
    });

    // Pause on hover
    wrapper.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
    wrapper.addEventListener('mouseleave', startAutoSlide);

    // Start auto slide
    startAutoSlide();
</script>
-->