<?php
 foreach ($pending->result() as $row){

                  $ID=$row->ID; 
                  $User_ID=$row->User_ID;
                  $Type=$row->Type;
                  $Date_Time=$row->Date_Time;
                  $Location=$row->Location;
                  $Number_of_death=$row->Number_of_death;
                  $Gross_Damage=$row->Gross_Damage;
                  $lat=$row->lat;
                  $lot=$row->lon;
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
  <title>Mannager Registation</title>
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
      <div class="card-header">Aprove/Reject Disaster</div>
      <div class="card-body">
        <?php echo validation_errors(); ?> 
        <form action="<?php echo base_url('register/action')?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">ID</label>
                <input class="form-control" id="exampleInputName" value="<?php echo $ID; ?>" type="text" name="ID" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">User_ID</label>
                <input class="form-control" id="exampleInputName" value="<?php echo $User_ID; ?>" type="text" name="User_ID" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Date_Time</label>
                <input class="form-control" id="Date_Time" type="text" value="<?php echo $Date_Time; ?>" name="Date_Time" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Type</label>
            <input class="form-control" id="exampleInputEmail1" type="text" value="<?php echo $Type; ?>" name="Type" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Location</label>
            <input class="form-control" id="exampleInputEmail1" type="text" value="<?php echo $Location; ?>" name="Location" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Gross_Damage</label>
                <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $Gross_Damage; ?>" name="Gross_Damage" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Number_of_death</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" value="<?php echo $Number_of_death; ?>" name="Number_of_death" placeholder="Confirm password">
              </div>
              <div class="form-group">
            <label for="exampleInputEmail1">Approved_By  </label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="Approved_By" aria-describedby="emailHelp" placeholder="Enter email">
          </div>

          <label for="exampleInputPassword1">Select Location</label>
            <center>
<!-- MAP HOLDER -->
<div id="gmap"></div>
<!-- REFERENCES -->

Lat: <input type="text" id='lat' name="lat" value="<?php echo $lat; ?>">
Lon: <input type="text" id='lot' name="lot" value="<?php echo $lot; ?>">

</center>
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6v5-2uaq_wusHDktM9ILcqIrlPtnZgEk&sensor=false">
</script>
<script type="text/javascript">

    var map;
        function initialize() {
            var myLatlng = new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $lot ?>);
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
          </div>
          <button type="submit" class="btn btn-success" name="submit" value="submit">Aprove</button>
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
