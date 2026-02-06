<?php 
/**
 * Leadership Page
 * Displays Board of Directors and Management Team
 * 
 * @package SLECIC
 * @version 1.0.0
 */

include 'includes/header.php'; 
?>

<link rel="stylesheet" href="assets/css/leadership.css">

<!-- Page Hero Section -->
<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Leadership</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Leadership</span>
        </nav>
    </div>
</section>

<!-- Board of Directors Section -->
<section class="leadership-section">
    <div class="container">
        <div class="section-header">
            <h2>Board of Directors</h2>
            <div class="header-line"></div>
        </div>

        <!-- Chairman & Managing Director -->
        <div class="leader-card featured" onclick="openModal('modal-cmd')">
            <div class="leader-image">
                <div class="aspect-ratio-container">
                    <img src="assets/images/leaders/New_CMD.jpg" 
                         alt="Prof (Dr.) A. Aruna Shanthaarchchi" 
                         onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                </div>
                <div class="position-badge">Chairman & Managing Director</div>
            </div>
            <div class="leader-info">
                <h3>Prof (Dr.) A. Aruna Shanthaarchchi</h3>
                <p class="credentials">B.A, PGD, MSc, MSSc, PhD</p>
                <div class="view-details">View Details →</div>
            </div>
        </div>

        <!-- Other Directors -->
        <div class="directors-grid">
            <!-- Director 1 -->
            <div class="director-card" onclick="openModal('modal-director1')">
                <div class="director-image">
                    <div class="aspect-ratio-container">
                        <img src="assets/images/leaders/Kuloja.jpg" 
                             alt="Ms. M.K.G. Peiris" 
                             onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                    </div>
                </div>
                <div class="director-info">
                    <h4>Ms. M.K.G. Peiris</h4>
                    <p class="director-position">Director, Department of Development Finance, Ministry of Finance</p>
                    <div class="view-details">View Details →</div>
                </div>
            </div>

            <!-- Director 2 -->
            <div class="director-card" onclick="openModal('modal-director2')">
                <div class="director-image">
                    <div class="aspect-ratio-container">
                        <img src="assets/images/leaders/Asiri.jpg" 
                             alt="Mr. Asiri Wickramarachchi" 
                             onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                    </div>
                </div>
                <div class="director-info">
                    <h4>Mr. Asiri Wickramarachchi</h4>
                    <p class="director-position">Chief Officer - General Insurance, Sri Lanka Insurance Corporation General Ltd</p>
                    <div class="view-details">View Details →</div>
                </div>
            </div>

            <!-- Director 3 -->
            <div class="director-card" onclick="openModal('modal-director3')">
                <div class="director-image">
                    <div class="aspect-ratio-container">
                        <img src="assets/images/leaders/Rajapaksha.jpg" 
                             alt="Ms. S.M. Rajapaksha" 
                             onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                    </div>
                </div>
                <div class="director-info">
                    <h4>Ms. S.M. Rajapaksha</h4>
                    <p class="director-position">Chief Internal Auditor (Planning), Ministry of Trade</p>
                    <div class="view-details">View Details →</div>
                </div>
            </div>

            <!-- Director 4 -->
            <div class="director-card" onclick="openModal('modal-director4')">
                <div class="director-image">
                    <div class="aspect-ratio-container">
                        <img src="assets/images/leaders/" 
                             alt="Mr. W.S. Prasanna" 
                             onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                    </div>
                </div>
                <div class="director-info">
                    <h4>Mr. W.S. Prasanna</h4>
                    <p class="director-position">Director - Dept. of Foreign Exchange, Central Bank of Sri Lanka</p>
                    <div class="view-details">View Details →</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Management Team Section -->
