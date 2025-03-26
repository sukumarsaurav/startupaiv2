<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for CRM & ERP Solutions
$why_hire_us = getWhyHireUsContent('crm-erp-solutions');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content text-center">
                <h1 class="page-title" data-aos="fade-up">CRM & ERP Solutions</h1>
                <p class="page-description" data-aos="fade-up" data-aos-delay="100">
                    Streamline operations and enhance customer relationships with tailored business management systems
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Service Overview -->
<section class="service-overview section-spacing">
    <div class="content-container">
        <div class="service-grid">
            <div class="service-image" data-aos="fade-right">
                <img src="/assets/images/services/crm-erp-solutions.svg" alt="CRM and ERP Solutions" class="featured-image">
            </div>
            <div class="service-content" data-aos="fade-left">
                <h2 class="section-heading">Custom CRM & ERP Development Services</h2>
                <p>
                    Our CRM and ERP development services help businesses optimize their operations, enhance customer relationships, and make data-driven decisions. We create tailored solutions that integrate with your existing workflows, automate key processes, and provide actionable insights, enabling your organization to increase efficiency, reduce costs, and improve customer satisfaction.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-users icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Customer Relationship Management</h5>
                            <p>Custom CRM solutions to track interactions, manage sales pipelines, and improve customer service.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-cogs icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Enterprise Resource Planning</h5>
                            <p>Integrated ERP systems to manage finance, inventory, HR, and other core business functions.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-sync-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>System Integration</h5>
                            <p>Seamless connection between your CRM/ERP and third-party tools, databases, and services.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-chart-bar icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Reporting & Analytics</h5>
                            <p>Powerful dashboards and reporting tools for real-time business intelligence and insights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

<!-- Process -->
<section class="process-section section-spacing section-light">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Our CRM & ERP Development Process</h2>
            <p class="section-subheading">
                A methodical approach to building effective business management systems
            </p>
        </div>
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-search icon-large icon-primary"></i>
                    </div>
                    <h4>Business Analysis</h4>
                    <p>We analyze your business processes, workflows, and requirements to identify optimization opportunities.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-pencil-ruler icon-large icon-primary"></i>
                    </div>
                    <h4>Solution Design</h4>
                    <p>We create a tailored CRM/ERP architecture that aligns with your business goals and workflows.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-code icon-large icon-primary"></i>
                    </div>
                    <h4>Development & Integration</h4>
                    <p>Our developers build your system with a focus on usability, performance, and integrations.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-graduation-cap icon-large icon-primary"></i>
                    </div>
                    <h4>Training & Support</h4>
                    <p>We ensure smooth adoption with comprehensive training and ongoing technical support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CRM Solutions -->
<section class="crm-solutions-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">CRM Development Solutions</h2>
            <p class="section-subheading">
                Custom customer relationship management systems tailored to your business
            </p>
        </div>
        <div class="solutions-grid">
            <div class="solution-item" data-aos="fade-up">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-funnel-dollar icon-large icon-primary"></i>
                    </div>
                    <h4>Sales CRM</h4>
                    <p>Lead management, opportunity tracking, sales forecasting, and pipeline visualization to optimize your sales process and increase conversion rates.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-headset icon-large icon-primary"></i>
                    </div>
                    <h4>Service CRM</h4>
                    <p>Ticket management, customer service automation, SLA tracking, and knowledge bases to improve customer support and satisfaction.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-bullhorn icon-large icon-primary"></i>
                    </div>
                    <h4>Marketing CRM</h4>
                    <p>Campaign management, email marketing automation, customer segmentation, and analytics to enhance marketing effectiveness.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ERP Solutions -->
