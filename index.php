<?php
define('BASEPATH', true);
require_once 'includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'StartupAI - Technology Partner for Modern Businesses';
$pageDescription = 'Comprehensive technology solutions including web design, app development, AI services, and digital marketing for startups and enterprises';
$pageKeywords = 'web development, digital marketing, AI solutions, React, Next.js, WordPress, chatbots, business automation, custom software';

// Include header
include_once 'components/header.php';
?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="main-container">
        <div class="hero-content">
            <div class="hero-text" data-aos="fade-right">
                <h1 class="hero-title">Transforming Ideas into Digital Success Stories</h1>
                <p class="hero-subtitle">End-to-end technology solutions for businesses at every stage of growth - from startup MVPs to enterprise digital transformations.</p>
                <div class="inquiry-form">
                    <h3 class="form-title">Get Started Today</h3>
                    
                    <?php if (isset($_SESSION['inquiry_success'])): ?>
                        <div class="alert success-alert">
                            Thank you for your inquiry! We'll get back to you as soon as possible.
                            <button type="button" class="close-btn" data-dismiss="alert">×</button>
                        </div>
                        <?php unset($_SESSION['inquiry_success']); ?>
                    <?php elseif (isset($_SESSION['inquiry_error'])): ?>
                        <div class="alert error-alert">
                            <?php echo $_SESSION['inquiry_error']; ?>
                            <button type="button" class="close-btn" data-dismiss="alert">×</button>
                        </div>
                        <?php unset($_SESSION['inquiry_error']); ?>
                    <?php endif; ?>
                    
                    <form id="inquiryForm" action="process/submit-inquiry.php" method="POST">
                        <div class="form-field">
                            <input type="text" name="name" class="input-control" placeholder="Your Name" required
                                   value="<?php echo isset($_SESSION['form_data']['name']) ? htmlspecialchars($_SESSION['form_data']['name']) : ''; ?>">
                        </div>
                        <div class="form-field">
                            <input type="email" name="email" class="input-control" placeholder="Email Address" required
                                   value="<?php echo isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : ''; ?>">
                        </div>
                        <div class="form-field">
                            <select name="service" class="input-control" required>
                                <option value="" disabled selected>Select Service</option>
                                <option value="web-design" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'web-design') ? 'selected' : ''; ?>>Web Design</option>
                                <option value="app-development" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'app-development') ? 'selected' : ''; ?>>App Development</option>
                                <option value="ai-services" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'ai-services') ? 'selected' : ''; ?>>AI Services</option>
                                <option value="digital-marketing" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'digital-marketing') ? 'selected' : ''; ?>>Digital Marketing</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <textarea name="description" class="input-control" rows="3" placeholder="Project Description" required><?php echo isset($_SESSION['form_data']['description']) ? htmlspecialchars($_SESSION['form_data']['description']) : ''; ?></textarea>
                        </div>
                        <button type="submit" class="primary-button full-width">Submit Inquiry</button>
                    </form>
                    <?php 
                    // Clear form data after displaying
                    if (isset($_SESSION['form_data'])) {
                        unset($_SESSION['form_data']);
                    }
                    ?>
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="assets/images/hero-image.svg" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="features-section">
    <div class="main-container">
        <div class="section-header">
            <h2 class="section-title">Why Choose Us</h2>
            <p class="section-subtitle">Our approach sets us apart</p>
        </div>
        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="feature-title">Startup Focused</h3>
                <p class="feature-text">We help startups transform their ideas into MVPs and secure funding with scalable solutions.</p>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 class="feature-title">AI-Powered Innovation</h3>
                <p class="feature-text">We integrate cutting-edge AI capabilities into all our services to deliver smarter solutions.</p>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="feature-title">Technical Excellence</h3>
                <p class="feature-text">Our team brings deep expertise across multiple technologies and platforms.</p>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="feature-title">Results-Driven</h3>
                <p class="feature-text">We focus on measurable outcomes that directly impact your business growth.</p>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="feature-title">Collaborative Approach</h3>
                <p class="feature-text">We work as an extension of your team, ensuring alignment with your vision.</p>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="feature-title">Rapid Delivery</h3>
                <p class="feature-text">Our agile methodology enables fast iteration and quicker time-to-market.</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Services Section -->
