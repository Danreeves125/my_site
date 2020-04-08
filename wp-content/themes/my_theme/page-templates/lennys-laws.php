<?php
// Template Name: Lenny's Laws
?>
<?php get_header(); ?>
<main class="page">
    <section class="page__hero">
        <div class="container">
            <div class="page__hero-content">
                <h1 class="page__title"><?=the_title();?></h1>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
				}
				?>
            </div>
        </div>
    </section>
    <section class="page__section">
        <div class="container">
            <div class="page__text-top dynamic dynamic--black">
	            <?=get_field('description');?>
            </div>
            <ul class="tt-accordion">
	            <?php $laws = get_field('laws');?>
				<?php foreach($laws as $law) : ?>
                    <li class="tt-accordion__item">
                        <a href="#" class="tt-accordion__title"><?=$law['title']?></a>
                        <div class="tt-accordion__content">
                            <div class="tt-accordion__inner">
                                <div class="dynamic dynamic--black">
	                                <?=$law['text']?>
                                </div>
                            </div>
                        </div>
                    </li>
				<?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>

