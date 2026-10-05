<?php include('details.php');
$page = 'index';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Home | Ajola Printwell</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php include('header_assets.php') ?>
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="<?= $site_url ?>assets/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="<?= $site_url ?>assets/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="<?= $site_url ?>assets/revolution/css/navigation.css" />
</head>

<body id="default_theme" class="it_service">
    <?php include('header_nav.php') ?>
    <!-- section -->
    <div id="slider" class="section main_slider">
        <div class="container-fuild">
            <div class="row">
                <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>

                            <?php
                            $homeSliderList = getSampleHomeSliders();
                            $i = 2;
                            foreach ($homeSliderList as $homeSliderRow) {

                                echo '<li data-index="rs-18' . $i . '" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="' . $site_url . 't/' . $homeSliderRow['image'] . '" data-rotate="0" data-saveperformance="off" data-title="' . $homeSliderRow['title'] . '" data-description="">
                                    <img src="' . $site_url . 't/' . $homeSliderRow['image'] . '" alt="" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-270-layer-101" data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'0\',\'0\',\'0\',\'0\']" data-width="full" data-height="full" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="s:300;s:300;" data-start="750" data-basealign="slide" data-responsive_offset="on" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-91" data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'15\',\'15\',\'15\',\'15\']" data-width="500" data-height="140" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-responsive_offset="on" style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                                    <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-11" data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'0\',\'0\',\'0\',\'0\']" data-fontsize="[\'70\',\'70\',\'70\',\'35\']" data-lineheight="[\'70\',\'70\',\'70\',\'50\']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap;">' . $homeSliderRow['title'] . '</div>
                                    <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" id="slide-18-layer-41" data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'52\',\'51\',\'51\',\'31\']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">' . $homeSliderRow['subtitle'] . '</div>
                                </li>';
                                $i--;
                            }
                            ?>
                        </ul>
                        <div class="tp-static-layers"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section padding_layout_1 light_silver">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="full">
                        <div class="main_heading text_align_left">
                            <h2>WHO ARE WE</h2>
                        </div>
                        <div>
                            <p class="large"><b>Ajola</b> is a company that specializes in the production of pouches, for Pesticides, Food ,spices and Seeds. The company has a strong commitment to <b>quality and innovation</b>, constantly improving their production processes to meet the evolving needs of their customers. With a focus on sustainability, ajola uses <b>eco-friendly materials</b> and employs ethical manufacturing practices to <b>reduce</b> their<b> environmental impact</b>. The company also offers <b>customized solutions</b> to meet the specific requirements of their clients, ensuring that they receive pouches that are both functional and aesthetically appealing. With their expertise and dedication to excellence, ajola has established itself as a leading producer of pouches in the industry</p>
                            <!--p class="large">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quo minus delectus sunt iusto mollitia ipsam illo est praesentium enim, nam rem eligendi dignissimos sint cum necessitatibus excepturi consequatur culpa!</p-->
                            <a class="btn main_bt" href="<?= $site_url ?>aboutus">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="full">
                        <img src="<?= $site_url ?>assets/images/it_service/Ajola.png" alt="" style="height: auto;width: 100%;margin: 20px auto;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <?php
    $categoryList = getSampleCategories('Active', 8);
    if (!empty($categoryList)) {
    ?>
        <!-- section -->
        <div class="section padding_layout_1 wow bounceIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="main_heading text_align_center">
                                <h2>Our Products</h2>
                                <p class="large">We package the products with best services to make you a happy customer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($categoryList as $categoryRow) {
                    ?>

                        <div class="col-md-4 service_blog margin_bottom_50">
                            <div class="full">
                                <div class="service_img"> <img class="img-responsive" src="<?= $site_url . 't/' . $categoryRow['thumbnail'] ?>" alt="#" /> </div>
                                <div class="service_cont">
                                    <h3 class="service_head"><?= $categoryRow['name'] ?></h3>
                                    <p style="word-break: break-word;"><?= substr(strip_tags($categoryRow['description']), 0, 150) ?>...</p>
                                    <div class="bt_cont"> <a class="btn sqaure_bt" href="<?= $site_url . $categoryRow['url'] . '/' . $categoryRow['id'] ?>">View More</a> </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- end section -->
    <?php

    }
    ?>
    <!-- section -->
    <div class="section padding_layout_1 light_silver gross_layout right_gross_layout );">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_right">
                            <h2>Our way of working</h2>
                            <p class="large">Easy and effective way to get your Pouches printed.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row counter">
                <div class="col-md-4"> </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><img src="img/printing.png" alt="" height="70"/></div>
                            <div class="text_align_right">
                                <p class="counter-heading text_align_right">Printing</p>
                            </div>
                            <h5 class="counter-count">2150</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><img src="img/limination.png" alt="" height="70"/></div>
                            <div class="text_align_right">
                                <p class="counter-heading text_align_right">Lamination</p>
                            </div>
                            <h5 class="counter-count">1280</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><img src="img/limination.png" alt="" height="70"/></div>
                            <div class="text_align_right">
                                <p class="counter-heading">Sliting</p>
                            </div>
                            <h5 class="counter-count">848</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
                            <div class="text_align_right"><img src="img/printing.png" alt="" height="70"/></div>
                            <div class="text_align_right">
                                <p class="counter-heading">Pouching</p>
                            </div>
                            <h5 class="counter-count">450</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <?php
    $testimonialList = getSampleTestimonials(3);
    if (!empty($testimonialList)) {
    ?>
        <!-- section -->
        <div class="section padding_layout_1 testmonial_section white_fonts" style="background-image: url(img/testimonials/feed2.jpg), linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));background-blend-mode:overlay;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="main_heading text_align_left">
                                <h2 style="text-transform: none;">What Clients Say?</h2>
                                <p class="large">Here are testimonials from clients..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="full">
                            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <?php
                                    $j = 0;
                                    foreach ($testimonialList as $testimonialRow) {
                                    ?>
                                        <li data-target="#testimonial_slider" data-slide-to="<?= $j ?>" class="<?= $j == 0 ? 'active' : '' ?>"></li>
                                    <?php
                                        $j++;
                                    }
                                    ?>
                                </ul>
                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <?php
                                    $i = 1;
                                    foreach ($testimonialList as $testimonialRow) {
                                    ?>
                                        <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>">
                                            <div class="testimonial-container">
                                                <div class="testimonial-content"><?= $testimonialRow['text'] ?></div>
                                                <div class="testimonial-photo"> <img src="<?= $site_url . 't/' . $testimonialRow['image'] ?>" class="img-responsive" alt="#" width="150" height="150"> </div>
                                                <div class="testimonial-meta">
                                                    <h4><?= $testimonialRow['name'] ?></h4>
                                                    <span class="testimonial-position"><?= $testimonialRow['company_name'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="full"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    <?php
    }
    ?>
    <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="contact_us_section">
                            <div class="call_icon"> <img src="<?= $site_url ?>assets/images/it_service/phone_icon.png" alt="#" /> </div>
                            <div class="inner_cont">
                                <h2>REQUEST A FREE QUOTE</h2>
                                <p>Get answers and advice from people you want it from.</p>
                            </div>
                            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="<?= $site_url ?>contact">Contact us</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <?php
    $clientsList = getSampleClients(5);
    if (!empty($clientsList)) {
    ?>
        <!-- section -->
        <div class="section padding_layout_1" style="padding: 50px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>OUR ESTTEMED CLIENTS</h2>
                        <div class="full">
                            <ul class="brand_list" style="
    width: 100%;
    display: flex;
    justify-content: center;
">
                                <?php
                                foreach ($clientsList as $clientsRow) {
                                    echo '<li><img src="' . $site_url . 't/' . $clientsRow['image'] . '" alt="#" /></li>';
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    <?php
    }
    ?>
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
    <!-- revolution js files -->
    <script src="<?= $site_url ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?= $site_url ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script>
        var tpj = jQuery;
        var revapi4;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_4_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_4_1");
            } else {
                revapi4 = tpj("#rev_slider_4_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 7000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            style: "metis",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%"
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [700, 700, 500, 400],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });

        /**===== End slider =====**/
    </script>
</body>

</html>