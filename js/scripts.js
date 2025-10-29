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
    });

})();
