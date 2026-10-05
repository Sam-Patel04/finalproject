<?php
include('details.php');

$message = '<div class="alert alert-info" role="alert">This feature is disabled in the frontend demo. Profile persistence is disabled.</div>';

if (isset($_POST['update'])) {
    $message = '<div class="alert alert-warning" role="alert">Profile updates are disabled in this frontend demo.</div>';
}

if (!isset($_SESSION['user_username'])) {
    $_SESSION['user_username'] = 'demouser';
    $_SESSION['user_email_id'] = 'demo@example.com';
    $_SESSION['user_contact_no'] = '+91 98765 43210';
    $_SESSION['user_full_name'] = 'Demo User';
    $_SESSION['user_gender'] = 'Male';
    $_SESSION['user_date_of_birth'] = '1995-01-01';
    $_SESSION['user_address'] = '123 Demo Street, Industrial Area';
    $_SESSION['user_pin_code'] = '380001';
}

$page = 'register';
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
    <title>Profile | Ajola Printwell</title>
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
                                <h1 class="page-title">Profile</h1>
                                <ol class="breadcrumb">
                                    <li><a href="<?= $site_url ?>">Home</a></li>
                                    <li class="active">Profile</li>
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
                                <h2 class="text_align_center">Create an Account</h2>
                                <div class="form_section">
                                    <div id="form_error"><?= $message ?>
                                    </div>
                                    <form class="form_contant" action="#" method="post" autocomplete="off" onsubmit="return checkall();">
                                        <fieldset>
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-12 col-sm-6">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control field_custom" id="username" name="username" placeholder="Username" required autocomplete="off" value="<?= $_SESSION['user_username'] ?>">
                                                    <div id="username-status"></div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control field_custom" id="password" name="password" placeholder="Password" required autocomplete="off" value="">
                                                    <div id="password-strength-status"></div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="full_name">Full Name</label>
                                                    <input type="text" class="form-control field_custom" id="full_name" name="full_name" placeholder="Full Name" required autocomplete="off" value="<?= $_SESSION['user_full_name'] ?>">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="email_id">Email Id</label>
                                                    <input type="email" class="form-control field_custom" id="email_id" name="email_id" placeholder="Email Id" required autocomplete="off" value="<?= $_SESSION['user_email_id'] ?>">
                                                    <div id="email-status"></div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="contact_no">Contact No</label>
                                                    <input type="text" class="form-control field_custom" id="contact_no" name="contact_no" placeholder="Contact No" required autocomplete="off" value="<?= $_SESSION['user_contact_no'] ?>">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="gender">Gender</label>
                                                    <select class="form-control field_custom" id="gender" name="gender" required>
                                                        <option value=""> Select Gender</option>
                                                        <option <?= ($_SESSION['user_gender'] == "Male" ? "selected" : "") ?> value="Male"> Male</option>
                                                        <option <?= ($_SESSION['user_gender'] == "Female" ? "selected" : "") ?> value="Female"> Female</option>
                                                        <option <?= ($_SESSION['user_gender'] == "Other" ? "selected" : "") ?> value="Other"> Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="date_of_birth">Date Of Birth</label>
                                                    <input type="date" class="form-control field_custom" id="date_of_birth" name="date_of_birth" placeholder="Date Of Birth" required value="<?= $_SESSION['user_date_of_birth'] ?>">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="pin_code">Pin Code</label>
                                                    <input type="text" class="form-control field_custom" id="pin_code" name="pin_code" placeholder="Pin Code" required autocomplete="off" value="<?= $_SESSION['user_pin_code'] ?>">
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                    <label for="address">Full Address</label>
                                                    <input type="text" class="form-control field_custom" id="address" name="address" placeholder="Full Address" required autocomplete="off" value="<?= $_SESSION['user_address'] ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="center">
                                                    <button type="submit" class="btn main_bt" name="update">Update</button>
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
    <script type="text/javascript">
        $('#username').on('change', function() {
            $.ajax({
                type: 'post',
                url: 'ajax/check-registration',
                data: {
                    username: $(this).val(),
                    oldid: <?= $_SESSION['user_userid'] ?>,
                },
                success: function(response) {
                    if (response != 1) {
                        $('#username-status').addClass('username-taken');
                        $('#username-status').html("Username already registed use other");
                    } else {
                        $('#username-status').removeClass('username-taken');
                        $('#username-status').html("");
                    }
                }
            });
        });
        $('#email_id').on('change', function() {
            $.ajax({
                type: 'post',
                url: 'ajax/check-emailid',
                data: {
                    email: $(this).val(),
                    oldid: <?= $_SESSION['user_userid'] ?>,
                },
                success: function(response) {
                    if (response != 1) {
                        $('#email-status').addClass('email-taken');
                        $('#email-status').html("Email id already registered use other");
                    } else {
                        $('#email-status').removeClass('email-taken');
                        $('#email-status').html("");
                    }
                }
            });
        });

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

        function checkall() {
            $.ajax({
                type: 'post',
                url: 'ajax/check-registration',
                data: {
                    username: $('#username').val(),
                    oldid: <?= $_SESSION['user_userid'] ?>,
                },
                success: function(response) {
                    if (response != 1) {
                        return false;
                    } else {
                        return true;
                    }
                }
            });
            $.ajax({
                type: 'post',
                url: 'ajax/check-emailid',
                data: {
                    email: $('#email_id').val(),
                    oldid: <?= $_SESSION['user_userid'] ?>,
                },
                success: function(response) {
                    if (response != 1) {
                        return false;
                    } else {
                        return true;
                    }
                }
            });
        }
    </script>

</body>

</html>