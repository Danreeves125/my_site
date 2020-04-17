<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri()?>/dist/css/app.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-page="<?=get_post_field( 'post_name' );?>">
<?php ?>
    <?php get_template_part('template-parts/mobile-menu')?>
    <button class="hamburger" aria-label="Open Mobile Menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
    <header class="header <?=(get_post_field( 'post_name' ) != 'home') ? 'header--state2' : ''?>">
        <div class="container">
            <a href="#" class="header__logo">
                Daniel Reeves<span>.</span>
            </a>
            <nav class="header__navigation" role="navigation" aria-label="Main Nav">
                <ul class="header__nav">
                    <li class="header__nav-item"><a data-scroll href="#about" title="About Me">About Me</a></li>
                    <li class="header__nav-item"><a data-scroll href="#portfolio" title="Portfolio">Portfolio</a></li>
                    <li class="header__nav-item"><a data-scroll href="#blog" title="Blog">Blog</a></li>
                    <li class="header__nav-item"><a data-scroll href="#contact" title="Contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
