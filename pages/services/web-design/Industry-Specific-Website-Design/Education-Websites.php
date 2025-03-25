<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Use the main config.php instead of config/database.php
require_once '../../../../includes/config.php';

// Initialize the database connection
$database = new Database();
$db = $database->getConnection();

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="content-container">
        <div class="content-row">
            <div class="content-col full-width text-align-center">
                <h1 class="font-weight-bold" data-aos="fade-up">Education & eLearning Website Design</h1>
                <p class="subtitle" data-aos="fade-up" data-aos-delay="100">
                    Engaging, accessible websites for schools, universities, and online learning platforms
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Service Overview -->
<section class="service-overview padding-y-5">
    <div class="content-container">
        <div class="content-row align-items-center">
            <div class="content-col half margin-bottom-responsive" data-aos="fade-right">
                <img src="/assets/images/services/education-websites.svg" alt="Education Website Design" class="img-fluid rounded box-shadow">
            </div>
            <div class="content-col half" data-aos="fade-left">
                <h2 class="margin-bottom-4">Education & eLearning Website Design Services</h2>
                <p>
                    Our specialized education website design services help schools, universities, online course providers, and eLearning platforms create dynamic digital environments that enhance the learning experience. We develop user-friendly, accessible websites that effectively communicate educational offerings, facilitate student engagement, and streamline administrative processes for both traditional institutions and innovative online learning programs.
                </p>
                <div class="features margin-top-4">
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-graduation-cap color-primary"></i>
                        </div>
                        <div>
                            <h5>Student-Centered Design</h5>
                            <p>Intuitive interfaces designed for learners of all ages and technical abilities.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-universal-access color-primary"></i>
                        </div>
                        <div>
                            <h5>Accessibility Compliance</h5>
                            <p>ADA/WCAG compliant websites ensuring equal access for all students and staff.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-chalkboard-teacher color-primary"></i>
                        </div>
                        <div>
                            <h5>Learning Management</h5>
                            <p>Integration with popular LMS platforms and educational tools for seamless learning.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-mobile-alt color-primary"></i>
                        </div>
                        <div>
                            <h5>Multi-Device Access</h5>
                            <p>Responsive design ensuring students can access content on any device.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section - Hard-coded version -->
<section class="education-why-hire-us padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Why Choose Us for Education Website Design</h2>
                <p class="section-description">
                    Our expertise makes us the ideal partner for your educational website
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-graduation-cap fa-2x color-primary"></i>
                    </div>
                    <h4>Education Sector Experience</h4>
                    <p>Our team has extensive experience working with educational institutions from K-12 schools to universities and online learning platforms.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-universal-access fa-2x color-primary"></i>
                    </div>
                    <h4>Accessibility Expertise</h4>
                    <p>We specialize in creating ADA-compliant websites that provide equal access to educational content for all users, including those with disabilities.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-puzzle-piece fa-2x color-primary"></i>
                    </div>
                    <h4>LMS Integration Skills</h4>
                    <p>We have technical expertise integrating with popular learning management systems like Canvas, Blackboard, Moodle, and Google Classroom.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-users fa-2x color-primary"></i>
                    </div>
                    <h4>Multi-Stakeholder Approach</h4>
                    <p>We balance the needs of students, parents, faculty, and administrators to create websites that serve all educational community members.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-mobile-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Mobile Learning Focus</h4>
                    <p>We prioritize responsive design ensuring students can access educational resources seamlessly across all devices.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-lock fa-2x color-primary"></i>
                    </div>
                    <h4>Student Data Security</h4>
                    <p>We implement robust security measures to protect sensitive student information and ensure compliance with education privacy regulations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="process-section padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Our Education Website Design Process</h2>
                <p class="section-description">
                    A comprehensive approach to creating effective educational websites
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-users fa-3x color-primary"></i>
                    </div>
                    <h4>Stakeholder Analysis</h4>
                    <p>We identify the needs of students, parents, faculty, and administrators to create a balanced solution.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-sitemap fa-3x color-primary"></i>
                    </div>
                    <h4>Information Architecture</h4>
                    <p>We organize educational content and resources in a logical, easy-to-navigate structure.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-laptop-code fa-3x color-primary"></i>
                    </div>
                    <h4>Accessible Development</h4>
                    <p>We build your site with inclusive design principles and accessibility compliance in mind.</p>
                </div>
            </div>
            <div class="content-col one-fourth" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-sync-alt fa-3x color-primary"></i>
                    </div>
                    <h4>Integration & Training</h4>
                    <p>We connect learning tools and provide training for staff to manage the educational platform.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website Types -->
