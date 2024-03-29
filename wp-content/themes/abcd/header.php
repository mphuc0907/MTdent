<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lib/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lib/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lib/fancybox/style.fancybox.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lib/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lib/slick/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lib/slick/css/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/scss/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/customs.css">
    <script src="<?php echo get_template_directory_uri(); ?>/dist/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/lib/jquery/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/lib/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/lib/slick/js/slick.min.js"></script>

</head>

<body>
<nav class="header">
    <div class="func-wrapper">
        <div class="container wrapper box-justify">
            <div>
                <a class="logo" href="<?= home_url() ?>" data-wpel-link="internal" rel="follow">
                    <img src="<?= get_field('logo_header','option') ?>" alt="logo" title="">
                </a>
                <span class="slogan hide-r"><?= get_field('sologan', 'option') ?></span>
            </div>
            <div>
                    <span class="hide-r">Hotline:
                        <a href="tel:<?= get_field('hotline','option') ?>" data-wpel-link="internal" rel="follow"><?= get_field('hotline','option') ?></a>
                    </span>
                <li class="lang-item lang-item-15 lang-item-vi current-lang lang-item-first">
                    <a lang="vi" hreflang="vi" href="https://seadent.com.vn/" data-wpel-link="internal" rel="follow"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFsSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f4NI9d////3+f+b3/1+////+9f/XL6A4o6ws0AaAAGIBm/0fRTVQ2v3Pf97f/4/9Aqv+DdHA8Ps3UANAALEAMSNQNdDGP3+ALvnf8vv/t9//9X/////7f+uv/4K//iciNABNBwggsJP+/IW4kuH3n//1v/8v+wVSDURmv/57//7/CeokoKFA0wECiAnkpL9/wH4CO+DNr/+VQA1A9PN/w6//j36CVIMRxEkAAQR20m+QpSBXgU0CuSTj9/93v/8v//V/xW+48UBD/zAwAAQQSAMzOMiABoBUswCd8ev/M7A669//OX7///Lr/x+gBlCoAJ0DEEAgDUy//zBISoKNAfoepJNRFmQkyJecfxj4/kDCEIiAigECiPErakTiiWMIAAgwAB4ZUlqMMhQQAAAAAElFTkSuQmCC" title="" alt="kDCEIiAigECiPErakTiiWMIAAgwAB4ZUlqMMhQQAAAAAElFTkSuQmCC" ></a>
                </li>
                <li class="lang-item lang-item-18 lang-item-en">
                    <a lang="en-US" hreflang="en-US" href="https://seadent.com.vn/en/home/">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC" title="" alt="GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"  ></a>
                </li>
                <button class="button" id="menu-btn">
                    <span class="stroke"></span>
                    <span class="stroke"></span>
                    <span class="stroke"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="alt-search">
        <div class="container wrapper">
            <div class="form-search">
                <form action="https://seadent.com.vn" role="search">
                    <input type="search" value="" name="s" placeholder="Tìm kiếm">
                    <button class="button button-primary"><i class="icon-search-outline"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="menu-wrapper">
        <div class="container wrapper box-justify">
            <ul class="menu">
                <li class="menu-item"><a href="https://seadent.com.vn/gioi-thieu.html" >Giới thiệu</a></li>
                <li class="menu-item"><a href="https://seadent.com.vn/san-pham.html">Sản phẩm</a></li>
                <li class="menu-item"><a href="https://seadent.com.vn/nha-cung-cap.html">Nhà cung cấp</a></li>
                <li class="menu-item"><a href="https://seadent.com.vn/cua-hang.html">Cửa hàng</a></li>
                <li class="menu-item"><a href="https://seadent.com.vn/tin-khoa-hoc/">Tin tức</a></li>
                <li class="menu-item"><a href="https://seadent.com.vn/mo-mo-phong-kham.html">Mở mới phòng khám</a></li>
                <li class="menu-item"><a href="https://seadent.com.vn/lien-he.html">Liên hệ</a></li>
                <li class="menu-item"><a href="https://seadent.com.vn/tuyen-dung.html">Tuyển dụng</a></li>
            </ul>
            <div class="form-search">
                <form action="https://seadent.com.vn" role="search">
                    <input type="search" value="" name="s" placeholder="Tìm kiếm">
                    <button class="button button-primary"><i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>