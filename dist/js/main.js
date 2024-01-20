var swiper = new Swiper(".mySwiper", {
    // cssMode: true,
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
jQuery(document).ready(function () {
    Sticky();
   
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