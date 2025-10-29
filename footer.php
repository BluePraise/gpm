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

    <?php wp_footer(); ?>
</body>
</html>
