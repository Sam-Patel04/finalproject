<?php include('details.php');
$page = 'products';
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
    <title>Products | Ajola Printwell</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php include('header_assets.php') ?>
</head>

<body id="default_theme" class="it_service">
    <?php include('header_nav.php') ?>
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Products</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Products</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->
    <?php
    $categoryList = getSampleCategories('Active');
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
                                    <p style="word-break: break-word;"><?= substr(strip_tags($categoryRow['description']),0,150) ?>...</p>
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
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
</body>

</html>