<?php
include('details.php');
$page = 'account';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales Order | Ajola Printwell</title>
    <?php include('header_assets.php') ?>
</head>
<body id="default_theme" class="it_serv_shopping_cart shopping-cart">
    <?php include('header_nav.php') ?>
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-left">
                                <h1 class="page-title">Sales Order</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li><a href="<?= $site_url ?>order-history">Order History</a></li>
                                    <li class="active">Sales Order</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section padding_layout_1">
        <div class="container text-center">
            <div class="alert alert-info" role="alert" style="margin: 40px auto; max-width: 600px;">
                <h4>Demo Notice</h4>
                <p>Order details view is disabled in this frontend demo.</p>
                <a href="<?= $site_url ?>order-history" class="btn btn-primary" style="margin-top: 15px;">Return to Order History</a>
            </div>
        </div>
    </div>
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
</body>
</html>