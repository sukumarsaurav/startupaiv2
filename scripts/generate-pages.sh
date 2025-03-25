#!/bin/bash

# Script to generate service pages from template

# Define base directories
BASE_DIR="pages/services"

# Function to create a file from template if it doesn't exist
create_file_from_template() {
    local dest_dir=$(dirname "$1")
    local dest_file="$1"
    local title="$2"
    
    # Create directory if it doesn't exist
    mkdir -p "$dest_dir"
    
    # Only create the file if it doesn't exist
    if [ ! -f "$dest_file" ]; then
        echo "Creating: $dest_file"
        
        # Copy from template
        cp "pages/services/page-template.php" "$dest_file"
        
        # Replace placeholders with actual content - using a different delimiter for sed
        sed -i '' "s|SERVICE_TITLE|$title|g" "$dest_file"
        sed -i '' "s|SERVICE_DESCRIPTION|Professional $title services for businesses and startups|g" "$dest_file"
        sed -i '' "s|SERVICE_KEYWORDS|$title, services, professional, business, startup|g" "$dest_file"
        sed -i '' "s|SERVICE_BREADCRUMB|$title|g" "$dest_file"
        sed -i '' "s|SERVICE_SUBTITLE|Expert $title Solutions|g" "$dest_file"
        sed -i '' "s|SERVICE_DESCRIPTION_LONG|Our professional $title services help businesses achieve their goals through innovative solutions tailored to their specific needs.|g" "$dest_file"
    else
        echo "File already exists: $dest_file"
    fi
}

# Web Design - UI/UX Design & Prototyping
create_file_from_template "$BASE_DIR/web-design/UI-UX-Design-&-Prototyping/User-Interface-(UI)-Design.php" "User Interface Design"
create_file_from_template "$BASE_DIR/web-design/UI-UX-Design-&-Prototyping/User-Experience-(UX)-Optimization.php" "User Experience Optimization"
create_file_from_template "$BASE_DIR/web-design/UI-UX-Design-&-Prototyping/Accessibility-&-Usability-Testing.php" "Accessibility and Usability Testing"

# Web Design - Website Redesign & Revamp
create_file_from_template "$BASE_DIR/web-design/Website-Redesign-&-Revamp/Mobile-First-Design.php" "Mobile-First Design"
create_file_from_template "$BASE_DIR/web-design/Website-Redesign-&-Revamp/Speed-&-Performance-Optimization.php" "Speed and Performance Optimization"
create_file_from_template "$BASE_DIR/web-design/Website-Redesign-&-Revamp/Modernizing-Old-Websites.php" "Modernizing Old Websites"

# Web Design - Responsive & Mobile Friendly Design
create_file_from_template "$BASE_DIR/web-design/Responsive-&-Mobile-Friendly-Design/Mobile-UI-UX-Optimization.php" "Mobile UI UX Optimization"
create_file_from_template "$BASE_DIR/web-design/Responsive-&-Mobile-Friendly-Design/Cross-Browser-Compatibility.php" "Cross-Browser Compatibility"
create_file_from_template "$BASE_DIR/web-design/Responsive-&-Mobile-Friendly-Design/Adaptive-Web-Design.php" "Adaptive Web Design"

# Web Design - CMS Based Website Development
create_file_from_template "$BASE_DIR/web-design/CMS-Based-Website-Development/WordPress-Website-Design.php" "WordPress Website Design"
create_file_from_template "$BASE_DIR/web-design/CMS-Based-Website-Development/Webflow-Development.php" "Webflow Development"
create_file_from_template "$BASE_DIR/web-design/CMS-Based-Website-Development/Custom-CMS-Solutions.php" "Custom CMS Solutions"

