<?php 
    include 'includes/header.php'; 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/glossary.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Glossary of Terms</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Glossary</span>
        </nav>
    </div>
</section>

<section class="glossary-section">
    <div class="container">

        <div class="search-bar-wrapper">
            <form class="search-form" onsubmit="event.preventDefault();">
                <div class="search-input-group">
                    <input type="text" id="glossarySearch" placeholder="Search for a term..." onkeyup="filterGlossary()">
                    <!-- <i class="fa-solid fa-search search-icon-inside"></i> --> 
                </div>
                <button type="button" class="btn-search" onclick="filterGlossary()">
                    Search
                </button>
            </form>
        </div>

        <div class="glossary-list" id="glossaryList" >
            
            <div class="glossary-item active" >
                <div class="term-header">
                    <h3 class="term-title">Associate buyer</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Shall mean any buyer where:</p>
                    <ul>
                        <li>Exporter has significant control over its management directly or indirectly.</li>
                        <li>Exporter and the buyer are part of the same group or share one or more board directors.</li>
                        <li>Exporter and the buyer are related to each other.</li>
                    </ul>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Blacklisted/ Defaulted Buyers</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Credit Limits are not issued on defaulted buyers and the buyers on account of whom a claim has been paid.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Commercial Risks</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>The risks that a debtor will be unable to pay its debts because of events, such as:</p>
                    <ul>
                        <li>Protracted default or</li>
                        <li>Failure or refusal of buyer to pay or</li>
                        <li>Insolvency of the buyer to accept the goods or services.</li>
                    </ul>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Contract of Sale</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Shall mean a legally binding and enforceable agreement for dispatching goods or rendering services by exporter to his/her buyer.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Credit Limit</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Amount approved by SLECIC on account of a buyer in USD or LKR and communicated to exporter by way of a Credit Limit Notification.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Due Date</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Shall mean the date by which the Gross Invoice Value is to be paid by the buyer to the exporter, including any extensions thereof granted in terms of this policy.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Gross Invoice Value</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Shall mean the total value of the invoice which is due, owing and payable by the buyer to you in terms of the Contract of Sale.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Insolvency of the buyer</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>The buyer shall be deemed to be insolvent for the purpose of this policy where:</p>
                    <ul>
                        <li>The buyer has been declared insolvent by a Competent Court of Law.</li>
                        <li>An agreement, composition or other arrangement has been made by the buyer, for the benefit of his creditors generally.</li>
                        <li>When a receiver or manager has been appointed by a Competent Court of Law to manage the affairs of the buyer.</li>
                        <li>When the order has been made for the winding-up of the buyer.</li>
                        <li>Where an effective resolution has been passed for the voluntary winding-up of the buyer, provided that such resolution is not merely for the purpose of reconstruction or amalgamation.</li>
                        <li>Where the court has sanctioned an arrangement binding on all the creditors.</li>
                        <li>Any other circumstances exist which in our sole opinion are similar to (a) to (f) above.</li>
                    </ul>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Maximum Liability Limit</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Amount of SLECIC's total liability under seller's Risks Insurance policy in any calendar year.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Overdue Notification</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>In the event the buyer fails to pay you the Gross Invoice Value on the due date you shall within 30 days of the due date submit to us an Overdue Declaration in the prescribed form (Form No. 501).</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Policy</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Credit insurance contract between SLECIC and the policyholder.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Political Risks (Country Risk / Non Commercial Risks)</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>The risks that are beyond the scope of an individual buyer or fall outside the individual buyer's responsibility. They are:</p>
                    <ul>
                        <li>Occurrence of hostilities, wars, insurrections, civil or political disturbances, terrorist actions, natural disasters in the buyer's country.</li>
                        <li>Outbreak of war between buyer's country & Sri Lanka.</li>
                        <li>General moratorium declared by the government of the buyer's country or by a third country through which the payment must be effected.</li>
                        <li>Changes of the law of the buyer's country and/or on import ban.</li>
                        <li>Political events or economic difficulties arising in the buyer's country or a third country through which the payment must be effected which prevent or delay the transfer of payment to Sri Lanka.</li>
                        <li>Failure or refusal to fulfill the terms of contract by the buyer provided that the buyer is a foreign government or the performance is guaranteed by a foreign government.</li>
                        <li>The cost incurred in respect of goods shipped from Sri Lanka as a result of any handling, transport or insurance charges by interruption or diversion of voyage outside Sri Lanka & which is not recoverable from the buyer.</li>
                        <li>Any Other cause, not being inherent to the nature of the goods or services and not within your control or that of your buyer which arises from an event occurring outside Sri Lanka.</li>
                    </ul>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Premium</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Amount paid by the policyholder to the SLECIC in exchange for risk coverage.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Proposal</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Duly filled policy application and any further additional information in connection therewith submitted by you (exporter) prior to issue of the policy.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Protracted default</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Failure or refusal of buyer to pay you the Gross Invoice Value or part of it, within 4 months of the due date, despite demands by you.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Recoveries</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Shall mean the amount of monies that may be recovered (including dividends paid or payable out of an insolvent estate) from securities, indemnities, guarantees, any insurance, resale, rights of action, counter-claim or set-off or other rights or advantages held by you or otherwise available for the purpose of reducing the amount of any indebtedness of the buyer, as is applicable in the context.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Repudiation of contract</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>Failure or refusal of the buyer to accept the goods or services in terms of the Contract of Sale.</p>
                </div>
            </div>

            <div class="glossary-item">
                <div class="term-header">
                    <h3 class="term-title">Suspension of Cover</h3>
                    <i class="fa-solid fa-plus toggle-icon"></i>
                </div>
                <div class="term-definition">
                    <p>When a default is reported under a policy, cover on the buyer is suspended.</p>
                </div>
            </div>

        </div>
        
        <!-- Pagination Container -->
        <div id="pagination-container" class="pagination-container"></div>

    </div>
