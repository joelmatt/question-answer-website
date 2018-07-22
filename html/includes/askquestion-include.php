<?php
if(isset($_POST['submit'])){
	include_once'db-include.php';
	session_start();
	$ques = $_REQUEST['ques'];
	
	if(isset($_SESSION['u_id'])){
		$uid = $_SESSION['u_uid'];
	 }
	if(empty($ques) || empty($uid)){
	 	header("Location: ../qanda.php");
	 	exit();
	}
	$sql_ins = "INSERT INTO questions (ques, ques_uid) VALUES ('$ques','$uid');";
	mysqli_query($conn, $sql_ins);
	header("Location: ../qanda.php");
	exit();
}

else {
	header("Location: ../qanda.php");
	exit();
}