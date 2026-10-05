<?php
include('details.php');
$page = 'account';

$sampleOrders = [
    [
        'id' => 1,
        'order_id' => 'ORDER_101',
        'items' => 'Pesticide Laminated Foil Pouch - 1000 Qty<br>₹: 450.00 /-',
        'total_price' => 450.00,
        'order_date' => '2024-03-01',
        'status' => 'Delivered',
    ],
    [
        'id' => 2,
        'order_id' => 'ORDER_102',
        'items' => 'Namkeen & Snack Packaging Pouch - 1000 Qty<br>₹: 380.00 /-',
        'total_price' => 380.00,
        'order_date' => '2024-03-15',
        'status' => 'Pending',
    ],
];
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
    <title>Order History | Ajola Printwell</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php include('header_assets.php') ?>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <style>
        .dataTables_wrapper.form-inline {
            display: block !important;
            width: 100% !important;
        }
    </style>
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
                                <h1 class="page-title">Order History</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Order History</li>
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
                    <div class="alert alert-info" role="alert">
                        Order history is simulated in this frontend demo. Real database order persistence is disabled.
                    </div>
                    <div class="product-table">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Items</th>
                                    <th>Amount</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($sampleOrders as $order) {
                                    echo '<tr>
                                        <td><strong>' . $order['order_id'] . '</strong></td>
                                        <td>' . $order['items'] . '</td>
                                        <td>₹ ' . number_format($order['total_price'], 2) . '/-</td>
                                        <td>' . $order['order_date'] . '</td>
                                        <td>
                                            ' . ($order['status'] == 'Pending' ? '<span style="color:red">' . $order['status'] . '</span>' : '<span style="color:green">' . $order['status'] . '</span>') . '
                                        </td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap.min.js"> </script>
    <script>
        let table = $('#myTable').dataTable({
            responsive: true,
        });
    </script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>