<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for IoT & Embedded Systems
$why_hire_us = getWhyHireUsContent('iot-embedded-systems');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content text-center">
                <h1 class="page-title" data-aos="fade-up">IoT & Embedded Systems</h1>
                <p class="page-description" data-aos="fade-up" data-aos-delay="100">
                    Connect physical devices to the digital world with smart, secure IoT solutions
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Service Overview -->
<section class="service-overview section-spacing">
    <div class="content-container">
        <div class="service-grid">
            <div class="service-image" data-aos="fade-right">
                <img src="/assets/images/services/iot-embedded.svg" alt="IoT and Embedded Systems" class="featured-image">
            </div>
            <div class="service-content" data-aos="fade-left">
                <h2 class="section-heading">IoT & Embedded Systems Development</h2>
                <p>
                    Our IoT and embedded systems development services help businesses create connected device solutions that collect valuable data, automate processes, and enable new digital experiences. From industrial IoT applications to consumer smart products, we design and develop secure, scalable, and efficient solutions that bridge the physical and digital worlds.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-microchip icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Embedded Firmware</h5>
                            <p>Custom firmware development for sensors, controllers, and connected devices.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-cloud icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>IoT Cloud Platforms</h5>
                            <p>Scalable backend systems for device management, data processing, and analytics.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Mobile & Web Applications</h5>
                            <p>Intuitive user interfaces for monitoring and controlling connected devices.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt icon-primary"></i>
                        </div>
                        <div class="feature-content">
                            <h5>IoT Security</h5>
                            <p>Comprehensive security measures to protect devices, data, and communications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

<!-- Process -->
<section class="process-section section-spacing section-light">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Our IoT Development Process</h2>
            <p class="section-subheading">
                A comprehensive approach to building connected device solutions
            </p>
        </div>
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-lightbulb icon-large icon-primary"></i>
                    </div>
                    <h4>IoT Strategy</h4>
                    <p>We define your IoT goals, identify use cases, and create a technical roadmap for implementation.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-sitemap icon-large icon-primary"></i>
                    </div>
                    <h4>Architecture Design</h4>
                    <p>We design a secure, scalable architecture covering hardware, connectivity, and cloud components.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-code icon-large icon-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our engineers develop firmware, cloud services, and applications for your complete IoT solution.</p>
                </div>
            </div>
            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-cogs icon-large icon-primary"></i>
                    </div>
                    <h4>Deployment & Management</h4>
                    <p>We help you deploy, monitor, and maintain your IoT ecosystem with ongoing support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IoT Solutions -->
