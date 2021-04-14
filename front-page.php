<?php 
/**
*Template Name: Homepage
*/

get_header(); ?>
<main class="page-content">
<div class="hero">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-installatie.jpg" alt="Logo GPM Installatietechniek">
</div>
<div class="services">
    <h2>Wat doen wij?</h2>
    <p>Welkom op onze website. GPM bouw en techniek, voor bouwen, verbouwen en renoveren van kleine en middelgrote projecten. 
Wij maken graag mooie dingen. Ontzorgen van onze klanten, dat is wat wij belangrijk vinden. 
Op deze website kunt u nader kennismaken met onze diensten. Mocht u behoefte hebben aan meer informatie, neem dan contact met ons op. 
Graag bespreken wij uw wensen en onze mogelijkheden. 
</p>
</div>
<div class="contact-block">
    <h2> <i data-feather="edit-2"></i><span>Contact Ons</span></h2>
    <ul>
        <li><i data-feather="phone"></i><a href="tel:+31 26 213 47 58">+31 26 213 47 58</a></li>
        <li><i data-feather="mail"></i><a href="mailto:info@gpminstallatietechniek.nl" target="_blank" rel="noopener">info@gpminstallatietechniek.nl</a></li>
        <li><i data-feather="home"></i><a href="https://maps.google.com/?q=Snelliusweg+30&amp;entry=gmail&amp;source=g">Snelliusweg 30-38 6827 DH Arnhem</a></li>
        
    </ul>
</div>
<div class="usp">
    <ul>
        <li>
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/service-icon.png">
            <span>Service</span>
        </li>
        <li><img src="<?php echo get_stylesheet_directory_uri();?>/img/veiligheid-icon.png">
            <span>100% Veiligheid</span></li>
        <li><img src="<?php echo get_stylesheet_directory_uri();?>/img/vakmensen-icon.png">
            <span>Vakmensen</span></li>
        <li><img src="<?php echo get_stylesheet_directory_uri();?>/img/contact-icon.png">
            <span>Snel Contact</span></li>
    </ul>
</div>

</main>
<?php  get_footer(); ?>