<?php
if (isset($_POST['submit'])){
	session_start();
	session_unset();//only the data is truncated here
	session_destroy();//whole session is destroyed
	header("Location: ../home.html");
	exit();
}
