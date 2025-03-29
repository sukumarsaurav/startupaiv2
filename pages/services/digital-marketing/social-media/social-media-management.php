<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Social Media Management Services | StartupAI";
$pageDescription = "Expert social media management services to grow your brand presence, engage your audience, and drive business results across all major platforms";
$serviceName = "Social Media Management";
$serviceSlug = "social-media-management";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'social media management, social media marketing, social media strategy, content creation, community management, social media analytics, Facebook management, Instagram management, LinkedIn management, Twitter management'
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
                <h1>Social Media <span class="highlight">Management</span></h1>
                <p class="lead">Strategic social media management to amplify your brand's voice and grow your digital presence</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Get Started</a>
                    <a href="/pages/services/digital-marketing/social-media/" class="btn btn-outline">All Social Media Services</a>
                </div>
            </div>
            <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="image-glow"></div>
                <img src="/assets/images/services/social-media-management.svg" alt="Social Media Management Services" class="floating-image">
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
            <h2>Strategic Social Media Management</h2>
            <p class="section-lead">Turn your social media presence into a powerful business asset</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>Beyond Just Posting Content</h3>
                <p>Effective social media management is more than just regularly posting content. It's a strategic approach that combines content creation, community engagement, and data analysis to achieve specific business objectives.</p>
                <p>Our comprehensive social media management services are designed to help your brand cut through the noise, connect with your target audience, and drive measurable business results across all major social platforms.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="card-decoration"></div>
                <h3>Platform-Specific Excellence</h3>
                <p>Each social media platform has its own unique audience, content formats, and best practices. Our team of specialists understands these nuances and creates tailored strategies for each platform.</p>
                <p>Whether it's creating engaging visual content for Instagram, thought leadership articles for LinkedIn, or short-form videos for TikTok, we optimize your presence on each platform while maintaining a consistent brand voice and message.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Social Media Management Services</h2>
                <p class="lead">Comprehensive solutions to elevate your social media presence</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Strategy Development</h3>
                    <p>Create a roadmap for achieving your social media objectives.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Platform selection & prioritization</li>
                        <li><i class="fas fa-check"></i> Audience research & persona development</li>
                        <li><i class="fas fa-check"></i> Content pillars & messaging frameworks</li>
                        <li><i class="fas fa-check"></i> Competitive analysis & positioning</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <h3>Content Creation</h3>
                    <p>Develop engaging, on-brand content for each platform.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Platform-optimized content</li>
                        <li><i class="fas fa-check"></i> Graphic design & visual content</li>
                        <li><i class="fas fa-check"></i> Copywriting & caption development</li>
                        <li><i class="fas fa-check"></i> Video creation & editing</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Profile Management</h3>
                    <p>Maintain and optimize your social media profiles.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Profile setup & optimization</li>
                        <li><i class="fas fa-check"></i> Bio & description crafting</li>
                        <li><i class="fas fa-check"></i> Regular content publishing</li>
                        <li><i class="fas fa-check"></i> Profile monitoring & maintenance</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Engagement & Community</h3>
                    <p>Foster relationships and build community with your audience.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Community management</li>
                        <li><i class="fas fa-check"></i> Comment & message responses</li>
                        <li><i class="fas fa-check"></i> Proactive engagement</li>
                        <li><i class="fas fa-check"></i> Social listening & monitoring</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Paid Social Support</h3>
                    <p>Amplify your content with strategic paid campaigns.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Boosted post strategy</li>
                        <li><i class="fas fa-check"></i> Audience targeting</li>
                        <li><i class="fas fa-check"></i> Ad creative development</li>
                        <li><i class="fas fa-check"></i> Performance optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Analytics & Reporting</h3>
                    <p>Track performance and optimize your social strategy.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> KPI tracking & analysis</li>
                        <li><i class="fas fa-check"></i> Performance reporting</li>
                        <li><i class="fas fa-check"></i> Content effectiveness analysis</li>
                        <li><i class="fas fa-check"></i> Strategic recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Social Media Management Process</h2>
            <p class="section-lead">A systematic approach to delivering results</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Discovery & Strategy</h3>
                        <p>We begin by understanding your brand, audience, and objectives.</p>
                        <ul class="process-list">
                            <li>Business goal alignment</li>
                            <li>Brand voice & personality definition</li>
                            <li>Target audience research</li>
                            <li>Platform selection & prioritization</li>
                            <li>Strategic planning & KPI setting</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Content Planning & Creation</h3>
                        <p>We develop engaging content tailored to each platform.</p>
                        <ul class="process-list">
                            <li>Content pillar development</li>
                            <li>Content calendar creation</li>
                            <li>Creative concept development</li>
                            <li>Platform-specific content creation</li>
                            <li>Content approval & refinement</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Implementation & Engagement</h3>
                        <p>We publish content and actively engage with your audience.</p>
                        <ul class="process-list">
                            <li>Content scheduling & publishing</li>
                            <li>Community management</li>
                            <li>Proactive engagement activities</li>
                            <li>Social listening & monitoring</li>
                            <li>Real-time opportunity identification</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Analysis & Optimization</h3>
                        <p>We measure results and refine our approach for continuous improvement.</p>
                        <ul class="process-list">
                            <li>Performance data analysis</li>
                            <li>Content effectiveness evaluation</li>
                            <li>Strategy adjustment & optimization</li>
                            <li>Insights & recommendations development</li>
                            <li>Regular reporting & consultation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platforms Section -->
