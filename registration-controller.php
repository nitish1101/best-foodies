<?php
include("DBModel.php");
	$db=new DemoDBCode;
	If(isset($_POST["R_Name"],$_POST["R_Address"],$_POST["R_City"],$_POST["R_Pin"],$_POST["R_Contact"],$_POST["R_Email"],$_POST["R_Password"]))
	{
		$name=$_POST["R_Name"];
		$address=$_POST["R_Address"];
		$city=$_POST["R_City"];
		$pin=$_POST["R_Pin"];
		$contact=$_POST["R_Contact"];
		$email=$_POST["R_Email"];
		$password=$_POST["R_Password"];
		$r=$db->insertUserDetails($name,$address,$city,$pin,$contact,$email,$password);
		if($r>0)
		{
			session_start();
			$_SESSION["UserSess"]=$email;
			header("Location:index.php?msg=suc");
		}
		else
		{
			header("Location:index.php?msg=fail");
		}
	}
	else
	{
		header("Location:index.php?msg=invalid");
	}


?>