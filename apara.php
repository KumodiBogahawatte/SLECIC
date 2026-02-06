<?php 
    include 'includes/header.php'; 
?>

<link rel="stylesheet" href="assets/css/apara.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Apara</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Apara</span>
        </nav>
    </div>
</section>

<section class="apara-section">
    <div class="container">
        
        <h2 class="apara-main-title">Apara</h2>

        <div class="apara-grid">
            <div class="apara-image-wrapper video-container">
                <iframe 
                    width="100%" 
                    height="400" 
                    src="https://www.youtube.com/embed/Mj0l2gwZ28Y" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- Two Images Section -->
        <div class="apara-gallery-section" style="margin-top: 40px; margin-bottom: 40px;">
            <div class="apara-gallery-grid">
                <div class="gallery-item">
                    <img src="assets/images/CPA01.png" alt="Credit Insurance">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/CPA02.png" alt="Guarantee">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>