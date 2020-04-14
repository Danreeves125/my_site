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
            <div class="home__inner">
                <div class="home__content">
                    <img src="<?=get_stylesheet_directory_uri()?>/src/images/placeholder/image-coming-soon.jpg" alt="Image Comming Soon">
                    <div class="home__text">
                        <div class="dynamic">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad animi cupiditate delectus deserunt distinctio doloremque dolorum esse in inventore ipsa nostrum numquam, odit quaerat quam quis reprehenderit veniam voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi dicta eos, expedita illo, iure, nemo optio quia repudiandae sapiente ullam vel. Amet autem dolorem illum neque, tempora veritatis voluptates?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores delectus dolore doloribus, dolorum ea eaque eius esse, est facere fugiat nemo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores delectus dolore doloribus, dolorum ea eaque eius esse, est facere fugiat nemo.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores delectus dolore doloribus, dolorum ea eaque eius esse, est facere fugiat nemo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores delectus dolore doloribus, dolorum ea eaque eius esse, est facere fugiat nemo.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores delectus dolore doloribus, dolorum ea eaque eius esse, est facere fugiat nemo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores delectus dolore doloribus, dolorum ea eaque eius esse, est facere fugiat nemo.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores delectus dolore doloribus, dolorum ea eaque eius esse, est facere fugiat nemo, omnis perspiciatis quasi quis sed suscipit ullam. Totam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam aliquid assumenda, culpa cumque eos, excepturi expedita illum ipsum laborum mollitia obcaecati odio, officia quisquam ratione sint suscipit tenetur voluptates
                            </p>
                        </div>
                    </div>
                </div>
                <div class="home__sidebar">
                    <ul class="home__options">
                        <li class="home__option">
                            <div class="home__option-title">Length</div>
                            <div class="checkbox">
                                <input id="short" type="radio" class="checkbox__input checkbox__input--radio" name="length">
                                <label for="short" class="checkbox__label">Short</label>
                            </div>
                            <div class="checkbox">
                                <input id="medium" type="radio" class="checkbox__input checkbox__input--radio" name="length" checked>
                                <label for="medium" class="checkbox__label">Medium</label>
                            </div>
                            <div class="checkbox checkbox--no-m">
                                <input id="long" type="radio" class="checkbox__input checkbox__input--radio" name="length">
                                <label for="long" class="checkbox__label">Long</label>
                            </div>
                        </li>
                        <li class="home__option">
                            <div class="home__option-title home__option-title--violet">Style</div>
                            <div class="checkbox">
                                <input id="first-person" type="radio" class="checkbox__input checkbox__input--radio" name="style" checked>
                                <label for="first-person" class="checkbox__label">First Person</label>
                            </div>
                            <div class="checkbox">
                                <input id="third-person" type="radio" class="checkbox__input checkbox__input--radio" name="style">
                                <label for="third-person" class="checkbox__label">Third Person</label>
                            </div>
                        </li>
                        <li class="home__option">
                            <div class="home__option-title home__option-title--blue">Code</div>
                            <div class="checkbox">
                                <input id="rendered" type="radio" class="checkbox__input checkbox__input--radio" name="code" checked>
                                <label for="rendered" class="checkbox__label">Rendered</label>
                            </div>
                            <div class="checkbox">
                                <input id="html" type="radio" class="checkbox__input checkbox__input--radio" name="code">
                                <label for="html" class="checkbox__label">HTML</label>
                            </div>
                            <div class="checkbox checkbox--no-m">
                                <input id="markdown" type="radio" class="checkbox__input checkbox__input--radio" name="code">
                                <label for="markdown" class="checkbox__label">Markdown</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="home__section home__section--gradient">
        <div class="container">
            <h2 class="title title--white">Skills and Interests</h2>
            <div class="home__blocks">
                <div class="home__block">
                    <div class="home__block-title">Core</div>
                    <ul class="home__block-list">
                        <li>HTML</li>
                        <li>CSS / SASS</li>
                        <li>Javascript</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>Mobile / Responsive Design</li>
                        <li>UX / UI Design</li>
                    </ul>
                </div>
                <div class="home__block">
                    <div class="home__block-title home__block-title--neon">Librairies</div>
                    <ul class="home__block-list">
                        <li>Gulp</li>
                        <li>Wordpress</li>
                        <li>Foundation, Bootstrap, Materialize</li>
                        <li>Jquery</li>
                        <li>Greensock, Scroll Magic</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="cta">
        <div class="container">
            <div class="cta__text">
                <p>Need A Website?</p>
                <span>Got a website idea or need a update to an existing site?</span>
            </div>
            <div class="cta__button">
                <a href="#" class="button button--white-outline">Get In Touch</a>
            </div>
        </div>
    </div>
    <section class="home__section home__section--project">
        <img src="<?=get_stylesheet_directory_uri()?>/src/images/about-bg.jpg" alt="" class="home__code-bg">
        <div class="container">
            <h2 class="title">Portfolio</h2>
            <div class="site-slider site-slider__portfolio">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="#" class="project__item">
                                <div class="project__image">
                                    <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/project-placeholder.jpg') 50% 50% / cover no-repeat"></div>
                                </div>
                                <span class="project__title">Lenny and pals</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="project__item">
                                <div class="project__image">
                                    <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/image-coming-soon.jpg') 50% 50% / cover no-repeat"></div>
                                </div>
                                <span class="project__title">Project Title To Go Here</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="project__item">
                                <div class="project__image">
                                    <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/image-coming-soon.jpg') 50% 50% / cover no-repeat"></div>
                                </div>
                                <span class="project__title">Lenny and pals</span>
                            </a>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                </div>
            </div>
            <a href="#" class="button"><span>View More</span></a>
        </div>
    </section>
    <section class="home__section" style="background: linear-gradient(230deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/review-bg.jpg') 50% 50% / cover no-repeat">
        <div class="container">
            <div class="site-slider site-slider__reviews">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i < 3; $i++) : ?>
                    <div class="swiper-slide">
                        <div class="review">
                            <div class="review__icon">
                                <img src="<?=get_stylesheet_directory_uri()?>/src/images/quote-icon.svg" alt="">
                            </div>
                            <div class="review__text">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the
                                </p>
                            </div>
                            <div class="review__name">Lennyandpals</div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>

                <div class="swiper-pagination"></div>

            </div>
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