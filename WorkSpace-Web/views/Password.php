<?php
require_once('../controllers/clientController.php');
session_start();
if(!isset($_SESSION['user'])) header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>T Land Space | Password</title>
  <link rel="stylesheet" href="../libs/css/all.css" type="text/css">
  <link rel="stylesheet" href="../libs/css/theme.css" type="text/css">
  <link rel="stylesheet" href="../libs/css/custom.css" type="text/css">
  <link rel="icon" href="../libs/images/T@0,1x.png">
</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <a class="navbar-brand text-primary" href="./">
      <img src="../libs/images/TLand@0,1x.png" width="100" alt="T Land Space">
      </a>
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="./">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="Reservations.php">My Reservation</a> </li>
          <li class="nav-item"> <a class="nav-link" href="Events.php">Events</a> </li>
          <li class="nav-item"> <a class="nav-link" href="Profile.php">Profile</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <ul class="list-group">
              <li class=" border-0 list-group-item d-flex justify-content-between align-items-center">
                <a href="Profile.php"><i class="fas fa-user-circle fa-lg"></i> <span class="ml-2">Profile</span> </a>
              </li>
              <li class=" border-0 list-group-item d-flex justify-content-between align-items-center">
                <a href="Password.php"><i class="fas fa-lock fa-lg"></i> <span class="ml-2">Password</span> </a>
              </li>
              <li class=" border-0 list-group-item d-flex justify-content-between align-items-center">
                <a href="Events.php"><i class="fas fa-handshake fa-lg"></i> <span class="ml-2">Events</span> </a>
              </li>
              <li class=" border-0 list-group-item d-flex justify-content-between align-items-center">
                <a href="Reservations.php"><i class="fas fa-calendar fa-lg"></i> <span class="ml-2">My Reservations</span> </a>
              </li>
            </ul>
          </div>
          <div class="col-md-9">
          <form method="post">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <h5 class="card-title"><b>Old Password</b></h5>
                    <div class="form-group">
                      <input type="password" class="form-control inputsForm" id="oldPassword" name="oldPassword" placeholder="Enter Your Old Password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h5 class="card-title"><b>New Password</b></h5>
                    <div class="form-group">
                      <input type="password" class="form-control inputsForm" id="newPassword" name="newPassword" placeholder="Enter Your New Password">
                    </div>                  </div>
                  <div class="col-md-6">
                    <h5 class="card-title"><b>Confirm Password</b></h5>
                    <div class="form-group">
                      <input type="password" class="form-control inputsForm" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12"><a class="btn btn-primary btn-block" id="btnApply" href="#">Apply</a></div>
                </div>
				<?php
				  if(isset($_GET['old']) && isset($_GET['new'])){
					  $cc = new clientController();
					  $_SESSION['user']->setPassword($_GET['new']);
					  $res = $cc->update($_SESSION['user']);
					  if($res == 1)
						  echo "<script> alert('Password Changed'); </script>";
				  }
				?>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  <!-- footer -->
  <div class="">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-4">
          <h2 class="mb-4">T Land Space</h2>
          <p>A company for whatever you may need, from website prototyping to publishing</p>
        </div>
        <div class="p-4 col-md-4">
          <h2 class="mb-4">Mapsite</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-dark">Home</a>
            <br>
            <a href="#" class="text-dark">About us</a>
            <br>
            <a href="#" class="text-dark">Our services</a>
             <br>
             <a href="#" class="text-dark">Stories</a>
           </ul>
        </div>
        <div class="p-4 col-md-4">
          <h2 class="mb-4">Contact</h2>
          <p> <a href="#" class="text-dark">
              <i class="fa d-inline mr-3 text-muted fa-phone"></i>+246 - 542 550 5462</a> </p>
          <p> <a href="#" class="text-dark">
              <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>info@pingendo.com</a> </p>
          <p> <a href="#" class="text-dark">
              <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>365 Park Street, NY</a> </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center">© Copyright 2019 T Land Space - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- End footer -->
  <script src="../libs/js/jquery.min.js"></script>
  <script src="../libs/js/popper.min.js"></script>
  <script src="../libs/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $('#btnApply').click(function(){
    var oldP = document.getElementById('oldPassword').value;
	var newP = document.getElementById('newPassword').value;
	var confirmP = document.getElementById('confirmPassword').value;
	if(newP == confirmP &&  oldP != confirmP){
	window.location.href = "Password.php?old=" + oldP + "&new=" + confirmP;
	}else{
		alert("new password not match or new password equal to old password");
	}
  });
  </script>
</body>

</html>
