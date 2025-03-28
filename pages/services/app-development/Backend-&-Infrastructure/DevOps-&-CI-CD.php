<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "DevOps & CI/CD Solutions | StartupAI";
$pageDescription = "Streamline your development and deployment processes with our comprehensive DevOps and CI/CD solutions. We help businesses automate workflows and improve delivery efficiency.";
$serviceName = "DevOps & CI/CD Solutions";
$serviceSlug = "devops-ci-cd";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'DevOps, CI/CD, continuous integration, continuous deployment, automation, infrastructure as code, containerization, Docker, Kubernetes, pipeline automation'
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
                <img src="/assets/images/services/devops-cicd.svg" alt="<?php echo $serviceName; ?>" class="animate-float">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="service-overview">
    <div class="content-container">
        <div class="section-header">
            <div class="service-overview-header" data-aos="fade-up">
                <h2>Transform Your Development Pipeline</h2>
                <p class="lead">Our DevOps and CI/CD solutions help organizations streamline their development processes, automate deployments, and deliver high-quality software faster. We implement modern practices and tools to enhance collaboration between development and operations teams.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="content-container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our DevOps Services</h2>
                <p class="lead">Comprehensive DevOps and CI/CD solutions for modern software development</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <h3>CI/CD Pipeline Implementation</h3>
                    <p>Automated continuous integration and deployment pipelines for faster and reliable software delivery.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Pipeline Design & Setup</li>
                        <li><i class="fas fa-check"></i> Automated Testing</li>
                        <li><i class="fas fa-check"></i> Deployment Automation</li>
                        <li><i class="fas fa-check"></i> Quality Gates</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3>Container Orchestration</h3>
                    <p>Containerization and orchestration solutions for scalable and portable applications.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Docker Implementation</li>
                        <li><i class="fas fa-check"></i> Kubernetes Setup</li>
                        <li><i class="fas fa-check"></i> Container Management</li>
                        <li><i class="fas fa-check"></i> Scaling Solutions</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Infrastructure as Code</h3>
                    <p>Automated infrastructure provisioning and management using code-based approaches.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Terraform Implementation</li>
                        <li><i class="fas fa-check"></i> CloudFormation</li>
                        <li><i class="fas fa-check"></i> Configuration Management</li>
                        <li><i class="fas fa-check"></i> Version Control</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Monitoring & Logging</h3>
                    <p>Comprehensive monitoring and logging solutions for system observability.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Performance Monitoring</li>
                        <li><i class="fas fa-check"></i> Log Management</li>
                        <li><i class="fas fa-check"></i> Alert Configuration</li>
                        <li><i class="fas fa-check"></i> Metrics Collection</li>
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
                <h2>Our Implementation Process</h2>
                <p class="lead">A systematic approach to DevOps transformation</p>
            </div>
        </div>
        
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <span>1</span>
                    </div>
                    <h3>Assessment</h3>
                    <p>Evaluating current processes and identifying opportunities for automation and improvement.</p>
                </div>
            </div>

            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon">
                        <span>2</span>
                    </div>
                    <h3>Strategy & Design</h3>
                    <p>Creating a comprehensive DevOps strategy and designing automated workflows.</p>
                </div>
            </div>

            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon">
                        <span>3</span>
                    </div>
                    <h3>Implementation</h3>
                    <p>Setting up tools, configuring pipelines, and implementing automation solutions.</p>
                </div>
            </div>

            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon">
                        <span>4</span>
                    </div>
                    <h3>Optimization</h3>
                    <p>Continuous monitoring and optimization of DevOps processes and workflows.</p>
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
                <h2>Benefits of DevOps & CI/CD</h2>
                <p class="lead">Why implement DevOps practices in your organization</p>
            </div>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Faster Delivery</h3>
                    <p>Accelerate software delivery through automated processes and efficient workflows.</p>
                </div>
            </div>

            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Higher Quality</h3>
                    <p>Improve software quality with automated testing and consistent deployment processes.</p>
                </div>
            </div>

            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Increased Efficiency</h3>
                    <p>Streamline operations and reduce manual effort through automation.</p>
                </div>
            </div>

            <div class="benefit-item" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Better Reliability</h3>
                    <p>Enhance system reliability with consistent deployments and monitoring.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="content-container">
        <div class="cta-content">
            <h2>Ready to Transform Your Development Process?</h2>
            <p class="lead">Contact us to discuss how DevOps and CI/CD can benefit your organization.</p>
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
                <p class="lead">Common questions about DevOps and CI/CD implementation</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>What tools do you use for CI/CD implementation?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We work with a variety of CI/CD tools including Jenkins, GitLab CI, GitHub Actions, CircleCI, and others. The choice of tools depends on your specific requirements and existing technology stack.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does it take to implement a CI/CD pipeline?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>The implementation timeline varies depending on the complexity of your applications and requirements. Basic pipeline setup can be completed in 2-4 weeks, while more complex implementations may take 2-3 months.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure security in the CI/CD pipeline?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We implement multiple security measures including code scanning, vulnerability assessment, secure secrets management, and access controls. We also integrate security testing into the pipeline for continuous security validation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you integrate with our existing tools and processes?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Yes, we design our DevOps solutions to integrate with your existing tools and processes. We can work with your current version control systems, testing frameworks, and deployment tools while introducing improvements where needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../../components/footer.php';
?>
