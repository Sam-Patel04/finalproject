<?php include('details.php');
$page = 'products';
if (isset($_GET['url']) && isset($_GET['id'])) {
    $product_url = $_GET['url'];
    $product_id = (int)$_GET['id'];
    $productData = getSampleProductByUrlAndId($product_url, $product_id);
    if (!$productData) {
        $allProds = getSampleProducts();
        $productData = !empty($allProds) ? $allProds[0] : null;
    }
} else {
    $allProds = getSampleProducts();
    $productData = !empty($allProds) ? $allProds[0] : null;
}

if (!$productData) {
    header('location: ' . $site_url);
    exit;
}

if (!isset($_SESSION['shopping_list'])) {
    $_SESSION['shopping_list'] = [];
}

if (isset($_SESSION['shopping_list'][$productData['id']])) {
    $selectedQty = $_SESSION['shopping_list'][$productData['id']];
} else {
    $selectedQty = 1;
}

$message = '';
if (isset($_POST['addtocart'])) {
    $qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 1;
    if ($qty < 1) {
        $qty = 1;
    }
    $_SESSION['shopping_list'][$productData['id']] = $qty;
    $selectedQty = $qty;

    $message = '<div class="alert alert-success" role="alert">
        Product has been successfully added to shopping cart.
    </div>';
}

if (isset($_POST['reviewbtn'])) {
    $message = '<div class="alert alert-success" role="alert">
        Thank you! Review submission is simulated in this frontend demo.
    </div>';
}

$categoryData = getSampleCategoryById($productData['category_id']);
if (!$categoryData) {
    $categoryData = [
        'id' => $productData['category_id'],
        'name' => 'Pouches',
        'url' => 'products',
    ];
}

