<?php
// Template Name: Homepage
?>

<?php get_header(); ?>
<div class="hero" style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%), url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/banner.jpg') 50% 50% / cover no-repeat">
    <div class="hero__content">
        <h1 class="hero__title">
            <span>Hello</span>
            <span>I'm <span>Daniel Reeves</span></span>
            <span>A <span>Front-end</span> Web Developer</span>
        </h1>
        <ul class="social">
            <li class="social__item"><a href="#" target="_blank" title="" data-fa-icon="&#xf0e1"></a></li>
            <li class="social__item"><a href="#" target="_blank" title="" data-fa-icon="&#xf099"></a></li>
            <li class="social__item"><a href="#" target="_blank" title="" data-fa-icon="&#xf09b"></a></li>
        </ul>
        <a href="#" class="button"><span>Get in Touch</span></a>
    </div>
    <div class="hero__scroll">
        <div class="icon"></div>
    </div>
</div>
<?php get_footer(); ?>