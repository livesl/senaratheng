<!DOCTYPE html>
<html>
    <head>
        <!-- Mirrored from bpp.lk/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2016 05:39:53 GMT -->
        <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Senarath Group | Home</title>
        <!--<meta name="description" content="Established in the year 2000 and by understanding the opportunities available in the sector, ventured into the direct construction in 2007. With the strength of Associated Companies concept we have expanded our engineering services to cater the demands of the civil engineering sector, which resulted us to form of Business Promoters &amp; Partners Engineering (Pvt) Ltd." />-->
        <link rel="shortcut icon" href="images/favicon/favicon.png">

        <link href="assets/styles/vendor/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/fonts/et-lineicons/css/style.css" rel="stylesheet" />
        <link href="assets/fonts/linea-font/css/linea-font.css" rel="stylesheet" />
        <link href="assets/fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/styles/vendor/slick.min.css" rel="stylesheet" />
        <link href="assets/styles/vendor/magnific-popup.min.css" rel="stylesheet" />
        <link href="assets/styles/vendor/animate.min.css" rel="stylesheet" />
        <link href="assets/styles/main.min.css" rel="stylesheet" />
        <link href="assets/styles/responsive.min.css" rel="stylesheet" />
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

        <!--/////////////////////////////////////////for slider/////////////////-->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>

        <!--    <meta property="og:site_name" content="BPP Engineering" />
            <meta property="og:title" content="BPPE | For Entrepreneurs" />
            <meta property="og:description" content="Established in the year 2000 and by understanding the opportunities available in the sector, ventured into the direct construction in 2007. With the strength of Associated Companies concept we have expanded our engineering services to cater the demands of the civil engineering sector, which resulted us to form of Business Promoters &amp; Partners Engineering (Pvt) Ltd." />
            <meta property="og:url" content="http://bpp.lk/" />
            <meta property="og:type" content="website">
            <meta property="og:image" content="http://bpp.lk/images/bg/home/2.jpg" />-->

        <script>
            jQuery(document).ready(function ($) {

                var jssor_1_SlideshowTransitions = [
                    {$Duration: 3000, x: -0.5, $During: {$Left: [0.3, 0.7]}, $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                    {$Duration: 3000, x: 0.5, $SlideOut: true, $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear}, $Opacity: 2}
                ];

                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_1_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    },
                    $ThumbnailNavigatorOptions: {
                        $Class: $JssorThumbnailNavigator$,
                        $Cols: 1,
                        $Align: 0,
                        $NoDrag: true
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>
        <style>

            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url('img/a17.png') no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }

            /* jssor slider thumbnail navigator skin 09 css */

            .jssort09-600-45 .p {
                position: absolute;
                top: 0;
                left: 0;
                width: 600px;
                height: 45px;
            }

            .jssort09-600-45 .t {
                font-family: verdana;
                font-weight: normal;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                color:#fff;
                line-height: 45px;
                font-size: 20px;
                padding-left: 10px;
            }

        </style>



        <!--        <script>
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
                    ga('create', 'UA-59501486-1', 'auto');
                    ga('send', 'pageview');
                </script>-->
    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar">
        <?php include './php/menu.php'; ?>
        </br>
        </br>






        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">

                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/05.jpg" />
                     <?php // include './php/senarathgroupdiv.php';?>
                    <div data-u="thumb"></div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/02.jpg" />

                  <?php //include './php/senarathgroupdiv.php';?>
                    <div data-u="thumb">ROAD CONSTRUCTION</div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/01.jpg" />
                     <?php // include './php/senarathgroupdiv.php';?>
                    <div data-u="thumb">QUARRY AND CRUSHER PLANT</div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/03.jpg" />
                     <?php // include './php/senarathgroupdiv.php';?>
                    <div data-u="thumb">CEMENT BLOCKS AND PAVING PLANT</div>
                </div>

                <!--            <a data-u="ad" href="http://www.jssor.com" style="display:none">Bootstrap Slider</a>-->

            </div>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:600px;height:45px;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>
                <!-- Thumbnail Item Skin Begin -->
                <div data-u="slides" style="cursor: default;">
                    <div data-u="prototype" class="p">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
                <div data-u="prototype" style="width:6px;height:6px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
        </div>



        <?php include './php/footer.php'; ?>

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/vendor/google-fonts.js"></script>
        <script src="assets/js/vendor/jquery.easing.js"></script>
        <script src="assets/js/vendor/jquery.waypoints.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/vendor/smoothscroll.js"></script>
        <script src="assets/js/vendor/jquery.localScroll.min.js"></script>
        <script src="assets/js/vendor/jquery.scrollTo.min.js"></script>
        <script src="assets/js/vendor/jquery.stellar.min.js"></script>
        <script src="assets/js/vendor/jquery.parallax.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <script src="assets/js/vendor/kenburns.js"></script>
        <script src="assets/js/main.min.js"></script>

        <script src="assets/js/vendor/kenburns.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                //initKenburns();
//                 if ($(window).width() >= 1260) {
//                    // initParallax();
//                     $(window).stellar({
//                         hideDistantElements: false
//                     });
//                 }
            });

//             function initKenburns() {
//                 var hasKenburns = $('.kenburn-hero')[0];
//                 if (hasKenburns) {
//                     var w_height = $(window).height();
//                     var w_width = $(window).width();
//                     $('.kenburns').attr('width', w_width);
//                     $('.kenburns').attr('height', w_height);
//                     $('.kenburns').kenburns({
//                         images: ['images/bg/home/2.jpg',
//                             'images/bg/home/2.jpg'],
//                         frames_per_second: 30,
//                         display_time: 5000,
//                         fade_time: 1000,
//                         zoom: 1.1,
//                         background_color: '#000000'
//                     });
//                 }
//             }

        </script>

        <script src="assets/js/gmap.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s"></script>
        <script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-565c7035f0c1f312" async="async"></script>
    </body>

    <!-- Mirrored from bpp.lk/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2016 05:40:20 GMT -->
</html>
