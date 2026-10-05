<?php include('details.php');
$page = 'clients';
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
    <title>Clients | Ajola Printwell</title>
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
                                <h1 class="page-title">Clients</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Clients</li>
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
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h2>Our Clients</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $clientsList = getSampleClients();
                foreach ($clientsList as $clientsRow) {
                    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3" style="padding: 50px 0;text-align: center;"><img src="' . $site_url . 't/' . $clientsRow['image'] . '" alt="#" /></div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- end section -->
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
</body>

</html>