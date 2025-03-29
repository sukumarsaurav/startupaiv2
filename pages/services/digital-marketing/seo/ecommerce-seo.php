<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "E-commerce SEO | StartupAI";
$pageDescription = "Increase your online store's visibility, traffic, and conversions with our specialized e-commerce SEO services tailored for product-based businesses.";
$serviceName = "E-commerce SEO";
$serviceSlug = "ecommerce-seo";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'e-commerce SEO, online store optimization, product page SEO, category page optimization, shopping cart SEO, ecommerce search rankings, product schema markup, ecommerce keyword research, conversion optimization, shopping feed optimization'
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
                <h1>E-commerce <span class="highlight">SEO</span></h1>
                <p class="lead">Drive more qualified traffic and increase sales with SEO strategies specifically designed for online stores</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Get Your E-commerce SEO Audit</a>
                    <a href="/pages/services/digital-marketing/seo/" class="btn btn-outline">All SEO Services</a>
                </div>
            </div>
            <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="image-glow"></div>
                <img src="/assets/images/services/ecommerce-seo.svg" alt="E-commerce SEO Services" class="floating-image">
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
            <h2>Specialized SEO for Online Stores</h2>
            <p class="section-lead">We help e-commerce businesses improve visibility, traffic, and conversion rates through strategic search optimization tailored to product-based websites.</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>E-commerce SEO Challenges</h3>
                <p>Online stores face unique search optimization challenges including product duplication, complex site architecture, seasonal inventory fluctuations, and increased competition. Standard SEO approaches often fall short for e-commerce businesses that need specialized strategies to address their specific needs.</p>
                <p>Our e-commerce SEO services are specifically designed to overcome these challenges with strategies that drive qualified shoppers to your store and increase your conversion rates across all product categories.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="card-decoration"></div>
                <h3>Our Approach to E-commerce SEO</h3>
                <p>We implement a comprehensive approach that combines technical optimization, content strategy, and conversion rate optimization specifically designed for online retail environments. Our strategies are focused on improving visibility for product pages, category pages, and your brand as a whole.</p>
                <p>By integrating SEO with your overall e-commerce strategy, we ensure that your organic search presence supports your business goals, driving not just traffic but qualified shoppers with high purchase intent.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our E-commerce SEO Services</h2>
                <p class="lead">Comprehensive optimization strategies to increase your online store's visibility and sales</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Product Page Optimization</h3>
                    <p>Comprehensive optimization of individual product pages to maximize their search visibility and conversion potential.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Product-focused keyword research</li>
                        <li><i class="fas fa-check"></i> Unique product descriptions</li>
                        <li><i class="fas fa-check"></i> Product schema markup implementation</li>
                        <li><i class="fas fa-check"></i> Image optimization for search</li>
                        <li><i class="fas fa-check"></i> Customer review integration</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Category & Taxonomy Optimization</h3>
                    <p>Strategic organization and optimization of product categories to improve site architecture and user navigation.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Category page content development</li>
                        <li><i class="fas fa-check"></i> Breadcrumb navigation optimization</li>
                        <li><i class="fas fa-check"></i> Internal linking structure</li>
                        <li><i class="fas fa-check"></i> Faceted navigation optimization</li>
                        <li><i class="fas fa-check"></i> URL structure improvement</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Technical E-commerce SEO</h3>
                    <p>Addressing the complex technical challenges specific to e-commerce platforms to improve crawlability and indexation.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Duplicate content resolution</li>
                        <li><i class="fas fa-check"></i> Pagination optimization</li>
                        <li><i class="fas fa-check"></i> Canonical tag implementation</li>
                        <li><i class="fas fa-check"></i> Site speed optimization</li>
                        <li><i class="fas fa-check"></i> Mobile shopping experience</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Shopping Feed Optimization</h3>
                    <p>Optimizing product feeds for Google Shopping, Amazon, and other marketplaces to increase visibility across multiple channels.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Product feed optimization</li>
                        <li><i class="fas fa-check"></i> Google Merchant Center setup</li>
                        <li><i class="fas fa-check"></i> Product title optimization</li>
                        <li><i class="fas fa-check"></i> Category mapping</li>
                        <li><i class="fas fa-check"></i> Product data quality improvement</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>E-commerce Content Strategy</h3>
                    <p>Development of compelling content that drives organic traffic and supports product sales through education and inspiration.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Product buying guides</li>
                        <li><i class="fas fa-check"></i> Product comparison content</li>
                        <li><i class="fas fa-check"></i> FAQ development</li>
                        <li><i class="fas fa-check"></i> How-to content creation</li>
                        <li><i class="fas fa-check"></i> Product video optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>E-commerce Conversion Optimization</h3>
                    <p>Enhancing your store's ability to convert visitors into customers through data-driven improvements.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Shopping funnel analysis</li>
                        <li><i class="fas fa-check"></i> Abandoned cart reduction</li>
                        <li><i class="fas fa-check"></i> Product page conversion elements</li>
                        <li><i class="fas fa-check"></i> Trust signal implementation</li>
                        <li><i class="fas fa-check"></i> Call-to-action optimization</li>
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
            <h2>Our E-commerce SEO Process</h2>
            <p class="section-lead">A structured approach to improving your online store's search visibility and performance</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>E-commerce SEO Audit</h3>
                        <p>We conduct a comprehensive analysis of your online store's current SEO performance to identify opportunities and issues.</p>
                        <ul class="process-list">
                            <li>Technical platform assessment</li>
                            <li>Product catalog analysis</li>
                            <li>Competitive marketplace research</li>
                            <li>Search ranking evaluation</li>
                            <li>User journey optimization review</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>E-commerce Keyword Strategy</h3>
                        <p>We develop a comprehensive keyword plan targeting commercial-intent searches relevant to your products and categories.</p>
                        <ul class="process-list">
                            <li>Product keyword research</li>
                            <li>Category keyword targeting</li>
                            <li>Long-tail product queries</li>
                            <li>Competitive keyword gap analysis</li>
                            <li>Seasonal opportunity mapping</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>On-Site Optimization</h3>
                        <p>We implement technical and content optimizations across your store to improve search visibility and user experience.</p>
                        <ul class="process-list">
                            <li>Product page optimization</li>
                            <li>Category page enhancement</li>
                            <li>Schema markup implementation</li>
                            <li>Technical SEO improvements</li>
                            <li>Site architecture refinement</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Content Development</h3>
                        <p>We create strategic content that addresses customer questions and supports the shopping journey.</p>
                        <ul class="process-list">
                            <li>Product description optimization</li>
                            <li>Buying guide creation</li>
                            <li>Product FAQ development</li>
                            <li>Category content enhancement</li>
                            <li>Customer education resources</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="process-number">5</div>
                    <div class="process-card">
                        <h3>Measurement & Refinement</h3>
                        <p>We continuously analyze performance data to refine your e-commerce SEO strategy for optimal results.</p>
                        <ul class="process-list">
                            <li>Product performance tracking</li>
                            <li>Search visibility monitoring</li>
                            <li>Conversion rate analysis</li>
                            <li>Revenue attribution</li>
                            <li>Strategy adaptation and optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platform Section -->
