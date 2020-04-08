
<?php
// Template Name: Product Detail
?>
<?php get_header(); ?>
<div class="shop">
	<div class="container">
		<div class="shop__left">
            <div class="shop__full-width">
                <h1 class="shop__title shop__title--left shop__title--mobile">Lenny's Slogan T-shirt - Unisex</h1>
                <div class="shop__price shop__price--large shop__price--mobile"><span>Price:</span> £11.99</div>
            </div>
            <div class="shop__slider">
                <div class="site-slider site-slider__sync-large">
                    <?php for($i = 0; $i < 4; $i++) : ?>
                    <div class="slide">
                        <div class="image">
                            <img src="<?=get_stylesheet_directory_uri()?>/images/placeholder/tshirt-placeholder.jpg" alt="">
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
			<div class="site-slider site-slider__sync-small">
                <?php for($i = 0; $i < 4; $i++) : ?>
                    <div class="slide">
                        <div class="image">
                            <img src="<?=get_stylesheet_directory_uri()?>/images/placeholder/tshirt-placeholder.jpg" alt="">
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
		</div>
		<div class="shop__right">
            <h1 class="shop__title shop__title--left shop__title--desktop">Lenny's Slogan T-shirt - Unisex</h1>
            <div class="shop__price shop__price--large shop__price--desktop"><span>Price:</span> £11.99</div>
            <div class="form__select form__select--colour">
                <div class="shop__heading">Colour</div>
                <select name="" id="" class="form__input--select2">
                    <option value="">Black</option>
                    <option value="">White</option>
                    <option value="">Blue</option>
                    <option value="">Red</option>
                    <option value="">Green</option>
                </select>
            </div>
            <div class="form__select form__select--variation">
                <div class="shop__heading">Variation</div>
                <select name="" id="" class="form__input--select2">
                    <option value="">Variation 1</option>
                    <option value="">Variation 2</option>
                    <option value="">Variation 3</option>
                    <option value="">Variation 4</option>
                    <option value="">Variation 5</option>
                    <option value="">Variation 6</option>
                </select>
            </div>
            <div class="shop__heading">Sizes <a href="#">(See Size Guide)</a></div>
            <ul class="shop__sizes">
                <li><span>XS</span></li>
                <li><span>S</span></li>
                <li><span>M</span></li>
                <li><span>L</span></li>
                <li><span>XL</span></li>
                <li><span>XXL</span></li>
                <li><span>3 XL</span></li>
            </ul>
            <div class="shop__quantity">
                <input type="number" class="form__input form__input--number" value="0" min="0">
            </div>
            <ul class="shop__buttons shop__buttons--detail">
                <li>
                    <a href="#" class="shop__button shop__button--red shop__button--cart"><span>Add to Basket</span></a>
                </li>
                <li>
                    <a href="#" class="shop__button shop__button--wishlist"><span>Add to Wishlist</span></a>
                </li>
            </ul>

            <ul class="accordion accordion--detail" data-accordion data-allow-all-closed="true">
                <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Description</a>
                    <div class="accordion-content" data-tab-content>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusamus blanditiis est necessitatibus nostrum saepe sit sunt suscipit tempore. A commodi incidunt itaque modi perspiciatis! Aspernatur explicabo facere mollitia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa minima nulla recusandae repellat saepe veritatis voluptate! Dignissimos, magnam similique. Accusantium dicta dolore fugit inventore laborum, minus molestiae! Esse, harum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae cum distinctio ducimus eius enim esse fuga fugit ipsa, minus quaerat quisquam repellat, sequi, soluta tempora tempore ullam velit. Ipsum!
                        </p>
                    </div>
                </li>
                <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Size Guide</a>
                    <div class="accordion-content" data-tab-content>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusamus blanditiis est necessitatibus nostrum saepe sit sunt suscipit tempore. A commodi incidunt itaque modi perspiciatis! Aspernatur explicabo facere mollitia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa minima nulla recusandae repellat saepe veritatis voluptate! Dignissimos, magnam similique. Accusantium dicta dolore fugit inventore laborum, minus molestiae! Esse, harum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae cum distinctio ducimus eius enim esse fuga fugit ipsa, minus quaerat quisquam repellat, sequi, soluta tempora tempore ullam velit. Ipsum!
                        </p>
                    </div>
                </li>
            </ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>

