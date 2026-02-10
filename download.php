<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="assets/css/download.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Downloads</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Downloads</span>
        </nav>
    </div>
</section>

<section class="download-section">
    <div class="container">
        <!-- Folder View -->
        <div id="download-folder-view" class="download-folders" style="display:flex;">
            <div class="download-folder-item reveal" data-folder="export_credit_insurance">
                <div class="folder-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>Export Credit Insurance</h3>
                <p class="folder-count">2 subfolders</p>
            </div>
            <div class="download-folder-item reveal" data-folder="domestic_credit_insurance">
                <div class="folder-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>Domestic Credit Insurance</h3>
                <p class="folder-count">1 subfolder</p>
            </div>
            <div class="download-folder-item reveal" data-folder="guarantee">
                <div class="folder-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>Guarantee</h3>
                <p class="folder-count">5 subfolders</p>
            </div>
        </div>

        <!-- Guarantee Subfolders -->
        <div id="guarantee-subfolder-view" class="download-folders" style="display:none;">
            <div class="back-button">
                <button id="back-to-main-folders-guarantee">
                    <i class="fas fa-arrow-left"></i> Back to Main Folders
                </button>
            </div>
            <div class="download-folder-item reveal" data-folder="pre_shipment_guarantee">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Pre Shipment Credit Guarantee</h3>
                <p class="folder-count">0 files</p>
            </div>
            <div class="download-folder-item reveal" data-folder="post_shipment_guarantee">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Post Shipment Credit Guarantee</h3>
                <p class="folder-count">0 files</p>
            </div>
            <div class="download-folder-item reveal" data-folder="export_performance_guarantee">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Export Performance Guarantee</h3>
                <p class="folder-count">0 files</p>
            </div>
            <div class="download-folder-item reveal" data-folder="export_production_credit_guarantee">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Export Production Credit Guarantee</h3>
                <p class="folder-count">0 files</p>
            </div>
            <div class="download-folder-item reveal" data-folder="bank_guarantee_passage">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Bank Guarantee on Cost of Passage Advance to Sri Lankans going abroad for Employment</h3>
                <p class="folder-count">0 files</p>
            </div>
        </div>

        <!-- Export Credit Insurance Subfolders -->
        <div id="eci-subfolder-view" class="download-folders" style="display:none;">
            <div class="back-button">
                <button id="back-to-main-folders">
                    <i class="fas fa-arrow-left"></i> Back to Main Folders
                </button>
            </div>
            <div class="download-folder-item reveal" data-folder="goods_exports">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Goods Exports</h3>
                <p class="folder-count">0 files</p>
            </div>
            <div class="download-folder-item reveal" data-folder="service_exports">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Service Exports</h3>
                <p class="folder-count">0 files</p>
            </div>
        </div>

        <!-- Domestic Credit Insurance Subfolders -->
        <div id="dci-subfolder-view" class="download-folders" style="display:none;">
            <div class="back-button">
                <button id="back-to-main-folders-dci">
                    <i class="fas fa-arrow-left"></i> Back to Main Folders
                </button>
            </div>
            <div class="download-folder-item reveal" data-folder="forms">
                <div class="folder-icon"><i class="fas fa-folder"></i></div>
                <h3>Forms</h3>
                <p class="folder-count">0 files</p>
            </div>
        </div>

        <!-- PDF List View -->
        <div id="download-list-view" style="display:none;">
            <div class="back-button">
                <button id="back-to-download-folders">
                    <i class="fas fa-arrow-left"></i> Back to Folders
                </button>
            </div>
            <h2 id="current-download-folder-title" class="folder-title"></h2>
            <div id="download-list" class="download-list"></div>
            <div id="download-no-files" style="display:none; color:#bfa13a; text-align:center; margin:40px 0; font-size:1.2em;">
                No files found in this folder.
            </div>
        </div>
    </div>
</section>

