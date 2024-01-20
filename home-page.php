<?php
include("header.php")
?>
<div class="main">
    <section class="banner-home">
        <div class="banner banner-lg">
            <div class="hero-slider ">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <a href="">
                                <img src="http://seadent.com.vn/wp-content/themes/seadent/assets/images/sample-banner.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://seadent.com.vn/wp-content/uploads/2023/02/Icon-1263x630-2.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://seadent.com.vn/wp-content/uploads/2023/02/Mở-mới-1263x630-1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include("footer.php")
?>
<script>
    var swiper = new Swiper(".mySwiper", {
    // cssMode: true,
    loop: true,
    // autoplay: {
    //     delay: 5000,
    // },
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
</script>