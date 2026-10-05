<?php include('details.php');
if (isset($_SESSION['user_username']) && isset($_SESSION['user_email_id']) && isset($_SESSION['user_status'])) {
    header("Location:index");
}
$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $_SESSION['message'] = '';
}

$message = '<div class="alert alert-info" role="alert">Account functionality is disabled in this frontend demo.</div>';
if (isset($_REQUEST['login'])) {
    $message = '<div class="alert alert-warning" role="alert">Account functionality is disabled in this frontend demo.</div>';
}


$page = 'login';
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
    <title>Login | Ajola Printwell</title>
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
                                <h1 class="page-title">Login</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Login</li>
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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                                <h2 class="text_align_center">Login to Your Account</h2>
                                <div class="form_section">
                                    <?= $message ?>
                                    <form class="form_contant" action="#" method="post" autocomplete="off">
                                        <fieldset>
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-12 col-sm-6">
                                                    <label for="username">Username</label>
                                                    <input class="field_custom" name="username" placeholder="Username" type="text" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-12 col-sm-6">
                                                    <label for="password">Password</label>
                                                    <input class="field_custom" name="password" placeholder="Password" type="password" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="center">
                                                    <button type="submit" class="btn main_bt" name="login">Login</button>
                                                </div>
                                                <div class="center mt-5">
                                                    <p>Forgot Passowrd here <a href="<?= $site_url ?>password-reset" style="color: blue">Reset Passowrd</a><br></p>
                                                </div>
                                                <div class="center">
                                                    <p>Not registered yet than <a href="<?= $site_url ?>register" style="color: blue">Register Here</a><br></p>
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