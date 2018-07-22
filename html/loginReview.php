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
    <link rel="stylesheet" href="../css/loginReview.css" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">

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
                <li><a href="loginaboutUs.php">ABOUT</a></li>
                <li><a href="#">REPORT</a></li>
                <li class="active"><a href="loginReview.php">REVIEWS</a></li>
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
 <div class="text-justify" align="center" style="font-family: 'Black Han Sans',sans-serif; font-size: 130%;background: linear-gradient(to right, #0066cc 0%, #66ff99 100%);">
            <?php
                session_start();
                //if(isset($_SESSION['u_id'])){
                 echo strtoupper ("HEY! HI ".$_SESSION['u_first']."  :)");
                //}
            ?>
 </div>
<div class="container-fluid "  style="background-image: linear-gradient(to left bottom, #0066cc, #0095ee, #00beea, #00e2c8, #66ff99)"><br><br>
     <h1 style="font-family: 'Knewave', cursive; font-size: 500%; color: #FFF"><center> #  HONEST USER REVIEWS</center></h1><br><br><br><br><br><br><br><br><br>

        <div class="row">
            <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/jonathan.jpg"class="img-responsive" id="icon">
            </div>
            <div class="col-md-2 col-sm-12" >
                <h2 class="h2design" >JONATHAN BOB</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px" >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/joseph.jpg" class="img-responsive" id="icon">
            </div>
            <div class="col-md-2 col-sm-12" >
                <h2 class="h2design" >JOSEPH SINGH</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px" >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                 texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div>

                <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/ahan.jpg" class="img-responsive" id="icon">
            </div>
            <div class="col-md-2 col-sm-12" >
                <h2 class="h2design" >AHAN FERNS</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px"  >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextte
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div>
            
     </div><br><br><br><br><br><br><br><br><br>
     <div class="row">
            <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/harun.jpg"class="img-responsive" id="icon">
            </div>
            <div class="col-md-4 col-sm-12" >
                <h2 class="h2design" >HARUN JOE</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px" >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/rajshakar.jpg" class="img-responsive" id="icon">
            </div>
            <div class="col-md-4 col-sm-12" >
                <h2 class="h2design" >RAJ SHANKAR</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px" >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                 texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div>
        </div><br><br><br><br><br><br><br><br><br>
    
      <div class="row">
            <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/freddy.jpg"class="img-responsive" id="icon">
            </div>
            <div class="col-md-2 col-sm-12" >
                <h2 class="h2design" >FREDDY POLY</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px" >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/jthin.jpg" class="img-responsive" id="icon">
            </div>
            <div class="col-md-2 col-sm-12" >
                <h2 class="h2design" >JITHIN THOMAS</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px" >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                 texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div>

                <div class="col-md-2 col-sm-12">
                <img src="../Homeimg/varghese.jpg" class="img-responsive" id="icon">
            </div>
            <div class="col-md-2 col-sm-12" >
                <h2 class="h2design" >VARGHESE</h2>
                <p class="text-justify" style="font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 17px"  >"texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextt
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextte
                    texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext"</p>
            </div><br><br><br><br><br><br><br><br><br>
            <div class="container-fluid">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <form class="form-container">    
            <div class="form-group">
            <textarea class="form-control" style="min-width: 100%;color: #FFF; background-color: transparent;font-size: 30px;border-width: small;border-color: black; text-align: center;margin-left: 0% ;height: 20vh; font-family: 'Black Han Sans',sans-serif, cursive;
                " type="text" id="form1" class="md-textarea form-control" rows="15" placeholder="REVIEW US :)" name="ans"></textarea><br>
            </div>
            <button type="submit" name="submit" class="btn" style="background-color: transparent;float: right ;margin-bottom: 5vh">SUBMIT</button>
        </form>
    </div>
</div>
            
     </div><br><br><br><br>
     
    
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
