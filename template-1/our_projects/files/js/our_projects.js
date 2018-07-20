$(document).ready(function(){
    $('#image_slider_container').slick({
        /* prevArrow:'<i class="arrow_left material-icons">chevron_left</i>',
        nextArrow:'<i class="arrow_right material-icons">chevron_right</i>', */
        prevArrow: $('.prev-slide'),
        nextArrow: $('.next-slide'),
        dots:false,
        initialSlide: 0,
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: false,
        centerPadding: '20px',
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
            }
            },
            {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 450,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });
});