$(document).ready(function(){
    $('.site-slider__new').slick({
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 490,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.site-slider__single').slick({
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.site-slider__single').slickLightbox({
        itemSelector: '> div > div > div > div > div > a'
    });

    $('.site-slider__charities').slick({
        arrows: false,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1035,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 490,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.site-slider__sync-large').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        asNavFor: '.site-slider__sync-small'
    });

    $('.site-slider__sync-small').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.site-slider__sync-large',
        dots: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 11024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });
});