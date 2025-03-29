<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Social Media Advertising Services | StartupAI";
$pageDescription = "Drive targeted traffic, increase brand awareness, and boost conversions with our strategic paid social media advertising services";
$serviceName = "Social Media Advertising";
$serviceSlug = "social-media-advertising";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'social media advertising, paid social, social ads, Facebook ads, Instagram ads, LinkedIn ads, Twitter ads, social media marketing, social PPC, targeted social advertising'
];

require_once '../../../../components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-background"></div>
    <div class="hero-blob-1"></div>
    <div class="hero-blob-2"></div>
    
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
                <h1>Social Media <span class="highlight">Advertising</span></h1>
                <p class="lead">Precision-targeted paid social campaigns that drive real business results</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Start Your Campaign</a>
                    <a href="/pages/services/digital-marketing/social-media/" class="btn btn-outline">All Social Media Services</a>
                </div>
            </div>
            <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="image-glow"></div>
                <img src="/assets/images/services/social-media-advertising.svg" alt="Social Media Advertising Services" class="floating-image">
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Service Overview Section -->
<section class="overview-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Powerful Paid Social Campaigns</h2>
            <p class="section-lead">Targeted advertising that reaches your ideal customers across all major platforms</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>Precision Targeting, Maximum ROI</h3>
                <p>Social media advertising offers unparalleled targeting capabilities, allowing you to reach precisely the right audience with your message. Our data-driven approach ensures your ad spend is allocated effectively to maximize return on investment.</p>
                <p>We develop strategic paid social campaigns that align with your business objectives—whether that's generating leads, driving website traffic, increasing brand awareness, or boosting sales.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="card-decoration"></div>
                <h3>Full-Funnel Advertising Strategy</h3>
                <p>From awareness to consideration to conversion, we create tailored social media advertising campaigns for every stage of the customer journey.</p>
                <p>Using a mix of formats—including image ads, video ads, carousel ads, and more—we craft compelling campaigns that engage your audience at the right moment with the right message to drive action.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Social Media Advertising Services</h2>
                <p class="lead">Strategic paid social solutions to achieve your business goals</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Campaign Strategy & Planning</h3>
                    <p>Develop a comprehensive advertising approach aligned with your business objectives.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Goal setting & KPI definition</li>
                        <li><i class="fas fa-check"></i> Platform selection & prioritization</li>
                        <li><i class="fas fa-check"></i> Audience targeting strategy</li>
                        <li><i class="fas fa-check"></i> Budget allocation & optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Creative Development</h3>
                    <p>Design high-performance ad creative that captures attention and drives action.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Compelling ad copy</li>
                        <li><i class="fas fa-check"></i> Eye-catching visual design</li>
                        <li><i class="fas fa-check"></i> Video ad production</li>
                        <li><i class="fas fa-check"></i> A/B testing variations</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Advanced Audience Targeting</h3>
                    <p>Reach your ideal customers with precision audience segmentation.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Custom audience creation</li>
                        <li><i class="fas fa-check"></i> Lookalike audience development</li>
                        <li><i class="fas fa-check"></i> Demographic & interest targeting</li>
                        <li><i class="fas fa-check"></i> Retargeting campaign setup</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Campaign Management</h3>
                    <p>Expertly manage your campaigns for optimal performance.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Campaign setup & configuration</li>
                        <li><i class="fas fa-check"></i> Bid management & optimization</li>
                        <li><i class="fas fa-check"></i> Budget monitoring & adjustment</li>
                        <li><i class="fas fa-check"></i> Performance tracking</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Conversion Optimization</h3>
                    <p>Maximize return on ad spend through continuous optimization.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Landing page optimization</li>
                        <li><i class="fas fa-check"></i> Conversion tracking setup</li>
                        <li><i class="fas fa-check"></i> Conversion rate improvement</li>
                        <li><i class="fas fa-check"></i> ROI maximization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Analytics & Reporting</h3>
                    <p>Gain actionable insights with comprehensive performance analysis.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Campaign performance reporting</li>
                        <li><i class="fas fa-check"></i> ROI & ROAS analysis</li>
                        <li><i class="fas fa-check"></i> Data-driven recommendations</li>
                        <li><i class="fas fa-check"></i> Strategic adjustments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platforms Section -->
