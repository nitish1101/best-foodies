<?php
include("DBModel.php");
$db=new DemoDBCode;
	if(isset($_POST["ch_Email"]))
	{
		$email=$_POST["ch_Email"];
		$rows=$db->getUserDetails($email);
		
		if($r=mysqli_fetch_array($rows))
		{
			$email=$_POST["ch_Email"];
	
			$msg="your password is :".$r["Password"];
			$header="From:asf@gmail.com";
			mail($email,"", $msg ,$header);
			
			header("Location:forgot-password.php?msgr=suc");
		}
		else
		{
			header("Location:forgot-password.php?msgr=invalid");
		}
		 
	}
	else 
	{
		header("Location:forgot-password.php?msgr=fail");
	}

?>