<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Area</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
</head>

<body  id="page-top" style="background-image:url(<?php echo base_url();?>img/Light.jpg);
          background-size: cover; 
          background-repeat: no-repeat;">
  
      
 

    <div class="container-fluid">
      <!-- Breadcrumbs-->

      <h1 style="text-align: center; margin-top:180px; ">Loging Area</h1>

          <div class="login" style="margin-top:40px;">

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3" style="margin-left:160px; ">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Admin Loging</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Welcome/adminloging');?>">
              <span class="float-left">Click Here to loging</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Mnnager Loging</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Welcome/mannagerloging');?>">
              <span class="float-left">Click Here to loging</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">User Loging</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('Welcome/userloging');?>">
              <span class="float-left">Click Here to loging</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
                    </div>
      </div>
      
            
    <!--footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer-->
  
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>