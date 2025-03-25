        // FAQ Toggle Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', function() {
                    // Toggle active class on the clicked item
                    item.classList.toggle('active');
                    
                    // Close other items (optional - for accordion behavior)
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                });
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Service Tab Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const serviceTabs = document.querySelectorAll('.service-tab');
            
            serviceTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    serviceTabs.forEach(t => t.classList.remove('active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    
                    // Hide all service content
                    document.querySelectorAll('.service-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    
                    // Show selected service content
                    const targetId = this.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                });
            });
        });

        // Alert Close Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const closeButtons = document.querySelectorAll('.close-btn');
            
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const alert = this.closest('.alert');
                    alert.style.display = 'none';
                });
            });
        });
    