# Web Design - Industry Specific Website Design
create_file_from_template "$BASE_DIR/web-design/Industry-Specific-Website-Design/Healthcare-Websites.php" "Healthcare Websites"
create_file_from_template "$BASE_DIR/web-design/Industry-Specific-Website-Design/Real-Estate-Websites.php" "Real Estate Websites"
create_file_from_template "$BASE_DIR/web-design/Industry-Specific-Website-Design/Finance-Websites.php" "Finance Websites"
create_file_from_template "$BASE_DIR/web-design/Industry-Specific-Website-Design/Education-Websites.php" "Education Websites"
create_file_from_template "$BASE_DIR/web-design/Industry-Specific-Website-Design/Hospitality-Websites.php" "Hospitality Websites"
create_file_from_template "$BASE_DIR/web-design/Industry-Specific-Website-Design/Legal-Websites.php" "Legal Websites"

# Web Design - E-commerce Website Design
create_file_from_template "$BASE_DIR/web-design/E-commerce-Website-Design/Shopify-Development.php" "Shopify Development"
create_file_from_template "$BASE_DIR/web-design/E-commerce-Website-Design/WooCommerce-Development.php" "WooCommerce Development"
create_file_from_template "$BASE_DIR/web-design/E-commerce-Website-Design/Custom-E-commerce-Solutions.php" "Custom E-commerce Solutions"

# Web Design - Custom Website Design
create_file_from_template "$BASE_DIR/web-design/Custom-Website-Design/Business-Websites.php" "Business Websites"
create_file_from_template "$BASE_DIR/web-design/Custom-Website-Design/Portfolio-Websites.php" "Portfolio Websites"
create_file_from_template "$BASE_DIR/web-design/Custom-Website-Design/Personal-Blogs.php" "Personal Blogs"
create_file_from_template "$BASE_DIR/web-design/Custom-Website-Design/Landing-Pages.php" "Landing Pages"

# App Development - Web Application Development
create_file_from_template "$BASE_DIR/app-development/web-application-devlopment/custom-web-apps.php" "Custom Web Apps"
create_file_from_template "$BASE_DIR/app-development/web-application-devlopment/API-Development-&-Integration.php" "API Development and Integration"
create_file_from_template "$BASE_DIR/app-development/web-application-devlopment/Progressive-Web-Apps.php" "Progressive Web Apps"
create_file_from_template "$BASE_DIR/app-development/web-application-devlopment/E-commerce-Solutions.php" "E-commerce Solutions"
create_file_from_template "$BASE_DIR/app-development/web-application-devlopment/SaaS-Development.php" "SaaS Development"

# App Development - Backend & Database
create_file_from_template "$BASE_DIR/app-development/Backend-&-Database/Database-Design-&-Management.php" "Database Design and Management"
create_file_from_template "$BASE_DIR/app-development/Backend-&-Database/DevOps-&-CI-CD.php" "DevOps and CI CD"
create_file_from_template "$BASE_DIR/app-development/Backend-&-Database/Serverless-Architecture.php" "Serverless Architecture"

# App Development - Custom Software Solutions
create_file_from_template "$BASE_DIR/app-development/Custom-Software-Solutions/AI-Powered-Applications.php" "AI-Powered Applications"
create_file_from_template "$BASE_DIR/app-development/Custom-Software-Solutions/CRM-&-ERP-Solutions.php" "CRM and ERP Solutions"
create_file_from_template "$BASE_DIR/app-development/Custom-Software-Solutions/IoT-&-Embedded-Systems.php" "IoT and Embedded Systems"

# AI Services 
create_file_from_template "$BASE_DIR/ai-services/chatbots-virtual-assistants.php" "AI Chatbots and Virtual Assistants"
create_file_from_template "$BASE_DIR/ai-services/chatbots/customer-support-bots.php" "Customer Support Bots"
create_file_from_template "$BASE_DIR/ai-services/chatbots/sales-bots.php" "Conversational Sales Bots"
create_file_from_template "$BASE_DIR/ai-services/chatbots/multilingual-bots.php" "Multilingual Chatbots"

