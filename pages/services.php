<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Our Services - NeoWebX';
$pageDescription = 'Explore our comprehensive range of services including web development, app development, AI solutions, and digital marketing';
$pageKeywords = 'web development, app development, AI solutions, digital marketing, web design, SEO';

// Include header
include_once '../components/header.php';
?>

<!-- Page Header -->
<header class="page-header section-primary text-white">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content text-center">
                <h1 class="page-title">Our Services</h1>
                <p class="page-description">We provide a comprehensive range of technology solutions tailored to your business needs</p>
            </div>
        </div>
    </div>
</header>

<!-- Services Overview -->
<section class="section-spacing">
    <div class="content-container">
        <div class="section-header text-center">
            <h2 class="section-heading">Comprehensive Solutions for Modern Businesses</h2>
            <p class="section-subheading">We combine cutting-edge technology with strategic thinking to deliver solutions that drive growth and innovation for your business.</p>
        </div>

        <!-- Service Categories -->
        <div class="services-grid">
            <!-- Web Design -->
            <div class="service-category-item">
                <div class="service-category-card">
                    <div class="service-category-icon">
                        <i class="fas fa-desktop icon-large icon-primary"></i>
                    </div>
                    <h3>Web Design</h3>
                    <p>Beautiful, responsive websites that convert visitors into customers.</p>
                    <div class="service-links">
                        <a href="/pages/services/web-design/ui-ux-design.php" class="service-link">UI/UX Design</a>
                        <a href="/pages/services/web-design/figma-design.php" class="service-link">Figma Design</a>
                        <a href="/pages/services/web-design/xd-design.php" class="service-link">XD Design</a>
                    </div>
                </div>
            </div>

            <!-- App Development -->
            <div class="service-category-item">
                <div class="service-category-card">
                    <div class="service-category-icon">
                        <i class="fas fa-mobile-alt icon-large icon-primary"></i>
                    </div>
                    <h3>App Development</h3>
                    <p>Custom web applications and content management systems.</p>
                    <div class="service-links">
                        <a href="/pages/services/app-development/wordpress.php" class="service-link">WordPress</a>
                        <a href="/pages/services/app-development/woocommerce.php" class="service-link">WooCommerce</a>
                    </div>
                </div>
            </div>

            <!-- AI Services -->
            <div class="service-category-item">
                <div class="service-category-card">
                    <div class="service-category-icon">
                        <i class="fas fa-robot icon-large icon-primary"></i>
                    </div>
                    <h3>AI Solutions</h3>
                    <p>Cutting-edge artificial intelligence solutions to automate and enhance your business.</p>
                    <div class="service-links">
                        <a href="/pages/services/ai-services/chatbots-virtual-assistants.php" class="service-link">AI Chatbots</a>
                        <a href="/pages/services/ai-services/machine-learning-solutions.php" class="service-link">Machine Learning</a>
                        <a href="/pages/services/ai-services/computer-vision.php" class="service-link">Computer Vision</a>
                        <a href="/pages/services/ai-services/model-training.php" class="service-link">AI Model Training</a>
                    </div>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="service-category-item">
                <div class="service-category-card">
                    <div class="service-category-icon">
                        <i class="fas fa-chart-line icon-large icon-primary"></i>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>Strategic digital marketing to increase your visibility and drive conversions.</p>
                    <div class="service-links">
                        <a href="/pages/services/digital-marketing/seo.php" class="service-link">SEO</a>
                        <a href="/pages/services/digital-marketing/google-ads.php" class="service-link">Google Ads</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section-spacing section-light">
    <div class="content-container">
        <div class="cta-grid">
            <div class="cta-content text-center">
                <h2 class="cta-title">Ready to Transform Your Business?</h2>
                <p class="cta-description">Contact us today for a free consultation and let us help you achieve your business goals.</p>
                <a href="/pages/contact.php" class="btn-primary btn-large">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../components/footer.php';
?> 