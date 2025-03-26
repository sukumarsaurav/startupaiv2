<?php
define('BASEPATH', true);
require_once '../../../../includes/config.php';

// Initialize the database connection
$database = new Database();
$db = $database->getConnection();

// SEO Data
$pageTitle = "Cross-Platform App Development Services | StartupAI";
$pageDescription = "Build efficient and cost-effective mobile applications that work seamlessly across multiple platforms. Our cross-platform development services help you reach wider audiences with a single codebase.";
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'cross-platform development, react native, flutter, ionic, mobile app development, hybrid apps, multi-platform apps, cross-platform frameworks'
];

include_once '../../../../components/header.php';
?>

    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="header-grid">
                    <div class="page-header-content" data-aos="fade-right">
                        <h1>Cross-Platform App Development</h1>
                        <p class="lead">Create powerful applications that work seamlessly across iOS, Android, and other platforms with a single codebase.</p>
                        <a href="/pages/contact.php" class="get-started-btn">Start Your Project</a>
                    </div>
                    <div class="page-header-image" data-aos="fade-left">
                        <img src="/assets/images/services/cross-platform-development.svg" alt="Cross-Platform App Development" class="animate-float">
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Overview -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <div class="service-overview-header" data-aos="fade-up">
                        <h2>Expert Cross-Platform Development Services</h2>
                        <p class="lead">We leverage modern cross-platform frameworks to build high-performance applications that provide native-like experiences across all platforms.</p>
                    </div>
                </div>
                
                <div class="overview-grid">
                    <div class="service-overview-content" data-aos="fade-up">
                        <h3>Code Once, Run Everywhere</h3>
                        <p>Our cross-platform approach allows you to maintain a single codebase while delivering consistent experiences across iOS, Android, and web platforms.</p>
                    </div>
                    <div class="service-overview-content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Cost-Effective Solutions</h3>
                        <p>Reduce development time and costs while maintaining high quality and performance with our efficient cross-platform development approach.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Cross-Platform Development Services</h2>
                        <p class="lead">Comprehensive cross-platform solutions tailored to your business needs</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>React Native Development</h3>
                            <p>Build native-like applications using React Native for optimal performance and user experience.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Native UI components</li>
                                <li><i class="fas fa-check"></i> Hot reloading</li>
                                <li><i class="fas fa-check"></i> Native APIs access</li>
                                <li><i class="fas fa-check"></i> Custom modules</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3>Flutter Development</h3>
                            <p>Create beautiful, natively compiled applications using Flutter's rich widget library.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Material Design</li>
                                <li><i class="fas fa-check"></i> Custom animations</li>
                                <li><i class="fas fa-check"></i> Platform-specific styling</li>
                                <li><i class="fas fa-check"></i> High performance</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <h3>Progressive Web Apps</h3>
                            <p>Develop web applications that provide app-like experiences across all platforms.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Offline functionality</li>
                                <li><i class="fas fa-check"></i> Push notifications</li>
                                <li><i class="fas fa-check"></i> App-like interface</li>
                                <li><i class="fas fa-check"></i> Fast loading</li>
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
                        <p class="lead">A systematic approach to delivering high-quality cross-platform applications</p>
                    </div>
                </div>
                
                <div class="process-grid">
                    <div class="process-item" data-aos="fade-up">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>1</span>
                            </div>
                            <h3>Requirements Analysis</h3>
                            <p>Understand your needs and choose the most suitable cross-platform framework.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>2</span>
                            </div>
                            <h3>UI/UX Design</h3>
                            <p>Create platform-specific designs while maintaining consistency across devices.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>3</span>
                            </div>
                            <h3>Development & Testing</h3>
                            <p>Build and test your app across multiple platforms and devices.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>4</span>
                            </div>
                            <h3>Deployment & Support</h3>
                            <p>Launch your app on all target platforms and provide ongoing maintenance.</p>
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
                        <p class="lead">Latest cross-platform frameworks and tools</p>
                    </div>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-item" data-aos="fade-up">
                        <div class="platform-card">
                            <h3>Frameworks</h3>
                            <ul>
                                <li>React Native</li>
                                <li>Flutter</li>
                                <li>Ionic</li>
                                <li>Xamarin</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="platform-card">
                            <h3>Development Tools</h3>
                            <ul>
                                <li>VS Code</li>
                                <li>Android Studio</li>
                                <li>Xcode</li>
                                <li>Git</li>
                                <li>Firebase</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="platform-card">
                            <h3>Testing Tools</h3>
                            <ul>
                                <li>Jest</li>
                                <li>Detox</li>
                                <li>Flutter Test</li>
                                <li>Appium</li>
                                <li>TestFlight</li>
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
                        <h2>Why Choose Cross-Platform Development</h2>
                        <p class="lead">Advantages of cross-platform app development</p>
                    </div>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h3>Cost-Effective</h3>
                            <p>Reduce development costs with a single codebase for multiple platforms.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3>Faster Time-to-Market</h3>
                            <p>Launch your app on multiple platforms simultaneously with shorter development cycles.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <h3>Easy Maintenance</h3>
                            <p>Maintain and update your app across all platforms from a single codebase.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Build Your Cross-Platform App?</h2>
                    <p class="lead">Let's discuss how we can help you reach users across all platforms efficiently.</p>
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
                        <p class="lead">Common questions about cross-platform app development</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>What's the difference between native and cross-platform development?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Native development involves building separate apps for each platform using platform-specific languages and tools, while cross-platform development uses a single codebase to create apps that work on multiple platforms. Cross-platform development is generally more cost-effective and faster to market, though it may have some performance trade-offs compared to native apps.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Which cross-platform framework should I choose?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The choice of framework depends on your specific needs. React Native is great for apps requiring native functionality and has a large community. Flutter offers excellent performance and beautiful UIs. We'll help you choose the best framework based on your requirements, budget, and timeline.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you ensure consistent performance across platforms?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We implement platform-specific optimizations, use efficient coding practices, and thoroughly test on multiple devices. Our development process includes performance monitoring, optimization techniques, and platform-specific adjustments to ensure smooth operation across all target platforms.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you provide post-launch support for all platforms?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we provide comprehensive post-launch support including bug fixes, performance optimization, and updates across all platforms. Our team monitors app performance, user feedback, and platform updates to ensure your app continues to work smoothly on all devices.</p>
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
