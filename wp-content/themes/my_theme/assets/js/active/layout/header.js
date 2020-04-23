const html = document.querySelector('html'),
      siteHamburger = document.querySelector('.site-hamburger'),
      closeMenu = document.querySelector('.offcanvas__close'),
      header = document.querySelector('.header'),
      nav = document.querySelector('.header');

let scrollPos = 0;

siteHamburger.addEventListener('click', toggleMobileMenu);


closeMenu.addEventListener('click', function(){
   if(html.classList.contains('off-canvas-open')) {
       siteHamburger.classList.remove('active');
       html.classList.remove('off-canvas-open');
       header.classList.remove('header--hide');
   }
});

function toggleMobileMenu() {
    siteHamburger.classList.add('active');
    html.classList.add('off-canvas-open');
    header.classList.add('header--hide');
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

const tobi = new Tobi();
