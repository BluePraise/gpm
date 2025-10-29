<?php
/**
 * The header for GPM Installatietechniek theme
 *
 * @package GPM_Installatietechniek
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="100" data-bs-smooth-scroll="true">
<?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav id="navbar-scrollspy" class="navbar navbar-expand-lg sticky-top">
        <div class="container ps-0 ps-sm-3">
            <a class="logo-container" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <!-- Logo placeholder -->
                <?php endif; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'gpm-installatietechniek'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'navbar-nav ms-auto',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'          => 2,
                    'walker'         => new class extends Walker_Nav_Menu {
                        function start_lvl(&$output, $depth = 0, $args = null) {
                            $output .= '<ul class="dropdown-menu">';
                        }
                        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                            $classes = empty($item->classes) ? array() : (array) $item->classes;
                            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
                            $class_names = $class_names ? ' class="nav-item ' . esc_attr($class_names) . '"' : ' class="nav-item"';

                            $output .= '<li' . $class_names . '>';

                            $atts = array();
                            $atts['href'] = !empty($item->url) ? $item->url : '';
                            $atts['class'] = 'nav-link';

                            $attributes = '';
                            foreach ($atts as $attr => $value) {
                                if (!empty($value)) {
                                    $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                                    $attributes .= ' ' . $attr . '="' . $value . '"';
                                }
                            }

                            $item_output = $args->before;
                            $item_output .= '<a' . $attributes . '>';
                            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
                            $item_output .= '</a>';
                            $item_output .= $args->after;

                            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
                        }
                    }
                ));
                ?>
            </div>
        </div>
    </nav>
