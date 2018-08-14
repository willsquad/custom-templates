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
            swipeToSlide: true,
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
      } else if ($(this).is(".projects_gallery_slider_container")) {
        $(this).slick({
          prevArrow: false,
          nextArrow: false,
          dots:false,
          initialSlide: 0,
          slidesToShow: 4,
          slidesToScroll: 1,
          swipeToSlide: true,
          centerMode: false,
          centerPadding: '20px',
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
              {
              breakpoint: 1400,
              settings: {
                  slidesToShow:3,
                  slidesToScroll: 1,
                  infinite: true
              }
              },
              {
                breakpoint: 1200,
                settings: {
                    slidesToShow:2,
                    slidesToScroll: 1,
                    infinite: true
                }
              },
              {
              breakpoint: 1000,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
              }
              },
              {
              breakpoint: 850,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
              }
          ]
      });
    } else if ($(this).is(".what_we_offer_slider")) {
        $(this).slick({
          prevArrow: $('.prev-slide-offer'),
          nextArrow: $('.next-slide-offer'),
          dots:false,
          initialSlide: 0,
          slidesToShow: 4,
          slidesToScroll: 1,
          swipeToSlide: true,
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
    } else if ($(this).is(".team_slider_container")){
        $(this).slick({
            prevArrow: $('.prev-slide-team'),
            nextArrow: $('.next-slide-team'),
            dots:false,
            initialSlide: 0,
            slidesToShow: 3,
            slidesToScroll: 1,
            swipeToSlide: true,
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
      } else if ($(this).is(".clients_slide_container")){
        $(this).slick({
            dots:false,
            prevArrow: false,
            nextArrow: false,
            initialSlide: 0,
            slidesToShow: 6,
            slidesToScroll: 1,
            swipeToSlide: true,
            centerMode: false,
            centerPadding: '20px',
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true
                }
                },
                {
                breakpoint: 767,
                settings: {
                    slidesToShow:4,
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
                    slidesToShow: 2,
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