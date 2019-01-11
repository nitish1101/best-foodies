<?php
session_start();
include("DBModel.php");
$db=new DemoDBCode;
if(isset($_SESSION["UserSess"]))
{	
		$day=$_POST["dayid"];	
		switch($_POST["dayid"])
		{
			case "Monday":
			{
				$day="Tuesday";
				break;
			}
			case "Tuesday":
			{
				$day="Wednesday";
				break;
			}
			case "Wednesday":
			{
				$day="Thursday";
				break;
			}
			case "Thursday":
			{
				$day="Friday";
				break;
			}
			case "Friday":
			{
				$day="Saturday";
				break;
			}
			case "Saturday":
			{
				$day="Sunday";
				break;
			}
			
		}
		$a=1;
		$r=0;
		while(isset($_POST["mealid".$a]))
		{
			if(isset($_POST["checkbox".$a]))
			{
				
				if($_POST["checkbox".$a]=="on")
				{
					$user=$_POST["userid"];
					$Mid=$_POST["mealid".$a];
					$Pid=$_POST["priceid".$a];
					$did=$_POST["dtid".$a];
					$r=$db->insertDayWiseBooking($user,$did,$Mid,$Pid);
				}
			}
			
			$a=$a+1;
		}
		if($_POST["dayid"]=="Sunday")
		{
			header("Location:select-meal-submit.php");
		}
		else
		{
			if($r>0)
			{
				header("Location:select-meal.php?day=".$day."&msgsm=suc");
			}
			else
			{
				header("Location:select-meal.php?day=".$day."&msgsm=fail");
			}
		}
}	
else
{
	header("Location:Select-meal.php?day=Monday");
}
?>