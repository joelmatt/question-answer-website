<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Engineering Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale= 1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/loginaboutUs.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
</head>
<body>
<!--The navigation bar-->
<nav class="navbar navbar-inverse"> `
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.html"><img src="../Homeimg/logo1.png" height="50" width="60"/></a>
        </div>
         <div class = "collapse navbar-collapse" id="NavMenu">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="loginHome.php">HOME</a></li>
                <li class="active"><a href="loginaboutUs.php">ABOUT</a></li>
                <li><a href="#">REPORT</a></li>
                <li><a href="loginReview.php">REVIEWS</a></li>
                <li><a href="#">SUB-INFO</a></li>
                <li><a href="qanda.php">Q&A</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form action="includes/logout-include.php" method="POST">
                    <li><button class="logout-btn" type="submit" name="submit">LOG OUT</button></li>
                </form>
            </ul>
        </div>
    </div>
</nav>
<div class="text-justify" style="font-family: 'Black Han Sans',sans-serif; font-size: 130%">
            <?php
                session_start();
                if(isset($_SESSION['u_id'])){
                     echo strtoupper ("HEY! HI ".$_SESSION['u_first']." :)");
                }
            ?>
 </div>
<div class="container-fluid">
    <div class="row bg" id="box1">
    <div class="col-md-12 col-sm-12" style="text-align: center">
        <h1 class="text-align"  >FOR ENGINEERS</h1>
        <p class="textalign">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid</p>
        <p class="textalign">unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    </div>
    <div class="row bg" id="box2">
        <div class="col-md-12 col-sm-12" style="text-align: center">
                <h1 class="text-align">BY ENGINEERS</h1>
            <p class="textalign">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid</p>
            <p class="textalign">unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
    </div>
    <div class="row bg" id="box3">
        <div class="col-md-12 col-sm-12" style="text-align: center">
            <h1 class="text-align">GET ALL YOU QUESTIONS ANSWERED</h1>
            <p class="textalign">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid</p>
            <p class="textalign">unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
</body>
</html>

