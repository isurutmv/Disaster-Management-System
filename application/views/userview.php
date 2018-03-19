<?php 
if(!$this->session->userdata('loggedin'))
{

  redirect('Welcome/loging');

}

$title="User Area";
include 'header.php'; 

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">User Area</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo $countaprove;?> Aproved Disaster!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5"><?php echo $countreject;?> Rejected Disaster!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Report Disaster</div>
      <div class="card-body">
        <?php echo validation_errors(); ?> 
        <form action="<?php echo base_url('register/report')?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">User_ID</label>
                <input class="form-control" id="exampleInputName" type="text" name="User_ID" aria-describedby="nameHelp" placeholder="Enter User ID">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Date_Time</label>
                <input class="form-control" id="Date_Time" type="text" name="Date_Time" aria-describedby="nameHelp" placeholder="Enter Date">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Type</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="Type" aria-describedby="emailHelp" placeholder="Enter Type">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Location</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="Location" aria-describedby="emailHelp" placeholder="Enter Location">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Gross_Damage</label>
                <input class="form-control" id="exampleInputPassword1" type="text" name="Gross_Damage" placeholder="Enter Gross_Damage">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Number_of_death</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" name="Number_of_death" placeholder="Number of death">
              </div>
            </div>
            <label for="exampleInputPassword1">Select Location</label>
            <center>
<!-- MAP HOLDER -->
<div id="gmap"></div>
<!-- REFERENCES -->

Lat: <input type="text" id='lat' name="lat">
Lon: <input type="text" id='lon' name="lon">

</center>
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6v5-2uaq_wusHDktM9ILcqIrlPtnZgEk&sensor=false">
</script>
<script type="text/javascript">

    var map;
        function initialize() {
            var myLatlng = new google.maps.LatLng(7.087310,80.014366);
            var myOptions = {
                zoom:7,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(document.getElementById("gmap"), myOptions);
            // marker refers to a global variable
            marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });

            google.maps.event.addListener(map, "click", function(event) {
                // get lat/lon of click
                var clickLat = event.latLng.lat();
                var clickLon = event.latLng.lng();

                // show in input box
                document.getElementById("lat").value = clickLat.toFixed(5);
                document.getElementById("lon").value = clickLon.toFixed(5);

                  var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(clickLat,clickLon),
                        map: map
                     });
            });
    }   

    window.onload = function () { initialize() };
</script>
     <style>
 div#gmap {
        width: 80%;
        height: 500px;
        border:double;
 }
    </style>
          </div>
          <button type="submit" class="btn btn-success" name="submit" value="submit">Report</button>
        </form>
        
      </div>
    </div>
  </div>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Pending Incident</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>User_ID </th>
                  <th>Type </th>
                  <th>Date_Time </th>
                  <th>Location</th>
                  <th> Number_of_death</th>
                  <th>Gross_Damage</th>
                  <th>Lat</th>
                  <th>Lot</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_pending->num_rows()>0){

                foreach($fetch_pending->result() as $row)
                {
                                         ?> 
                <tr>
                  <td><?php echo $row->ID; ?></td>
                  <td><?php echo $row->User_ID; ?></td>
                  <td><?php echo $row->Type; ?></td>
                  <td><?php echo $row->Date_Time; ?></td>
                  <td><?php echo $row->Location; ?></td>
                  <td><?php echo $row->Number_of_death; ?></td>
                  <td><?php echo $row->Gross_Damage; ?></td>
                  <td><?php echo $row->lat; ?></td>
                  <td><?php echo $row->lon; ?></td>
                  <td>
                  <a href="<?php echo base_url('Welcome/updatepending'); ?>/<?php echo $row->ID;?>"><button type="button" class="btn btn-success">Edite</button></a>
                  </td>
             
                </tr>
                <?php  
                }
            }

             ?>
                
              </tbody>
            </table>
          </div>
        
          </div>
          </div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('Loging/logout');?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </div>

  
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</html>
