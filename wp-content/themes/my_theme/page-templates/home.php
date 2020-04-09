<?php
// Template Name: Homepage
?>

<?php get_header(); ?>
<main class="home">
    <section role="banner" class="hero" style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%), url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/banner.jpg') 50% 50% / cover no-repeat">
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
    </section>
    <section class="home__section home__section--p30 home__section--grey">
        <div class="container">
            <div class="home__stats">
                <div class="home__stat">
                    <div class="content">
                        <div class="icon" data-fa-icon="&#xf7b6"></div>
                        <p>26 Cups of <br>coffee</p>
                    </div>
                </div>
                <div class="home__stat">
                    <div class="content">
                        <div class="icon" data-fa-icon="&#xf38b"></div>
                        <p>14 Hours of <br>CSS written</p>
                    </div>
                </div>
                <div class="home__stat">
                    <div class="content">
                        <div class="icon" data-fa-icon="&#xf0a3"></div>
                        <p>4 Years of <br>experience</p>
                    </div>
                </div>
                <div class="home__stat">
                    <div class="content">
                        <div class="icon" data-fa-icon="&#xf13b"></div>
                        <p>6 Hours of <br>HTML written</p>
                    </div>
                </div>
                <div class="home__stat">
                    <div class="content">
                        <div class="icon" data-fa-icon="&#xf121"></div>
                        <p>2000 Lines of <br>code</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__section">
        <img src="<?=get_stylesheet_directory_uri()?>/src/images/about-bg.jpg" alt="" class="home__code-bg">
        <div class="container">
            <h2 class="title">About Me</h2>
        </div>
    </section>
    <section class="home__section home__section--gradient">
        <div class="container">
            <h2 class="title title--white">Skills and Interests</h2>
        </div>
    </section>
    <section class="home__section">
        <img src="<?=get_stylesheet_directory_uri()?>/src/images/about-bg.jpg" alt="" class="home__code-bg">
        <div class="container">
            <h2 class="title">Portfolio</h2>
        </div>
    </section>
    <section class="home__section">
        <img src="<?=get_stylesheet_directory_uri()?>/src/images/about-bg.jpg" alt="" class="home__code-bg">
        <div class="container">
            <h2 class="title">Latest Blogs</h2>
        </div>
    </section>
    <section class="home__section home__section--grey-gradient">
        <img src="<?=get_stylesheet_directory_uri()?>/src/images/about-bg.jpg" alt="" class="home__code-bg">
        <div class="container">
            <h2 class="title">Get In Touch</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </section>
</main>
<?php get_footer(); ?>