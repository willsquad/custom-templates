$(document).ready(function(){
    $(document).on('click', '.faq_accordion__title', function(){
        var self = $(this);

        self.closest('.faq_accordion').find('.faq_accordion__content').slideToggle();
        
        if(!self.hasClass('active')) {
            self.addClass('active');
            self.find('.material-icons').html('arrow_drop_up');
        } else {
            self.removeClass('active');
            self.find('.material-icons').html('arrow_drop_down');
        }
        

        /* if(!self.hasClass('active')) {
            $('.faq_accordion__title').removeClass('active');
            self.addClass('active');

            $('.faq_accordion__content').slideUp();
            self.closest('.faq_accordion').find('.faq_accordion__content').slideDown();

            $('.faq_accordion__title__icon').find('.material-icons').html('add');
            self.find('.material-icons').html('remove');
        } else { // if active 
            self.removeClass('active');
            self.closest('.faq_accordion').find('.faq_accordion__content').slideUp();
            self.find('.material-icons').html('add');
        } */
    });
});