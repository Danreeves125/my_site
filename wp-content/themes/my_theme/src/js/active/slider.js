var mySwiper = new Swiper ('.site-slider__portfolio', {
    spaceBetween: 15,
    direction: 'horizontal',
    slidesPerView: 1,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        850: {
            slidesPerView: 3,
            loop: false,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

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
        speed: 1000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

var latestBlogs = new Swiper ('.site-slider__latest', {
    direction: 'horizontal',
    slidesPerView: 1,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        1040: {
            slidesPerView: 3,
        },
    },

    autoplay: {
        delay: 3500,
        speed: 1000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

var statsSlider  = new Swiper ('.home__stats', {
    spaceBetween: 15,
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    breakpoints: {
        450: {
            slidesPerView: 2,
        },
        640: {
            slidesPerView: 3,
        },
        850: {
            slidesPerView: 4,
        },
        1040: {
            slidesPerView: 5,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // // If we need pagination
    // pagination: {
    //     el: '.swiper-pagination',
    // },
});