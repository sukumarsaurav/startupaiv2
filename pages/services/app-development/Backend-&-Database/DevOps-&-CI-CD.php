<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for DevOps & CI/CD
$why_hire_us = getWhyHireUsContent('devops-ci-cd');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content text-center">
                <h1 class="page-title" data-aos="fade-up">DevOps & CI/CD</h1>
                <p class="page-description" data-aos="fade-up" data-aos-delay="100">
                    Streamline your development lifecycle with automated workflows and deployment pipelines
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
                <img src="/assets/images/services/devops-cicd.svg" alt="DevOps and CI/CD" class="featured-image">
            </div>
            <div class="service-content" data-aos="fade-left">
                <h2 class="section-heading">DevOps & CI/CD Implementation Services</h2>
                <p>
                    Our DevOps and CI/CD services help organizations improve software delivery speed, quality, and reliability. We implement automated testing, continuous integration, and deployment pipelines that reduce manual errors, shorten development cycles, and enable more frequent releases. From infrastructure as code to monitoring and observability solutions, we build DevOps practices tailored to your unique development workflow.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-cogs icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>CI/CD Pipeline Automation</h5>
                            <p>Automated workflows for code integration, testing, and deployment to production environments.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-code-branch icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Infrastructure as Code</h5>
                            <p>Version-controlled infrastructure definitions for consistent, reproducible environments.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Security Integration</h5>
                            <p>Automated security scanning and testing integrated within your delivery pipeline.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Monitoring & Observability</h5>
                            <p>Comprehensive logging, metrics, tracing and alerting for system health and performance.</p>
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
            <h2 class="section-heading">Our DevOps Implementation Process</h2>
            <p class="section-subheading">
                A systematic approach to DevOps transformation
            </p>
        </div>
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-search icon-large icon-primary"></i>
                    </div>
                    <h4>Assessment & Strategy</h4>
                    <p>We evaluate your current workflows, tools, and practices to create a tailored DevOps roadmap.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-tools icon-large icon-primary"></i>
                    </div>
                    <h4>Tool Selection & Setup</h4>
                    <p>We implement and configure the right DevOps tools to support your development workflow.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-code icon-large icon-primary"></i>
                    </div>
                    <h4>Pipeline Implementation</h4>
                    <p>We build automated CI/CD pipelines with testing, security scanning, and deployment stages.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-user-cog icon-large icon-primary"></i>
                    </div>
                    <h4>Knowledge Transfer</h4>
                    <p>We train your team and provide documentation to ensure self-sufficiency with the new systems.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DevOps Tools -->
