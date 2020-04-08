$(document).ready(function(){
    function select2AddClass(element) {
        element.each(function(){

            if($(this).hasClass('select2-hidden-accessible')) {
                $(this).removeClass('select2-hidden-accessible');
            }

            var _class  = $(this).attr('class');
            var _dclass = $(this).attr('dropdown-class');

            $(this).select2({
                containerCssClass: _class,
                dropdownCssClass: _dclass,
                minimumResultsForSearch: 10
            });
        });
    }

    select2AddClass($('.form__input--select2'));
});