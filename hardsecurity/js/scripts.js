/**
 * HardSecurity Theme Scripts
 */

jQuery(document).ready(function($) {
    
    // Smooth scroll for anchor links
    $('a[href*="#"]').not('[href="#"]').on('click', function(e) {
        var target = $(this.hash);
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800, 'easeInOutQuad');
        }
    });
    
    // Navbar scroll effect
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
    
    // Add animation class on scroll
    $('.animate-on-scroll').each(function() {
        var $this = $(this);
        var delay = $this.data('delay') || 0;
        
        $(window).on('scroll', function() {
            var offset = $this.offset().top - $(window).height() + 100;
            if ($(window).scrollTop() > offset) {
                setTimeout(function() {
                    $this.addClass('visible');
                }, delay);
            }
        });
    });
    
    // Contact form validation
    $('.contact-form').on('submit', function(e) {
        var required = $(this).find('[required]');
        var valid = true;
        
        required.each(function() {
            if (!$(this).val()) {
                valid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        
        if (!valid) {
            e.preventDefault();
            alert('Proszę wypełnić wszystkie wymagane pola.');
        }
    });
    
    // Service cards hover effect
    $('.service-card').hover(
        function() {
            $(this).find('.service-icon').addClass('animate');
        },
        function() {
            $(this).find('.service-icon').removeClass('animate');
        }
    );
    
    // Mobile menu toggle
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active');
        $('.nav-menu').slideToggle();
    });
    
    // Counter animation for stats
    $('.stat-value').each(function() {
        var $this = $(this);
        var countTo = $this.attr('data-count');
        
        $({ countNum: 0 }).animate({
            countNum: countTo
        }, {
            duration: 2000,
            easing: 'linear',
            step: function() {
                $this.text(Math.floor(this.countNum));
            }
        });
    });
});

(function() {
    'use strict';
    
    // Service Worker registration for PWA features
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                console.log('ServiceWorker registration successful');
            }, function(err) {
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }
})();