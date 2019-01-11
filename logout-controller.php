<?php
	session_start();
	
	$_SESSION["UserSess"]="";
	session_destroy();
	header("Location:index.php");
?>