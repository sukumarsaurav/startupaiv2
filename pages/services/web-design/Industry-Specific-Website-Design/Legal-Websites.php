<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Use the main config.php instead of config/database.php
require_once '../../../../includes/config.php';

// Initialize the database connection
$database = new Database();
$db = $database->getConnection();

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="content-container">
        <div class="content-row">
            <div class="content-col full-width text-align-center">
                <h1 class="font-weight-bold" data-aos="fade-up">Law Firm & Legal Website Design</h1>
                <p class="subtitle" data-aos="fade-up" data-aos-delay="100">
                    Professional, authoritative websites that establish trust and generate quality client inquiries
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Service Overview -->
<section class="service-overview padding-y-5">
    <div class="content-container">
        <div class="content-row align-items-center">
            <div class="content-col half margin-bottom-responsive" data-aos="fade-right">
                <img src="/assets/images/services/legal-websites.svg" alt="Law Firm Website Design" class="img-fluid rounded box-shadow">
            </div>
            <div class="content-col half" data-aos="fade-left">
                <h2 class="margin-bottom-4">Law Firm & Legal Website Design Services</h2>
                <p>
                    Our specialized legal website design services help law firms, attorneys, and legal service providers create professional digital platforms that convey expertise, build trust, and generate qualified client leads. We develop authoritative, client-focused websites that effectively communicate your practice areas, highlight attorney credentials, and provide a clear path for potential clients to engage with your firm.
                </p>
                <div class="features margin-top-4">
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-gavel color-primary"></i>
                        </div>
                        <div>
                            <h5>Professional Authority</h5>
                            <p>Design that conveys credibility, experience, and legal expertise to potential clients.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-user-plus color-primary"></i>
                        </div>
                        <div>
                            <h5>Lead Generation</h5>
                            <p>Strategic contact forms and call-to-actions designed to convert visitors into consultations.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-search color-primary"></i>
                        </div>
                        <div>
                            <h5>Legal SEO</h5>
                            <p>Industry-specific search optimization to attract qualified clients seeking your services.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-lock color-primary"></i>
                        </div>
                        <div>
                            <h5>Privacy & Compliance</h5>
                            <p>Ethical compliance with legal advertising rules and client confidentiality standards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section - Hard-coded version -->
<section class="legal-why-hire-us padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Why Choose Us for Legal Website Design</h2>
                <p class="section-description">
                    Our expertise makes us the ideal partner for your law firm website
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-gavel fa-2x color-primary"></i>
                    </div>
                    <h4>Legal Industry Knowledge</h4>
                    <p>Our team understands the specific needs of law firms, legal ethics requirements, and how to effectively market different practice areas.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-handshake fa-2x color-primary"></i>
                    </div>
                    <h4>Trust-Building Design</h4>
                    <p>We create websites that instantly establish credibility through professional aesthetics, thoughtful content organization, and attorney-focused presentation.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-search fa-2x color-primary"></i>
                    </div>
                    <h4>Legal SEO Expertise</h4>
                    <p>Our strategies target practice-specific keywords and local search terms to help your firm be found by potential clients searching for your services.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-user-plus fa-2x color-primary"></i>
                    </div>
                    <h4>Conversion-Focused</h4>
                    <p>We design strategic conversion points throughout your site to turn visitors into consultations and qualified case inquiries.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-balance-scale fa-2x color-primary"></i>
                    </div>
                    <h4>Ethics Compliance</h4>
                    <p>We ensure your website adheres to all relevant legal advertising rules and bar association requirements for attorney websites.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-mobile-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Mobile-Optimized</h4>
                    <p>We create responsive legal websites that provide an exceptional experience for potential clients regardless of the device they're using.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="process-section padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Our Legal Website Design Process</h2>
                <p class="section-description">
                    A methodical approach to creating effective law firm websites
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-balance-scale fa-3x color-primary"></i>
                    </div>
                    <h4>Practice Analysis</h4>
                    <p>We research your firm's specialties, target clients, and competitive landscape to inform our strategy.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-sitemap fa-3x color-primary"></i>
                    </div>
                    <h4>Content Architecture</h4>
                    <p>We organize your practice areas, attorney profiles, and resources in a logical, client-focused structure.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-pencil-ruler fa-3x color-primary"></i>
                    </div>
                    <h4>Professional Design</h4>
                    <p>We create trustworthy visual aesthetics that align with your firm's brand and convey legal authority.</p>
                </div>
            </div>
            <div class="content-col one-fourth" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-bullseye fa-3x color-primary"></i>
                    </div>
                    <h4>Conversion Optimization</h4>
                    <p>We implement strategic contact points and case intake forms to maximize quality client inquiries.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website Types -->
