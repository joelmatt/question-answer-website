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
    <link rel="stylesheet" href="../css/loginHome.css" type="text/css">
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
                <li class="active"><a href="loginHome.php">HOME</a></li>
                <li><a href="loginaboutUs.php">ABOUT</a></li>
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
 <div class="text-justify" align="center" style="font-family: 'Black Han Sans',sans-serif; font-size: 130%">
            <?php
                session_start();
                //if(isset($_SESSION['u_id'])){
                 echo strtoupper ("HEY! HI ".$_SESSION['u_first']."  :)");
                //}
            ?>
 </div>

<!--CAROUSEL IMAGE SLIDER-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="../Homeimg/quote1.png">
            <div class="carousel-caption">
                <h1>QUESTION EVERYTHING</h1>  <!--addition of the sign and login buttons over here-->
                <br>
                <button type="button" class="btn btn-default"><a href="aboutUs.html" style="color: #FFF" title="(:Know more about us:)"> ABOUT US</a></button>
            </div>
        </div>
        <div class="item">
            <img src="../Homeimg/quote1.png">
        </div>
        <div class="item"><img src="../Homeimg/quote3.png"></div>
        <div class="item">
            <img src="../Homeimg/quote1.png">
        </div>
    </div>
    <!--SLIDE CONTROLLER-->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="mainbackground" >
    <div class="container text-center">
        <h2 class="h2design" align="center">THIS WEBSITE IS DESIGNED USING</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="../Homeimg/html5.png" id="icon">
                <h4>HTML5</h4>
            </div>
            <div class="col-md-4">
                <img src="../Homeimg/bootstrap.png" id="icon">
                <h4>BOOTSTRAP</h4>
            </div>
            <div class="col-md-4">
                <img src="../Homeimg/css3.png" id="icon">
                <h4>CSS3</h4>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img src="../Homeimg/questionmark.png" class="img-responsive" id="icon">
            </div>
            <div class="col-md-8 col-sm-12" >
                <h2 class="h2design" >DO YOU HAVE QUESTIONS ?</h2>
                <p class="text-justify" >texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext</p>
                 <p class="text-justify " >texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext</p>
            </div>
        </div>
    </div>s
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-1">
                <h2 class="h2design">WE HAVE THE ANSWERS</h2>
                <p class="text-justify" >texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext</p>
                <p class="text-justify">texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextte
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <img src="../Homeimg/questionmark2.png" class="img-responsive" id="icon">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3><a href="#hidden" data-toggle="collapse" style="color: #FFF ; text-decoration: none">Here's a cool fact about engineers</a></h3>
            <div id="hidden" class="collapse">
                <p>text text text</p>
                <p>texttexttext</p>
            </div>
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