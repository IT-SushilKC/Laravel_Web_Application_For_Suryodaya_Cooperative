        if ($('.owl-partners').length) {
            $('.owl-partners').owlCarousel({
                
                autoplay: true,
                smartSpeed: 700,
                loop: true,
                
                responsive: {
                    0: {
                        items: 1,
                        margin: 0
                    },
                    460: {
                        items: 1,
                        margin: 0
                    },
                    576: {
                        items: 2,
                        margin: 20
                    },
                    992: {
                        items: 4,
                        margin: 30
                    }
                }
            });
        }
      $(window).on('load', function(){
          $('#status').fadeOut();
          $('#preloader').delay(350).fadeOut();
      });

      $(function(){
          new WOW().init(

          );
      });
 
      if ($('.owl-team').length) {
        $('.owl-team').owlCarousel({
            
            autoplay: true,
            smartSpeed: 700,
            loop: true,
            
            responsive: {
                0: {
                    items: 1,
                },
                460: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                992: {
                    items: 4,
                }
            }
        });
    }