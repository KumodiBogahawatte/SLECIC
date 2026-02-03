<!-- Footer -->
<footer class="py-4 text-white">
    <div class="container py-3">
        <div class="row text-center text-lg-start">
            <!-- Logo and Description Column -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <img src="/assets/images/footer-logo.jpg" alt="SLECIC Logo" class="footer-logo">
                    <p class="text-center text-lg-start mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>

            <!-- Contact Us Column -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="mb-4 text-center text-lg-start">Contact Us</h5>
                <div class="contact-info text-center text-lg-start">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>No 42 Nawam Mawatha,<br>Colombo 02</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@slecic.lk</span>
                    </div>
                </div>
                
                <div class="quick-links mt-4">
                    <h5 class="text-center text-lg-start">Home</h5>
                    <ul class="text-center text-lg-start">
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Search Column -->
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <h5 class="mb-4 text-center text-lg-start">Search</h5>
                    <form class="w-100 search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search here">
                            <button class="btn" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="bottom-footer">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p>© 2025 All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <ul class="bottom-links">
                        <li><a href="#privacy">Privacy Policy</a></li>
                        <li><a href="#terms">Terms of Use</a></li>
                        <li><a href="#legal">Legal</a></li>
                        <li><a href="#sitemap">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Footer Styles */
footer {
    background-color: #8B0000; /* Dark red background */
    color: white;
    padding: 80px 8% 40px 8%;
}

.footer-logo {
    max-width: 80px;
    height: auto;
    margin-bottom: 15px;
}

footer p {
    font-size: 13px;
    line-height: 1.6;
    color: #ffffff;
    opacity: 0.9;
}

/* Contact Us Section */
footer h5 {
    color: #FFD700;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 20px;
}

footer .contact-info {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

footer .contact-item {
    display: flex;
    align-items: start;
    gap: 10px;
    font-size: 13px;
}

footer .contact-item i {
    color: #FFD700;
    margin-top: 3px;
}

/* Quick Links */
footer .quick-links h5 {
    color: white;
    font-weight: 600;
}

footer .quick-links ul {
    list-style: none;
    padding: 0;
}

footer .quick-links ul li {
    margin-bottom: 10px;
}

footer .quick-links ul li a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s;
}

footer .quick-links ul li a:hover {
    color: #FFD700;
}

/* Search Section */
footer .search-box {
    margin-top: 10px;
}

footer .search-box input {
    background-color: rgba(255, 255, 255, 0.9);
    border: none;
    padding: 10px 15px;
    border-radius: 4px 0 0 4px;
    font-size: 14px;
}

footer .search-box button {
    background-color: #FFD700;
    color: #8B0000;
    border: none;
    padding: 10px 25px;
    border-radius: 0 4px 4px 0;
    font-weight: 600;
    transition: background-color 0.3s;
}

footer .search-box button:hover {
    background-color: #FFC700;
}

/* Bottom Footer */
footer .bottom-footer {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    margin-top: 30px;
    padding-top: 20px;
}

footer .bottom-footer p {
    margin: 0;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.8);
}

footer .bottom-links {
    display: flex;
    gap: 20px;
    list-style: none;
    padding: 0;
    margin: 0;
    justify-content: flex-end;
}

footer .bottom-links li a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    font-size: 12px;
    transition: color 0.3s;
}

footer .bottom-links li a:hover {
    color: #FFD700;
}

/* Responsive Design */
@media (max-width: 768px) {
    footer .bottom-links {
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 15px;
    }
    
    footer {
        text-align: center;
    }
    
    footer .contact-item {
        justify-content: center;
    }
}
</style>