</section>

<script>
    const itemsPerPage = 6;
    let currentPage = 1;
    let allItems = []; // All DOM elements
    let visibleItems = []; // List of items that match search (all initially)

    // Accordion & Pagination Initialization
    document.addEventListener('DOMContentLoaded', function() {
        allItems = Array.from(document.querySelectorAll('.glossary-item'));
        visibleItems = allItems;

        // Accordion Functionality
        const triggers = document.querySelectorAll('.term-header');
        triggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const parent = this.parentElement;
                const wasActive = parent.classList.contains('active');

                // Optional: Close others when one is opened
                 /*
                 document.querySelectorAll('.glossary-item').forEach(item => {
                     if (item !== parent) item.classList.remove('active');
                 });
                 */

                if (!wasActive) {
                    parent.classList.add('active');
                } else {
                    parent.classList.remove('active');
                }
            });
        });

        // Initial Render
        renderPage(1);
    });

    function filterGlossary() {
        let input = document.getElementById('glossarySearch');
        let filter = input.value.toUpperCase();
        
        // Filter items
        visibleItems = allItems.filter(item => {
            let title = item.querySelector('.term-title');
            let txtValue = title.textContent || title.innerText;
            return txtValue.toUpperCase().indexOf(filter) > -1;
        });

        // Reset to page 1
        renderPage(1);
    }

    function renderPage(page) {
        if (page < 1) page = 1;
        let totalPages = Math.ceil(visibleItems.length / itemsPerPage);
        if (totalPages > 0 && page > totalPages) page = totalPages;
        
        currentPage = page;
        
        // Hide all original items first
        allItems.forEach(item => item.style.display = 'none');
        
        // Calculate slice
        let start = (page - 1) * itemsPerPage;
        let end = start + itemsPerPage;
        
        // Show only the visible items for the current page
        let pageItems = visibleItems.slice(start, end);
        pageItems.forEach(item => item.style.display = ''); // remove inline display:none
        
        renderPagination();
    }

    function renderPagination() {
        let paginationContainer = document.getElementById('pagination-container');
        paginationContainer.innerHTML = '';
        
        let totalPages = Math.ceil(visibleItems.length / itemsPerPage);
        
        // Only show pagination if more than 1 page
        if (totalPages <= 1) return;

        // Previous Button
        let prevBtn = document.createElement('button');
        prevBtn.innerHTML = '<i class="fa-solid fa-chevron-left"></i>';
        prevBtn.className = 'pagination-btn';
        if (currentPage === 1) prevBtn.classList.add('disabled');
        prevBtn.onclick = () => {
            if (currentPage > 1) renderPage(currentPage - 1);
        };
        paginationContainer.appendChild(prevBtn);

        // Page Numbers
        // Logic to show limited page numbers if too many (simple version for now: show all)
        for (let i = 1; i <= totalPages; i++) {
            let pageBtn = document.createElement('button');
            pageBtn.innerText = i;
            pageBtn.className = `pagination-btn ${i === currentPage ? 'active' : ''}`;
            pageBtn.onclick = () => renderPage(i);
            paginationContainer.appendChild(pageBtn);
        }

        // Next Button
        let nextBtn = document.createElement('button');
        nextBtn.innerHTML = '<i class="fa-solid fa-chevron-right"></i>';
        nextBtn.className = 'pagination-btn';
        if (currentPage === totalPages) nextBtn.classList.add('disabled');
        nextBtn.onclick = () => {
            if (currentPage < totalPages) renderPage(currentPage + 1);
        };
        paginationContainer.appendChild(nextBtn);
    }
</script>

<?php include 'includes/footer.php'; ?>