<section class="services-section">
    <div class="main-container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive technology solutions for modern businesses</p>
        </div>
        
        <!-- Service Tabs -->
        <div class="services-tabs">
            <button class="service-tab active" data-target="web-design">Web Design</button>
            <button class="service-tab" data-target="app-development">App Development</button>
            <button class="service-tab" data-target="ai-services">AI Services</button>
            <button class="service-tab" data-target="digital-marketing">Digital Marketing</button>
        </div>
        
        <!-- Service Contents -->
        <div class="service-content active" id="web-design">
            <div class="service-info">
                <h3 class="service-title">Web Design & Development</h3>
                <p class="service-description">From stunning landing pages to complex web applications, we create responsive, user-friendly websites that drive growth. Our web design team combines aesthetics with functionality for results that impress.</p>
                
                <div class="service-features">
                    <div class="service-feature">
                        <h4 class="feature-subtitle">UI/UX Design</h4>
                        <p>User-friendly interfaces with intuitive experiences</p>
                    </div>
                    
                    <div class="service-feature">
                        <h4 class="feature-subtitle">Responsive Design</h4>
                        <p>Mobile-first approach for all screen sizes</p>
                    </div>
                    
                    <div class="service-feature">
                        <h4 class="feature-subtitle">CMS Development</h4>
                        <p>WordPress, Webflow, and custom CMS solutions</p>
                    </div>
                    
                    <div class="service-feature">
                        <h4 class="feature-subtitle">E-commerce</h4>
                        <p>Shopify, WooCommerce, and custom stores</p>
                    </div>
                </div>
                
                <a href="/pages/services/web-design.php" class="primary-button">Learn More</a>
            </div>
            <div class="service-image">
                <img src="assets/images/web-design-service.jpg" alt="Web Design Services">
            </div>
        </div>
        
        <!-- Similar blocks for other services... -->
    </div>
</section>