<section class="leadership-section management-section">
    <div class="container">
        <div class="section-header">
            <h2>Management Team</h2>
            <div class="header-line"></div>
        </div>

        <!-- Deputy General Manager -->
        <div class="management-subsection">
            <h3 class="subsection-title">Deputy General Manager</h3>
            <div class="directors-grid">
                <div class="director-card" onclick="openModal('modal-mohan')">
                    <div class="director-image">
                        <div class="aspect-ratio-container">
                            <img src="assets/images/leaders/New_Mohan.jpg" 
                                 alt="Mr. Mohan Silva" 
                                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                        </div>
                    </div>
                    <div class="director-info">
                        <h4>Mr. Mohan Silva</h4>
                        <p class="director-position">Deputy General Manager - Operations</p>
                        <div class="view-details">View Details →</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assistant General Managers -->
        <div class="management-subsection">
            <h3 class="subsection-title">Assistant General Managers</h3>
            <div class="directors-grid">
                <!-- AGM 1 - Finance -->
                <div class="director-card" onclick="openModal('modal-raveen')">
                    <div class="director-image">
                        <div class="aspect-ratio-container">
                            <img src="assets/images/leaders/New_Raveen.jpg" 
                                 alt="Mr. Raveen Ovitigala" 
                                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                        </div>
                    </div>
                    <div class="director-info">
                        <h4>Mr. Raveen Ovitigala</h4>
                        <p class="director-position">Assistant General Manager - Finance</p>
                        <div class="view-details">View Details →</div>
                    </div>
                </div>

                <!-- AGM 2 - Marketing -->
                <div class="director-card" onclick="openModal('modal-shama')">
                    <div class="director-image">
                        <div class="aspect-ratio-container">
                            <img src="assets/images/leaders/New_Shama.jpg" 
                                 alt="Ms. Shama Selvaratnam" 
                                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                        </div>
                    </div>
                    <div class="director-info">
                        <h4>Ms. Shama Selvaratnam</h4>
                        <p class="director-position">Assistant General Manager - Marketing</p>
                        <div class="view-details">View Details →</div>
                    </div>
                </div>

                <!-- AGM 3 - Claims & Recoveries -->
                <div class="director-card" onclick="openModal('modal-manjula')">
                    <div class="director-image">
                        <div class="aspect-ratio-container">
                            <img src="assets/images/leaders/New_Manjula.jpg" 
                                 alt="Mr. Manjula Wickramasinghe" 
                                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
                        </div>
                    </div>
                    <div class="director-info">
                        <h4>Mr. Manjula Wickramasinghe</h4>
                        <p class="director-position">Assistant General Manager - Claims & Recoveries</p>
                        <div class="view-details">View Details →</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div id="leaderModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal()">&times;</span>
        <div class="modal-body" id="modalBody"></div>
    </div>
</div>

