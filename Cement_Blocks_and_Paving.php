<!DOCTYPE html>
<html>
    <head>
        <!-- Mirrored from bpp.lk/aboutus by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2016 05:41:31 GMT -->
        <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Senarath Group | Cement Blocks and Paving</title>
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


        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>


        <link href="Content/history/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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


            /////////////////////////////////////////////////////galleryt///////////////////
            @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
            body{
                font-family: 'Quicksand', sans-serif;
            }
            .gal-container{
                padding: 12px;
            }
            .gal-item{
                overflow: hidden;
                padding: 3px;
            }
            .gal-item .box{
                height: 350px;
                overflow: hidden;
            }
            .box{
                height: 350px;
                width: 100%;
                overflow: hidden;
            }
            .box img{
                height: 100%;
                width: 100%;
                object-fit:cover;
                -o-object-fit:cover;
            }
            .gal-item a:focus{
                outline: none;
            }
            .gal-item a:after{
                content:"\e003";
                font-family: 'Glyphicons Halflings';
                opacity: 0;
                background-color: rgba(0, 0, 0, 0.75);
                position: absolute;
                right: 3px;
                left: 3px;
                top: 3px;
                bottom: 3px;
                text-align: center;
                line-height: 350px;
                font-size: 30px;
                color: #fff;
                -webkit-transition: all 0.5s ease-in-out 0s;
                -moz-transition: all 0.5s ease-in-out 0s;
                transition: all 0.5s ease-in-out 0s;
            }
            .gal-item a:hover:after{
                opacity: 1;
            }
            .modal-open .gal-container .modal{
                background-color: rgba(0,0,0,0.4);
            }
            .modal-open .gal-item .modal-body{
                padding: 0px;
            }
            .modal-open .gal-item button.close{
                position: absolute;
                width: 25px;
                height: 25px;
                background-color: #000;
                opacity: 1;
                color: #fff;
                z-index: 999;
                right: -12px;
                top: -12px;
                border-radius: 50%;
                font-size: 15px;
                border: 2px solid #fff;
                line-height: 25px;
                -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
                box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
            }
            .modal-open .gal-item button.close:focus{
                outline: none;
            }
            .modal-open .gal-item button.close span{
                position: relative;
                top: -3px;
                font-weight: lighter;
                text-shadow:none;
            }
            .gal-container .modal-dialogue{
                width: 80%;
            }
            .gal-container .description{
                position: relative;
                height: 40px;
                top: -40px;
                padding: 10px 25px;
                background-color: rgba(0,0,0,0.5);
                color: #fff;
                text-align: left;
            }
            .gal-container .description h4{
                margin:0px;
                font-size: 15px;
                font-weight: 300;
                line-height: 20px;
            }
            .gal-container .modal.fade .modal-dialog {
                -webkit-transform: scale(0.1);
                -moz-transform: scale(0.1);
                -ms-transform: scale(0.1);
                transform: scale(0.1);
                top: 100px;
                opacity: 0;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
            }

            .gal-container .modal.fade.in .modal-dialog {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                -webkit-transform: translate3d(0, -100px, 0);
                transform: translate3d(0, -100px, 0);
                opacity: 1;
            }
            @media (min-width: 768px) {
                .gal-container .modal-dialog {
                    width: 55%;
                    margin: 50 auto;
                }
            }
            @media (max-width: 768px) {
                .gal-container .modal-content{
                    height:250px;
                }
            }
            /* Footer Style */
            i.red{
                color:#BC0213;
            }
            .gal-container{
                padding-top :75px;
                padding-bottom:75px;
            }
            footer{
                font-family: 'Quicksand', sans-serif;
            }
            footer a,footer a:hover{
                color: #88C425;
            }




            /////////////////////////////////////////////////////galleryt///////////////////

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


        <script>
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
        </script>
    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar">
        <nav class="navbar navbar-default navbar-fixed-top mega trans-helper navbar-small">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Definity - Logo"></a>
                </div>  
            </div>

            <?php include './php/menu.php'; ?>



        </nav>



        <!--
        --><section  class="container">
            <div class="row section-min">
                <div class="col-md-offset-1 col-md-10  font6 historyTag ">
                    <!--            <header class="bigHead">
                                    <h2 class="h-alt">About Us</h2>
                                </header>-->
                    <img ata-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;" src="images/bg/about/Cement_Blocks_and_Paving.jpg" class="img-responsive" />
                    <br />
                    <h2 class="h-alt"><b></b></h2>
                    <p style="text-align: justify;color: #007EFF;">
                        In the fields of architecture and civil engineering construction is a process that consists of the building or assembling of infrastructure.
                        In the modern industrialized world construction usually involves the translation of designs into reality.
                        The modern trend in design is the using of paving blocks for landscaping needs.
                        This approach has become more common in recent years and involves the client contracting a single entity of both providing a design and creating that design.
                        Interlocking paving has been used for thousands of years.The Roman built roads with paving blocks to travel quickly within the empire are still there.One of the oldest paved roads was built over 4600 years ago in Egypt.Holland turned to use concrete paving blocks in 1940 and Germany in 1960.
                        Paving stones are made from a dry mix of gravel,sand,cement,colour and little amount of water.The high pressure and vibration causes the water to set the cement.So there paving blocks have high strength.
                        When one think that the interlocking paving stones fit together like forming only few designs that is not the case at all.The stones cannot move independently from its neighbor because the borders holding the paving blocks together.
                        Interlocking paving blocks are manufactured by machinery in factories.Now a days interlocking paving is more popular, productive, attractive and it yields high strength.There is no production use today that can stand up or stand out like interlocking paving.It provides admirableappeal at your company, house,or outdoor areas.Interlocking paving is charm but very elegance.


                    </p>
                    </br>
                    <h6>The advantages of using interlocking paving are,</h6>
                    <ol type="1">
                        <li>Can guaranteed for a longtime against cracking, chipping or due to moisture temperature or frost.</li>
                        <li>More attractive that concrete and four times stronger that concrete blocks</li>
                        <li>Comes in various colours, shapes, diverse collection of stone finishing and pattern combinations</li>
                        <li>Easy to clean no fading or slipping</li>
                        <li>It one is damaged can remove the stone and replace with a new one</li>
                        <li>Enviromental friendly</li>
                        <li>Do not need to cure like concrete products</li>
                        <li>Increase the value of your property</li>


                    </ol>

                    <br /> 

                </div>
            </div>
            
           
        </section>
        
        <?php include './php/gallery.php';?>

       













        <!--
         
        <section class="container container-formated font6 historyTag">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 ">
                    <h2 class="h-alt"><b>Progress</b> </h2>
                    <p>Our team is multi skilled and proactive with a need to use innovation as driver for success. This trait together with the state of art, modern sophisticated technology base and infinite resource availability, has seen us gain a competitive edge, especially in efficient and timely project completion executed to the highest standards of Quality and Safety. We have also recognized reliable contractors specialized in works as "Taskmaster's", who definitely complete projects on time, with assured quality.</p>
                </div>
                <div class="col-md-offset-1 col-md-10">
                    <h2 class="h-alt"><b>Company Overview</b> </h2>
                    <p> We have been accredited CIDA grading C-1 for Highways, C-2 for Irrigation, C-3 for Water Supply, C-4 for Groynes, Revetments & Reclamation, C-3 for Bridges, C-4 for Storm Water Drainage and certified with ISO 9001:2008 in Sri Lanka. We have the committed management and the engineering team, which has grown to over 700 persons and has successfully completed over 60 civil engineering projects. </p>
                    <p> We have successfully completed infrastructure development projects worth over billions of rupees during the last seven years, mainly on Roads, Bridges, Irrigation, Water supply and Storm Water Drainage & Environment Improvement sectors.</p>
                    <p> We also have a fleet of heavy machinery which is capable of handling large scale construction work.</p>
                    <p> Maintaining quality and safety standards is a top priority aspect in our company. We have continued to maintain our spirited edge in the engineering industry by providing cost effective engineering services and also all our construction sites conform to environmental regulations and requirements and constantly strive at strengthening our contribution towards the protection of nature.</p>
                </div>
            </div>
        </section>
         
        <section class="container">
        <div class="row section-min">
            <div class="col-md-offset-1 col-md-10 font6 ">
                <header class="bigHead font6">
                    <h2 class="h-alt">Projects</h2>
                </header>
                <section id="cd-timeline" class="cd-container">
        
        
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/1.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Construction of Bank Protection Works of Beira Lake</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/WB%20Beira%20lake%20Main.jpg" alt="Construction of Bank Protection Works of Beira Lake" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/3.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Thalgodapitiya – Yatawatta – Dombawela Road (B-409)</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/TYDRMain.jpg" alt="Thalgodapitiya – Yatawatta – Dombawela Road (B-409)" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/8.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Steel Bridge at Weras Ganga Storm Water Drainnage &amp; Environment Improvement Project</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/Steel%20Br%20Main.jpg" alt="Steel Bridge at Weras Ganga Storm Water Drainnage &amp; Environment Improvement Project" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/18.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Weras Ganga Storm Water Drainage &amp; Environment Improvement Project</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/WG%20Storm%20DI%202.jpg" alt="Weras Ganga Storm Water Drainage &amp; Environment Improvement Project" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/20.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Dredging at Weras Ganga Project</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/WG%20Dredge%20Main.jpg" alt="Dredging at Weras Ganga Project" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/22.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Remedial works of Muthiyankaddu Dam in Mullaitivu District</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/MDIP%20Main.jpg" alt="Remedial works of Muthiyankaddu Dam in Mullaitivu District" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/23.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Construction of Harbour for Yachts in Port of Galle – Dredging Works</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/Galle%20dre%20main.jpg" alt="Construction of Harbour for Yachts in Port of Galle – Dredging Works" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/24.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Anchorage Facility at Maradana Landing Site in Beruwala</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/Beruwala%20Main.jpg" alt="Anchorage Facility at Maradana Landing Site in Beruwala" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/25.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Construction of Harbour for Yachts in Port of Galle</h2>
                                    <span class="cd-date">Year: 2014</span>
                                    <img src="images/Projects/Projects/Galle%20harbour%20Main.jpg" alt="Construction of Harbour for Yachts in Port of Galle" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/2.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Ibbagamuwa – Kumbukgete – Madagalla Road (B-169)</h2>
                                    <span class="cd-date">Year: 2013</span>
                                    <img src="images/Projects/Projects/Ibbagamuwa-Kumbukgete-Madagalla.jpg" alt="Ibbagamuwa – Kumbukgete – Madagalla Road (B-169)" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/4.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Galligamuwa – Ruwanwella – Karawanella Road (B-127)</h2>
                                    <span class="cd-date">Year: 2013</span>
                                    <img src="images/Projects/Projects/GRRPMain.jpg" alt="Galligamuwa – Ruwanwella – Karawanella Road (B-127)" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/11.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Kanthale Pipe Laying</h2>
                                    <span class="cd-date">Year: 2012</span>
                                    <img src="images/Projects/Projects/kanthale%20Pipelaying%20Main.jpg" alt="Kanthale Pipe Laying" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/10.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Construction of Aravi AruBridge in Arrippu on Thallady Arippu Marrichchukaddi Road (B-403)</h2>
                                    <span class="cd-date">Year: 2010</span>
                                    <img src="images/Projects/Projects/Aravi%20Aru%20Main.jpg" alt="Construction of Aravi AruBridge in Arrippu on Thallady Arippu Marrichchukaddi Road (B-403)" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/12.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">HDPE Pipe Laying in Batticaloa Lagoon</h2>
                                    <span class="cd-date">Year: 2010</span>
                                    <img src="images/Projects/Projects/HDPE%20Batti%20Main.jpg" alt="HDPE Pipe Laying in Batticaloa Lagoon" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/16.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Modarawatta Landing Site Quay Wall</h2>
                                    <span class="cd-date">Year: 2010</span>
                                    <img src="images/Projects/Projects/Modarawattha%20Main.jpg" alt="Modarawatta Landing Site Quay Wall" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/5.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Navatkuli - Kerathivu - Mannar Road (A-32)</h2>
                                    <span class="cd-date">Year: 2009</span>
                                    <img src="images/Projects/Projects/Navathkuli%20Main.jpg" alt="Navatkuli - Kerathivu - Mannar Road (A-32)" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/6.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Medawachchiya – Mannar – Talaimannar Road (Aa-014)</h2>
                                    <span class="cd-date">Year: 2009</span>
                                    <img src="images/Projects/Projects/Meda%20DI%201.jpg" alt="Medawachchiya – Mannar – Talaimannar Road (Aa-014)" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/7.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Unnichchai Tank at Batticaloa</h2>
                                    <span class="cd-date">Year: 2009</span>
                                    <img src="images/Projects/Projects/Unnichchai%20Tank%20DI%201.jpg" alt="Unnichchai Tank at Batticaloa" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/13" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Batticaloa Water Supply Project DI Pipe Laying</h2>
                                    <span class="cd-date">Year: 2009</span>
                                    <img src="images/Projects/Projects/DI%20Pipe%20Batti%20MAin.jpg" alt="Batticaloa Water Supply Project DI Pipe Laying" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/14.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Batticaloa Water Supply Project Intake Structure</h2>
                                    <span class="cd-date">Year: 2009</span>
                                    <img src="images/Projects/Projects/BWSP%20MAin.jpg" alt="Batticaloa Water Supply Project Intake Structure" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/9.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Unnichchai Tank Central Spill Bridge</h2>
                                    <span class="cd-date">Year: 2008</span>
                                    <img src="images/Projects/Projects/Un%20Bridge%20Main.jpg" alt="Unnichchai Tank Central Spill Bridge" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/15.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Fishery Harbour Project – Negombo</h2>
                                    <span class="cd-date">Year: 2008</span>
                                    <img src="images/Projects/Projects/Negombo%20Main.jpg" alt="Fishery Harbour Project – Negombo" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/17.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Construction of Fishery Harbour - Puranawella</h2>
                                    <span class="cd-date">Year: 2008</span>
                                    <img src="images/Projects/Projects/Puranawella%20Main.jpg" alt="Construction of Fishery Harbour - Puranawella" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/19.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Dredging of Lunawa Lagoon &amp; Improvements to Sea Outfall</h2>
                                    <span class="cd-date">Year: 2008</span>
                                    <img src="images/Projects/Projects/Lunawa%20Main.jpg" alt="Dredging of Lunawa Lagoon &amp; Improvements to Sea Outfall" />
                                </div>
                            </a>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="Content/history/img/cd-icon-picture.svg" alt="Picture">
                            </div>
                            <a href="projects/details/21.html" class="cd-read-more">
                                <div class="cd-timeline-content font6">
                                    <h2 class="bold font6">Dredging at Fishery Harbour Puranawella</h2>
                                    <span class="cd-date">Year: 2008</span>
                                    <img src="images/Projects/Projects/Purana%20Dred%20Main.jpg" alt="Dredging at Fishery Harbour Puranawella" />
                                </div>
                            </a>
                        </div>
                            </section>
                        </div>
                    </div>
                </section>
        -->
        <!-- <div class="cta-link ">
            <div class="bg-overlay">
        
                <div class="cta-wrapper">
                    <h3 class="h-alt wow fadeIn animated" data-wow-delay=".1s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s;">See what we can do for you</h3>
                    <a href="projects.html" class="btn btn-light btn-large wow fadeIn animated" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">Projects</a>
                    <a href="projects/map.html" class="btn btn-light btn-large wow fadeIn animated" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">Projects Locations</a>
                </div>
        
            </div>
        </div>-->





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

        <script src="assets/js/vendor/jquery.parallax-1.1.3.js"></script>
        <script src="assets/js/vendor/owl.carousel.min.js"></script>
        <script src="assets/js/vendor/parallax-init.js"></script>
        <script src="assets/js/vendor/carousel-init.js"></script>


        <script src="assets/js/gmap.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s"></script>
        <script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-565c7035f0c1f312" async="async"></script>
    </body>

    <!-- Mirrored from bpp.lk/aboutus by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2016 05:45:14 GMT -->
</html>
