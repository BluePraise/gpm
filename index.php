<?php
/**
 * The main template file
 *
 * @package GPM_Installatietechniek
 */

get_header();
?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8">
                    <?php
                    $hero_logo = get_field('hero_logo');
                    if ($hero_logo) : ?>
                        <img src="<?php echo esc_url($hero_logo['url']); ?>" alt="<?php echo esc_attr($hero_logo['alt']); ?>" class="hero-logo mb-4 img-fluid w-50">
                    <?php endif; ?>

                    <?php if (get_field('hero_tagline')) : ?>
                        <p class="tagline"><?php the_field('hero_tagline'); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('hero_welcome_text')) : ?>
                        <div class="lead">
                            <?php the_field('hero_welcome_text'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('hero_emphasis_text')) : ?>
                        <p class="lead">
                            <strong><?php the_field('hero_emphasis_text'); ?></strong>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="diensten">
        <div class="container">
            <h2 class="section-title text-center">
                <?php echo get_field('services_title') ? esc_html(get_field('services_title')) : 'Onze Diensten'; ?>
            </h2>

            <div class="row g-4">
                <?php
                if (have_rows('services')) :
                    while (have_rows('services')) : the_row();
                        $service_title = get_sub_field('service_title');
                        $service_description = get_sub_field('service_description');
                        $service_image = get_sub_field('service_image');
                        $service_list = get_sub_field('service_list');
                ?>
                    <div class="col-lg-6">
                        <div class="service-card">
                            <?php if ($service_image) : ?>
                                <img src="<?php echo esc_url($service_image['url']); ?>" class="card-img-top" alt="<?php echo esc_attr($service_image['alt']); ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <?php if ($service_title) : ?>
                                    <h3><?php echo esc_html($service_title); ?></h3>
                                <?php endif; ?>

                                <?php if ($service_description) : ?>
                                    <?php echo wpautop($service_description); ?>
                                <?php endif; ?>

                                <?php if ($service_list) : ?>
                                    <ul>
                                        <?php
                                        $list_items = explode("\n", $service_list);
                                        foreach ($list_items as $item) :
                                            $item = trim($item);
                                            if (!empty($item)) :
                                        ?>
                                            <li><?php echo esc_html($item); ?></li>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Werken bij GPM Section -->
    <section id="werken">
        <div class="container">
            <div class="row g-4">
                <?php
                if (have_rows('careers')) :
                    while (have_rows('careers')) : the_row();
                        $career_title = get_sub_field('career_title');
                        $career_content = get_sub_field('career_content');
                        $career_image = get_sub_field('career_image');
                        $is_stage_block = get_sub_field('is_stage_block');
                ?>
                    <div class="col-lg-6">
                        <div class="content-block<?php echo $is_stage_block ? ' stage' : ''; ?>">
                            <?php if ($career_title) : ?>
                                <h2><?php echo esc_html($career_title); ?></h2>
                            <?php endif; ?>

                            <?php if ($career_content) : ?>
                                <?php echo wpautop($career_content); ?>
                            <?php endif; ?>

                            <?php if ($career_image) : ?>
                                <img src="<?php echo esc_url($career_image['url']); ?>" alt="<?php echo esc_attr($career_image['alt']); ?>" class="certificate-badge">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title text-center">
                <?php echo get_field('contact_title') ? esc_html(get_field('contact_title')) : 'Contact'; ?>
            </h2>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <h3><?php _e('Adres', 'gpm-installatietechniek'); ?></h3>
                        <?php if (get_field('contact_company_name')) : ?>
                            <p><?php the_field('contact_company_name'); ?></p>
                        <?php endif; ?>

                        <?php if (get_field('contact_street')) : ?>
                            <p><?php the_field('contact_street'); ?></p>
                        <?php endif; ?>

                        <?php if (get_field('contact_city')) : ?>
                            <p><?php the_field('contact_city'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <h3><?php _e('Contact', 'gpm-installatietechniek'); ?></h3>
                        <?php if (get_field('contact_phone')) : ?>
                            <p>
                                <span><?php _e('Telefoon:', 'gpm-installatietechniek'); ?></span>
                                <a href="tel:<?php echo esc_attr(str_replace([' ', '-'], '', get_field('contact_phone'))); ?>"><?php the_field('contact_phone'); ?></a>
                            </p>
                        <?php endif; ?>

                        <?php if (get_field('contact_email')) : ?>
                            <p>
                                <span><?php _e('E-mail:', 'gpm-installatietechniek'); ?></span>
                                <a href="mailto:<?php echo esc_attr(get_field('contact_email')); ?>"><?php the_field('contact_email'); ?></a>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
