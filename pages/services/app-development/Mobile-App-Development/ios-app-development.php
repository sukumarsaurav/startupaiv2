<?php
define('BASEPATH', true);
require_once '../../../../includes/config.php';

// Initialize the database connection
$database = new Database();
$db = $database->getConnection();

// SEO Data
$pageTitle = "iOS App Development Services | StartupAI";
$pageDescription = "Create powerful, innovative iOS applications with our expert development services. We specialize in building high-quality, user-centric apps for iPhone, iPad, and other Apple devices.";
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'ios app development, iphone app development, ipad app development, swift development, objective-c, ios apps, apple development, custom ios apps'
];

include_once '../../../../components/header.php';
?>

    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="header-grid">
                    <div class="page-header-content" data-aos="fade-right">
                        <h1>iOS App Development</h1>
                        <p class="lead">Build exceptional iOS applications that deliver outstanding user experiences and drive business success.</p>
                        <a href="/pages/contact.php" class="get-started-btn">Start Your Project</a>
                    </div>
                    <div class="page-header-image" data-aos="fade-left">
                        <img src="/assets/images/services/ios-development.svg" alt="iOS App Development" class="animate-float">
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Overview -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <div class="service-overview-header" data-aos="fade-up">
                        <h2>Expert iOS Development Services</h2>
                        <p class="lead">We create sophisticated iOS applications that leverage the latest Apple technologies and design principles.</p>
                    </div>
                </div>
                
                <div class="overview-grid">
                    <div class="service-overview-content" data-aos="fade-up">
                        <h3>Native iOS Excellence</h3>
                        <p>Our team excels in native iOS development using Swift and SwiftUI, ensuring optimal performance and seamless integration with Apple's ecosystem.</p>
                    </div>
                    <div class="service-overview-content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Modern Architecture</h3>
                        <p>We implement clean architecture principles and modern iOS patterns like MVVM, Combine, and SwiftUI for maintainable and scalable applications.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our iOS Development Services</h2>
                        <p class="lead">Comprehensive iOS development solutions tailored to your business needs</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <h3>Custom iOS Apps</h3>
                            <p>Build tailor-made iOS applications that perfectly align with your business objectives and user requirements.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Native iOS development</li>
                                <li><i class="fas fa-check"></i> Custom UI/UX design</li>
                                <li><i class="fas fa-check"></i> Performance optimization</li>
                                <li><i class="fas fa-check"></i> Apple guidelines compliance</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3>Enterprise Solutions</h3>
                            <p>Develop secure and scalable enterprise iOS applications with advanced features and integrations.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> MDM integration</li>
                                <li><i class="fas fa-check"></i> Enterprise distribution</li>
                                <li><i class="fas fa-check"></i> Security compliance</li>
                                <li><i class="fas fa-check"></i> Cloud connectivity</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <h3>App Modernization</h3>
                            <p>Update and modernize existing iOS applications with the latest technologies and best practices.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Swift migration</li>
                                <li><i class="fas fa-check"></i> SwiftUI implementation</li>
                                <li><i class="fas fa-check"></i> Performance tuning</li>
                                <li><i class="fas fa-check"></i> Feature enhancement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Implementation Process -->
        <section class="implementation-process">
            <div class="container">
                <div class="section-header">
                    <div class="implementation-header" data-aos="fade-up">
                        <h2>Our Development Process</h2>
                        <p class="lead">A systematic approach to delivering high-quality iOS applications</p>
                    </div>
                </div>
                
                <div class="process-grid">
                    <div class="process-item" data-aos="fade-up">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>1</span>
                            </div>
                            <h3>Discovery & Planning</h3>
                            <p>Understand your requirements, define features, and create a detailed development roadmap.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>2</span>
                            </div>
                            <h3>Design & Architecture</h3>
                            <p>Create intuitive UI/UX designs following Apple's Human Interface Guidelines.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>3</span>
                            </div>
                            <h3>Development & Testing</h3>
                            <p>Implement features with clean code practices and conduct thorough testing.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>4</span>
                            </div>
                            <h3>Deployment & Support</h3>
                            <p>Submit to App Store and provide ongoing maintenance and updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="platforms-section">
            <div class="container">
                <div class="section-header">
                    <div class="platforms-header" data-aos="fade-up">
                        <h2>Technologies We Use</h2>
                        <p class="lead">Latest tools and technologies for iOS development</p>
                    </div>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-item" data-aos="fade-up">
                        <div class="platform-card">
                            <h3>Programming Languages</h3>
                            <ul>
                                <li>Swift</li>
                                <li>SwiftUI</li>
                                <li>Objective-C</li>
                                <li>C++</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="platform-card">
                            <h3>Development Tools</h3>
                            <ul>
                                <li>Xcode</li>
                                <li>iOS SDK</li>
                                <li>TestFlight</li>
                                <li>Instruments</li>
                                <li>Git</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="platform-card">
                            <h3>Frameworks & Libraries</h3>
                            <ul>
                                <li>UIKit</li>
                                <li>SwiftUI</li>
                                <li>Core Data</li>
                                <li>Combine</li>
                                <li>ARKit/CoreML</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="container">
                <div class="section-header">
                    <div class="benefits-header" data-aos="fade-up">
                        <h2>Why Choose Us for iOS Development</h2>
                        <p class="lead">Partner with us for exceptional iOS development services</p>
                    </div>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <h3>Technical Excellence</h3>
                            <p>Expert developers with deep knowledge of iOS development and Apple's ecosystem.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3>Fast Time-to-Market</h3>
                            <p>Efficient development process to launch your app quickly without compromising quality.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>App Store Expertise</h3>
                            <p>Deep understanding of App Store guidelines and submission process for smooth approval.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Build Your iOS App?</h2>
                    <p class="lead">Let's discuss how we can help you create a successful iOS application.</p>
                    <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <div class="section-header">
                    <div class="faq-header">
                        <h2>Frequently Asked Questions</h2>
                        <p class="lead">Common questions about iOS app development</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How long does it take to develop an iOS app?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The development timeline varies depending on the complexity of your app, features required, and scope of the project. A simple app might take 2-3 months, while complex enterprise applications can take 6 months or more. We'll provide a detailed timeline during our initial consultation based on your specific requirements.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What's the App Store submission process like?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The App Store submission process involves preparing your app according to Apple's guidelines, creating necessary assets and documentation, submitting for review, and addressing any feedback from Apple's review team. Our experience with the process helps ensure smooth approval and minimal revision cycles.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you ensure app security?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We implement comprehensive security measures including data encryption, secure authentication, protection against common vulnerabilities, and compliance with Apple's security requirements. We also follow iOS security best practices and regularly update security measures throughout development.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you provide post-launch support and maintenance?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer comprehensive post-launch support including bug fixes, performance optimization, feature updates, and adaptation to new iOS versions and devices. We also provide monitoring and analytics to track app performance and user behavior, helping you make data-driven improvements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
include_once '../../../../components/footer.php';
?>

    <!-- JavaScript libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/services.js"></script>
</body>
</html>
