<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="assets/css/contact.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Contact Us</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Contact Us</span>
        </nav>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">

            <!-- Left Side: Contact Info -->
            <div class="contact-info">
                <div class="info-card">
                    <h3>Head Office</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p>Sri Lanka Export Credit Insurance Corporation (SLECIC),</p>
                            <p>Level 4, NDB-EDB Tower,</p>
                            <p>No 42, Nawam Mawatha,</p>
                            <p>Colombo 02, Sri Lanka</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <p><strong>Phone:</strong> (+94) 112 307 519-523</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-fax"></i>
                        <div>
                            <p><strong>Fax:</strong> (+94) 112 307 515</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <p><strong>Email:</strong> <a href="mailto:inquiry@slecic.lk">inquiry@slecic.lk</a></p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="https://www.facebook.com/SriLankaExportCreditInsuranceCorporation?mibextid=LQQJ4d" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <!-- <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a> -->
                        <a href="https://www.linkedin.com/company/sri-lanka-export-credit-insurance-corporation/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@slecic" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Map -->
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.05905029555!2d79.850627!3d6.918702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2594012ba8b6b%3A0x75f0a1629996235e!2sSri%20Lanka%20Export%20Credit%20Insurance%20Corporation!5e0!3m2!1sen!2sus!4v1770615950690!5m2!1sen!2sus"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="contact-form-wrapper">
                <h2>Get In Touch</h2>
                <p class="form-intro">We would like to hear from you. Please fill the below provided feedback form with your comments. Thank you.</p>

                <div id="contact-message" class="message-box hidden"></div>

                <form id="contact-form" class="contact-form">
                    
                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Title <span class="required">*</span></label>
                        <select id="title" name="title" required>
                            <option value="">Select Title</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Dr">Dr</option>
                        </select>
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Your Name <span class="required">*</span></label>
                        <input type="text" id="name" name="name" required placeholder="Enter your full name">
                    </div>

                    <!-- Contact Number -->
                    <div class="form-group">
                        <label for="phone">Contact Number <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" required placeholder="Enter your contact number">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Your Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email address">
                    </div>

                    <!-- Job Title -->
                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" id="job_title" name="job_title" placeholder="Enter your job title">
                    </div>

                    <!-- Company -->
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" placeholder="Enter your company name">
                    </div>

                    <!-- Subject -->
                    <div class="form-group">
                        <label for="subject">Subject <span class="required">*</span></label>
                        <input type="text" id="subject" name="subject" required placeholder="Enter subject">
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="5" required placeholder="Enter your message..."></textarea>
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree with your <a href="#">terms and conditions</a></label>
                    </div>

                    <!-- Security Code / Captcha -->
                    <div class="form-group captcha-group">
                        <label>Security Code <span class="required">*</span></label>
                        <div class="captcha-wrapper">
                            <div class="captcha-display" id="captchaDisplay"></div>
                            <button type="button" class="captcha-reload" id="reloadCaptcha" aria-label="Reload captcha">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <input type="text" id="captcha_input" name="captcha_input" required placeholder="Enter the code above">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" id="submit-btn" class="btn-submit">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
    // Simple Captcha Generator
    function generateCaptcha() {
        const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
        let captcha = '';
        for (let i = 0; i < 6; i++) {
            captcha += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return captcha;
    }

    let currentCaptcha = generateCaptcha();
    const captchaDisplay = document.getElementById('captchaDisplay');
    captchaDisplay.textContent = currentCaptcha;

    document.getElementById('reloadCaptcha').addEventListener('click', function() {
        currentCaptcha = generateCaptcha();
        captchaDisplay.textContent = currentCaptcha;
    });

    // Form Submission
    document.getElementById('contact-form').addEventListener('submit', async function(e) {
        e.preventDefault();

        const captchaInput = document.getElementById('captcha_input').value;
        const messageDiv = document.getElementById('contact-message');
        const submitBtn = document.getElementById('submit-btn');

        // Validate captcha
        if (captchaInput !== currentCaptcha) {
            messageDiv.className = 'message-box error';
            messageDiv.textContent = 'Invalid security code. Please try again.';
            messageDiv.classList.remove('hidden');
            currentCaptcha = generateCaptcha();
            captchaDisplay.textContent = currentCaptcha;
            document.getElementById('captcha_input').value = '';
            return;
        }

        // Disable button
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

        const formData = new FormData(this);

        try {
            const response = await fetch('api/contact.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            messageDiv.className = data.success ? 'message-box success' : 'message-box error';
            messageDiv.textContent = data.message;
            messageDiv.classList.remove('hidden');

            if (data.success) {
                this.reset();
                currentCaptcha = generateCaptcha();
                captchaDisplay.textContent = currentCaptcha;
            }

        } catch (error) {
            messageDiv.className = 'message-box error';
            messageDiv.textContent = 'An error occurred. Please try again.';
            messageDiv.classList.remove('hidden');
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
        }
    });
</script>