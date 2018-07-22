<?php
if(isset($_POST['submit'])){
	include_once'db-include.php';
	
	$ques_id = $_COOKIE["ques_id"];
	$ans = $_REQUEST['ans'];
	// echo($ques_id);
	$uid = $_COOKIE["u_uid"];
	 if (empty($ques_id)){
	 	header("Location: ../qandafuck.php");
	 	exit();
	 }
	if(empty($ans) || empty($uid)){
	 	header("Location: ../qandafu.php");
	 	exit();
	}
	$sql_ins = "INSERT INTO answers(ques_id,ans, ans_uid) VALUES ('$ques_id','$ans','$uid');";
	mysqli_query($conn, $sql_ins);
	header("Location: ../qanda.php");
	exit();
}

else {
	header("Location: ../qanda.php");
	exit();
}