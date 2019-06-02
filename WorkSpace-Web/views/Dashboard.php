<?php
require_once('../controllers/administratorController.php');
require_once('../controllers/postController.php');
require_once('../controllers/clientreservationController.php');
session_start();
if(!isset($_SESSION['user']) || !$_SESSION['isAdmin']) header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>T Land Space | Dashboard</title>
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
  <!-- Dashboard -->
  <div class="py-5">
    <div class="container">
      <div class="row">
	    <?php
		   $admin = $_SESSION['user'];
		   $rc = new clientreservationController();
		   $res = $rc->getAll();
		   $dt = new DateTime();
		   $confirmed = 0;
		   $waiting = 0;
		   $cancled = 0;
		   
		   
		   foreach($res as $r){
			  if($r->getDateReservation() == $dt->format('Y-m-d')){
			   if($r->getStatus() == "Confirmed") $confirmed++;
			   if($r->getStatus() == "Waiting") $waiting++;
			   if($r->getStatus() == "Cancled") $cancled++;
			  }
		   }
		?>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-4"><img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-3.svg"></div>
            <div class="col-md-8">
              <h1 class="" contenteditable="true"><?php echo $admin->getLastName().' '.$admin->getFirstName(); ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-cloud text-primary mr-2"></i> Summary </li>
                <li class="list-group-item"><i class="fa fa-bookmark text-primary mr-2"></i> Clients </li>
                <li class="list-group-item"><i class="fa fa-bell text-primary mr-2"></i> Notifications </li>
                <li class="list-group-item"><i class="fa fa-life-ring text-primary mr-2"></i> Organisations </li>
                <li class="list-group-item"><i class="fa fa-paper-plane text-primary mr-2"></i> Add Post </li>
                <li class="list-group-item"><i class="fa fa-paper-plane text-primary mr-2"></i> Add Event </li>
                <li class="list-group-item"><i class="fa fa-paper-plane text-primary mr-2"></i> Add Promotion </li>
                <li class="list-group-item"><i class="fa fa-paper-plane text-primary mr-2"></i> Timeline </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <h1 class="display-4">Today : <?php echo $dt->format('d-m-Y'); ?></h1>
            </div>
            <div class="col-md-4">
              <h2 class="">Confirmed</h2>
              <h2 class=""><?php echo $confirmed; ?></h2>
            </div>
            <div class="col-md-4">
              <h2 class="">Waiting</h2>
              <h2 class=""><?php echo $waiting; ?></h2>
            </div>
            <div class="col-md-4">
              <h2 class="">Canceled</h2>
              <h2 class="" contenteditable="true"><?php echo $cancled; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Dashboard -->
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
  <link href="../libs/css/datepicker.min.css" rel="stylesheet" type="text/css">
  <script src="../libs/js/datepicker.min.js"></script>
  <script src="../libs/js/i18n/datepicker.en.js"></script>
</body>

</html>
