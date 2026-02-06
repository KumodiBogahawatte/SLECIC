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
            <p class="section-subtitle">Guiding SLECIC with strategic vision and governance</p>
        </div>

        <!-- Chairman - Centered Single Row -->
        <div class="centered-row">
            <div class="center-leader chairman">
                <div class="member-image">
                    <img src="assets/images/leaders/New_CMD.jpg" alt="Prof (Dr.) A. Aruna Shanthaarchchi" 
                         onerror="this.src='assets/images/leadership/default.jpg'">
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
                    'title' => 'Director, Department of Development Finance, Ministry of Finance',
                    'image' => 'assets/images/leaders/Kuloja.jpg'
                ],
                [
                    'name' => 'Mr. Asiri Wickramarachchi',
                    'title' => 'Chief Officer - General Insurance, Sri Lanka Insurance Corporation General Ltd',
                    'image' => 'assets/images/leaders/Asiri.jpg'
                ],
                [
                    'name' => 'Ms. S.M. Rajapaksha',
                    'title' => 'Chief Internal Auditor (Planning), Ministry of Trade',
                    'image' => 'assets/images/leaders/Rajapaksha.jpg'
                ],
                [
                    'name' => 'Mr. W.S. Prasanna',
                    'title' => 'Director - Dept. of Foreign Exchange, Central Bank of Sri Lanka',
                    'image' => 'assets/images/leaders/default-men.jpeg'
                ]
            ];
                foreach ($boardMembers as $index => $member): 
                ?>
                <div class="director-card">
                    <div class="member-image">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>"
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
            <p class="section-subtitle">Executive leadership driving operational excellence</p>
        </div>

        <!-- Deputy GM - Centered Single Row -->
        <div class="centered-row">
            <div class="center-leader dgm">
                <div class="member-image">
                    <img src="assets/images/leaders/New_Mohan.jpg" alt="Mr. Mohan Silva" 
                         onerror="this.src='assets/images/leaders/default.jpg'">
                </div>
                <div class="member-info">
                    <h3 class="member-name">Mr. Mohan Silva</h3>
                        <p class="member-title">Operations</p>
                        <p class="member-role">B.Sc. (Hons), MBA (PIM, Sri. J), AACS, DipM MCIM (UK)</p>
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
                    'title' => 'Assistant General Manager - Finance',
                    'image' => 'assets/images/leaders/New_Raveen.jpg'
                ],
                [
                    'name' => 'Ms. Shama Selvaratnam',
                    'title' => 'Assistant General Manager - Marketing',
                    'image' => 'assets/images/leaders/New_Shama.jpg'
                ],
                [
                    'name' => 'Mr. Manjula Wickramasinghe',
                    'title' => 'Assistant General Manager - Claims & Recoveries',
                    'image' => 'assets/images/leaders/New_Manjula.jpg'
                ]
            ];
                foreach ($agmMembers as $index => $member): 
                ?>
                <div class="agm-card">
                    <div class="member-image">
                        <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>"
                             onerror="this.src='assets/images/leaders/default.jpg'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name"><?php echo $member['name']; ?></h3>
                        <p class="member-title"><?php echo $member['title']; ?></p>
                        <?php if (isset($member['qualifications'])): ?>
                        <p class="member-role"><?php echo $member['qualifications']; ?></p>
                        <?php endif; ?>
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
<div class="profile-modal" id="profileModal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <div class="modal-header">
            <h3 id="modalName"></h3>
            <button class="modal-close" id="closeModal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="modal-profile">
                <div class="modal-image">
                    <img id="modalImage" src="" alt="">
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
    board: [
        {
            name: 'Prof (Dr.) A. Aruna Shanthaarchchi',
            title: 'Chairman & Managing Director',
            image: 'assets/images/leaders/New_CMD.jpg',
            description: 'An economist and researcher with almost 30 years of professional experience on development projects with clients ranging from the World Bank and ADB to the Central Environmental Authority, Ministry of Finance, Road Development Authority, and Mahaweli Authority of Sri Lanka. Focus areas include project evaluation with economic and financial analysis, economic social and environmental impact assessment.'
        },
        {
            name: 'Ms. M.K.G. Peiris',
            title: 'Director, Department of Development Finance, Ministry of Finance',
            image: 'assets/images/leaders/Kuloja.jpg',
            description: 'Officer of the Sri Lanka Planning Service with 15 years of public service experience. Has worked in Department of External Resources and Department of Development Finance. Contributed to policy-related development matters and represented the General Treasury as a Board Director in statutory institutions.'
        },
        {
            name: 'Mr. Asiri Wickramarachchi',
            title: 'Chief Officer - General Insurance, Sri Lanka Insurance Corporation General Ltd',
            image: 'assets/images/leaders/Asiri.jpg',
            description: 'Highly qualified insurance professional with over 18 years of diverse experience across both multinational and local insurance companies. Expertise spans key technical areas including Underwriting, Claims, and Reinsurance. Recognized as the youngest individual from Sri Lanka to achieve ACII qualification.'
        },
        {
            name: 'Ms. S.M. Rajapaksha',
            title: 'Chief Internal Auditor (Planning), Ministry of Trade',
            image: 'assets/images/leaders/Rajapaksha.jpg',
            description: 'Senior audit professional with extensive experience in government planning and internal audit functions at the Ministry of Trade.'
        },
        {
            name: 'Mr. W.S. Prasanna',
            title: 'Director - Dept. of Foreign Exchange, Central Bank of Sri Lanka',
            image: 'assets/images/leaders/default-men.jpeg',
            description: 'Financial sector expert specializing in foreign exchange management at the Central Bank of Sri Lanka.'
        }
    ],
    management: [
        {
            name: 'Mr. Mohan Silva',
            title: 'Deputy General Manager - Operations',
            image: 'assets/images/leaders/New_Mohan.jpg',
            description: 'Senior management professional with over 28 years of experience at SLECIC, possessing over 22 years of senior managerial experience in various service delivery areas including Marketing, Underwriting, Information Systems & Statistics, Claims & Recoveries. Has extensive international training in Export Credit Insurance.'
        },
        {
            name: 'Mr. Raveen Ovitigala',
            title: 'Assistant General Manager - Finance',
            image: 'assets/images/leaders/New_Raveen.jpg',
            description: 'Finance professional with almost 20 years of experience in accounting, finance and auditing. Previously worked as Deputy Director Finance at Coconut Development Authority for over 10 years, and at Sri Lanka Transport Board as an Accountant and Regional Finance Manager.'
        },
        {
            name: 'Ms. Shama Selvaratnam',
            title: 'Assistant General Manager - Marketing',
            image: 'assets/images/leaders/New_Shama.jpg',
            description: 'Senior professional marketer in the finance field with over 17 years of experience. Possesses wide skill set in all aspects of Marketing, Credit Risk Evaluation, Strategy Planning and Implementation, with experience in senior managerial positions in the Working Capital Industry.'
        },
        {
            name: 'Mr. Manjula Wickramasinghe',
            title: 'Assistant General Manager - Claims & Recoveries',
            image: 'assets/images/leaders/New_Manjula.jpg',
            description: 'Finance and insurance professional with over 20 years of experience. Career spans roles at leading institutions including Ceylinco Insurance, AIG Insurance, Asian Alliance Insurance, Janashakthi Insurance, Citizens Development Business Finance, and Allianz Insurance. Expertise in general insurance underwriting, sales, marketing, customer relations, credit and lending recoveries, and business development.'
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
    modalTitle.textContent = leader.title;
    modalImage.src = leader.image;
    modalImage.alt = leader.name;
    modalDescription.textContent = leader.description;
    
    // Fallback image
    modalImage.onerror = function() {
        this.src = 'assets/images/leadership/default.jpg';
    };
    
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

// Close modal
closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
});

modal.querySelector('.modal-overlay').addEventListener('click', () => {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
});

// Close with ESC key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.style.display === 'block') {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});
</script>