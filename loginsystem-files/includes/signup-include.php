<?php
//very first python script
if (isset($_POST['submit']))	{
	include_once 'db-include.php';

	$fname = $_REQUEST['fname'];//escape sequence for safety so users cant insert anything in the code
	$lname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$uid =  $_REQUEST['uid'];
	$pwd =  $_REQUEST['pwd'];
	$cpwd =  $_REQUEST['cpwd'];
	
	//handling error or Error Handlers
	//check for empty fields
	if (empty($fname) || empty($lname) || empty($email) || empty($uid) || empty($pwd) || empty($cpwd)){
		header("Location: ../signup_emptyFields.php");
		exit();
	}
	else{
		//if the characters in the name are valid(*handle the errors first)
		if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)){
			header ("Location: ../signup_validNames.php");
			exit();
		}
		else{
			//check it the email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup_invalidEmail");
				exit();
			}
			else {
				//check if passw matches cpassword
				if($pwd != $cpwd)	{
					header("Location: ../signup_passwordError");
					exit();
				}
				else {
					//Check if uid is unique 
					$sql = "SELECT * FROM users WHERE user_uid='$uid'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0){
						header("Location: ../signup_invalidUid.php");
						exit();
					}
					else {//all credientials valid
						//password hashing
						$pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
						//final insertion in the database
							$sql_ins = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)  VALUES ('$fname', '$lname', '$email', '$uid', '$pwdHash');";
							mysqli_query($conn, $sql_ins);
							header("Location: ../login.php");
							exit();
					}
				}
			}
		}
	}
}
else {
	header("Location: ./signup.php");
	exit();
}