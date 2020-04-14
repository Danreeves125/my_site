var mySwiper = new Swiper ('.swiper-container', {
    spaceBetween: 15,
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        850: {
            slidesPerView: 3,
        },
    }

    // // If we need pagination
    // pagination: {
    //     el: '.swiper-pagination',
    // },
});

var reviewSlide = new Swiper ('.site-slider__reviews', {
    direction: 'horizontal',
    slidesPerView: 1,

    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});