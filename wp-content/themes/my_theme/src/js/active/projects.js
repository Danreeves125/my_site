if(document.querySelector('.form__select')) {
    const element = document.querySelector('.form__select');
    const choices = new Choices(element);
}

// var instance = OverlayScrollbars(document.getElementById('desktop'));
OverlayScrollbars(document.getElementById('desktop'), { });
OverlayScrollbars(document.getElementById('tablet'), { });
OverlayScrollbars(document.getElementById('mobile'), { });
