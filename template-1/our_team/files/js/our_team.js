$(document).ready(function(){

    var sliderContainer = $(".slider_container");
  
    sliderContainer.each(function() {
      if ($(this).is(".projects_slider_container")) {
          $(this).slick({
            prevArrow: $('.prev-slide-project'),
            nextArrow: $('.next-slide-project'),
            dots:false,
            initialSlide: 0,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: false,
            centerPadding: '20px',
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
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
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
      } 
      else if ($(this).is(".team_slider_container")){
        $(this).slick({
            prevArrow: $('.prev-slide-team'),
            nextArrow: $('.next-slide-team'),
            dots:false,
            initialSlide: 0,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
            centerPadding: '20px',
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
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
                    slidesToShow: 1,
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
      } else if ($(this).is(".carousel_slider_container")){
        $(this).slick({
            prevArrow: $('.prev-slide-carousel'),
            nextArrow: $('.next-slide-carousel'),
            dots:false,
            initialSlide: 0,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
            centerPadding: '20px',
            autoplay: true,
            autoplaySpeed: 10000,
        });
      }
      else {
        $(this).slick();
      }
    });
    

});