<section class="iot-solutions-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">IoT Solutions We Develop</h2>
            <p class="section-subheading">
                Connected solutions for various industries and applications
            </p>
        </div>
        <div class="solutions-grid">
            <div class="solution-item" data-aos="fade-up">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-industry icon-large icon-primary"></i>
                    </div>
                    <h4>Industrial IoT</h4>
                    <p>Smart manufacturing systems, predictive maintenance solutions, equipment monitoring, and industrial automation to optimize operations and reduce downtime.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-home icon-large icon-primary"></i>
                    </div>
                    <h4>Smart Home & Buildings</h4>
                    <p>Home automation systems, energy management solutions, security monitoring, and connected building infrastructure for enhanced comfort and efficiency.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-heartbeat icon-large icon-primary"></i>
                    </div>
                    <h4>Healthcare IoT</h4>
                    <p>Remote patient monitoring, medical device connectivity, healthcare asset tracking, and wellness tracking devices for improved patient care.</p>
                </div>
            </div>
        </div>
        <div class="solutions-grid">
            <div class="solution-item" data-aos="fade-up">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-truck icon-large icon-primary"></i>
                    </div>
                    <h4>Supply Chain & Logistics</h4>
                    <p>Asset tracking, fleet management, warehouse automation, and condition monitoring for enhanced visibility and efficiency throughout the supply chain.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-leaf icon-large icon-primary"></i>
                    </div>
                    <h4>Agriculture IoT</h4>
                    <p>Smart farming systems, irrigation management, crop monitoring, livestock tracking, and environmental monitoring for optimized agricultural operations.</p>
                </div>
            </div>
            <div class="solution-item" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-city icon-large icon-primary"></i>
                    </div>
                    <h4>Smart Cities</h4>
                    <p>Urban infrastructure monitoring, smart lighting, waste management, environmental sensing, and traffic management solutions for sustainable urban environments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="technologies-section section-spacing section-light">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">IoT Technologies We Work With</h2>
            <p class="section-subheading">
                Expertise across the IoT technology stack
            </p>
        </div>
        <div class="tech-grid">
            <div class="tech-item" data-aos="fade-up">
                <div class="tech-card">
                    <h4 class="text-center">Hardware & Firmware</h4>
                    <ul class="tech-list list-unstyled">
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Arduino</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Raspberry Pi</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>ESP32/ESP8266</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>STM32</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Custom PCB Design</li>
                    </ul>
                </div>
            </div>
            <div class="tech-item" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card">
                    <h4 class="text-center">Connectivity</h4>
                    <ul class="tech-list list-unstyled">
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Bluetooth/BLE</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Wi-Fi</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>LoRaWAN</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Zigbee</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Cellular (4G/5G)</li>
                    </ul>
                </div>
            </div>
            <div class="tech-item" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card">
                    <h4 class="text-center">Cloud Platforms</h4>
                    <ul class="tech-list list-unstyled">
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>AWS IoT</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Azure IoT</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Google Cloud IoT</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>ThingsBoard</li>
                        <li><i class="fas fa-check-circle icon-primary tech-check"></i>Custom IoT Platforms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-heading">Benefits of IoT Solutions</h2>
            <p class="section-subheading">
                How connected devices transform businesses and operations
            </p>
        </div>
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line icon-large icon-primary"></i>
                    </div>
                    <h4>Enhanced Operational Efficiency</h4>
                    <p>Automate processes, optimize resource usage, and reduce manual intervention through real-time monitoring and control.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb icon-large icon-primary"></i>
                    </div>
                    <h4>Data-Driven Insights</h4>
                    <p>Gather valuable data from physical assets to gain actionable intelligence and make informed business decisions.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-tools icon-large icon-primary"></i>
                    </div>
                    <h4>Predictive Maintenance</h4>
                    <p>Anticipate equipment failures and maintenance needs before they occur, reducing downtime and repair costs.</p>
                </div>
            </div>
        </div>
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-user-friends icon-large icon-primary"></i>
                    </div>
                    <h4>Enhanced Customer Experience</h4>
                    <p>Create innovative, connected products and services that deliver greater value and engagement to customers.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-dollar-sign icon-large icon-primary"></i>
                    </div>
                    <h4>New Revenue Streams</h4>
                    <p>Develop innovative business models through connected devices, data monetization, and value-added services.</p>
                </div>
            </div>
            <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-recycle icon-large icon-primary"></i>
                    </div>
                    <h4>Sustainability</h4>
                    <p>Optimize resource consumption, reduce waste, and minimize environmental impact through smart, connected systems.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section section-spacing section-primary text-white">
    <div class="content-container">
        <div class="cta-grid">
            <div class="cta-content" data-aos="fade-right">
                <h2 class="cta-title">Ready to Build Your IoT Solution?</h2>
                <p class="cta-description">
                    Let's create connected systems that unlock new possibilities for your business.
                </p>
            </div>
            <div class="cta-button" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section section-spacing">
    <div class="content-container">
        <div class="section-header text-center">
            <h2 class="section-heading">IoT & Embedded Systems FAQ's</h2>
            <p class="section-subheading">Have Any Questions?</p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What industries can benefit most from IoT solutions?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Nearly every industry can benefit from IoT implementation, but some see particularly high ROI. Manufacturing benefits through equipment monitoring, predictive maintenance, and process optimization. Healthcare leverages IoT for remote patient monitoring, medical device connectivity, and asset tracking. Agriculture uses IoT for precision farming, irrigation management, and livestock monitoring. Energy and utilities implement smart grid technology, consumption monitoring, and infrastructure management. Retail adopts inventory tracking, customer analytics, and smart store experiences. Transportation and logistics utilize fleet management, asset tracking, and route optimization. The specific benefits vary by industry, but common advantages include operational efficiency, data insights, cost reduction, and new customer experiences.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you address security concerns in IoT development?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Security is foundational to our IoT development process, not an afterthought. We implement a multi-layered security approach that includes secure hardware design with trusted execution environments and secure boot processes. At the firmware level, we employ secure coding practices, encrypted storage, and regular security updates. For data transmission, we implement end-to-end encryption, secure authentication protocols, and network segmentation. Our cloud services feature strong access controls, regular security audits, and compliance with relevant standards like ISO 27001. We also develop comprehensive security monitoring systems to detect and respond to potential threats. Throughout the development lifecycle, we conduct security risk assessments and penetration testing to identify and address vulnerabilities before deployment.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is your approach to IoT scalability and maintenance?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We design IoT systems with scalability as a core principle from the beginning. Our architecture employs microservices and container-based cloud components that can scale horizontally to handle growing device fleets and data volumes. We implement efficient data storage strategies with time-series databases and data lifecycle management to handle increasing data loads. For device management, we build robust provisioning and onboarding processes that work efficiently whether you have ten devices or ten thousand. On the maintenance front, we implement over-the-air (OTA) update capabilities to keep firmware and software current. We also develop comprehensive monitoring and alerting systems that provide visibility into system health and automate routine maintenance tasks. Our support plans include regular security patches, performance optimizations, and technical assistance to ensure your IoT ecosystem remains robust and secure as it grows.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
