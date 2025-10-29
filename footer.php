<?php
/**
 * The footer for GPM Installatietechniek theme
 *
 * @package GPM_Installatietechniek
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <span class="copyright-year"><?php echo date('Y'); ?></span> <?php bloginfo('name'); ?>. <?php _e('Alle rechten voorbehouden.', 'gpm-installatietechniek'); ?></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <?php
                    $contact_address = get_field('contact_address', 'option');
                    $contact_phone = get_field('contact_phone', 'option');

                    if (!$contact_address) {
                        $contact_address = 'Snelliusweg 30-38, 6827 DH Arnhem';
                    }
                    if (!$contact_phone) {
                        $contact_phone = '026-213 47 58';
                    }
                    ?>
                    <p><?php echo esc_html($contact_address); ?> | <a href="tel:<?php echo esc_attr(str_replace([' ', '-'], '', $contact_phone)); ?>"><?php echo esc_html($contact_phone); ?></a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" aria-label="<?php esc_attr_e('Terug naar boven', 'gpm-installatietechniek'); ?>" title="<?php esc_attr_e('Terug naar boven', 'gpm-installatietechniek'); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <?php wp_footer(); ?>
</body>
</html>
