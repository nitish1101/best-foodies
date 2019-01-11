<?php
include("DBModel.php");
 session_start();
	$db=new DemoDBCode;
	If(isset($_GET["op"]))
	{
		if($_GET["op"]=="add")
		{
			if(isset($_FILES["uImage"]))
			{
				$fileName=$_FILES["uImage"]["name"];
				$temp=$_FILES["uImage"]["tmp_name"];
				$path="images/userpic/".$fileName;
				move_uploaded_file($temp, $path);
				$r=$db->insertUserImage($_SESSION["UserSess"],$path);
				if($r>0)
				{
					header("Location:user-image.php?msgi=suc");
				}
				else
				{
					header("Location:user-image.php?msgi=fail");
				}
			}
			
		}
		else if($_GET["op"]=="update")
		{
			if(isset($_FILES["uImage"]))
			{
				$fileName=$_FILES["uImage"]["name"];
				$temp=$_FILES["uImage"]["tmp_name"];
				$path="images/userpic/".$fileName;
				move_uploaded_file($temp,$path);
				$r=$db->updateUserImage($_SESSION["UserSess"],$path);
				if($r>0)
				{
					header("Location:user-image.php?msgi=suc");
				}
				else
				{
					header("Location:user-image.php?msgi=fail");
				}
			}
		}
	}
	else
	{
		header("Location:index.php?msg=invalid");
	}


?>