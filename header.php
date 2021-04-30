<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php if ( is_single() ) : ?>
			<meta name="description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
		<?php endif; ?>
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon" /><link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;900&family=Raleway:wght@200;600;900&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/a214b22300f3656fb3ad76337/6dfbd0aa9b3c8e4c8f93fa98a.js");</script>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		

<header>
	<div class="d-inline-block top-bar-item"><i class="d-inline-block" data-feather="phone"></i><a class="d-inline-block" href="tel:+31 26 213 47 58">+31 26 213 47 58</a></div>
	<div class="d-inline-block top-bar-item"><li><i class="d-inline-block" data-feather="mail"></i><a class="d-inline-block" href="mailto:info@gpminstallatietechniek.nl" target="_blank" rel="noopener">info@gpminstallatietechniek.nl</a></li></div>
</header>