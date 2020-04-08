<?php
// Template Name: About
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
    <section class="page__section page__section--no-p">
        <?php
            $blocks = get_field( 'about_content' );
        ?>
        <div class="page__blocks">
            <?php foreach($blocks as $block) : ?>
            <?php
                $image_id = $block['image'];
                $src = wp_get_attachment_image_src($image_id, '');
            ?>
            <div class="page__block">
                <div class="half" style="background-image: url('<?=$src[0];?>')"></div>
                <div class="half">
                    <div class="dynamic dynamic--black">
                        <?=$block['text'];?>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </section>
</main>
<?php get_footer(); ?>