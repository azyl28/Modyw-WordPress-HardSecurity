// Main JavaScript for Hardsecurity theme
jQuery(document).ready(function($) {
    'use strict';
    
    // Animate elements on scroll
    $(window).on('scroll', function() {
        var scrolled = $(this).scrollTop();
        var windowHeight = $(this).height();
        
        $('.animate-on-scroll').each(function() {
            var $this = $(this);
            var offset = $this.offset().top;
            var threshold = windowHeight - 100;
            
            if (offset < scrolled + threshold) {
                $this.addClass('animated');
            }
        });
    });
    
    // Counter animation
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    
    // Testimonials carousel
    $('.testimonials-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    // Partners carousel
    $('.partners-carousel').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });
    
    // Smooth scroll to top
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 500) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });
    
    $('.scroll-to-top').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 800);
    });
    
    // Form validation
    $('form').on('submit', function(e) {
        var $form = $(this);
        var isValid = true;
        
        $form.find('input[required], textarea[required]').each(function() {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            $form.prepend('<div class="alert alert-error">Please fill in all required fields.</div>');
        }
    });
    
    // Remove error class on input focus
    $('input, textarea').on('focus', function() {
        $(this).removeClass('error');
        $(this).closest('form').find('.alert-error').remove();
    });
});