<?php
// Template Name: Blog Detail
?>
<?php get_header(); ?>
<div class="spacer"></div>
<?php get_template_part('template-parts/breadcrumbs', 'page') ?>
<article class="article article--no-p">
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
            <div class="article__info-box">
                <ul class="list">
                    <li data-fa-icon="&#xf073"><?=date('jS F Y')?></li>
                    <li data-fa-icon="&#xf017">5 Min Read</li>
                </ul>
                <div class="tags" data-fa-icon="&#xf02b">
                    <a href="">CSS</a>
                    <a href="">Performance</a>
                    <a href="">HTML</a>
                </div>
                <p data-fa-icon="&#xf099">Photo by <a href="">Twitter</a> and <a href="">Linkedin</a></p>
            </div>
            <div class="article__tl-dr dynamic">
                <p>
                    <strong>tl; dr</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam
                </p>
            </div>
            <div class="dynamic">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                </ul>
                <h2>H2 - This is a subheading</h2>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                </ul>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!
                </p>
                <h3>H3 - This is a subheading</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!
                </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                </ul>
                <pre data-lang="HTML" class="mt15 language-html">
<!--                <button data-clipboard-target="#code" class="button button--small button--white copy-content"  type="button"><span>Copy</span></button>-->
                <code class="code" id="code">
                     &lt;!-- This is a comment -->
                     &lt;div class="article__info-box">
                        &lt;ul class="list">
                            &lt;li data-fa-icon="&#xf073">&lt;?=date('jS F Y')?>&lt;/li>
                            &lt;li data-fa-icon="&#xf017">5 Min Read&lt;/li>
                        &lt;/ul>
                        &lt;div class="tags" data-fa-icon="&#xf02b">
                            &lt;a href="">CSS&lt;/a>
                            &lt;a href="">Performance&lt;/a>
                            &lt;a href="">HTML&lt;/a>
                        &lt;/div>
                        &lt;p data-fa-icon="&#xf099">Photo by &lt;a href="">Twitter&lt;/a> and &lt;a href="">Linkedin&lt;/a>&lt;/p>
                     &lt;/div>
                </code>
                </pre>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!
                </p>
                <h3>H3 - This is a sub-subheading</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!
                </p>
                <figure class="photo">
                    <img src="<?=get_stylesheet_directory_uri()?>/src/images/placeholder/photo.jpg" alt="">
                    <figcaption class="article__credit-badge">
                        <p>Photo by <a href="https://unsplash.com/@grohsfabian?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Fabian Grohs</a> on <a href="/photos/Y8iPJEvUz6c?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>
                    </figcaption>
                </figure>
                <blockquote>
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur illum minus velit. A architecto consequatur corporis, dolore eius, eveniet ex exercitationem illum iusto laboriosam minus, nesciunt officia quaerat quidem quo!”
                </blockquote>
                <div class="note">
                    <span>Note:</span> <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad consectetur doloremque explicabo inventore ipsam iure necessitatibus non, perspiciatis, possimus praesentium quae quasi ratione saepe sit totam ut, vitae voluptates?
                    </p>
                </div>
                <div class="plug">Continue with caution: Shameless plug ahead!</div>

                <figure class="photo">
                    <img src="<?=get_stylesheet_directory_uri()?>/src/images/placeholder/photo.jpg" alt="">
                    <figcaption class="figcaption">
                        This is the description for the photo
                    </figcaption>
                </figure>
                <p>You can find the code on this: <a href="#">GitHub repository</a></p>
            </div>
        </div>
    </section>
</article>
<?php get_footer(); ?>