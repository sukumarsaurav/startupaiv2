<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';

// Page-specific styles and scripts
$additionalCss = [
    '/assets/css/page-specific-style.css'
];

$additionalJs = [
    '/assets/js/page-specific-script.js'
];

// Page specific content
$pageTitle = "Service Name";
$pageDescription = "Description of the service";
$serviceName = "Service Name";
$serviceSlug = "service-slug";

require_once '../../../components/header.php';
?>

<!-- Page content here -->

<!-- Service Overview -->
<section class="service-overview">
    <div class="main-container">
        <div class="section-header">
            <h2 class="section-title">Transform Your Business with <?php echo $serviceName; ?></h2>
            <p class="section-subtitle">Leverage advanced technologies to create experiences that enhance satisfaction, streamline operations, and drive growth.</p>
        </div>
        
        <div class="service-content">
            <div class="service-column" data-aos="fade-up">
                <h3 class="content-title">Beyond Generic Solutions</h3>
                <p class="content-text">Generic, template-based solutions often fall short in delivering meaningful interactions, leading to user frustration and limited business value.</p>
            </div>
            <div class="service-column" data-aos="fade-up" data-aos-delay="100">
                <h3 class="content-title">The Custom Advantage</h3>
                <p class="content-text">Our custom development services leverage cutting-edge frameworks to create intelligent solutions that understand your specific business context.</p>
            </div>
        </div>
    </div>
</section>

<?php
include_once '../../../components/footer.php';
?> 