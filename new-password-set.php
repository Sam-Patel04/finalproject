<?php
include('details.php');
$userrow = ['id' => 1];
$token = 'demo';
$message = '<div class="alert alert-info" role="alert">Password reset is disabled in this frontend demo. <a href="' . $site_url . '">Return to Home</a></div>';
if (isset($_REQUEST['login'])) {
    $message = '<div class="alert alert-warning" role="alert">Password reset is disabled in this frontend demo.</div>';
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
    <style>
        #password-strength-status,
        #username-status,
        #email-status {
            padding: 5px 10px;
            border-radius: 4px;
            margin-top: 5px;
        }

        .medium-password {
            background-color: #fd0;
        }

        .weak-password,
        .username-taken,
        .email-taken {
            background-color: #FBE1E1;
        }

        .strong-password {
            background-color: #D5F9D5;
        }
    </style>
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
                                <h2 class="text_align_center">Set New Password</h2>
                                <div class="form_section">
                                    <?= $message ?>
                                    <form class="form_contant" action="#" method="post" autocomplete="off">
                                        <input type="hidden" value="<?= $token ?>" name="password_reset_token" id="password_reset_token" />
                                        <input type="hidden" value="<?= $userrow['id'] ?>" name="id" id="id" />
                                        <fieldset>
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-12 col-sm-6">
                                                    <label for="username">Username</label>
                                                    <input class="field_custom" type="text" value="<?= $userrow['username'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-12 col-sm-6">
                                                    <label for="username">Email id</label>
                                                    <input class="field_custom" type="text" value="<?= $userrow['email_id'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-12 col-sm-6">
                                                    <label for="password">Password</label>
                                                    <input class="field_custom" name="password" id="password" placeholder="Type New Password" type="password" required autocomplete="off">
                                                    <div id="password-strength-status"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="center">
                                                    <button type="submit" class="btn main_bt" name="login">Submit</button>
                                                </div>
                                                <div class="center mt-5">
                                                    <p>Know your Passowrd <a href="<?= $site_url ?>login" style="color: blue">Login Here</a><br></p>
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
    <script>
        $('#password').on('change', function() {
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            var password = $('#password').val().trim();
            if (password.length < 6) {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('weak-password');
                $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
            } else {
                if (password.match(number) && password.match(alphabets) && password.match(special_characters)) {
                    $('#password-strength-status').removeClass();
                    $('#password-strength-status').html("");
                    // $('#password-strength-status').addClass('strong-password');
                    // $('#password-strength-status').html("Strong");
                } else {
                    $('#password-strength-status').removeClass();
                    $('#password-strength-status').addClass('medium-password');
                    $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
                }
            }
        });
    </script>
</body>

</html>