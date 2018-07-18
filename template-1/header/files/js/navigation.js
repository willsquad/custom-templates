$(document).ready(function(){

    /* Menu */
    $('.nav_menu').on('click', function(){
        $('.navigation__content__rhs__menu').slideToggle();
    });


    $(window).scroll(function(){
        if ($(this).scrollTop() > 120){
            $('.navigation').removeClass('slideIn animated');
            $('.navigation').addClass("sticky_header slideInDown animated");
        }
        else{
            $('.navigation').removeClass('sticky_header slideInDown animated');
            $('.navigation ').addClass('slideIn animated');
        }
    });
    
    /* Menu */



});
