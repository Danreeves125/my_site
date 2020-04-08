
<?php
// Template Name: Shop Listing
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
	<div class="container">
		<ul class="shop__options">
			<li>
                <p>View</p>
                <div class="form__select">
					<select name="" id="" class="form__input--select2">
						<option value="">12 Per Page</option>
						<option value="">24 Per Page</option>
						<option value="">36 Per Page</option>
						<option value="">48 Per Page</option>
					</select>
				</div>
			</li>
            <li>
                <p>Sort By</p>
                <div class="form__select">
                    <select name="" id="" class="form__input--select2">
                        <option value="">A - Z</option>
                        <option value="">Z - A</option>
                        <option value="">Price (Low to High)</option>
                        <option value="">Price (High to Low)</option>
                    </select>
                </div>
            </li>
		</ul>
        <ul class="shop__listing">
            <?php for($i = 0; $i < 12; $i++) : ?>
            <li class="shop__listing-item">
                <div class="shop__inner">
                    <div class="shop__image">
                        <a href="">
                            <img src="<?=get_stylesheet_directory_uri()?>/images/placeholder/tshirt-placeholder.jpg" alt="">
                            <a class="shop__wishlist" href="#"></a>
                        </a>
                    </div>
                    <div class="shop__details">
                        <div class="shop__name"><a href="<?=get_site_url()?>/product-detail">Quote T-shirt</a></div>
                        <span class="shop__price">£12.00</span>
                        <div class="shop__info">Available in 3 variations</div>
                        <ul class="shop__buttons">
                            <li>
                                <a href="#" class="shop__button shop__button--red">Add to basket</a>
                            </li>
                            <li>
                                <a href="<?=get_site_url()?>/product-detail" class="shop__button">View Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <?php endfor; ?>
        </ul>
	</div>
</main>
<?php get_footer(); ?>

