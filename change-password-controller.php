<?php
include("DBModel.php");
session_start();
if(isset($_POST["CurrentPass"] , $_POST["NewPass"],$_POST["ConfirmPass"] )  )
{
	$db=new DemoDBCode;
	$user=$_SESSION["UserSess"];
	$pass=$_POST["CurrentPass"];
	$r=$db->checkUserLogin($user, $pass);
	
	if($r==0)
	{
		header("Location:change-password.php?msge=invalid");
	}		
	else
	{
		if($_POST["NewPass"]==$_POST["ConfirmPass"])
		{
			$newpass=$_POST["NewPass"];
			$r=$db->updateUserPassword($user,$newpass);
			if($r==0)
			{
				header("Location:change-password.php?msge=failconfirmation");
			}
			else
			{
				header("Location:change-password.php?msge=suc");
			}
		}
		else
		{
			header("Location:password.php?msge=failconfirmation");
			
		}
	}

}



?>