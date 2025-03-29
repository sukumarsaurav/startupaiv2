<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';
require_once '../../../../config/why-hire-us.php';

// Page specific content
$pageTitle = "On-Page SEO | StartupAI";
$pageDescription = "Optimize your website's content, structure, and code for search engines with our comprehensive On-Page SEO services";
$serviceName = "On-Page SEO";
$serviceSlug = "on-page-seo";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'on-page SEO, content optimization, meta tags, keyword optimization, SEO-friendly content, title tag optimization, header tags, internal linking, technical SEO, search engine optimization'
];

require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('seo');

require_once '../../../../components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-background"></div>
    <div class="hero-blob-1"></div>
    <div class="hero-blob-2"></div>
    
    <div class="content-container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
                <h1>On-Page <span class="highlight">SEO</span></h1>
                <p class="lead">Maximize your website's search potential with on-site optimization that improves rankings and drives targeted traffic</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Get a Free SEO Audit</a>
                    <a href="/pages/services/digital-marketing/seo/" class="btn btn-outline">All SEO Services</a>
                </div>
            </div>
            <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="image-glow"></div>
                <img src="/assets/images/services/on-page-seo.svg" alt="On-Page SEO Services" class="floating-image">
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Service Overview Section -->
<section class="overview-section">
    <div class="content-container">
        <div class="section-header" data-aos="fade-up">
            <h2>Maximize Your Website's Search Potential</h2>
            <p class="section-lead">On-Page SEO is the foundation of any successful search strategy, focusing on elements within your website that are entirely within your control.</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>The Foundation of Search Success</h3>
                <p>On-Page SEO focuses on optimizing elements within your website to improve search engine rankings and drive relevant traffic. Unlike off-page factors, on-page elements are entirely within your control, making them critical components for establishing search relevance and authority.</p>
                <p>Our comprehensive On-Page SEO services tackle every aspect of your website's content, structure, and HTML source code to align with search engine best practices and user expectations, creating a strong foundation for search visibility.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="card-decoration"></div>
                <h3>Our On-Page SEO Approach</h3>
                <p>We implement a strategic, data-driven approach to on-page optimization that balances technical requirements with user experience. From keyword optimization and content quality to technical elements like meta tags and schema markup, we address every aspect of your website's on-page factors.</p>
                <p>Our goal is to ensure search engines fully understand your content while providing an exceptional experience for your human visitors, resulting in higher rankings, improved traffic quality, and better conversion rates.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="content-container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our On-Page SEO Services</h2>
                <p class="lead">Comprehensive optimization to improve rankings and user experience</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Content Optimization</h3>
                    <p>Strategic keyword integration and content improvements that satisfy both search engines and users.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Keyword research and mapping</li>
                        <li><i class="fas fa-check"></i> Content gap analysis</li>
                        <li><i class="fas fa-check"></i> Semantic keyword enhancement</li>
                        <li><i class="fas fa-check"></i> Readability improvements</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Technical On-Page Elements</h3>
                    <p>Optimization of HTML elements that influence search rankings and click-through rates.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Title tag optimization</li>
                        <li><i class="fas fa-check"></i> Meta description enhancement</li>
                        <li><i class="fas fa-check"></i> Header tag (H1-H6) structure</li>
                        <li><i class="fas fa-check"></i> Schema markup implementation</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Site Structure Optimization</h3>
                    <p>Improving your website's architecture to enhance crawlability and user navigation.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> URL structure optimization</li>
                        <li><i class="fas fa-check"></i> Internal linking strategy</li>
                        <li><i class="fas fa-check"></i> Content silo development</li>
                        <li><i class="fas fa-check"></i> Category and tag organization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>User Experience Optimization</h3>
                    <p>Enhancing user engagement signals that influence search rankings and conversions.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Mobile optimization</li>
                        <li><i class="fas fa-check"></i> Page speed improvements</li>
                        <li><i class="fas fa-check"></i> Content formatting for readability</li>
                        <li><i class="fas fa-check"></i> Multimedia integration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="technology-section">
    <div class="content-container">
        <div class="section-header">
            <div class="technology-header" data-aos="fade-up">
                <h2>Our On-Page SEO Advantage</h2>
                <p class="lead">Why our on-page optimization approach delivers results</p>
            </div>
        </div>
        
        <div class="technology-grid">
            <div class="technology-item" data-aos="fade-up">
                <div class="technology-card">
                    <div class="technology-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Data-Driven Strategy</h3>
                    <p>We base all optimizations on thorough keyword research, competitor analysis, and performance data.</p>
                </div>
            </div>
            
            <div class="technology-item" data-aos="fade-up" data-aos-delay="100">
                <div class="technology-card">
                    <div class="technology-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Search Intent Focus</h3>
                    <p>We optimize for user intent, not just keywords, ensuring content matches what searchers really want.</p>
                </div>
            </div>
            
            <div class="technology-item" data-aos="fade-up" data-aos-delay="200">
                <div class="technology-card">
                    <div class="technology-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <h3>Algorithm Awareness</h3>
                    <p>We stay current with search algorithm changes and adapt strategies to maintain and improve rankings.</p>
                </div>
            </div>
            
            <div class="technology-item" data-aos="fade-up" data-aos-delay="300">
                <div class="technology-card">
                    <div class="technology-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>User-Search Balance</h3>
                    <p>We find the perfect balance between optimizing for search engines and providing an excellent user experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="process-section">
    <div class="content-container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our On-Page SEO Process</h2>
            <p class="section-lead">A systematic approach to improving your search visibility</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Technical SEO Audit</h3>
                        <p>We conduct a comprehensive analysis of your website's current on-page elements to identify opportunities and issues.</p>
                        <ul class="process-list">
                            <li>Content quality assessment</li>
                            <li>Technical element analysis</li>
                            <li>Site structure evaluation</li>
                            <li>Usability and mobile review</li>
                            <li>Competitive gap identification</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Keyword Strategy Development</h3>
                        <p>We create a comprehensive keyword plan targeting terms relevant to your business and audience.</p>
                        <ul class="process-list">
                            <li>Primary keyword identification</li>
                            <li>Long-tail keyword research</li>
                            <li>Semantic keyword clustering</li>
                            <li>Search intent analysis</li>
                            <li>Content-keyword mapping</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>On-Page Implementation</h3>
                        <p>We systematically optimize on-page elements based on our strategic plan and best practices.</p>
                        <ul class="process-list">
                            <li>Content optimization</li>
                            <li>Meta element enhancement</li>
                            <li>Header structure optimization</li>
                            <li>Internal linking implementation</li>
                            <li>Schema markup integration</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Performance Monitoring</h3>
                        <p>We track key metrics to measure the impact of our on-page optimizations and refine strategies accordingly.</p>
                        <ul class="process-list">
                            <li>Ranking improvement tracking</li>
                            <li>Organic traffic analysis</li>
                            <li>User behavior monitoring</li>
                            <li>Conversion rate analysis</li>
                            <li>Competitive position evaluation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<?php if (isset($why_hire_us) && !empty($why_hire_us)): ?>
