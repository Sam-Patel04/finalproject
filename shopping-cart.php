<?php include('details.php');
$page = 'shopping-cart';

if (!isset($_SESSION['shopping_list'])) {
    $_SESSION['shopping_list'] = [];
}
if (isset($_POST['removeproduct'])) {
    $removeId = (int)$_POST['id'];
    unset($_SESSION['shopping_list'][$removeId]);
}

$productsid = [];
foreach ($_SESSION['shopping_list'] as $key => $temp) {
    $productsid[] = (int)$key;
}

$discountList = [
    "FLAT10%" => "10",
];

if (!isset($_SESSION['discount'])) {
    $_SESSION['discount'] = 0;
    $_SESSION['discount_label'] = "";
}

if (isset($_POST['apply_coupon'])) {
    $coupon = trim($_POST['coupon_code'] ?? '');
    if ($coupon == "FLAT10%") {
        $_SESSION['discount'] = 0.10;
        $_SESSION['discount_label'] = "FLAT10%";
    } else {
        $_SESSION['discount'] = 0;
        $_SESSION['discount_label'] = "";
    }
}


$total = 0;
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
    <title>Shopping Cart | Ajola Printwell</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php include('header_assets.php') ?>
    <!-- <link rel='stylesheet' href='<?= $site_url ?>assets/css/hizoom.css'> -->
</head>

<body id="default_theme" class="it_serv_shopping_cart shopping-cart">
    <?php include('header_nav.php') ?>
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Shopping Cart</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Shopping Cart</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->
    <div class="section padding_layout_1 Shopping_cart_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <?php
                    if (sizeof($productsid) > 0) {
                    ?>
                        <div class="product-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody><?php

                                        $shoppingcartList = getSampleProductsByIds($productsid);
                                        $i = 1;
                                        foreach ($shoppingcartList as $productrow) {
                                            $total += $productrow['price'] * $_SESSION['shopping_list'][$productrow['id']];
                                        ?> <tr id="row<?= $i ?>">
                                            <input type="hidden" name="product_id[]" id="product_id<?= $i ?>" value="<?= $productrow['id'] ?>">
                                            <input type="hidden" name="price[]" id="price<?= $i ?>" value="<?= $productrow['price'] ?>">
                                            <td class="col-sm-8 col-md-6">
                                                <div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?= $site_url . 't/' . $productrow['thumbnail'] ?>" alt="#"></a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><a href="#"><?= $productrow['name'] ?></a></h4>
                                                        <span>Package: </span><span class="text-success"><?= $productrow['qty'] ?>NOS</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-1" style="text-align: center;padding:60px 10px">
                                                <a href="<?= $site_url . '/' . $productrow['category_url'] . '/' . $productrow['url'] . '/' . $productrow['id'] ?>" target="_blank">
                                                    <?= $_SESSION['shopping_list'][$productrow['id']] ?>
                                                </a>
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center">
                                                <p class="price_table">₹ <?= number_format($productrow['price']) ?>/-</p>
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center">
                                                <p class="price_table">₹ <?= number_format($productrow['price'] * $_SESSION['shopping_list'][$productrow['id']]) ?>/-</p>
                                            </td>
                                            <td class="col-sm-1 col-md-1">
                                                <form method="post" action="#">
                                                    <input type="hidden" name="id" value="<?= $productrow['id'] ?>" />
                                                    <button type="submit" class="bt_main" name="removeproduct"><i class="fa fa-trash"></i> Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                            $i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="table">
                                <tbody>
                                    <tr class="cart-form">
                                        <td class="actions">
                                            <form action="#" method="post">
                                                <div class="coupon">
                                                    <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" value="<?= $_SESSION['discount_label'] ?>" type="text">
                                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="actions">
                                            <table>
                                                <tr>
                                                    <th>Use Coupon Code "FLAT10%" = for 10%off</th>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="shopping-cart-cart">
                            <table>
                                <tbody>
                                    <tr class="head-table">
                                        <td>
                                            <h5>Cart Totals</h5>
                                        </td>
                                        <td class="text-right"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Subtotal</h4>
                                        </td>
                                        <td class="text-right">
                                            <h4>₹ <?= number_format($total, 2) ?>/-</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Coupon Discount</h5>
                                        </td>
                                        <td class="text-right">
                                            <h4>₹ <?= number_format($total * $_SESSION['discount'], 2) ?>/-</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>Total</h3>
                                        </td>
                                        <td class="text-right">
                                            <h4>₹ <?= number_format($total - ($total * $_SESSION['discount']), 2) ?>/-</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="<?= $site_url ?>products" class="button">Continue Shopping</a></td>
                                        <td><a href="<?= $site_url ?>checkout" class="button">Checkout</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php
                    } else {
                        echo "<h3>Shopping Cart is Empty</h3>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>