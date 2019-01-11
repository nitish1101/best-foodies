<?php
include("DBModel.php");
	$db=new DemoDBCode;
	if(isset($_POST["Emailid"]))
	{
			$email=$_POST["Emailid"];
			$name=$_POST["E_Name"];
			$address=$_POST["E_Address"];
			$city=$_POST["E_City"];
			$Pin=$_POST["E_Pin"];
			$contact=$_POST["E_Contact"];
			
			$r=$db->updateprofile($email,$name,$address,$city,$Pin,$contact);
			
			if($r>0)
			{
				header("Location:profile.php?msgp=suc");
			}
			else
			{
				header("Location:profile.php?msgp=fail");
			}
	}
	else
	{
		header("Location:profile.php?msgp=invalid");
	}

?>