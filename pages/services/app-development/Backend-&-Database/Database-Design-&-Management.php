<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Database Design & Management
$why_hire_us = getWhyHireUsContent('database-design-management');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content text-center">
                <h1 class="page-title" data-aos="fade-up">Database Design & Management</h1>
                <p class="page-description" data-aos="fade-up" data-aos-delay="100">
                    Optimize your data architecture for scalability, performance, and security
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
                <img src="/assets/images/services/database-design.svg" alt="Database Design and Management" class="featured-image">
            </div>
            <div class="service-content" data-aos="fade-left">
                <h2 class="section-heading">Database Design & Management Services</h2>
                <p>
                    Our database design and management services help organizations build robust data architectures that support business growth, ensure data integrity, and enhance application performance. From designing efficient schemas to implementing backup strategies and performance optimization, we provide comprehensive database solutions tailored to your specific needs.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-sitemap icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Schema Design & Optimization</h5>
                            <p>Data modeling and schema design optimized for your business processes and application needs.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-tachometer-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Performance Tuning</h5>
                            <p>Query optimization, indexing strategies, and configuration tuning for maximum efficiency.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Security & Compliance</h5>
                            <p>Robust security measures and compliance with regulatory requirements like GDPR and HIPAA.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-sync-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Migration & Modernization</h5>
                            <p>Seamless migration between database platforms and upgrades to modern technologies.</p>
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
            <h2 class="section-heading">Our Database Development Process</h2>
            <p class="section-subheading">
                A methodical approach to creating optimized database solutions
            </p>
        </div>
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-clipboard-list icon-large icon-primary"></i>
                    </div>
                    <h4>Requirements Analysis</h4>
                    <p>We assess your data storage needs, application requirements, and performance expectations.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-project-diagram icon-large icon-primary"></i>
                    </div>
                    <h4>Design & Modeling</h4>
                    <p>We create efficient database schemas, relationships, and indexes tailored to your business logic.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-cogs icon-large icon-primary"></i>
                    </div>
                    <h4>Implementation</h4>
                    <p>Our database experts build and configure your database with security, scalability, and performance in mind.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-chart-line icon-large icon-primary"></i>
                    </div>
                    <h4>Optimization & Support</h4>
                    <p>We continuously monitor, tune, and maintain your database for optimal performance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Database Technologies -->
<section class="technologies-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Database Technologies We Work With</h2>
            <p class="section-subheading">
                Expertise across relational, NoSQL, and specialized database systems
            </p>
        </div>
        <div class="tech-grid">
            <div class="tech-item" data-aos="fade-up">
                <div class="tech-card">
                    <h4 class="text-center">Relational Databases</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>MySQL / MariaDB</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>PostgreSQL</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Microsoft SQL Server</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Oracle Database</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>SQLite</li>
                    </ul>
                </div>
            </div>
            <div class="tech-item" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card">
                    <h4 class="text-center">NoSQL Databases</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>MongoDB</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Redis</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Cassandra</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Amazon DynamoDB</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Firebase Realtime Database</li>
                    </ul>
                </div>
            </div>
            <div class="tech-item" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card">
                    <h4 class="text-center">Specialized Databases</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Elasticsearch (search)</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Neo4j (graph)</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>InfluxDB (time series)</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Google BigQuery (analytics)</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Snowflake (data warehouse)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section section-spacing section-light">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Benefits of Professional Database Design</h2>
            <p class="section-subheading">
                How optimized database architecture drives business success
            </p>
        </div>
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-icon">
                    <i class="fas fa-bolt icon-large icon-primary"></i>
                </div>
                <h4>Enhanced Performance</h4>
                <p>Properly designed databases respond faster to queries, improving application responsiveness and user experience.</p>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-icon">
                    <i class="fas fa-expand-arrows-alt icon-large icon-primary"></i>
                </div>
                <h4>Scalability</h4>
                <p>Future-proof designs that accommodate growing data volumes and increasing user loads without performance degradation.</p>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-icon">
                    <i class="fas fa-shield-alt icon-large icon-primary"></i>
                </div>
                <h4>Data Security</h4>
                <p>Robust security measures and proper access controls to protect your valuable business information.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Our Database Services</h2>
            <p class="section-subheading">
                Comprehensive solutions for all your database needs
            </p>
        </div>
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-pencil-ruler icon-large icon-primary"></i>
                    </div>
                    <h4 class="service-title">Database Design & Development</h4>
                    <p>Custom database design with efficient data models, schemas, and relationships. Our database architects create solutions that align with your business processes and application requirements.</p>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tachometer-alt icon-large icon-primary"></i>
                    </div>
                    <h4 class="service-title">Performance Optimization</h4>
                    <p>Database tuning services to enhance query performance, reduce response times, and optimize resource utilization. We implement indexing strategies, query optimization, and configuration tuning.</p>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-exchange-alt icon-large icon-primary"></i>
                    </div>
                    <h4 class="service-title">Database Migration</h4>
                    <p>Seamless migration between database platforms with minimal downtime. We handle data transfer, schema conversion, and application adaptation for smooth transitions to new database systems.</p>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-server icon-large icon-primary"></i>
                    </div>
                    <h4 class="service-title">Database Administration</h4>
                    <p>Ongoing management and maintenance of your database systems, including backups, monitoring, security updates, and troubleshooting. We ensure your databases operate reliably and securely.</p>
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
                <h2 class="cta-title">Ready to Optimize Your Data Architecture?</h2>
                <p class="cta-description">
                    Let's design a database solution that enhances performance and supports your business growth.
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
            <h2 class="faq-title">Database Design & Management FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How do I choose the right database technology for my application?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Selecting the right database depends on several factors: data structure (relational or non-relational), scalability requirements, query patterns, consistency needs, and budget constraints. Relational databases like MySQL or PostgreSQL are ideal for structured data and complex relationships. NoSQL options like MongoDB excel with unstructured data and horizontal scaling. During our consultation, we analyze your specific needs including data volume, transaction requirements, and growth projections to recommend the most appropriate database technology for your particular use case.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are the signs that my database needs optimization?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Common indicators include slow query response times, increasing CPU or memory usage, frequent timeouts, growing storage requirements, and application performance degradation during peak usage. If your application is slowing down as data volume grows, reports take longer to generate, or users are experiencing delays, these are clear signs that database optimization is needed. Our team can perform a comprehensive database health check to identify specific bottlenecks and recommend optimization strategies tailored to your system.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you ensure data security in database implementations?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We implement multiple layers of security including robust authentication mechanisms, role-based access control, data encryption (both at rest and in transit), secure connection protocols, and regular security audits. We also establish backup and recovery strategies, implement audit logging for tracking database activities, and ensure compliance with relevant regulations like GDPR or HIPAA. Additionally, we provide security best practices training for your team to maintain security standards in day-to-day operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
