// Navigation and Animation scripts
(function() {
    'use strict';
    
    document.addEventListener('DOMContentLoaded', function() {
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                var targetId = this.getAttribute('href');
                if (targetId === '#' || targetId === '') return;
                
                var target = document.querySelector(targetId);
                if (target) {
                    var offset = 80;
                    var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Navbar scroll effect
        var navbar = document.querySelector('.navbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }
        
        // Pricing tabs
        document.querySelectorAll('.pricing-tab').forEach(function(tab) {
            tab.addEventListener('click', function() {
                var target = this.getAttribute('data-tab');
                
                document.querySelectorAll('.pricing-tab').forEach(function(t) {
                    t.classList.remove('active');
                });
                this.classList.add('active');
                
                document.querySelectorAll('.pricing-panel').forEach(function(p) {
                    p.classList.remove('active');
                });
                var panel = document.getElementById(target);
                if (panel) {
                    panel.classList.add('active');
                }
            });
        });
        
        // Animation on scroll using IntersectionObserver
        var animationObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { 
            threshold: 0.1, 
            rootMargin: '0px 0px -50px 0px' 
        });
        
        document.querySelectorAll('.animate-on-scroll').forEach(function(el) {
            animationObserver.observe(el);
        });
        
        // Nav CTA buttons also trigger contact scroll
        document.querySelectorAll('.nav-cta').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                var target = document.querySelector('#contact');
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Primary buttons scroll to contact
        document.querySelectorAll('.btn-primary').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                var href = btn.getAttribute('href');
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    var target = document.querySelector(href);
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        // Secondary buttons scroll to pricing
        document.querySelectorAll('.btn-secondary').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                var href = btn.getAttribute('href');
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    var target = document.querySelector(href);
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    });
})();