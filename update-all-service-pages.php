<?php
// This script would update all service pages to replace dynamic "Why Hire Us" with hardcoded sections

// Define the directory to scan (recursively)
$servicesDirectory = 'pages/services';

// Get all PHP files in the services directory and subdirectories
$phpFiles = glob($servicesDirectory . '/**/*.php');

foreach ($phpFiles as $file) {
    $content = file_get_contents($file);
    
    // Check if the file uses the dynamic Why Hire Us content
    if (strpos($content, 'require_once') !== false && 
        (strpos($content, 'why-hire-us.php') !== false || 
         strpos($content, 'why-hire-us-section.php') !== false)) {
        
        // Remove the why-hire-us related require statements
        $content = preg_replace('/require_once \'.*?why-hire-us\.php\';(\r\n|\n)/', '', $content);
        $content = preg_replace('/require_once \'.*?why-hire-us-section\.php\';(\r\n|\n)/', '', $content);
        
        // Remove the dynamic content retrieval
        $content = preg_replace('/\/\/ Get Why Hire Us content(\r\n|\n)/', '', $content);
        $content = preg_replace('/\$why_hire_us = getWhyHireUsContent\(.*?\);(\r\n|\n)/', '', $content);
        
        // Find the location of the renderWhyHireUs function call
        $renderPos = strpos($content, 'renderWhyHireUs');
        if ($renderPos !== false) {
            // Find the end of this line/statement
            $endPos = strpos($content, ';', $renderPos) + 1;
            $lineStart = strrpos(substr($content, 0, $renderPos), '<!-- Why Choose Us');
            if ($lineStart === false) {
                $lineStart = strrpos(substr($content, 0, $renderPos), '<!--');
            }
            
            // Extract service name from the file
            preg_match('/\$serviceName = "(.*?)";/', $content, $matches);
            $serviceName = $matches[1] ?? 'Our Service';
            
            // Replace with hardcoded section
            $hardcodedSection = '<!-- Why Choose Us - Hardcoded Section -->
<section class="why-choose-us py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
                <h2>Why Choose Us for <?php echo $serviceName; ?></h2>
                <p class="lead">Our expertise and approach set us apart in delivering exceptional solutions</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-brain fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5">Specialized Expertise</h3>
                    <p>Our team combines deep domain knowledge with technical excellence to create solutions that truly address your business challenges.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5">Results-Driven Approach</h3>
                    <p>We focus on measurable outcomes and tangible business impact, ensuring every solution delivers real value to your organization.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5">Cutting-Edge Technology</h3>
                    <p>We leverage the latest advancements in artificial intelligence and machine learning to give your business a competitive advantage.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5">Collaborative Process</h3>
                    <p>We work as an extension of your team, ensuring transparent communication and alignment throughout the project lifecycle.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5">Enterprise-Grade Security</h3>
                    <p>We implement robust security measures and best practices to protect your sensitive data and ensure compliance with regulations.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-3x text-primary"></i>
                    </div>
                    <h3 class="h5">Scalable Solutions</h3>
                    <p>Our solutions are designed to grow with your business, adapting to changing requirements and increasing demands without disruption.</p>
                </div>
            </div>
        </div>
    </div>
</section>';
            
            if ($lineStart !== false) {
                // Replace from the comment line to the end of renderWhyHireUs line
                $content = substr($content, 0, $lineStart) . $hardcodedSection . substr($content, $endPos);
            } else {
                // Just replace the renderWhyHireUs function call
                $content = str_replace(substr($content, $renderPos, $endPos - $renderPos), $hardcodedSection, $content);
            }
        }
        
        // Save the modified content back to the file
        file_put_contents($file, $content);
        echo "Updated: " . $file . "\n";
    }
}

echo "All service files have been updated with hardcoded 'Why Choose Us' sections.";
?> 