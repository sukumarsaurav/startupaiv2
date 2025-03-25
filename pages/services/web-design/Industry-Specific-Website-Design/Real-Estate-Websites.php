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
                <h1 class="font-weight-bold" data-aos="fade-up">Real Estate Website Design</h1>
                <p class="subtitle" data-aos="fade-up" data-aos-delay="100">
                    Property listing websites and realtor portals that drive inquiries and sales
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
                <img src="/assets/images/services/real-estate-websites.svg" alt="Real Estate Website Design" class="img-fluid rounded box-shadow">
            </div>
            <div class="content-col half" data-aos="fade-left">
                <h2 class="margin-bottom-4">Real Estate Website Design Services</h2>
                <p>
                    Our real estate website design services help agents, brokers, and property companies create engaging digital platforms that showcase properties effectively and generate quality leads. From property listings to virtual tours, we develop feature-rich real estate websites optimized for both client experience and agent productivity.
                </p>
                <div class="features margin-top-4">
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-home color-primary"></i>
                        </div>
                        <div>
                            <h5>Property Showcase</h5>
                            <p>Eye-catching property listings with advanced search and filtering capabilities.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-map-marked-alt color-primary"></i>
                        </div>
                        <div>
                            <h5>Map Integration</h5>
                            <p>Interactive mapping features with neighborhood data and location-based searches.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-vr-cardboard color-primary"></i>
                        </div>
                        <div>
                            <h5>Virtual Tours</h5>
                            <p>Immersive virtual property tours and 3D walkthroughs for remote viewing.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-calculator color-primary"></i>
                        </div>
                        <div>
                            <h5>Mortgage Calculators</h5>
                            <p>Interactive tools for buyers to calculate payments and affordability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section - Hard-coded version -->
