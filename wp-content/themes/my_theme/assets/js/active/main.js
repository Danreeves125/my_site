const accordionTitle = document.querySelectorAll('.tt-accordion__title'),
      accordionContent = document.querySelector('.tt-accordion__content');

if(accordionTitle.length) {
    accordionTitle.forEach(function(elem) {
        elem.addEventListener('click', function(event) {
            event.preventDefault();

            this.parentElement.classList.toggle('active');
        });
    });
}

if(document.querySelector('.form__input--select2')) {
    const choices = new Choices(document.querySelector('.form__input--select2'));
}

if(document.querySelector('.form__input--hidden')) {
    const visableInput = document.querySelector('.form__input--upload'),
        hiddenInput = document.querySelector('.form__input--hidden');

    hiddenInput.addEventListener('input', function() {
        let value = this.value,
            newValue = value.replace(/^.*\\/, "");

        visableInput.value = newValue;
    });
}

var mySwiper = new Swiper ('.swiper-container', {
    spaceBetween: 15,
    direction: 'horizontal',
    slidesPerView: 1,
    centeredSlides: true,
    // centeredSlidesBounds: true,
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 20
        },
        850: {
            slidesPerView: 3,
            spaceBetween: 40
        },
        550: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
