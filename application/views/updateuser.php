<?php
 foreach ($updateuser->result() as $row){

                  $User_ID=$row->User_ID;
                  $Name=$row->Name;
                  $NIC =$row->NIC ;
                  $Location=$row->Location;
                  $Telephone=$row->Telephone;
                  $Email =$row->Email ;
                  $Password =$row->Password ;
                  $Designation  =$row->Designation  ;
                 
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
  <title>Upate User</title>
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
      <div class="card-header">Update a User</div>
      <div class="card-body">
        <form  action="<?php echo base_url('register/registeruser')?>" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">User_ID</label>
            <input class="form-control" id="id" type="text" name="id" value="<?php echo $User_ID; ?>"" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Full Name</label>
                <input class="form-control" id="fullname" name="fullname" type="text" value="<?php echo $Name; ?> "aria-describedby="nameHelp" placeholder="Enter Full name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">NIC</label>
                <input class="form-control" id="nic" name="nic" type="text" value="<?php echo $NIC; ?>" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Telephone Number</label>
                <input class="form-control" id="telephone" name="telephone" value="<?php echo $Telephone; ?>" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Designation</label>
                <input class="form-control" id="designation" name="designation" value="<?php echo $Designation; ?>"" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
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
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="password" name="password" value="<?php echo $Password; ?>" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Work Location</label>
                <input class="form-control" id="location" name="location" value="<?php echo $Location; ?>" type="text" placeholder="Confirm password">
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
