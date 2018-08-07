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
    
    /* Mobile Nav */
    $(document).on('click', '.menu_expand_icon', function(){
        var self = $(this);
        if(!self.hasClass('active')) {
            $('.menu_expand_icon').removeClass('active');
            self.addClass('active');

            $('.navigation__content__rhs__menu__submenu').slideUp();
            self.closest('.menu_element_li').find('.navigation__content__rhs__menu__submenu').slideDown();

            $('.menu_expand_icon').find('.material-icons').html('keyboard_arrow_down');
            self.find('.material-icons').html('keyboard_arrow_up');
        } else { // if active 
            self.removeClass('active');
            self.closest('.menu_element_li').find('.navigation__content__rhs__menu__submenu').slideUp();
            self.find('.material-icons').html('keyboard_arrow_down');
        }
    });
    /* Menu */



});
