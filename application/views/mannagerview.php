<?php 
if(!$this->session->userdata('loggedin'))
{

  redirect('Welcome/loging');

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Manager Area</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Manager Area</a>
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
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Registration</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo base_url('Welcome/userreg');?>">User Register</a>
            </li>
            <li>
              <a href="<?php echo base_url('Welcome/mannagerreg');?>">Mannager Register</a>
            </li>
          </ul>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Users:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Managers:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
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
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"><?php echo $countuser; ?> Users!</div>
            </div>
            
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><?php echo $countmanager;?> Managers!</div>
            </div>
            
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
              <div class="mr-5"><?php echo $countaprove;?> Aproved Disaster!</div>
            </div>
            
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
                  <th>Aprove</th>
                  <th>Reject</th>
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
                <a href="<?php echo base_url('Welcome/action'); ?>/<?php echo $row->ID;?> "><button type="button" class="btn btn-success">Aprove</button></a>
            </td>
             <td>
                <a href="<?php echo base_url('Welcome/reject'); ?>/<?php echo $row->ID;?> "><button type="button" class="btn btn-danger">Reject</button></a>
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
     <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Aproved Table</div>
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
                  <th>Approved_By</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_aproved->num_rows()>0){

                foreach($fetch_aproved->result() as $row)
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
                  <td><?php echo $row->lot; ?></td>
                  <td><?php echo $row->Approved_By; ?></td>

                  
                </tr>
                <?php  
                }
            }

             ?>
                
              </tbody>
            </table>
          </div>
        
    </div>
    <!-- /.container-fluid-->
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Rejected incident</div>
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
                  <th>Rejected_By </th>
                  <th>Comments</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_rejected->num_rows()>0){

                foreach($fetch_rejected->result() as $row)
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
                  <td><?php echo $row->lot; ?></td>
                  <td><?php echo $row->Rejected_By; ?></td>
                  <td><?php echo $row->Comments; ?></td>

                  
                </tr>
                <?php  
                }
            }

             ?>
                
              </tbody>
            </table>
          </div>
        
    </div>
       
    
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
  </div>
</body>

</html>
