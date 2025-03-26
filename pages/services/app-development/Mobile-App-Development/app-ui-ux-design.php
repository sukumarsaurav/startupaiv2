<?php
define('BASEPATH', true);
require_once '../../../../includes/config.php';

// Initialize the database connection
$database = new Database();
$db = $database->getConnection();

// SEO Data
$pageTitle = "Mobile App UI/UX Design Services | StartupAI";
$pageDescription = "Create engaging and intuitive mobile app experiences with our expert UI/UX design services. We combine aesthetics with functionality to deliver user-centered mobile applications.";
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'mobile app design, ui design, ux design, user interface, user experience, app wireframes, mobile app prototypes, interaction design, visual design'
];

include_once '../../../../components/header.php';
?>

    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="header-grid">
                    <div class="page-header-content" data-aos="fade-right">
                        <h1>Mobile App UI/UX Design</h1>
                        <p class="lead">Create beautiful, intuitive, and engaging mobile experiences that users love.</p>
                        <a href="/pages/contact.php" class="get-started-btn">Start Your Project</a>
                    </div>
                    <div class="page-header-image" data-aos="fade-left">
                        <img src="/assets/images/services/app-design.svg" alt="Mobile App UI/UX Design" class="animate-float">
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Overview -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <div class="service-overview-header" data-aos="fade-up">
                        <h2>Expert Mobile App Design Services</h2>
                        <p class="lead">We create user-centered designs that combine aesthetics with functionality to deliver exceptional mobile experiences.</p>
                    </div>
                </div>
                
                <div class="overview-grid">
                    <div class="service-overview-content" data-aos="fade-up">
                        <h3>User-Centered Design</h3>
                        <p>Our design process focuses on understanding user needs, behaviors, and preferences to create intuitive and engaging mobile experiences.</p>
                    </div>
                    <div class="service-overview-content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Platform-Specific Excellence</h3>
                        <p>We follow platform-specific design guidelines while maintaining brand consistency across iOS and Android applications.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our UI/UX Design Services</h2>
                        <p class="lead">Comprehensive mobile app design solutions tailored to your needs</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <h3>User Interface Design</h3>
                            <p>Create visually appealing and intuitive interfaces that enhance user engagement.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Visual design</li>
                                <li><i class="fas fa-check"></i> Interaction design</li>
                                <li><i class="fas fa-check"></i> Design systems</li>
                                <li><i class="fas fa-check"></i> Brand integration</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>User Experience Design</h3>
                            <p>Design seamless user journeys that maximize engagement and satisfaction.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> User research</li>
                                <li><i class="fas fa-check"></i> Information architecture</li>
                                <li><i class="fas fa-check"></i> User flows</li>
                                <li><i class="fas fa-check"></i> Usability testing</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <h3>Prototyping & Testing</h3>
                            <p>Create interactive prototypes to validate design decisions before development.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Wireframing</li>
                                <li><i class="fas fa-check"></i> Interactive prototypes</li>
                                <li><i class="fas fa-check"></i> User testing</li>
                                <li><i class="fas fa-check"></i> Design iteration</li>
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
                        <h2>Our Design Process</h2>
                        <p class="lead">A systematic approach to creating exceptional mobile app experiences</p>
                    </div>
                </div>
                
                <div class="process-grid">
                    <div class="process-item" data-aos="fade-up">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>1</span>
                            </div>
                            <h3>Research & Discovery</h3>
                            <p>Understand user needs, market trends, and business objectives.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>2</span>
                            </div>
                            <h3>UX Strategy</h3>
                            <p>Define user flows, information architecture, and interaction patterns.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>3</span>
                            </div>
                            <h3>UI Design</h3>
                            <p>Create visually appealing interfaces that align with brand guidelines.</p>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>4</span>
                            </div>
                            <h3>Testing & Refinement</h3>
                            <p>Validate designs through user testing and iterate based on feedback.</p>
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
                        <h2>Design Tools We Use</h2>
                        <p class="lead">Industry-standard tools for mobile app design</p>
                    </div>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-item" data-aos="fade-up">
                        <div class="platform-card">
                            <h3>Design Tools</h3>
                            <ul>
                                <li>Figma</li>
                                <li>Sketch</li>
                                <li>Adobe XD</li>
                                <li>Illustrator</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="platform-card">
                            <h3>Prototyping Tools</h3>
                            <ul>
                                <li>InVision</li>
                                <li>Principle</li>
                                <li>ProtoPie</li>
                                <li>Framer</li>
                                <li>Marvel</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="platform-card">
                            <h3>Collaboration Tools</h3>
                            <ul>
                                <li>Zeplin</li>
                                <li>Abstract</li>
                                <li>Miro</li>
                                <li>Notion</li>
                                <li>Slack</li>
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
                        <h2>Why Choose Our Design Services</h2>
                        <p class="lead">Benefits of professional UI/UX design for your mobile app</p>
                    </div>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Enhanced User Satisfaction</h3>
                            <p>Create engaging experiences that keep users coming back to your app.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Increased Conversion</h3>
                            <p>Design intuitive flows that guide users toward desired actions.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h3>Brand Consistency</h3>
                            <p>Maintain consistent brand identity across all platforms and touchpoints.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Design Your Mobile App?</h2>
                    <p class="lead">Let's create an exceptional user experience for your mobile application.</p>
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
                        <p class="lead">Common questions about mobile app UI/UX design</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>What's the difference between UI and UX design?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>UI (User Interface) design focuses on the visual elements and interactions of your app - how it looks and feels. UX (User Experience) design focuses on the overall experience, including how users navigate, interact, and accomplish their goals within the app. Both aspects work together to create a successful mobile application.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you ensure designs work across different devices?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We follow responsive design principles and create designs that adapt to different screen sizes and orientations. We test designs across various devices and platforms to ensure consistency and usability. Our process includes creating device-specific adjustments while maintaining the core user experience.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you incorporate user feedback in the design process?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We conduct user testing throughout the design process, gathering feedback through prototypes, usability tests, and user interviews. This feedback helps us identify pain points, validate design decisions, and make improvements. We iterate on designs based on user insights to create the best possible experience.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What deliverables can I expect from the design process?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our deliverables typically include user research findings, wireframes, visual designs, interactive prototypes, and design specifications for development. We also provide design systems and style guides to ensure consistency in implementation. All assets are organized and properly prepared for handoff to the development team.</p>
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