<section class="platforms-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Advertising Platforms We Specialize In</h2>
            <p class="section-lead">Strategic campaign management across all major social networks</p>
        </div>
        
        <div class="platforms-grid">
            <div class="platform-item" data-aos="fade-up">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <h3>Facebook & Instagram Ads</h3>
                    <p>Access billions of users with highly targeted campaigns leveraging Facebook's powerful advertising platform. From awareness to conversion, we create strategic campaigns across both networks using all available ad formats.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <h3>LinkedIn Ads</h3>
                    <p>Target professionals with precision using LinkedIn's B2B focused advertising solutions. We leverage LinkedIn's unique targeting capabilities to reach decision-makers and professional audiences with sponsored content, message ads, and more.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <h3>Twitter Ads</h3>
                    <p>Engage with audiences in real-time conversations using Twitter's advertising options. Our campaigns leverage Twitter's unique environment to drive engagement, website traffic, and lead generation.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="300">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-pinterest-p"></i>
                    </div>
                    <h3>Pinterest Ads</h3>
                    <p>Inspire purchase decisions with visual ads on this discovery-focused platform. Our Pinterest campaigns help you reach users actively seeking inspiration in categories relevant to your products or services.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="400">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <h3>TikTok Ads</h3>
                    <p>Capture attention with immersive video ads on this rapidly growing platform. We create engaging, native-feeling content that resonates with TikTok's unique audience and drives brand awareness and engagement.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="500">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-snapchat-ghost"></i>
                    </div>
                    <h3>Snapchat Ads</h3>
                    <p>Reach younger demographics with immersive, full-screen ad experiences. Our Snapchat campaigns leverage the platform's unique formats to build brand awareness and drive engagement with younger audiences.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Social Advertising Process</h2>
            <p class="section-lead">A data-driven approach to paid social success</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Discovery & Strategy</h3>
                        <p>We develop a strategic foundation for your advertising campaigns.</p>
                        <ul class="process-list">
                            <li>Business objectives identification</li>
                            <li>Target audience analysis</li>
                            <li>Competitive landscape research</li>
                            <li>Platform & format selection</li>
                            <li>Campaign structure planning</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Campaign Setup & Creative</h3>
                        <p>We build and configure your campaigns with compelling creative.</p>
                        <ul class="process-list">
                            <li>Account & pixel setup</li>
                            <li>Audience targeting configuration</li>
                            <li>Ad creative development</li>
                            <li>A/B test setup</li>
                            <li>Tracking implementation</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Launch & Optimization</h3>
                        <p>We launch your campaigns and continually refine for performance.</p>
                        <ul class="process-list">
                            <li>Campaign activation</li>
                            <li>Performance monitoring</li>
                            <li>Bid & budget optimization</li>
                            <li>Audience refinement</li>
                            <li>Creative rotation & testing</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Analysis & Scaling</h3>
                        <p>We analyze results and scale successful campaigns for growth.</p>
                        <ul class="process-list">
                            <li>Performance data analysis</li>
                            <li>ROI assessment</li>
                            <li>Strategy refinement</li>
                            <li>Successful campaign scaling</li>
                            <li>Ongoing strategic consulting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="container">
        <div class="section-header">
            <div class="why-choose-us-header" data-aos="fade-up">
                <h2>Why Choose StartupAI for Social Media Advertising</h2>
                <p class="lead">What sets our paid social services apart</p>
            </div>
        </div>
        
        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Results-Focused Approach</h3>
                    <p>We focus relentlessly on ROI, optimizing campaigns to deliver meaningful business outcomes, not just vanity metrics.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Advanced Targeting Expertise</h3>
                    <p>Our specialists utilize the full range of targeting capabilities across all platforms to reach precisely the right audience.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Creative Excellence</h3>
                    <p>We develop scroll-stopping creative that captures attention and drives action in crowded social feeds.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Continuous Testing & Optimization</h3>
                    <p>We implement systematic testing of audiences, creative, and messaging to continuously improve performance.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Transparent Reporting</h3>
                    <p>We provide clear, comprehensive reporting that shows exactly how your campaigns are performing and the value delivered.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Platform-Adaptive Strategies</h3>
                    <p>We stay ahead of platform changes and algorithm updates, continuously evolving our approach for optimal results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Transform Your Social Advertising?</h2>
            <p class="lead">Let's develop a targeted campaign strategy that drives real business results.</p>
            <a href="/pages/contact.php" class="cta-btn">Get a Free Consultation</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about social media advertising</p>
            </div>
        </div>
        
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How much should I budget for social media advertising?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Budget requirements for social media advertising vary based on industry, goals, audience size, and competitive landscape. For most businesses, we recommend starting with a minimum monthly budget of $1,500-3,000 to generate meaningful data and results. This allows for proper testing of different audiences, ad formats, and creative approaches. As we identify winning combinations, we can scale successful campaigns while pausing underperforming ones. We work with clients to establish a budget that aligns with their specific business objectives and expected ROI. Our approach is to start with a testing budget to identify what works, then scale spending on proven performers to maximize results.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How long does it take to see results from social media ads?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Initial data from social media advertising campaigns is available almost immediately, but meaningful business results typically develop within specific timeframes. Most platforms require a 3-7 day "learning phase" as their algorithms optimize delivery. For awareness and engagement-focused campaigns, you can expect to see results within the first week. For conversion-oriented campaigns, performance patterns usually emerge within 2-3 weeks, with ongoing optimization improving results over time. E-commerce businesses often see faster returns, while B2B and higher-consideration purchases may require longer timeframes. We set clear expectations and KPIs based on your specific business model and provide regular updates throughout the campaign lifecycle.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Which social media platforms should I advertise on?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>The best social media platforms for your advertising depend on your specific business, target audience, and objectives. Facebook and Instagram offer broad reach and diverse targeting options suitable for most businesses. LinkedIn excels for B2B targeting and professional audiences. TikTok and Snapchat are ideal for reaching younger demographics. Pinterest works well for lifestyle, decor, fashion, and aspirational products. We recommend a platform selection based on where your audience is most active and engaged, considering factors like demographic alignment, user intent, and ad format suitability. Our approach often involves testing multiple platforms initially to identify which performs best for your specific goals, then allocating more budget to the top performers.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you measure the success of social media advertising?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We measure social media advertising success using metrics aligned with your specific campaign objectives. For awareness campaigns, we track impressions, reach, frequency, and brand lift. For engagement campaigns, we monitor engagement rate, click-through rate, video views, and social interactions. For conversion campaigns, we measure leads generated, cost per acquisition, conversion rate, return on ad spend (ROAS), and overall ROI. We implement comprehensive tracking through the platforms' native pixels, Google Analytics, and CRM integration to provide accurate attribution. Our reporting goes beyond data to provide context and actionable insights, showing not just what happened but why it happened and how to improve. Success is ultimately measured by the campaign's impact on your business objectives and bottom line.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Do you create the ad creative or should we provide it?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We offer complete creative development services for social media advertising, including copywriting, graphic design, and video production. Our team develops multiple creative variations for testing and continuous performance improvement. While you're welcome to provide existing assets, our experience shows that creative specifically designed for each social platform following current best practices typically outperforms repurposed content. We can also work with a hybrid approach, optimizing your existing materials while creating additional assets. The creative development process involves collaborative feedback to ensure alignment with your brand guidelines while incorporating performance-driven elements that drive results in social media environments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
