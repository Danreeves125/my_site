const element = document.querySelector('.form__select');

if(element.length) {
    const choices = new Choices(element);
}

// var instance = OverlayScrollbars(document.getElementById('desktop'));
OverlayScrollbars(document.getElementById('desktop'), { });
OverlayScrollbars(document.getElementById('tablet'), { });
OverlayScrollbars(document.getElementById('mobile'), { });
// desktop-button
// tablet-button
// mobile-button
// desktop-block
// tablet-block
// mobile-block

