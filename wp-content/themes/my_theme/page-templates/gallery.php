<?php
// Template Name: Gallery
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
    <section class="page__section page__section--p-sm page__section--grey">
        <div class="container">
            <div class="page__banner">
                <p>Are you one of lennys correspondent's? Upload you photos.</p>
                <a href="#" class="btn btn--secondary2">Upload Here</a>
            </div>
        </div>
    </section>
    <section class="page__section page__section--gallery">
        <div class="container">
		    <?php
		        $images = get_field('gallery_images');
		    ?>
		    <?php if( $images ) : ?>
                <div class="gallery">
				    <?php foreach( $images as $image ): ?>
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <a href="<?=$image['url']?>" class="lightbox" data-group="gallery">
<!--                                    <span class="icon"></span>-->
                                    <img src="<?=$image['sizes']['gallery-images']?>" alt="<?=$images['alt']?>">
                                </a>
                            </div>
                        </div>
				    <?php endforeach;; ?>
                </div>
		    <?php endif; ?>
        </div>
    </section>
    <section class="page__section page__section--grey">
        <div class="container">
            <h2 class="page__subtitle">Upload you photos</h2>
            <div class="page__text page__text--center dynamic dynamic--black">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate doloremque dolores, eaque enim eum eveniet fugit laboriosam nostrum numquam quis rem saepe voluptatum? Atque eveniet magni nam quibusdam recusandae veritatis.
                </p>
            </div>
            <div class="page__form">
	            <?= do_shortcode('[contact-form-7 id="201" title="Gallery Form"]')?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
