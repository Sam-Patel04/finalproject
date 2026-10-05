<?php include('details.php');
$page = 'products';
if (isset($_GET['url']) && isset($_GET['id'])) {
    $category_url = $_GET['url'];
    $category_id = (int)$_GET['id'];
    $categoryData = getSampleCategoryByUrlAndId($category_url, $category_id);
    if (!$categoryData) {
        $allCats = getSampleCategories();
        $categoryData = !empty($allCats) ? $allCats[0] : null;
    }
} else {
    $allCats = getSampleCategories();
    $categoryData = !empty($allCats) ? $allCats[0] : null;
}

if (!$categoryData) {
    header('location: ' . $site_url);
    exit;
}

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
    <title><?= $categoryData['meta_title'] ?> | Ajola Printwell</title>
    <meta name="keywords" content="<?= $categoryData['meta_tags'] ?>">
    <meta name="description" content="<?= $categoryData['meta_description'] ?>">
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
                                <h1 class="page-title"><?= ucwords($categoryData['name']) ?></h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li><a href="<?= $site_url ?>products">Products</a></li>
                                    <li class="active"><?= ucwords($categoryData['name']) ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <div class="section padding_layout_1 wow bounceIn">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main_heading text_align_center">
                                    <h2><?= $categoryData['name'] ?></h2>
                                    <p class="large"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <?= $categoryData['description'] ?>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <?php
                        $productsList = getSampleProducts($categoryData['id']);
                        if (empty($productsList)) {
                            echo '<div class="col-12"><p>No products currently listed in this category.</p></div>';
                        }
                        foreach ($productsList as $productRow) {
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                                <div class="product_list">
                                    <a href="<?= $site_url . $categoryData['url'] . '/' . $productRow['url'] . '/' . $productRow['id'] ?>">
                                        <div class="product_img"> <img class="img-responsive" src="<?= $site_url . 't/' . $productRow['thumbnail'] ?>" alt=""> </div>
                                        <div class="product_detail_btm">
                                            <div class="center">
                                                <h4><?= htmlspecialchars($productRow['name']) ?></h4>
                                            </div>
                                            <div class="product_price">
                                                <p><span class="new_price">₹ <?= number_format($productRow['price']) ?> /-</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="side_bar">
                        <?php
                        if (!empty($categoryData['brochure'])) {
                        ?>
                            <div class="side_bar_blog">
                                <a class="btn sqaure_bt" href="<?= $site_url . 't/' . $categoryData['brochure'] ?>">Download E-Brochure</a>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="side_bar_blog">
                            <h4>TAG</h4>
                            <div class="tags">
                                <ul>
                                    <?php
                                    foreach (explode(',', $categoryData['meta_tags']) as $tag) {
                                        if (trim($tag) != '') {
                                            echo '<li><a href="#">' . htmlspecialchars(trim($tag)) . '</a></li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                        $allCategories = getSampleCategories('Active');
                        $otherCategories = [];
                        foreach ($allCategories as $c) {
                            if ((int)$c['id'] !== (int)$categoryData['id']) {
                                $otherCategories[] = $c;
                            }
                        }
                        if (!empty($otherCategories)) {
                        ?>
                            <div class="side_bar_blog">
                                <h4>OUR PRODUCTS</h4>
                                <div class="categary">
                                    <ul>
                                        <?php
                                        foreach ($otherCategories as $categoryRow) {
                                            echo '<li><a href="' . $site_url . $categoryRow['url'] . '/' . $categoryRow['id'] . '"><i class="fa fa-angle-right"></i> ' . htmlspecialchars($categoryRow['name']) . '</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
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