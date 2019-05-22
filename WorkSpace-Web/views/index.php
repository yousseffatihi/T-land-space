<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../libs/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../libs/css/theme.css" type="text/css">
  <link rel="stylesheet" href="../libs/css/custom.css" type="text/css">
  <link href="../libs/css/datepicker.min.css" rel="stylesheet" type="text/css">
  <style media="screen">
    .heroscene{
      background-image: url('../libs/images/workspace-collaboration.jpg');
      background-size: cover;
      background-position: center;
      height: 700px;
    }

    .bgclient {
        width: 100px;
        margin: auto;
        height: 100px;
        background-image: url('../libs/images/boy1.jpeg');
        background-position: center;
        background-size: cover;
        border-radius: 50%;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .datepicker-inline .datepicker {
      width: 300px;
      height: 300px;
    }

    .card {
      border: none;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.15);
    }

    .btnLogin {
      color: white !important;
    }

    @media (max-width: 767px) {
      .btnLogin{
        width: 100%;
      }
      .btnRegister {
        width: 100%;
      }
      .navForm{
            display: block;
      }
      .navInput {
            width: 100% !important;

      }
    }
    @media (min-width: 766px) {
      .btnLogin{
        margin-left: 5px;
      }
      .btnRegister {
margin-left: 5px;
      }
      .navInput {
        margin-left: 5px;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <a class="navbar-brand text-primary" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b> BRAND</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">FAQ</a> </li> -->
        <form method="post" class="navForm form-inline my-2 my-lg-0">
          <li class="nav-item navInput" style="margin-top:5px;" > <input class="form-control navInput" type="Email" name="txtEmail" placeholder="Email@example.com"> </li>
          <li class="nav-item  navInput" style="margin-top:5px;" > <input class="form-control navInput" type="Password" name="txtPassword" placeholder="Password"> </li>
          <li class="nav-item"style="margin-top:5px;"><button type="submit" class="btn btn-primary btnLogin" style="width: 100%;">Login</button></li>
          <li class="nav-item"style="margin-top:5px;"><a class="btn navbar-btn ml-md-2 btn-light btnRegister" href="./Register.php">Register</a></li>
        </form>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Hero Scene -->
  <div class="text-white">
      <div class="row">
        <div class="col-lg-6 p-0 heroscene">
        </div>
        <div class="p-5 col-lg-6 d-flex flex-column justify-content-center">
          <div class="container">
            <div class="row">
              <div class="datepicker-here" style="margin: auto;" id="my-element" data-date-format="dd-mm-yyyy" data-language='en'></div>
            </div>
            <div class="p-3 row">
              <div class="col-md-12" style="text-align: center;">
                <div class="btn-group">
                  <a id="btnMin" class="btn btn-primary" style="border-radius: 3px;">-</a>
                  <a id="btnValue" class="btn btn-disable" style="width: 100px; cursor: default; color: black;">1</a>
                  <a id="btnAdd" class="btn btn-primary" style="border-radius: 3px;">+</a>
                </div>
              </div>
            </div>
            <div class="row">
              <a id="btnApply" class="btn btn-primary" style="width: 170px; margin: auto;">Apply</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- End Hero Scene -->
  <!-- Testimonials -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1>Testimonials</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 p-4 text-center">
          <div class="bgclient"></div>
          <p class="mb-3"> <i>"I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks."</i> </p>
          <p class="mb-1"> <b>J. W. Goethe</b> </p>
          <p class="mb-0">CEO and founder</p>
        </div>
        <div class="col-lg-4 col-md-6 p-4 text-center">
          <div class="bgclient" style="background-image: url('../libs/images/girl2.jpg');">

          </div>
          <p class="mb-3"> <i>"Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!"</i> </p>
          <p class="mb-1"> <b>G. W. John</b> </p>
          <p class="mb-0">Co-founder</p>
        </div>
        <div class="col-lg-4 p-4 text-center">
          <div class="bgclient" style="background-image: url('../libs/images/girl1.jpg');">

          </div>
          <p class="mb-3"> <i>"I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies."</i> </p>
          <p class="mb-1">
            <b>J. G. Wolf</b> </p>
          <p class="mb-0">Evangelist</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Pricing -->
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1 class="text-dark">Pricing</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 p-3">
          <div class="card text-center text-dark">
            <div class="card-body p-4">
              <h3>Day</h3>
              <p class="my-3">Among the tall grass by the trickling stream.</p>
              <h2> <b>15 DH</b> </h2>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <div class="card text-center text-dark">
            <div class="card-body p-4">
              <h3>Week</h3>
              <p class="my-3">I am alone, and feel the charm of existence in this spot.</p>
              <h2> <b>60 DH</b> </h2>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <div class="card text-center text-dark">
            <div class="card-body p-4">
              <h3>Month</h3>
              <p class="my-3">The breath of that universal love which bears and sustains us.</p>
              <h2> <b>170 DH</b> </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Pricing -->
  <!-- Contacts -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto text-center col-lg-6">
          <h1 class="mb-3">I sink under</h1>
          <p class="lead mb-4">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
        </div>
      </div>
      <div class="row">
        <div class="p-0 order-2 order-md-1 col-lg-6">
          <iframe width="100%" height="350" src="https://maps.google.com/maps?hl=en&amp;q=New%20York&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" scrolling="no" frameborder="0"></iframe>
        </div>
        <div class="px-4 order-1 order-md-2 col-lg-6">
          <h2 class="mb-4">A greater artist</h2>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="form44" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="form45" placeholder="Email">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="form46" rows="3" placeholder="Your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contacts -->
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
  <script type="text/javascript">
  var dateReservation = "";
  // Initialization
  $('#my-element').datepicker({
      language: 'en',
      minDate: new Date(),
      onSelect: function (fd, d, picker) {
              // Do nothing if selection was cleared
              if (!d) return;

              var day = d.getDay();

              dateReservation = fd;
          } // Now can select only dates, which goes after today
  });
  // Access instance of plugin
  $('#my-element').data('datepicker');

  $('#btnMin').click(function(){
    let value = document.getElementById('btnValue').innerText;
    let num = Number(value);
    if(num != NaN){
      num--;
      if(num == 0){
        return;
      }
      document.getElementById('btnValue').innerText = num;
    }
  });

  $('#btnAdd').click(function(){
    let value = document.getElementById('btnValue').innerText;
    let num = Number(value);
    if(num != NaN){
      num++;
      if(num == 6){
        return;
      }
      document.getElementById('btnValue').innerText = num;
    }
  });

  $('#btnApply').click(function(){
    if(dateReservation != ""){
      alert(dateReservation);
    } else {
      alert("Choose a date");
    }
  });
  </script>
</body>

</html>
