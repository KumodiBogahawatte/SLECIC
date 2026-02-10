<?php 
    include 'includes/header.php'; 
?>

<link rel="stylesheet" href="assets/css/CreditGurantee.css">

<section class="page-hero">
    <div class="overlay"></div>
    <div class="container">
        <h1>Credit Gurantee</h1>
        <nav class="breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span style="color: #d1b24a;">Credit Gurantee</span>
        </nav>
    </div>
</section>

<section class="risk-section">
    <div class="container">
        
        <h2 class="risk-main-title">Credit Guarantee</h2>
        <div class="title-line"></div>

        <div class="risk-grid">
            <div class="risk-image-wrapper">
                <img src="assets/images/gurantee.jpg" alt="Seller's Risk Logo">
            </div>

            <div class="risk-content-wrapper">
                <h3 class="risk-subtitle">
                SLECIC credit guarantees are available to banks as real credit supplementation
                </h3>
                <p>
                The Guarantee Scheme of SLECIC assists to enhance the creditworthiness of the exporter to secure better facilities from the banks. The Guarantee assures that in the event of an exporter fails to discharge his liabilities to the bank/financial institutions, and thereby make the bank incur a loss, SLECIC would reimburse a substantial portion of the bank/financial institution’s loss.
                </p>
                <p>
                The Guarantee increases the Risk-Weighted Capital Adequacy of the entire Short-term export credit portfolio of the bank. This enables the banks to lend a higher volume of export finance whilst meeting the Capital Adequacy standards stipulated by the Central Bank of Sri Lanka in keeping with current international practices and requirements laid down by BASEL Committee. Risk Weighted Capital Adequacy Ratio of credit facilities covered by SLECIC Guarantees is 50%.
                </p>
            </div>
        </div>

        <div class="risk-accordion-area">
            <div class="accordion-wrapper">
                
                <div class="accordion-item">
                    <button class="accordion-header">
                        SLECIC Credit Guarantee Solutions
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="content-inner">
                            <ul class="solutions-list">
                                <li>
                                    <strong>Pre-shipment Credit Guarantees</strong>
                                    <p>This enables the financial institutions to provide pre-shipment finance to exporters for purchasing of raw materials, manufacturing and processing of goods and packing for exports, against Letters of Credit or Confirmed Orders.</p>
                                </li>

                                <li>
                                    <strong>Export Production Credit Guarantee</strong>
                                    <p>Covers the commercial banks' the risk of non-payment &amp; insolvency of indirect exporters.</p>
                                </li>

                                <li>
                                    <strong>Export Performance Guarantee (Bid Bond, Performance Bond)</strong>
                                    <p>Counter guarantee issued to commercial banks enabling exporter to win bonds &amp; their due performance.</p>
                                </li>

                                <li>
                                    <strong>Export Performance Guarantee Covering ATA Carnet</strong>
                                    <p>Facilitate temporary exportation of valuable items for trade fairs &amp; exhibitions. Issued to ICC-Sri Lanka. Covers the non-payment of import duty of foreign countries.</p>
                                    <p><strong>100% Demand Guarantee.</strong></p>
                                </li>

                                <li>
                                    <strong>Export Performance Guarantee For Freight Forwarders</strong>
                                    <p>Counter guarantee for commercial banks enabling the freight forwarders to obtain credit from air lines. Non-payment of airline chargers by freight forwarders 85% on demand counter guarantee to a bank.</p>
                                </li>

                                <li>
                                    <strong>Whole Turnover Bank Guarantee Covering The Cost Of Passage</strong>
                                    <p>This guarantee facilitates the Sri Lankan migrant workers to obtain pre departure loans.</p>
                                </li>

                                <li>
                                    <strong>Domestic Credit Insurance</strong>
                                    <p>Insurance to protect the policy holders from Commercial Risks associated with dispatching goods or rendering services to their buyers in Sri Lanka.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?><script>
    document.addEventListener("DOMContentLoaded", function() {
        const accordions = document.querySelectorAll(".accordion-header");

        // Open first accordion by default
        if (accordions.length > 0) {
            const firstAccordion = accordions[0];
            const firstPanel = firstAccordion.nextElementSibling;
            firstAccordion.classList.add("active");
            firstPanel.classList.add("open");
            firstPanel.style.maxHeight = firstPanel.scrollHeight + "px";
        }

        accordions.forEach(acc => {
            acc.addEventListener("click", function() {
                // 1. Toggle Active Class for styling
                this.classList.toggle("active");

                // 2. Open/Close Panel
                const panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    panel.classList.remove("open");
                } else {
                    // Optional: Close other panels automatically
                    // document.querySelectorAll(".accordion-content").forEach(p => p.style.maxHeight = null);
                    // document.querySelectorAll(".accordion-header").forEach(h => h.classList.remove("active"));
                    // this.classList.add("active"); // Re-add active to clicked one
                    
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    panel.classList.add("open");
                }
            });
        });
    });
</script>

