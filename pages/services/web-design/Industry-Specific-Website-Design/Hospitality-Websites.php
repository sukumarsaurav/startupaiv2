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
                <h1 class="font-weight-bold" data-aos="fade-up">Hospitality & Travel Website Design</h1>
                <p class="subtitle" data-aos="fade-up" data-aos-delay="100">
                    Captivating, conversion-focused websites for hotels, resorts, tourism, and travel businesses
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
                <img src="/assets/images/services/hospitality-websites.svg" alt="Hospitality Website Design" class="img-fluid rounded box-shadow">
            </div>
            <div class="content-col half" data-aos="fade-left">
                <h2 class="margin-bottom-4">Hospitality & Travel Website Design Services</h2>
                <p>
                    Our specialized hospitality website design services help hotels, resorts, restaurants, tour operators, and travel businesses create immersive digital experiences that inspire bookings and drive direct revenue. We develop visually stunning, user-friendly websites that showcase your unique offerings, streamline the booking process, and create a seamless journey from online discovery to in-person experience.
                </p>
                <div class="features margin-top-4">
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-images color-primary"></i>
                        </div>
                        <div>
                            <h5>Visual Storytelling</h5>
                            <p>Immersive photography, virtual tours, and video content that showcase your property and experiences.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-calendar-check color-primary"></i>
                        </div>
                        <div>
                            <h5>Seamless Booking</h5>
                            <p>Integrated reservation systems and streamlined checkout processes to maximize conversions.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start margin-bottom-3">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-mobile-alt color-primary"></i>
                        </div>
                        <div>
                            <h5>Mobile-First Design</h5>
                            <p>Responsive layouts optimized for travelers booking on smartphones and tablets.</p>
                        </div>
                    </div>
                    <div class="feature-item display-flex align-items-start">
                        <div class="feature-icon margin-right-3">
                            <i class="fas fa-globe color-primary"></i>
                        </div>
                        <div>
                            <h5>Multi-Language Support</h5>
                            <p>Localized content and translations to serve international travelers and guests.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section - Hard-coded version -->
