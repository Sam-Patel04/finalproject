<?php include('details.php');
$page = 'testimonials';
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
    <title>Testimonials | Ajola Printwell</title>
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
                                <h1 class="page-title">Testimonials</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Testimonials</li>
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
                            <h2>What our clients has to say about us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $i = 1;
                $testimonialList = getSampleTestimonials();
                foreach ($testimonialList as $testimonialRow) {
                ?>
                    <div class="col-12 col-md-6 carousel-item <?= $i == 1 ? 'active' : 'active' ?>" style="padding: 10px;border: 1px solid #000;">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="testimonial-photo" style="padding:20px"> <img src="<?= $site_url . 't/' . $testimonialRow['image'] ?>" class="img-responsive" alt="#" width="150" height="150" style="border-radius:50%"> </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="testimonial-content"><?= $testimonialRow['text'] ?></div>
                                <div class="testimonial-meta">
                                    <h4><?= htmlspecialchars($testimonialRow['name']) ?></h4>
                                    <span class="testimonial-position"><?= htmlspecialchars($testimonialRow['company_name']) ?></span>
                                </div>
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
    <!-- end section -->
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
</body>

</html>