<section class="why-choose-us">
    <div class="content-container">
        <div class="section-header">
            <div class="why-choose-us-header" data-aos="fade-up">
                <h2>Why Choose StartupAI for On-Page SEO</h2>
                <p class="lead">Our unique approach to on-page optimization delivers measurable results</p>
            </div>
        </div>
        
        <div class="features-grid">
            <?php foreach ($why_hire_us as $item): ?>
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="<?php echo $item['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA Section -->
<section class="cta-section">
    <div class="content-container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Improve Your Search Rankings?</h2>
            <p class="lead">Let's discuss how our On-Page SEO services can help your website rank higher and attract more targeted traffic.</p>
            <a href="/pages/contact.php" class="cta-btn">Get Your Free SEO Audit</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="content-container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about our On-Page SEO services</p>
            </div>
        </div>
        
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>What is included in your On-Page SEO services?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Our On-Page SEO services include all aspects of optimizing the elements within your website that affect search engine rankings. This includes comprehensive content optimization with strategic keyword placement, technical HTML element optimization (title tags, meta descriptions, header tags), internal linking strategy development, URL structure optimization, schema markup implementation, site speed improvements, mobile optimization, and user experience enhancements. We take a holistic approach that balances technical optimization with creating high-quality, valuable content for your users.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How long does it take to see results from On-Page SEO?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>The timeline for On-Page SEO results varies depending on several factors including your website's current authority, the competitive landscape of your industry, the quality of the optimizations, and how frequently search engines crawl your site. Generally, you might begin to see initial improvements within 2-4 weeks as search engines recrawl your optimized pages. More substantial ranking improvements typically occur within 2-3 months, with continued growth over 6-12 months as the optimizations gain traction. We focus on implementing "quick wins" early in the process to demonstrate value while building toward long-term sustainable results.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you measure the success of On-Page SEO efforts?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We measure the success of our On-Page SEO services through a comprehensive set of metrics that track both search performance and business outcomes. These include organic search rankings for target keywords, organic traffic growth, conversion rates from organic visitors, user engagement metrics (bounce rate, time on site, pages per session), technical SEO health scores, and ultimately, return on investment. We provide regular reporting on these metrics through an intuitive dashboard, showing progress over time and identifying areas for further optimization. Our focus is always on delivering measurable business results from your SEO investment, not just technical improvements.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Will you need to make changes to my website design?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>In most cases, effective On-Page SEO can be implemented without significant changes to your website's design or branding. Our approach focuses on working within your existing design framework to optimize elements that impact search performance. This typically includes content enhancements, metadata optimizations, and backend technical improvements that don't affect the visual appearance. However, if we identify that certain aspects of your design are hindering search performance or user experience (such as slow-loading elements, poor mobile responsiveness, or confusing navigation), we'll recommend specific targeted improvements. We always discuss any visible changes before implementation and work collaboratively with your design team if needed.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How often should On-Page SEO be updated?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>On-Page SEO is not a one-time effort but an ongoing process that requires regular attention. We recommend a comprehensive review of on-page elements at least quarterly, with more frequent attention to content updates and performance monitoring. Search engines continually update their algorithms, user behaviors evolve, and competitors adjust their strategies, all of which can impact your site's performance. Regular content refreshes, performance optimizations based on analytics insights, and adapting to emerging SEO best practices are essential for maintaining and improving search rankings over time. Our service includes ongoing optimization and monitoring to ensure your website stays competitive in search results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 