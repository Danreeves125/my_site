<?php
// Template Name: Portfolio
?>
<?php get_header(); ?>
<div class="spacer"></div>
<?php get_template_part('template-parts/breadcrumbs', 'page') ?>
<main class="project">
    <section class="project__section">
        <div class="container">
            <h1 class="title"><?=the_title();?></h1>
            <div class="project__text dynamic">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <ul class="project__buttons">
                <li class="project__button-active">
                    <button class="button"><span>All</span></button>
                </li>
                <li>
                    <button class="button"><span>Brochure</span></button>
                </li>
                <li>
                    <button class="button"><span>E-commerce</span></button>
                </li>
            </ul>
            <div class="project__blocks">
                <?php for($i = 0; $i < 3; $i ++) :?>
                    <div class="project__block">
                        <a href="<?=site_url()?>/portfolio-detail" class="project__item project__item--ecommerce">
                            <div class="project__image">
                                <span class="project__tag">E-commerce</span>
                                <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/project-placeholder.jpg') 50% 50% / cover no-repeat"></div>
                            </div>
                            <h2 class="project__title">Lenny and pals</h2>
                        </a>
                    </div>
                    <div class="project__block">
                        <a href="<?=site_url()?>/portfolio-detail" class="project__item project__item--design">
                            <div class="project__image">
                                <span class="project__tag">Design</span>
                                <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/image-coming-soon.jpg') 50% 50% / cover no-repeat"></div>
                            </div>
                            <h2 class="project__title">Project Title To Go Here</h2>
                        </a>
                    </div>
                    <div class="project__block">
                        <a href="<?=site_url()?>/portfolio-detail" class="project__item project__item--brochure">
                            <div class="project__image">
                                <span class="project__tag">Brochure</span>
                                <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/image-coming-soon.jpg') 50% 50% / cover no-repeat"></div>
                            </div>
                            <h2 class="project__title">Lenny and pals</h2>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
            <ul class="project__options">
                <li>
                    <a href="#" class="button button--purple-outline button--icon" data-fa-icon="&#xf054">Back To Top</a>
                </li>
                <li>
                    <ul class="pagination">
                        <li>
                            <a href="#" class="arrow prev"></a>
                        </li>
                        <li>
                            <div class="pagination__select">
                                <p>Page</p>
                                <select name="" id="" class="form__select">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                                <p>of 3</p>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="arrow next"></a>
                        </li>
                    </ul>
                </li>
            </ul>
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
