<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Database Design & Management | StartupAI";
$pageDescription = "Expert database design and management services to ensure efficient data storage, retrieval, and maintenance for your applications. We optimize database performance and security for scalable solutions.";
$serviceName = "Database Design & Management";
$serviceSlug = "database-design-management";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'database design, database management, SQL, NoSQL, data modeling, database optimization, data security, database architecture, data migration, database maintenance'
];

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content" data-aos="fade-right">
                <h1><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <a href="/pages/contact.php" class="get-started-btn">Get Started</a>
            </div>
            <div class="page-header-image" data-aos="fade-left">
                <img src="/assets/images/services/database-management.svg" alt="<?php echo $serviceName; ?>" class="animate-float">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="service-overview">
    <div class="content-container">
        <div class="section-header">
            <div class="service-overview-header" data-aos="fade-up">
                <h2>Expert Database Solutions for Your Business</h2>
                <p class="lead">We provide comprehensive database design and management services to help businesses efficiently store, manage, and utilize their data. Our solutions ensure optimal performance, security, and scalability for your data infrastructure.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="content-container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Database Services</h2>
                <p class="lead">Comprehensive database solutions tailored to your needs</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Database Design</h3>
                    <p>Expert database architecture and schema design for optimal data organization and efficiency.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Data Modeling</li>
                        <li><i class="fas fa-check"></i> Schema Design</li>
                        <li><i class="fas fa-check"></i> Normalization</li>
                        <li><i class="fas fa-check"></i> Indexing Strategy</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Database Management</h3>
                    <p>Comprehensive database administration and maintenance services to ensure optimal performance.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Performance Monitoring</li>
                        <li><i class="fas fa-check"></i> Backup & Recovery</li>
                        <li><i class="fas fa-check"></i> Security Management</li>
                        <li><i class="fas fa-check"></i> Regular Maintenance</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Data Migration</h3>
                    <p>Seamless data migration services between different database systems and platforms.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Migration Planning</li>
                        <li><i class="fas fa-check"></i> Data Validation</li>
                        <li><i class="fas fa-check"></i> Zero Downtime Migration</li>
                        <li><i class="fas fa-check"></i> Post-Migration Support</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Performance Optimization</h3>
                    <p>Database optimization services to enhance performance and efficiency.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Query Optimization</li>
                        <li><i class="fas fa-check"></i> Index Optimization</li>
                        <li><i class="fas fa-check"></i> Cache Implementation</li>
                        <li><i class="fas fa-check"></i> Performance Tuning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="implementation-process">
    <div class="content-container">
        <div class="section-header">
            <div class="implementation-header" data-aos="fade-up">
                <h2>Our Database Implementation Process</h2>
                <p class="lead">A systematic approach to database design and management</p>
            </div>
        </div>
        
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <span>1</span>
                    </div>
                    <h3>Requirements Analysis</h3>
                    <p>Understanding your data needs and business requirements to design the optimal database solution.</p>
                </div>
            </div>

            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon">
                        <span>2</span>
                    </div>
                    <h3>Design & Architecture</h3>
                    <p>Creating a robust database architecture that ensures data integrity and performance.</p>
                </div>
            </div>

            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon">
                        <span>3</span>
                    </div>
                    <h3>Implementation</h3>
                    <p>Setting up and configuring the database system according to the design specifications.</p>
                </div>
            </div>

            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon">
                        <span>4</span>
                    </div>
                    <h3>Optimization & Maintenance</h3>
                    <p>Continuous monitoring and optimization to ensure optimal database performance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="content-container">
        <div class="section-header">
            <div class="benefits-header" data-aos="fade-up">
                <h2>Benefits of Our Database Solutions</h2>
                <p class="lead">Why choose our database design and management services</p>
            </div>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Enhanced Performance</h3>
                    <p>Optimized database design and queries for faster data access and processing.</p>
                </div>
            </div>

            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Data Security</h3>
                    <p>Robust security measures to protect your valuable data from unauthorized access and threats.</p>
                </div>
            </div>

            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h3>Scalability</h3>
                    <p>Database solutions that grow with your business and handle increasing data volumes efficiently.</p>
                </div>
            </div>

            <div class="benefit-item" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>High Availability</h3>
                    <p>Ensuring your data is always accessible when you need it with minimal downtime.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="content-container">
        <div class="cta-content">
            <h2>Ready to Optimize Your Database?</h2>
            <p class="lead">Contact us to discuss your database requirements and get started with implementation.</p>
            <a href="/pages/contact.php" class="cta-btn">Schedule a Consultation</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="content-container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about our database services</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>What database systems do you work with?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We work with both SQL and NoSQL databases, including MySQL, PostgreSQL, MongoDB, Oracle, SQL Server, and more. We help you choose the right database system based on your specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure data security?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We implement multiple security measures including encryption, access controls, regular backups, security audits, and compliance with data protection regulations. We also provide security training and documentation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you help with database migration?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide comprehensive database migration services, including planning, execution, and validation. We ensure minimal downtime and data integrity throughout the migration process.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you handle database performance issues?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We use a combination of monitoring tools, query optimization, indexing strategies, and performance tuning techniques to identify and resolve performance issues. We also provide recommendations for hardware and infrastructure improvements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../../components/footer.php';
?>
