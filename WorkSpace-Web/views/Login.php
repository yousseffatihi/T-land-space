<!DOCTYPE html>
<?php 
require_once('../controllers/clientController.php');
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T Land Space</title>
    <link rel="stylesheet" type="text/css" href="../libs/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../libs/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../libs/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../libs/css/iofrm-theme3.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="../libs/images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder"></div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="login.php" class="active">Login</a>
                            <a href="register.php">Register</a>
                        </div>
                        <form method="POST">
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" name="login">Login</button>
                            </div>
                        </form>
						<?php
						  if(isset($_POST['login'])){
							  $cc = new clientController();
							  $ac = new administratorController();
							  $clients = $cc->getAll();
				              $admins = $ac->getAll();
							  foreach($clients as $client){
								  if($client->getEmail() == $_POST['username'] || 
								     $client->getPassword() == $_POST['password']){
										 $_SESSION['user'] = $client;
										 $_SESSION['isLogged'] = true;
										 $_SESSION['isAdmin'] = false;
										 break;
								  }
							  }
							  if(!isset($_SESSION['user'])){
						         foreach($admins as $admin){
						           if($admin->getEmail() == $_POST['txtEmail'] || 
							          $admin->getPassword() == $_POST['txtPassword']){
							              $_SESSION['user'] = new Administrator($admin->getIdPerson(),$admin->getFirstName(),$admin->getLastName(),
									                               $admin->getBirthday(),$admin->getEmail(),$admin->getPassword(),$admin->getAddress());
									      $_SESSION['isLogged'] = true;
									      $_SESSION['isAdmin'] = true;
									      break;
							        }
					              }
						  }
						  
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="../libs/js/jquery.min.js"></script>
<script type="text/javascript" src="../libs/js/popper.min.js"></script>
<script type="text/javascript" src="../libs/js/bootstrap.min.js"></script>
</body>
</html>