<section class="platforms-section">
    <div class="container">
        <div class="section-header">
            <div class="platforms-header" data-aos="fade-up">
                <h2>E-commerce Platforms We Support</h2>
                <p class="lead">Our SEO strategies are tailored to work with all major e-commerce platforms and systems</p>
            </div>
        </div>
        
        <div class="platforms-grid">
            <div class="platform-item" data-aos="fade-up">
                <div class="platform-card">
                    <h3>Shopify SEO</h3>
                    <p>Specialized optimization for Shopify stores that works within the platform's capabilities and limitations.</p>
                    <ul>
                        <li>Shopify URL structure optimization</li>
                        <li>Collection page SEO strategies</li>
                        <li>App integration for advanced SEO</li>
                        <li>Liquid template optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                <div class="platform-card">
                    <h3>WooCommerce SEO</h3>
                    <p>Comprehensive WordPress and WooCommerce optimization for maximum search visibility.</p>
                    <ul>
                        <li>WordPress SEO plugin configuration</li>
                        <li>WooCommerce schema implementation</li>
                        <li>Product template optimization</li>
                        <li>Category hierarchy development</li>
                    </ul>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                <div class="platform-card">
                    <h3>Magento SEO</h3>
                    <p>Technical optimization for Magento/Adobe Commerce platforms to maximize search performance.</p>
                    <ul>
                        <li>Magento configuration optimization</li>
                        <li>Advanced catalog management</li>
                        <li>Custom attribute utilization</li>
                        <li>Layered navigation optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="platform-item" data-aos="fade-up" data-aos-delay="300">
                <div class="platform-card">
                    <h3>BigCommerce SEO</h3>
                    <p>Strategic SEO implementation for BigCommerce stores leveraging platform-specific features.</p>
                    <ul>
                        <li>BigCommerce SEO settings</li>
                        <li>Stencil theme optimization</li>
                        <li>Category page enhancement</li>
                        <li>Custom field utilization</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results & Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>E-commerce SEO Results</h2>
            <p class="section-lead">The tangible benefits our e-commerce SEO services deliver for online retailers</p>
        </div>
        
        <div class="benefits-grid">
            <div class="primary-benefit" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon primary-icon">
                        <i class="fas fa-search-dollar"></i>
                    </div>
                    <h3>Increased Product Visibility</h3>
                    <p>Achieve higher rankings for product and category pages in search results, driving more potential customers to your online store.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge primary-badge">+145% product page traffic</span>
                        <span class="stat-badge primary-badge">Top 3 rankings for key products</span>
                    </div>
                </div>
            </div>
            
            <div class="secondary-benefit" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon secondary-icon">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <h3>Improved Conversion Rates</h3>
                    <p>Convert more visitors into customers through strategic optimization of product pages, shopping carts, and the overall user experience.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge secondary-badge">+38% organic conversion rate</span>
                        <span class="stat-badge secondary-badge">-25% cart abandonment</span>
                    </div>
                </div>
            </div>
            
            <div class="tertiary-benefit" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon tertiary-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Diversified Traffic Sources</h3>
                    <p>Reduce dependence on paid advertising by building a sustainable stream of organic search traffic to your e-commerce store.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge tertiary-badge">+64% organic traffic growth</span>
                        <span class="stat-badge tertiary-badge">-32% PPC dependency</span>
                    </div>
                </div>
            </div>
            
            <div class="quaternary-benefit" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon quaternary-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Higher Return on Investment</h3>
                    <p>Achieve better ROI compared to paid advertising channels, with sustainable results that continue to deliver value over time.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge quaternary-badge">+187% SEO ROI</span>
                        <span class="stat-badge quaternary-badge">+29% average order value</span>
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
                <h2>Why Choose StartupAI for E-commerce SEO</h2>
                <p class="lead">Our unique approach to e-commerce search optimization delivers measurable results</p>
            </div>
        </div>
        
        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>E-commerce Specialization</h3>
                    <p>Our team specializes exclusively in online retail SEO, with deep understanding of product-based website optimization strategies that drive qualified traffic and sales.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Data-Driven Results</h3>
                    <p>We base our strategies on comprehensive analytics, focusing on metrics that directly impact your revenue and ROI rather than vanity metrics that don't affect your bottom line.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Technical Excellence</h3>
                    <p>We excel at solving complex technical SEO challenges specific to e-commerce platforms, ensuring your store provides an optimal experience for both search engines and users.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Platform Expertise</h3>
                    <p>Our team has hands-on experience with all major e-commerce platforms, allowing us to implement effective SEO strategies that work within your specific technical environment.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Conversion Optimization</h3>
                    <p>We integrate SEO with conversion rate optimization principles, ensuring that increased traffic translates directly into more sales and higher average order values.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Adaptive Strategy</h3>
                    <p>Our approach evolves with the constantly changing e-commerce landscape, search algorithm updates, and consumer behavior shifts to keep your store ahead of competitors.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Grow Your E-commerce Store's Organic Traffic?</h2>
            <p class="lead">Let's talk about how our specialized e-commerce SEO strategies can help drive more qualified shoppers to your online store.</p>
            <a href="/pages/contact.php" class="cta-btn">Get Your Free E-commerce SEO Audit</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about our e-commerce SEO services</p>
            </div>
        </div>
        
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How is e-commerce SEO different from regular SEO?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>E-commerce SEO differs from general SEO in several key ways. First, it focuses heavily on product and category pages, which have unique optimization challenges compared to informational content. Second, e-commerce sites typically have much larger scale with thousands of products, creating technical challenges for crawling and indexing. Third, e-commerce SEO must address specific challenges like duplicate content from product variations, faceted navigation, and inventory fluctuations. Finally, e-commerce SEO requires specific structured data implementation (like product schema) and must integrate with other channels like Google Shopping. Our specialized approach addresses these unique needs with strategies developed specifically for online retailers.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How long does it take to see results from e-commerce SEO?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>The timeline for e-commerce SEO results varies based on several factors including your site's current authority, technical health, competition level, and the scope of optimization needed. Typically, initial improvements in technical performance and on-page elements can be seen within 1-2 months. More significant ranking improvements usually begin around 3-4 months, with substantial traffic and revenue increases often occurring between 6-12 months. Some highly competitive keywords may take longer to show significant ranking improvements. We focus on prioritizing quick wins early in the process while building toward long-term sustainable growth, and provide transparent monthly reporting on progress across all key metrics.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Do you work with my specific e-commerce platform?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Yes, our e-commerce SEO team has experience optimizing stores built on all major e-commerce platforms including Shopify, WooCommerce, Magento/Adobe Commerce, BigCommerce, Squarespace, Wix, PrestaShop, OpenCart, and custom-built solutions. Each platform has unique capabilities and limitations when it comes to SEO, and our team is familiar with the specific optimization techniques required for each. We tailor our approach to work within your platform's capabilities while maximizing search performance. If you're using a less common platform, we'll evaluate it during the discovery process and develop a customized strategy that works with your specific technical environment.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you measure the success of e-commerce SEO?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We measure e-commerce SEO success through a comprehensive set of metrics that focus on both search performance and business outcomes. These include: Organic traffic growth (overall and by page type), Search rankings for target keywords, Organic conversion rate, Revenue from organic search, Return on investment (ROI), Average order value from organic traffic, Product and category page visibility, Organic market share compared to competitors, User engagement metrics (bounce rate, time on site, pages per session), and Technical health metrics. We provide detailed monthly reporting on these metrics through an interactive dashboard, showing progress over time and identifying areas for further optimization. Our focus is always on driving revenue growth, not just traffic or rankings.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you handle product pages that come and go with inventory changes?</h3>
                    <button class="toggle-btn"><i class="fas fa-plus"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Managing changing inventory is a common challenge in e-commerce SEO. We implement several strategies to address this: For temporarily out-of-stock products, we maintain the pages with proper inventory schema markup rather than removing them, allowing customers to sign up for back-in-stock notifications. For seasonal products, we implement a strategic approach using proper HTTP status codes (keeping pages live with out-of-stock notices rather than returning 404 errors). For discontinued products, we create a proper redirection strategy to guide users to similar products or relevant categories. This approach preserves SEO value while maintaining a good user experience. We also help implement inventory management best practices that balance SEO needs with accurate inventory representation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>

