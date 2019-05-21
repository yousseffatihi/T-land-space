<!DOCTYPE html>
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
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="login.php">Login</a>
                            <a href="register.php" class="active">Register</a>
                        </div>
                        <form method="post" id="loginform">
                          <input class="form-control" type="text" name="firstname" placeholder="First Name" required>
                          <input class="form-control" type="text" name="lastname" placeholder="Last Name" required>
                          <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                          <input class="form-control" type="text" name="country" placeholder="Country" required>
                          <input class="form-control" type="text" name="city" placeholder="City" required>
                          <input class="form-control" type="text" id="birthday" name="birthday" placeholder="Birthday : 18-02-1990" required>
                          <div class="form-button">
                              <button id="submit" type="submit" class="ibtn">Register</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="../libs/js/jquery.min.js"></script>
<script type="text/javascript" src="../libs/js/popper.min.js"></script>
<script type="text/javascript" src="../libs/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../libs/js/main.js"></script>
</body>
</html>
