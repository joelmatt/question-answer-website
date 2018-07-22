<?php
session_start();
if(isset($_POST['submit']))	{
	include 'db-include.php';

	//knowing the entered variables
	$uid = $_REQUEST['uid'];
	$pwd = $_REQUEST['pwd'];

	//Error Handling
	//check if the input is empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../login_error.php");
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE user_uid= '$uid' OR user_email='$uid';";
		$result= mysqli_query($conn, $sql);
		$resultCheck= mysqli_num_rows($result);
		 if($resultCheck < 1){
		 	header("Location: ../login_error.php");
		 	exit();
		}
		else {
			if($row=mysqli_fetch_assoc($result)){
				//de-hash the password and then compare
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false){
		 			header("Location: ../login_error.php");
		 			exit();
		 		}
				elseif ($hashedPwdCheck == true) {
					//we use else if if the value turns out to be a value than a boolean
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../../html/loginHome.php");					
					exit();
				}
			}
		}
	}
}
else {
	header("Location: ../login_error.php");
	exit();
}

