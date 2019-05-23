<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../libs/css/all.css" type="text/css">
  <link rel="stylesheet" href="../libs/css/theme.css" type="text/css">
  <link rel="stylesheet" href="../libs/css/custom.css" type="text/css">
  <link href="../libs/css/datepicker.min.css" rel="stylesheet" type="text/css">
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
            <div class="row">
              <div class="col-md-3" style="">
                <img class="img-fluid d-block rounded-circle mx-auto p-4" src="https://static.pingendo.com/img-placeholder-3.svg">
                <a class="btn btn-outline-primary btn-block my-2" href="#">Outline</a>
              </div>
              <div class="col-md-9" style="">
                <div class="row">
                  <div class="col-md-6 mt-2">
                    <h6>First Name</h6>
                    <div class="form-group">
                      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <h6>Last Name</h6>
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <h6>Email</h6>
                    <div class="form-group">
                      <input type="email" class="form-control" id="txtEmail" name="Email" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <h6>Phone Number</h6>
                    <div class="form-group">
                      <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                     </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mt-2">
                    <h6>Birthday</h6>
                    <div class="form-group">
                      <input type="text" class="form-control" id="birthday" name="birthday" placeholder="dd-MM-yyyy">
                    </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <h6>Country</h6>
                    <div class="form-group">
                      <input type="text" class="form-control" id="country" name="country" placeholder="Country"> </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <h6>City</h6>
                    <div class="form-group">
                      <input type="text" class="form-control" id="city" name="city" placeholder="City"> </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <h6>Gender</h6>
                    <div class="form-group">
                      <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender"> </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mt-2">

                  </div>
                  <div class="col-md-6 mt-2">

                  </div>
                </div>
              </div>
            </div>
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
  <link href="../libs/css/datepicker.min.css" rel="stylesheet" type="text/css">
  <script src="../libs/js/datepicker.min.js"></script>
  <script src="../libs/js/i18n/datepicker.en.js"></script>
</body>

</html>