<section class="website-types-section padding-y-5">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Education Website Types</h2>
                <p class="section-description">
                    Tailored solutions for different educational institutions and platforms
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-school fa-2x color-primary"></i>
                    </div>
                    <h4>K-12 School Websites</h4>
                    <p>Comprehensive websites for primary and secondary schools featuring calendar integration, parent portals, faculty directories, and classroom resources accessible to students and families.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-university fa-2x color-primary"></i>
                    </div>
                    <h4>University & College Sites</h4>
                    <p>Sophisticated multi-departmental websites with program information, application systems, campus life features, alumni connections, and research showcases for higher education institutions.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-laptop fa-2x color-primary"></i>
                    </div>
                    <h4>Online Course Platforms</h4>
                    <p>Dynamic eLearning websites with course catalogs, content delivery systems, progress tracking, and interactive learning components for online education providers.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-book-open fa-2x color-primary"></i>
                    </div>
                    <h4>Educational Resource Libraries</h4>
                    <p>Organized repositories for teaching materials, research papers, and educational content with advanced search and filtering capabilities.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-certificate fa-2x color-primary"></i>
                    </div>
                    <h4>Professional Training Websites</h4>
                    <p>Career-focused platforms for continuing education, professional certification programs, and workforce development with progress tracking and certification management.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-child fa-2x color-primary"></i>
                    </div>
                    <h4>Early Learning Platforms</h4>
                    <p>Engaging, interactive websites for preschools and early childhood education featuring age-appropriate design, parent resources, and simplified navigation for young users.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Essential Features -->
<section class="features-section padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Essential Education Website Features</h2>
                <p class="section-description">
                    Key components for effective educational websites
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-chalkboard fa-2x color-primary"></i>
                    </div>
                    <h4>Learning Management Integration</h4>
                    <p>Seamless connections with popular LMS platforms like Canvas, Blackboard, Moodle, and Google Classroom for cohesive educational experiences.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-calendar-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Interactive Calendars</h4>
                    <p>Comprehensive event scheduling with academic calendars, class schedules, and campus events that sync with personal calendar applications.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-user-circle fa-2x color-primary"></i>
                    </div>
                    <h4>Student/Parent Portals</h4>
                    <p>Secure access areas for students and parents to view grades, assignments, attendance records, and communicate with teachers.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-file-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Digital Form Management</h4>
                    <p>Online registration, application, and permission slip systems that streamline administrative processes and reduce paperwork.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-video fa-2x color-primary"></i>
                    </div>
                    <h4>Multimedia Resources</h4>
                    <p>Video lectures, interactive learning modules, and downloadable educational resources optimized for various learning styles.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-chart-line fa-2x color-primary"></i>
                    </div>
                    <h4>Progress Tracking</h4>
                    <p>Visual dashboards for monitoring student achievement, course completion, and educational milestones for students and instructors.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section padding-y-5">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Professional Education Website Design</h2>
                <p class="section-description">
                    How a well-designed educational platform enhances learning outcomes
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-rocket fa-2x color-primary"></i>
                    </div>
                    <h4>Enhanced Student Engagement</h4>
                    <p>Interactive features and intuitive design increase student participation and time spent with educational content.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-clock fa-2x color-primary"></i>
                    </div>
                    <h4>Administrative Efficiency</h4>
                    <p>Digital forms, automated processes, and centralized information reduce staff workload and streamline operations.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-comments fa-2x color-primary"></i>
                    </div>
                    <h4>Improved Communication</h4>
                    <p>Multiple channels for students, parents, and faculty to connect, share information, and collaborate effectively.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-universal-access fa-2x color-primary"></i>
                    </div>
                    <h4>Inclusive Learning</h4>
                    <p>Accessibility features ensure educational content is available to all students regardless of abilities or disabilities.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-globe fa-2x color-primary"></i>
                    </div>
                    <h4>Extended Educational Reach</h4>
                    <p>Online platforms remove geographic barriers, allowing institutions to reach students anywhere in the world.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-chart-pie fa-2x color-primary"></i>
                    </div>
                    <h4>Data-Driven Improvement</h4>
                    <p>Analytics provide insights into student performance and engagement, helping educators refine teaching strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section padding-y-5 bg-primary text-white">
    <div class="content-container">
        <div class="content-row align-items-center">
            <div class="content-col one-half margin-bottom-4 margin-lg-0" data-aos="fade-right">
                <h2 class="margin-bottom-3">Ready to Enhance Your Educational Platform?</h2>
                <p class="subtitle margin-bottom-0">
                    Let's create an educational website that inspires learning and streamlines operations.
                </p>
            </div>
            <div class="content-col one-half text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="content-container">
        <div class="faq-header">
            <h2 class="faq-title">Education Website FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What accessibility standards should educational websites meet?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Educational websites should comply with the Web Content Accessibility Guidelines (WCAG) 2.1 AA standards at minimum, which ensure that content is accessible to people with diverse abilities. Educational institutions in the US must also comply with the Americans with Disabilities Act (ADA) and Section 508 requirements. Key accessibility features include proper heading structure, descriptive alt text for images, keyboard navigation support, sufficient color contrast, caption/transcript options for multimedia, and compatibility with screen readers. These standards ensure all students can access learning materials regardless of disabilities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 