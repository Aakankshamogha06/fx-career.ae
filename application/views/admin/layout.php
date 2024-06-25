<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>FXCAREERS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=base_url()?>public/web/assets/img/logo/favicon-1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>public/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>public/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>public/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>public/admin/css/style.css" rel="stylesheet">

    <style>
        .dataTables_wrapper {
            position: relative;
            clear: both;
            /* overflow: scroll; */
        }
    </style>

      <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include DataTables CSS -->
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="">

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>




    <?php include('include/navbar.php'); ?>

    <?php include('include/sidebar.php'); ?>

    <?php $this->load->view($view); ?>
   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>public/admin/lib/chart/chart.min.js"></script>
    <script src="<?=base_url()?>public/admin/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>public/admin/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>public/admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>public/admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?=base_url()?>public/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?=base_url()?>public/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>public/admin/js/main.js"></script>


      <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include DataTables JS -->
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <!-- Include DataTables Bootstrap <script integration JS -->
<script 
src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
  <!--  -->
</body>
