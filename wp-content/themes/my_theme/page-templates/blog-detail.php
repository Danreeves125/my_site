<?php
// Template Name: Blog Detail
?>
<?php get_header(); ?>
<div class="spacer"></div>
<?php get_template_part('template-parts/breadcrumbs', 'page') ?>
<article class="article">
    <section class="article__section">
        <div class="article__featured-image">
            <div class="parallax" data-parallax-image="<?=get_stylesheet_directory_uri()?>/src/images/placeholder/blog-detail.jpg"></div>
        </div>
        <div class="article__credit-badge">
            <p>Photo by <a href="https://unsplash.com/@grohsfabian?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Fabian Grohs</a> on <a href="/photos/Y8iPJEvUz6c?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>
        </div>
    </section>
    <section class="article__section">
        <div class="article__content">
            <div class="title">This Is A Blog Title</div>
            <div class="article__tl-dr dynamic">
                <p>
                    <strong>tl; dr</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam
                </p>
            </div>
            <div class="dynamic">
                <h2>H2 - This is a subheading</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!
                </p>
                <h2>H2 - This is a subheading</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!
                </p>



            </div>
        </div>
    </section>
</article>
<?php get_footer(); ?>
