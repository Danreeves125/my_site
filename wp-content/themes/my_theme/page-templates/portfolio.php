<?php
// Template Name: Portfolio
?>
<?php get_header(); ?>
<div class="spacer"></div>
<div class="container">
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
    }
    ?>
</div>
<main class="project">
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
                    <a href="#" class="project__item project__item--ecommerce">
                        <div class="project__image">
                            <span class="project__tag">E-commerce</span>
                            <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/project-placeholder.jpg') 50% 50% / cover no-repeat"></div>
                        </div>
                        <span class="project__title">Lenny and pals</span>
                    </a>
                </div>
                <div class="project__block">
                    <a href="#" class="project__item project__item--design">
                        <div class="project__image">
                            <span class="project__tag">Design</span>
                            <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/image-coming-soon.jpg') 50% 50% / cover no-repeat"></div>
                        </div>
                        <span class="project__title">Project Title To Go Here</span>
                    </a>
                </div>
                <div class="project__block">
                    <a href="#" class="project__item project__item--brochure">
                        <div class="project__image">
                            <span class="project__tag">Brochure</span>
                            <div class="image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/image-coming-soon.jpg') 50% 50% / cover no-repeat"></div>
                        </div>
                        <span class="project__title">Lenny and pals</span>
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
</main>
<?php get_footer(); ?>