<section class="website-types-section padding-y-5">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Legal Website Types</h2>
                <p class="section-description">
                    Tailored solutions for different legal practices and specialties
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-building fa-2x color-primary"></i>
                    </div>
                    <h4>Large Law Firm Websites</h4>
                    <p>Comprehensive platforms for multi-practice law firms featuring extensive attorney profiles, detailed practice area descriptions, global office locations, and sophisticated case management systems.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-user-tie fa-2x color-primary"></i>
                    </div>
                    <h4>Solo & Boutique Practice Sites</h4>
                    <p>Focused websites for specialized attorneys and small firms that highlight niche expertise, personal service advantages, and individual attorney credentials to attract specific client types.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-car-crash fa-2x color-primary"></i>
                    </div>
                    <h4>Personal Injury Law Sites</h4>
                    <p>Conversion-optimized websites for injury attorneys featuring case results, testimonials, free consultation offers, and clear information about contingency fee structures to drive potential client inquiries.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-landmark fa-2x color-primary"></i>
                    </div>
                    <h4>Corporate & Business Law Websites</h4>
                    <p>Sophisticated platforms for business-focused firms showcasing transactional expertise, industry knowledge, and business-oriented solutions for corporate clients and entrepreneurs.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-users fa-2x color-primary"></i>
                    </div>
                    <h4>Family & Divorce Law Sites</h4>
                    <p>Compassionate yet professional websites for family law attorneys with sensitive design elements, detailed practice area explanations, and private consultation options for clients in personal transitions.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-briefcase fa-2x color-primary"></i>
                    </div>
                    <h4>Legal Service Platforms</h4>
                    <p>Streamlined websites for legal service providers, document preparation companies, and legal tech solutions with clear service explanations, pricing transparency, and online ordering capabilities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Essential Features -->
<section class="features-section padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Essential Legal Website Features</h2>
                <p class="section-description">
                    Key components that establish trust and drive client inquiries
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-user-graduate fa-2x color-primary"></i>
                    </div>
                    <h4>Attorney Profiles</h4>
                    <p>Comprehensive biographies highlighting education, experience, bar admissions, publications, and areas of practice to establish credibility and expertise.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-list-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Practice Area Pages</h4>
                    <p>Detailed descriptions of legal services offered, with clear explanations of processes, client rights, and potential outcomes for each type of case or matter.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-trophy fa-2x color-primary"></i>
                    </div>
                    <h4>Case Results & Testimonials</h4>
                    <p>Showcases of successful outcomes, verdicts, settlements, and client experiences that demonstrate proven capabilities and client satisfaction.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-comment-dots fa-2x color-primary"></i>
                    </div>
                    <h4>Consultation Request Forms</h4>
                    <p>Streamlined contact forms designed to qualify potential clients and gather case-specific information while maintaining confidentiality.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-book-open fa-2x color-primary"></i>
                    </div>
                    <h4>Legal Resources & Blog</h4>
                    <p>Educational content that demonstrates expertise and provides value to potential clients, improving both SEO and client trust.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-lock fa-2x color-primary"></i>
                    </div>
                    <h4>Client Portals</h4>
                    <p>Secure areas for client file access, document sharing, bill payment, and case status updates to enhance client service and communication.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section padding-y-5">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Professional Legal Website Design</h2>
                <p class="section-description">
                    How a specialized law firm website drives practice growth
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-award fa-2x color-primary"></i>
                    </div>
                    <h4>Enhanced Credibility</h4>
                    <p>A professional website establishes trust with potential clients who overwhelmingly research attorneys online before making contact.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-user-plus fa-2x color-primary"></i>
                    </div>
                    <h4>Qualified Client Inquiries</h4>
                    <p>Strategic design and content attract more relevant case inquiries from clients who align with your practice areas and ideal client profile.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-search-location fa-2x color-primary"></i>
                    </div>
                    <h4>Local Practice Visibility</h4>
                    <p>Optimized local SEO ensures your firm appears prominently when potential clients in your area search for legal services you provide.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-clock fa-2x color-primary"></i>
                    </div>
                    <h4>24/7 Client Acquisition</h4>
                    <p>Your website works around the clock to inform potential clients and capture inquiries even outside of office hours.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-balance-scale fa-2x color-primary"></i>
                    </div>
                    <h4>Competitive Advantage</h4>
                    <p>A superior website experience differentiates your firm from competitors with outdated or generic online presences.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-tasks fa-2x color-primary"></i>
                    </div>
                    <h4>Operational Efficiency</h4>
                    <p>Online intake forms, client portals, and resource libraries reduce administrative workload and streamline client onboarding.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section padding-y-5 bg-primary text-white">
    <div class="content-container">
        <div class="content-row align-items-center">
            <div class="content-col one-half margin-bottom-4 margin-lg-0" data-aos="fade-right">
                <h2 class="margin-bottom-3">Ready to Elevate Your Law Firm's Online Presence?</h2>
                <p class="subtitle margin-bottom-0">
                    Let's create a legal website that converts visitors into clients.
                </p>
            </div>
            <div class="content-col one-half text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="content-container">
        <div class="faq-header">
            <h2 class="faq-title">Legal Website FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What makes a legal website different from other business websites?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Legal websites must adhere to specific bar association advertising rules and ethics guidelines that don't apply to other industries. They also need to balance professional authority with approachability, include attorney-specific credentials and information, and often require higher levels of data security for client information. The content strategy focuses on demonstrating expertise in specific practice areas rather than general business services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 