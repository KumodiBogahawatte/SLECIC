<link rel="stylesheet" href="assets/css/footer.css">
<footer>
    <div class="footer-content">
        <!-- Logo and Company Info -->
        <div class="footer-logo-section">
            <div class="logo-container">
                <img src="assets/images/logo/logo_main.png" alt="SLECIC Logo" class="footer-logo">
            </div>
            <div class="company-info">
                <p>Sri Lanka Export Credit Insurance Corporation (SLECIC)</p>
                <p>Leading provider of trade-related credit insurance solutions.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/SriLankaExportCreditInsuranceCorporation?mibextid=LQQJ4d" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <!-- <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a> -->
                    <a href="https://www.linkedin.com/company/sri-lanka-export-credit-insurance-corporation/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/@slecic" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="footer-section">
            <h4>Contact Us</h4>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>Level 4, <br> NDB-EDB Tower,<br> No 42,<br> Nawam Mawatha,<br>Colombo 02</div>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <div>info@slecic.lk</div>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <div>0112 307 519 <br> 0112 307 523</div>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>

        <!-- Search -->
        <div class="footer-section">
            <h4>Search</h4>
            <div class="search-box">
                <input type="text" placeholder="Search here">
                <button type="submit">Search</button>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-inner">
            <div class="copyright">© 2026 All Rights Reserved By SLTDS</div>
            <ul class="footer-bottom-links">
                <li><a href="faq">FAQ</a></li>
                <li><a href="glossary">Glossary</a></li>
                <li><a href="download">Download</a></li>
                <li><a href="sitemap">Site Map</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Floating Quick Access Buttons -->
<div class="quick-access-buttons">
    <a href="faq" class="quick-btn">
        <span>FAQ</span>
    </a>
    <a href="glossary" class="quick-btn">
        <span>Glossary</span>
    </a>
    <a href="download" class="quick-btn">
        <span>Downloads</span>
    </a>
    <a href="sitemap" class="quick-btn">
        <span>Site Map</span>
    </a>
    <a href="https://apara.slecic.lk/" class="quick-btn">
        <span>APARA System</span>
    </a>
</div>

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
// Back to Top Button Functionality
const backToTopBtn = document.getElementById('backToTop');

// Show button when user scrolls down 300px
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.add('show');
    } else {
        backToTopBtn.classList.remove('show');
    }
});

// Scroll to top when button is clicked
backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Highlight active quick access button
(function() {
    const currentPath = window.location.pathname.toLowerCase();
    const quickBtns = document.querySelectorAll('.quick-btn');
    
    quickBtns.forEach(btn => {
        const href = btn.getAttribute('href').toLowerCase();
        if (currentPath.includes(href) || currentPath.includes(href.replace('.php', ''))) {
            btn.classList.add('active');
        }
    });
})();
</script>