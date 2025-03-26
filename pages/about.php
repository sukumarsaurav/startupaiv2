<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'About Us - StartupAI';
$pageDescription = 'Learn about StartupAI - Your trusted technology partner for digital transformation';
$pageKeywords = 'about us, startup, technology partner, web development, AI solutions';

// Include header
include_once '../components/header.php';
?>

<!-- Page Header -->
<section class="page-header section-spacing">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content" data-aos="fade-right">
                <h1 class="page-title">About Us</h1>
                <p class="page-description">Your trusted technology partner for digital transformation and growth</p>
            </div>
            <div class="page-header-image" data-aos="fade-left">
                <img src="../assets/images/about-header.svg" alt="About Us" class="featured-image">
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="section-spacing">
    <div class="content-container">
        <div class="service-grid">
            <div class="service-content" data-aos="fade-right">
                <h2 class="section-heading">Our Story</h2>
                <p>StartupAI was founded with a vision to help startups and businesses leverage the power of technology to achieve their goals. We understand the challenges that startups face in today's competitive landscape.</p>
                <p>Our team of experts brings together years of experience in web development, AI solutions, and digital marketing to provide comprehensive solutions that drive growth and success.</p>
            </div>
            <div class="service-image" data-aos="fade-left">
                <img src="../assets/images/our-story.svg" alt="Our Story" class="featured-image">
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="section-spacing section-light">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Our Values</h2>
        </div>
        <div class="values-grid">
            <div class="value-item" data-aos="fade-up">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb icon-large icon-primary"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We stay at the forefront of technology to deliver cutting-edge solutions.</p>
                </div>
            </div>
            <div class="value-item" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping icon-large icon-primary"></i>
                    </div>
                    <h3>Partnership</h3>
                    <p>We work closely with our clients to ensure their success is our success.</p>
                </div>
            </div>
            <div class="value-item" data-aos="fade-up" data-aos-delay="200">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt icon-large icon-primary"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>We maintain the highest standards in everything we deliver.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Our Team</h2>
        </div>
        <div class="team-grid">
            <div class="team-item" data-aos="fade-up">
                <div class="team-card">
                    <img src="../assets/images/team1.jpg" alt="Team Member" class="team-image">
                    <h4>John Doe</h4>
                    <p class="team-role">CEO & Founder</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item" data-aos="fade-up" data-aos-delay="100">
                <div class="team-card">
                    <img src="../assets/images/team2.jpg" alt="Team Member" class="team-image">
                    <h4>Jane Smith</h4>
                    <p class="team-role">AI Lead</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card">
                    <img src="../assets/images/team3.jpg" alt="Team Member" class="team-image">
                    <h4>Mike Johnson</h4>
                    <p class="team-role">Tech Lead</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item" data-aos="fade-up" data-aos-delay="300">
                <div class="team-card">
                    <img src="../assets/images/team4.jpg" alt="Team Member" class="team-image">
                    <h4>Sarah Wilson</h4>
                    <p class="team-role">Marketing Director</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../components/footer.php';
?> 