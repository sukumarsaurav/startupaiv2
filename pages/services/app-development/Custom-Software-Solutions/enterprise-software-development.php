<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Enterprise Software Development
$why_hire_us = getWhyHireUsContent('enterprise-software-development');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content text-center">
                <h1 class="page-title" data-aos="fade-up">Enterprise Software Development</h1>
                <p class="page-description" data-aos="fade-up" data-aos-delay="100">
                    Robust, scalable solutions designed for complex business operations
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
                <img src="/assets/images/services/enterprise-software.svg" alt="Enterprise Software Development" class="featured-image">
            </div>
            <div class="service-content" data-aos="fade-left">
                <h2 class="section-heading">Enterprise-Grade Software Solutions</h2>
                <p>
                    Our enterprise software development services deliver sophisticated, high-performance systems designed to streamline complex business operations. We create custom enterprise applications that integrate with your existing infrastructure while providing the security, scalability, and reliability that large organizations demand. From ERP systems to custom workflow solutions, we build software that transforms how enterprises operate.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-database icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Scalable Architecture</h5>
                            <p>Systems designed to handle large volumes of data and users with consistent performance.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-cogs icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Integration Capabilities</h5>
                            <p>Seamless connections with existing enterprise systems, legacy applications, and third-party services.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Enterprise-Grade Security</h5>
                            <p>Advanced security features including role-based access control, encryption, and compliance with regulations.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Business Intelligence</h5>
                            <p>Data visualization and reporting tools that provide actionable insights for informed decision-making.</p>
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
            <h2 class="section-heading">Our Enterprise Software Development Process</h2>
            <p class="section-subheading">
                A methodical approach to building complex enterprise systems
            </p>
        </div>
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-clipboard-list icon-large icon-primary"></i>
                    </div>
                    <h4>Discovery & Analysis</h4>
                    <p>We conduct thorough business analysis to understand your operations, workflows, and requirements.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-sitemap icon-large icon-primary"></i>
                    </div>
                    <h4>Architecture Design</h4>
                    <p>We design a robust technical architecture that ensures scalability, security, and performance.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-code icon-large icon-primary"></i>
                    </div>
                    <h4>Agile Development</h4>
                    <p>Our development teams use agile methodologies with iterative delivery and regular stakeholder feedback.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-rocket icon-large icon-primary"></i>
                    </div>
                    <h4>Enterprise Integration</h4>
                    <p>We ensure seamless deployment, data migration, user training, and ongoing enterprise support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Benefits of Custom Enterprise Software</h2>
            <p class="section-subheading">
                How tailored enterprise solutions drive organizational success
            </p>
        </div>
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-tachometer-alt icon-large icon-primary"></i>
                    </div>
                    <h4>Operational Efficiency</h4>
                    <p>Automate complex workflows and streamline processes to reduce operational costs and increase productivity.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-puzzle-piece icon-large icon-primary"></i>
                    </div>
                    <h4>Seamless Integration</h4>
                    <p>Custom solutions that integrate perfectly with your existing enterprise systems and business processes.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-bar icon-large icon-primary"></i>
                    </div>
                    <h4>Data-Driven Insights</h4>
                    <p>Advanced analytics and reporting capabilities that provide valuable business intelligence for strategic decisions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="use-cases-section section-spacing section-light">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Enterprise Software Solutions We Deliver</h2>
            <p class="section-subheading">
                Tailored systems for complex enterprise environments
            </p>
        </div>
        <div class="use-cases-grid">
            <div class="use-case-item" data-aos="fade-up">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-boxes icon-large icon-primary"></i>
                    </div>
                    <h4>Supply Chain Management</h4>
                    <p>End-to-end systems for inventory management, logistics, procurement, and vendor relationships.</p>
                </div>
            </div>
            <div class="use-case-item" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-tasks icon-large icon-primary"></i>
                    </div>
                    <h4>Business Process Automation</h4>
                    <p>Custom workflow systems that automate complex processes, approvals, and task management.</p>
                </div>
            </div>
            <div class="use-case-item" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-users-cog icon-large icon-primary"></i>
                    </div>
                    <h4>Resource Management</h4>
                    <p>Systems for human resources, asset management, and enterprise-wide resource planning.</p>
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
                <h2 class="cta-title">Ready to Transform Your Enterprise Operations?</h2>
                <p class="cta-description">
                    Let's discuss how custom enterprise software can address your organization's challenges.
                </p>
            </div>
            <div class="cta-button" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center">
            <h2 class="section-heading">Enterprise Software Development FAQ's</h2>
            <p class="section-subheading">Have Any Questions?</p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How do you ensure the security of enterprise software?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We implement multiple layers of security including secure authentication, data encryption, role-based access control, and regular security audits. We follow industry best practices and compliance standards such as GDPR, HIPAA, SOC2, and others as required. Our development process includes rigorous security testing at every stage.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you handle data migration from legacy systems?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Our data migration approach involves thorough assessment of existing data, creating a detailed migration plan, data cleaning and transformation, testing in a staging environment, and careful execution with rollback capabilities. We ensure data integrity throughout the process and minimize disruption to your business operations during the transition.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is your approach to user training and adoption?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We believe successful enterprise software implementation requires comprehensive user training and change management. Our approach includes creating detailed documentation, conducting hands-on training sessions, developing video tutorials, implementing a train-the-trainer program, and providing ongoing support. We work with your team to ensure high adoption rates and maximize the return on your software investment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 