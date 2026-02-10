<?php
include 'includes/header.php';
?>

<link rel="stylesheet" href="assets/css/leadership.css">

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
        </div>

        <!-- Chairman - Centered Single Row -->
        <div class="centered-row">
            <div class="center-leader chairman">
                <div class="member-image">
                    <img src="assets/images/leaders/new set 150/3.png" alt="Prof (Dr.) A. Aruna Shanthaarchchi" loading="eager"
                        onerror="this.src='assets/images/leaders/default.jpg'">
                </div>
                <div class="member-info">
                    <h3 class="member-name">Prof (Dr.) A. Aruna Shanthaarchchi</h3>
                    <p class="member-title">B.A, PGD, MSc, MSSc, PhD</p>
                    <p class="member-role">Chairman & Managing Director</p>
                    <button class="btn-view-profile" data-leader="0" data-type="board">
                        View Profile
                    </button>
                </div>
            </div>
        </div>

        <!-- Other 4 Board Directors in One Row -->
        <div class="directors-row">
            <?php
            $boardMembers = [
                [
                    'name' => 'Ms. M.K.G. Peiris',
                    'title' => 'Director<br> Department of Development Finance, Ministry of Finance',
                    'image' => 'assets/images/leaders/new set 150/2.png'
                ],
                [
                    'name' => 'Mr. Asiri Wickramarachchi',
                    'title' => 'Chief Officer<br>General Insurance, Sri Lanka Insurance Corporation General Ltd',
                    'image' => 'assets/images/leaders/new set 150/1.png'
                ],
                [
                    'name' => 'Ms. S.M. Rajapaksha',
                    'title' => 'Chief Internal Auditor (Planning)<br> Ministry of Trade',
                    'image' => 'assets/images/leaders/new set 150/8.png'
                ],
                [
                    'name' => 'Mr. W.S. Prasanna',
                    'title' => 'Director<br> Dept. of Foreign Exchange, Central Bank of Sri Lanka',
                    'image' => 'assets/images/leaders/default-men.jpeg'
                ]
            ];
            foreach ($boardMembers as $index => $member):
            ?>
                <div class="director-card">
                    <div class="member-image">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" loading="lazy"
                            onerror="this.src='assets/images/leaders/default.jpg'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name"><?php echo $member['name']; ?></h3>
                        <p class="member-title"><?php echo $member['title']; ?></p>
                        <?php if (isset($member['qualifications'])): ?>
                            <p class="member-role"><?php echo $member['qualifications']; ?></p>
                        <?php endif; ?>
                        <button class="btn-view-profile" data-leader="<?php echo $index + 1; ?>" data-type="board">
                            View Profile
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Management Team Section -->
<section class="leadership-section bg-light">
    <div class="container">
        <div class="section-header">
            <h2>Management Team</h2>
        </div>

        <!-- Deputy GM - Centered Single Row -->
        <div class="centered-row">
            <div class="center-leader dgm">
                <div class="member-image">
                    <img src="assets/images/leaders/new set 150/5.png" alt="Mr. Mohan Silva" loading="lazy"
                        onerror="this.src='assets/images/leaders/default.jpg'">
                </div>
                <div class="member-info">
                    <h3 class="member-name">Mr. Mohan Silva</h3>
                    <p class="member-title">B.Sc. (Hons), MBA (PIM, Sri. J), AACS, DipM MCIM (UK)</p>
                    <p class="member-role">Deputy General Manager <br>Operations</p>
                    <button class="btn-view-profile" data-leader="0" data-type="management">
                        View Profile
                    </button>
                </div>
            </div>
        </div>

        <!-- Assistant General Managers in One Row -->
        <div class="agm-row">
            <?php
            $agmMembers = [
                [
                    'name' => 'Mr. Raveen Ovitigala',
                    'title' => 'Assistant General Manager<br> Finance',
                    'image' => 'assets/images/leaders/new set 150/6.png',
                    'qualifications' => 'MBS, B.Com(Spe), ACMA, SAT, APFA, ACPM'
                ],
                [
                    'name' => 'Ms. Shama Selvaratnam',
                    'title' => 'Assistant General Manager<br> Marketing',
                    'image' => 'assets/images/leaders/new set 150/7.png',
                    'qualifications' => 'B.A, MCIM, Dip Dig M (UK)'
                ],
                [
                    'name' => 'Mr. Manjula Wickramasinghe',
                    'title' => 'Assistant General Manager<br> Claims & Recoveries',
                    'image' => 'assets/images/leaders/new set 150/4.png',
                    'qualifications' => 'LLM, PGD, LLB, IHDA(IDhat)-UK'
                ]
            ];
            foreach ($agmMembers as $index => $member):
            ?>
                <div class="agm-card">
                    <div class="member-image">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" loading="lazy"
                            onerror="this.src='assets/images/leaders/default.jpg'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name"><?php echo $member['name']; ?></h3>
                        <?php if (isset($member['qualifications'])): ?>
                            <p class="member-title"><?php echo $member['qualifications']; ?></p>
                        <?php endif; ?>
                        <p class="member-role"><?php echo $member['title']; ?></p>
                        <button class="btn-view-profile" data-leader="<?php echo $index + 1; ?>" data-type="management">
                            View Profile
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Profile Modal -->
<div class="profile-modal" id="profileModal" role="dialog" aria-modal="true" aria-labelledby="modalName" aria-hidden="true">
    <div class="modal-overlay" aria-hidden="true"></div>
    <div class="modal-content">
        <div class="modal-header">
            <h3 id="modalName"></h3>
            <button class="modal-close" id="closeModal" aria-label="Close profile modal" type="button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="modal-profile">
                <div class="modal-image">
                    <img id="modalImage" src="" alt="" loading="lazy">
                </div>
                <div class="modal-details">
                    <p class="modal-title" id="modalTitle"></p>
                    <div class="modal-description" id="modalDescription"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    // Leadership data
    const leadershipData = {
        board: [{
                name: 'Prof. (Dr.) A. Aruna Shanthaarchchi',
                title: 'Chairman & Managing Director',
                image: 'assets/images/leaders/set 180/3.png.jpg',
                description: 'Prof. (Dr.) Aruna Shanthaarchchi is an economist and researcher with nearly 30 years of professional experience in development projects. His clientele includes the World Bank (WB), Asian Development Bank (ADB), Central Environmental Authority, Ministry of Finance, Road Development Authority, and the Mahaweli Authority of Sri Lanka. His areas of expertise include project evaluation with economic and financial analysis, economic, social, and environmental impact assessments, and institutional and development issues. He holds a PhD in Business Economics and MSc and MPhil degrees in Natural Resource Management.'
            },
            {
                name: 'Ms. M.K.G. Peiris',
                title: 'Director, Department of Development Finance, Ministry of Finance',
                image: 'assets/images/leaders/set 180/2.png.jpg',
                description: 'Ms. Kuloja Gamindi Peiris is an officer of the Sri Lanka Planning Service and currently serves as Director of the Department of Development Finance at the Ministry of Finance. She has over 15 years of public sector experience, beginning her career as an Assistant Director at the Western Provincial Council in 2009. She has served in the Department of External Resources and the Department of Development Finance of the General Treasury and has contributed to national policy-related development initiatives. She has also represented the General Treasury as a Board Director in several statutory institutions.<br><br>Ms. Kuloja Peiris holds two master\'s degrees: a Master’s in Public and Economic Policies from the University of Tsukuba, Japan and a Master’s in Economics from the University of Kelaniya. She is a graduate of the University of Colombo and earned a BA (Hons) degree in economics. Further, she has undergone training and gained experience in countries such as Australia, Japan, China, Singapore, and South Korea.'
            },
            {
                name: 'Mr. Asiri Wickramarachchi',
                title: 'Chief Officer - General Insurance, Sri Lanka Insurance Corporation General Ltd',
                image: 'assets/images/leaders/set 180/1.png.jpg',
                description: 'Mr. Asiri Wickramarachchi is a highly qualified insurance professional with over 18 years of experience in both multinational and local insurance companies. His expertise covers underwriting, claims, and reinsurance, enabling him to drive strategic and operational excellence.<br><br>In 2011, he obtained the Associateship (ACII) and Chartered Insurer status from the Chartered Insurance Institute (CII), UK, becoming the youngest Sri Lankan to achieve this qualification. He received the “Most Outstanding Student Award” at the 2012 Insurance Congress in Colombo.<br><br>Building on this strong foundation, Asiri later attained the Fellowship (FCII) qualification from the Chartered Insurance Institute - UK, the highest level of professional recognition in the field of insurance. Before assuming his current role as Chief Officer - General Insurance at Sri Lanka Insurance General Ltd., Asiri served as Chief Operating Officer - Technical at Continental Insurance Lanka Ltd., where he spearheaded various operational and technical functions to enhance profitability and operational efficiency.'
            },
            {
                name: 'Ms. S.M. Rajapaksha',
                title: 'Chief Internal Auditor (Planning), Ministry of Trade',
                image: 'assets/images/leaders/set 180/8.png.jpg',
                description: 'Ms. S.M. Rajapaksha serves as Chief Internal Auditor (Planning) at the Ministry of Trade, bringing extensive experience in public sector audit and financial oversight.'
            },
            {
                name: 'Mr. W.S. Prasanna',
                title: 'Director – Department of Foreign Exchange, Central Bank of Sri Lanka',
                image: 'assets/images/leaders/default-men.jpeg',
                description: 'A senior financial sector professional specializing in foreign exchange management at the Central Bank of Sri Lanka.'
            }
        ],

        management: [{
                name: 'Mr. Mohan Silva',
                title: 'Deputy General Manager – Operations',
                image: 'assets/images/leaders/set 180/5.png.jpg',
                description: 'Mr. Mohan Silva is a senior management professional at SLECIC with over 28 years of service and more than 22 years of senior managerial experience. His expertise spans Marketing, Buyer and Country Underwriting, Information Systems & Statistics, and Claims & Recoveries. He has participated in numerous international training programs in Export Credit Insurance. He holds a Master’s degree in Business Administration, a BSc in Mathematics and Statistics, and is an Associate Member of the Australian Computer Society and a Member of the Chartered Institute of Marketing (UK).'
            },
            {
                name: 'Mr. Raveen Ovitigala',
                title: 'Assistant General Manager – Finance',
                image: 'assets/images/leaders/set 180/6.png.jpg',
                description: 'Mr. Raveen Ovitigala has nearly 20 years of experience in accounting, finance, and auditing. He previously served as Deputy Director – Finance at the Coconut Development Authority for over 10 years and has held positions at the Sri Lanka Transport Board as Accountant and Regional Finance Manager. He also functioned as Acting Internal Auditor for the Smallholder Tea and Rubber Revitalization Project and the Government of Sri Lanka. He holds a Master’s degree in Business Studies, a degree in Commerce, and is a Member of CMA Sri Lanka, Senior Member of AAT Sri Lanka, and Member of the Public Finance Accountants of Sri Lanka.'
            },
            {
                name: 'Ms. Shama Selvaratnam',
                title: 'Assistant General Manager – Marketing',
                image: 'assets/images/leaders/set 180/7.png.jpg',
                description: 'Ms. Shama Selvaratnam is a senior marketing professional in the finance sector with over 17 years of experience. Her expertise includes marketing strategy, credit risk evaluation, planning, and implementation, gained through leadership roles within the working capital and financial services industries.'
            },
            {
                name: 'Mr. Manjula Wickramasinghe',
                title: 'Assistant General Manager – Claims & Recoveries',
                image: 'assets/images/leaders/set 180/4.png.jpg',
                description: 'Mr. Manjula Wickramasinghe brings over 20 years of experience in the finance and insurance sectors. He has served at leading institutions including Ceylinco Insurance, AIG Insurance, Asian Alliance Insurance, Janashakthi Insurance, Citizens Development Business Finance, Softlogic Finance, Vallibel Finance, and Allianz Insurance. His expertise includes general insurance underwriting, sales, marketing, customer relations, credit and lending recoveries, and business development.'
            }
        ]

    };

    // Modal functionality
    const modal = document.getElementById('profileModal');
    const closeModal = document.getElementById('closeModal');
    const modalName = document.getElementById('modalName');
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');
    const modalDescription = document.getElementById('modalDescription');

    // Open modal when View Profile is clicked
    document.querySelectorAll('.btn-view-profile').forEach(button => {
        button.addEventListener('click', function() {
            const leaderIndex = parseInt(this.getAttribute('data-leader'));
            const type = this.getAttribute('data-type');
            openModal(leaderIndex, type);
        });
    });

    function openModal(index, type) {
        const leader = leadershipData[type][index];

        modalName.textContent = leader.name;
        // Show qualifications if available
        let qualification = '';
        if (type === 'board') {
            // Add qualifications for board if available
            if (leader.name === 'Prof. (Dr.) A. Aruna Shanthaarchchi') qualification = 'B.A, PGD, MSc, MSSc, PhD';
            if (leader.name === 'Ms. M.K.G. Peiris') qualification = 'BA (Hons), MA (Econ), MPEP';
            if (leader.name === 'Mr. Asiri Wickramarachchi') qualification = 'ACII, FCII (UK)';
        } else if (type === 'management') {
            if (leader.name === 'Mr. Mohan Silva') qualification = 'B.Sc. (Hons), MBA (PIM, Sri. J), AACS, DipM MCIM (UK)';
            if (leader.name === 'Mr. Raveen Ovitigala') qualification = 'MBS, B.Com(Spe), ACMA, SAT, APFA, ACPM';
            if (leader.name === 'Ms. Shama Selvaratnam') qualification = 'B.A, MCIM, Dip Dig M (UK)';
            if (leader.name === 'Mr. Manjula Wickramasinghe') qualification = 'LLM, PGD, LLB, IHDA(IDhat)-UK';
        }
        if (qualification) {
            modalName.innerHTML += '<br><span style="display:block;font-size:0.7rem;font-weight:400;color:var(--bg-color-light);margin-top:2px;">' + qualification + '</span>';
        }
        modalTitle.textContent = leader.title;
        modalImage.src = leader.image;
        modalImage.alt = leader.name;
        modalDescription.innerHTML = leader.description;

        // Fallback image
        modalImage.onerror = function() {
            this.src = 'assets/images/leaders/default.jpg';
        };

        modal.style.display = 'block';
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        
        // Focus the close button for accessibility
        closeModal.focus();
    }

    // Close modal function
    function closeProfileModal() {
        modal.style.display = 'none';
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = 'auto';
    }

    // Close modal
    closeModal.addEventListener('click', closeProfileModal);
    modal.querySelector('.modal-overlay').addEventListener('click', closeProfileModal);

    // Close with ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            closeProfileModal();
        }
    });

    // Trap focus within modal when open
    modal.addEventListener('keydown', (e) => {
        if (e.key === 'Tab' && modal.style.display === 'block') {
            const focusableElements = modal.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
            const firstElement = focusableElements[0];
            const lastElement = focusableElements[focusableElements.length - 1];
            
            if (e.shiftKey && document.activeElement === firstElement) {
                e.preventDefault();
                lastElement.focus();
            } else if (!e.shiftKey && document.activeElement === lastElement) {
                e.preventDefault();
                firstElement.focus();
            }
        }
    });
</script>