<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
$featuredImage = get_field('gallery', $post->ID);
?>

<div id="post-<?php the_ID(); ?>" class="article__item">
	<div class="article__inner">
		<div class="article__image">
			<a href="<?=esc_url( get_permalink() )?>" title="<?= get_the_title();?>">
				<?=wp_get_attachment_image($featuredImage[0], 'news-featured');?>
			</a>
		</div>
		<div class="article__details">
			<h2 class="article__heading">
				<a href="<?=esc_url( get_permalink() )?>" title="<?= get_the_title();?>"><?= get_the_title();?></a>
			</h2>
			<div class="article__text article__text--center dynamic">
				<p>
					<?php echo wp_trim_words(get_field('text', $post->ID), 15, '...'); ?>
				</p>
			</div>
			<a href="<?=esc_url( get_permalink() )?>" class="btn btn--center btn--blue" title="Read More">Read More</a>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
