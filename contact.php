<?php include('details.php');

$message = '';
if ($_POST) {
    $message = '<div class="alert alert-info" role="alert">
        This contact form is available for display only in the demo version.
    </div>';
}

$page = 'contact';
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
    <title>Contact | Ajola Printwell</title>
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
                                <h1 class="page-title">Contact</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Contact</li>
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
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="full">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="main_heading text_align_center">
                                    <h2>GET IN TOUCH</h2>
                                </div>
                            </div>
                            <div class="contact_information">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                                    <div class="information_bottom text_align_center">
                                        <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                                        <div class="info_cont">
                                            <h4>Registered Office</h4>
                                            <p><?= $address ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                                    <div class="information_bottom text_align_center">
                                        <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                                        <div class="info_cont">
                                            <h4><?= $mobile ?></h4>
                                            <h4><?= $mobile1 ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                                    <div class="information_bottom text_align_center">
                                        <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                        <div class="info_cont">
                                            <h4><?= $email ?></h4>
                                            <h4><?= $email1 ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                                <h2 class="text_align_center">DROP US MESSAGE</h2>
                                <div class="form_section">
                                    <?= $message ?>
                                    <form class="form_contant" action="#" method="post">
                                        <fieldset>
                                            <div class="row">
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" name="full_name" placeholder="Your name" type="text" required>
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" name="contact_no" placeholder="Phone Number" type="text" required>
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" name="email_id" placeholder="Email adress" type="email" required>
                                                </div>
                                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input class="field_custom" name="subject" placeholder="subject" type="text" required>
                                                </div>
                                                <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <textarea class="field_custom" name="message" placeholder="Message" required></textarea>
                                                </div>
                                                <div class="center">
                                                    <button type="submit" class="btn main_bt">SUBMIT NOW</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21070.69177125932!2d72.58780068504598!3d23.045591151497554!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85312c8d93c9%3A0xfbe084d6ccefae44!2sAjola%20Printwell%20Papers%20Private%20Limited!5e0!3m2!1sen!2sin!4v1680714610401!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- end section -->
    <?php include('footer_nav.php'); ?>
    <?php include('footer_assets.php'); ?>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>