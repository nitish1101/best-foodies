<?php
session_start();
include("DBModel.php");
$db=new DemoDBCode;
	if(isset($_SESSION["UserSess"]))
	{
		if(isset($_POST["meal_name"],$_POST["date"],$_POST["feedback"],$_POST["userid"]))
		{	
			$id=$_POST["userid"];
			$date=$_POST["date"];
			$meal=$_POST["meal_name"];
			$fb=$_POST["feedback"];
			$r=$db->insertFeedbackDetails($id,$date,$meal,$fb);
			if($r>0)
			{
				header("Location:feedback.php?msgf=suc");
			}
			else
			{
				header("Location:feedback.php?msgf=notsubmit");
			}
		}
		else
		{
			header("Location:feedback.php?msgf=fail");
		}
	}
	else
	{
		header("Location:feedback.php?msgf=asdf");
	}
?>