<section class="platforms-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Platforms We Manage</h2>
            <p class="section-lead">Expert management across all major social networks</p>
        </div>
        
        <div class="platforms-grid">
            <div class="platform-item" data-aos="fade-up">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <h3>Facebook</h3>
                    <p>Build community and drive engagement on the world's largest social network. We create compelling content, manage your Facebook Page, and develop strategies to maximize organic reach and engagement.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>Instagram</h3>
                    <p>Showcase your brand with stunning visuals and engaging stories. We develop a cohesive feed aesthetic, create regular content for Stories, and implement strategies to grow your following and engagement.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <h3>LinkedIn</h3>
                    <p>Establish thought leadership and connect with professionals. We create content that highlights your expertise, engage with relevant industry discussions, and help you build a professional network.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="300">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <h3>Twitter</h3>
                    <p>Join conversations and build relationships in real-time. We craft engaging tweets, participate in relevant discussions, and help you stay on top of trending topics in your industry.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="400">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <h3>TikTok</h3>
                    <p>Connect with younger audiences through creative short-form videos. We develop trending content ideas, create engaging videos, and implement strategies to grow your presence on this rapidly growing platform.</p>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="500">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <h3>YouTube</h3>
                    <p>Build a library of valuable video content for your audience. We help develop video concepts, optimize uploads for search, and implement strategies to grow your channel and viewership.</p>
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
                <h2>Why Choose StartupAI for Social Media Management</h2>
                <p class="lead">What sets our social media management services apart</p>
            </div>
        </div>
        
        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Strategic Approach</h3>
                    <p>We align social media activities with your business goals, ensuring every post contributes to your overall objectives.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Creative Excellence</h3>
                    <p>Our team of creative professionals produces scroll-stopping content that captures attention and drives engagement.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Consistent Execution</h3>
                    <p>We maintain a regular posting schedule and provide timely responses, ensuring your social presence stays active and engaged.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Data-Driven Decisions</h3>
                    <p>We continuously analyze performance metrics to refine strategies and maximize results from your social media efforts.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Platform Specialists</h3>
                    <p>Our team includes specialists for each major platform, ensuring expertise in platform-specific best practices and trends.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Adaptable Strategies</h3>
                    <p>We stay on top of algorithm changes and emerging trends, continuously evolving our approach to maintain effectiveness.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Transform Your Social Media Presence?</h2>
            <p class="lead">Let our experts take your social media to the next level with strategic management and engaging content.</p>
            <a href="/pages/contact.php" class="cta-btn">Get Started Today</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about our social media management services</p>
            </div>
        </div>
        
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How often will you post on our social media accounts?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Posting frequency depends on the platform and your specific strategy. Typically, we recommend 3-5 posts per week for Facebook and LinkedIn, 4-7 posts per week for Instagram, and 5-10 posts per week for Twitter. However, we believe in quality over quantity and will develop a custom posting schedule based on your audience, goals, and content resources. Our focus is on creating meaningful engagement rather than simply posting high volumes of content. We'll discuss the optimal posting frequency during our strategy development and adjust as needed based on performance data.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you measure the success of social media management?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We measure success using both platform-specific metrics and business outcome metrics aligned with your goals. Platform metrics include engagement rate, reach, follower growth, click-through rates, and video views. Business outcome metrics might include website traffic, lead generation, conversion rates, and revenue attribution. We establish specific KPIs during strategy development and provide comprehensive monthly reports tracking these metrics. Most importantly, we go beyond just reporting numbers to provide context and actionable insights that inform ongoing strategy refinements. Success is ultimately defined by how well social media contributes to your business objectives, whether that's brand awareness, community building, lead generation, or sales growth.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Do you create all the content for our social media accounts?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Yes, our comprehensive social media management service includes full content creation. Our team handles everything from copywriting and graphic design to photography direction and video production as needed. We develop monthly content calendars with diverse content types tailored to each platform, which you'll have the opportunity to review before publishing. We can also incorporate your existing content assets or collaborate with your team on specific content initiatives. Additionally, we can work with a hybrid model where we create core content while supplementing with user-generated content, curated industry content, and real-time engagement to create a well-rounded social media presence.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How quickly will you respond to comments and messages?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Our standard response time for comments and messages is within 24 hours during business days, with most responses happening much quicker. We monitor your accounts during business hours (9am-6pm, Monday-Friday) and have protocols in place for handling different types of engagement. For simple comments and general questions, we respond promptly with on-brand messaging. For more complex inquiries or customer service issues, we follow predetermined response guidelines developed with your team. For after-hours urgent matters, we can establish an escalation process that alerts your team to time-sensitive issues. We also proactively engage with relevant conversations and brand mentions to build relationships, not just react to direct communications.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>What's your process for content approval?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We implement a streamlined content approval process to ensure you maintain control while avoiding workflow bottlenecks. Typically, we develop a monthly content calendar with proposed content for your review and approval. This includes the copy, images, and other assets for all planned posts. We share this calendar via a collaborative platform where you can provide feedback and request revisions. Once the calendar is approved, we schedule and publish according to the agreed timeline. For timely or reactive content needs, we can establish an expedited approval process or pre-approved content guidelines. We're flexible and can adapt our approval workflow to match your internal processes while ensuring efficient content production and publishing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>

