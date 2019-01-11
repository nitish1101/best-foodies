<?php
	If(isset($_POST["name"],$_POST["email"],$_POST["comment"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		
		$msg=$_POST["comment"];
		$header="From:asf@gmail.com";
		$message= $msg."\n Name: ".$name;
		$message= $msg."\n Email: ".$email."\n ";
		mail("abc.gmail.com","", $message ,$header);
		
		header("Location:contact.php?msgc=suc");
	}
	else
	{
		header("Location:contact.php?msgc=fail");
	}
?>