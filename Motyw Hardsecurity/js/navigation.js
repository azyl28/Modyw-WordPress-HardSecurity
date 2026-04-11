// Navigation scripts
jQuery(document).ready(function($) {
    'use strict';
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        
        var target = $(this).attr('href');
        if (target === '#') return;
        
        var $target = $(target);
        if ($target.length) {
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 80
            }, 800, 'swing');
        }
    });
    
    // Sticky navbar
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
    
    // Pricing tabs
    $('.pricing-tab').on('click', function() {
        var target = $(this).data('tab');
        
        $('.pricing-tab').removeClass('active');
        $(this).addClass('active');
        
        $('.pricing-panel').removeClass('active');
        $('#' + target).addClass('active');
    });
    
    // Animation on scroll
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.animate-on-scroll').forEach(function(el) {
        observer.observe(el);
    });
});