<script>
    // Download configuration
    const downloadData = {
        goods_exports: [
            { file: 'assets/doc/downloads/ExportCreditInsurance/GoodsExports/Form500.pdf', title: 'Form 500', description: 'Proposal for Seller\'s Risk.' },
            { file: 'assets/doc/downloads/ExportCreditInsurance/GoodsExports/Form502.pdf', title: 'Form 502', description: 'Credit Limit Application.' },
            { file: 'assets/doc/downloads/ExportCreditInsurance/GoodsExports/Form502A.pdf', title: 'Form 502A', description: 'Credit Limit ENHANCEMENT / MODIFICATION Application.' },
            { file: 'assets/doc/downloads/ExportCreditInsurance/GoodsExports/Form504.pdf', title: 'Form 504', description: 'Declaration of Goods Dispatched or Services Rendered.' },
            { file: 'assets/doc/downloads/ExportCreditInsurance/GoodsExports/Form505.pdf', title: 'Form 505', description: 'Monthly Declaration of Overdue Payments.' }
        ],
        service_exports: [
            { file: 'assets/doc/downloads/ExportCreditInsurance/ServiceExports/Form500SP.pdf', title: 'Form 500 SP', description: 'Proposal for Seller\'s Risk Policy-Services.' },
            { file: 'assets/doc/downloads/ExportCreditInsurance/ServiceExports/Form502SP.pdf', title: 'Form 502 SP', description: 'Credit Limit Application.' },
            { file: 'assets/doc/downloads/ExportCreditInsurance/ServiceExports/Form504SP.pdf', title: 'Form 504 SP', description: 'Declaration of Services Rendered.' },
            { file: 'assets/doc/downloads/ExportCreditInsurance/ServiceExports/Form505SP.pdf', title: 'Form 505 SP', description: 'Monthly Overdue Notification Under Seller Risk Policy-Services.' }
        ],
        forms: [
            { file: 'assets/doc/downloads/DomesticCreditInsurance/forms/FormDC500.pdf', title: 'Form DC500', description: 'Proposal For A Domestic Credit Risk Policy.' },
            { file: 'assets/doc/downloads/DomesticCreditInsurance/forms/FormDC502.pdf', title: 'Form DC502', description: 'Credit Limit Application - Domestic.' },
            { file: 'assets/doc/downloads/DomesticCreditInsurance/forms/FormDC504.pdf', title: 'Form DC504', description: 'Declaration Of Dispatch/Acceptance.' },
            { file: 'assets/doc/downloads/DomesticCreditInsurance/forms/FormDC505.pdf', title: 'Form DC505', description: 'Overdue Notification.' }
        ],
        pre_shipment_guarantee: [
            { file: 'assets/doc/downloads/Guarantee/Pre/Form101.pdf', title: 'Form 101', description: 'Proposal For Pre-Shipment Credit Guarantee.' },
            { file: 'assets/doc/downloads/Guarantee/Pre/Form117.pdf', title: 'Form 117', description: 'Pre Shipment Credit Guarantee - Monthly Declaration.' }
        ],
        post_shipment_guarantee: [
            { file: 'assets/doc/downloads/Guarantee/Post/Form201.pdf', title: 'Form 201', description: 'Proposal For Post-Shipment Credit Guarantee.' },
            { file: 'assets/doc/downloads/Guarantee/Post/Form217.pdf', title: 'Form 217', description: 'Post Shipment Credit Guarantee - Monthly Declaration.' }
        ],
        export_performance_guarantee: [
            { file: 'assets/doc/downloads/Guarantee/ExportPerformance/Form301.pdf', title: 'Form 301', description: 'Proposal For Export Performance Guarantee.' },
            { file: 'assets/doc/downloads/Guarantee/ExportPerformance/Form317.pdf', title: 'Form 317', description: 'Export Performance Guarantee-Monthly Declaration Form.' },
            { file: 'assets/doc/downloads/Guarantee/ExportPerformance/Form501A.pdf', title: 'Form 501A', description: 'Performance Guarantee Covering the ATA Carnet System.' }
        ],
        export_production_credit_guarantee: [
            { file: 'assets/doc/downloads/Guarantee/ExportProduction/Form601.pdf', title: 'Form 601', description: 'Proposal For Export Production Credit Guarantee.' },
            { file: 'assets/doc/downloads/Guarantee/ExportProduction/Form617.pdf', title: 'Form 617', description: 'Export Production Credit Guarantee - Monthly Declaration.' }
        ],
        bank_guarantee_passage: [
            { file: 'assets/doc/downloads/Guarantee/BankGuarantee/Form101A.pdf', title: 'Form 101A', description: 'Proposal For Bank Guarantee On Cost Of Passage Advance.' }
        ]
    };

    // Track current main folder
    let currentMainFolder = null;

    function showMainFolders() {
        hideAllViews();
        document.getElementById('download-folder-view').style.display = 'flex';
        currentMainFolder = null;
    }

    function showSubfolderView(mainFolder) {
        hideAllViews();
        currentMainFolder = mainFolder;
        
        switch(mainFolder) {
            case 'export_credit_insurance':
                document.getElementById('eci-subfolder-view').style.display = 'flex';
                break;
            case 'domestic_credit_insurance':
                document.getElementById('dci-subfolder-view').style.display = 'flex';
                break;
            case 'guarantee':
                document.getElementById('guarantee-subfolder-view').style.display = 'flex';
                break;
        }
    }

    function hideAllViews() {
        const views = [
            'download-folder-view',
            'eci-subfolder-view',
            'dci-subfolder-view',
            'guarantee-subfolder-view',
            'download-list-view'
        ];
        views.forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.style.display = 'none';
            }
        });
    }

    function openDownloadFolder(folderName) {
        hideAllViews();
        document.getElementById('download-list-view').style.display = 'block';
        
        // Format folder title
        const titleMap = {
            'goods_exports': 'Goods Exports',
            'service_exports': 'Service Exports',
            'forms': 'Forms',
            'pre_shipment_guarantee': 'Pre-Shipment Credit Guarantee',
            'post_shipment_guarantee': 'Post-Shipment Credit Guarantee',
            'export_performance_guarantee': 'Export Performance Guarantee',
            'export_production_credit_guarantee': 'Export Production Credit Guarantee',
            'bank_guarantee_passage': 'Bank Guarantee on Cost of Passage Advance'
        };
        
        document.getElementById('current-download-folder-title').textContent = 
            titleMap[folderName] || folderName.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
        
        const files = downloadData[folderName] || [];
        const downloadList = document.getElementById('download-list');
        const noFiles = document.getElementById('download-no-files');
        downloadList.innerHTML = '';
        
        if (files.length === 0) {
            if (noFiles) {
                noFiles.style.display = 'block';
            }
            return;
        }
        
        if (noFiles) {
            noFiles.style.display = 'none';
        }
        
        files.forEach(file => {
            const item = document.createElement('div');
            item.className = 'download-item';
            item.innerHTML = `
                <div class="download-icon"><i class="fas fa-file-pdf"></i></div>
                <div class="download-info">
                    <div class="download-title">${file.title}</div>
                    <div class="download-desc">${file.description || ''}</div>
                </div>
                <a href="${file.file}" class="download-btn" download target="_blank"><i class="fas fa-download"></i> Download</a>
            `;
            downloadList.appendChild(item);
        });
    }

    function goBackToSubfolder() {
        if (currentMainFolder) {
            showSubfolderView(currentMainFolder);
        } else {
            showMainFolders();
        }
    }

    function updateDownloadFolderCounts() {
        document.querySelectorAll('.download-folder-item').forEach(folder => {
            const folderName = folder.dataset.folder;
            let count = 0;
            let label = '';
            
            // Parent folders
            if (folderName === 'export_credit_insurance') {
                count = 2;
                label = 'subfolders';
            } else if (folderName === 'domestic_credit_insurance') {
                count = 1;
                label = 'subfolder';
            } else if (folderName === 'guarantee') {
                count = 5;
                label = 'subfolders';
            } else {
                // Subfolders: count files
                count = downloadData[folderName] ? downloadData[folderName].length : 0;
                label = `file${count !== 1 ? 's' : ''}`;
            }
            
            const folderCountElement = folder.querySelector('.folder-count');
            if (folderCountElement) {
                folderCountElement.textContent = `${count} ${label}`;
            }
        });
    }

    function setupEventListeners() {
        // Main folder clicks
        const mainFolderItems = document.querySelectorAll('#download-folder-view .download-folder-item');
        if (mainFolderItems.length > 0) {
            mainFolderItems.forEach(folder => {
                folder.addEventListener('click', function() {
                    const folderName = this.dataset.folder;
                    currentMainFolder = folderName; // Set current main folder
                    showSubfolderView(folderName);
                });
            });
        }

        // ECI subfolders
        const eciSubfolders = document.querySelectorAll('#eci-subfolder-view .download-folder-item');
        if (eciSubfolders.length > 0) {
            eciSubfolders.forEach(folder => {
                folder.addEventListener('click', function() {
                    openDownloadFolder(this.dataset.folder);
                });
            });
        }

        // DCI subfolders
        const dciSubfolders = document.querySelectorAll('#dci-subfolder-view .download-folder-item');
        if (dciSubfolders.length > 0) {
            dciSubfolders.forEach(folder => {
                folder.addEventListener('click', function() {
                    openDownloadFolder(this.dataset.folder);
                });
            });
        }

        // Guarantee subfolders
        const guaranteeSubfolders = document.querySelectorAll('#guarantee-subfolder-view .download-folder-item');
        if (guaranteeSubfolders.length > 0) {
            guaranteeSubfolders.forEach(folder => {
                folder.addEventListener('click', function() {
                    openDownloadFolder(this.dataset.folder);
                });
            });
        }

        // Back buttons - ALL "Back to Main Folders" buttons go to root main folder view
        const backToMainFoldersGuarantee = document.getElementById('back-to-main-folders-guarantee');
        if (backToMainFoldersGuarantee) {
            backToMainFoldersGuarantee.addEventListener('click', function(e) {
                e.preventDefault();
                showMainFolders();
            });
        }

        const backToMainFolders = document.getElementById('back-to-main-folders');
        if (backToMainFolders) {
            backToMainFolders.addEventListener('click', function(e) {
                e.preventDefault();
                showMainFolders();
            });
        }

        const backToMainFoldersDci = document.getElementById('back-to-main-folders-dci');
        if (backToMainFoldersDci) {
            backToMainFoldersDci.addEventListener('click', function(e) {
                e.preventDefault();
                showMainFolders();
            });
        }

        const backToDownloadFolders = document.getElementById('back-to-download-folders');
        if (backToDownloadFolders) {
            backToDownloadFolders.addEventListener('click', function(e) {
                e.preventDefault();
                goBackToSubfolder();
            });
        }
    }

    function setupDownloadRevealAnimation() {
        window.addEventListener('scroll', function() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;
                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                }
            }
        });
        window.dispatchEvent(new Event('scroll'));
    }

    // Initialize everything
    document.addEventListener('DOMContentLoaded', function() {
        updateDownloadFolderCounts();
        setupEventListeners();
        setupDownloadRevealAnimation();
        
        // Show main folders on initial load
        showMainFolders();
    });
</script>

<?php include 'includes/footer.php'; ?>