<?php
// Template Name: Blog
?>
<?php get_header(); ?>
<div class="spacer"></div>
<?php get_template_part('template-parts/breadcrumbs', 'page') ?>
<main class="article">
    <section class="article__section">
        <div class="container">
            <h1 class="title"><?=the_title()?></h1>
            <div class="article__top dynamic">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="article__inner">
                <div class="article__articles">
                    <div class="article__blocks">
                        <?php for($i = 0; $i < 5; $i++) : ?>
                            <div class="article__block">
                                <article class="article__item">
                                    <a href="#"></a>
                                    <div class="article__image" style="background: url('<?=get_stylesheet_directory_uri()?>/src/images/placeholder/blog-image.jpg') 50% 50% / cover no-repeat"></div>
                                    <div class="article__box">
                                        <div class="article__tags">
                                            <a href="#">Tag</a>
                                            <a href="#">Tag</a>
                                            <a href="#">Tag</a>
                                            <a href="#">Tag</a>
                                            <a href="#">Tag</a>
                                        </div>
                                        <a href="#" class="article__title">This is a blog headline</a>
                                        <ul class="article__options">
                                            <li class="article__option" data-fa-icon="&#xf406">Dan Reeves</li>
                                            <li class="article__option" data-fa-icon="&#xf073">30/04/2020</li>
                                            <li class="article__option" data-fa-icon="&#xf017">5 min read</li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <aside class="article__sidebar sidebar">
                <div class="sidebar__blocks">
                    <div class="sidebar__block">
                        <div class="sidebar__title">Recent Posts</div>
                        <ul class="sidebar__posts">
                            <?php for($i = 0; $i < 3; $i++) : ?>
                                <li class="sidebar__post">
                                    <a href="#" class="heading">This s a blog title</a>
                                    <div class="date"><?=date('jS F Y')?></div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__title sidebar__title--violet">Tag Cloud</div>
                        <div class="sidebar__tags">
                            <a href="#">Web Developement</a>
                            <a href="#">HTML</a>
                            <a href="#">CSS</a>
                            <a href="#">Javascript</a>
                            <a href="#">Web Design</a>
                            <a href="#">PHP</a>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__title sidebar__title--blue">Archives</div>
                        <ul class="sidebar__list">
                            <?php for($i = 0; $i < 3; $i++) : ?>
                                <li class="sidebar__list-item">
                                    <a href="#"><?=date('F Y')?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
