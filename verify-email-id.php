<?php
include('details.php');
$_SESSION['message'] = '<div class="alert alert-info" role="alert">Email verification is disabled in this frontend demo.</div>';
header('Location: login');
exit;
?>
