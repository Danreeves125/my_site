<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$images = get_field('gallery');
	$count = count($images);
	?>
	<?php if(!empty($images)) : ?>
		<div class="article__slider">
            <div class="swiper-container" data-number-of-sliders="<?=count($images);?>">
                <div class="swiper-wrapper">
	                <?php foreach($images as $image) : ?>
                        <div class="swiper-slide">
                            <a href="<?=wp_get_attachment_url($image, "")?>">
                                <div class="slide-image" style="background-image: url('<?=wp_get_attachment_image_url($image, 'service-detail-image');?>') "></div>
                                <span class="site-slider__icon"></span>
                            </a>
                        </div>
	                <?php endforeach; ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
		</div>
	<?php endif; ?>

	<div class="article__content <?=(!empty($images)) ? '' : 'article__content--full-width';?>">
		<div class="article__block-details article__block-details--pr">
			<div class="article__text dynamic dynamic--black">
				<?=get_field('text');?>
			</div>
			<a href="http://www.facebook.com/share.php?u=<?= get_permalink();?>&title=<?php the_title();?>&description=<?php echo wp_trim_words(get_field('text'), 15, '.'); ?>" class="btn btn--secondary">Share This Article</a>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