<!-- Industry Solutions Section -->
<section class="industry-section">
    <div class="main-container">
        <div class="section-header">
            <h2 class="section-title" data-aos="fade-up">Industry-Specific Solutions</h2>
            <p class="section-subtitle" data-aos="fade-up">Tailored technology solutions for various industries</p>
        </div>
        
        <div class="industry-grid">
            <div class="industry-card" data-aos="fade-up">
                <div class="industry-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h4 class="industry-title">Healthcare</h4>
                <p class="industry-text">Patient portals, telemedicine solutions, and HIPAA-compliant systems</p>
                <a href="/pages/services/web-design/Industry-Specific-Website-Design/Healthcare-Websites.php" class="secondary-button">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h4 class="industry-title">Real Estate</h4>
                <p class="industry-text">Property listings, virtual tours, and agent management systems</p>
                <a href="/pages/services/web-design/Industry-Specific-Website-Design/Real-Estate-Websites.php" class="secondary-button">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-icon">
                    <i class="fas fa-university"></i>
                </div>
                <h4 class="industry-title">Finance</h4>
                <p class="industry-text">Secure banking portals, payment systems, and financial tools</p>
                <a href="/pages/services/web-design/Industry-Specific-Website-Design/Finance-Websites.php" class="secondary-button">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4 class="industry-title">Education</h4>
                <p class="industry-text">Learning management systems, online courses, and student portals</p>
                <a href="/pages/services/web-design/Industry-Specific-Website-Design/Education-Websites.php" class="secondary-button">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="stats-section">
    <div class="main-container">
        <div class="stats-grid">
            <div class="stat-card" data-aos="fade-up">
                <div class="stat-number">100+</div>
                <div class="stat-title">Projects Completed</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-number">45+</div>
                <div class="stat-title">Team Members</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-number">90%</div>
                <div class="stat-title">Client Retention</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-number">5+</div>
                <div class="stat-title">Years of Excellence</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="projects-section">
    <div class="main-container">
        <div class="section-header">
            <h2 class="section-title" data-aos="fade-up">Featured Projects</h2>
            <p class="section-subtitle" data-aos="fade-up">Some of our recent work across different industries</p>
        </div>
        
        <div class="projects-grid">
            <div class="project-card" data-aos="fade-up">
                <div class="project-image">
                    <img src="assets/images/projects/project-1.jpg" alt="E-commerce Project">
                </div>
                <div class="project-details">
                    <h4 class="project-title">E-commerce Platform</h4>
                    <p class="project-category">Shopify Development, Custom Design</p>
                    <p class="project-description">Custom e-commerce solution with integrated inventory management system.</p>
                    <div class="project-tags">
                        <span class="tag">E-commerce</span>
                        <span class="tag">Shopify</span>
                        <span class="tag">Responsive</span>
                    </div>
                    <a href="#" class="secondary-button">View Case Study</a>
                </div>
            </div>
            
            <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                <div class="project-image">
                    <img src="assets/images/projects/project-2.jpg" alt="Healthcare App">
                </div>
                <div class="project-details">
                    <h4 class="project-title">Healthcare Patient Portal</h4>
                    <p class="project-category">Web Application, Mobile App</p>
                    <p class="project-description">HIPAA-compliant patient portal with telemedicine capabilities.</p>
                    <div class="project-tags">
                        <span class="tag">Healthcare</span>
                        <span class="tag">React</span>
                        <span class="tag">Mobile App</span>
                    </div>
                    <a href="#" class="secondary-button">View Case Study</a>
                </div>
            </div>
            
            <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                <div class="project-image">
                    <img src="assets/images/projects/project-3.jpg" alt="AI Chatbot">
                </div>
                <div class="project-details">
                    <h4 class="project-title">AI Customer Support System</h4>
                    <p class="project-category">Conversational AI, NLP</p>
                    <p class="project-description">Intelligent chatbot system for 24/7 customer support automation.</p>
                    <div class="project-tags">
                        <span class="tag">AI</span>
                        <span class="tag">Chatbot</span>
                        <span class="tag">NLP</span>
                    </div>
                    <a href="#" class="secondary-button">View Case Study</a>
                </div>
            </div>
        </div>
        
        <div class="section-footer">
            <a href="/pages/portfolio.php" class="primary-button">View All Projects</a>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="tech-section">
    <div class="main-container">
        <div class="section-header">
            <h2 class="section-title" data-aos="fade-up">Technologies We Use</h2>
            <p class="section-subtitle" data-aos="fade-up">Modern tech stack to build powerful, scalable solutions</p>
        </div>
        
        <div class="tech-container">
            <div class="tech-grid">
                <div class="tech-item" data-aos="fade-up">
                    <div class="tech-logo">
                        <i class="fab fa-react"></i>
                        <h6 class="tech-name">React</h6>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tech-logo">
                        <i class="fab fa-node-js"></i>
                        <h6 class="tech-name">Node.js</h6>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="tech-logo">
                        <i class="fab fa-python"></i>
                        <h6 class="tech-name">Python</h6>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="tech-logo">
                        <i class="fab fa-aws"></i>
                        <h6 class="tech-name">AWS</h6>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="tech-logo">
                        <i class="fab fa-wordpress"></i>
                        <h6 class="tech-name">WordPress</h6>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="tech-logo">
                        <i class="fab fa-shopify"></i>
                        <h6 class="tech-name">Shopify</h6>
                    </div>
                </div>
            </div>
            
            <div class="tech-grid second-row">
                <div class="tech-item" data-aos="fade-up">
                    <div class="tech-logo">
                        <i class="fab fa-angular"></i>
                        <h6 class="tech-name">Angular</h6>
                    </div>
                </div>
                
                <!-- Add more tech-item divs as needed -->
            </div>
        </div>
    </div>
</section>

<!-- Client CTA Section -->
<section class="client-cta py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-3">Ready to Transform Your Business?</h2>
                <p class="lead mb-0">Let's discuss how our technology solutions can help you achieve your business goals.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/pages/contact.php" class="btn btn-light btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="main-container">
        <div class="section-header">
            <h2 class="section-title" data-aos="fade-up">Client Testimonials</h2>
            <p class="section-subtitle" data-aos="fade-up">What our clients say about working with us</p>
        </div>
        
        <div class="testimonials-carousel">
            <div class="testimonials-navigation">
                <button class="nav-button prev-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button class="nav-button next-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>
            
            <div class="testimonials-track">
                <!-- Web Design Testimonial -->
                <div class="testimonial-card">
                    <div class="category">Web Design</div>
                    <div class="quote-mark">&ldquo;&ldquo;</div>
                    <div class="testimonial-text">
                        Our website redesign exceeded all expectations. The StartupAI team delivered a beautiful, responsive design that perfectly captures our brand identity. The user experience is outstanding and we've seen a 45% increase in conversions since launch.
                    </div>
                    <div class="author-info">
                        <div class="author-name">Jennifer Wilson</div>
                        <div class="author-title">Marketing Director, GreenTech Solutions</div>
                    </div>
                </div>
                
                <!-- Add more testimonial cards -->
            </div>
        </div>
    </div>
 
</section>

<?php
// Include footer
include_once 'components/footer.php';
?> 