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
<section id="industry-solutions" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-2" data-aos="fade-up">Industry-Specific Solutions</h2>
        <p class="text-center mb-5 lead" data-aos="fade-up">Tailored technology solutions for various industries</p>
        
        <div class="row">
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up">
                <div class="industry-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="industry-icon mb-3">
                        <i class="fas fa-heartbeat fa-3x text-primary"></i>
                    </div>
                    <h4>Healthcare</h4>
                    <p>Patient portals, telemedicine solutions, and HIPAA-compliant systems</p>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Healthcare-Websites.php" class="btn btn-sm btn-outline-primary mt-2">Learn More</a>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="industry-icon mb-3">
                        <i class="fas fa-building fa-3x text-primary"></i>
                    </div>
                    <h4>Real Estate</h4>
                    <p>Property listings, virtual tours, and agent management systems</p>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Real-Estate-Websites.php" class="btn btn-sm btn-outline-primary mt-2">Learn More</a>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="industry-icon mb-3">
                        <i class="fas fa-university fa-3x text-primary"></i>
                    </div>
                    <h4>Finance</h4>
                    <p>Secure banking portals, payment systems, and financial tools</p>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Finance-Websites.php" class="btn btn-sm btn-outline-primary mt-2">Learn More</a>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="industry-icon mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h4>Education</h4>
                    <p>Learning management systems, online courses, and student portals</p>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Education-Websites.php" class="btn btn-sm btn-outline-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section id="statistics" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="fade-up">
                <div class="stat-card p-3">
                    <div class="stat-number display-4 fw-bold">100+</div>
                    <div class="stat-title">Projects Completed</div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card p-3">
                    <div class="stat-number display-4 fw-bold">95%</div>
                    <div class="stat-title">Client Satisfaction</div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card p-3">
                    <div class="stat-number display-4 fw-bold">15+</div>
                    <div class="stat-title">Industries Served</div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card p-3">
                    <div class="stat-number display-4 fw-bold">24/7</div>
                    <div class="stat-title">Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section id="featured-projects" class="py-5">
    <div class="container">
        <h2 class="text-center mb-2" data-aos="fade-up">Featured Projects</h2>
        <p class="text-center mb-5 lead" data-aos="fade-up">Some of our recent work across different industries</p>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="project-card rounded shadow overflow-hidden">
                    <div class="project-image">
                        <img src="assets/images/projects/project-1.jpg" alt="E-commerce Project" class="img-fluid">
                    </div>
                    <div class="project-details p-4">
                        <h4>E-commerce Platform</h4>
                        <p class="text-muted">Shopify Development, Custom Design</p>
                        <p>Custom e-commerce solution with integrated inventory management system.</p>
                        <div class="project-tags mb-3">
                            <span class="badge bg-light text-dark me-1">E-commerce</span>
                            <span class="badge bg-light text-dark me-1">Shopify</span>
                            <span class="badge bg-light text-dark">Responsive</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Case Study</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="project-card rounded shadow overflow-hidden">
                    <div class="project-image">
                        <img src="assets/images/projects/project-2.jpg" alt="Healthcare App" class="img-fluid">
                    </div>
                    <div class="project-details p-4">
                        <h4>Healthcare Patient Portal</h4>
                        <p class="text-muted">Web Application, Mobile App</p>
                        <p>HIPAA-compliant patient portal with telemedicine capabilities.</p>
                        <div class="project-tags mb-3">
                            <span class="badge bg-light text-dark me-1">Healthcare</span>
                            <span class="badge bg-light text-dark me-1">React</span>
                            <span class="badge bg-light text-dark">Mobile App</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Case Study</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="project-card rounded shadow overflow-hidden">
                    <div class="project-image">
                        <img src="assets/images/projects/project-3.jpg" alt="AI Chatbot" class="img-fluid">
                    </div>
                    <div class="project-details p-4">
                        <h4>AI Customer Support System</h4>
                        <p class="text-muted">Conversational AI, NLP</p>
                        <p>Intelligent chatbot system for 24/7 customer support automation.</p>
                        <div class="project-tags mb-3">
                            <span class="badge bg-light text-dark me-1">AI</span>
                            <span class="badge bg-light text-dark me-1">Chatbot</span>
                            <span class="badge bg-light text-dark">NLP</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Case Study</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/pages/portfolio.php" class="btn btn-primary">View All Projects</a>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section id="technologies" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-2" data-aos="fade-up">Technologies We Use</h2>
        <p class="text-center mb-5 lead" data-aos="fade-up">Modern tech stack to build powerful, scalable solutions</p>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="tech-slider py-4">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-react fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">React</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-node-js fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">Node.js</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-python fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">Python</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-aws fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">AWS</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-wordpress fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">WordPress</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-shopify fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">Shopify</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row text-center justify-content-center">
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-angular fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">Angular</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-vuejs fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">Vue.js</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-php fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">PHP</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-laravel fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">Laravel</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-docker fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">Docker</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                            <div class="tech-logo p-3 bg-white rounded shadow-sm">
                                <i class="fab fa-google fa-3x text-primary"></i>
                                <h6 class="mt-2 mb-0">TensorFlow</h6>
                            </div>
                        </div>
                    </div>
                </div>
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
<section class="testimonials-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h2 class="testimonials-title" data-aos="fade-up">What Our Clients Say</h2>
                <p class="lead" data-aos="fade-up">Trusted by businesses around the world</p>
            </div>
        </div>
        
        <div class="testimonials-slider">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="testimonials-header">
                        <div class="navigation-buttons">
                            <button class="nav-button prev-button" aria-label="Previous testimonial">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                            </button>
                            <button class="nav-button next-button" aria-label="Next testimonial">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </button>
                        </div>
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
                        
                        <!-- E-commerce Testimonial -->
                        <div class="testimonial-card">
                            <div class="category">E-commerce Development</div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                The team at StartupAI built our e-commerce website from scratch, and the results have been phenomenal. Sales increased by 150% in the first three months after launch! Their attention to detail on the user journey and checkout process made all the difference.
                            </div>
                            <div class="author-info">
                                <div class="author-name">Michael Rodriguez</div>
                                <div class="author-title">Founder, Urban Threads Clothing</div>
                            </div>
                        </div>
                        
                        <!-- App Development Testimonial -->
                        <div class="testimonial-card">
                            <div class="category">Custom Web Application</div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                StartupAI developed a custom CRM that transformed our business operations. The application streamlined our workflows, eliminated manual processes, and gave us real-time insights into our sales pipeline. Their development team was professional and responsive throughout.
                            </div>
                            <div class="author-info">
                                <div class="author-name">David Chen</div>
                                <div class="author-title">Operations Manager, NexGen Consulting</div>
                            </div>
                        </div>
                        
                        <!-- SEO Testimonial -->
                        <div class="testimonial-card">
                            <div class="category">SEO & Digital Marketing</div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                Excellent work they have done so far for our dental practice. Their SEO strategy helped us rank on the first page for our target keywords within three months. The owner is very responsive and genuinely cares about your business growth. Highly recommend their SEO services!
                            </div>
                            <div class="author-info">
                                <div class="author-name">Tejas Patel</div>
                                <div class="author-title">CEO, Dental Office USA</div>
                            </div>
                        </div>
                        
                        <!-- AI Services Testimonial -->
                        <div class="testimonial-card">
                            <div class="category">AI Chatbot Implementation</div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                The chatbot solution they developed for our customer service team has reduced response times by 80% and improved customer satisfaction ratings significantly. It handles over 70% of routine inquiries automatically, allowing our team to focus on more complex issues.
                            </div>
                            <div class="author-info">
                                <div class="author-name">Sarah Johnson</div>
                                <div class="author-title">VP of Operations, Tech Innovations Inc.</div>
                            </div>
                        </div>
                        
                        <!-- Content Marketing Testimonial -->
                        <div class="testimonial-card">
                            <div class="category">Content Marketing</div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                StartupAI's content strategy transformed our blog into a lead generation machine. Their team developed in-depth industry content that positioned us as thought leaders. Our organic traffic has increased by 215% and we're generating quality leads every day.
                            </div>
                            <div class="author-info">
                                <div class="author-name">Jess Cilenti</div>
                                <div class="author-title">Content Director, Insight Media</div>
                            </div>
                        </div>
                        
                        <!-- Healthcare Industry Testimonial -->
                        <div class="testimonial-card">
                            <div class="category">Healthcare Web Solution</div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                Working with StartupAI on our patient portal was a game-changer. They created a HIPAA-compliant system that's intuitive for both patients and staff. The telemedicine integration was seamless and has become essential to our practice operations.
                            </div>
                            <div class="author-info">
                                <div class="author-name">Dr. Amanda Reynolds</div>
                                <div class="author-title">Medical Director, Cornerstone Health</div>
                            </div>
                        </div>
                        
                        <!-- Mobile App Testimonial -->
                        <div class="testimonial-card">
                            <div class="category">Mobile Application</div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                StartupAI delivered a flawless mobile app that our customers love. The interface is intuitive, the performance is excellent, and the app has become central to our customer experience strategy. Their development and design teams are truly world-class.
                            </div>
                            <div class="author-info">
                                <div class="author-name">Robert Williams</div>
                                <div class="author-title">Product Manager, EasyLife Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SEO Cost Calculator Button -->
    <div class="seo-calculator">
        <div class="seo-calculator-text">SEO Cost Calculator</div>
    </div>
</section>

<?php
// Include footer
include_once 'components/footer.php';
?> 