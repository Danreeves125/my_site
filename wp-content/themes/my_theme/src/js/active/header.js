const html = document.querySelector('html'),
    siteHamburger = document.querySelector('.hamburger'),
    closeMenu = document.querySelector('.offcanvas__close'),
    nav = document.querySelector('.header');

    let scrollPos = 0;

siteHamburger.addEventListener('click', toggleMobileMenu);

function toggleMobileMenu() {
    siteHamburger.classList.toggle('active');
    html.classList.toggle('mobile-menu-open');
}

if(document.querySelector('body').getAttribute('data-page') === 'home') {
    window.addEventListener('scroll', checkPosition);

    function checkPosition() {
        let windowY = window.scrollY;
        if (windowY > 0) {
            nav.classList.add('header--state2');
        } else {
            nav.classList.remove('header--state2');
        }
        scrollPos = windowY;
    }

    if (window.scrollY > 0) {
        nav.classList.add('header--state2');
    } else {
        nav.classList.remove('header--state2');
    }
}

let bioStyle = Array.from(document.querySelectorAll('.home__option-title'));

for (let i = 0, l = bioStyle.length; i < l; i++) {
    bioStyle[i].onclick = function() {
        for (let j = 0; j < l; j++) {
            if (bioStyle[j] != this) {
                bioStyle[j].parentElement.classList.remove("active");
            }
        }
        this.parentElement.classList.toggle('active');
    }
}

var scroll = new SmoothScroll('a[href*="#"]', {
    offset: 82,
    speed: 500
});