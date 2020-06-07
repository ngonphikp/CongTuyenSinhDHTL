<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <title>Tư vấn tuyển sinh</title>
</head>
<body>
    <div id="wrapper">
        <?php 
            include( APPPATH.'views/home/header.php');
            include( APPPATH.'views/home/nav-bot.php');
            include( APPPATH.'views/tuvantuyensinh/main.php');
            include( APPPATH.'views/home/footer.php');
        ?>

    </div>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/fonts/a076d05399.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
</body>
</html>