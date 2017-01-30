<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Doc</title>
    <link rel="stylesheet" href="../../assets/css/swiper.min.css">

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/swiper.jquery.min.js"></script>
    <style>
    /*html, body {
        position: relative;
        height: 100%;
        padding: 0;
        min-width: 1920px;
        margin: 0;
        overflow-x: hidden;
    }
    body {
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
        overflow-x: hidden !important;
        overflow-y: auto !important;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
        overflow: visible;
    }*/
    .swiper-wrapper{
        /*-ms-align-items: center !important;*/
        /*align-items: center !important;*/
    }
    /*.swiper-slide {
        text-align: center;
        font-size: 18px;
        opacity: 0 !important;
        position: relative;
    }
    .swiper-slide-active{
        position: absolute !important;
        opacity: 1 !important;
    }*/
    .swiper-slide img {
        /*width: 100%;*/
        /*transform: translate(-50%, -50%);*/
        /*width: auto;*/
        /*height: auto;*/
        /*max-width: 100%;*/
        /*max-height: 100%;*/
        /*-ms-transform: translate(-50%, 0);*/
        /*-webkit-transform: translate(-50%, 0);*/
        /*-moz-transform: translate(-50%, 0);*/
        /*position: absolute;*/
        /*left: 50%;*/
        /*top: 50%;*/
    }
    .control{
        background-color: rgba(0,0,0,0.7);
        position: fixed;
        bottom: 0;
        max-width: 500px;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 60px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        z-index: 10;
        display: flex;
        -ms-align-items: center;
        align-items: center;
        justify-content: space-between;
        padding: 0 10px;
    }
    .swiper-pagination{
        bottom: 0 !important;
        position: relative;
    }
    .swiper-pagination-bullet{
        width: auto;
        height: auto;
        font-size: 18px;
        background: none !important;
        color: #fff;
        opacity: 0.6;
        margin: 0 5px;
    }
    .swiper-pagination-bullet-active{
        opacity: 1;
    }
    .swiper-button-next, .swiper-button-prev{
        position: static;
        margin: 0 !important;
    }
    .swiper-lazy-preloader{
        position: fixed !important;
    }
    </style>
</head>
<body>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
                if ($handle = opendir("./")) {
                    while (false !== ($file = readdir($handle))) {
                        $ext = substr($file, strrpos($file, '.') + 1);
                        if(in_array($ext, array("jpg","jpeg","png","gif"))){

            ?>
                <div class="swiper-slide">
                    <img src="<?php echo $file ?>">
                </div>
            <?php
                        }
                    }
                    closedir($handle);
                }
            ?>
        </div>
        <div class="control">
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
        </div>
    </div>
    <script>
    jQuery(document).ready(function($) {
        var swiper = new Swiper('.swiper-container', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            pagination: '.swiper-pagination',
            autoHeight: true,
            effect: 'fade',
            paginationClickable: true,
            paginationBulletRender: function (swiper, index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
            // onSlideChangeEnd: function () {
            //     $("html, body").css({
            //         scrollTop: 0 + "px"
            //     }, {
            //         duration: 500
            //     });
            // }
            // preloadImages: false,
            // lazyLoading: true
        });
    });
    </script>
</body>
</html>
