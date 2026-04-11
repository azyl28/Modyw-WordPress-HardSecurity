// Navigation scripts
jQuery(document).ready(function($) {
    'use strict';
    
    // Mobile menu toggle
    $('#menu-toggle').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('#primary-menu').toggleClass('active');
    });
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        
        var target = $(this).attr('href');
        var $target = $(target);
        
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing', function() {
            window.location.hash = target;
        });
    });
    
    // Sticky header
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('.site-header').addClass('sticky');
        } else {
            $('.site-header').removeClass('sticky');
        }
    });
    
    // Accessibility improvements
    $('.menu-toggle').on('click', function() {
        var $menu = $('#primary-menu');
        var isExpanded = $menu.is(':visible');
        
        $(this).attr('aria-expanded', !isExpanded);
    });
});