$(document).ready(function(){

    /* Search */
    $('.navigation__content__rhs__search').on('click', function() {
        $('.search_overlay').addClass('show');
    });

    $('.close_search').on('click', function(){
        $('.search_overlay').removeClass('show');
    });
    /* Search */

});