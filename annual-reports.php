<?php 
    include 'includes/header.php'; 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/annual-reports.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Annual Reports & Acts</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Publications</span>
        </nav>
    </div>
</section>

<section class="pub-section">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">

        <div class="search-bar-wrapper">
            <form class="search-form" onsubmit="event.preventDefault();">
                
                <div class="input-group search-input-group">
                    <input type="text" id="reportSearch" placeholder="Search reports..." onkeyup="filterReports()">
                </div>

                <div class="input-group year-select-group">
                    <select id="yearFilter">
                        <option value="all">Select Year</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>

                <button type="button" class="btn-search">
                    Search
                </button>

            </form>
        </div>
        
        <div class="category-block">
            <div class="section-header">
                <h2 class="section-title">Annual Reports</h2>
                <div class="title-line"></div>
            </div>

            <div class="doc-grid" id="reportsGrid">
                
                <div class="doc-card" data-title="Annual Financial Statements 2023" data-year="2023">
                    <div class="card-image">
                        <img src="assets/images/doc_img/2023.png" alt="Annual Financial Statements 2023 cover">
                    </div>
                    <div class="card-body">
                        <h3 class="doc-title">Annual Financial Statements 2023</h3>
                        <p class="doc-date">01 January 2023</p>
                        
                        <div class="card-buttons">
                            <a href="assets/doc/Annual_Financial_Statements_2023.pdf" target="_blank" class="btn btn-view">View</a>
                            <a href="assets/doc/Annual_Financial_Statements_2023.pdf" class="btn btn-download" download>Download</a>
                        </div>
                    </div>
                </div>

                <div class="doc-card" data-title="Annual Financial Statements 2022" data-year="2022">
                    <div class="card-image">
                        <img src="assets/images/doc_img/2022.png" alt="Annual Financial Statements 2022 cover">
                    </div>
                    <div class="card-body">
                        <h3 class="doc-title">Annual Financial Statements 2022</h3>
                        <p class="doc-date">01 January 2022</p>
                        
                        <div class="card-buttons">
                            <a href="assets/doc/Annual_Financial_Statements_2022.pdf" target="_blank" class="btn btn-view">View</a>
                            <a href="assets/doc/Annual_Financial_Statements_2022.pdf" class="btn btn-download" download>Download</a>
                        </div>
                    </div>
                </div>

                <div class="doc-card" data-title="Annual Financial Statements 2021" data-year="2021">
                    <div class="card-image">
                        <img src="assets/images/doc_img/2021.png" alt="Annual Financial Statements 2021 cover">
                    </div>
                    <div class="card-body">
                        <h3 class="doc-title">Annual Financial Statements 2021</h3>
                        <p class="doc-date">01 January 2021</p>
                        
                        <div class="card-buttons">
                            <a href="assets/doc/Annual_Financial_Statements_2021.pdf" target="_blank" class="btn btn-view">View</a>
                            <a href="assets/doc/Annual_Financial_Statements_2021.pdf" class="btn btn-download" download>Download</a>
                        </div>
                    </div>
                </div>

                <div class="doc-card" data-title="Annual Financial Statements 2020" data-year="2020">
                    <div class="card-image">
                        <img src="assets/images/doc_img/2020.png" alt="Annual Financial Statements 2020 cover">
                    </div>
                    <div class="card-body">
                        <h3 class="doc-title">Annual Financial Statements 2020</h3>
                        <p class="doc-date">01 January 2020</p>
                        
                        <div class="card-buttons">
                            <a href="assets/doc/Annual_Financial_Statements_2020.pdf" target="_blank" class="btn btn-view">View</a>
                            <a href="assets/doc/Annual_Financial_Statements_2020.pdf" class="btn btn-download" download>Download</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="category-block mt-large">
            <div class="section-header">
                <h2 class="section-title">Acts</h2>
                <div class="title-line"></div>
            </div>

            <div class="doc-grid" id="actsGrid">
                
                <div class="doc-card act-card" data-title="SLECIC Act No 15 of 1978" data-year="1978">
                    <div class="card-image">
                        <canvas id="pdf-canvas-act" data-pdf="assets/doc/slecic-act-15.pdf"></canvas>
                        <div class="act-image-bg pdf-placeholder">
                            <i class="fa-solid fa-scale-balanced act-icon"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="doc-title">Sri Lanka Export Credit Insurance Act No 15 of 1978</h3>
                        <p class="doc-date">Original Act</p>
                        
                        <div class="card-buttons">
                            <a href="assets/doc/slecic-act-15.pdf" target="_blank" class="btn btn-view">View</a>
                            <a href="assets/doc/slecic-act-15.pdf" class="btn btn-download" download>Download</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
