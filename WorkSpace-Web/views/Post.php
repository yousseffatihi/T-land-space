<?php 
require_once('../controllers/postController.php');
require_once('../controllers/administratorController.php');
require_once('../controllers/promotionController.php');
require_once('../controllers/eventController.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>T Land Space | POST</title>
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
  <!-- Post -->
  <div class="py-3">
    <div class="container">
      <div class="row">
	    <?php
		    $postId = $_GET['postId'];
			$pc = new postController();
			$ec = new eventController();
			$promo = new promotionController();
			$post = $pc->getById($postId);
			$ac = new administratorController();
			$admin = $ac->getById($post->getAdmin());
			$date = $post->getDatePost();
			$d = new DateTime($date); 
		?>
        <div class="col-md-12 text-center">
          <h1 class=""><?php echo $post->getTitle(); ?></h1>
          <h5 class="">Posted by Admin on <?php echo $d->format('M').' '.$d->format('d').', '.$d->format('Y') ?></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="	background-image: url(&quot;https://pingendo.com/site-assets/cover.jpg&quot;);	background-position: center;	background-size: 100%;	background-repeat: repeat;	min-height: 200px;	height: 600px;">
    <div class="container">
      <div class="row">
	    <?php
		  $img = "../libs/imguploaded/".$post->getImage();
		?>
        <div class="col-md-12"><img src=<?php echo $img; ?> width=920px></div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <div class="card text-center postContent mb-3">
              <div class="card-body text-left">
                <p class="card-text">
				  <?php echo $post->getText(); ?>
                </p>
                <hr>
                <a class="btn btn-primary" style="float: right;" href="#">Apply</a>
              </div>
            </div>
            <div class="card text-center">
              <div class="card-body text-left">
                <h4 class="">Leave a comment</h4>
                <div class="row">
                  <div class="col-md-2 mb-2">
                    <img class="img-fluid mx-auto d-block rounded-circle imgComment" src="https://static.pingendo.com/img-placeholder-3.svg">
                  </div>
                  <div class="col-md-10">
                    <form class="form-inline">
                      <div class="input-group txtComment mb-2">
                        <textarea type="text" class="form-control w-100"></textarea>
                      </div>
                      <a class="btn btn-primary btnComment" href="#">Submit</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4">
		    <?php 
			$post_count = sizeof($pc->getAll());
			$promo_count = sizeof($promo->getAll());;
			$event_count = sizeof($ec->getAll());
			
			
			?>
            <div class="card-body">
              <h5 class="card-title"><b>Categories</b></h5>
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"> Posts <span class="badge badge-primary badge-pill"><?php echo $post_count; ?></span> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"> Promotions <span class="badge badge-primary badge-pill"><?php echo $promo_count; ?></span> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"> Events <span class="badge badge-primary badge-pill"><?php echo $event_count; ?></span> </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title"><b>Posted By</b></h5>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-3.svg"></div>
                <div class="col-md-4"></div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h1 class="text-center py-2"><?php echo $admin->getLastName().' '.$admin->getFirstName();	?><br></h1>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><b>Recent Posts</b><br></h5>
              <div class="list-group">
			  <?php 
			     $recent = $pc->getAll();
				 $count = 4;
				 foreach($recent as $p){
					if(!$count) break;
				    $count--;
				    if($p->getIdPost() != $postId){
			  ?>
                <a href=<?php echo '?postId='.$p->getIdPost(); ?> class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between datePost">
                    <h5 class="mb-2 postTitle"><?php echo $p->getTitle(); ?></h5>
                  </div>
                  <div class="row">
                    <div class="col-md-4"><img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
                    <div class="col-md-8">
                      <p class="recentPost"><?php 
					  $textArray = explode(" ", $p->getText());
					  echo implode(" ",array_slice($textArray, 0, 10)).'...'; ?></p>
                    </div>
                  </div>
                </a>
				 <?php } } ?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Post -->
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
