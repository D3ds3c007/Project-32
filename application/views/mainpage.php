<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Template 2</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Login-screen.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
</head>

<body style="background: rgb(246,244,255);">

    <?php
        $this->load->view("page/header");
        $this->load->view($contents);
        $this->load->view("page/footer");
    ?>
    <script src="<?php echo base_url();?>assets/js/bs-init.js"></script>
   <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>