<section class="tools-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">DevOps Tools & Technologies</h2>
            <p class="section-subheading">
                The powerful technologies we use to implement DevOps practices
            </p>
        </div>
        <div class="tech-grid">
            <div class="tech-item" data-aos="fade-up">
                <div class="tech-card">
                    <h4 class="text-center">CI/CD Solutions</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Jenkins</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>GitHub Actions</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>GitLab CI/CD</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>CircleCI</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Azure DevOps</li>
                    </ul>
                </div>
            </div>
            <div class="tech-item" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card">
                    <h4 class="text-center">Infrastructure as Code</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Terraform</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>AWS CloudFormation</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Ansible</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Pulumi</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Kubernetes YAML</li>
                    </ul>
                </div>
            </div>
            <div class="tech-item" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card">
                    <h4 class="text-center">Monitoring & Observability</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Prometheus</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Grafana</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>ELK Stack</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>Datadog</li>
                        <li><i class="fas fa-check-circle icon-primary icon-margin"></i>New Relic</li>
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
            <h2 class="section-heading">Benefits of DevOps & CI/CD Implementation</h2>
            <p class="section-subheading">
                How DevOps practices transform software development and operations
            </p>
        </div>
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-icon">
                    <i class="fas fa-bolt icon-large icon-primary"></i>
                </div>
                <h4>Faster Time to Market</h4>
                <p>Automated deployment pipelines reduce release cycles from weeks to hours or minutes.</p>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-icon">
                    <i class="fas fa-check-circle icon-large icon-primary"></i>
                </div>
                <h4>Improved Quality</h4>
                <p>Automated testing and validation ensures consistent quality across all deployments.</p>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-icon">
                    <i class="fas fa-undo icon-large icon-primary"></i>
                </div>
                <h4>Reduced Risk</h4>
                <p>Smaller, more frequent releases minimize deployment risk and enable faster rollbacks if needed.</p>
            </div>
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-icon">
                    <i class="fas fa-users icon-large icon-primary"></i>
                </div>
                <h4>Better Collaboration</h4>
                <p>Breaks down silos between development and operations teams, fostering shared responsibility.</p>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-icon">
                    <i class="fas fa-chart-line icon-large icon-primary"></i>
                </div>
                <h4>Greater Visibility</h4>
                <p>Comprehensive monitoring and logging provides insights into application performance and issues.</p>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-icon">
                    <i class="fas fa-dollar-sign icon-large icon-primary"></i>
                </div>
                <h4>Cost Efficiency</h4>
                <p>Automated processes reduce manual work, infrastructure waste, and costly deployment errors.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Our DevOps Services</h2>
            <p class="section-subheading">
                Comprehensive solutions for your DevOps transformation
            </p>
        </div>
        <div class="service-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-route icon-primary"></i>
                    </div>
                    <h4 class="mb-0">DevOps Strategy & Assessment</h4>
                    <p>We evaluate your current development processes, identify bottlenecks, and create a tailored roadmap for DevOps adoption that aligns with your business goals and technical requirements.</p>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs icon-primary"></i>
                    </div>
                    <h4 class="mb-0">CI/CD Pipeline Setup</h4>
                    <p>We implement automated continuous integration and delivery pipelines that streamline code building, testing, and deployment across your development environments with minimal manual intervention.</p>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-code icon-primary"></i>
                    </div>
                    <h4 class="mb-0">Infrastructure as Code</h4>
                    <p>We implement IaC practices using tools like Terraform, CloudFormation, or Ansible to create version-controlled, reproducible infrastructure that can be provisioned automatically as part of your deployment process.</p>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-containers icon-primary"></i>
                    </div>
                    <h4 class="mb-0">Container Orchestration</h4>
                    <p>We set up and optimize container orchestration platforms like Kubernetes to automate deployment, scaling, and management of containerized applications for improved resource utilization and reliability.</p>
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
                <h2 class="mb-3">Ready to Streamline Your Development Pipeline?</h2>
                <p class="lead mb-0">
                    Let's implement DevOps practices that accelerate your software delivery.
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
            <h2 class="faq-title">DevOps & CI/CD FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What is DevOps and how can it benefit my organization?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>DevOps is a set of practices that combines software development (Dev) and IT operations (Ops) to shorten the development lifecycle while delivering features, fixes, and updates more frequently and reliably. The key benefits include faster time to market, improved quality through automated testing, enhanced collaboration between teams, reduced deployment failures, and quicker recovery from issues. Organizations implementing DevOps typically see significant improvements in deployment frequency (often going from monthly to daily releases), lower failure rates, and faster mean-time-to-recovery (MTTR) when issues occur.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to implement DevOps practices in an organization?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>DevOps implementation is a journey rather than a one-time project. While initial CI/CD pipelines can be set up within 2-4 weeks for smaller applications, a full DevOps transformation typically takes 3-6 months for basic implementation and up to 12-18 months for comprehensive organization-wide adoption. We recommend a phased approach, focusing first on high-impact, low-resistance areas to demonstrate value before expanding. The timeline depends on your organization's current processes, technical debt, team size, and cultural readiness for change. Our approach includes quick wins early in the process to build momentum and support for the transformation.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do we need to change our entire tech stack to implement DevOps?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>No, you don't need to change your entire tech stack. DevOps practices can be implemented with most modern technology stacks. We typically layer DevOps tools and processes on top of your existing technologies, though some adjustments may be beneficial. The focus is on improving workflow, automation, and collaboration rather than changing programming languages or frameworks. That said, some technologies are more DevOps-friendly than others, and we may recommend specific tools or architectural changes to maximize the benefits. Our approach is pragmatic - we work with your current stack while suggesting incremental improvements where they add the most value.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
