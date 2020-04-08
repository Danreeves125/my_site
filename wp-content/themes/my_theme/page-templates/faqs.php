<?php
// Template Name: FAQs
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
		        <?=get_field('text_top')?>
            </div>
            <ul class="tt-accordion">
		        <?php for($i = 0; $i < 4; $i++) : ?>
                    <li class="tt-accordion__item">
                        <a href="#" class="tt-accordion__title">This is a long process title</a>
                        <div class="tt-accordion__content">
                            <div class="tt-accordion__inner">
                                <div class="dynamic dynamic--black">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
		        <?php endfor; ?>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>

