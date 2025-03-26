# Guide to Update all PHP Files in the ai-services Directory

## Overview

This guide explains how to update all the PHP files in the `pages/services/ai-services` directory to replace Bootstrap CSS classes with our custom CSS classes, following the pattern established in the files we've already updated (data-processing.php, workflow-automation.php, and custom-chatbot-development.php).

## Class Replacements Reference

Use this table as a reference for replacing Bootstrap classes with our custom classes:

| Bootstrap Class | Custom CSS Class |
|-----------------|-----------------|
| `container` | `content-container` |
| `row` | Use one of: `header-grid`, `overview-grid`, `services-grid`, `process-grid`, `benefits-grid`, etc. based on section |
| `col-*` | `page-header-content`, `page-header-image`, `service-item`, `process-item`, etc. based on context |
| `card` | `service-card`, `process-card`, `benefit-card`, etc. based on context |
| `py-5`, `my-4`, etc. | Remove these utility classes; spacing is handled by our custom classes |
| `btn btn-primary` | `get-started-btn` |
| `btn btn-light btn-lg` | `cta-btn` |
| `text-center`, `text-primary`, etc. | Remove these utility classes; styling is handled by our custom classes |
| `img-fluid` | `animate-float` for header images, or remove for others |
| `fa-*x` | Remove size classes; sizes are handled by our custom CSS |
| `mb-*`, `mt-*`, etc. | Remove margin utility classes; spacing is handled by our custom classes |
| `h-100`, `p-4` | Remove these utility classes; spacing is handled by our custom classes |

## Section Structure Replacements

For each major section type, use these patterns:

### Page Header

```html
<!-- Page Header -->
<section class="page-header">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content" data-aos="fade-right">
                <h1><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <a href="/pages/contact.php" class="get-started-btn">Get Started</a>
            </div>
            <div class="page-header-image" data-aos="fade-left">
                <img src="/assets/images/services/your-image.svg" alt="<?php echo $serviceName; ?>" class="animate-float">
            </div>
        </div>
    </div>
</section>
```

### Service Overview

```html
<!-- Service Overview -->
<section class="service-overview">
    <div class="content-container">
        <div class="section-header">
            <div class="service-overview-header" data-aos="fade-up">
                <h2>Your Section Title</h2>
                <p class="lead">Your section description</p>
            </div>
        </div>
        
        <div class="overview-grid">
            <div class="service-overview-content" data-aos="fade-up">
                <h3>First Column Heading</h3>
                <p>First column content...</p>
            </div>
            <div class="service-overview-content" data-aos="fade-up" data-aos-delay="100">
                <h3>Second Column Heading</h3>
                <p>Second column content...</p>
            </div>
        </div>
    </div>
</section>
```

### Services Section

```html
<!-- Services Section -->
<section class="services-section">
    <div class="content-container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Services</h2>
                <p class="lead">Description of services</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-icon-name"></i>
                    </div>
                    <h3>Service Title</h3>
                    <p>Service description...</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Feature one</li>
                        <li><i class="fas fa-check"></i> Feature two</li>
                        <li><i class="fas fa-check"></i> Feature three</li>
                        <li><i class="fas fa-check"></i> Feature four</li>
                    </ul>
                </div>
            </div>
            
            <!-- Repeat for each service item -->
        </div>
    </div>
</section>
```

### Process Section

```html
<!-- Implementation Process -->
<section class="implementation-process">
    <div class="content-container">
        <div class="section-header">
            <div class="implementation-header" data-aos="fade-up">
                <h2>Our Process</h2>
                <p class="lead">Process description</p>
            </div>
        </div>
        
        <div class="process-grid">
            <div class="process-item" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon">
                        <span>1</span>
                    </div>
                    <h3>Step One Title</h3>
                    <p>Step one description...</p>
                </div>
            </div>
            
            <!-- Repeat for each process step -->
        </div>
    </div>
</section>
```

### Benefits Section

```html
<!-- Benefits Section -->
<section class="benefits-section">
    <div class="content-container">
        <div class="section-header">
            <div class="benefits-header" data-aos="fade-up">
                <h2>Benefits</h2>
                <p class="lead">Description of benefits</p>
            </div>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-item" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-icon-name"></i>
                    </div>
                    <h3>Benefit Title</h3>
                    <p>Benefit description...</p>
                </div>
            </div>
            
            <!-- Repeat for each benefit -->
        </div>
    </div>
</section>
```

### CTA Section

```html
<!-- CTA Section -->
<section class="cta-section">
    <div class="content-container">
        <div class="cta-content">
            <h2>Your CTA Heading</h2>
            <p class="lead">Your CTA description</p>
            <a href="/pages/contact.php" class="cta-btn">Your CTA Button Text</a>
        </div>
    </div>
</section>
```

### FAQ Section

```html
<!-- FAQ Section -->
<section class="faq-section">
    <div class="content-container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about our service</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>First Question?</h3>
                    <button class="toggle-btn"><span class="icon"></span></button>
                </div>
                <div class="faq-answer">
                    <p>Answer to the first question...</p>
                </div>
            </div>
            
            <!-- Repeat for each FAQ item -->
        </div>
    </div>
</section>
```

## Step-by-Step Process for Each File

1. **Identify the sections in the file**
   - Look for HTML comment blocks that identify each section (e.g., `<!-- Page Header -->`)
   - Identify the structure and purpose of each section

2. **Update the section class**
   - Replace generic Bootstrap section classes like `py-5` or `bg-light` with our semantic section classes like `page-header`, `service-overview`, etc.

3. **Update the container and grid structure**
   - Replace `container` with `content-container`
   - Replace `row` with the appropriate grid class based on the section context
   - Replace column classes (`col-*`) with the appropriate item classes based on the section context

4. **Update card elements**
   - Replace Bootstrap card classes like `card`, `card-body`, etc. with our own card classes specific to the content
   - Remove utility classes like `h-100`, `p-4`, etc.

5. **Update button styles**
   - Replace `btn btn-primary` with `get-started-btn`
   - Replace `btn btn-light btn-lg` with `cta-btn`

6. **Update icons and decorative elements**
   - Remove size classes from icons (e.g., `fa-2x`, `fa-3x`)
   - Remove color utility classes like `text-primary`

7. **Remove spacing utility classes**
   - Remove all margin and padding utilities (e.g., `mt-3`, `mb-4`, `py-5`)
   - Our custom CSS already handles appropriate spacing

8. **Add appropriate animation classes**
   - Add `animate-float` to header images
   - Keep existing AOS animation attributes

## Example Files for Reference

Study these files as reference implementations:
- `pages/services/ai-services/business-automation/data-processing.php`
- `pages/services/ai-services/business-automation/workflow-automation.php`
- `pages/services/ai-services/chatbots/custom-chatbot-development.php`

## Testing Process

After updating each file:

1. Open the file in a web browser
2. Check that all layouts and styles are correctly applied
3. Verify that all interactive elements work properly
4. Test on different screen sizes to ensure responsive behavior

## Common Issues to Watch For

- Missing closing tags
- Improper nesting of elements
- Extra or missing grid items
- Missing icons or content
- Inconsistent naming of CSS classes 