<!-- Hidden Modal Content -->
<div style="display: none;">
    <!-- CMD Modal -->
    <div id="modal-cmd" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/New_CMD.jpg" 
                 alt="Prof (Dr.) A. Aruna Shanthaarchchi" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Prof (Dr.) A. Aruna Shanthaarchchi</h2>
                <p class="modal-position">Chairman & Managing Director</p>
                <p class="modal-credentials">B.A, PGD, MSc, MSSc, PhD</p>
            </div>
        </div>
        <div class="modal-description">
            <p>Prof. (Dr) Aruna Shanthaarchchi is an economist and researcher with almost 30 years of professional experience on development projects with clients ranging from the WB and ADB to the Central Environmental Authority, Ministry of Finance, Road Development Authority, and Mahaweli Authority of Sri Lanka. He focuses area include project evaluation with economic and financial analysis, economic social and environmental impact assessment, & is knowledgeable of the institutional and development issues. He is a PhD holder in Business economics and MSc and MPhil holder in natural resource management.</p>
        </div>
    </div>

    <!-- Director 1 Modal -->
    <div id="modal-director1" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/Kuloja.jpg" 
                 alt="Ms. M.K.G. Peiris" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Ms. M.K.G. Peiris</h2>
                <p class="modal-position">Director, Department of Development Finance, Ministry of Finance</p>
            </div>
        </div>
        <div class="modal-description">
            <p>Ms. Kuloja Gamindi Peiris is an officer of the Sri Lanka Planning Service and currently serves as a Director of the Department of Development Finance at the Ministry of Finance in Sri Lanka. She has been working in the public service for 15 years, starting as an Assistant Director at the Western Provincial Council in 2009. Over the years, she has worked in the Department of External Resources and the Department of Development Finance of the General Treasury. In addition, she has served and contributed in policy related development matters of the country and also represented the General Treasury as a Board Director in statutory institutions.</p>
            <p>Ms. Kuloja Peiris holds two master's degrees: a Master's in Public and Economic Policies from the University of Tsukuba, Japan and a Master's in Economics from the University of Kelaniya. She is a graduate of the University of Colombo and earned a BA (Hons) degree in economics. Further, she has undergone training and gained experience in countries such as Australia, Japan, China, Singapore, and South Korea.</p>
        </div>
    </div>

    <!-- Director 2 Modal -->
    <div id="modal-director2" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/Asiri.jpg" 
                 alt="Mr. Asiri Wickramarachchi" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Mr. Asiri Wickramarachchi</h2>
                <p class="modal-position">Chief Officer - General Insurance, Sri Lanka Insurance Corporation General Ltd</p>
            </div>
        </div>
        <div class="modal-description">
            <p>Mr. Asiri Wickramarachchi is a highly qualified and experienced professional in the insurance industry, with over 18 years of diverse experience across both multinational and local insurance companies. His expertise spans key technical areas, including Underwriting, Claims, and Reinsurance, empowering him to drive strategic advancements within the sector.</p>
            <p>In 2011, Asiri earned the Associateship (ACII) and "Chartered Insurer" status from the Chartered Insurance Institute (CII), UK. He is recognised as the youngest individual from Sri Lanka to achieve this prestigious qualification. His exceptional achievement was further celebrated when he received the "Most Outstanding Student Award" at the 2012 Insurance Congress in Colombo, an honour presented to the highest-performing ACII-qualified individual for the year 2011.</p>
            <p>Building on this strong foundation, Asiri later attained the Fellowship (FCII) qualification from the Chartered Insurance Institute - UK, the highest level of professional recognition in the field of insurance. Before assuming his current role as Chief Officer - General Insurance at Sri Lanka Insurance General Ltd., Asiri served as Chief Operating Officer - Technical at Continental Insurance Lanka Ltd., where he spearheaded various operational and technical functions to enhance profitability and operational efficiency.</p>
        </div>
    </div>

    <!-- Director 3 Modal -->
    <div id="modal-director3" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/Rajapaksha.jpg" 
                 alt="Ms. S.M. Rajapaksha" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Ms. S.M. Rajapaksha</h2>
                <p class="modal-position">Chief Internal Auditor (Planning), Ministry of Trade</p>
            </div>
        </div>
    </div>

    <!-- Director 4 Modal -->
    <div id="modal-director4" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/" 
                 alt="Mr. W.S. Prasanna" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Mr. W.S. Prasanna</h2>
                <p class="modal-position">Director - Dept. of Foreign Exchange, Central Bank of Sri Lanka</p>
            </div>
        </div>
    </div>

    <!-- Mohan Modal -->
    <div id="modal-mohan" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/New_Mohan.jpg" 
                 alt="Mr. Mohan Silva" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Mr. Mohan Silva</h2>
                <p class="modal-position">Deputy General Manager - Operations</p>
                <p class="modal-credentials">B.Sc. (Hons), MBA (PIM, Sri. J), AACS, DipM MCIM (UK)</p>
            </div>
        </div>
        <div class="modal-description">
            <p>Mr. Mohan Silva represents senior management of SLECIC possessing of over 22 years of senior managerial experience at various spheres of SLECIC's main service delivery areas ranging from Marketing, Buyer and Country Underwriting, Information Systems & Statistics, Claims & Recoveries. He had the opportunity of accumulating numerous international training exposures in Export Credit Insurance with his tenure at SLECIC of over 28 years. He is a Masters Degree Holder in Business Administration, B.Sc. in Mathematics and Statistics, Associate Member of Australian Computer Society and Member of Chartered Institute of Marketing (UK).</p>
        </div>
    </div>

    <!-- Raveen Modal -->
    <div id="modal-raveen" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/New_Raveen.jpg" 
                 alt="Mr. Raveen Ovitigala" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Mr. Raveen Ovitigala</h2>
                <p class="modal-position">Assistant General Manager - Finance</p>
                <p class="modal-credentials">MBS, B.Com(Spe), ACMA, SAT, APFA, ACPM</p>
            </div>
        </div>
        <div class="modal-description">
            <p>Mr. Ravin has experience of Accounting, Finance and Auditing almost 20 years. Worked as Deputy Director Finance, Coconut Development Authority more than 10 years. Worked in Sri Lanka Transport Board, as an Accountant and Regional Finance Manager. He performed his duties as an Acting Internal Auditor in Smallholder Tea and Rubber Revitalization Project and GOSL almost 6 years. Master Holder in Business Studies and Degree Holder in Commerce & member of CMA SL & Senior Member of AAT SL and Member of PFA of SL.</p>
        </div>
    </div>

    <!-- Shama Modal -->
    <div id="modal-shama" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/New_Shama.jpg" 
                 alt="Ms. Shama Selvaratnam" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Ms. Shama Selvaratnam</h2>
                <p class="modal-position">Assistant General Manager - Marketing</p>
                <p class="modal-credentials">B.A, MCIM, Dip Dig M (UK)</p>
            </div>
        </div>
        <div class="modal-description">
            <p>A Senior Professional Marketer in the Finance field, possessing a wide skill set in all aspects of Marketing, Credit Risk Evaluation, Strategy Planning and Implementation, whilst working in Senior Managerial positions in the Working Capital Industry, for over 17 years.</p>
        </div>
    </div>

    <!-- Manjula Modal -->
    <div id="modal-manjula" class="modal-data">
        <div class="modal-header">
            <img src="assets/images/leaders/New_Manjula.jpg" 
                 alt="Mr. Manjula Wickramasinghe" 
                 class="modal-image" 
                 onerror="this.src='assets/images/leaders/default-avatar.jpg'">
            <div class="modal-title">
                <h2>Mr. Manjula Wickramasinghe</h2>
                <p class="modal-position">Assistant General Manager - Claims & Recoveries</p>
                <p class="modal-credentials">LLM, PGD, LLB, IHDA(IDhat)-UK</p>
            </div>
        </div>
        <div class="modal-description">
            <p>Mr. Manjula Wickramasinghe has over 20 years of experience in the finance and insurance sectors, having worked at leading institutions from 2002 to 2022. My career spans roles at Ceylinco Insurance, AIG Insurance, Asian Alliance Insurance, Janashakthi Insurance, Citizens Development Business Finance, Softlogic Finance, Vallibel Finance, and Allianz Insurance. During this time, I gained extensive expertise in general insurance underwriting, sales, marketing, customer relations, credit and lending recoveries, and business development.</p>
        </div>
    </div>
</div>

<script>
/**
 * Leadership Page Modal Functionality
 * Handles opening, closing, and interaction with leader profile modals
 */

/**
 * Open modal with leader details
 * @param {string} modalId - ID of the modal content to display
 */
function openModal(modalId) {
    const modal = document.getElementById('leaderModal');
    const modalBody = document.getElementById('modalBody');
    const modalData = document.getElementById(modalId);
    
    if (modalData && modal && modalBody) {
        modalBody.innerHTML = modalData.innerHTML;
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
}

/**
 * Close the modal and restore page scroll
 */
function closeModal() {
    const modal = document.getElementById('leaderModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

/**
 * Close modal when clicking outside the modal content
 */
window.onclick = function(event) {
    const modal = document.getElementById('leaderModal');
    if (event.target === modal) {
        closeModal();
    }
}

/**
 * Close modal when pressing Escape key
 */
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});
</script>

<?php include 'includes/footer.php'; ?>