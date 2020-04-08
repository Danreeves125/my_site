<?php
// Template Name: Contact Us
?>
<?php get_header(); ?>
<main class="contact page">
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
    <section class="contact__section">
        <div class="container">
            <div class="page__text dynamic dynamic--black">
		        <?=the_content();?>
            </div>
            <div class="contact__form">
		        <?=do_shortcode('[contact-form-7 id="170" title="Contact form 1"]')?>
            </div>
        </div>
    </section>
    <section class="contact__section contact__section--map">
        <div class="container container--map">
            <div class="contact__address">
                <p>Lenny & pals</p>
                <ul class="contact__list">
                    <li class="contact__list-item" data-fa-icon="&#xf3c5">
	                    <?php the_field( 'address', 'option' )?>
                    </li>
                    <li class="contact__list-item" data-fa-icon="&#xf0e0">
                        Email: <a href="mailto:<?php the_field('website_email', 'option'); ?>?subject=Website Enquiry"><?php the_field('website_email', 'option'); ?></a>
                    </li>
                </ul>
	            <?php
	            $facebook = get_field( 'facebook_link', 'option' );
	            $twitter = get_field( 'twitter_link', 'option' );
	            $instagram = get_field( 'instagram_link', 'option' );
	            ?>
                <ul class="social">
		            <?php if(!empty($facebook)) : ?>
                        <li class="social__item social__item--facebook"><a href="<?=$facebook?>" title="" target="_blank"></a></li>
		            <?php endif; ?>
		            <?php if(!empty($twitter)) : ?>
                        <li class="social__item social__item--twitter"><a href="<?=$twitter?>" title="" target="_blank"></a></li>
		            <?php endif; ?>
		            <?php if(!empty($instagram)) : ?>
                        <li class="social__item social__item--instagram"><a href="<?=$instagram?>" title="" target="_blank"></a></li>
		            <?php endif; ?>
                </ul>
            </div>
        </div>
        <div id="map"></div>
    </section>
</main>
<?php get_footer(); ?>