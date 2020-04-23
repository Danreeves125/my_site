<?php get_header(); ?>
<?php get_template_part('partials/page-banner') ?>
<div class="article article--no-p">
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

    <?php while ( have_posts() ) : the_post(); ?>
        <section class="article__block article__block--details">
            <div class="container">
                <?php get_template_part( 'template-parts/content', 'single' ); ?>
            </div>
        </section>
        <section class="article__section article__section--white">
            <div class="container">
                <ul class="article__buttons">
                    <li>
                        <a href="<?=get_site_url()?>/latest-news" class="btn btn--secondary2" title="Back to News">Back to News</a>
                    </li>
                    <li>
                        <?php the_post_navigation(
                            array(
                                'prev_text' => '<span class="btn btn--comp-colour" title="Next Article">Next Article</span> ',
                            )
                        );
                        ?>
                    </li>

                </ul>
                <h2 class="article__title article__title--dash-line">Other Latest News</h2>
                <div class="article__latest">
                    <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                    );

                    $latest_posts = get_posts( $args );
                    ?>

                    <?php if ( $latest_posts) : ?>
                        <?php foreach( $latest_posts as $latestPost) : setup_postdata( $latestPost );  ?>

                            <?php
                            $featuredImage = get_field('gallery', $latestPost->ID);
                            ?>
                            <article class="article__latest-item">
                                <div class="article__latest-inner">
                                    <div class="article__image">
                                        <a href="<?=get_permalink($latestPost->ID)?>" title="<?= get_the_title($latestPost->ID);?>">
                                            <?php if(!empty($featuredImage)) : ?>
                                                <div class="image" style="background: url('<?= wp_get_attachment_image_url($featuredImage[0], 'latest-news');?>') center center/ cover no-repeat"></div>
                                            <?php else : ?>
                                                <div class="image lazy" data-src="<?=get_stylesheet_directory_uri()?>/assets/images/news-image-bg.jpg">
                                                    <img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo.svg" alt="<?=get_bloginfo( 'name' );?>">
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="article__details article__details--grey">
                                        <div class="article__heading"><a href="<?=get_permalink($latestPost->ID)?>" title="<?= get_the_title($latestPost->ID);?>"><?= get_the_title($latestPost->ID);?></a></div>
                                        <div class="article__text article__text--center dynamic dynamic--black">
                                            <p>
                                                <?php echo wp_trim_words(get_field('text', $latestPost->ID), 15, '...'); ?>
                                            </p>
                                        </div>
                                        <a href="<?=get_permalink($latestPost->ID)?>" class="btn btn--secondary2" title="Read More">Read More</a>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p><?php __('No News'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>