<section class="realestate-why-hire-us padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Why Choose Us for Real Estate Website Design</h2>
                <p class="section-description">
                    Our expertise makes us the ideal partner for your real estate website
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-home fa-2x color-primary"></i>
                    </div>
                    <h4>Real Estate Industry Expertise</h4>
                    <p>Our team has deep experience in the real estate market, understanding buyer psychology and what makes property listings convert into inquiries and sales.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-map-marked-alt fa-2x color-primary"></i>
                    </div>
                    <h4>MLS & IDX Integration Specialists</h4>
                    <p>We're skilled at integrating with multiple listing services and IDX solutions to automatically sync your website with current property data.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-camera fa-2x color-primary"></i>
                    </div>
                    <h4>Visual Storytelling Focus</h4>
                    <p>We emphasize beautiful property presentation with gallery optimization, virtual tours, and visual content that showcases properties at their best.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-mobile-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Mobile-First Property Search</h4>
                    <p>Our real estate websites are optimized for on-the-go property searches, with mobile-friendly interfaces that work flawlessly on any device.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-cogs fa-2x color-primary"></i>
                    </div>
                    <h4>CRM & Lead Management</h4>
                    <p>We build integrated systems that capture leads and connect with your CRM, ensuring no potential buyer or seller falls through the cracks.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-chart-line fa-2x color-primary"></i>
                    </div>
                    <h4>SEO for Real Estate</h4>
                    <p>We employ specialized SEO strategies for real estate to ensure your properties rank well for local searches and attract qualified traffic.</p>
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
                <h2 class="section-title">Our Real Estate Website Design Process</h2>
                <p class="section-description">
                    How we build property platforms that convert visitors into inquiries
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-search-location fa-3x color-primary"></i>
                    </div>
                    <h4>Market Analysis</h4>
                    <p>We research your target market, competition, and property niche to inform the design strategy.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-pencil-ruler fa-3x color-primary"></i>
                    </div>
                    <h4>UX/UI Design</h4>
                    <p>We create user-friendly interfaces with intuitive property search and filtering functionality.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-code fa-3x color-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our team builds responsive, high-performance real estate platforms with all required features.</p>
                </div>
            </div>
            <div class="content-col one-fourth" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-rocket fa-3x color-primary"></i>
                    </div>
                    <h4>Launch & Support</h4>
                    <p>We deploy your site with property data migration and provide ongoing technical support.</p>
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
                <h2 class="section-title">Real Estate Website Types</h2>
                <p class="section-description">
                    Specialized solutions for different real estate business models
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-list fa-2x color-primary"></i>
                    </div>
                    <h4>Property Listing Websites</h4>
                    <p>Comprehensive platforms for showcasing multiple properties with advanced search, filtering, and favoriting capabilities. Ideal for real estate agencies and brokerages managing large property portfolios.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-building fa-2x color-primary"></i>
                    </div>
                    <h4>Property Development Websites</h4>
                    <p>Showcase websites for new developments and pre-construction projects with floor plans, amenities, and interactive site plans. Perfect for builders and developers marketing new communities.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-user-tie fa-2x color-primary"></i>
                    </div>
                    <h4>Realtor & Agent Websites</h4>
                    <p>Professional personal brand sites for individual agents highlighting expertise, listings, testimonials, and service areas. Designed to build trust and generate direct inquiries.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-globe fa-2x color-primary"></i>
                    </div>
                    <h4>Real Estate Portals</h4>
                    <p>Marketplace platforms connecting buyers, sellers, and agents with subscription or listing fee business models. Complete with agent directories and lead generation tools.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-hand-holding-usd fa-2x color-primary"></i>
                    </div>
                    <h4>Property Management Websites</h4>
                    <p>Operational platforms with tenant portals, maintenance requests, and payment processing for property management companies and landlords.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-chart-line fa-2x color-primary"></i>
                    </div>
                    <h4>Real Estate Investment Sites</h4>
                    <p>Information-rich platforms for real estate investors with investment calculators, market analysis tools, and portfolio management features.</p>
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
                <h2 class="section-title">Essential Real Estate Website Features</h2>
                <p class="section-description">
                    Key components that drive engagement and conversions
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-search fa-2x color-primary"></i>
                    </div>
                    <h4>Advanced Property Search</h4>
                    <p>Intuitive search tools with multiple filters for price, location, property type, amenities, and more to help users find exact matches.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-images fa-2x color-primary"></i>
                    </div>
                    <h4>High-Quality Media</h4>
                    <p>Optimized galleries for professional photography, video tours, 3D walkthroughs, and drone footage of properties.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-mobile-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Mobile Optimization</h4>
                    <p>Responsive design ensuring perfect functionality on smartphones and tablets for on-the-go property browsing.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-user-lock fa-2x color-primary"></i>
                    </div>
                    <h4>User Accounts</h4>
                    <p>Personalized accounts for saving favorite properties, saving searches, and receiving property alerts.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-comments fa-2x color-primary"></i>
                    </div>
                    <h4>Lead Capture Tools</h4>
                    <p>Strategic inquiry forms, property alerts, and chat functions designed to convert visitors into qualified leads.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-cogs fa-2x color-primary"></i>
                    </div>
                    <h4>CRM Integration</h4>
                    <p>Seamless connections with real estate CRM systems to manage leads and track customer interactions.</p>
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
                <h2 class="section-title">Benefits of Professional Real Estate Websites</h2>
                <p class="section-description">
                    How a well-designed property platform drives business results
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-chart-line fa-2x color-primary"></i>
                    </div>
                    <h4>Increased Visibility</h4>
                    <p>Reach more potential buyers and sellers through SEO-optimized listings and property content.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-user-plus fa-2x color-primary"></i>
                    </div>
                    <h4>Higher Quality Leads</h4>
                    <p>Generate more qualified inquiries through detailed property information and targeted lead capture.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-handshake fa-2x color-primary"></i>
                    </div>
                    <h4>Faster Transactions</h4>
                    <p>Speed up the sales cycle by providing comprehensive information upfront to serious buyers.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-clock fa-2x color-primary"></i>
                    </div>
                    <h4>Time Efficiency</h4>
                    <p>Automate property marketing and lead qualification to focus on high-value client interactions.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-building fa-2x color-primary"></i>
                    </div>
                    <h4>Brand Differentiation</h4>
                    <p>Stand out in a competitive market with a professional, unique online presence that showcases your expertise.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-analytics fa-2x color-primary"></i>
                    </div>
                    <h4>Data-Driven Insights</h4>
                    <p>Gain valuable market intelligence from user behavior and property interest analytics.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section padding-y-5 bg-primary text-white">
    <div class="content-container">
        <div class="content-row align-items-center">
            <div class="content-col one-half margin-bottom-4 margin-bottom-lg-0" data-aos="fade-right">
                <h2 class="mb-3">Ready to Showcase Your Properties Online?</h2>
                <p class="lead mb-0">
                    Let's build a real estate website that attracts buyers and generates quality leads.
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
            <h2 class="faq-title">Real Estate Website FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What features should my real estate website include?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Essential features for any real estate website include an advanced property search system, high-quality photo galleries, virtual tours, detailed property information, interactive maps, mortgage calculators, and lead capture forms. Additional features to consider are saved searches, property alerts, agent profiles, neighborhood guides, and client testimonials. We'll help you determine which features align best with your specific business goals and target audience.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can my real estate website generate more quality leads?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>To generate quality leads, your real estate website should implement strategic lead capture forms throughout the user journey, offer valuable content like market reports or home buying guides in exchange for contact information, provide property alerts for saved searches, incorporate live chat functionality, and feature prominent calls-to-action. Additionally, we implement analytics tracking to understand user behavior and optimize conversion points based on real data.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can you integrate my real estate website with MLS listings?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, we can integrate your website with MLS (Multiple Listing Service) data through various IDX (Internet Data Exchange) solutions. This allows your website to display up-to-date property listings directly from your local MLS. We handle the technical aspects of IDX integration, including regular data synchronization, search functionality, and compliance with MLS display rules. This integration can be customized to match your website's design for a seamless user experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 