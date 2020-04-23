<?php
/* Template Name: Blogs */

get_header(); ?>
<?php

$post_id = false;

if( is_home() )
{
	$post_id = 58; // specif ID of home page
}
$image_id = get_field('page_banner', $post_id);
$pageSrc = wp_get_attachment_image_src($image_id, "page-banner-image");
?>
<?php //if(!empty($image_id)) : ?>
<!--	<div class="banner">-->
<!--		<div class="parallax" data-parallax-image="--><?//=$pageSrc[0]?><!--"></div>-->
<!--	</div>-->
<?php //endif; ?>
<main class="article">
	<section class="page__hero">
		<div class="container">
			<div class="page__hero-content">
				<h1 class="page__title"><?php single_post_title(); ?></h1>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
				}
				?>
			</div>
		</div>
	</section>
	<?php if (have_posts()) : ?>
		<section  class="article__section">
			<div class="container">
				<div class="article__articles">
					<?= do_shortcode('[ajax_load_more id="3873237437" container_type="div" css_classes="article__articles" post_type="post" posts_per_page="6" transition="masonry" masonry_selector=".article__item" masonry_animation="slide-up" images_loaded="true" button_label="Loading More Posts" no_results_text="No More Articles"]')?>
				</div>
			</div>
		</section>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
