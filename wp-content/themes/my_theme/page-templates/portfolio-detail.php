<?php
// Template Name: Portfolio Detail
?>
<?php get_header(); ?>
<div class="spacer"></div>
<div class="container">
    <?php get_template_part('template-parts/breadcrumbs', 'page') ?>
</div>
<main class="project">
    <section class="project__section">
        <div class="container">
            <h1 class="title"><?=the_title();?></h1>
            <div class="project__inner">
                <div class="project__featured-image">
                    <img src="<?=get_stylesheet_directory_uri()?>/src/images/placeholder/project-detail.jpg" alt="">
                </div>
                <div class="project__content">
                    <div class="dynamic">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
                <div class="project__sidebar">
                    <div class="project__sidebar-block">
                        <div class="project__heading">Client</div>
                        <p data-fa-icon="&#xf007">Daniel Reeves</p>
                    </div>
                    <div class="project__sidebar-block">
                        <div class="project__heading">Industry</div>
                        <p data-fa-icon="&#xf275">Social Media & Charity</p>

                    </div>
                    <div class="project__sidebar-block">
                        <div class="project__heading">Services</div>
                        <div data-fa-icon="&#xf304" class="project__services">
                            <a href="#">Design,</a>
                            <a href="#">Development,</a>
                            <a href="#">Hosting</a>
                        </div>

                    </div>
                    <div class="project__sidebar-block">
                        <div class="project__heading">Website</div>
                        <p data-fa-icon="&#xf0c1"><a href="#">www.Lennyandpals.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project__section project__section--padding-t-b">
        <div class="container">
            <ul class="project__types">
                <li id="desktop-button" class="project__type active">
                    <div class="icon">
                        <?=file_get_contents(get_stylesheet_directory_uri() . '/src/images/desktop-icon.svg')?>
                    </div>
                </li>
                <li id="tablet-button" class="project__type">
                    <div class="icon">
                        <?=file_get_contents(get_stylesheet_directory_uri() . '/src/images/tablet-icon.svg')?>
                    </div>
                </li>
                <li id="mobile-button" class="project__type">
                    <div class="icon">
                        <?=file_get_contents(get_stylesheet_directory_uri() . '/src/images/phone-icon.svg')?>
                    </div>
                </li>
            </ul>
            <div class="project__examples">
                <div id="desktop-block" class="project__example project__example--desktop active">
                    <div class="desktop-bar">
                        <ul class="icons">
                            <li class="icon">
                                <span></span>
                            </li>
                            <li class="icon"></li>
                            <li class="icon"></li>
                        </ul>
                    </div>
                    <div id="desktop" class="inner">
                        <img src="<?=get_stylesheet_directory_uri()?>/src/images/desktop.jpg" alt="">
                    </div>
                </div>
                <div id="tablet-block" class="project__example project__example--tablet">
                    <div class="tablet-wrapper">
                        <div id="tablet" class="tablet">
                            <img src="<?=get_stylesheet_directory_uri()?>/src/images/tablet.jpg" alt="">
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
                <div id="mobile-block" class="project__example project__example--mobile">
                    <div class="phone-wrapper">
                        <div id="mobile" class="phone">
                            <img src="<?=get_stylesheet_directory_uri()?>/src/images/mobile.jpg" alt="">
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project__section project__section--padding" style="background: linear-gradient(230deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/review-bg.jpg') 50% 50% / cover no-repeat">
        <div class="container">
            <div class="site-slider site-slider__reviews">
                <div class="swiper-wrapper">
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
                    <div class="swiper-slide">
                        <div class="review">
                            <div class="review__icon">
                                <img src="<?=get_stylesheet_directory_uri()?>/src/images/quote-icon.svg" alt="">
                            </div>
                            <div class="review__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at aut consequuntur obcaecati sunt. Ab accusamus, aliquam at, consequatur dolor excepturi ipsum maxime molestiae placeat quia quisquam quo sed veritatis.
                                </p>
                            </div>
                            <div class="review__name">This is a company name</div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <section class="project__section project__section--padding project__section--gradient">
        <div class="container">
            <h3 class="title">Need A Website <br> Get In Touch</h3>
            <div class="home__text home__text--center dynamic">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <?php get_template_part('template-parts/contact-form', 'page') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