<section class="erp-solutions-section section-spacing section-light">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">ERP Development Solutions</h2>
            <p class="section-subheading">
                Comprehensive enterprise resource planning systems for operational excellence
            </p>
        </div>
        <div class="solutions-grid">
            <div class="solution-item" data-aos="fade-up">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-calculator icon-large icon-primary"></i>
                    </div>
                    <h4>Financial Management</h4>
                    <p>Accounting, budgeting, financial reporting, expense management, and billing automation to streamline your financial operations.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-boxes icon-large icon-primary"></i>
                    </div>
                    <h4>Inventory & Supply Chain</h4>
                    <p>Inventory tracking, order management, procurement automation, supplier management, and logistics coordination.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-users-cog icon-large icon-primary"></i>
                    </div>
                    <h4>Human Resources</h4>
                    <p>Employee management, time tracking, payroll processing, recruitment, performance evaluation, and training administration.</p>
                </div>
            </div>
        </div>
        <div class="solutions-grid">
            <div class="solution-item" data-aos="fade-up">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-industry icon-large icon-primary"></i>
                    </div>
                    <h4>Manufacturing</h4>
                    <p>Production planning, quality control, equipment maintenance, bill of materials, and manufacturing resource planning.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-tasks icon-large icon-primary"></i>
                    </div>
                    <h4>Project Management</h4>
                    <p>Task assignment, resource allocation, project tracking, time and cost management, and collaboration tools.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-chart-pie icon-large icon-primary"></i>
                    </div>
                    <h4>Business Intelligence</h4>
                    <p>Advanced reporting, data visualization, performance dashboards, and predictive analytics for informed decision-making.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Benefits of Custom CRM & ERP Solutions</h2>
            <p class="section-subheading">
                How tailored business systems drive operational excellence
            </p>
        </div>
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-bolt icon-large icon-primary"></i>
                    </div>
                    <h4>Increased Efficiency</h4>
                    <p>Automate routine tasks and streamline workflows to reduce manual effort and operational costs.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-database icon-large icon-primary"></i>
                    </div>
                    <h4>Centralized Data</h4>
                    <p>Eliminate data silos with a unified platform that provides a single source of truth across departments.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line icon-large icon-primary"></i>
                    </div>
                    <h4>Better Decision Making</h4>
                    <p>Access to real-time analytics and reporting enables data-driven business decisions.</p>
                </div>
            </div>
        </div>
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-user-check icon-large icon-primary"></i>
                    </div>
                    <h4>Enhanced Customer Experience</h4>
                    <p>Deliver personalized service through better customer insights and streamlined interactions.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-expand-arrows-alt icon-large icon-primary"></i>
                    </div>
                    <h4>Scalability</h4>
                    <p>Adapt and grow your business systems as your organization evolves without starting from scratch.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-handshake icon-large icon-primary"></i>
                    </div>
                    <h4>Improved Collaboration</h4>
                    <p>Enable teams to work together more effectively with shared information and workflows.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section section-spacing section-primary text-white">
    <div class="content-container">
        <div class="cta-grid">
            <div class="cta-content" data-aos="fade-right">
                <h2 class="cta-title">Ready to Transform Your Business Operations?</h2>
                <p class="cta-description">
                    Let's build CRM and ERP solutions that streamline your processes and drive growth.
                </p>
            </div>
            <div class="cta-button" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-header">
            <h2 class="faq-title">CRM & ERP Solutions FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    Should I choose an off-the-shelf solution or custom CRM/ERP development?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The choice between off-the-shelf and custom CRM/ERP solutions depends on your specific business needs. Off-the-shelf solutions work well for businesses with standard processes that can adapt to the software's workflow. They typically offer faster implementation and lower initial costs. Custom development is ideal when you have unique business processes that you don't want to change, need specific integrations with existing systems, or require functionality not available in standard products. While custom solutions have higher upfront costs, they can provide better long-term value through perfect alignment with your processes, no recurring licensing fees, and the ability to adapt as your business evolves. We often recommend a hybrid approach, starting with a robust platform that we can then customize to your specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to implement a custom CRM or ERP system?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Implementation timelines vary based on the complexity and scope of your CRM or ERP project. For a focused CRM with specific functionality, development typically takes 3-6 months from requirements gathering to deployment. Comprehensive ERP systems that cover multiple departments and functions usually require 6-12 months for full implementation. Complex enterprise-wide solutions with extensive integrations and data migration may take 12-18 months. We use an agile development approach that enables phased implementation, allowing you to start using core functionality earlier while we continue developing additional features. This approach provides faster time-to-value and allows for adjustments based on user feedback during the implementation process.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you handle data migration to new CRM/ERP systems?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We follow a structured data migration approach to ensure a seamless transition to your new system. First, we conduct a thorough data audit to identify all relevant data sources, assess data quality, and determine what needs to be migrated. Then we create a detailed migration strategy, including data mapping between old and new systems, transformation rules, and validation criteria. We develop custom migration scripts and perform multiple test migrations to identify and resolve issues before the final transfer. We also implement data cleansing processes to improve the quality of migrated data. The final migration is carefully timed to minimize business disruption, often during off-hours. Post-migration, we conduct extensive validation to ensure data integrity and provide training on how to work with the migrated data in the new system.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
