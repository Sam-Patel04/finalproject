<?php
include('details.php');
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
if (!empty($productsid)) {
    $shoppingcartList = getSampleProductsByIds($productsid);
    foreach ($shoppingcartList as $productrow) {
        $qty = isset($_SESSION['shopping_list'][$productrow['id']]) ? $_SESSION['shopping_list'][$productrow['id']] : 1;
        $total += $productrow['price'] * $qty;
    }
}

$message = '<div class="alert alert-info" role="alert">Checkout is disabled in the demo version.</div>';
if (isset($_POST['submit'])) {
    $message = '<div class="alert alert-warning" role="alert">Checkout is disabled in the demo version. No real orders or payments are processed.</div>';
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
    <title>Checkout | Ajola Printwell</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php include('header_assets.php') ?>
</head>

<body id="default_theme" class="it_serv_shopping_cart it_checkout checkout_page">
    <?php include('header_nav.php') ?>
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Checkout</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Checkout</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding_layout_1 checkout_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?= $message ?>
                </div>
                <?php
                if (empty($_SESSION['shopping_list'])) {
                    echo '<div class="col-sm-12"><div class="alert alert-warning" role="alert">
                        Your cart is empty. <a href="' . $site_url . 'products">Click here to browse products</a>
                    </div></div>';
                }
                ?>
                <div class="col-sm-12">
                    <div class="full">
                        <div class="tab-info coupon-section">
                            <p>Have a coupon? <a href="#cupon" class="" data-toggle="collapse">Click here to enter your code</a></p>
                        </div>
                        <div id="cupon" class="collapse">
                            <div class="coupen-form">
                                <form action="#" method="post">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" value="<?= htmlspecialchars($_SESSION['discount_label']) ?>" type="text">
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <button class="bt_main" name="apply_coupon" type="submit">Apply coupon</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout-form">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <label>Full Name <span class="red">*</span></label>
                                            <input name="full_name" id="full_name" type="text" value="<?= (isset($_SESSION['user_full_name']) ? htmlspecialchars($_SESSION['user_full_name']) : 'Demo User') ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <label>Email Id <span class="red">*</span></label>
                                            <input name="email_id" id="email_id" type="email" value="<?= (isset($_SESSION['user_email_id']) ? htmlspecialchars($_SESSION['user_email_id']) : 'demo@example.com') ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <label>Contact No</label>
                                            <input name="contact_no" id="contact_no" type="text" value="<?= (isset($_SESSION['user_contact_no']) ? htmlspecialchars($_SESSION['user_contact_no']) : '+91 98765 43210') ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <label>Pin Code</label>
                                            <input name="pin_code" id="pin_code" type="text" value="<?= (isset($_SESSION['user_pin_code']) ? htmlspecialchars($_SESSION['user_pin_code']) : '380001') ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-field">
                                            <label>Address <span class="red">*</span></label>
                                            <textarea name="address" id="address" required><?= (isset($_SESSION['user_address']) ? htmlspecialchars($_SESSION['user_address']) : '123 Demo Street, Industrial Area') ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <label>Drawing / Artwork File</label>
                                            <input type="file" name="file" id="file" max="1" accept=".pdf" />
                                        </div>
                                    </div>

                                    <div class="center col-md-12">
                                        <div class="form-field">
                                            <button type="submit" name="submit" class="bt_main">Submit Order (Demo)</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
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
                            </tbody>
                        </table>
                    </div>
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