$feedbackListData = getSampleFeedbacks($productData['id']);
$feedbackCount = count($feedbackListData);
$rating = 5;
if ($feedbackCount > 0) {
    $starSum = 5;
    foreach ($feedbackListData as $fbRow) {
        $starSum += $fbRow['star'];
    }
    $rating = $starSum / ($feedbackCount + 1);
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
    <title><?= $productData['meta_title'] ?> | Ajola Printwell</title>
    <meta name="keywords" content="<?= $productData['meta_tags'] ?>">
    <meta name="description" content="<?= $productData['meta_description'] ?>">
    <?php include('header_assets.php') ?>
    <!-- zoom effect -->
    <link rel='stylesheet' href='<?= $site_url ?>assets/css/hizoom.css'>
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
                                <h1 class="page-title"><?= ucwords($productData['name']) ?></h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li><a href="<?= $site_url ?>">Products</a></li>
                                    <li><a href="<?= $site_url . '/' . $categoryData['url'] . '/' . $categoryData['id'] ?>"><?= ucwords($categoryData['name']) ?></a></li>
                                    <li class="active"><?= ucwords($productData['name']) ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->

    <!-- section -->
    <div class="section padding_layout_1 product_detail">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?= $message ?>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="product_detail_feature_img hizoom hi2">
                                <div class='hizoom hi2'> <img src="<?= $site_url . 't/' . $productData['thumbnail'] ?>" alt="#" style="width:100%;height:100%;" /> </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
                            <div class="product-heading">
                                <h2><?= $productData['name'] ?></h2>
                            </div>
                            <div class="product-detail-side"><span class="new-price">₹ <?= number_format($productData['price']) ?>/-</span>
                                <?php
                                if ($rating >= 5) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>';
                                } elseif ($rating > 4.5) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-fa-star-half" aria-hidden="true"></i> </span>';
                                } elseif ($rating >= 4) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                } elseif ($rating > 3.5) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half" aria-hidden="true"></i> <i class="fa fa-fa-star-o" aria-hidden="true"></i> </span>';
                                } elseif ($rating >= 3) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                } elseif ($rating > 2.5) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-fa-star-o" aria-hidden="true"></i> </span>';
                                } elseif ($rating >= 2) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                } elseif ($rating > 1.5) {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-fa-star-o" aria-hidden="true"></i> </span>';
                                } else {
                                    echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                }
                                ?>
                                <?= ($feedbackCount > 0 ? '<span class="review">(' . $feedbackCount . ' customer review)</span>' : '') ?> <br><br>
                                <span class="new-price">Qty : <?= number_format($productData['qty']) ?> NOS</span>
                            </div>
                            <div class="detail-contant">
                                <form class="cart" method="post" action="#">
                                    <div class="quantity">
                                        <input step="1" min="1" max="10000" name="qty" value="<?= $selectedQty ?>" title="Qty" class="input-text qty text" size="4" type="number">
                                    </div>
                                    <button type="submit" class="btn sqaure_bt" name="addtocart">Add to cart</button>
                                </form>
                            </div>
                            <div class="share-post"> <a href="#" class="share-text">Share</a>
                                <ul class="social_icons">
                                    <?php
                                    $shareUrl = $site_url . '/' . $categoryData['url'] . '/' . $productData['url'] . '/' . $productData['id'];
                                    ?>
                                    <li><a target="_blank" href="https://facebook.com/sharer/sharer.php?u=<?= $shareUrl ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/share?url=<?= $shareUrl ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a target="_blank" href="https://plus.google.com/share?url=<?= $shareUrl ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a target="_blank" href="whatsapp://send?text=<?= $shareUrl ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?= $shareUrl ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="tab_bar_section">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (<?= $feedbackCount ?>)</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="description" class="tab-pane active">
                                            <div class="product_desc">
                                                <?= $productData['description'] ?>
                                            </div>
                                        </div>
                                        <div id="reviews" class="tab-pane fade">
                                            <div class="product_review">
                                                <h3>Reviews (<?= $feedbackCount ?>)</h3>
                                                <?php
                                                foreach ($feedbackListData as $feedbackRow) {
                                                    echo '
                                                    <div class="commant-text row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <h5>' . $feedbackRow['name'] . '</h5>
                                                            <p><span class="c_date">' . date('M d, Y', strtotime($feedbackRow['date'])) . '</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                                            <span class="rating"> ';
                                                    $rating = $feedbackRow['star'];
                                                    if ($rating >= 5) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>';
                                                    } elseif ($rating > 4.5) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-fa-star-half" aria-hidden="true"></i> </span>';
                                                    } elseif ($rating >= 4) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                                    } elseif ($rating > 3.5) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half" aria-hidden="true"></i> <i class="fa fa-fa-star-o" aria-hidden="true"></i> </span>';
                                                    } elseif ($rating >= 3) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                                    } elseif ($rating > 2.5) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-fa-star-o" aria-hidden="true"></i> </span>';
                                                    } elseif ($rating >= 2) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                                    } elseif ($rating > 1.5) {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-fa-star-o" aria-hidden="true"></i> </span>';
                                                    } else {
                                                        echo '<span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>';
                                                    }

                                                    echo '</span>
                                                            <p class="msg">' . $feedbackRow['review'] . '</p>
                                                        </div>
                                                    </div>';
                                                }
                                                ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="full review_bt_section">
                                                            <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                                                        </div>
                                                        <div class="full">
                                                            <div id="collapseExample" class="full collapse commant_box">
                                                                <form accept-charset="UTF-8" action="#" method="post">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <input class="field_custom" name="star" step="1" type="number" placeholder="Star" min="1" max="5" required>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input class="field_custom" name="email_id" type="email" placeholder="Email" required>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input class="field_custom" name="name" type="text" placeholder="Name" required>
                                                                        </div>
                                                                    </div>
                                                                    <textarea class="form-control animated" cols="50" id="new-review" name="review" placeholder="Enter your review here..." required=""></textarea>
                                                                    <div class="full_bt center">
                                                                        <button class="btn sqaure_bt" name="reviewbtn" type="submit">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                                    <h3>Related products</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $relatedProductsList = getSampleProducts($productData['category_id'], 'Active', 3, $productData['id']);
                        if (empty($relatedProductsList)) {
                            // If no other products in same category, show any other active products
                            $relatedProductsList = getSampleProducts(null, 'Active', 3, $productData['id']);
                        }
                        foreach ($relatedProductsList as $productRow) {
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
                        if (!empty($productData['brochure'])) {
                        ?>
                            <div class="side_bar_blog">
                                <a class="btn sqaure_bt" href="<?= $site_url . 't/' . $productData['brochure'] ?>" style="padding:auto 10px">Download E-Brochure</a>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="side_bar_blog">
                            <h4>TAG</h4>
                            <div class="tags">
                                <ul>
                                    <?php
                                    foreach (explode(',', $productData['meta_tags']) as $tag) {
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
                        if (!empty($allCategories)) {
                        ?>
                            <div class="side_bar_blog">
                                <h4>OUR PRODUCTS</h4>
                                <div class="categary">
                                    <ul>
                                        <?php
                                        foreach ($allCategories as $categoryRow) {
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
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src='<?= $site_url ?>assets/js/hizoom.js'></script>
    <script>
        $('.hi1').hiZoom({
            width: 300,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
</body>

</html>