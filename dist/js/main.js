// var swiper = new Swiper(".mySwiper", {
//     // cssMode: true,
//     loop: true,
//     autoplay: {
//         delay: 5000,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     // mousewheel: true,
//     // keyboard: true,
// });
var swiper = new Swiper(".mySwiper", {

  loop: true,
  autoplay: {
      delay: 5000,
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
  // mousewheel: true,
  // keyboard: true,
});
var swiper = new Swiper(".sliderBox", {
  // slidesPerView: 4,

  loop: true,
  //   autoplay: {
  //       delay: 5000,
  //   },
  breakpoints: {
      0: {
          slidesPerView: 2,
          //      spaceBetween: 20
      },
      768: {
          slidesPerView: 2,
          // spaceBetween: 30
      },
      // when window width is >= 480px
      1024: {
          slidesPerView: 2,
          // spaceBetween: 40
      },
      // when window width is >= 640px
      1280: {
          slidesPerView: 4,
          // spaceBetween: 50
      }
  }
});
var swiper = new Swiper(".sliderSupplier", {
  // slidesPerView: 5,

  loop: true,
  autoplay: {
      delay: 5000,
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  breakpoints: {
      0: {
          slidesPerView: 2,
          //      spaceBetween: 20
      },
      768: {
          slidesPerView: 3,
          // spaceBetween: 30
      },
      // when window width is >= 480px
      1024: {
          slidesPerView: 4,
          // spaceBetween: 40
      },
      // when window width is >= 640px
      1280: {
          slidesPerView: 5,
          // spaceBetween: 50
      }
  }
});
var swiper = new Swiper(".sliderPromotion", {


  loop: true,
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  pagination: {
      el: ".swiper-pagination",
  },
  grabCursor: true,
  // autoplay: {
  //     delay: 5000,
  // },
  breakpoints: {
      0: {
          slidesPerView: 1,
          //      spaceBetween: 20
      },
      768: {
          slidesPerView: 2,
          // spaceBetween: 30
      },
      // when window width is >= 480px
      1024: {
          slidesPerView: 3,
          // spaceBetween: 40
      },
      // when window width is >= 640px
      1280: {
          slidesPerView: 4,
          // spaceBetween: 50
      }
  }
});
$('.card-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  adaptiveHeight: true,
  nextArrow: '<button type="button" class="plain arrow slick-arrow slick-next " style=""><i class="fa-solid fa-angle-right"></i></button>',
  prevArrow: '<button type="button" class="plain arrow slick-arrow slick-prev" style=""><i class="fa-solid fa-chevron-left"></i></button>',
  responsive: [
      {
          breakpoint: 849,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 2
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }
  ]
});
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
jQuery(document).ready(function () {
    Sticky();
    Openmenu();
  });

  function Sticky() {
    $(window).scroll(function () {
  
      var scroll = $(window).scrollTop();
      if (scroll >= 100) {
        $(".header").addClass("fixed");
      
      } else {
        $(".header").removeClass("fixed");
      }
    });
  }

  function Openmenu() {
    $("#menu-btn").click(function () {
      $(".menu-wrapper").toggleClass("active");
      $("#menu-btn").toggleClass("open-menu");
    });
  }