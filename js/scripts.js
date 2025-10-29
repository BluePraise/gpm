/**
 * GPM Installatietechniek Theme Scripts
 */

(function() {
    'use strict';

    // Update copyright year in footer
    document.addEventListener('DOMContentLoaded', function() {
        const currentYear = new Date().getFullYear();
        const copyrightElement = document.querySelector('.copyright-year');
        if (copyrightElement) {
            copyrightElement.textContent = currentYear;
        }

        // Initialize ScrollSpy
        initScrollSpy();

        // Initialize Back to Top button
        initBackToTop();
    });

    /**
     * Initialize Bootstrap ScrollSpy
     */
    function initScrollSpy() {
        const dataSpyList = document.querySelectorAll('[data-bs-spy="scroll"]');
        dataSpyList.forEach(function(dataSpyEl) {
            bootstrap.ScrollSpy.getOrCreateInstance(dataSpyEl);
        });
    }

    /**
     * Initialize Back to Top Button
     */
    function initBackToTop() {
        const backToTopButton = document.getElementById('backToTop');

        if (!backToTopButton) {
            return;
        }

        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });

        // Smooth scroll to top on click
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

})();
