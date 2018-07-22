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
    <link rel="stylesheet" href="../css/qanda.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   <style>
    .quest{
        text-align:left;
        padding-top:5px;
        padding-bottom: 0px;
        padding-left:35%;
        margin-top: 20px;
        } 
        .question{
            color: #FFF;
        }
        .question:hover{
            text-decoration: none;
            color: #66FF99;
            font-size:120%;
        }
        .quid{
        text-align:right;
        font-size:16px;
        opacity: 0.5;
        padding-right:40%;
        padding-top: 0%;
        }
    </style>
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
                <li><a href="loginReview.php">REVIEWS</a></li>
                <li><a href="#">SUB-INFO</a></li>
                <li class="active"><a href="qanda.php">Q&A</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form action="includes/logout-include.php" method="POST">
                    <li><button class="logout-btn" type="submit" name="submit">LOG OUT</button></li>
                </form>
            </ul>
        </div>
    </div>
</nav>
<div class=" container-fluid text-justify" style="font-family: 'Black Han Sans',sans-serif; font-size: 200%">
     <?php
        session_start();
        if(isset($_SESSION['u_id'])){
            echo strtoupper ("HEY! HI ".$_SESSION['u_first'].":)" ."<div style='text-align: center'>QUESTION EVERYTHING</div>");
        }
    ?>
</div>
<div class="container-fluid" style="background-image: linear-gradient(to left bottom, #0066cc, #0095ee, #00beea, #00e2c8, #66ff99)">  
<div class="container-fluid"> 
    <?php
         $conn = mysqli_connect("localhost", "root", "", "loginsystem");
        if(isset($_SESSION['u_id'])){
        $uid = $_SESSION['u_uid'];
         }
        $ques=$_GET['ques'];
        $ques_id=$_GET['ques_id'];
        $ques_uid=$_GET['ques_uid'];
        echo "<h1 style='text-align: center; margin-top:3%;padding-bottom: 0%; margin-bottom: 0px;padding-bottom: 2%;font-family: Black Han Sans,sans-serif; color: #263238; font-size: 350%; color: #FFF;'><center>$ques<center></h1><br><br>";  
        $ti=time()+(60*60*24*7);
        setcookie("ques_id",$ques_id,$ti);
        setcookie("u_uid",$uid,$ti);
        $sql = "SELECT ans,ans_uid,ques_id FROM answers WHERE ques_id='$ques_id';";
        $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);
         if($resultCheck > 0) {
         while($row = mysqli_fetch_assoc($result)) {
            $ans=$row['ans'];
            $ans_uid=$row['ans_uid'];
            echo "<h2 style='text-align: center; margin-top:0%;padding-bottom: 0%; margin-bottom: 0px;padding-bottom: 2%;font-family: Abril Fatface, cursive; font-size: 200%; color: #FFF; margin-left: 0%'>$ans</h2>";
            echo "<h4  style='font-family: Yellowtail, cursive; font-size: 150%; text-align: right;margin-right: 40%; padding-top: 0%'>'------------$ans_uid</h4>";
         }
        }
        ?>
</div>


<div class="container-fluid">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <form class="form-container" action="includes/getanswers-include.php?<?php echo $ques_id; ?>&" method="POST">    
            <div class="form-group">
            <textarea class="form-control" style="min-width: 100%;color: #FFF; background-color: transparent;font-size: 30px;border-width: small;border-color: black; text-align: center;margin-left: 0% ;height: 20vh; font-family: 'Black Han Sans',sans-serif, cursive;
                " type="text" id="form1" class="md-textarea form-control" rows="15" placeholder="ANSWER THIS QUESTION" name="ans"></textarea><br>
            </div>
            <button type="submit" name="submit" class="btn" style="background-color: transparent;float: right ;margin-bottom: 3vh">SUBMIT</button>
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