create_file_from_template "$BASE_DIR/ai-services/business-automation.php" "AI for Business Automation"
create_file_from_template "$BASE_DIR/ai-services/business-automation/workflow-automation.php" "Workflow Automation"
create_file_from_template "$BASE_DIR/ai-services/business-automation/document-processing.php" "Document Processing"
create_file_from_template "$BASE_DIR/ai-services/business-automation/predictive-analytics.php" "Predictive Analytics"

create_file_from_template "$BASE_DIR/ai-services/natural-language-processing.php" "Natural Language Processing"
create_file_from_template "$BASE_DIR/ai-services/natural-language-processing/sentiment-analysis.php" "Sentiment Analysis"
create_file_from_template "$BASE_DIR/ai-services/natural-language-processing/text-classification.php" "Text Classification"
create_file_from_template "$BASE_DIR/ai-services/natural-language-processing/translation-services.php" "AI Translation Services"

create_file_from_template "$BASE_DIR/ai-services/machine-learning-solutions.php" "Machine Learning Solutions"
create_file_from_template "$BASE_DIR/ai-services/machine-learning/recommendation-systems.php" "Recommendation Systems"
create_file_from_template "$BASE_DIR/ai-services/machine-learning/anomaly-detection.php" "Anomaly Detection"
create_file_from_template "$BASE_DIR/ai-services/machine-learning/forecasting.php" "Predictive Forecasting"

# Digital Marketing
create_file_from_template "$BASE_DIR/digital-marketing/seo/on-page-seo.php" "On-Page SEO"
create_file_from_template "$BASE_DIR/digital-marketing/seo/off-page-seo.php" "Off-Page SEO"
create_file_from_template "$BASE_DIR/digital-marketing/seo/technical-seo.php" "Technical SEO"
create_file_from_template "$BASE_DIR/digital-marketing/seo/local-seo.php" "Local SEO"
create_file_from_template "$BASE_DIR/digital-marketing/seo/ecommerce-seo.php" "E-commerce SEO"

create_file_from_template "$BASE_DIR/digital-marketing/content-marketing/content-strategy.php" "Content Strategy"
create_file_from_template "$BASE_DIR/digital-marketing/content-marketing/blogging-services.php" "Blogging Services"
create_file_from_template "$BASE_DIR/digital-marketing/content-marketing/copywriting.php" "Copywriting"
create_file_from_template "$BASE_DIR/digital-marketing/content-marketing/video-marketing.php" "Video Marketing"

create_file_from_template "$BASE_DIR/digital-marketing/email-marketing/email-campaigns.php" "Email Campaigns"
create_file_from_template "$BASE_DIR/digital-marketing/email-marketing/newsletter-management.php" "Newsletter Management"

create_file_from_template "$BASE_DIR/digital-marketing/social-media/social-media-management.php" "Social Media Management"
create_file_from_template "$BASE_DIR/digital-marketing/social-media/social-media-advertising.php" "Social Media Advertising"
create_file_from_template "$BASE_DIR/digital-marketing/social-media/influencer-marketing.php" "Influencer Marketing"
create_file_from_template "$BASE_DIR/digital-marketing/social-media/community-management.php" "Community Management"

create_file_from_template "$BASE_DIR/digital-marketing/cro/ab-testing.php" "AB Testing"
create_file_from_template "$BASE_DIR/digital-marketing/cro/landing-page-optimization.php" "Landing Page Optimization"

create_file_from_template "$BASE_DIR/digital-marketing/reputation-management/review-management.php" "Review Management"
create_file_from_template "$BASE_DIR/digital-marketing/reputation-management/brand-monitoring.php" "Brand Monitoring"
create_file_from_template "$BASE_DIR/digital-marketing/reputation-management/crisis-management.php" "Crisis Management"

create_file_from_template "$BASE_DIR/digital-marketing/industry-specific/healthcare-marketing.php" "Healthcare Marketing"
create_file_from_template "$BASE_DIR/digital-marketing/industry-specific/real-estate-marketing.php" "Real Estate Marketing"
create_file_from_template "$BASE_DIR/digital-marketing/industry-specific/ecommerce-marketing.php" "E-commerce Marketing"

echo "All pages have been generated successfully!" 