<section class="hospitality-why-hire-us padding-y-5 bg-light">
    <div class="content-container">
        <div class="content-row margin-bottom-5">
            <div class="content-col full-width text-align-center" data-aos="fade-up">
                <h2 class="section-title">Why Choose Us for Hospitality Website Design</h2>
                <p class="section-description">
                    Our expertise makes us the ideal partner for your hospitality website
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-concierge-bell fa-2x color-primary"></i>
                    </div>
                    <h4>Hospitality Industry Knowledge</h4>
                    <p>Our team understands the hospitality business from guest expectations to operational needs, allowing us to create websites that serve both travelers and your staff.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-images fa-2x color-primary"></i>
                    </div>
                    <h4>Immersive Visual Design</h4>
                    <p>We specialize in creating visually stunning interfaces that showcase your property and experiences while driving emotional connections with potential guests.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-calendar-check fa-2x color-primary"></i>
                    </div>
                    <h4>Booking System Integration</h4>
                    <p>We have extensive experience integrating with all major hospitality systems, from property management software to booking engines and payment gateways.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-globe fa-2x color-primary"></i>
                    </div>
                    <h4>Multi-Language Capabilities</h4>
                    <p>We build websites that cater to international travelers with multi-language functionality, currency converters, and localized content.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-mobile-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Mobile Booking Optimization</h4>
                    <p>We design mobile-first websites that cater to the growing number of travelers who research and book their travel experiences on smartphones.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-hire-item height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="item-icon margin-bottom-3">
                        <i class="fas fa-chart-line fa-2x color-primary"></i>
                    </div>
                    <h4>Revenue Optimization</h4>
                    <p>We implement design strategies and technical features focused on increasing direct bookings, reducing commission costs, and maximizing revenue per visitor.</p>
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
                <h2 class="section-title">Our Hospitality Website Design Process</h2>
                <p class="section-description">
                    A proven approach to creating websites that drive bookings and revenue
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-bullseye fa-3x color-primary"></i>
                    </div>
                    <h4>Brand & Audience Analysis</h4>
                    <p>We research your unique selling points, target travelers, and competitive landscape to inform our strategy.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-paint-brush fa-3x color-primary"></i>
                    </div>
                    <h4>Experience Design</h4>
                    <p>We create inspiring visual designs and intuitive user journeys that guide visitors toward booking.</p>
                </div>
            </div>
            <div class="content-col one-fourth margin-bottom-responsive" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-cogs fa-3x color-primary"></i>
                    </div>
                    <h4>System Integration</h4>
                    <p>We implement booking engines, property management systems, and payment gateways for seamless operations.</p>
                </div>
            </div>
            <div class="content-col one-fourth" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-align-center padding-4 height-100 bg-white rounded box-shadow-sm">
                    <div class="process-icon margin-bottom-3">
                        <i class="fas fa-chart-line fa-3x color-primary"></i>
                    </div>
                    <h4>Optimization & Analytics</h4>
                    <p>We implement tracking and continuously optimize for improved conversion rates and booking values.</p>
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
                <h2 class="section-title">Hospitality & Travel Website Types</h2>
                <p class="section-description">
                    Specialized solutions for different hospitality and tourism businesses
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-hotel fa-2x color-primary"></i>
                    </div>
                    <h4>Hotel & Resort Websites</h4>
                    <p>Immersive platforms for hotels and resorts featuring room showcases, amenity listings, virtual tours, and direct booking capabilities that drive commission-free reservations.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-utensils fa-2x color-primary"></i>
                    </div>
                    <h4>Restaurant & Dining Websites</h4>
                    <p>Appetizing websites for restaurants and cafes with menu presentations, reservation systems, online ordering functionality, and location information to attract diners.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-route fa-2x color-primary"></i>
                    </div>
                    <h4>Tour Operator Platforms</h4>
                    <p>Engaging websites for tour companies featuring experience catalogs, itinerary builders, booking management, and customer reviews to inspire traveler confidence.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-map-marked-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Destination & Tourism Websites</h4>
                    <p>Comprehensive platforms for tourism boards and destination marketers showcasing attractions, activities, accommodations, and local businesses to attract visitors.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-home fa-2x color-primary"></i>
                    </div>
                    <h4>Vacation Rental Sites</h4>
                    <p>Property-focused websites for vacation rentals, villas, and short-term accommodations with availability calendars, booking systems, and neighborhood information.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="type-icon margin-bottom-3">
                        <i class="fas fa-glass-cheers fa-2x color-primary"></i>
                    </div>
                    <h4>Event & Wedding Venues</h4>
                    <p>Elegant websites for event spaces and wedding venues with space details, capacity information, catering options, and inquiry/booking functionality.</p>
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
                <h2 class="section-title">Essential Hospitality Website Features</h2>
                <p class="section-description">
                    Key components that drive bookings and enhance guest experiences
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-calendar-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Integrated Booking Engine</h4>
                    <p>Real-time availability, rate display, and secure reservation system integrated with your property management software for streamlined operations.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-images fa-2x color-primary"></i>
                    </div>
                    <h4>Virtual Tours & Gallery</h4>
                    <p>High-quality visual content including 360° tours, photo galleries, and video showcases of rooms, facilities, and experiences.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-map-marker-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Location & Directions</h4>
                    <p>Interactive maps highlighting nearby attractions, transportation options, and detailed arrival information for guests.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-comments fa-2x color-primary"></i>
                    </div>
                    <h4>Guest Reviews Integration</h4>
                    <p>Showcase authentic guest feedback and testimonials from major review platforms to build trust and credibility.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-percent fa-2x color-primary"></i>
                    </div>
                    <h4>Special Offers & Packages</h4>
                    <p>Dedicated sections for promotions, seasonal packages, and exclusive direct booking incentives to drive conversions.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="feature-icon margin-bottom-3">
                        <i class="fas fa-concierge-bell fa-2x color-primary"></i>
                    </div>
                    <h4>Concierge & Services</h4>
                    <p>Detailed information about amenities, services, facilities, and experiences available to guests during their stay.</p>
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
                <h2 class="section-title">Benefits of Professional Hospitality Website Design</h2>
                <p class="section-description">
                    How a well-designed website drives bookings and revenue
                </p>
            </div>
        </div>
        <div class="content-row">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-money-bill-wave fa-2x color-primary"></i>
                    </div>
                    <h4>Increased Direct Bookings</h4>
                    <p>Reduce dependency on OTAs and their high commission rates by capturing more direct reservations through your own website.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-mobile-alt fa-2x color-primary"></i>
                    </div>
                    <h4>Mobile Booking Growth</h4>
                    <p>Capture the growing segment of travelers who research and book accommodations and experiences on smartphones and tablets.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-chart-line fa-2x color-primary"></i>
                    </div>
                    <h4>Higher Average Order Value</h4>
                    <p>Effectively showcase room upgrades, packages, and add-on services to increase the average booking value.</p>
                </div>
            </div>
        </div>
        <div class="content-row margin-top-4">
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-database fa-2x color-primary"></i>
                    </div>
                    <h4>Enhanced Guest Data</h4>
                    <p>Collect valuable guest information and preferences directly, enabling personalized marketing and improved guest experiences.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-globe fa-2x color-primary"></i>
                    </div>
                    <h4>Global Reach Expansion</h4>
                    <p>Attract international travelers with multi-language support, currency conversion, and localized content tailored to different markets.</p>
                </div>
            </div>
            <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card height-100 padding-4 bg-white rounded box-shadow-sm">
                    <div class="benefit-icon margin-bottom-3">
                        <i class="fas fa-building fa-2x color-primary"></i>
                    </div>
                    <h4>Brand Control & Differentiation</h4>
                    <p>Establish your unique brand identity and value proposition, rather than being one of many listings on third-party booking sites.</p>
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
                <h2 class="margin-bottom-3">Ready to Increase Your Direct Bookings?</h2>
                <p class="subtitle margin-bottom-0">
                    Let's create a hospitality website that converts browsers into guests.
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
            <h2 class="faq-title">Hospitality Website FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How can a hotel website increase direct bookings?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>A well-designed hotel website increases direct bookings through multiple strategies, including an intuitive booking engine that makes reservations simple, special direct-booking offers that provide incentives not available on OTAs, clear rate displays and best rate guarantees, mobile-friendly design for on-the-go travelers, compelling visual content that showcases your property effectively, and targeted calls-to-action throughout the guest journey. Additional features like abandoned booking recovery, personalized content based on user behavior, and strategic SEO can further enhance direct booking rates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 