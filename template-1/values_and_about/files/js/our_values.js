$(document).ready(function(){
    $(document).on('click', '.accordion__title', function(){
        var self = $(this);
        if(!self.hasClass('active')) {
            $('.accordion__title').removeClass('active');
            self.addClass('active');

            $('.accordion__content').slideUp();
            self.closest('.accordion').find('.accordion__content').slideDown();

            $('.material-icons').html('add');
            self.find('.material-icons').html('remove');
        } else { // if active 
            self.removeClass('active');
            self.closest('.accordion').find('.accordion__content').slideUp();
            self.find('.material-icons').html('add');
        }
    });
});