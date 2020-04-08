<?php
// Template Name: Text Page Template
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
			<div class="page__text dynamic dynamic--black">
				<?=the_content();?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>