// Set PDF.js worker
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

// Function to render PDF first page as image
async function renderPDFThumbnail(canvasId, pdfPath) {
    try {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return;

        const cardImage = canvas.closest('.card-image');
        const containerWidth = cardImage ? cardImage.offsetWidth : 260;
        const containerHeight = cardImage ? cardImage.offsetHeight : 200;

        const loadingTask = pdfjsLib.getDocument(pdfPath);
        const pdf = await loadingTask.promise;
        const page = await pdf.getPage(1); // Get first page

        // Calculate scale to fit container
        const viewport = page.getViewport({ scale: 1.0 });
        const scale = Math.min(containerWidth / viewport.width, containerHeight / viewport.height);
        const scaledViewport = page.getViewport({ scale: scale });

        canvas.height = scaledViewport.height;
        canvas.width = scaledViewport.width;

        const context = canvas.getContext('2d');
        const renderContext = {
            canvasContext: context,
            viewport: scaledViewport
        };

        await page.render(renderContext).promise;
        
        // Show canvas and hide placeholder if PDF renders successfully
        canvas.classList.add('rendered');
        const placeholder = canvas.nextElementSibling;
        if (placeholder && placeholder.classList.contains('pdf-placeholder')) {
            placeholder.style.display = 'none';
        }
    } catch (error) {
        console.error('Error rendering PDF thumbnail for ' + canvasId + ':', error);
        // Show placeholder if PDF fails to load
        const canvas = document.getElementById(canvasId);
        if (canvas) {
            const placeholder = canvas.nextElementSibling;
            if (placeholder && placeholder.classList.contains('pdf-placeholder')) {
                placeholder.style.display = 'flex'; // Use flex for act-image-bg, block for images
            }
        }
    }
}

// Render all PDF thumbnails on page load
window.addEventListener('load', function() {
    // Wait a bit for layout to settle, then render all PDF thumbnails
    setTimeout(function() {
        // Render all PDF canvases automatically
        const pdfCanvases = document.querySelectorAll('canvas[data-pdf]');
        pdfCanvases.forEach(function(canvas) {
            const pdfPath = canvas.getAttribute('data-pdf');
            const canvasId = canvas.getAttribute('id');
            if (pdfPath && canvasId) {
                renderPDFThumbnail(canvasId, pdfPath);
            }
        });
    }, 100);
});

function filterReports() {
    const input = document.getElementById('reportSearch');
    const yearSelect = document.getElementById('yearFilter');

    const query = (input && input.value ? input.value : '').trim().toUpperCase();
    const year = (yearSelect && yearSelect.value ? yearSelect.value : 'all').trim();

    const cards = document.querySelectorAll('.doc-card');

    cards.forEach(card => {
        const title = (card.getAttribute('data-title') || '').toUpperCase();
        const cardYear = (card.getAttribute('data-year') || '').trim();

        const matchesText = !query || title.includes(query);
        const matchesYear = (year === 'all') || (cardYear === year);

        card.style.display = (matchesText && matchesYear) ? "" : "none";
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const yearSelect = document.getElementById('yearFilter');
    const searchBtn = document.querySelector('.btn-search');
    if (yearSelect) yearSelect.addEventListener('change', filterReports);
    if (searchBtn) searchBtn.addEventListener('click', filterReports);
});
</script>

<?php include 'includes/footer.php'; ?>