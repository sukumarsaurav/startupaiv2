<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Hospitality Website Design Services | StartupAI";
$pageDescription = "Create immersive, conversion-focused websites for hotels, restaurants, and hospitality businesses. Showcase your experience, streamline reservations, and increase direct bookings with our specialized hospitality web design.";
$serviceName = "Hospitality Website Design";
$serviceSlug = "hospitality-websites";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'hospitality website design, hotel website development, restaurant websites, resort web design, booking system integration, hospitality booking engines, hotel reservation systems, tourism website design'
];

require_once '../../../../components/header.php';
?>

        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="header-grid">
                    <div class="page-header-content" data-aos="fade-right">
                        <h1>Hospitality Website Design</h1>
                        <p class="lead">Create immersive, conversion-focused websites that showcase your experience and drive direct bookings</p>
                        <a href="/pages/contact.php" class="get-started-btn">
                            Start Your Hospitality Project
                        </a>
                    </div>
                    <div class="page-header-image" data-aos="fade-left">
                        <img src="/assets/images/services/hospitality-website-design.svg" alt="Hospitality Website Design" class="animate-float">
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Overview -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <div class="service-overview-header" data-aos="fade-up">
                        <h2>Expert Hospitality Website Design Services</h2>
                        <p class="lead">We create captivating hospitality websites that combine stunning visuals with powerful functionality to drive bookings and enhance guest experiences.</p>
                    </div>
                </div>
                
                <div class="overview-grid">
                    <div class="service-overview-content" data-aos="fade-up">
                        <h3>Experience-Focused Digital Excellence</h3>
                        <p>Our team specializes in developing websites for hotels, restaurants, resorts, and hospitality businesses that showcase experiences while offering seamless booking and reservation capabilities. We understand the unique challenges of the hospitality industry – from integrating booking engines to creating immersive visual experiences that convert browsers into guests.</p>
                        <p>Every hospitality website we design is built with meticulous attention to visual storytelling, user experience, and conversion optimization while incorporating the latest technologies for optimal performance across all devices and booking platforms.</p>
                    </div>
                    <div class="service-overview-content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Guest-Centered Design Philosophy</h3>
                        <p>We create hospitality websites with a focus on the guest journey, developing user experiences that inspire travel dreams, facilitate easy booking, and answer crucial pre-stay questions. Our guest-first approach ensures visitors can easily explore your offerings, understand your unique selling points, and complete reservations with confidence.</p>
                        <p>By combining hospitality expertise with conversion-focused UX practices, we develop digital experiences that build excitement, reduce booking abandonment, and ultimately drive more direct revenue while lowering dependency on third-party booking platforms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Hospitality Website Design Services</h2>
                        <p class="lead">Comprehensive web solutions tailored to the unique needs of hospitality businesses</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <h3>Hotel & Resort Websites</h3>
                            <p>Immersive websites for accommodations that showcase amenities, rooms, and experiences while driving direct bookings through integrated reservation systems.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Virtual property tours</li>
                                <li><i class="fas fa-check"></i> Room type galleries & descriptions</li>
                                <li><i class="fas fa-check"></i> Booking engine integration</li>
                                <li><i class="fas fa-check"></i> Experience & amenity showcase</li>
                                <li><i class="fas fa-check"></i> Special offer promotion</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h3>Restaurant & Dining Websites</h3>
                            <p>Appetite-inducing websites for restaurants and food service businesses that highlight cuisine, atmosphere, and provide seamless reservation experiences.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Digital menu presentation</li>
                                <li><i class="fas fa-check"></i> Food photography galleries</li>
                                <li><i class="fas fa-check"></i> Reservation system integration</li>
                                <li><i class="fas fa-check"></i> Chef & story showcase</li>
                                <li><i class="fas fa-check"></i> Events & private dining</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-suitcase"></i>
                            </div>
                            <h3>Tourism & Experience Websites</h3>
                            <p>Engaging websites for tour operators, attractions, and experience providers that inspire visitors and streamline activity bookings.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Experience galleries & videos</li>
                                <li><i class="fas fa-check"></i> Tour package presentation</li>
                                <li><i class="fas fa-check"></i> Activity booking system</li>
                                <li><i class="fas fa-check"></i> Destination guides</li>
                                <li><i class="fas fa-check"></i> Customer testimonials</li>
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
                        <h2>Our Hospitality Website Design Process</h2>
                        <p class="lead">A strategic approach to creating high-converting hospitality websites</p>
                    </div>
                </div>
                
                <div class="process-grid">
                    <div class="process-item" data-aos="fade-up">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>1</span>
                            </div>
                            <h3>Discovery & Brand Alignment</h3>
                            <p>We begin with a thorough assessment of your hospitality business, target guests, and competitive landscape:</p>
                            <ul>
                                <li>Property assessment and unique selling point identification</li>
                                <li>Guest persona development and journey mapping</li>
                                <li>Competitive market analysis</li>
                                <li>Brand alignment and voice definition</li>
                                <li>Booking funnel strategy planning</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>2</span>
                            </div>
                            <h3>Visual Design & UX Planning</h3>
                            <p>Our designers create immersive interfaces that showcase your hospitality experience and guide visitors toward booking:</p>
                            <ul>
                                <li>Visual storytelling strategy development</li>
                                <li>Photography and video integration planning</li>
                                <li>Booking path wireframing and optimization</li>
                                <li>Mobile-first responsive design</li>
                                <li>Visual hierarchy for conversion elements</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>3</span>
                            </div>
                            <h3>Development & Integration</h3>
                            <p>We build high-performance hospitality websites with seamless reservations and booking capabilities:</p>
                            <ul>
                                <li>Reservation system integration</li>
                                <li>High-performance image galleries</li>
                                <li>Virtual tour implementation</li>
                                <li>Multi-language support development</li>
                                <li>Reviews and social proof integration</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-card">
                            <div class="process-icon">
                                <span>4</span>
                            </div>
                            <h3>Optimization & Launch</h3>
                            <p>We ensure your hospitality website performs optimally and drives direct bookings:</p>
                            <ul>
                                <li>Booking path conversion testing</li>
                                <li>Page speed optimization for all devices</li>
                                <li>Structured data for rich search results</li>
                                <li>Local SEO implementation</li>
                                <li>Analytics and conversion tracking setup</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <div class="container">
                <div class="section-header">
                    <div class="features-header" data-aos="fade-up">
                        <h2>Essential Features for Hospitality Websites</h2>
                        <p class="lead">Key components that enhance guest experience and drive direct bookings</p>
                    </div>
                </div>
                <div class="features-grid">
                    <div class="feature-item" data-aos="fade-up">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3>Direct Booking System</h3>
                            <p>Integrated reservation systems that provide real-time availability, rate management, and secure payment processing. Includes mobile-optimized booking paths and abandonment recovery features.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-panorama"></i>
                            </div>
                            <h3>Virtual Tours & Galleries</h3>
                            <p>Immersive 360° virtual tours, high-quality image galleries, and video showcases that bring your property and experiences to life. Includes room comparison features and amenity highlights.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h3>Multi-Language Support</h3>
                            <p>Internationalized websites with language switching capabilities to serve global guests. Includes currency conversion and adaptation to regional booking preferences and requirements.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h3>Special Offers Engine</h3>
                            <p>Dynamic display of packages, promotions, and special offers with direct booking capabilities. Includes seasonal and targeted promotions with countdown timers and exclusivity messaging.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Integration Section -->
        <section class="integration-section">
            <div class="container">
                <div class="section-header">
                    <div class="integration-header" data-aos="fade-up">
                        <h2>Booking Systems We Integrate</h2>
                        <p class="lead">Seamless connections with industry-leading hospitality management platforms</p>
                    </div>
                </div>
                
                <div class="content-row">
                    <div class="content-col one-third margin-bottom-4" data-aos="fade-up">
                        <div class="integration-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="integration-icon margin-bottom-3">
                                <i class="fas fa-bed fa-2x color-primary"></i>
                            </div>
                            <h4>Hotel & Accommodation Systems</h4>
                            <ul class="integration-list">
                                <li><i class="fas fa-check text-primary me-2"></i>Booking.com API Integration</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Expedia Partner Solutions</li>
                                <li><i class="fas fa-check text-primary me-2"></i>SiteMinder Booking Engine</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Cloudbeds PMS</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Little Hotelier</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Hoteliers.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="integration-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="integration-icon margin-bottom-3">
                                <i class="fas fa-utensils fa-2x color-primary"></i>
                            </div>
                            <h4>Restaurant Reservation Systems</h4>
                            <ul class="integration-list">
                                <li><i class="fas fa-check text-primary me-2"></i>OpenTable</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Resy</li>
                                <li><i class="fas fa-check text-primary me-2"></i>SevenRooms</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Tock</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Reservations.com</li>
                                <li><i class="fas fa-check text-primary me-2"></i>TheFork / LaFourchette</li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-col one-third margin-bottom-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="integration-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="integration-icon margin-bottom-3">
                                <i class="fas fa-ticket-alt fa-2x color-primary"></i>
                            </div>
                            <h4>Tour & Activity Platforms</h4>
                            <ul class="integration-list">
                                <li><i class="fas fa-check text-primary me-2"></i>FareHarbor</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Viator / TripAdvisor</li>
                                <li><i class="fas fa-check text-primary me-2"></i>GetYourGuide</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Checkfront</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Rezdy</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Bokun</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits -->
        <section class="benefits-section">
            <div class="container">
                <div class="section-header">
                    <div class="benefits-header" data-aos="fade-up">
                        <h2>Benefits of Professional Hospitality Website Design</h2>
                        <p class="lead">Why investing in a specialized hospitality website matters</p>
                    </div>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-item" data-aos="fade-up">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <h3>Increased Direct Bookings</h3>
                            <p>Hotels with optimized booking engines on their websites achieve 22% higher direct booking rates, saving an average of 15-25% on OTA commissions. Well-designed hospitality websites convert visitors at 2.8x the rate of generic templates, with clear calls-to-action increasing booking completion by up to 30%.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Enhanced Mobile Experience</h3>
                            <p>With 68% of travel bookings now occurring on mobile devices, mobile-optimized hospitality websites achieve 112% higher booking rates than non-responsive sites. Hotel websites with mobile booking flows optimized for conversion see 23% lower abandonment rates and 18% higher average booking values.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Improved Guest Experience</h3>
                            <p>Hospitality websites with virtual tours and high-quality imagery increase time on site by 5-6x and booking intent by 67%. Pre-stay information and personalization features reduce pre-arrival inquiries by 41% while increasing guest satisfaction scores by an average of 26% for first-time visitors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Create Your Hospitality Website?</h2>
                    <p class="lead">Let's build an immersive digital experience that showcases your hospitality business and drives direct bookings.</p>
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
                        <p class="lead">Common questions about hospitality website design</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How do you integrate booking engines and reservation systems?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We implement a seamless, conversion-optimized approach to booking system integration:</p>
                            <ul>
                                <li><strong>Direct API Integration:</strong> We connect directly to your preferred booking engine (SiteMinder, Cloudbeds, etc.) using their official APIs for the most reliable and feature-rich integration.</li>
                                <li><strong>Custom Booking Widgets:</strong> Rather than using standard widgets, we design custom booking interfaces that match your brand while maintaining all system functionality.</li>
                                <li><strong>Booking Path Optimization:</strong> We implement UX best practices specific to hospitality, including rate calendar displays, room comparison features, and mobile-optimized checkout flows.</li>
                                <li><strong>Multi-System Synchronization:</strong> For properties using multiple systems (e.g., hotel PMS and restaurant reservation platform), we create unified availability displays.</li>
                                <li><strong>Booking Recovery Features:</strong> We implement abandoned booking recovery through exit-intent popups, email capture for incomplete bookings, and retargeting setup.</li>
                            </ul>
                            <p>The booking interface is seamlessly integrated into the design of your website rather than feeling like a third-party tool, creating a consistent experience that builds trust and increases conversion rates. We also implement analytics to track the booking funnel and identify optimization opportunities.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you optimize hospitality websites for visual impact and conversion?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our approach balances stunning visuals with conversion-focused design:</p>
                            <ul>
                                <li><strong>High-Impact Photography:</strong> We implement advanced image handling techniques that showcase your property beautifully while maintaining fast load times, including progressive loading, responsive images, and lazy loading.</li>
                                <li><strong>Immersive Visual Elements:</strong> We incorporate video backgrounds, slideshows, and interactive galleries that allow guests to explore your property virtually while maintaining performance.</li>
                                <li><strong>Strategic Visual Hierarchy:</strong> We structure pages to highlight key selling points with a visual flow that guides users toward booking actions, using visual cues, color psychology, and spatial relationships.</li>
                                <li><strong>Social Proof Integration:</strong> We seamlessly incorporate reviews, guest photos, and testimonials alongside professional imagery to build trust and authenticity.</li>
                                <li><strong>Conversion Element Optimization:</strong> We ensure booking CTAs, availability checkers, and special offers stand out without detracting from the visual experience through strategic positioning and design.</li>
                            </ul>
                            <p>We find the perfect balance between showcasing your property through rich visual content and maintaining a focused path to booking. Our designs are tested across devices to ensure the visual impact translates from large desktop screens to mobile devices, where an increasing percentage of bookings occur.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you handle multilingual requirements for international guests?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We implement comprehensive internationalization for hospitality businesses with global audiences:</p>
                            <ul>
                                <li><strong>True Multilingual Architecture:</strong> Rather than relying on automatic translation tools, we build websites with proper multilingual architecture that supports professionally translated content with language-specific URLs.</li>
                                <li><strong>Culture-Specific Adaptations:</strong> We adapt layouts, imagery, and content focus for different markets based on cultural preferences and booking behaviors (e.g., emphasizing different amenities or payment options).</li>
                                <li><strong>Location-Based Settings:</strong> We implement smart detection of visitor location to automatically suggest the appropriate language while allowing easy switching between options.</li>
                                <li><strong>Localized Booking Process:</strong> The entire booking path is translated and localized, including dates, currency formats, and terms and conditions specific to each market.</li>
                                <li><strong>Content Management:</strong> We set up systems that make it easy to manage content across multiple languages, with workflows for translation and synchronization of updates.</li>
                            </ul>
                            <p>Our multilingual implementations include proper SEO for each language version, ensuring your website ranks appropriately in different countries and language searches. We can also integrate with translation management systems if you have ongoing translation workflows for regular content updates.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What SEO strategies work best for hospitality websites?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We implement hospitality-specific SEO strategies that focus on both search visibility and conversion:</p>
                            <ul>
                                <li><strong>Local SEO Dominance:</strong> Comprehensive local SEO implementation including Google Business Profile optimization, location-specific content, and structured data for hotels, restaurants, or attractions to appear in map packs and specialized search features.</li>
                                <li><strong>Rich Results Enhancement:</strong> Implementation of schema markup specific to hospitality businesses, including HotelRoom, Restaurant, and Event schemas that display rich information directly in search results, including pricing, availability, and ratings.</li>
                                <li><strong>Intent-Based Content Strategy:</strong> Development of content that aligns with the entire travel planning journey, from inspiration ("best destinations for X") to planning ("things to do near Y hotel") to booking ("luxury hotel deals in Z").</li>
                                <li><strong>Visual Search Optimization:</strong> Optimization of images and videos for visual search, which is increasingly important in travel planning, including proper tagging, alt text, and submission to Google Image search.</li>
                                <li><strong>Voice Search Readiness:</strong> Optimization for conversational queries used in voice search, particularly for location-based searches like "restaurants near me" or "hotels in downtown [city]".</li>
                            </ul>
                            <p>We also focus on technical SEO factors crucial for hospitality sites, including page speed optimization (critical for mobile users planning travel), mobile usability, secure booking paths, and proper handling of seasonal content and special offers to maintain search relevance year-round.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you help hotels reduce dependency on OTAs with website design?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our strategy focuses on creating direct booking advantages through strategic website features:</p>
                            <ul>
                                <li><strong>Best Rate Guarantee Prominence:</strong> Clear, prominent messaging about your best rate guarantee, with specific callouts showing the advantages of booking direct (e.g., "Save 10% vs. OTAs" or "Free breakfast with direct bookings").</li>
                                <li><strong>Exclusive Direct Benefits:</strong> Creation of member-only or direct booking areas highlighting perks unavailable on OTAs, such as room upgrades, flexible cancellation, or property credits.</li>
                                <li><strong>Loyalty Program Integration:</strong> Seamless integration of your loyalty program into the booking flow, emphasizing points or benefits earned only through direct bookings.</li>
                                <li><strong>Rich Content Advantage:</strong> Showcasing detailed property information, room-specific details, and local recommendations that go beyond what's available on OTA listings.</li>
                                <li><strong>Personalization Features:</strong> Implementation of personalization based on guest history, preferences, or browsing behavior that creates a superior booking experience compared to generic OTA interfaces.</li>
                                <li><strong>Retargeting Strategy:</strong> Integration of pixel tracking and email capture to recapture visitors who might otherwise book through OTAs after discovering your property.</li>
                            </ul>
                            <p>We also implement SEO and PPC strategies specifically designed to compete with OTAs for your own brand name searches, ensuring that when potential guests search for your property by name, your direct website appears prominently alongside or above OTA listings.</p>
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
