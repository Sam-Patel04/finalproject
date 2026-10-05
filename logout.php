<?php 
@session_start();
$_SESSION['user_username'] = null;
$_SESSION['user_email_id'] = null;
$_SESSION['user_contact_no'] = null;
$_SESSION['user_last_login'] = null;
$_SESSION['user_full_name'] = null;
$_SESSION['user_gender'] = null;
$_SESSION['user_date_of_birth'] = null;
$_SESSION['user_address'] = null;
$_SESSION['user_pin_code'] = null;
$_SESSION['user_status'] = null;
$_SESSION['user_userid'] = null;
@session_destroy();
header('Location: login');
?>