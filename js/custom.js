// JavaScript Document

$(document).ready(function(){
    $('#fil-group-bn .comonfli').click(function(){
      $('.comonfli').removeClass("active-new2");
      $(this).addClass("active-new2");
  });
});
$(document).ready(function() {
    $( window ).scroll(function() {
          var height = $(window).scrollTop();
          if(height >= 100) {
              $('.mn-head').addClass('fixed-menu');
          } else {
              $('.mn-head').removeClass('fixed-menu');
          }
      });
  });
$(document).ready(function(){
    $('.ps-sild').owlCarousel({
        loop: true,
        margin:20,
        nav: true,
		dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items:3
            },
            1000: {
                items:3
            },
            1200: {
              items:4
            }
        }
    })

    $('.ps-sild').owlCarousel({
      loop: true,
      margin:20,
      nav: false,
      dots:false,
      responsive: {
          0: {
              items: 2
          },
          600: {
              items:2
          },
          1000: {
              items:3
          },
          1200: {
            items:4
          }
      }
  })


  $('.weather-sild1').owlCarousel({
    autoplay: false,
    loop: true,
    margin:20,
    nav: false,
    dots:false,
        responsive: {
            0: {
                items:2
            },
            600: {
                items:3
            },
            820: {
                items:4
            },
            1000: {
                items:5
            },
            1200: {
              items:6
           }
    }
  })

	
	$('.best-sl-m').owlCarousel({
        
		autoplay:true,
        margin:30,
        nav: false,
		dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items:2
            },
            1000: {
                items:2
            }
        }
    })

  $('.best-sl-m2').owlCarousel({
      
    autoplay:true,
    margin:30,
    loop:true,
    nav: true,
    dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items:2
            },
            768: {
              items:2
            },
            1000: {
                items:4
            }
        }
    })

	$('.news-slid').owlCarousel({
        
		autoplay:true,
        nav: false,
		margin: 20,
		dots:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items:1
            },
            768: {
              items:2
            },
            1000: {
                items:3
            }
        }
    })

    $('.team-slid').owlCarousel({
        
        autoplay:true,
        loop:true,
         nav: true,
        margin: 20,
        dots:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items:1
                },
                1000: {
                    items:4
                }
            }
    })

    $('.news-1-slid').owlCarousel({
        
      autoplay:true,
      loop:true,
       nav: false,
      margin: 20,
      dots:true,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items:1
              },
              1000: {
                  items:3
              }
          }
    })

    
});



