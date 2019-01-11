<?php
include("DBModel.php");

	if(isset($_POST["login_user"]) && isset($_POST["login_pass"]))
	{
		$user=$_POST["login_user"];
		$pass=$_POST["login_pass"];
		
		$db=new DemoDBCode;
		$r=$db->checkUserLogin($user,$pass);
		if($r==0)
		{
			header("Location:index.php?msg=invalid");
		}
		else
		{
			session_start();
			$_SESSION["UserSess"]=$user;
			header("Location:index.php");
		}
	}
	else
	{
		header("Location:index.php");
	}
?>