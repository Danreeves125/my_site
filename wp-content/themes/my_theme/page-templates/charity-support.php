<?php
// Template Name: Charity Support
?>
<?php get_header(); ?>
<div class="page">
    <?php get_template_part('template-parts/about-nav')?>
    <div class="container">
        <section class="page__section">
            <div class="container">
                <h2 class="page__title page__title--center">Charities We support</h2>
                <div class="page__text-top">
	                <?= the_field('charity_description', 'option');?>
                </div>
                <?php if( have_rows('charities', 'option') ): ?>
                    <ul class="page__list">
                        <?php while( have_rows('charities', 'option') ): the_row();

                            $logo = get_sub_field('logo');
                            $name = get_sub_field('name');
                            $text = get_sub_field('text');
                            $link = get_sub_field('link');

                            ?>
                            <li class="page__list-item">
                                <div class="page__image">
                                    <div class="page__logo">
                                        <img src="<?=$logo['url'];?>" alt="<?=$name;?>">
                                    </div>
                                </div>
                                <div class="page__content">
                                    <div class="page__heading"><?=$name;?></div>
                                    <div class="page__text">
                                        <?=$text;?>
                                    </div>
                                    <a class="page__button" href="<?=$link;?>">Read More</a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>
