<?php
 foreach ($managerupdate->result() as $row){

                  $ID=$row->ID;
                  $Name=$row->Name;
                  $NIC =$row->NIC ;
                  $Telephone=$row->Telephone;
                  $Email =$row->Email ;
                  $Password =$row->Password ;
                 
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
  <title>Mannager Update</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Update a Mannager</div>
      <div class="card-body">
        <?php echo validation_errors(); ?> 
        <form action="<?php echo base_url('register/registermanager')?>" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Manager ID</label>
            <input class="form-control" id="id" type="text" value="<?php echo $ID; ?>" name="id" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Full Name</label>
                <input class="form-control" id="fullname" name="fullname" value="<?php echo $Name; ?>" type="text" aria-describedby="nameHelp" placeholder="Enter Full name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">NIC</label>
                <input class="form-control" id="nic" name="nic" type="text" value="<?php echo $NIC; ?>" aria-describedby="nameHelp" placeholder="Enter NIC ">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" type="email" name="email" value="<?php echo $Email; ?>" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Telephone Number</label>
                <input class="form-control" id="telephone" type="text" value="<?php echo $Telephone; ?>" name="telephone" placeholder="Telephone">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Password</label>
                <input class="form-control" id="password" type="password" value="<?php echo $Password; ?>" name="password" placeholder="password">
              </div>
            </div>
          </div>
               <button type="submit" class="btn btn-warning" name="update" value="update">Update</button>
 <button type="submit" class="btn btn-danger" name="delete" value="delete">Delete</button> 
        </form>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
