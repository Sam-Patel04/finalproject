<?php
include('details.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E-Bill Demo | Ajola Printwell</title>
    <?php include('header_assets.php') ?>
</head>
<body style="background: #f8f9fa; padding: 50px 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center;">
        <h3 style="color: #26588b;">Ajola Printwell - E-Bill</h3>
        <hr>
        <p style="margin: 20px 0; color: #555;">PDF generation from database is disabled in this frontend demo.</p>
        <a href="<?= $site_url ?>" class="btn btn-primary" style="background-color: #26588b; border: none; padding: 10px 20px; color: #fff; text-decoration: none; border-radius: 4px;">Return to Website</a>
    </div>
</body>
</html>
