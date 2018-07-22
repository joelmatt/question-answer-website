<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp:)</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale= 1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="signup.css" type="text/css">

</head>
<body>
    <nav class="navbar navbar-inverse"> 
    <div class="container-fluid ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.html"><img src="../Homeimg/logo1.png" height="70" width="100"/></a>
        </div>
        <div class = "collapse navbar-collapse" id="NavMenu">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="../html/home.html">HOME</a></li>
                <li><a href="../html/aboutUs.html">ABOUT</a></li>
                <li><a href="#">REPORT</a></li>
                <li><a href="#">REVIEWS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><button class="signin-btn"style="margin: 7px;text-decoration: none"><a href="signup.php">SIGN IN</a></button></li>
                <li><button class="login-btn" style="margin: 7px;text-decoration: none" ><a href="login.php">LOGIN</a></button></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid bg ">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
       <div class="col-md-4 col-sm-12 col-xs-12">
        <form class="form-container " action="includes/signup-include.php" method="POST">
            <h2><center>Welcome.</center><center>Sign-up is free</center><br> </h2>
            <div class="form-group">
                <label for="fname">Enter First Name :</label>
                <input type="text" class="form-control" placeholder="First Name"  name="fname" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="lname">Enter Last name :</label>
                <input type="text" class="form-control" placeholder="Last Name"  name="lname" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Enter Email :</label>
                <input type="text" class="form-control" placeholder="Email-Id"  name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="uid">Enter Username :</label>
                <input type="text" class="form-control" placeholder="Username" name="uid" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="pwd">Password :</label>
                <input type="password" class="form-control" placeholder="Password" name="pwd">
            </div>
            <div class="form-group">
                <label for="cpwd">Confirm Password :</label>
                <input type="password" class="form-control" placeholder="Password" name="cpwd">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block">SUBMIT</button>
            <br> <a href="login.php "style="color: black">Already a user ?</a>
        </form>

           
     </div>
 </div>
</div>
    <footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4">
            <h3>Contact Us :</h3>
            <br>
            <h4>contact info</h4>
        </div>
        <div class="col-sm-4">
            <h3>Connect </h3>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
        </div>
        <div class="col-sm-4">
            <img src="../Homeimg/bunny.png" class="icon">
        </div>
    </div>

</footer>
</body>
</html>
