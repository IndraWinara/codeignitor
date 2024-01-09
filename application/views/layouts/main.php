<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
</head>

<body>
    <!-- navbar -->
    <div style=""><?php $this->load->view('navbar/navbar_view') ?></div>
    <!-- end of navbar -->

    <!-- hero section -->
    <!-- carousel -->
    <?php $this->load->view('hero/carousel')  ?>

    <!-- content -->
    <?php $this->load->view('hero/content')  ?>
    <!-- end of hero section -->
</body>

</html>